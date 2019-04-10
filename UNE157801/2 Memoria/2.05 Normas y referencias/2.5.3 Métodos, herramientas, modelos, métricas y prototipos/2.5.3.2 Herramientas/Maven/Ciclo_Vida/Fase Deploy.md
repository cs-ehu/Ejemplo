# Fase Deploy

- [Fase Deploy](#Fase-Deploy)
  - [Descripción](#Descripción)
  - [Tareas](#Tareas)
    - [Obligatorias](#Obligatorias)
    - [Opcionales](#Opcionales)
  - [Horas de aprendizaje](#Horas-de-aprendizaje)
  - [Ventajas](#Ventajas)
  - [Desventajas](#Desventajas)
  - [Conclusiones](#Conclusiones)

## Descripción

<div style="text-align: justify">
<p>
Dentro del ciclo de vida *default* de Maven, la última fase se llama *deploy*. Esta fase consiste en copiar el paquete generado en la cuarta fase *package* y subirlo a un repositorio remoto, de forma que otros desarrolladores y proyectos puedan usarlo.

Como con el resto de fases, utiliza un *plugin* para agrupar todas sus funciones. Cada función se llama *goal* y, en el caso de *deploy* existen dos *goal*s asociadas a esta fase:
</p>
</div>

* `deploy:deploy`: Instala automáticamente el artefacto, su POM y los artefactos relacionados generados por un proyecto. Casi toda, si no toda, la información relacionada con el proyecto se almacena en el POM.

* `deploy:deploy-life`:Instala un único artefacto junto con su POM. En este caso la información sobre el artefacto podrá extraerse de un fichero POM específicado opcionalmente, aunque podrá ser completada/sobreescrita mediante la línea de comandos.

<div style="text-align: justify">
<p>
Como con el resto de ciclos de vida, al ejecutar una fase en concreto se ejecutan también todos los objetivos de las fases anteriores. En el caso de *deploy* esto implica ejecutar todo el ciclo de vida entero, ya que es la última fase del mismo. Por lo tanto, la correcta ejecución de <code>mvn deploy</code> implica haber ejecutado correctamente el ciclo de vida *default* por completo.
</p>
</div>

## Tareas

### Obligatorias

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  |Visualización de un tutorial para el uso de *deploy*| [Vídeo ejemplo](https://www.youtube.com/watch?v=8MRLzhH7tQM) | 00:10:00|
| 2  |Uso de la fase *deploy* en nuestro proyecto| - | 01:00:00|

### Opcionales

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  |Visita al repositorio GitHub del *plugin*| [Repositorio](https://github.com/apache/maven-deploy-plugin) | 00:20:00|
| 2  |Instalación y prueba del *plugin* para subir el proyecto a GitHub| [Repositorio](https://github.com/JakeWharton/github-deploy-maven-plugin) | 01:00:00|

## Horas de aprendizaje

<div style="text-align: justify">
<p>
Al no ser una fase con muchos *goal*s ni con una curva de aprendizaje muy alta, las horas de aprendizaje son relativamente bajas. Sin embargo, configurarlo correctamente puede suponer un problema y puede aumentar las horas necesarias bastante.
</p>
</div>

## Ventajas

<div style="text-align: justify">
<p>
Las ventajas de esta fase son obvias. Al automatizar el proceso de despliegue del proyecto, evitamos posibles errores humanos muy habituales, simplificamos y agilizamos el proceso, y nos abre posibilidades como un despliegue a múltiples repositorios de forma simultánea y totalmente transparente.
</p>
</div>

## Desventajas

<div style="text-align: justify">
<p>
No es sencillo encontrar documentación ni tutoriales sobre esta fase, por lo que hacer que funcione en nuestro proyecto puede resultar un problema. Además, muchos protocolos de despliegue no están habilitados de forma nativa.
</p>
</div>

## Conclusiones

<div style="text-align: justify">
<p>
El despliegue es una fase crucial en cualquier proyecto de *software* y Maven nos permite trivializarlo con su fase *deploy*.
</p>
</div>