#  PMD

- [PMD](#pmd)
  - [Descripción](#descripci%C3%B3n)
    - [PMD y CPD (Copy and Paste Detection)](#pmd-y-cpd-copy-and-paste-detection)
  - [Tareas](#tareas)
    - [Obligatorias](#obligatorias)
    - [Opcionales](#opcionales)
  - [Horas de aprendizaje](#horas-de-aprendizaje)
  - [Ventajas](#ventajas)
  - [Desventajas](#desventajas)
  - [Conclusiones](#conclusiones)

## Descripción

PMD es un analizador de código fuente estático. Encuentra fallos de programación comunes como variables no utilizadas, bloques de captura vacíos, creación innecesaria de objetos, etc. Se ocupa principalmente de Java y Apex , pero admite otros seis idiomas .

PMD presenta muchos controles integrados , que están documentados para cada idioma en nuestras referencias de Reglas . También admite una API extensa para escribir sus propias reglas , lo puede hacer en Java o como una consulta de XPath independiente.

PMD es más útil cuando se integra en su proceso de construcción . Luego puede usarse como una puerta de calidad, para imponer un estándar de codificación para su base de código. Entre otras cosas, PMD se puede ejecutar:

* Como un objetivo de Maven
* Como una tarea de hormigas
* Como una tarea de Gradle
* Desde linea de comandos
* CPD , el detector de copiar y pegar , también se distribuye con PMD. También puede usarlo de varias maneras, que se documentan aquí .
  
### PMD y CPD (Copy and Paste Detection)

Una de las pruebas que se pueden automatizar con esta herramienta es la detección de trozos de código que hayan sido copiados de un método a otro o en distintas clases. El "copy and paste", es decir, al programar copiando y modificando código existente en lugar de crear soluciones genéricas, es lo que se llama un antipatrón, y su práctica es fuente de numerosos errores.

Para realizar estas pruebas tenemos el plugin de PMD, existente en Maven2 y eclipse, en el que se incluye la utilidad de CPD (Copy and Paste Detection).

## Tareas

### Obligatorias

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  |Uso de PMD en Maven| [Vídeo ejemplo](https://www.youtube.com/watch?v=bRFVukVIcao) | 00:15:00|
| 2  |Como instalar PMD| [enlace](https://pmd.github.io/pmd-6.13.0/pmd_userdocs_installation.html) | 00:10:00|

### Opcionales

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  |Creación de reglas| [enlace](https://pmd.github.io/pmd-6.13.0/pmd_userdocs_making_rulesets.html) | 00:20:00|
| 2  |Configurando reglas| [enlace](https://pmd.github.io/pmd-6.13.0/pmd_userdocs_configuring_rules.html) | 00:10:00|

## Horas de aprendizaje

El tiempo estimado para instalar y probar el plugin no es alto(20 minutos), pero el tiempo necesario para saber todo lo que nos ofrece este plugin puede llegar a ser realmente alto.

## Ventajas

Es una herramienta capaz de identificar los siguientes problemas:

* Código muerto: variables y métodos (sólo privados) no usados
* Código no óptimo: uso de Strings,…
* Expresiones complejas: uso de if innecesarios, for,…
* Código duplicado
* Posibles bugs
* PMD además permite definir nuevas reglas.

## Desventajas

No se ha encontrado ninguna desventaja respesto a dicha herramienta.

## Conclusiones

Es una herramienta completa que es capaz de identificar una gran cantidad de problemas que surgen a la hora de realizar proyectos Java. Su instalación y su uso es sencillo y rápido, además que muestra los errores encontrados de forma clara.

Es una herramienta a tener en cuenta a la hora de realizar cualquier trabajo Java que hará que nos ahorremos mucho tiempo.