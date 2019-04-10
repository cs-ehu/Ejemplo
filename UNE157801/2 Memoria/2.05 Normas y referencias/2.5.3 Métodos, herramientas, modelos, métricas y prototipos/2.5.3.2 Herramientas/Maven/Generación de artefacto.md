:::info
Plantilla herramienta
:::

##  Generación de artefacto:

### Descripción
Un Maven Artifact no es ni más ni menos que un bloque de código reutilizable. Muchas veces se confunde con un jar (java archive)  o librería, pero la realidad es que un jar es un bloque de código reutilizable pero ya compilado, al contrario de un Maven artifact que está sin compilar.

Podríamos decir que un “arquetipo” para Maven es una plantilla. Es decir, gracias a un arquetipo Maven es capaz de generar una estructura de directorios y ficheros.
Con los arquetipos se acabo “el miedo al folio en blanco” a la hora de empezar un proyecto, ya que basta con decirle a Maven que tipo de proyecto queremos y nos creará la estructura base.
![](https://i.imgur.com/W9kHuHg.png)

### Proceso de generación de artefacto:
Indispensable para cualquier proyecto Maven, generaremos el POM.XML para nuestro proyecto con toda la información del proyecto, su versión, autoría, dependencias y plugins. También podríamos habernos descargado un proyecto desde un repositorio y tendríamos que actualizar la información del POM (la nueva versión generada y nuestra autoría, si hemos añadido librerías añadirlas en el POM...)

Para generar la librería y poder reutilizar nuestro código en futuros proyectos, pasamos a describir las propiedades de nuestro arquetipo.  El comando a utilizar en la carpeta del proyecto desde la consola de comandos será el siguiente:
```
mvn archetype:generate 
-DgroupId='compañía desarrolladora' 
-DartifactId='nombre aplicación-librería'
-DarchetypeArtifactId='arquetio base del que se genera el nuestro' 
-DarchetypeVersion='versión de nuestro proyecto-librería'
-DinteractiveMode=false
```
Tras su ejecución se nos habrá generado el fichero POM en la misma carpeta, y en el mismo constarán los datos introducidos en el comando anterior. También se habrán generado las subcarpetas (dependiendo del archetype base seleccionado) para la inclusión de nuestro código fuente, pruebas unitarias, recursos...
Es posible generar también nuestro arquetipo desde un archivo "archetype.properties" en este caso el contenido del archivo sería el siguiente:
```
archetype.groupId='compañía desarrolladora'
archetype.artifactId='nombre aplicación-librería'
archetype.archetypeArtifactId='arquetio base del que se genera el nuestro' 
archetype.version=versión de nuestro proyecto-librería'
archetype.interactiveMode=false
```
y el comando a usar en la línea de comandos sería:
```
mvn clean archetype:create-from-project 
-Darchetype.properties="my_archetype.properties"
```

### Proceso de instalación del artefacto:
Para instalar el artefacto que hemos generado en nuestra máquina es tán sencillo como ejecutar el comando "mvn install" desde la línea de comandos cuando estamos en la carpeta donde está nuestro POM.XML. Al ejecutar éste comando, enmarca un árbol de dependencias basado en la configuración del proyecto en su pom.xml, y (descarga, si fuera necesario) compila todos los componentes necesarios en un directorio llamado .m2 bajo la carpeta del usuario. Estas dependencias deberán resolverse para que el proyecto se construya sin errores.
La ejecucíon del método mvn install también ejecuta las anteriores sentencias del ciclo de vida del artefacto (compile --> Test --> Package --> Install).
### Tareas

#### Obligatorias

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| Tarea1  | Crear un arquetipo desde un proyecto existente       | [Enlace](https://sdos.es/blog/como-crear-un-arquetipo-maven-desde-un-proyecto-existente) | 01:30:00|
| Tarea2         | Crear un proyecto Maven simple          | [Enlace](https://books.sonatype.com/mvnex-book/reference/simple-project-sect-intro.html)           | 02:00:00  |
| Tarea3  | Customizar un proyecto Maven           | [Enlace](https://books.sonatype.com/mvnex-book/reference/customizing.html)           | 02:30:00 |


#### Opcionales

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| Tarea1  |What does mvn install in maven exactly do        | [Enlace](https://stackoverflow.com/questions/10533828/what-does-mvn-install-in-maven-exactly-do) | 00:30:00|
| Tarea2         | Crear una aplicación web           | [Enlace](https://books.sonatype.com/mvnex-book/reference/web.html)           |02:00:00           |

### Horas de aprendizaje
Aprender como generar nuestro artefacto no llega a ser difícil y con cualquier tutorial en internet puede llegar a hacerse de manera muy rápida y sencilla (entorno a los 30-60 minutos). Para llegar a comprender toda la lógica y teoría que acompaña a la creación de nuestro artefacto ya nos llevaría un aprendizaje más complejo en el que podría estar al rededor de las 10-13 horas.
### Ventajas
* Todas las dependencias y plug-ins se "incluyen" en el propio artefacto
* Si alguna de las dependencias/plug-ins ya estaba instalada, solo la compila, no la vuelve a descargar
* Enfoque en la automatización: Maven lo pone en una actitud de automatizar los procesos en torno al desarrollo de su software.
* Compatibilidad absoluta con IDEs como Eclipse.
### Desventajas
* El tiempo de compilación para un proyecto aumenta drásticamente.
### Conclusiones
El crear un arquetipo maven de nuestro proyecto nos ofrece muchas ventajas a la hora de distribuir nuestro software, ya que, tras especificar en el Pom.xml todas las dependencias y plug-ins necesarios para la ejecución del mismo, al distribuirlo con el artefacto, todo usuario que quiera probar/usar nuestro software no tendrá que molestarse en mirar que librerías usa nuestro proyecto, pues al hacer mvn install de nuestro artefacto, se instalarán las librerías faltantes y compilarán las que ya tenía.

