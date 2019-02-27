:::info
Estructura de las bases de datos
>[name=Miguel Ángel Blanco]
:::

# Estructura de las bases de datos
## Índice
* [Introducción](#Introducción)
* [Estructura de una base de datos](#Estructura-de-una-base-de-datos)
    * [Elementos que conforman la estructura](#Elementos-que-conforman-la-estructura)
    * [Que consta la estructura](#Que-consta-la-estructura)
* [Fuentes-utilizadas](#Fuentes-utilizadas)
## Introducción

Una **base de datos** es un conjunto de datos el cuál forma parte de un mismo contexto y están almacenados de forma sistemática para un uso futuro. El ejemplo más claro de algo parecido a esto en el mundo real podría ser el de una biblioteca, una biblioteca está compuesta en su mayoría por textos en papel indexados para su consulta. Un ejemplo de algo así a nivel de base de datos podría ser lo siguiente.

![](https://2.bp.blogspot.com/-4N-kGyoBXOo/UHjN0TWG_SI/AAAAAAAAAAQ/_TVOxXyAa98/s1600/Captura.PNG)

Y es que tal y como se puede observar aquí, la representación de los datos es muy importante y debe estar por tanto jerarquizada. Por lo que entramos en contacto con que para una base de datos uno de los pilares fundamentales es su **estructura**.
## Estructura de una base de datos
### Elementos que conforman la estructura
La estructura de las bases de datos viene dada principalmente por **tres elementos** los *registros*, los *campos* y por último las *relaciones*. Estos elementos componen todo tipo[^1] de bases de datos y están estrechamente relacionados a nivel conceptual, por lo que es necesaria la explicación de estos.

[^1]: Con **tipo** se hace referencia a que no hay un solo tipo de bases de datos, ya que puede haber relacionales, no relacionales....

* **Registros**: Es una colección de campos o atributos. Un registro compone lo que viene a ser una fila en una tabla de una base de datos.

* **Campos**: Los campos son un elemento dentro de un registro y solo pueden contener un valor cada uno. Son aquellos elementos que forman las columnas de las tablas.

* **Relaciones**: Las relaciones son lo que une a las tablas y asocia a los registros una asociación la cual es estrictamente binaria entre una tabla u otra las cuales comparten un mismo *contexto*.

Dadas estas definiciones podemos hacernos una idea de lo básico que forma una estructura de una base de datos, de como una base de datos la forman tablas conformadas por **registros** que componen **campos** y están **relacionadas** entre sí. Pero la estructura en una base de datos engloba más información que la provista y por ello merece más explicación la cual daremos a continuación.

*Ejemplo de dos tablas relacionadas entre sí*

--Tabla película

| IdPel | Título | Género |
| -------- | -------- | -------- |
| ENTERO     | STRING     | STRING    |

--Tabla stock de películas



| IdPelStock | Stock |
| -------- | -------- |
| ENTERO (referencia a IdPel en la tabla película)    | ENTERO     |



### Que consta la estructura
Definido ya lo básico de lo que conforma a nivel básico una base de datos, podemos describir de que consta una estructura de una base de datos. Y es que una estructura de una base de datos consta principalmente de un **modelo relacional de datos** al que le sigue sus **submodelos de datos** y estos están comprendidos dentro de un **esquema de almacenamiento** con el que se puede realizar acciones a través de un **sublenguaje de datos**. Estos componentes de la estructura son lo que realmente soportan una base de datos a lo que es nivel físico y lógico, por lo que vale la pena definir estos conceptos de los que consta la estructura.

* **Modelo relacional de datos**: En el nivel conceptual, el modelo relacional de datos está representado por una colección de relaciones almacenadas. Cada **registro** de tipo conceptual en un modelo relacional de datos se implanta como un archivo almacenado distinto.

* **Submodelo de datos**: Los esquemas externos de un modelo relacional se definen como submodelos relcionales de datos. Cada uno tiene uno o más escenarios para definir los datos requeridos por una aplicación.Un escenario puede incluir datos de una o más tablas de datos. Cada programa de aplicación está provisto de un buffer[^2] donde el DBMS[^3] puede depositar los datos recuperados de la base para su procesamiento, o puede guardar temporalmente sus salidas antes de que el DBMS las escriba en la base de datos.

* **Esquema de almacenamiento**: Es el sistema de almacenamiento que almacenará los datos de una base de datos. En el nivel interno, cada tabla base se almacena como un archivo. Para las recuperaciones sobre las claves principales o secundarias se pueden establecer uno o más índices para acceder a un archivo almacenado.

* **Sublenguaje de datos**: Es un lenguaje de manejo de datos para el sistema relacional. Sirve para interactuar por completo con la base de datos pudiendo hacer operaciones de diferentes tipos de entrada de datos o salida.

[^2]: Área de trabajo de usuario.
[^3]: Database Management System, el controlador de la base de datos.

## Fuentes utilizadas

1. [*Base de datos (información general)*](https://es.wikipedia.org/wiki/Base_de_datos)
2. [*Cual es la estructura de una base de datos*](https://renecordobacar.wordpress.com/2010/04/15/para-empezar-%c2%bf-cual-es-la-estructura-de-una-base-de-datos/)
3. [*Información de una estructura de bases de datos*](https://yuyiiz.wordpress.com/2010/04/13/cual-es-la-estructura-de-una-base-de-datos/)

>Calidad de Software - Miguel Ángel Blanco - 27/2/2019








