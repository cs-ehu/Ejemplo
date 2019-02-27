## MATRIZ DE TRAZABILIDAD DE REQUISITOS DE PROYECTO.
~~~
EXAMEN 1.
Hernández Castro Karla Beatriz 
Calidad del Software.
~~~
***

## Índice
* [Introducción](#Introducción)
* [Trazabilidad de requisitos](#Trazabilidad-de-requisitos)
* [Matriz de trazabilidad de requisitos](#Matriz-de-trazabilidad-de-requisitos)
    * [Significado](#Significado)
    * [Versiones](#Versiones)
    * [Rellenar una matriz](#Rellenar-una-matriz)
    * [Ejemplo](#Ejemplo)
* [Referencias](#Referencias)


## Introducción
Un factor clave para asegurar el éxito de proyectos de cualquier índole, es gestionar la contribución de cada requerimiento de proyecto con el logro de los objetivos y realización de los beneficios que se han planteado. 
En este documento se describirá la trazabilidad de requisitos así como la matriz de trazabilidad de requisitos y su importancia garantizar que los proyectos y organización estén alienados. 

## Trazabilidad-de-requisitos
 >*Es la asociación de un requisito con otros requisitos y las diferentes instancias o artefactos con que se relaciona* 
 >

La trazabilidad es establecer una línea imaginaria que relacione hacia atrás los requisitos con objetivos del proyecto, y hacia delante con test cases o releases. 

Disponer de una buena trazabilidad de requisitos nos permite realizar el control y apoyo para la toma de decisiones en el proyecto, tenemos la posibilidad de identificar el origen de cada requisito y realizar el seguimiento de cada cambio que se realice sobre el mismo. Además, al trazar los requisitos con otros artefactos como pruebas, casos de uso, código, etc., será posible responder a los cambios de forma más controlada y con más información, y en consecuencia anticiparnos a lo que un cambio puede significar.

Una de las técnicas más utilizadas para recoger la información bidireccional de trazas, son las **matrices de trazabilidad**. Éstas muestran diversos elementos en filas y columnas (por ejemplo requisitos y pruebas) indicando en cada celda de la matriz si los elementos están o no trazados y en qué dirección. Este tipo de técnicas permite un análisis gráfico de la trazabilidad de requisitos y la gestión de su impacto ante posibles cambios.


## Matriz-de-trazabilidad-de-requisitos

### Significado

>La Matriz de Trazabilidad de Requisitos del Proyecto ayuda a realizar el seguimiento de los requisitos. Buscamos asegurarnos que se están cumpliendo de manera eficaz.

Una vez comenzado el proyecto, la matriz de trazabilidad facilita gestión de los requerimientos a lo largo del ciclo de vida, los proyectos complejos puede llegar a tener cientos de requerimientos específicos y la matriz de trazabilidad nos ayuda con el seguimiento al alcance, evaluación del impacto de cambios y nos mantiene enfocados en los beneficios que esperamos obtener. 

Adicionalmente, la matriz de trazabilidad de requerimientos también relaciona cada requisito con los objetivos de proyecto y objetivos estratégicos organizacionales que satisface, garantizando de esta forma que cada requisito esté agregando valor al presente y futuro del negocio. 

![Explicacion](https://uv-mdap.com/wp-content/uploads/2018/01/matriz-trazabilidad-requisitos-proyecto-768x1164.png)

### Versiones
| Primera versión | Versión posterior|
| ---------- | ---------- |
| Se diseña en la fase de planificación para establecer la relación entre requisitos y especificaciones. Solo se establece la relación entre los requisitos y las especificaciones. Se establecen los requisitos y funcionalidades antes de ejecutar las tareas para completar esos requisitos y especificaciones.   |  Se detallan las especificaciones desglosándolas por componentes. Comprueba que se cumplan los requisitos establecidos a través de las especificaciones detalladas. Se definen en detalle las especificaciones, desglosándolas a un bajo nivel, de esta forma comprobamos la consecución de los requisitos a través de sus especificaciones.   |

Se puede decir que la versión previa, es decir, la que se hace antes del kickoff, es utilizada para mapear especificaciones con requisitos. La versión posterior, es decir, la que se hace después del kickoff, se utiliza para ver si los requisitos se cumplen en base a sus especificaciones.


### Rellenar-una-matriz
La matriz de trazabilidad registra los atributos relacionados con cada requerimiento de proyecto, entre los atributos típicos que se pueden asociar a cada requerimiento se encuentran:

* **Un identificador único:** La organización define un estándar para numerar cada requisito de proyecto e identificarlo unívoca-mente. Puede definirse una numeración (por ejemplo 001, 002, 003).
* **Vinculación de requisitos de alto nivel con requisitos más detallados:** Pueden definirse numeraciones separadas por punto para asociar requerimientos específicos con un requerimiento general (por ejemplo 1.1, 1.2 y 1.3 para requisitos asociados al requerimiento 001).
* **Descripción textual del requisito:** Narrativa que describe en que consiste el requerimiento de proyecto. Al escribir esta descripción debe tenerse en cuenta el tipo de requerimiento de proyecto que se esté documentando.
* **Versión:** Los requerimientos se pueden ir modificando o agregando información en versiones sucesivas, por lo que es conveniente llevar el control por número de versión.
* **Estado actual:** Los siguientes estados en los que puede encontrarse un requerimiento:
    *    Activo
    *    Cancelado 
    *    Diferido 
    *    Agregado 
    *    Aprobado 
    *    Asignado 
    *    Completado 
* **Fecha de estado:** Es la fecha en la que se estableció el último cambio de estado del requerimiento. 
* **Propietario:** Persona responsable de velar por que se logren los resultados con el requerimiento.
* **Prioridad:** Se toma en cuenta el grado de importancia del requerimiento para el logro de objetivos del proyecto y realización de sus beneficios, para asignar un nivel de prioridad. También puede tenerse en cuenta el grado de influencia del interesado solicitante (stakeholder) según determine la gestión de los interesados del proyecto.
* **Criterios de estabilidad, complejidad y aceptación:** La complejidad puede establecerse de forma cualitativa, por ejemplo baja, moderada o alta. Los criterios de aceptación son una lista de condiciones específicas que debe cumplir el requerimiento para poder pasar a estado “completado”. Es importante que los criterios sean específicos, medibles de forma objetiva y respondan a un estándar organizacional.
* **Necesidades, oportunidades, metas y objetivos de negocio:** Son los elementos de planificación estratégica que dieron origen al requerimiento. Todo requerimiento debe estar alineado con beneficios específicos que la organización espera obtener. Estos beneficios responden a nuevas oportunidades, objetivos y metas de crecimiento, o necesidades emergentes específicas.
* **Objetivos del proyecto:** Establece la trazabilidad entre el requisito y los objetivos específicos del proyecto definidos en su alcance. Los objetivos de proyecto a su vez deben estar asociados a necesidades, oportunidades, metas u objetivos de negocio.
* **Alcance del proyecto y entregables de la estructura de desglose de trabajo (EDT)**: Entregables de la estructura de desglose de trabajo (EDT) en los cuales está inmerso el requisito. Puede especificarse tanto el nombre del elemento de la EDT como su código EDT.
* **Diseño del producto:** Si el requerimiento tiene implicaciones de cómo debe diseñarse el producto, aquí se explican cómo se incorporarán los compontes necesarios al diseño para satisfacerlo.
* **Desarrollo de productos:** Describe como los procedimientos de trabajo, metodología o estándares usados incorporan el requisito. Esto aplica para requisitos que definen la forma de trabajar y estándares a cumplir, como por ejemplo requerimientos de proyecto o de calidad.
* **Estrategia escenarios de prueba:** Partiendo de los criterios de aceptación que debe cumplir el requerimiento, se establecen estrategias y escenarios de prueba específicos, según el sector industrial o área técnica en la que se desenvuelve el proyecto. Esta información servirá de insumo para planificar el control de calidad del proyecto.

Cabe destacar que no es necesario que esten todos estos requerimientos, estos se tienen que adaptar a las necesidades de nuestro proyecto. 

### Ejemplo
Queremos que un software tenga un botón de ayuda en cada módulo. Esto es un requisito, un requerimiento del cliente. Ahora lo vamos a materializar y  ese requisito lo vamos a asociar a un entregable. Es decir vamos a asociar un requisito a algo real y medible. Lo hemos asociado a un entregable parcial del entregable total que será el software. Esto nos va a permitir asegurar que ese requisito, que agrega valor al negocio, este vinculado a los objetivos del negocio y del proyecto. Dicho con otras palabras, este requisito convertido en entregable, va a generar la satisfacción del cliente del proyecto por que se ha cumplido.

![Ejemplo](https://uv-mdap.com/wp-content/uploads/2015/04/requisitos-especificaciones-proyecto.png)

Otro ejemplo, aplicado a una norma es el siguiente: 
[Matriz de trazabilidad iso21500](http://www.iso-21500.es/sites/default/files/ficheros_guia_iso21500/g_iso21500_alc_p05_matriz_trazabilidad_requisitos_v1_0.pdf)

## Referencias
[¿Qué es la matriz de trazabilidad de requerimientos?](http://www.pmoinformatica.com/2018/07/que-es-matriz-trazabilidad-requerimientos.html)

[Que es la Matriz de Trazabilidad de Requisitos del Proyecto](https://uv-mdap.com/blog/matriz-trazabilidad-requisitos-del-proyecto/)

[Trazabilidad de requisitos, ¿hasta qué nivel?
](https://www.netmind.es/knowledge-center/trazabilidad-de-requisitos-hasta-que-nivel/)

