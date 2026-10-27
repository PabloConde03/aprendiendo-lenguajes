# 🌐 Aprendiendo HTML5, CSS3 y JavaScript

Repositorio central de práctica técnica, ejercicios progresivos y proyectos de **Frontend Vanilla** (sin frameworks ni dependencias externas), estructurado para el ciclo formativo de **Desarrollo de Aplicaciones Web (DAW)**.

---

[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/es/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/es/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/es/docs/Web/JavaScript)
[![DAW](https://img.shields.io/badge/Ciclo%20Formativo-DAW-blue?style=for-the-badge)](https://www.educacionybecas.com/daw/)

---

## 📖 Tabla de Contenidos

- [🎯 Propósito del Repositorio](#-propósito-del-repositorio)
- [🗺️ Hoja de Ruta (Ruta Maestra Frontend)](#-hoja-de-ruta-ruta-maestra-frontend)
- [📂 Organización del Repositorio](#-organización-del-repositorio)
- [🚀 Comenzando](#-comenzando)
- [🛠️ Entorno de Desarrollo y Herramientas](#️-entorno-de-desarrollo-y-herramientas)
- [📐 Convenciones de Trabajo](#-convenciones-de-trabajo)
- [📊 Progreso por Fase](#-progreso-por-fase)
- [🤝 Contribución](#-contribución)
- [📄 Licencia](#-licencia)
- [📬 Contacto](#-contacto)

---

## 🎯 Propósito del Repositorio

Este repositorio está diseñado para consolidar los fundamentos del desarrollo frontend desde cero, mediante la resolución de ejercicios progresivos organizados en una hoja de ruta estructurada de **500 ejercicios distribuidos en 5 fases técnicas**.

Los objetivos principales son:

| Objetivo | Descripción |
| :--- | :--- |
| **Fundamentos canónicos** | Dominar la especificación nativa de HTML5 semántico, maquetación CSS moderna y ECMAScript moderno (ES6+). |
| **Enfoque práctico y progresivo** | Resolver retos de código incrementales organizados en una hoja de ruta estructurada. |
| **Preparación profesional** | Consolidar buenas prácticas de accesibilidad web (WCAG / ARIA), rendimiento, diseño responsivo y manipulación limpia del DOM. |

> **Enfoque:** todo el código se escribe con tecnologías web nativas del navegador, sin transpiladores, bundlers ni frameworks de terceros, para garantizar una comprensión sólida de los estándares abiertos de la plataforma web.

---

## 🗺️ Hoja de Ruta (Ruta Maestra Frontend)

El itinerario principal se encuentra en la carpeta `Ruta Maestra Frontend/` y está organizado en **5 fases técnicas**:

| Fase | Rango | Enfoque Principal | Tecnologías Clave | Estado |
| :---: | :---: | :--- | :--- | :---: |
| **Fase 1** | `001 - 100` | Cimientos de HTML5 Semántico, Accesibilidad y CSS Básico | HTML5, ARIA, CSS Box Model, Formularios | [0%] |
| **Fase 2** | `101 - 200` | Layouts Modernos, Responsive Design y Fundamentos JS | Flexbox, CSS Grid, ES6 Basics, Media Queries | [0%] |
| **Fase 3** | `201 - 300` | Manipulación del DOM, Eventos y Animaciones CSS | DOM API, Keyframes, Custom Events, UI Dinámica | [0%] |
| **Fase 4** | `301 - 400` | JS Asíncrono, Web APIs y Componentes UI Complejos | Fetch API, Async/Await, Web Storage, Intersection Observer | [0%] |
| **Fase 5** | `401 - 500` | JS Avanzado, Rendimiento y Proyectos Full Frontend | POO, Patrones de diseño, Profiling, Mini-Apps completas | [0%] |

👉 **[Ver hoja de ruta detallada →](./Ruta%20Maestra%20Frontend/Readme.md)**

---

## 📂 Organización del Repositorio

```text
Aprendiendo Html, Css y JS/
├── Readme.md                                      # Índice principal y guía de trabajo (este archivo)
└── Ruta Maestra Frontend/
    ├── Readme.md                                  # Desglose exhaustivo de los 500 ejercicios
    ├── Fase-1/
    │   └── Readme.md                              # Ejercicios 001 al 100
    ├── Fase-2/
    │   └── Readme.md                              # Ejercicios 101 al 200
    ├── Fase-3/
    │   └── Readme.md                              # Ejercicios 201 al 300
    └── Fase-4/
        └── Readme.md                              # Ejercicios 301 al 400
```

### Estructura estándar por ejercicio

Cada ejercicio debe contener su propia carpeta aislada para garantizar modularidad:

```text
ejercicio-001/
├── index.html   # Estructura semántica HTML5
├── styles.css   # Estilos específicos del ejercicio
├── app.js       # Lógica JavaScript (si aplica)
└── README.md    # Enunciado, conceptos clave, trampas comunes y soluciones
```

---

## 🚀 Comenzando

### Requisitos previos

Solo necesitas un navegador web moderno y un editor de código:

- **Navegador:** Chrome, Edge, Firefox o Safari (últimas versiones).
- **Editor:** [Visual Studio Code](https://code.visualstudio.com/) o [Cursor](https://cursor.sh/).

### Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/aprendiendo-html-css-js.git
cd aprendiendo-html-css-js
```

### Abrir un ejercicio

Navega a la carpeta del ejercicio que quieras practicar y abre el archivo `index.html` en tu navegador. Para una mejor experiencia de desarrollo, te recomendamos usar la extensión **Live Server** de VS Code.

---

## 🛠️ Entorno de Desarrollo y Herramientas

### Extensiones recomendadas (VS Code)

| Extensión | Propósito |
| :--- | :--- |
| **Live Server** | Servidor local de desarrollo con recarga automática (hot reload). |
| **Prettier - Code Formatter** | Formateo homogéneo de código HTML, CSS y JS. |
| **ESLint** | Análisis estático de sintaxis JavaScript. |
| **HTMLHint** | Validación y linting de marcado HTML. |
| **Stylelint** | Validación y linting de hojas de estilo CSS. |

---

## 📐 Convenciones de Trabajo

### Estructura estándar por ejercicio

Cada ejercicio debe contener su propia carpeta aislada para garantizar modularidad:

```text
ejercicio-001/
├── index.html   # Estructura semántica HTML5
├── styles.css   # Estilos específicos del ejercicio
├── app.js       # Lógica JavaScript (si aplica)
└── README.md    # Enunciado, conceptos clave, trampas comunes y soluciones
```

### Convención de Commits (Conventional Commits)

Mantén un historial de Git limpio y profesional siguiendo el estándar de commits convencionales:

| Tipo | Uso | Ejemplo |
| :--- | :--- | :--- |
| `feat` | Nueva funcionalidad o ejercicio completado | `feat(fase1): add semantic markup for exercise 005` |
| `fix` | Corrección de errores | `fix(fase2): correct flex-wrap behavior on mobile navbar` |
| `docs` | Documentación | `docs(fase3): document event bubbling vs capturing in exercise 210` |
| `refactor` | Refactorización sin cambios de comportamiento | `refactor(fase4): migrate fetch promises to async/await syntax` |
| `style` | Formato, punto y coma, etc. (sin cambios de lógica) | `style(fase1): format HTML indentation` |
| `test` | Pruebas (si aplica) | `test(fase2): add responsive breakpoint checks` |

Ejemplo de mensaje de commit:

```bash
git commit -m "feat(fase1): add semantic markup for exercise 005"
```

---

## 📊 Progreso por Fase

- [ ] **Fase 1 (001 - 100):** Cimientos de HTML5 y CSS Básico `[0%]`
- [ ] **Fase 2 (101 - 200):** Layouts, Responsive y JS Fundamental `[0%]`
- [ ] **Fase 3 (201 - 300):** DOM, Eventos y Animaciones `[0%]`
- [ ] **Fase 4 (301 - 400):** Asincronía, Web APIs y Componentes `[0%]`
- [ ] **Fase 5 (401 - 500):** JS Avanzado, Optimización y Proyectos `[0%]`

Actualiza los porcentajes a medida que completes los ejercicios de cada fase.

---

## 🤝 Contribución

Este es un repositorio de aprendizaje personal, pero las sugerencias son bienvenidas:

1. Haz un **fork** del repositorio.
2. Crea una rama para tu mejora: `git checkout -b mejora/descripcion`.
3. Realiza tus cambios y haz commit siguiendo las convenciones establecidas.
4. Abre un **Pull Request** describiendo los cambios realizados.

---

## 📄 Licencia

Este proyecto está bajo la **Licencia MIT**. Consulta el archivo `LICENSE` para más información.

---

## 📬 Contacto

- **Autor:** Pablo
- **Repositorio:** `Aprendiendo Html, Css y JS`
- **Ciclo formativo:** Desarrollo de Aplicaciones Web (DAW)

---

<p align="center">
  <strong>✨ Construyendo bases sólidas en desarrollo web frontend, un ejercicio a la vez.</strong>
</p>
