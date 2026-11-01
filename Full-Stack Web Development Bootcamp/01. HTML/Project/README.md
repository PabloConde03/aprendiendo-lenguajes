# 📄 Capstone Project 1: Online Resume (Pure HTML5)

> Proyecto final de cierre del bloque **01. HTML** del curso **The Complete Full-Stack Web Development Bootcamp** de Angela Yu (The App Brewery).

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![Status](https://img.shields.io/badge/Status-Completed-success?style=for-the-badge)
![Deployment](https://img.shields.io/badge/GitHub_Pages-Deployed-blue?style=for-the-badge&logo=github)

---

## 🌐 Demo en Vivo

- **Despliegue:** [Ver Online Resume en GitHub Pages](https://pabloconde03.github.io/aprendiendo-lenguajes/Full-Stack%20Web%20Development%20Bootcamp/01.%20HTML/Project/)

---

## 📌 Contexto del Proyecto

Este proyecto actúa como evaluación práctica del módulo **01. HTML**. El objetivo es construir un currículum interactivo multipágina utilizando **únicamente HTML5 estándar**, prescindiendo de hojas de estilo (CSS) o scripts (JS), explotando la semántica nativa del navegador.

---

## 🎯 Especificaciones Técnicas

- [x] **Estructura Estándar:** Documento tipado con `<!DOCTYPE html>`, cabecera semántica y título descriptivo (`<title>My Resume</title>`).
- [x] **Semántica y Jerarquía:** Uso de títulos estructurados (`<h1>` a `<h3>`), párrafos (`<p>`) y divisores (`<hr />`).
- [x] **Contenidos Obligatorios:**
  - Resumen profesional / Declaración de objetivos (`Summary`).
  - Formación académica ordenada cronológicamente (`Education`).
  - Experiencia laboral con responsabilidades en listas desordenadas (`<ul>`, `<li>`).
  - Habilidades técnicas y competencias clave (`Skills`).
  - Certificaciones y reconocimientos (`Certifications & Achievements`).
- [x] **Elementos Multimedia:** Fotografía de perfil integrada en `<img />` con ruta relativa y texto alternativo descriptivo.
- [x] **Navegación Multipágina:** Enlaces relativos a páginas complementarias en la subcarpeta `public/` (`contact.html` y `hobbies.html`).
- [x] **Pie de Página Semántico:** Elemento `<footer>` con autoría, avisos de derechos reservados y entidades HTML (`&copy;`).

---

## 📂 Estructura del Directorio

```plaintext
Project/
│
├── assets/                  # Recursos estáticos (imágenes de perfil, íconos)
│
├── public/                  # Páginas secundarias del sitio
│   ├── contact.html         # Formas de contacto y perfiles web
│   └── hobbies.html         # Intereses y aficiones personales
│
├── index.html               # Página principal del currículum
└── README.md                # Documentación técnica del proyecto