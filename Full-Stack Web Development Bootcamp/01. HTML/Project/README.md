# 📄 Capstone Project 1: Online Resume (Pure HTML5)

> Proyecto de cierre del bloque de HTML del curso **The Complete Full-Stack Web Development Bootcamp** de Angela Yu (The App Brewery).

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![Status](https://img.shields.io/badge/Status-Completed-success?style=for-the-badge)
![Deployment](https://img.shields.io/badge/GitHub_Pages-Deployed-blue?style=for-the-badge&logo=github)

---

## 🌐 Demo en Vivo

- **Despliegue:** [Ver Online Resume en GitHub Pages](https://pabloconde03.github.io/aprendiendo-lenguajes/Full-Stack%20Web%20Development%20Bootcamp/capstone-project-1-resume/)
*(Ajusta la URL si la ruta exacta en tu repositorio cambia).*

---

## 📌 Contexto del Proyecto

Este proyecto actúa como hito de evaluación final para la sección de fundamentos web. El objetivo principal es construir un sitio web personal multipágina que funcione como currículum profesional interactivo, cumpliendo con la restricción estricta de **usar exclusivamente HTML5** (sin CSS externo ni JavaScript), aprovechando toda la semántica nativa del navegador.

---

## 🎯 Requisitos y Especificaciones Técnicas

- [x] **Estructura Estándar:** Documento tipado con `<!DOCTYPE html>`, sección `<head>` y título descriptivo (`<title>My Resume</title>`).
- [x] **Semántica y Jerarquía:** Uso estricto de encabezados jerárquicos (`<h1>`, `<h2>`, `<h3>`), párrafos (`<p>`) y reglas horizontales (`<hr />`).
- [x] **Estructura de Contenidos:**
  - Declaración de objetivos / Resumen profesional (`Summary`).
  - Educación formal y cronología académica (`Education`).
  - Experiencia laboral y responsabilidades en listas desordenadas (`<ul>`, `<li>`).
  - Competencias y habilidades técnicas (`Skills`).
  - Certificaciones y logros destacados (`Certifications & Achievements`).
- [x] **Elementos Multimedia:** Foto de perfil integrada mediante `<img>` con rutas relativas y atributo `alt` accesible.
- [x] **Navegación Multipágina:** Enlaces relativos (`<a>`) hacia páginas secundarias (`hobbies.html` y `contact.html`).
- [x] **Pie de Página Semántico:** Elemento `<footer>` con autoría, avisos de copyright y entidades HTML (`&copy;`).
- [x] **Despliegue:** Publicación continua en producción usando **GitHub Pages**.

---

## 📂 Estructura de Archivos

```plaintext
capstone-project-1-resume/
│
├── assets/
│   └── images/
│       └── profile.jpg       # Fotografía de perfil optimizada
│
├── public/
│   ├── contact.html          # Información de contacto y formulario/enlaces
│   └── hobbies.html          # Intereses y aficiones personales
│
├── index.html                # Página principal del currículum
└── README.md                 # Documentación técnica del proyecto