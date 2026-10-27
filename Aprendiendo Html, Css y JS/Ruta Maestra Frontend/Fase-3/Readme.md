# ⚡ Fase 3: DOM, Eventos y Animaciones CSS (201 - 300)

En la Fase 3 convertirás interfaces estáticas en experiencias interactivas y dinámicas mediante el API nativo del DOM de JavaScript y la orquestación de animaciones CSS fluidas a 60 FPS.

# 🎯 Objetivos de Aprendizaje

Dominar la manipulación limpia del DOM (createElement, DocumentFragment, closest, matches).

Implementar el patrón de Delegación de Eventos (Event Delegation) para un rendimiento óptimo de memoria.

Validar formularios en el cliente en tiempo real con RegEx y el API de validación nativa (checkValidity).

Construir transiciones y secuencias de @keyframes para microinteracciones visuales profesionales.

# 📂 Estructura de la Fase

Fase-3-DOM-Eventos-Animaciones/
├── Readme.md (este archivo)
├── 01-Manipulacion-del-DOM/           # Ejercicios 201 al 230
├── 02-Gestion-de-Eventos/             # Ejercicios 231 al 260
├── 03-Validacion-de-Formularios/      # Ejercicios 261 al 280
└── 04-Animaciones-y-Transiciones-CSS/ # Ejercicios 281 al 300


# 📋 Lista de Ejercicios

201-230: Manipulación del DOM

[ ] 201: Selección de elementos individuales mediante document.getElementById y document.querySelector.

[ ] 202: Selección de múltiples elementos mediante document.querySelectorAll y conversión de NodeList a Array.

[ ] 203: Modificación de contenido textual seguro mediante textContent e innerText.

[ ] 204: Modificación e inserción de marcados HTML mediante innerHTML.

[ ] 205: Lectura y modificación de atributos HTML estándar con getAttribute, setAttribute y removeAttribute.

[ ] 206: Manipulación de atributos de datos nativos mediante la propiedad dataset.

[ ] 207: Gestión de clases CSS con classList: add, remove, toggle y contains.

[ ] 208: Modificación directa de estilos en línea mediante la propiedad style.

[ ] 209: Creación e inserción de nuevos elementos dinámicos mediante createElement y appendChild.

[ ] 210: Insertar elementos en posiciones exactas mediante insertBefore e insertAdjacentElement.

[ ] 211: Eliminación de nodos del DOM mediante removeChild y el método moderno remove().

[ ] 212: Reemplazo directo de nodos usando replaceChild.

[ ] 213: Clonación de nodos simples y profundos con cloneNode(true).

[ ] 214: Navegación hacia nodos padres utilizando parentNode y parentElement.

[ ] 215: Navegación hacia elementos hijos utilizando children, firstElementChild y lastElementChild.

[ ] 216: Navegación entre elementos hermanos utilizando previousElementSibling y nextElementSibling.

[ ] 217: Búsqueda del ancestro más cercano que cumpla con un selector CSS mediante closest().

[ ] 218: Verificación de correspondencia de un elemento con un selector mediante matches().

[ ] 219: Creación eficiente de múltiples nodos fuera del DOM principal utilizando DocumentFragment.

[ ] 220: Generación dinámica de una lista sin ordenar a partir de un array de datos.

[ ] 221: Creación e inserción de una tabla dinámica de productos desde un objeto JavaScript.

[ ] 222: Alteración visual de una tarjeta al hacer clic mediante la conmutación de clases.

[ ] 223: Construcción de un contador visual con botones para incrementar, decrementar y reiniciar.

[ ] 224: Alternador de visibilidad para mostrar u ocultar contraseña de un formulario.

[ ] 225: Medición precisa de dimensiones de elementos en pantalla mediante getBoundingClientRect().

[ ] 226: Modificación de variables CSS (Custom Properties) desde JavaScript en tiempo de ejecución.

[ ] 227: Limpieza total del contenido interno de un contenedor de forma eficiente.

[ ] 228: Creación dinámica de un aviso flotante estilo Toast Notification.

[ ] 229: Generación de un menú de navegación dinámico a partir de las secciones presentes en la página.

[ ] 230: Reordenación en vivo de elementos de una lista según su atributo de datos.

231-260: Gestión de Eventos
[ ] 231: Registro de escuchadores de eventos mediante addEventListener y eliminación con removeEventListener.

[ ] 232: Captura del objeto evento (e) para inspeccionar la propiedad target y type.

[ ] 233: Prevención de comportamientos predeterminados de navegador mediante preventDefault().

[ ] 234: Control de la propagación de eventos: detención con stopPropagation().

[ ] 235: Implementación del patrón de Delegación de Eventos (Event Delegation) en listas dinámicas.

[ ] 236: Detección de eventos de clic del ratón (click, dblclick, contextmenu).

[ ] 237: Manejo de eventos de entrada y salida del cursor (mouseenter, mouseleave, mouseover, mouseout).

[ ] 238: Rastreo de coordenadas en movimiento del puntero con mousemove.

[ ] 239: Control de focos de elementos con los eventos focus, blur, focusin y focusout.

[ ] 240: Captura de pulsaciones de teclas mediante los eventos keydown, keyup e inspección de e.key.

[ ] 241: Detección de modificaciones en campos de texto en tiempo real con el evento input.

[ ] 242: Detección de cambios de selección firmes mediante el evento change.

[ ] 243: Manejo del evento submit en formularios para interceptar el procesamiento.

