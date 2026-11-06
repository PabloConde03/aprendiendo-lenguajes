![Made with HTML5](https://img.shields.io/badge/Made%20with-HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Responsive](https://img.shields.io/badge/Responsive-Yes-121212?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Completed-2EA44F?style=for-the-badge)
![HTML5](https://img.shields.io/badge/HTML5-Valid-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-Valid-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## Índice

- [Enunciado del Proyecto](#enunciado-del-proyecto-portal-dashboard-de-métricas-cloud)
- [Requisitos Técnicos](#requisitos-técnicos)
  - [1. Estructura HTML5 Semántica](#1-estructura-html5-semántica)
  - [2. Maquetación y Layout CSS3](#2-maquetación-y-layout-css3)
  - [3. Responsive Web Design (Mobile-First)](#3-responsive-web-design-mobile-first)
  - [4. Detalle Técnico e Interactividad CSS](#4-detalle-técnico-e-interactividad-css)
- [Entregables del Reto](#entregables-del-reto)

# Enunciado del Proyecto: Portal Dashboard de Métricas Cloud
Diseña e implementa una página estática para un panel de supervisión de servidores e infraestructura web utilizando exclusivamente HTML5 semántico y CSS3 puro (sin Bootstrap, Tailwind ni librerías JS).

Requisitos Técnicos

1. Estructura HTML5 Semántica
No estructures la página a base de `<div>` anidados sin sentido.

Utiliza la jerarquía correcta:

* **`<header>`** con título del proyecto y barra de utilidades/perfil.
* **`<nav>`** para la barra lateral o menú principal accesible (con lista no ordenada `<ul>` y enlaces `<a>`).
* **`<main>`** que envuelva el contenido central.
* **`<section>`** para agrupar bloques temáticos (ej. resumen de KPIs, lista de nodos/servidores, registro de eventos).
* **`<article>`** para elementos repetibles o tarjetas independientes (ej. métricas individuales de CPU, RAM, Latencia).
* **`<aside>`** para un panel lateral contextual (ej. avisos del sistema o logs rápidos).
* **`<footer>`** con datos de copyright, versión y enlaces secundarios.

---

2. Maquetación y Layout CSS3

**Contenedor Principal con CSS Grid:**
Define un layout general con `grid-template-areas` o columnas/filas explícitas para organizar: navegación, cabecera, contenido central (`main`), panel lateral (`aside`) y pie de página.

**Componentes con Flexbox:**
Alinea los elementos internos de las tarjetas (`article`), barras de navegación y cabeceras usando Flexbox (`align-items`, `justify-content`, `gap`).

**Sistema de Variables CSS
--- (`:root`):**
Define al menos 6 variables: paleta de colores (fondo primario, fondo tarjetas, texto principal, acento/brand, alertas), fuentes y radios de borde.

3. Responsive Web Design (Mobile-First)

Configura correctamente la metaetiqueta `viewport`.

Implementa al menos dos breakpoints (`@media queries`):

* **Móvil (< 768px):** Disposición en una única columna vertical, navegación colapsable o en bloque superior, tablas/tarjetas adaptadas.
* **Tablet (768px - 1024px):** Grid de 2 columnas para el contenido principal.
* **Escritorio (> 1024px):** Layout completo multipanel (sidebar fija/visible, grid de métricas a 3 o 4 columnas, panel lateral).

---

4. Detalle Técnico e Interactividad CSS

**Microinteracciones:** Transiciones suaves (`transition: all 0.2s ease`) en estados `:hover` y `:focus-visible` de botones, enlaces y tarjetas (efecto sutil de elevación con `box-shadow` o `transform: translateY()`).

**Estados de Accesibilidad:** Estilos claros y visibles para navegación mediante teclado (`:focus-visible`).

**Indicador de barra de uso:** Maqueta una barra de progreso nativa (`<progress>` estilizado o contenedor con barra interior mediante porcentaje de `width`) para el consumo de recursos.

Entregables del Reto

- **indexhtml** — Archivo con código limpio, indentado, validado según el estándar W3C y sin estilos en línea.
- **stylescss** — Hoja de estilos externa organizada por secciones (Reset/Base, Variables, Layout, Componentes, Media Queries).

![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)
![Version](https://img.shields.io/badge/Version-1.0-blue?style=for-the-badge)