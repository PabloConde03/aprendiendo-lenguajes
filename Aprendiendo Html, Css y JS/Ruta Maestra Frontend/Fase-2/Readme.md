# 📐 Fase 2: Layouts Modernos y Fundamentos de JavaScript (101 - 200)

Domina los dos motores de maquetación modernos (Flexbox y CSS Grid), el Responsive Web Design y los fundamentos esenciales de JavaScript (ES6+) para crear interfaces adaptativas y profesionales.

Parte de la **[Ruta Maestra Frontend](../Readme.md)** — 500 ejercicios en 5 fases.

---

[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/es/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/es/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/es/docs/Web/JavaScript)
[![Responsive](https://img.shields.io/badge/Responsive-Mobile--First-green?style=for-the-badge)](https://developer.mozilla.org/es/docs/Web/CSS/CSS_media_queries)

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

- Dominar el comportamiento unidimensional de Flexbox y bidimensional de CSS Grid.
- Crear interfaces adaptativas fluidas utilizando Mobile-First y funciones matemáticas CSS (`clamp`, `min`, `max`).
- Aprender la sintaxis moderna de JavaScript: ámbito léxico, desestructuración, Spread/Rest y métodos nativos.
- Evitar trampas clásicas de herencia de layout y especificidad en media queries.

---

## 📂 Estructura de la Fase

```text
Fase-2/
├── Readme.md (este archivo)
├── 01-Flexbox-en-Profundidad/       # Ejercicios 101 al 130
├── 02-CSS-Grid-Layout/              # Ejercicios 131 al 160
├── 03-Responsive-Web-Design/        # Ejercicios 161 al 180
└── 04-Fundamentos-JavaScript-ES6/   # Ejercicios 181 al 200
```

---

## 📋 Lista de Ejercicios

### 101-130: Flexbox en Profundidad

[ ] 101: Configuración de contenedores con `display: flex` y comprensión de los ejes principal y cruzado.

[ ] 102: Dirección de elementos con `flex-direction` (row, row-reverse, column, column-reverse).

[ ] 103: Control de envoltura de elementos mediante `flex-wrap` (nowrap, wrap, wrap-reverse).

[ ] 104: Alineación en el eje principal usando `justify-content` (flex-start, center, space-between, etc.).

[ ] 105: Alineación en el eje cruzado usando `align-items` (stretch, flex-start, center, baseline).

[ ] 106: Alineación de múltiples líneas de contenido con `align-content`.

[ ] 107: Alteración del orden visual de los elementos mediante la propiedad `order`.

[ ] 108: Propiedad de crecimiento relativo de ítems mediante `flex-grow`.

[ ] 109: Propiedad de reducción relativa de ítems mediante `flex-shrink`.

[ ] 110: Control del tamaño base de elementos antes de la distribución con `flex-basis`.

[ ] 111: Uso de la propiedad abreviada `flex` (`flex: 1 0 auto`, `flex: initial`, `flex: auto`).

[ ] 112: Alineación individual de elementos específicos con `align-self`.

[ ] 113: Construcción de una barra de navegación fija con logotipo y enlaces distribuidos.

[ ] 114: Alineación de un elemento de texto e icono perfectamente al centro vertical y horizontal.

[ ] 115: Creación de una tarjeta de producto con pie de página fijado abajo usando `margin-top: auto`.

[ ] 116: Maquetación de una galería de tarjetas fluidas con envolvente automática.

[ ] 117: Creación de una plantilla Sticky Footer que se mantiene al final de la pantalla.

[ ] 118: Construcción de un diseño de tres columnas adaptables (Sidebar - Content - Sidebar).

[ ] 119: Formulario en línea con campo expandible y botón de tamaño fijo.

[ ] 120: Lista de mensajes tipo chat con burbujas alineadas a izquierda y derecha.

[ ] 121: Menú desplegable estructurado horizontalmente para pantallas anchas.

[ ] 122: Tarjetas de precios (Pricing Tables) destacando la columna central con flexbox.

[ ] 123: Sistema de comentarios con fotos de perfil alineadas a la izquierda del texto.

[ ] 124: Barra de estado con pasos consecutivos (Stepper UI) distribuidos de forma uniforme.

[ ] 125: Galería de imágenes estilo mazo de cartas superpuestas usando Flexbox y márgenes negativos.

[ ] 126: Cuadro de mando (Dashboard) con tarjetas de métricas en cuadrícula flexible.

[ ] 127: Paginación accesible con botones distribuidos uniformemente.

[ ] 128: Reproductor de audio con barra de progreso flexible y botones fijados en los extremos.

[ ] 129: Timeline vertical con hitos alineados mediante Flexbox.

[ ] 130: Maquetación completa de la interfaz de una aplicación web utilizando solo Flexbox.

### 131-160: CSS Grid Layout

[ ] 131: Inicialización de rejillas con `display: grid` y definición de columnas con `grid-template-columns`.

[ ] 132: Definición de filas de rejilla explícitas con `grid-template-rows`.

[ ] 133: Uso de la unidad de espacio fraccional `fr` para crear layouts proporcionales.

[ ] 134: Simplificación de código repetitivo usando la función `repeat()`.

[ ] 135: Control del espacio de separación entre celdas mediante `gap`, `row-gap` y `column-gap`.

[ ] 136: Posicionamiento explícito de elementos usando líneas numéricas (`grid-column-start`, `grid-column-end`).

[ ] 137: Sintaxis abreviada para posicionamiento de celdas (`grid-column: 1 / 3`, `grid-row: span 2`).

[ ] 138: Creación de áreas nombradas dentro de la rejilla con `grid-template-areas`.

[ ] 139: Asignación de elementos a áreas nombradas mediante la propiedad `grid-area`.

[ ] 140: Rejillas implícitas: control de filas/columnas automáticas con `grid-auto-rows` y `grid-auto-flow`.

[ ] 141: Control de límites de tamaño flexible usando la función `minmax()`.

[ ] 142: Rejilla adaptable dinámica sin media queries utilizando `repeat(auto-fill, minmax(...))`.

[ ] 143: Rejilla fluida ajustando elementos existentes utilizando `repeat(auto-fit, minmax(...))`.

[ ] 144: Alineación de celdas individuales dentro de la rejilla con `justify-self` y `align-self`.

[ ] 145: Alineación de todo el contenido de la rejilla con `justify-items` y `align-items`.

[ ] 146: Alineación del bloque completo de la cuadrícula con `justify-content` y `align-content`.

[ ] 147: Maquetación de un periódico digital clásico con titulares prominentes y múltiples columnas.

[ ] 148: Galería de imágenes asimétrica estilo Masonry combinando saltos de fila y columna.

[ ] 149: Plantilla de sitio web completa (header, nav, main, aside, footer) mediante `grid-template-areas`.

[ ] 150: Creación de una cuadrícula de imágenes interactiva estilo Instagram.

[ ] 151: Superposición de capas de contenido sin necesidad de posicionamiento absoluto (`position: absolute`).

[ ] 152: Formulario complejo de dos columnas que se transforma en una columna de forma nativa.

[ ] 153: Galería de productos con filtros laterales y cuadrícula dinámica de catálogo.

[ ] 154: Calendario mensual completo maquetado con una cuadrícula de 7 columnas.

[ ] 155: Tarjetas con contenido desplegable sobre rejillas anidadas.

[ ] 156: Uso de subredes con `subgrid` para alinear elementos hijos con la rejilla padre.

[ ] 157: Panel de control de administración con widgets de tamaños variables.

[ ] 158: Galería de pósteres de películas con relaciones de aspecto fijas.

[ ] 159: Tabla comparativa de datos compleja resuelta mediante CSS Grid.

[ ] 160: Layout híbrido combinando CSS Grid para la estructura general y Flexbox para componentes internos.

### 161-180: Responsive Web Design

[ ] 161: Implementación de la metaetiqueta `<meta name="viewport" content="width=device-width, initial-scale=1.0">`.

[ ] 162: Creación de reglas condicionales usando `@media` para pantallas con anchos específicos.

[ ] 163: Estrategia Mobile-First aplicando `@media (min-width: ...)` de menor a mayor.

[ ] 164: Estrategia Desktop-First aplicando `@media (max-width: ...)` de mayor a menor.

[ ] 165: Configuración de breakpoints estándar para móviles, tabletas, portátiles y monitores 4K.

[ ] 166: Tipografía fluida y escalable utilizando la función de sujeción `clamp(min, val, max)`.

[ ] 167: Uso de las funciones `min()` y `max()` en CSS para dimensiones adaptables de contenedores.

[ ] 168: Adaptación de imágenes y videos usando `max-width: 100%` y `height: auto`.

[ ] 169: Control de la relación de aspecto de medios interactivos mediante `aspect-ratio`.

[ ] 170: Ocultación y visualización condicional de elementos según el tamaño del dispositivo.

[ ] 171: Transformación de un menú horizontal superior en una barra de navegación inferior móvil.

[ ] 172: Transformación de tablas extensas en tarjetas de datos en pantallas pequeñas.

[ ] 173: Detección de orientación del dispositivo mediante `@media (orientation: landscape|portrait)`.

[ ] 174: Estilos específicos para impresión física mediante `@media print`.

[ ] 175: Detección de preferencias del sistema para modo oscuro mediante `@media (prefers-color-scheme: dark)`.

[ ] 176: Reorganización de bloques visuales prioritarios al cambiar de pantalla.

[ ] 177: Menú de navegación lateral deslizable mediante CSS puro y la técnica del checkbox.

[ ] 178: Optimización visual para pantallas de alta densidad de píxeles mediante `@media (-webkit-min-device-pixel-ratio: 2)`.

[ ] 179: Adaptación de formularios multicolumna a pantallas pequeñas sin perder el foco visual.

[ ] 180: Rediseño adaptativo completo de una página corporativa validado en múltiples dispositivos.

### 181-200: Fundamentos de JavaScript (ES6+)

[ ] 181: Inserción de scripts en HTML con los atributos `defer` y `async`.

[ ] 182: Declaración de variables: diferencias prácticas entre `var`, `let` y `const`.

[ ] 183: Trabajo con tipos de datos primitivos: string, number, boolean, null, undefined y symbol.

[ ] 184: Manipulación de cadenas mediante plantillas de literales (Template Literals).

[ ] 185: Operaciones matemáticas avanzadas con el objeto `Math` (round, floor, ceil, random).

[ ] 186: Estructuras condicionales: evaluación con `if`, `else if`, `else` y operador ternario.

[ ] 187: Evaluación de múltiples casos mediante la estructura `switch`.

[ ] 188: Bucles e iteración básica: `for`, `while` y `do...while`.

[ ] 189: Declaración de funciones tradicionales frente a expresiones de funciones flecha (`() => {}`).

[ ] 190: Definición de parámetros por defecto en funciones.

[ ] 191: Alcance de variables (Scope): global, de función y de bloque.

[ ] 192: Comprensión del fenómeno de elevación (Hoisting) en variables y funciones.

[ ] 193: Definición y manipulación de Arrays: métodos `push`, `pop`, `shift`, `unshift`.

[ ] 194: Definición y manipulación de Objetos Literales: propiedades y métodos asociados.

[ ] 195: Desestructuración (Destructuring) de arrays y objetos de forma sencilla.

[ ] 196: Uso del operador de propagación (Spread Operator) para clonar arrays y objetos.

[ ] 197: Uso del parámetro Rest (`...args`) en funciones con número indeterminado de argumentos.

[ ] 198: Evaluación de cortocircuito mediante los operadores lógicos `&&`, `||` y `??` (Nullish Coalescing).

[ ] 199: Verificación estricta de tipos e igualdad mediante `===` y `!==`.

[ ] 200: Creación de un script que evalúe y procese datos de entrada de usuario formateando el resultado en consola.

---

## 🛠️ Estándar por Ejercicio

Cada ejercicio debe contener su propia carpeta aislada para garantizar modularidad:

```text
ejercicio-101/
├── index.html   # Estructura semántica HTML5
├── styles.css   # Estilos específicos del ejercicio
├── app.js       # Lógica JavaScript (si aplica)
└── README.md    # Enunciado, conceptos clave, trampas comunes y soluciones
```

---

## 📊 Progreso

- [ ] Ejercicios 101-130: Flexbox en Profundidad
- [ ] Ejercicios 131-160: CSS Grid Layout
- [ ] Ejercicios 161-180: Responsive Web Design
- [ ] Ejercicios 181-200: Fundamentos de JavaScript (ES6+)
- [ ] **Fase 2 completa (101 - 200): [0%]**

---

## 🔗 Navegación

- [← Volver a la Ruta Maestra Frontend](../Readme.md)
- [📁 Fase 1: Cimientos HTML5 y CSS →](./Fase-1/Readme.md)
- [📁 Fase 3: DOM, Eventos y Animaciones →](./Fase-3/Readme.md)
- [🏠 Índice principal del repositorio](../../Readme.md)