# Estudio Jurídico "Justicia para Todos" - Sistema de Gestión de Causas

Proyecto desarrollado para la asignatura **Taller de Integración de Software** (Semana 3).

## Descripción

Este proyecto corresponde al desarrollo e integración de un sistema web dinámico para el Estudio Jurídico "Justicia para Todos", orientado a optimizar la captura, control y persistencia de la información de sus clientes y causas judiciales.

La solución integra una interfaz de usuario (*Front-end*) restrictiva con un motor de bases de datos relacional (*Back-end*) operado mediante XAMPP. La arquitectura de almacenamiento está normalizada en dos tablas interconectadas para permitir una relación de tipo Uno a Muchos (1:N), evitando la redundancia de datos y asegurando que un cliente pueda poseer múltiples expedientes legales en la firma.

## Funcionalidades implementadas

- **Validación robusta en Front-end (`index.html`):** Formulario con restricciones nativas mediante expresiones regulares (`pattern`) para el RUT chileno, formato internacional de WhatsApp (`+569...`) y campos obligatorios.
- **Arquitectura de Software Modular:** Separación limpia entre la lógica de presentación (HTML/CSS), la lógica de negocio y procesamiento (PHP) y la capa de datos (MySQL).
- **Modelo Relacional Normalizado:** Implementación de integridad referencial mediante el uso de llaves primarias (`PRIMARY KEY`) y llaves foráneas (`FOREIGN KEY`) con políticas de borrado y actualización en cascada (`ON DELETE CASCADE`).
- **Controlador Backend Seguro (`procesar.php`):** Captura de variables mediante el método POST, sanitización, manejo de campos opcionales (`NULL`) y ejecución secuencial de transacciones SQL.

## Tecnologías utilizadas

- **HTML5** (Estructura del formulario y validaciones de campo)
- **CSS3** (Estilos visuales y diseño adaptable)
- **PHP** (Middleware y controlador de inserción de datos)
- **MySQL** (Motor de base de datos relacional)
- **XAMPP** (Servidor local Apache y panel phpMyAdmin)

## Estructura del proyecto

```
JUSTICIAPARATODOS/
│
├── index.html               # Interfaz principal y formulario de registro
├── conexion.php             # Script de conexión orientado a objetos al servidor MySQL
├── procesar.php             # Controlador encargado de procesar el formulario e insertar datos
├── Justicia_Todos.sql       # Script estructurado de la base de datos y sus tablas relacionales
├── css/
│   └── estilos.css          # Hoja de estilos para la presentación visual del portal
└── README.md                # Documentación técnica del repositorio
```
## Estado del proyecto

🚧 **Proyecto en desarrollo (Fase de Integración Base de Datos Completada).**

Proyecto desarrollado para fines educativos y de evaluación en la asignatura **Taller de Integración de Software**.

## Autor

**JParadha** Asignatura: Taller de Integración de Software  
Año: 2026
