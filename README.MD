
# Proyecto Final - Programación Web

Este proyecto fue desarrollado como parte del curso de **Programación Web**, con el objetivo de aplicar los conocimientos adquiridos en tecnologías como **HTML, CSS, JavaScript, PHP y MySQL**. El sistema simula una librería en línea que permite consultar el listado de libros, autores y almacenar contactos desde un formulario.

## 📌 Objetivo

Desarrollar un portal web dinámico en español que utilice una base de datos MySQL con conexión mediante **PDO en PHP**, aplicando una arquitectura limpia y accesible al usuario final.

---

## 🛠️ Tecnologías Utilizadas

- HTML5  
- CSS3 (con Bootstrap)  
- JavaScript  
- PHP  
- MySQL  
- PDO (PHP Data Objects)  
- Hosting gratuito (InfinityFree)  

---

## 🔧 Funcionalidades del Proyecto

- Consulta del listado completo de libros disponibles en la librería.  
- Consulta del listado de autores registrados.  
- Formulario de contacto con almacenamiento en base de datos.  
- Base de datos importada y configurada localmente y en servidor remoto.  
- Estilo visual personalizado usando plantilla Bootstrap.  
- Todas las conexiones y consultas hechas con PDO.  
- Portal web completamente en español.

---

## 📁 Estructura Principal

- `/index.php` – Página principal con listado de libros  
- `/autores.php` – Página con listado de autores  
- `/contacto.php` – Página con formulario de contacto  
- `/css/` – Estilos personalizados  
- `/js/` – Scripts necesarios  
- `/db/` – Conexión PDO y configuración  
- `/sql/libreria.sql` – Archivo para importar la base de datos  

---

## 🗃️ Base de Datos

### Tablas principales:
- `libros`
- `autores`
- `contacto`

### Tabla `contacto` (almacena mensajes enviados desde el formulario):

| Campo     | Tipo     |
|-----------|----------|
| id        | INT      |
| fecha     | DATETIME |
| correo    | VARCHAR  |
| nombre    | VARCHAR  |
| asunto    | VARCHAR  |
| comentario| TEXT     |

---

## 🌐 Proyecto en Línea

Este proyecto está alojado en un servidor gratuito. Puedes visitarlo desde el siguiente enlace:

👉 [Ver Proyecto en InfinityFree](librriaproyectoweb.wuaze.com)

---

## 📚 Requisitos aprendidos y aplicados

- Conexión y consultas con **PDO**
- Métodos **GET y POST**
- Uso de `foreach`, `count()`, `sizeof()`
- Publicación en servidor gratuito
- Estructuración de código PHP + HTML
- Estilos con CSS y Bootstrap

---

## 🙋‍♀️ Autora

**Mayory Astacio Reyna**  
Estudiante de Desarrollo de Software  
Contacto: www.linkedin.com/in/mayory-astacio-reyna


---

