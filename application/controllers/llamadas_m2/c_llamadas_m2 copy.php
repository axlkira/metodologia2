<?php
// Controlador para el módulo llamadas_m2
class C_llamadas_m2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('llamadas_m2/m_llamadas_m2');
        $this->load->model('m_principalhogar'); // Cargar el modelo de principal hogar
        $this->load->model('/logros/m_dimensiones'); // Cargar el modelo de dimensiones

        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }
    }

    public function gestion_hogar($folio) {
        $doccogestor = $this->session->userdata('documento');
        
        $data['hogar'] = $this->m_llamadas_m2->fm_obtener_hogar_por_folio($folio);

        // Asegurarse de que el hogar pertenece al cogestor actual (medida de seguridad)
        if (!$data['hogar'] || $this->m_llamadas_m2->fm_hogar_pertenece_a_cogestor($folio, $doccogestor) == 0) {
            // Si no se encuentra el hogar o no pertenece al cogestor, redirigir o mostrar error
            redirect('llamadas_m2/c_llamadas_m2');
            return; 
        }

        $logros = $this->m_dimensiones->fm_totalporcentajelogros($folio);
        $porceverd = 0;
        $porcegris = 0;
        if (!empty($logros)) {
            $porceverd = isset($logros[0]->porceverd) ? floatval($logros[0]->porceverd) : 0;
            $porcegris = isset($logros[0]->porcegris) ? floatval($logros[0]->porcegris) : 0;
        }
        $porcetotal = $porceverd + $porcegris;
        $data['porcentaje_total'] = round($porcetotal);
        $data['vista_actual'] = 'gestion'; // Para resaltar el menú correcto

        $this->load->view('llamadas_m2/v_gestion_hogares', $data);
    }

    public function index() {
        $this->load->library('pagination');
        $doccogestor = $this->session->userdata('documento');
        $filtro = $this->input->get('filtro', TRUE);

        // --- Configuración de Paginación con Segmentos de URI ---
        $config['base_url'] = site_url('llamadas_m2/c_llamadas_m2/index');
        $config['total_rows'] = $this->m_llamadas_m2->fm_contar_hogares($doccogestor, $filtro);
        $config['per_page'] = 8;
        $config['uri_segment'] = 4; // La paginación estará en el 4to segmento de la URI
        $config['use_page_numbers'] = TRUE; // Usar números de página como 1, 2, 3...
        $config['reuse_query_string'] = TRUE; // *** Clave para mantener el filtro al paginar ***

        // Estilos de paginación con Tailwind CSS y Heroicons
        $config['full_tag_open'] = '<nav aria-label="Page navigation"><ul class="inline-flex -space-x-px">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'Primero';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Último';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '<span class="sr-only">Siguiente</span><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '<span class="sr-only">Anterior</span><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><span aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50">';
        $config['cur_tag_close'] = '</span></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700');

        $this->pagination->initialize($config);

        // Calcular el offset basado en el segmento de la URI
        $page = ($this->uri->segment(4)) ? (int)$this->uri->segment(4) : 1;
        $offset = ($page - 1) * $config['per_page'];

        $lista_hogares_raw = $this->m_llamadas_m2->fm_listar_hogares_paginados($doccogestor, $config['per_page'], $offset, $filtro);

        $colores = [
            ['bg' => 'bg-indigo-100 dark:bg-indigo-500/20', 'text' => 'text-indigo-600 dark:text-indigo-400'],
            ['bg' => 'bg-purple-100 dark:bg-purple-500/20', 'text' => 'text-purple-600 dark:text-purple-400'],
            ['bg' => 'bg-green-100 dark:bg-green-500/20', 'text' => 'text-green-600 dark:text-green-400'],
            ['bg' => 'bg-blue-100 dark:bg-blue-500/20', 'text' => 'text-blue-600 dark:text-blue-400'],
            ['bg' => 'bg-pink-100 dark:bg-pink-500/20', 'text' => 'text-pink-600 dark:text-pink-400'],
            ['bg' => 'bg-amber-100 dark:bg-amber-500/20', 'text' => 'text-amber-600 dark:text-amber-400'],
        ];
        $color_index = 0;

        $hogares_procesados = [];
        if (!empty($lista_hogares_raw)) {
            foreach ($lista_hogares_raw as $hogar_raw) {
                $logros = $this->m_dimensiones->fm_totalporcentajelogros($hogar_raw->folio);
                $porceverd = 0;
                $porcegris = 0;
                if (!empty($logros)) {
                    $porceverd = isset($logros[0]->porceverd) ? floatval($logros[0]->porceverd) : 0;
                    $porcegris = isset($logros[0]->porcegris) ? floatval($logros[0]->porcegris) : 0;
                }
                $porcentaje_calculado = $porceverd + $porcegris;

                $nombre_completo = trim($hogar_raw->nombre1 . ' ' . $hogar_raw->nombre2 . ' ' . $hogar_raw->apellido1 . ' ' . $hogar_raw->apellido2);
                
                $hogares_procesados[] = [
                    'folio' => $hogar_raw->folio,
                    'nombre_familia' => 'Familia ' . $hogar_raw->apellido1,
                    'jefe_hogar' => $nombre_completo,
                    'inicial' => !empty($hogar_raw->apellido1) ? strtoupper(substr($hogar_raw->apellido1, 0, 1)) : 'H',
                    'porcentaje_total' => round($porcentaje_calculado), // Corregido para usar el valor correcto
                    'color' => $colores[$color_index % count($colores)]
                ];
                $color_index++;
            }
        }

        $data['hogares'] = $hogares_procesados;
        $data['titulo'] = 'Módulo de Llamadas M2';
        $data['pagination_links'] = $this->pagination->create_links();
        $data['filtro_actual'] = $filtro;

        $this->load->view('llamadas_m2/v_llamadas_m2', $data);
    }
}
