# 🗺️ Ruta Maestra Frontend: 500 Ejercicios

Hoja de ruta estructurada de práctica técnica para dominar el desarrollo frontend con tecnologías web nativas (HTML5, CSS3 y JavaScript vanilla), sin frameworks ni dependencias externas.

Parte del repositorio **[Aprendiendo HTML5, CSS3 y JavaScript](../Readme.md)** — ciclo formativo de **Desarrollo de Aplicaciones Web (DAW)**.

---

[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/es/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/es/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/es/docs/Web/JavaScript)
[![DAW](https://img.shields.io/badge/Ciclo%20Formativo-DAW-blue?style=for-the-badge)](https://www.educacionybecas.com/daw/)

---

## 📖 Tabla de Contenidos

- [🎯 Propósito](#-propósito)
- [🗺️ Mapa de Fases](#-mapa-de-fases)
- [📂 Organización del Repositorio](#-organización-del-repositorio)
- [🛠️ Estándar por Ejercicio](#️-estándar-por-ejercicio)
- [📐 Convención de Commits](#-convención-de-commits)
- [📊 Progreso General](#-progreso-general)
- [🔗 Navegación](#-navegación)

---

## 🎯 Propósito

Este itinerario agrupa **500 ejercicios progresivos distribuidos en 5 fases técnicas**, diseñados para consolidar los fundamentos del desarrollo frontend desde cero:

| Objetivo | Descripción |
| :--- | :--- |
| **Fundamentos canónicos** | Dominar HTML5 semántico, maquetación CSS moderna y ECMAScript (ES6+). |
| **Enfoque práctico y progresivo** | Resolver retos de código incrementales organizados por fases. |
| **Preparación profesional** | Buenas prácticas de accesibilidad (WCAG/ARIA), rendimiento, diseño responsivo y manipulación del DOM. |

> Todo el código se escribe con tecnologías web nativas del navegador, sin transpiladores, bundlers ni frameworks de terceros.

---

## 🗺️ Mapa de Fases

| Fase | Rango | Enfoque Principal | Tecnologías Clave | Estado |
| :---: | :---: | :--- | :--- | :---: |
| **Fase 1** | `001 - 100` | Cimientos de HTML5 Semántico, Accesibilidad y CSS Básico | HTML5, ARIA, CSS Box Model, Formularios | [0%] |
| **Fase 2** | `101 - 200` | Layouts Modernos, Responsive Design y Fundamentos JS | Flexbox, CSS Grid, ES6 Basics, Media Queries | [0%] |
| **Fase 3** | `201 - 300` | Manipulación del DOM, Eventos y Animaciones CSS | DOM API, Keyframes, Custom Events, UI Dinámica | [0%] |
| **Fase 4** | `301 - 400` | JS Asíncrono, Web APIs y Componentes UI Complejos | Fetch API, Async/Await, Web Storage, Intersection Observer | [0%] |
| **Fase 5** | `401 - 500` | JS Avanzado, Rendimiento y Proyectos Full Frontend | POO, Patrones de diseño, Profiling, Mini-Apps completas | [0%] |

---

## 📂 Organización del Repositorio

```text
Aprendiendo Html, Css y JS/
├── Readme.md                                      # Índice principal del repositorio
└── Ruta Maestra Frontend/
    ├── Readme.md                                  # Esta hoja de ruta
    ├── Fase-1/                                    # Ejercicios 001 al 100
    │   └── Readme.md
    ├── Fase-2/                                    # Ejercicios 101 al 200
    │   └── Readme.md
    ├── Fase-3/                                    # Ejercicios 201 al 300
    │   └── Readme.md
    ├── Fase-4/                                    # Ejercicios 301 al 400
    │   └── Readme.md
    └── Fase-5/                                    # Ejercicios 401 al 500 (pendiente)
        └── Readme.md
```

---

## 🛠️ Estándar por Ejercicio

Cada ejercicio debe contener su propia carpeta aislada para garantizar modularidad:

```text
ejercicio-001/
├── index.html   # Estructura semántica HTML5
├── styles.css   # Estilos específicos del ejercicio
├── app.js       # Lógica JavaScript (si aplica)
└── README.md    # Enunciado, conceptos clave, trampas comunes y soluciones
```

---

## 📐 Convención de Commits (Conventional Commits)

Mantén un historial de Git limpio y profesional:

| Tipo | Uso | Ejemplo |
| :--- | :--- | :--- |
| `feat` | Nueva funcionalidad o ejercicio completado | `feat(fase1): add semantic markup for exercise 005` |
| `fix` | Corrección de errores | `fix(fase2): correct flex-wrap behavior on mobile navbar` |
| `docs` | Documentación | `docs(fase3): document event bubbling vs capturing in exercise 210` |
| `refactor` | Refactorización sin cambios de comportamiento | `refactor(fase4): migrate fetch promises to async/await` |
| `style` | Formato sin cambios de lógica | `style(fase1): format HTML indentation` |
| `test` | Pruebas (si aplica) | `test(fase2): add responsive breakpoint checks` |

```bash
git commit -m "feat(fase1): add semantic markup for exercise 005"
```

---

## 📊 Progreso General

- [ ] **Fase 1 (001 - 100):** Cimientos de HTML5 y CSS Básico `[0%]`
- [ ] **Fase 2 (101 - 200):** Layouts, Responsive y JS Fundamental `[0%]`
- [ ] **Fase 3 (201 - 300):** DOM, Eventos y Animaciones `[0%]`
- [ ] **Fase 4 (301 - 400):** Asincronía, Web APIs y Componentes `[0%]`
- [ ] **Fase 5 (401 - 500):** JS Avanzado, Optimización y Proyectos `[0%]`

---

## 🔗 Navegación

- [← Volver al índice principal del repositorio](../Readme.md)
- [📁 Fase 1: Cimientos HTML5 y CSS](./Fase-1/Readme.md)
- [📁 Fase 2: Layouts y Fundamentos JS](./Fase-2/Readme.md)
- [📁 Fase 3: DOM, Eventos y Animaciones](./Fase-3/Readme.md)
- [📁 Fase 4: JS Asíncrono y Web APIs](./Fase-4/Readme.md)
- [📁 Fase 5: JS Avanzado y Proyectos](./Fase-5/Readme.md)