# Visita Intermedia: Criterios y Condiciones

## ¿Qué es la Visita Intermedia?

La Visita Intermedia es una etapa especial en el proceso de acompañamiento familiar donde se evalúa el progreso del hogar después de haber completado ciertos criterios específicos en las estaciones de la Línea 2. Esta visita permite hacer un seguimiento particular antes de que el hogar continúe su progreso en el resto de las líneas del programa.

## Criterios Exactos para que un Hogar Pase a Intermedia

Un hogar (folio) se considera elegible para Visita Intermedia cuando cumple **simultáneamente** las siguientes condiciones:

### 1. Progreso en Logros
* Debe tener al menos **13 logros** en estado **VERDE** o **GRIS** en total
* Estos logros se calculan sumando los ítems de estos colores en todas las tablas de logros (del 7 al 31)

### 2. Estado Actual del Folio
* El folio debe estar actualmente en:
  * Línea 2 Estación 3 (`idestacion = 23`), o
  * Línea 2 Estación 6 (`idestacion = 26`)

### 3. Condiciones Adicionales
* El valor de `casilla` debe ser diferente de '9'
* Para ciertos casos en la Estación 26, hay combinaciones específicas de valores en `casilladf`, `foliointerhistor` y `momento_vi` que determinan si califica

## Visualización en la Interfaz de Usuario

Una vez que un folio es marcado con `intermedia = 1` en la base de datos, el controlador `c_principalhogar.php` aplica filtros adicionales para determinar exactamente qué folios se mostrarán en la pestaña de "Visita Intermedia" en la interfaz.

### Condiciones específicas para visualizar un folio en la pestaña de Visita Intermedia:

```php
if(($valor->idestacion == '23' && $valor->intermedia == '1' 
&& $valor->casilla <> '9' && $valor->casilladf == '')
 ||($valor->idestacion == '26' && $valor->intermedia == '1' 
 && $valor->casilla <> '9' && $valor->casilladf == '')
 ||($valor->idestacion == '26' && $valor->intermedia == '1' 
 && $valor->casilla <> '9' && ($valor->casilladf <> '' 
 && $valor->casilladf <> '9') && $valor->foliointerhistor == '' 
 && $valor->momento_vi <> '26')
 ||($valor->idestacion == '26' && $valor->intermedia == '1' 
 && $valor->casilla <> '9' && $valor->casilladf == '' 
 && $valor->foliointerhistor <> '' && $valor->momento_vi <> '26'))
```

Estas condiciones pueden traducirse como:

1. **Para folios en Línea 2 Estación 3 (idestacion = 23)**:
   * Debe tener `intermedia = 1`
   * La `casilla` debe ser diferente de '9'
   * La `casilladf` debe estar vacía

2. **Para folios en Línea 2 Estación 6 (idestacion = 26)**:
   * Caso 1:
     * Debe tener `intermedia = 1`
     * La `casilla` debe ser diferente de '9'
     * La `casilladf` debe estar vacía

   * Caso 2:
     * Debe tener `intermedia = 1`
     * La `casilla` debe ser diferente de '9'
     * La `casilladf` debe tener un valor pero diferente de '9'
     * El `foliointerhistor` debe estar vacío
     * El `momento_vi` debe ser diferente de '26'

   * Caso 3:
     * Debe tener `intermedia = 1`
     * La `casilla` debe ser diferente de '9'
     * La `casilladf` debe estar vacía
     * El `foliointerhistor` NO debe estar vacío
     * El `momento_vi` debe ser diferente de '26'

### Elementos de la Interfaz para Visita Intermedia:

Cuando un folio cumple con las condiciones anteriores, se muestra en la pestaña de "Visita Intermedia" con los siguientes elementos:

* **Información básica**: Folio, documento, nombres y apellidos
* **Botones de acción**:
  * Actualizar - Para modificar datos del hogar
  * Protocolo - Para realizar la visita (habilitado según días transcurridos)
  * Fichero - Para gestionar oportunidades
  * Logros calculados - Para ver los logros del hogar
  * Privaciones - Para gestionar privaciones
  * EERF - Para encuestas si corresponde

## Procedimientos Almacenados Utilizados

### 1. `spcondicionnecesaria`
* **Función**: Este procedimiento es el principal responsable de determinar si un folio califica para intermedia
* **Parámetros**: 
  * `pfolio` - El ID del folio (hogar) a evaluar
  * `pestacion` - La estación actual del folio
* **Operación**:
  * Verifica si el folio ya tiene `intermedia = 1` en algún registro
  * Calcula el total de logros en estado VERDE y GRIS para el folio
  * Verifica si los ingresos están validados en estaciones 23 o 26
  * Si cumple con tener al menos 13 logros y los ingresos validados, actualiza `intermedia = 1`

