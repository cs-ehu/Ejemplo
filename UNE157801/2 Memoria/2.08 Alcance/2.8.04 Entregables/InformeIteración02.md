# InformeIteración02

## Índice
* [Introducción](#Introducción)
* [Planificación](#Planificación)
    * [Alcance](#Alcance)
    * [Asignación de responsabilidades y encargos a los miembros del grupo](#Asignación-de-responsabilidades-y-encargos-a-los-miembros-del-grupo)
    * [Lista de tareas realizadas](#Lista-de-tareas-realizadas)
        * [Descripción tareas por grupo](#Descripción-tareas-por-grupo)
* [Documentos de herramientas](#Documentos-de-herramientas)
* [Revisiones de las tareas](#Revisiones-de-las-tareas)
* [Enlace a las actas](#Enlace-a-las-actas)
* [Estimación de dedicación a cada una de las tareas VS Tiempo Rel](#Estimación-de-dedicación-a-cada-una-de-las-tareas-VS-Tiempo-Rel)
* [Mejoras aplicadas respecto a la anterior iteración](#Mejoras-aplicadas-respecto-a-la-anterior-iteración)
* [Tareas pendientes por realizar](#Tareas-pendientes-por-realizar)
* [Conclusiones](#Conclusiones)




## Introducción
En la creación del software es relevante contar con herramientas que ayuden a los desarrolladores a facilitar su trabajo, conservando la calidad del mismo y aumentando así la productividad; para ello es necesario conocer las herramientas precisas para cumplir estos propósitos.

En la asignatura de Calidad de Software hemos realizado una búsqueda colaborativa para verificar aquellas herramientas que más nos sirven en el desarrollo de futuros proyectos. Reunimos varias herramientas de desarrollo de software, explicando las horas de trabajo mínimas para poder implementarlas y usarlas a nivel básico. 

Este proyecto es la segunda iteración del informe recopilatorio de estas herramientas. En esta segunda fase analizaremos las herramientas: Doxygen y Maven.

## Planificación


### Alcance
Este documento *“InformeIteración02”* esta ubicado en [GitHub](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.08%20Alcance/2.8.04%20Entregables/InformeIteraci%C3%B3n02.md) y su objetivo consiste en explicar las principales características para el análisis y documentación de un proyecto en Java mediante las herramientas Maven y Doxygen,además de algunas otras.

Durante la realización, se generarán diferentes grupos para poder llevar a cabo los diferentes aspectos del proyecto con una carga de trabajo regulada respecto al tiempo entre los integrantes del grupo. 

El proyecto contendrá estos aspectos:
Esta documentación sobre el seguimiento y control del proyecto, Ciclo de vida, con sus subfases, Generación del artefacto, POM, PMD, Doxygen, Junit y Code Smells.

### Asignación de responsabilidades y encargos a los miembros del grupo

Para realizar estas tareas se han creado 7 grupos de dos personas:

1. Urko-Iñigo - Solfamidas 
2. Ferran-Michel - Complejo 𝛌 
3. Aritz-Joel - VI 
4. Christian-Gorka - Tiburones 
5. Karla-Pilar - Mexicanas
6. Aitor-Fede - Uruguaxos 
7. Issur-Vesko - Team_7


### Lista de tareas realizadas
En este apartado se listarán las tareas que deberían haber sido realizadas para esta entrega. Esto incluye tanto tareas entregables como organizativas.

El objetivo de este apartado es reflexionar sobre el trabajo realizado y poder mejorar en un futuro. Además, también servirá como lista de tareas pendientes para realizar antes de la siguiente entrega, siempre que siga siendo posible o siga teniendo sentido dentro del marco del proyecto de la asignatura. 

La lista de tareas es la siguiente:
    
    Paquete de documentación proyecto:
		DC.T1. Planificación
		DC.T2. Seguimiento y Control
		DC.T3. Cierre

    Paquete del Maven
		MV.T1. Herramienta
		MV.T2. Ciclos de vida

    Paquete del Ciclo de vida:
		CV.T1. Compile
		CV.T2. Test
		CV.T3. Package
		CV.T4. Install
		CV.T5. Deploy
		CV.T6. Verify
		CV.T7. Validate

    Paquete Generación de Artefacto
		GA.T1 Mvn
		GA.T2 Generate 
		GA.T3 Install
		GA.T4 Eclipse

    Paquete del POM
		POM.T1 POM

    Paquete PMD
		PMD.T1 PMD

    Paquete DoxyGen
		DG.T1. DoxyGen

    Paquete JUnit
		JU.T1. JUnit

    Paquete CodeSmells
		CS.T1. Code Smells

### Descripción tareas por grupo
- Solfamidas: Se ocupará de la fase Deploy del ciclo de vida y de PMD.
	Descripción: Se han realizado dos documentos, uno en referencia a la fase Deploy del ciclo de vida y de la herramienta PMD. Para el documento Deploy se ha dividido en en diferentes apartados. Tiene la fase de Descripción, tareas, ventajas, desventajas y conclusiones. El documento PMD cuenta con los mismos apartados.

- Complejo 𝛌: Se ocupará de la fase Install del ciclo de vida y de los Code Smells.
Descripción: Se han creado dos documentos, uno en referencia al Ciclo de vida install cuya información se recogió del manual de MAVEN y otro acerca de Code Smells/Code Styles cuya información se recopiló de páginas de ingenieros especializados. Para el documento de Ciclo de vida install no se ha utilizado un estándar definido a la hora de redactarlo, ya en cuanto a Code Smells/Code Styles se siguió el acordado que utilizamos todo el grupo en la primera iteración.

- VI: Se ocuparán de la parte de la Generación de Artefacto y de la fase Package del ciclo de vida.
Descripción: Se ha realizado el documento relativo a la herramienta generación de artefacto así como el ciclo de vida “packaging”. Cada uno con su descripción, tareas, ventajas, desventajas y conclusión final.

- Tiburones: Se ocuparán de la parte de Doxygen y de la fase Test del ciclo de vida.
Descripción:

- Mexicanas: Se ocuparán del POM y de la fase Verify del ciclo de vida.
Descripción:Se ha creado un documento en markdown referenciado a las partes que conlleva el pom dentro de MAVEN,información obtenida de la documentación oficial. Para el ciclo de vida la fase verify, al no encontrar mucha información, igualmente nos basamos en lo referenciado a la documentación. lo referenciado a la documentación. lo referenciado a la documentación. lo referenciado a la documentación.  

- Urugaxos: Se ocuparán de la fase de Validate del ciclo de vida y de JUnit.
Descripción:

- Team_7: Se ocupan de la realización de este documento, además de la fase Compile del ciclo de vida.
Descripción: Se realizará un documento (este), que contendrá su seguimiento y control, y para finalizar las conclusiones, desviaciones y su cierre.
También, hemos generado el documento sobre el ciclo de vida “compile”.
Como veíamos que faltaba un documento más general, hemos realizado el documento de la herramienta Maven en general, si entrar en detalles, el cual contiene la descripción, las tareas obligatorias junto con la dedicación media de los miembros de clase, ventajas/desventajas y conclusiones.


## Documentos de herramientas
En la siguiente tabla se muestran las distintas herramientas trabajadas, cada una con su enlace a el repositorio común en GitHub con el documento que agrupa las tareas (obligatorias y opcionales), horas de aprendizaje, ventajas-desventajas y una pequeña conclusión para cada herramienta. 

| ID | Herramienta | Link al documento |
| -------- | -------- | -------- |
|0| Maven (general)|[Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/HerramientaMavenGeneral.md)|
|1| Ciclo de vida: Compile     | [Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/Ciclo_Vida/Fase%20Compile.md)|
|2| Ciclo de vida: Test| [Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/Ciclo_Vida/Fase%20Test.md)|
|3| Ciclo de vida: Package | [Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/Ciclo_Vida/Fase%20Packaging.md)|
|4| Ciclo de vida: Install | [Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/Ciclo_Vida/Fase%20Install.md)|
|5| Ciclo de vida: Deploy | [Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/Ciclo_Vida/Fase%20Deploy.md)|
|6| Ciclo de vida: Verify | [Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/Ciclo_Vida/Fase%20Verify.md)|
|7| Ciclo de vida: Validate|[Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/Ciclo_Vida/Fase%20Validate.md)|
|8| Generación de Artefacto|[Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/Generaci%C3%B3n%20de%20artefacto.md)|
|9| POM|[Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos,%20herramientas,%20modelos,%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/POM.md)|
|10| PMD|[Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/PMD.md)|
|11| Doxygen|[Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/herramienta.doxygen.md)|
|12| JUnit|[Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/Maven/JUnit.md)|
|13| CodeSmells|[Link](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.05%20Normas%20y%20referencias/2.5.3%20M%C3%A9todos%2C%20herramientas%2C%20modelos%2C%20m%C3%A9tricas%20y%20prototipos/2.5.3.2%20Herramientas/herramienta.codesmell.md)|

### Revisiones de las tareas
| Documento     | Creadores | Revisores | Observaciones | Fecha de revision. 
| -------       | ----------- | ---------- | ---------- |---------- |
| Generación artefacto  |Aritz-Joel| Ferran-Michel | Se describe con brevedad y claridad en que consiste, es un documento muy completo. Sin embargo la imagen explicativa puesta en descripción sería bueno encontrarla en mejor calidad para poderla apreciar correctamente.  |10/04/2019   |
| POM  |Karla-Pilar| Aritz-Joel |Faltaba un espacio en una palabra y alguna etiqueta \<dependency> estaba puesta como \<dependencia>, por lo demás, todo perfecto |10/04/2019   |
| PMD  |Urko-Iñigo|Karla-Pilar | Desventajas no encontradas pero posiblemente por poco uso. En la tabla se podría poner Enlace con mayúscula. Se podría sustituir lo de ...en el apartado de Ventajas |10/04/2019   |
|Doxygen  |Christian-Gorka| Urko-Iñigo | Sería conveniente explicar mejor las desventajas, y parte de la conclusión perteneceria a la parte de descripción. |10/04/2019   |
| JUnit  |Aitor-Fede| Christian-Gorka| En el pantallazo estaría bien algunas pequeñas indicaciones, pero en general está bien. Hay alguna que otra errata.  |10/04/2019   |
| Code Styles/Code Smells  |Ferran-Michel|Aitor-Fede |Documento bien explicado de forma breve, los enlaces son buenos, aunque alguno es muy largo.    |10/04/2019   |
| Seguimiento y control  |Issur-Vesko| TODOS |  |10/04/2019   |

## Enlace a las actas
Esta es la tabla de las actas que se han generado en las sesiones de clase. Las actas están firmadas por los participantes de dichas sesiones y cumplen con el formato generalizado de actas de reuniones [plantilla](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R0.md).

| ID | Fecha | Link |
| -------- | -------- | -------- |
| 5     | 04/03/2019     | [Link Acta1](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R5_04-03.md)     |
| 6     | 05/03/2019     | [Link Acta2](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R6_05-03.md)     |
| 7     | 08/03/2019     | [Link Acta3](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R7_08-03.md)     |
| 8     | 11/03/2019     | [Link Acta4](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R8_11-03.md)     |
| 9     | 12/03/2019     | [Link Acta5](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R9_12-03.md)     |
| 10     | 15/03/2019     | [Link Acta6](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R10_15-03.md)     |
| 11     | 22/03/2019     | [Link Acta7](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R11_22-03.md)     |
| 12     | 25/03/2019     | [Link Acta8](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R12_25-03.md)     |
| 13     | 26/03/2019     | [Link Acta9](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R13_26-03.md)     |
| 14     | 29/03/2019    | [Link Acta10](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R14_29-03.md)     |
| 15     | 01/04/2019    | [Link Acta11](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R15_01-04.md)     |
| 16     | 02/04/2019    | [Link Acta12](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R16_02-04.md)     |
| 17     | 05/04/2019    | [Link Acta13](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R17_05-04.md)     |
| 18     | 10/04/2019    | [Link Acta14](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/2%20Memoria/2.13%20Organizaci%C3%B3n%20y%20gesti%C3%B3n%20del%20proyecto/2.13.4%20Seguimiento%20y%20Control/2.13.4.1%20Actas%20de%20Reuniones/Acta_R18_10-04.md)     |


## Estimación de dedicación a cada una de las tareas VS Tiempo Rel 
Paquete de documentación proyecto:
|       | Tiempo estimado | Tiempo Real | 
| ------- | ----------- | ---------- | 
| DC.T1 Planificación  |00:45:00 | 00:40:00|
| DC.T2 Seguimiento y Control  |02:30:00 | 04:00:00|
| DC.T3 Cierre/Conclusiones |00:20:00| 00:20:00|

Paquete de Maven:
|       | Tiempo estimado | Tiempo Real | 
| ------- | ----------- | ---------- | 
| MV.T1 Herramienta*  |00:30:00 | 00:30:00|
| MV.T2 Ciclos de vida  |08:25:00 | 09:25:00|
*los tiempos de la generación del documento general de maven.

Paquete del Ciclo de vida:
|       | Tiempo estimado | Tiempo Real | 
| ------- | ----------- | ---------- | 
| CV.T1. Compile  |00:40:00 | 00:30:00|
| CV.T2. Test  |00:45:00 | 1:10:00|
| CV.T3. Package  |01:00:00 | 00:45:00|
| CV.T4. Install |02:00:00 | 01:00:00|
| CV.T5. Deploy  |01:00:00 | 01:30:00|
| CV.T6. Verify|01:00:00 | 01:00:00|
| CV.T7. Validate |01:00:00 | 01:00:00|

Paquete de Generación de Artefacto
|       | Tiempo estimado | Tiempo Real | 
| ------- | ----------- | ---------- | 
|GA.T1 Mvn|00:45:00 | 00:50:00|
| GA.T2 Generate  |00:45:00 | 01:00:00|
| GA.T3 Install |00:45:00 | 00:30:00|

Paquete de POM
|       | Tiempo estimado | Tiempo Real | 
| ------- | ----------- | ---------- | 
|POM.T1 POM|3:00:00 | 05:00:00|

Paquete de PMD
|             | Tiempo estimado | Tiempo Real | 
| -------     | ----------- | ---------- | 
|PMD.T1 PMD   |02:00:00 | 03:00:00|

Paquete Doxygen
|       | Tiempo estimado | Tiempo Real | 
| ------- | ----------- | ---------- | 
|DG.T1 Doxygen|02:00:00 | 2:00:00|

Paquete JUnit
|       | Tiempo estimado | Tiempo Real | 
| ------- | ----------- | ---------- | 
|JU.T1 JUnit|03:30:00 | 03:00:00|

Paquete Code Smells
|       | Tiempo estimado | Tiempo Real | 
| ------- | ----------- | ---------- | 
|CS.T1 Code Smells|02:30:00 |04:00:00|

## Mejoras aplicadas respecto a la anterior iteración

En el informe de la anterior iteración se listaron ciertas tareas que habría que haber realizado y que supondrían una mejora para algún aspecto de la asignatura, como puede ser la organización de tareas en grupo, la gestión del proyecto o las documentación del trabajo realizado.

En este apartdo se va a hablar sobre las tareas que aparecían pendientes en la iteración anterior y que ya se han implementado, así como de las repercusiones que estas implementaciones han causado.

* **Documento de planificación**: Se ha generado un documento de planificación dentro de esta iteración. En este documento se ha especificado el alcance de la iteración y sus objetivos. Además, tambien se ha redactado un documento de seguimiento y control, que se encarga de comentar las desviaciones que han habido respecto de la planificación.
* **Mejora en el sistema de actas**: En esta iteración, la calidad de las actas ha aumentado considerablemente. Los papeles en las actas se han ido modificando de sesión a sesión, distribuyendo así el trabajo entre todo los miembros del equipo. Además, se ha seguido el estilo de una plantilla acordada por todos, lo cual hace que todas las actas tengan la misma estructura y sean más legibles.

## Tareas pendientes por realizar

Aunque se hayan aplicado mejoras respecto a la anterior iteración, el funcionamiento del grupo no es óptimo aún. Queda ciertos aspectos por mejorar para que el nivel de madurez del equipo suba de nivel. Las posibles mejoras inclurían, entre otras:

* **Análisis del trabajo**: Al tener que dividir el trabajo entre los diferentes miembro o entre diferentes subgrupos, es frecuente que esta división no sea del todo proporcional, haciendo así que ciertos participantes trabajen más que otros, lo que implica una situación injusta. Para el futuro, sería convenientes analizar el trabajo de antemano y dividir las tareas en consecuencia, equilibrando todo lo posible el trabajo repartido.

* **Liderazgo**: Al igual que en la anterior iteración, sigue faltando un director del proyecto que asigne responsabilidades y tome decisiones. Es muy probable que esto no se vaya a realizar por la naturaleza de la asignatura, aunque es innegable que supondría una mejora considerable si priorizamos el producto final a la educación de los miembros.

## Conclusiones

La realización de este proyecto nos ha ayudado a interiorizar más las herramientas que hemos estado viendo en clase, ya que las hemos estado utilizando durante el transcurso completo del proyecto. 
Además, la realización de actas nos ha ayudado a llevar el trabajo al día, y que los que no hayan asistido a esa clase, se puedan poner al día y que no se queden atras.
El conjunto de documentos generados nos ayudará a la hora de tener que trabajar de nuevo con estas herramientas, ya que reunen tareas que hemos visto necesarias para su aprendizaje. Y no solo eso, si alguien esta interesado en el aprendizaje las herramientas tratadas puede acceder a nuestros documentos y ahorrará tiempo en busquedas costosas e innecesarias.
Por último, el realizar este trabajo en grupo, nos ayuda a prepararnos para proyectos del futuro, que serán proyectos de mayor calibre y mayor relevancia.
