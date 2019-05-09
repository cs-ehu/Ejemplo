# Fase Packaging
## Descripción
La fase Packaging en el ciclo de vida Maven consta de una vez que se ha compilado el código en los anteriores ciclos de vida, se "empaqueta" dicha compilación en el tipo de archivo especificado en el Pom.xml en el apartado packaging (si no se especifica nada, se genera un .jar). 
Como fase del ciclo de vida de Maven,  se ejecutan previamente las fases de validación, compilación y de tests, para que antes de generar el ejecutable se tenga la seguridad de que éste funcionará correctamente (si se han creado los test correctamente claro). Tras la fase packaging, sólo quedarían las fases de verificación, instalación y despliegue, por lo que aún no se podría usar nuestro artefacto para ponerlo como una dependencia en otro proyecto (para usar la funcionalidad de nuestro artefacto).
Con la instrucción  "$mvn package" empaquetamos en proyecto y lo guardará en una carpeta target con el archivo indicado en el pom de nuestro proyecto, ya sea .jar, .war...
Los tipos de packaging aceptados (de momento) en el pom.xml son los siguientes: pom, jar, maven-plugin, ejb, war, ear, rar.
## Tareas
| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| Tarea1  |Proyecto Maven con el packaging por defecto (.jar)        | [Enlace](https://books.sonatype.com/mvnex-book/reference/customizing.html) | 02:30:00|
| Tarea2  |Proyecto Maven cambiando el packaging a .war        | [Enlace](https://books.sonatype.com/mvnex-book/reference/web.html) | 02:00:00|
## Ventajas
* Genera el archivo ejecutable con todas las clases ya compiladas en él.
* El ejecutable generado, ha pasado las fases de validación y test, por lo que se supone libre de errores.
## Desventajas
* Aún no podemos usar nuestro artefacto como dependecia/plug-in en otros proyectos.
## Conclusión
La fase packaging es una de las más importantes del ciclo de vida ya que indica el tipo de archivo en el que se va a generar la compilación hecha en las anteriores fases del ciclo de vida.
Para empaquetar nuestra compilación debemos seleccionar el tipo de archivo que queremos mediante la etiqueta <packaging> del Pom.xml y mediante la instrucción "$mvn package" procederemos a empaquetar nuestro código generado.