### 2. `sptraerintermedia`
* **Función**: Consulta el estado intermedia de un folio específico
* **Parámetros**:
  * `pfolio` - El ID del folio a consultar
* **Operación**:
  * Suma todos los valores del campo `intermedia` para el folio en la tabla `t_protocoloestacionestado`
  * Retorna esta suma como resultado

### 3. `splistatablafoliosvisitasiniciadas`
* **Función**: Genera información sobre folios con visitas iniciadas, incluyendo aquellos en intermedia
* **Operación**:
  * Consulta varias vistas que muestran fechas de últimas visitas
  * Compara fechas y estados para identificar folios en proceso

## Tablas Principales Involucradas

### 1. `t_protocoloestacionestado`
* Almacena el estado del folio en cada estación
* Campos relevantes:
  * `folio` - ID del hogar
  * `idestacion` - Código de la estación actual
  * `intermedia` - Indicador (0/1) si el folio está marcado para visita intermedia
  * `fecharegistro` - Fecha de registro del estado

### 2. `t2_condicionnecesaria`
* Almacena resultados de cálculos sobre logros por color
* Registra el conteo de logros por tipo y color para cada folio

### 3. `t2_ingresos`
* Almacena información sobre ingresos validados por estación
* El valor 1 en esta tabla indica que el folio tiene ingresos validados para una estación

### 4. `t4_logro7` hasta `t4_logro31`
* Tablas que almacenan los diferentes logros y sus estados (colores)
* El campo `colorlogroPF` indica el color del logro:
  * 0 = ROJO
  * 1 = VERDE
  * 2 = GRIS
  * 3 = AZUL
  * 4 = CAFE

### 5. `t1_principalhogar`
* Contiene información general del hogar
* Campos relevantes para intermedia:
  * `foliointerhistor` - Identificador de historial intermedio
  * `momento_vi` - Indicador del momento de visita intermedia
  * `doccogestor` - Documento del gestor asignado

## Flujo Completo para Visita Intermedia

1. El folio avanza en el programa y llega a Estación 23 o 26
2. Se registran y validan ingresos en la tabla `t2_ingresos`
3. Se evalúan los logros a través de los módulos correspondientes
4. El procedimiento `spcondicionnecesaria` se ejecuta para ese folio
5. Si cumple las condiciones (13+ logros VERDE/GRIS + ingresos validados), se actualiza `intermedia = 1`
6. El controlador `c_principalhogar` identifica este folio en la vista principal basado en las condiciones detalladas
7. El folio aparece en la pestaña "Visita Intermedia" en la interfaz con sus botones correspondientes

## Consulta para Identificar Folios Potenciales para Intermedia

```sql
SELECT 
    ph.folio, 
    pe.idestacion, 
    pe.intermedia,
    ph.momento_vi,
    ph.idintegrantetitular,
    ph.doccogestor,
    ph.foliointerhistor,
    (SELECT COUNT(*) FROM t2_condicionnecesaria 
     WHERE folio = ph.folio AND (color = 'VERDE' OR color = 'GRIS')) AS total_logros_verde_gris
FROM 
    t_protocoloestacionestado pe
JOIN 
    t1_principalhogar ph ON pe.folio = ph.folio
LEFT JOIN
    (SELECT folio, ingresos FROM t2_ingresos WHERE estacion IN ('23', '26')) as ing
    ON pe.folio = ing.folio
WHERE 
    ((pe.idestacion = 23 AND pe.intermedia = 1 AND ing.ingresos = 1)
     OR 
     (pe.idestacion = 26 AND pe.intermedia = 1 AND ing.ingresos = 1))
    AND NOT EXISTS (
        SELECT 1 
        FROM t_protocoloestacionestado 
        WHERE folio = pe.folio AND idestacion = 81
    );
```

## Relación entre Componentes MVC:

### 1. Modelo (`m_principalhogar.php`):
* Contiene la función `fm_datosintermedia` que llama al procedimiento `sptraerintermedia` para consultar el estado intermedia de un folio

### 2. Controlador (`c_principalhogar.php`):
* Filtra y procesa los folios marcados con intermedia = 1
* Aplica condiciones adicionales para decidir cuáles mostrar en la interfaz
* Construye el HTML para la tabla que muestra los folios en la pestaña de Visita Intermedia

### 3. Vista (`v_principalhogar.php`):
* Contiene la estructura de la pestaña "Visita Intermedia"
* Muestra los folios filtrados según las condiciones del controlador
* Presenta botones para realizar acciones específicas con cada folio

Este documento explica los criterios y condiciones para que un hogar pase a visita intermedia, basado en el análisis del código fuente, procedimientos almacenados y tablas del sistema. 

Elaborado por Alexander Muñoz Castro. 
Profesional de desarrollo.