# Explicación del Cálculo de Logros en el Sistema

## 1. ¿Qué son los logros?
Los "logros" representan metas o hitos que un hogar debe alcanzar dentro del proceso de acompañamiento familiar. Cada logro puede tener diferentes estados (colores), que indican su avance:
- **Rojo:** No alcanzado
- **Verde:** Alcanzado
- **Gris, Azul, Café, Blanco:** Otros estados según la lógica del sistema

## 2. Flujo de Cálculo y Visualización de Logros

### a. Vista: Paso 4 (Revisión y movimiento de logros-privaciones)
- El usuario pulsa el botón correspondiente al Paso 4.
- Se ejecuta la función JavaScript `paso4('2404')`, que redirige al controlador de logros:

```js
location.href = "../logros/c_dimensiones/fc_dimensiones?folio="+ $('#folio').val() + "&idintegrante=0"+ "&doccogestor=" + $('#doccogestor').val()+ "&idestacion=24";
```

### b. Controlador: `logros/c_dimensiones.php`
- Función principal: `fc_dimensiones`
- Recibe los parámetros: `folio`, `idintegrante`, `doccogestor`, `idestacion`.
- Llama al modelo para obtener el porcentaje de logros:

```php
$folioexisteporcen = $this->m_dimensiones->fm_totalporcentajelogros($folio);
```

- El resultado se almacena en un array con los siguientes campos:
  - `etotal`: Total de logros posibles
  - `etotalrojo`, `etotalverd`, `etotalgris`, `etotalazul`, `etotalcafe`, `etotalblan`: Cantidad de logros en cada estado
  - `eporcerojo`, `eporceverd`, etc.: Porcentaje de logros en cada estado

### c. Modelo: `m_dimensiones.php`
- Método clave: `fm_totalporcentajelogros($folio)`
- Este método consulta la base de datos para:
  - Contar el total de logros posibles para el hogar
  - Contar cuántos logros están en cada estado
  - Calcular el porcentaje de cada estado respecto al total

#### Ejemplo conceptual de consulta SQL:
```sql
SELECT 
  COUNT(*) as total,
  SUM(CASE WHEN color='verde' THEN 1 ELSE 0 END) as totalverd,
  (SUM(CASE WHEN color='verde' THEN 1 ELSE 0 END) / COUNT(*)) * 100 as porceverd,
  ...
FROM logros
WHERE folio = $folio
```

### d. Vista: `v_dimensiones.php`
- El resultado (`$foexisteporcen`) se pasa a la vista.
- Aquí se muestra el porcentaje de logros alcanzados (por ejemplo, el valor de `eporceverd`).


## 3. ¿Cómo saber si el hogar cumple con el 70% de los logros?
- El campo relevante es `eporceverd` (porcentaje de logros verdes).
- Si `eporceverd >= 70`, el hogar ha cumplido con el 70% de los logros.
- Puedes usar este valor para mostrar mensajes, habilitar botones o marcar el hogar como "cumplido" en la interfaz.


## 4. Resumen Visual del Flujo

1. **Vista (Paso 4)** → llama a JS → redirige a
2. **Controlador `c_dimensiones`** → llama a
3. **Modelo `m_dimensiones`** (`fm_totalporcentajelogros`) → consulta y calcula porcentajes → retorna a
4. **Controlador** → pasa datos a
5. **Vista `v_dimensiones`** → muestra porcentaje de logros


## 5. Consideraciones para Implementar Lógica de Cumplimiento
- Utiliza el valor de `eporceverd` para comparar contra el 70%.
- Puedes mostrar un mensaje, habilitar acciones o marcar el hogar como cumplido en la vista según ese valor.

---

**¿Dudas o necesitas ayuda para modificar la lógica o mostrar mensajes personalizados en la interfaz? ¡Pídelo!**