[ ] 244: Detección del desplazamiento de la página usando el evento scroll sobre window.

[ ] 245: Detección del cambio de dimensión de la ventana de visualización mediante el evento resize.

[ ] 246: Manejo del evento de carga del DOM inicial mediante DOMContentLoaded.

[ ] 247: Creación y disparo explícito de eventos personalizados usando CustomEvent y dispatchEvent.

[ ] 248: Detección de pérdida y recuperación de conexión a Internet (online y offline).

[ ] 249: Arrastrar y soltar básico utilizando los eventos dragstart, dragover y drop.

[ ] 250: Creación de un menú contextual personalizado desactivando el menú nativo por clic derecho.

[ ] 251: Implementación de un buscador de elementos en vivo que filtra la lista al escribir.

[ ] 252: Construcción de una lupa de aumento para imágenes que sigue la posición del puntero.

[ ] 253: Indicador de porcentaje de lectura en la parte superior de la página según el desplazamiento.

[ ] 254: Sistema de calificación por estrellas interactivo mediante estados del ratón.

[ ] 255: Bloqueo de entrada en formularios limitando la escritura a caracteres estrictamente numéricos.

[ ] 256: Teclado en pantalla interactivo que detecta las pulsaciones físicas del usuario.

[ ] 257: Galería de imágenes desplegable con navegación mediante las teclas de flecha.

[ ] 258: Detección de inactividad de usuario tras un tiempo determinado sin interacciones.

[ ] 259: Botón flotante para regresar arriba que aparece tras desplazar una distancia determinada.

[ ] 260: Dibujo libre básico en lienzo reutilizando eventos de arrastre del puntero.

261-280: Validación de Formularios con JS
[ ] 261: Intercepción de formulario y validación campo a campo sin enviar la página.

[ ] 262: Mensajes de error personalizados generados e insertados dinámicamente.

[ ] 263: Validación de formatos de email mediante expresiones regulares (RegEx).

[ ] 264: Verificación en tiempo real de la fortaleza de una contraseña (longitud, símbolos, números).

[ ] 265: Confirmación de coincidencia de contraseñas en campos duplicados.

[ ] 266: Formateador automático para campos de tarjetas de crédito agregando espacios cada cuatro dígitos.

[ ] 267: Formateador automático para números de teléfono en formato internacional.

[ ] 268: Limitador dinámico de caracteres restantes en áreas de texto multilínea (<textarea>).

[ ] 269: Validación de límites de fecha impidiendo seleccionar días anteriores a la fecha actual.

[ ] 270: Campo de selección de archivos con validación del tamaño máximo en Megabytes.

[ ] 271: Campo de selección de archivos con validación de dimensiones de imagen.

[ ] 272: Deshabilitación visual y lógica del botón de envío hasta que todos los datos sean válidos.

[ ] 273: Resaltado de borde en verde o rojo en tiempo real según el estado de validez del campo.

[ ] 274: Validación de casilla de verificación de términos y condiciones de servicio.

[ ] 275: Uso de la API nativa de validación HTML5 desde JavaScript (checkValidity() y reportValidity()).

[ ] 276: Modificación de los mensajes de error del sistema usando setCustomValidity().

[ ] 277: Creación de un formulario por pasos (Multi-step Form) con validación independiente por etapa.

[ ] 278: Auto-completado de campos de dirección a partir de un código postal simulado.

[ ] 279: Limpieza y reinicio controlado del formulario con confirmación de seguridad.

[ ] 280: Formulario con procesamiento interactivo, animación de carga y confirmación de recepción.

281-300: Animaciones y Transiciones CSS
[ ] 281: Definición de transiciones suaves con transition-property, duration, timing-function y delay.

[ ] 282: Efecto de escalado y elevación de tarjetas interactivas mediante :hover y transform: translateY().

[ ] 283: Botones con efectos de subrayado animado expansivo desde el centro.

[ ] 284: Animación de rotación en 2D con transform: rotate() e inclinación con skew().

[ ] 285: Transformaciones geométricas en espacio tridimensional utilizando perspective y rotateX/Y.

[ ] 286: Tarjeta con efecto de giro sobre su propio eje (Flip Card) para mostrar contenido posterior.

[ ] 287: Definición de secuencias complejas de animación mediante la regla clave @keyframes.

[ ] 288: Animación en bucle infinito para indicadores de carga circulantes (Loaders).

[ ] 289: Indicador de carga de puntos suspensivos pulsantes usando retardos de animación (animation-delay).

[ ] 290: Efecto de aparición suave de elementos (Fade-In) combinando opacity y transform.

[ ] 291: Menú desplegable animado con apertura y cierre graduales.

[ ] 292: Animación de llamada a la atención (Pulse/Bounce) sobre botones de compra.

[ ] 293: Animación de barras de habilidades técnicas al cargar o enfocar la pantalla.

[ ] 294: Texto con efecto de escritura a máquina (Typewriter) mediante animación CSS pura.

[ ] 295: Transición fluida de colores de fondo al cambiar el tema de la aplicación.

[ ] 296: Creación de un acordeón interactivo con altura animada mediante CSS y conmutación de clases JS.

[ ] 297: Banner publicitario con imágenes deslizantes (Marquee) en movimiento continuo.

[ ] 298: Microinteracción visual sobre casillas de verificación animadas al marcarse.

[ ] 299: Ventana emergente (Modal) con animación de entrada elástica (Bounce In).

[ ] 300: Integración completa de transiciones y animaciones en una interfaz de usuario interactiva.