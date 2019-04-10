# Fase Validate

- [Fase Validate](#Fase-Validate)
  - [Descripción](#Descripción)
  - [Tareas](#Tareas)
    - [Obligatorias](#Obligatorias)
    - [Opcionales](#Opcionales)
  - [Horas de aprendizaje](#Horas-de-aprendizaje)
  - [Ventajas](#Ventajas)
  - [Desventajas](#Desventajas)
  - [Conclusiones](#Conclusiones)


## Descripción

La fase validate consiste en validar que el proyecto sea correcto, y que toda la informacion necesaria este disponible. Es la primera fase del ciclo de vida de un proyecto

    <plugin>
        <groupId>org.apache.maven.plugins</groupId>
        <artifactId>maven-checkstyle-plugin</artifactId>
        <version>2.17</version>
        <executions>
            <execution>
                <id>verify-style</id>
                <phase>validate</phase>
                <goals>
                    <goal>check</goal>
                </goals>
            </execution>
        </executions>
    </plugin>
Para validar un proyecto hay que insertar este plugin en el POM.

    validate
Para comprobar que el proyecto es válido deberemos ejecutar el comando validate, y coprobar que la salida sea la siguiente.

![!. Imagen pantallazo validate](https://i.imgur.com/lsdi4wG.png)
*Ejemplo validate



## Tareas

### Obligatorias

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  |Uso de la fase *validate* en nuestro proyecto| - | 0:30:00|
| 2  |Tutorial| [Link](https://softwareengineering.stackexchange.com/questions/323129/maven-build-lifecycle-validate) | 0:30:00|





### Horas de aprendizaje
Se estima un total de 40-60 minutos. Creemos que este tiempo es suficiente para entender el funcionamiento y el cometido de esta fase.

### Ventajas
Nos permite verificar que el proyecto es correcto y que contiene toda la información necesaria disponible.

### Desventajas
Si el tamaño del proyecto es muy elevado, el tiempo de validación tiene un coste significativo.

### Conclusiones

La validación es una fase necesaria en cualquier proyecto de *software* para asegurar la calidad del mismo, y Maven nos permite realizarlo de una manera sencilla.