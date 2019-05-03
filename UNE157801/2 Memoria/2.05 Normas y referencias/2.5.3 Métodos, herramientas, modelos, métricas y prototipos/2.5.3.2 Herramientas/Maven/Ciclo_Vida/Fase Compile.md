# Fase Compile

- [Fase Compile](#Fase-Compile)
  - [Descripción](#Descripción)
  - [Tareas](#Tareas)
    - [Obligatorias](#Obligatorias)
    - [Opcionales](#Opcionales)
  - [Horas de aprendizaje](#Horas-de-aprendizaje)
  - [Ventajas](#Ventajas)
  - [Desventajas](#Desventajas)
  - [Conclusiones](#Conclusiones)


## Descripción

La fase compile es la primera de las fases junto con la fase de validate del ciclo de vida de un proyecto Maven, la cual consiste en generar los ficheros .class compilando los fuentes .java

    initialize
Inicializa el entorno de compilación, por ejemplo, establece propiedades o crea directorios.

    generate-sources
Genera código fuente para ser procesado en la fase de 'compilación'.

    compiler:compile
Compila el código fuente del proyecto en el directorio de origen en el directorio de salida.


## Tareas

### Obligatorias

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  |Uso de la fase *compile* en nuestro proyecto| - | 0:30:00|
| 2  |Tutorial*| [Link](https://www.youtube.com/watch?v=wezKtFijkIE) | 0:15:00|

*en este tutorial se explican más cosas aparte de la parte de *compile*


### Opcionales

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  |Apache Maven Compiler Plugin| [Repositorio](https://maven.apache.org/plugins/maven-compiler-plugin/) | 00:20:00|
| 2  | Introducción a los plugins, Maven Compiler Plugin| [Repositorio](https://www.youtube.com/watch?v=OQLBcd8QrWk) | 00:10:00|


### Horas de aprendizaje
Al ser una de las fases del ciclo de vida, con unos 30-40 minutos creemos que es suficiente para entender el funcionamiento y el cometido de esta fase.

### Ventajas
Nos permite ver errores de fase de compilación.

### Desventajas
Puede tener un coste significativo de tiempo, dependiendo del tamaño del proyecto.

### Conclusiones

La compilación es una fase necesaria en cualquier proyecto de *software* y Maven nos permite realizarlo de una manera fácil y comoda.
