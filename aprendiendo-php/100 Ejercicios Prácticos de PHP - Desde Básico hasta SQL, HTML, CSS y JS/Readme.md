# 100 Ejercicios Prácticos de PHP: De Cero a Full Stack (HTML, CSS, JS y SQL)

Guía de aprendizaje práctico y estructurado para el desarrollo web backend y full stack con PHP.

---

## Tabla de Contenidos

- [Bloque 1: Fundamentos y Sintaxis Básica de PHP (Ejercicios 1 a 20)](#bloque-1-fundamentos-y-sintaxis-básica-de-php-ejercicios-1-a-20)
- [Bloque 2: Integración PHP con HTML y Gestión de Formularios (Ejercicios 21 a 40)](#bloque-2-integración-php-con-html-y-gestión-de-formularios-ejercicios-21-a-40)
- [Bloque 3: Integración PHP con CSS y Frontend Dinámico (Ejercicios 41 a 55)](#bloque-3-integración-php-con-css-y-frontend-dinámico-ejercicios-41-a-55)
- [Bloque 4: Integración PHP con JavaScript, JSON y AJAX (Ejercicios 56 a 70)](#bloque-4-integración-php-con-javascript-json-y-ajax-ejercicios-56-a-70)
- [Bloque 5: Integración PHP con Bases de Datos SQL (PDO y MySQL) (Ejercicios 71 a 85)](#bloque-5-integración-php-con-bases-de-datos-sql-pdo-y-mysql-ejercicios-71-a-85)
- [Bloque 6: Proyectos Integrales y Arquitectura Web Full Stack (Ejercicios 86 a 100)](#bloque-6-proyectos-integrales-y-arquitectura-web-full-stack-ejercicios-86-a-100)
- [Resumen del Itinerario Pedagógico](#resumen-del-itinerario-pedagógico)

---

## Bloque 1: Fundamentos y Sintaxis Básica de PHP (Ejercicios 1 a 20)

1. **Hola Mundo y Variables:** Declara variables de diferentes tipos (string, int, float, bool) e imprímelas combinadas en una sola salida mediante concatenación e interpolación.
2. **Operaciones Aritméticas:** Realiza un conversor de grados Celsius a Fahrenheit y Kelvin utilizando operadores aritméticos básicos.
3. **Condicional Simple (if/else):** Evalúa si un número entero determinado es par o impar utilizando el operador de módulo.
4. **Calculadora de Calificaciones (if/elseif/else):** Clasifica una nota numérica en suspenso, aprobado, notable o sobresaliente según rangos específicos.
5. **Estructura Switch:** Dado un número del 1 al 7, muestra el día de la semana correspondiente evaluando casos múltiples.
6. **Operador Ternario y Coalescencia Nula:** Simplifica la asignación de un valor predeterminado si una variable no está definida o resulta nula utilizando \??\ y \?:\.
7. **Bucle For:** Imprime la tabla de multiplicar completa de un número del 1 al 10 con formato estructurado.
8. **Bucle While:** Genera la secuencia matemática de Fibonacci de forma iterativa hasta que el valor calculado supere 100.
9. **Bucle Do-While:** Simula el lanzamiento sucesivo de un dado de 6 caras hasta obtener la puntuación máxima, contando los intentos requeridos.
10. **Array Indexado:** Crea un array de 10 números, calcula la suma total, la media aritmética y localiza los valores máximo y mínimo mediante funciones nativas.
11. **Bucle Foreach:** Recorre una lista de compras imprimiendo el índice asociativo y el nombre de cada producto.
12. **Array Asociativo:** Almacena información detallada de un producto (nombre, precio, stock, categoría) y genera su ficha técnica formateada.
13. **Funciones Personalizadas:** Crea una función reutilizable que calcule el área de un círculo recibiendo el radio como parámetro.
14. **Paso por Valor vs Paso por Referencia:** Diseña una función que modifique directamente una variable pasada por referencia utilizando el operador \&\.
15. **Manipulación de Strings:** Cuenta vocales, consonantes y la longitud total de un texto, transformándolo simultáneamente a mayúsculas y minúsculas.
16. **Validación de Email básica:** Comprueba si un string posee la estructura de un correo electrónico válido empleando expresiones regulares y funciones de cadena.
17. **Manejo de Fechas (DateTime):** Calcula la diferencia exacta expresada en días, meses y años entre dos fechas con la clase \DateTime\.
18. **Constantes y Scope:** Define constantes con \define()\ y \const\, y demuestra el uso de variables globales dentro de una función mediante \global\.
19. **Funciones de Array:** Filtra los números pares de un array usando \rray_filter\ y duplica sus valores resultantes con \rray_map\.
20. **Manejo de Errores y Excepciones:** Implementa una función de división que lance una \InvalidArgumentException\ si el divisor es cero, capturándola mediante un bloque \	ry-catch\.

---

## Bloque 2: Integración PHP con HTML y Gestión de Formularios (Ejercicios 21 a 40)

21. **Embeber PHP en HTML:** Genera una lista desordenada \<ul>\ dinámicamente iterando sobre un array de elementos en el servidor.
22. **Formulario GET:** Crea un formulario de búsqueda con método GET que capture y despliegue el término buscado en la misma vista.
23. **Formulario POST básico:** Implementa un formulario de inicio de sesión con campos de usuario y contraseña procesado mediante la superglobal \$_POST\.
24. **Sanitización y Validación con filter_input:** Valida que la edad enviada sea un número entero positivo y que el correo mantenga un formato correcto.
25. **Protección contra XSS:** Muestra datos enviados por un formulario pasando las cadenas por \htmlspecialchars()\ para neutralizar inyecciones de scripts.
26. **Persistencia en Campos (Sticky Forms):** Mantén los valores previamente introducidos por el usuario dentro de los campos \<input>\ si la validación del servidor detecta errores.
27. **Checkbox y Radio Buttons:** Procesa las opciones múltiples e individuales seleccionadas dentro de un formulario de preferencias personales.
28. **Select y Menús Desplegables:** Construye dinámicamente una etiqueta \<select>\ de países desde un array asociativo y procesa la opción elegida.
29. **Subida de Archivos Básica:** Construye un formulario de carga de imágenes validando el tamaño del archivo y la extensión permitida a través de \$_FILES\.
30. **Estructura Modular (include y require):** Separa la arquitectura visual de una página web modularizando \header.php\, \
av.php\, \content.php\ y \ooter.php\.
31. **Manejo de Sesiones ():** Inicia un contador de visitas persistente que se incremente automáticamente en cada recarga de la página.
32. **Control de Acceso Simple:** Protege una vista privada comprobando la existencia de la variable de sesión y redirigiendo al login si no está autenticado.
33. **Cierre de Sesión (Logout):** Implementa un script que limpie el array de sesión, destruya la cookie de sesión en el cliente y redirija al usuario.
34. **Gestión de Cookies ():** Almacena la preferencia de idioma seleccionada en una cookie local con una validez de 30 días.
35. **Formulario de Contacto:** Valida la obligatoriedad de los campos y la longitud mínima del mensaje, mostrando alertas de confirmación o error en el HTML.
36. **Generador Dinámico de Tablas:** Renderiza una tabla HTML \<table>\ procesando una matriz bidimensional con información académica de alumnos.
37. **Calculadora Web Completa:** Diseña una interfaz interactiva que ejecute operaciones aritméticas seleccionadas y entregue el resultado formateado.
38. **Descarga Forzada de Archivos:** Configura las cabeceras HTTP \Content-Disposition\ para forzar la descarga en el cliente de un archivo de texto generado al vuelo.
39. **Paginación en Memoria:** Segmenta una colección de 50 elementos en bloques navegables utilizando parámetros recibidos por GET.
40. **Encuesta Interactiva:** Procesa una serie de preguntas con opciones puntuadas, sumando y mostrando los resultados globales al completar el envío.

---

## Bloque 3: Integración PHP con CSS y Frontend Dinámico (Ejercicios 41 a 55)

41. **Inyección de Clases CSS Dinámicas:** Asigna clases \.aprobado\ o \.suspenso\ a elementos visuales según los valores calculados en el servidor.
42. **Modo Claro / Modo Oscuro con PHP y CSS:** Cambia la hoja de estilos vinculada en el \<head>\ evaluando la preferencia guardada en una cookie.
43. **Generación Dinámica de Propiedades CSS:** Modifica directamente variables CSS (\--primary-color\, \--font-size\) dentro de una etiqueta \<style>\ desde PHP.
44. **Alertas y Toasts Condicionales:** Genera cajas de notificación con clases contextuales (\success\, \warning\, \danger\) según la respuesta del procesamiento backend.
45. **Barras de Progreso Dinámicas:** Calcula proporciones en PHP y renderiza la propiedad \width\ inline dentro de barras de progreso HTML.
46. **Fichas de Productos (Cards):** Genera un grid de tarjetas mostrando distintivos visuales ("Oferta" o "Agotado") según las existencias del inventario.
47. **Paginador Estilizado:** Imprime enlaces de paginación aplicando de manera condicional la clase CSS \.active\ al número correspondiente a la página actual.
48. **Tabla con Filas Cebra y Ordenamiento Visual:** Alterna colores de fondo entre filas pares e impares y resalta visualmente la columna ordenada.
49. **Dashboard Widget Card:** Estructura componentes para métricas de panel de control con indicadores numéricos e iconos adaptables a distintas resoluciones.
50. **Formulario con Estados de Validación CSS:** Asigna estados visuales \.is-valid\ o \.is-invalid\ e inyecta los mensajes de error contextuales debajo de cada entrada de texto.
51. **Menú de Navegación con Indicador Activo:** Compara el script en ejecución con las rutas de los enlaces para marcar el ítem activo en la barra de navegación.
52. **Calendario Mensual Dinámico:** Dibuja una cuadrícula CSS con la distribución de días del mes en curso, destacando la fecha actual y los fines de semana.
53. **Galería de Imágenes con CSS Flexbox:** Lee el contenido de un directorio del servidor y distribuye las imágenes en una galería responsiva.
54. **Avatar Dinámico con Iniciales:** Extrae las iniciales de un usuario y genera una insignia circular con un color de fondo determinista derivado del texto.
55. **Generador de Facturas / Ticket con CSS Print:** Prepara un documento comercial con estilos específicos mediante \@media print\ para su exportación limpia a PDF.

---

## Bloque 4: Integración PHP con JavaScript, JSON y AJAX (Ejercicios 56 a 70)

56. **Pasar Variables de PHP a JavaScript:** Convierte estructuras de datos de PHP a formato JSON con \json_encode()\ para utilizarlas dentro del script del cliente.
57. **Endpoint API JSON Simple:** Configura la cabecera \Content-Type: application/json\ para servir información estructurada accesible desde clientes externos.
58. **Petición GET con Fetch API:** Consulta datos de un script PHP de forma asíncrona mediante la API Fetch de JavaScript y actualiza la interfaz sin recargar.
59. **Petición POST con Fetch y Datos JSON:** Envía un objeto JS con el método POST y captura el cuerpo de la solicitud en PHP leyendo el flujo \php://input\.
60. **Comprobación de Usuario en Tiempo Real:** Ejecuta una verificación asíncrona al perder el foco (blur) un campo de texto para determinar si un usuario ya existe.
61. **Selects Dependientes (País y Ciudad):** Solicita a PHP el listado de ciudades asociadas al seleccionar un país en el primer combo y actualiza el segundo dinámicamente.
62. **Buscador en Vivo (Live Search con Debounce):** Filtra y despliega resultados de búsqueda en tiempo real aplicando una técnica de retardo (debounce) para optimizar las peticiones.
63. **Formulario con Envío Asíncrono y Spinner:** Intercepta el evento de envío, despliega un indicador de carga animado y muestra la respuesta devuelta por el servidor.
64. **Eliminación con Confirmación Modal y AJAX:** Dispara un cuadro de diálogo interactivo antes de procesar la baja de un registro mediante peticiones asíncronas.
65. **Votación / Like en Tiempo Real:** Incrementa contadores de interacción enviando la acción al servidor y actualizando la cifra en el DOM inmediatamente.
66. **Generador de Gráficos con Chart.js:** Alimenta un componente gráfico en JavaScript procesando datos estadísticos obtenidos desde un script PHP.
67. **Subida de Archivos con Barra de Progreso:** Transfiere archivos al servidor mediante XMLHttpRequest midiendo el porcentaje completado para refrescar una barra visual.
68. **Paginación Infinita (Infinite Scroll):** Detecta el desplazamiento del usuario cerca del final del documento para solicitar y appendear nuevos bloques de contenido.
69. **Gestión de Respuestas HTTP y Códigos de Estado:** Retorna códigos estándar (200, 400, 404, 500) usando \http_response_code()\ y gestiona las excepciones desde JS.
70. **Carrito Temporal con LocalStorage y PHP:** Sincroniza la selección de artículos almacenados en el navegador con un endpoint de cálculo de impuestos y totales.

---

## Bloque 5: Integración PHP con Bases de Datos SQL (PDO y MySQL) (Ejercicios 71 a 85)

71. **Conexión Segura con PDO:** Establece la comunicación con una base de datos MySQL mediante la extensión PDO, configurando el manejo de errores por excepciones y el conjunto de caracteres UTF-8.
72. **Consulta Simple (SELECT con query):** Recupera y despliega el listado completo de elementos de una tabla ejecutando una sentencia directa.
73. **Sentencias Preparadas (Positional Placeholders):** Consulta registros filtrados utilizando marcadores de posición \?\ y vinculando parámetros de forma segura.
74. **Sentencias Preparadas con Named Placeholders:** Implementa marcadores con nombre (\:email\, \:estado\) ejecutando sentencias preparadas para prevenir inyecciones SQL.
75. **Inserción de Registros (INSERT):** Captura los datos recibidos de un formulario de alta y almacena la información en la base de datos.
76. **Actualización de Registros (UPDATE):** Diseña una vista de edición que recargue la información almacenada y aplique los cambios enviados sobre el registro.
77. **Eliminación Segura (DELETE):** Procesa la supresión de registros específicos validando y sanitizando el identificador numérico enviado.
78. **Obtención del Último ID Insertado:** Utiliza \$pdo->lastInsertId()\ para recuperar la clave primaria generada e insertar registros en tablas secundarias asociadas.
79. **Filtro y Búsqueda Avanzada con SQL:** Construye cláusulas \WHERE\ dinámicas en función de múltiples parámetros opcionales enviados desde el cliente.
80. **Paginación Directa desde SQL (LIMIT y OFFSET):** Optimiza la lectura de grandes volúmenes de datos delimitando el conjunto de resultados desde la misma consulta SQL.
81. **Transacciones en PDO:** Garantiza la integridad de la información agrupando ejecuciones con \eginTransaction()\, \commit()\ y \ollBack()\.
82. **Consultas con JOIN:** Relaciona estructuras complejas ejecutando combinaciones internas o externas entre tablas de clientes, pedidos y productos.
83. **Manejo de Fechas y Timestamp en SQL:** Filtra y agrupa información registral aplicando funciones de fecha nativas sobre campos de tipo \DATETIME\.
84. **Agregaciones y Agrupamiento (GROUP BY y COUNT):** Genera reportes estadísticos agregando totales y calculando promedios por categoría.
85. **Clase Singleton para Conexión a Base de Datos:** Encapsula el objeto PDO dentro de un patrón de diseño Singleton para centralizar y optimizar la conexión.

---

## Bloque 6: Proyectos Integrales y Arquitectura Web Full Stack (Ejercicios 86 a 100)

86. **CRUD Completo Modular (MVC Básico):** Construye una aplicación estructurada separando las responsabilidades en capas de Modelo, Vista y Controlador.
87. **Sistema de Autenticación Completo:** Implementa un flujo seguro de registro e ingreso utilizando \password_hash()\ y \password_verify()\ para el resguardo de credenciales.
88. **Recuperación de Contraseña con Token Temporal:** Genera claves criptográficas únicas con expiración en base de datos para simular el restablecimiento seguro de cuentas.
89. **Sistema de Roles y Permisos (RBAC):** Restringe la ejecución de acciones y la lectura de vistas en función del nivel de autorización asignado al usuario.
90. **Protección CSRF:** Crea y valida fichas aleatorias (tokens CSRF) en formularios de modificación para prevenir ataques de falsificación de solicitudes.
91. **Carrito de Compras con Persistencia:** Desarrolla la lógica para agregar, modificar cantidades y remover ítems manteniendo la información sincronizada.
92. **Checkout y Registro de Pedido Transaccional:** Procesa compras registrando cabeceras y detalles de pedido de forma atómica bajo una transacción SQL.
93. **Panel de Control (Admin Dashboard):** Integra indicadores métricos, gestión de tablas y componentes dinámicos con carga asíncrona dentro de un panel centralizado.
94. **Gestor de Tareas Kanban con Drag and Drop:** Diseña un tablero interactivo que actualice el estado de los elementos al arrastrarlos mediante eventos AJAX.
95. **Sistema de Comentarios y Valoraciones:** Permite publicar opiniones con calificaciones por estrellas, asegurando la sanitización previa del contenido enviado.
96. **Exportación de Datos a CSV y Excel:** Vuelca el resultado de una consulta SQL en un archivo formateado disponible para descarga inmediata.
97. **Importador de Datos Masivos desde CSV:** Lee e interpreta archivos planos subidos por el usuario para procesar la inserción masiva de registros.
98. **Buscador con Autocompletado AJAX:** Ofrece sugerencias en tiempo real mientras se escribe, desplegando opciones dinámicas traídas de la base de datos.
99. **API RESTful Completa para una Entidad:** Desarrolla una interfaz de servicios con soporte para GET, POST, PUT y DELETE respondiendo estructuradamente en JSON.
100. **Aplicación Web Integral de Gestión de Inventario:** Integra arquitectura MVC, autenticación, acceso a datos vía PDO, maquetación CSS adaptativa e interacciones asíncronas en un proyecto unificado.

---

## Resumen del Itinerario Pedagógico

| Bloque | Temática Principal | Tecnologías Involucradas | Nivel |
| :--- | :--- | :--- | :--- |
| Bloque 1 | Fundamentos y Sintaxis Básica | PHP CLI / Core | Inicial |
| Bloque 2 | Formularios y Peticiones Web | PHP, HTML5 | Elemental |
| Bloque 3 | Interfaz Dinámica y Estilos | PHP, HTML5, CSS3 | Intermedio |
| Bloque 4 | Comunicación Asíncrona | PHP, JS (ES6), JSON, AJAX | Avanzado |
| Bloque 5 | Persistencia de Datos | PHP (PDO), MySQL / SQL | Profesional |
| Bloque 6 | Arquitectura y Proyectos Full Stack | MVC, PHP, SQL, JS, CSS | Full Stack |

