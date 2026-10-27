# 🌐 Fase 4: JS Asíncrono, Web APIs y Componentes UI (301 - 400)

Aborda la comunicación con servidores mediante HTTP y APIs REST, la persistencia en el navegador, las capacidades nativas avanzadas de los navegadores modernos y la creación de componentes UI complejos y accesibles.

Parte de la **[Ruta Maestra Frontend](../Readme.md)** — 500 ejercicios en 5 fases.

---

[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/es/docs/Web/JavaScript)
[![Fetch API](https://img.shields.io/badge/Fetch%20API-ASYNC-green?style=for-the-badge)](https://developer.mozilla.org/es/docs/Web/API/Fetch_API)
[![Web APIs](https://img.shields.io/badge/Web%20APIs-Native-blue?style=for-the-badge)](https://developer.mozilla.org/es/docs/Web/API)

---

## 📖 Tabla de Contenidos

- [🎯 Objetivos de Aprendizaje](#-objetivos-de-aprendizaje)
- [📂 Estructura de la Fase](#-estructura-de-la-fase)
- [📋 Lista de Ejercicios](#-lista-de-ejercicios)
- [🛠️ Estándar por Ejercicio](#️-estándar-por-ejercicio)
- [📊 Progreso](#-progreso)
- [🔗 Navegación](#-navegación)

---

## 🎯 Objetivos de Aprendizaje

Al completar esta fase serás capaz de:

- Comprender el Event Loop de JavaScript, promesas y la sintaxis `async/await` con control riguroso de errores (`try/catch`, `response.ok`).
- Implementar peticiones seguras con `fetch` (GET, POST, PUT, DELETE, `AbortController`, cabeceras de autenticación).
- Explotar Web APIs modernas: Web Storage, Geolocation, Clipboard, Canvas 2D e `IntersectionObserver`.
- Construir componentes de interfaz reutilizables cumpliendo patrones a11y (Modales, Pestañas, Carruseles, Datepickers).

---

## 📂 Estructura de la Fase

```text
Fase-4/
├── Readme.md (este archivo)
├── 01-Asincronia-y-Fetch-API/         # Ejercicios 301 al 330
├── 02-Web-APIs-del-Navegador/        # Ejercicios 331 al 360
└── 03-Componentes-UI-Interactivos/   # Ejercicios 361 al 400
```

---

## 📋 Lista de Ejercicios

### 301-330: Asincronía y Fetch API

[ ] 301: Fundamentos del bucle de eventos (Event Loop), pila de ejecución y cola de tareas en JS.

[ ] 302: Manejo de la asincronía mediante temporizadores nativos `setTimeout` y `setInterval`.

[ ] 303: Manejo de callbacks tradicionales y resolución del problema de anidación (Callback Hell).

[ ] 304: Creación de una Promesa personalizada (`new Promise((resolve, reject) => {})`).

[ ] 305: Consumo de Promesas encadenadas utilizando los métodos `.then()`, `.catch()` y `.finally()`.

[ ] 306: Conversión de funciones asíncronas tradicionales mediante la sintaxis `async` y `await`.

[ ] 307: Captura de errores en código asíncrono utilizando bloques `try...catch`.

[ ] 308: Solicitudes HTTP de tipo GET consumiendo una API pública mediante la API `fetch()`.

[ ] 309: Conversión de la respuesta HTTP a formato JSON nativo (`response.json()`).

[ ] 310: Renderizado dinámico de tarjetas de productos utilizando datos recuperados de una API externa.

[ ] 311: Solicitudes HTTP de tipo POST enviando datos estructurados en formato JSON.

[ ] 312: Realización de modificaciones parciales y totales con peticiones HTTP PUT y PATCH.

[ ] 313: Eliminación de recursos en servidores mediante solicitudes de tipo DELETE.

[ ] 314: Manejo visual de estados de carga (Loading Spinners) durante las solicitudes de red.

[ ] 315: Gestión de errores de red o códigos HTTP de fallo (ej. 404, 500) usando `response.ok`.

[ ] 316: Configuración de cabeceras HTTP personalizadas (`Headers`) en solicitudes de consulta.

[ ] 317: Autenticación mediante Tokens en cabeceras de autorización (`Authorization: Bearer`).

[ ] 318: Envío de formularios que contengan archivos adjuntos mediante la interfaz `FormData`.

[ ] 319: Ejecución simultánea de múltiples promesas independientes mediante `Promise.all()`.

[ ] 320: Resolución de la primera promesa completada mediante el método `Promise.race()`.

[ ] 321: Manejo colectivo de promesas que asegura la ejecución de todas con `Promise.allSettled()`.

[ ] 322: Cancelación de peticiones en curso utilizando la interfaz `AbortController`.

[ ] 323: Construcción de un buscador interactivo que realiza solicitudes dinámicas según el texto escrito.

[ ] 324: Carga de más registros paginados a través de botones de extensión de catálogo.

[ ] 325: Galería interactiva con obtención aleatoria de imágenes e información de usuario.

[ ] 326: Consulta dinámica del pronóstico del tiempo consumiendo una API meteorológica externa.

[ ] 327: Creación de una aplicación para consultar la cotización de criptomonedas en tiempo real.

[ ] 328: Interfaz de consulta de información detallada de países por búsqueda de texto.

[ ] 329: Descarga e importación dinámica de código de scripts en tiempo de ejecución.

[ ] 330: Aplicación de consulta de datos que implementa almacenamiento en memoria temporal (Cache).

### 331-360: Web APIs del Navegador

[ ] 331: Almacenamiento persistente de datos simples usando `localStorage` (`setItem`, `getItem`, `removeItem`).

[ ] 332: Almacenamiento temporal por sesión de usuario mediante `sessionStorage`.

[ ] 333: Guardado y lectura de estructuras complejas serializando datos con `JSON.stringify` y `JSON.parse`.

[ ] 334: Sincronización de estados entre múltiples pestañas mediante el evento `storage`.

[ ] 335: Obtención de coordenadas geográficas de un dispositivo utilizando la API `navigator.geolocation`.

[ ] 336: Representación de ubicaciones del usuario mediante mapas interactivos.

[ ] 337: Optimización de carga diferida de imágenes (Lazy Loading) con `IntersectionObserver`.

[ ] 338: Detección de visibilidad de secciones para activar animaciones al desplazarse.

[ ] 339: Implementación de despliegue infinito de contenido (Infinite Scroll) con Intersection Observer.

[ ] 340: Copia de texto directo al portapapeles utilizando la API `navigator.clipboard`.

[ ] 341: Lectura de datos desde el portapapeles del sistema previa autorización del usuario.

[ ] 342: Generación de alertas nativas del sistema operativo mediante la API `Notification`.

[ ] 343: Control de reproducción e intensidad de sonido mediante la API Web Audio.

[ ] 344: Reconocimiento de voz a texto utilizando la API `webkitSpeechRecognition`.

[ ] 345: Conversión de texto escrito a voz parlante mediante la API `speechSynthesis`.

[ ] 346: Detección de la orientación y movimiento físico del dispositivo mediante `DeviceOrientationEvent`.

[ ] 347: Uso de la API de Vibración (`navigator.vibrate`) para respuestas táctiles en móviles.

[ ] 348: Interceptor de estado de la batería mediante la API `navigator.getBattery`.

[ ] 349: Gestión del estado de la pantalla para evitar que se apague mediante la API Screen Wake Lock.

[ ] 350: Compartir contenidos dinámicos con aplicaciones nativas mediante la API `navigator.share`.

[ ] 351: Captura de imágenes fijas directamente desde la cámara web del usuario usando `getUserMedia`.

[ ] 352: Grabación de clips de audio desde el micrófono usando la interfaz `MediaRecorder`.

[ ] 353: Manipulación directa de imágenes en lienzo utilizando la API de Canvas 2D.

[ ] 354: Extracción de colores dominantes de una imagen mediante Canvas.

[ ] 355: Control del historial de navegación sin recargar la página mediante `history.pushState` y `popstate`.

[ ] 356: Almacenamiento e inspección de cookies de sesión mediante código JavaScript puro.

[ ] 357: Implementación de un temporizador en segundo plano que no pierde precisión mediante Web Workers.

[ ] 358: Medición de tiempos de ejecución de fragmentos de código mediante `performance.now()`.

[ ] 359: Detección de la velocidad de conexión a Internet a través de `navigator.connection`.

[ ] 360: Creación de una libreta de notas local completa guardando y recuperando datos en Web Storage.

### 361-400: Componentes UI Interactivos

[ ] 361: Diálogo modal accesible con atrapado de foco (Focus Trap) y cierre con la tecla Escape.

[ ] 362: Modal de confirmación genérico reutilizable que devuelve una Promesa con la respuesta.

[ ] 363: Menú desplegable (Dropdown) que se cierra automáticamente al hacer clic fuera del control.

[ ] 364: Acordeón interactivo (Accordion) que permite abrir una sola sección o múltiples simultáneamente.

[ ] 365: Sistema de pestañas de navegación (Tabs) accesible con soporte de navegación por teclado.

[ ] 366: Carrusel de imágenes táctil (Slider) con soporte para arrastre y navegación continua.

[ ] 367: Carrusel de imágenes con temporizador de reproducción automática e indicadores de posición.

[ ] 368: Cuadro de sugerencias (Tooltip) dinámico que recalcula su posición para evitar salirse de pantalla.

[ ] 369: Conmutador de tema claro/oscuro (Dark Mode) con detección automática y preferencia guardada.

[ ] 370: Barra de notificación flotante (Toast) con temporizador de desvanecimiento automático.

[ ] 371: Galería de imágenes estilo Lightbox con vista ampliada, navegación y botón de cierre.

[ ] 372: Menú lateral de navegación deslizante (Off-canvas Menu) para dispositivos móviles.

[ ] 373: Selector de rango doble interactivo para establecer filtros de precios (mínimo y máximo).

[ ] 374: Componente de tabla con ordenación de columnas ascendente y descendente mediante clics.

[ ] 375: Componente de tabla con paginación dinámica local de datos.

[ ] 376: Selector de fechas personalizado (DatePicker) maquetado y programado desde cero.

[ ] 377: Menú flotante desplegable activado por la selección de texto dentro de un párrafo.

[ ] 378: Selector multiorigen estilo Tag Input que convierte palabras en etiquetas independientes.

[ ] 379: Componente de vista previa interactiva antes de cargar una imagen de perfil.

[ ] 380: Indicador de estado de carga en la barra de navegación superior estilo YouTube.

[ ] 381: Visor comparativo de dos imágenes superpuestas mediante un control deslizante central.

[ ] 382: Visualizador de contraseñas con estimador visual de seguridad por colores.

[ ] 383: Formulario por fases (Wizard) con barra de progreso interactiva superior.

[ ] 384: Panel expansible que muestra más contenido al pulsar el botón "Leer más".

[ ] 385: Menú de árbol jerárquico (Tree View) con carpetas desplegables infinitas.

[ ] 386: Vista previa de contenido estilo esqueleto (Skeleton Screen) mientras cargan los datos.

[ ] 387: Interruptor interactivo tipo Toggle Switch accesible mediante teclado.

[ ] 388: Divisor de pantallas de dos paneles con ajuste de tamaño por arrastre central.

[ ] 389: Componente para valoración por estrellas con envío de puntuación.

[ ] 390: Menú contextual emergente personalizado fijado en la posición del puntero del ratón.

[ ] 391: Cuadro de búsqueda avanzada con historial de búsquedas recientes persistente.

[ ] 392: Selector de emojis personalizado que inserta caracteres en un área de texto.

[ ] 393: Tablero dinámico con elementos que se pueden reordenar arrastrándolos.

[ ] 394: Cuadro emergente interactivo que solicita confirmación antes de abandonar la página.

[ ] 395: Generador y visualizador dinámico de códigos QR a partir de texto introducido.

[ ] 396: Reproductor multimedia personalizado con controles propios de play, pausa y volumen.

[ ] 397: Módulo de comentarios en tiempo real con respuestas anidadas.

[ ] 398: Barra de anuncios superior descartable con estado de ocultación almacenado.

[ ] 399: Filtro de catálogo por múltiples atributos concurrentes (categoría, precio, calificación).

[ ] 400: Librería UI modular compilada con múltiples componentes interactivos reutilizables.

---

## 🛠️ Estándar por Ejercicio

Cada ejercicio debe contener su propia carpeta aislada para garantizar modularidad:

```text
ejercicio-301/
├── index.html   # Estructura semántica HTML5
├── styles.css   # Estilos específicos del ejercicio
├── app.js       # Lógica JavaScript (si aplica)
└── README.md    # Enunciado, conceptos clave, trampas comunes y soluciones
```

---

## 📊 Progreso

- [ ] Ejercicios 301-330: Asincronía y Fetch API
- [ ] Ejercicios 331-360: Web APIs del Navegador
- [ ] Ejercicios 361-400: Componentes UI Interactivos
- [ ] **Fase 4 completa (301 - 400): [0%]**

---

## 🔗 Navegación

- [← Volver a la Ruta Maestra Frontend](../Readme.md)
- [📁 Fase 3: DOM, Eventos y Animaciones →](./Fase-3/Readme.md)
- [📁 Fase 5: JS Avanzado y Proyectos →](./Fase-5/Readme.md)
- [🏠 Índice principal del repositorio](../../Readme.md)