##  Doxygen 

### Descripción
**Doxygen** es una herramienta para generar documentación de recursos escritos en C++, pero también soporta otros lenguajes de programación como C, Objective-C, C#, PHP, Java, Python, IDL (Corba, Microsoft, y UNO/OpenOffice flavors), Fortran, VHDL, Tcl, y para D extendido.

### Tareas

#### Obligatorias

| ID | Descripción                                | Referencia                   | Tiempo  |
|----| ------------------------------------------ | ---------------------------- | ------- |
| 1  | Página oficial                             | [Introducción][enlace1]      | 1:30:00 |
| 2  | Descarga                                   | [Descarga][enlace3]          | 0:30:00 |
| 3  | Instalación y uso                          | [Guia][enlace4]              | 0:45:00 |

[enlace1]: http://www.doxygen.nl/
[enlace3]: http://www.doxygen.nl/download.html
[enlace4]: https://drive.google.com/open?id=1rRANm6V-7mH3jVwsUqV1A4jhAsj4EjSi


#### Opcionales

| ID | Descripción                                 | Referencia              | Tiempo  |
|----| ------------------------------------------- | ------------------------| ------- |
| 1  | Ejemplos de configuraciones                 | [Configuración][enlace4]| 1:00:00 |
| 2  | Eclox (Plug-in para eclipse)                | [Tutorial][enlace5]     | 0:30:00 |

[enlace4]: https://docs.google.com/spreadsheets/d/1cExOR0wsVYlQeBx03XrV-LVO-YKflB_xKJLwhkYT1D8/edit?usp=sharing
[enlace5]: https://anb0s.github.io/eclox/

### Horas de aprendizaje
Conceptos y manejo básico: ~2h

### Ventajas
 * Genera documentación on-line y/o un manual off-line en *LaTeX* desde un conjunto de ficheros documentados. 
 * Puede generarse en diferentes formatos.
 * Puedes configurarlo para extraer la estructura de código de ficheros no documentados.
 * Puedes usar Doxygen para crear documentación normal.
 * Puede visualizar las relaciones entre varios elementos por medio de grafos y diagramas los cuales se generan automáticamente.

### Desventajas
 * Es bastante complejo de entender.
 * Queda anticuado.

### Conclusiones

Para desarrollar programas es necesario seguir unas buenas prácticas que facilitan la labor, reducen el costo y hacen más fácil el mantenimiento de los módulos. El buen programador usa:

* Abstracción: para diseñar los programas por capas y por módulos.
* Especificación: para definir el rol de cada módulo en el sistema y para facilitar su reutilización.
* Encapsulamiento: para que quede junto lo que debe estar junto.
* Ocultamiento de datos: para evitar que el programador cliente tenga que lidiar con los detalles de implementación.

El uso de Doxygen permite inculcar con facilidad estas buenas prácticas en el programador novato. Tiene la ventaja adicional de ser un herramienta que sirve para muchos lenguajes, por lo que sirve de punto de partida para cualquier otra plataforma.
