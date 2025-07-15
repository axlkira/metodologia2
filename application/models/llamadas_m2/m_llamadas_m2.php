<?php
// Modelo para el módulo llamadas_m2
class M_llamadas_m2 extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('/logros/m_dimensiones'); // Cargar el modelo de dimensiones
    }

    public function fm_contar_hogares($doccogestor, $filtro = NULL) {
        $this->db->from('t1_principalhogar tp');
        $this->db->join('t1_principalintegrantes tc', 'tp.idintegrantetitular = tc.idintegrante', 'left');
        $this->db->where('tp.doccogestor', $doccogestor);

        if (!empty($filtro)) {
            $where_clause = "(`tp`.`folio` LIKE '%" . $this->db->escape_like_str($filtro) . "%' OR CONCAT_WS(' ', tc.nombre1, tc.nombre2, tc.apellido1, tc.apellido2) LIKE '%" . $this->db->escape_like_str($filtro) . "%')";
            $this->db->where($where_clause);
        }

        return $this->db->count_all_results();
    }

    public function fm_hogar_pertenece_a_cogestor($folio, $doccogestor) {
        $this->db->from('t1_principalhogar');
        $this->db->where('folio', $folio);
        $this->db->where('doccogestor', $doccogestor);
        return $this->db->count_all_results(); // Devuelve 1 si pertenece, 0 si no
    }

    public function fm_obtener_hogar_por_folio($folio) {
        $this->db->select('tp.folio, tp.idintegrantetitular, tc.nombre1, tc.nombre2, tc.apellido1, tc.apellido2');
        $this->db->from('t1_principalhogar tp');
        $this->db->join('t1_principalintegrantes tc', 'tp.idintegrantetitular = tc.idintegrante', 'left');
        $this->db->where('tp.folio', $folio);
        $query = $this->db->get();
        return $query->row(); // Devuelve una sola fila
    }

    public function fm_listar_hogares_paginados($doccogestor, $limit, $offset, $filtro = NULL) {
        $this->db->select('tp.folio, tc.nombre1, tc.nombre2, tc.apellido1, tc.apellido2');
        $this->db->from('t1_principalhogar tp');
        $this->db->join('t1_principalintegrantes tc', 'tp.idintegrantetitular = tc.idintegrante', 'left');
        $this->db->where('tp.doccogestor', $doccogestor);

        if (!empty($filtro)) {
            $where_clause = "(`tp`.`folio` LIKE '%" . $this->db->escape_like_str($filtro) . "%' OR CONCAT_WS(' ', tc.nombre1, tc.nombre2, tc.apellido1, tc.apellido2) LIKE '%" . $this->db->escape_like_str($filtro) . "%')";
            $this->db->where($where_clause);
        }

        $this->db->order_by('tp.folio', 'DESC');
        $this->db->limit($limit, $offset);

        $query = $this->db->get();
        $hogares = $query->result();

        // Añadir el porcentaje de progreso real a cada hogar
        if (!empty($hogares) && $this->m_dimensiones) {
            foreach ($hogares as $hogar) {
                $porcentaje_result = $this->m_dimensiones->fm_totalporcentajelogros($hogar->folio);
                $hogar->porcentaje_progreso_real = !empty($porcentaje_result) && isset($porcentaje_result[0]->total) ? $porcentaje_result[0]->total : 0;
            }
        }

        return $hogares;
    }
    
    /**
     * Guarda una nueva llamada en la base de datos
     * @param array $datos_llamada Arreglo con los datos de la llamada a guardar
     * @return boolean|integer Retorna el ID de la llamada si se guarda correctamente, o false en caso contrario
     */
    public function fm_guardar_llamada($datos_llamada) {
        try {
            $this->db->insert('t22_principal_llamadas', $datos_llamada);
            return $this->db->insert_id(); // Devuelve el ID insertado
        } catch (Exception $e) {
            log_message('error', 'Error al guardar llamada: ' . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Obtiene las llamadas registradas para un folio específico
     * @param string $folio Folio del hogar
     * @param integer $limite Opcional. Limita la cantidad de llamadas retornadas
     * @return array Listado de llamadas
     */
    public function fm_obtener_llamadas_por_folio($folio, $limite = 10) {
        $this->db->select('*');
        $this->db->from('t22_principal_llamadas');
        $this->db->where('folio', $folio);
        $this->db->order_by('fecha_hora', 'DESC'); // Más recientes primero
        
        if ($limite > 0) {
            $this->db->limit($limite);
        }
        
        $query = $this->db->get();
        return $query->result();
    }
}
