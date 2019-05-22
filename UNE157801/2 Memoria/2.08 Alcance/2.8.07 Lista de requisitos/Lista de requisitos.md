
# Lista de requisitos

## Índice
* [Introducción](#Introducción)
* [Clasificación de los requerimientos funcionales](#Clasificación-de-los-requerimientos-funcionales)
* [Clasificación de los requerimientos no funcionales](#Clasificación-de-los-requerimientos-no-funcionales)


## Introducción

  Los requisitos software son la descripción de las características y las funcionalidades del sistema 'target'. Los requisitos nos comunican las expectativas de los consumidores de productos software. Los requisitos pueden ser obvios o estar ocultos, conocidos o desconocidos, esperados o inesperados, desde el punto de vista del cliente.
  
  
## Clasificación de los requerimientos funcionales

    1. Descripciones de los datos a ser ingresados en el sistema.
    2. Descripciones de las operaciones a ser realizadas por cada pantalla.
    3. Descripción de los flujos de trabajo realizados por el sistema.
    4. Descripción de los reportes del sistema y otras salidas.
    5. Definición de quien puede ingresar datos en el sistema.
    6. Como el sistema cumplirá los reglamentos y regulaciones de sector o generales que le sean aplicables.

## Clasificación de los requerimientos no funcionales

    1. Requerimientos no funcionaes de producto     
        * Usabilidad
        * Eficiencia
        * Dependencia
        * Seguridad
    2. Requerimientos no funcionaes organizacionales
        *Entorno
        *Organizacionales
        *Desarrollo
    3. Requerimientos no funcionaes externos 
        *Regulatorios
        *Éticos
        *Legislativos

Los ingenieros de requisitos deben elaborar la propuesta en forma de requisitos del sistema software a desarrollar usando como entrada la información que se va generando en el procedimiento [Identificar las necesidades de negocio de clientes y usuarios](http://www.juntadeandalucia.es/servicios/madeja/contenido/procedimiento/19). Lo habitual es comenzar por los aspectos más generales del sistema (su visión general), para ir avanzando en el nivel de detalle hasta que se considere suficiente como para que pueda continuarse el desarrollo sin tener que plantear preguntas continuas sobre la conducta del sistema a desarrollar.

En el apartado de la UNE 2.07 se recoge información relativa a la documentación de los requisitos, así como los modos de obtener los requisitos. 

En este apartado nos detenemos en la realización de la lista de requisitos, que consta de un ***Identificador único*** para cada requisito y otros atributos.

![Ejemplo de una lista de requisitos](http://www.juntadeandalucia.es/servicios/madeja/sites/default/files/imagecache/wysiwyg_imageupload_lightbox_preset/wysiwyg_imageupload/10/MadejaIR-PlantillaRI.png)

## Atributos de los requisitos
#### Descripción
Los atributos de los requisitos son información que se añade a la descripción de los requisitos por diversos motivos (identificación, trazabilidad, facilitar su gestión, etc.). En cierta forma, son la metainformación de los requisitos.

A continuación, se describen los atributos generales de los requisitos y los relacionados de manera específica con la gestión del proyecto.

###### Identificador único
Para permitir la trazabilidad, todo requisito debe tener un identificador que no debe cambiar a lo largo de su ciclo de vida, o al menos no debe cambiar una vez que el requisito se incluya en una línea base. Aunque un requisito se elimine, su identificador no debe reutilizarse, sobre todo si el requisito ha formado parte de alguna línea base.
En caso de que exista una descomposición jerárquica de requisitos, si el padre tiene el identificador ID-XXX, sus requisitos hijos pueden utilizar ese mismo identificador seguido de un punto y un número secuencial. Así, los hijos del requisito identificado como RG-001, podrían identificarse como RG-001.01, RG-001.02, y así sucesivamente.

###### Nombre descriptivo
Normalmente, aparte de un identificador único, los requisitos suelen atribuirse con un nombre corto para hacer referencia a ellos de forma algo más humana que si sólo se usara el identificador. Es precisamente la dificultad de generar nombres únicos lo que hace imprescindible a los identificadores únicos.

Ejemplos de nombres descriptivos de requisitos pueden ser: Gestionar la presentación de solicitudes, Información sobre incidencias, Registrar una nueva incorporación, etc.

###### Información de versión
Los requisitos deben estar bajo control de configuración, por lo que se van generando diferentes versiones a lo largo de un proyecto. Para evitar confusiones entre distintas versiones de un mismo requisitos, es importante conocer el número o etiqueta de la versión de un requisito (por ejemplo 1.0, 2.3, 1.0Beta, 2.1RC2, etc.) y la fecha en que se creó dicha versión.

En el caso de que no se dispongan de herramientas de gestión de requisitos que permitan un control de configuración a nivel de requisitos individuales, la versión de los requisitos puede hacerse coincidir con la versión del documento en el que se describen.

###### Trazabilidad
Para mantener la trazabilidad, los requisitos deben estar convenientemente trazados hacia adelante y hacia atrás en el proceso de desarrollo. Así, se suelen mantener las trazas hacia:
* Autores: son los autores del requisito. Lo habitual es atribuir los requisitos con el nombre y organización a la que pertenecen las personas que lo han redactado. Esta información es importante para poder gestionar posibles no conformidades de calidad de los requisitos y para solventar dudas o conflictos que puedan surgir.
* Fuentes: son las personas (casi siempre clientes y/o usuarios) o documentos que han proporcionado información sobre el requisito. Esta información es importante para poder solventar posibles dudas o conflictos que puedan surgir.
* Dependencias: otros productos de desarrollo de los que depende el requisito. Es el concepto más habitual de trazabilidad, en el que se atribuyen los requisitos con la información de otros productos de desarrollo que, en caso de cambio, podrían tener impacto sobre el requisito. Esta información es fundamental para poder realizar un análisis de impacto de un cambio dentro del Procedimiento de Control de Cambios establecido en el proyecto. Estas dependencias suelen ser con productos previos en el desarrollo (por ejemplo dependencias desde requisitos específicos hacia requisitos generales, desde casos de uso hacia modelos de negocio, etc.) o con productos simultáneos en el desarrollo (por ejemplo dependencias entre requisitos específicos, entre casos de uso, etc.).
La información de las dependencias no siempre se muestra asociada a cada requisito, sino que es habitual representarla en forma de matriz de trazabilidad o de listas de trazabilidad.

###### Importancia
La importancia de un requisito indica la relevancia del requisito para los clientes y usuarios, y suele estar relacionada con la importancia de los objetivos de negocio que el requisito ayuda a cumplir. 
La importancia se suele expresar de diversas formas:

* Valores numéricos: se asigna un valor numérico a la importancia del requisito, normalmente entre 0 y 3 o entre 0 y 5. Algunas propuestas asumen que el valor mínimo (cero o uno normalmente) es la máxima importancia, mientras que otras asumen que es el valor máximo el que representa la importancia.
* Valores enumerados: se crea una escala de prioridad con valores como alta, media y baja. También se pueden usar una escala ordinal con literales con expresiones como vital, importante y quedaría bien y se asigna a cada requisito un valor. Puede existir una correspondencia directa con valores numéricos (por ejemplo alta = 0, media = 1 y baja = 2).
###### Estabilidad
La estabilidad de un requisito indica una estimación de la probabilidad de que el requisito no cambie durante el resto del desarrollo. Este atributo es especialmente interesante para detectar posibles fuentes de cambios en un proyecto y prepararse para ello. Puede expresarse como un valor numérico (como un porcentaje de probabilidad por ejemplo) o como un valor enumerado (por ejemplo alta, media o baja).

###### Comentarios
Es conveniente dejar abierta la posibilidad de atribuir los requisitos con alguna otra información no prevista inicialmente. Algunas herramientas de gestión de requisitos permiten definir nuevos atributos de requisitos de forma dinámica. Si no se dispone de esta posibilidad, se debe recurrir a atribuirlos con los comentarios que se crea oportuno. De hecho, algunas herramientas de gestión de requisitos no sólo permiten comentarios, sino que incorporan funcionalidades similares a los foros para que se puedan desarrollar discusiones sobre los requisitos.

###### Atributos relacionados con la gestión del proyecto
Para facilitar la gestión del proyecto se suelen añadir algunos atributos específicos a los requisitos. Estos atributos no son propiedades intrínsecas de los requisitos, sólo tienen sentido en el contexto de un proyecto. Por esta razón, suele ser conveniente mantener la información de estos atributos separada de los documentos que deben aprobarse por clientes y usuarios y de los que se deben generar líneas base, ya que sus valores cambian con frecuencia sin necesidad de una petición de cambio en los requisitos que lo justifique.

En el caso de herramientas de gestión de requisitos, esta información se mantiene pero no se incluyen en los documentos generados para ser aprobados. Si no se dispone de herramientas de gestión de requisitos, esta información se puede mantener aparte, por ejemplo en una hoja de cálculo, mientras que los requisitos y los demás atributos se mantienen en un documento de texto.

Algunos de los atributos más habituales de este tipo se describen a continuación.

* Estado

El estado de un requisito indica la situación en la que se encuentra el requisito en el ciclo de vida de los requisitos definido en el proyecto. El estado de los requisitos es útil para conocer la evolución del proceso de Ingeniería de Requisitos y poder gestionarlo adecuadamente.

* Prioridad

En desarrollos no lineales, la prioridad de un requisito es un indicador para decidir en qué iteraciones se acomete su implementación. Los de mayor prioridad se acometerán en las primeras iteraciones, los de prioridad media en las iteraciones intermedias, y los de prioridad baja se acometerán en las últimas iteraciones si se disponen de los recursos necesarios.
La prioridad de un requisito la establece la dirección del proyecto en función de la importancia del mismo para clientes y usuarios y de otros factores como aspectos técnicos, de recursos humanos, relación con otros proyectos, etc.
Al igual que en el caso de la importancia, se puede asignar un valor numérico o un valor enumerado, por ejemplo alta, media y baja o usar literales como inmediatamente, hay presión y puede esperar.

* Versión del sistema en la que se implementará

Este atributo indica en qué versión del sistema está prevista la implementación del requisito. Lo establece la dirección del proyecto una vez establecida la prioridad y planificadas las versiones que se van a desarrollar y entregar al cliente. Normalmente, los requisitos de prioridad más alta se implementarán en las primeras versiones, aunque razones técnicas pueden postergar su implementación hasta versiones más avanzadas.

* Coste estimado

Este atributo es un estimador del coste de la implementación del requisitos, normalmente basado en la complejidad del mismo. Puede expresarse en horas-hombre o en su correspondiente coste económico.

* Atributos relacionados con los Casos de Uso

Para facilitar la gestión del proyecto se suelen añadir algunos atributos específicos a los casos de uso que aumentan su especificación y comprensión. A continuación se detallan las características de los mismos:

  - Precondición: condiciones sobre el estado del sistema o su entorno, expresadas en lenguaje natural, que deben cumplirse para que se pueda iniciar el caso de uso.
  - Postcondición: condiciones sobre el estado del sistema o su entorno, expresadas en lenguaje natural, que deben cumplirse después de la terminación con éxito del caso de uso.
  - Secuencia normal: secuencia de interacciones del caso de uso cuando se desarrolla con normalidad y termina con éxito. En cada paso, un actor o el sistema realiza una o más acciones, o se realiza otro caso de uso. Una secuencia de pasos puede tener una condición de realización, en cuyo caso debe indicarse si el caso termina con éxito en esa secuencia o se cancela (si no se especifica nada se asume que continúa en el siguiente paso).
  - Excepciones: comportamiento del sistema en el caso de que se produzca alguna situación excepcional durante la realización de un paso determinado. Después de realizar los pasos asociados al tratamiento de la excepción, el caso de uso puede continuar la secuencia normal o cancelarse, dejando al sistema en el mismo estado que antes de comenzar el caso de uso.
  - Rendimiento: opcionalmente, en los pasos del caso de uso que realiza el sistema, se puede indicar el tiempo máximo que puede tardar el sistema en realizar la acción especificada.
  - Frecuencia: opcionalmente, se puede indicar el número de veces por unidad de tiempo que se espera que se realice el caso de uso cuando el sistema a desarrollar esté en explotación. Aquellos casos de uso con una frecuencia elevada (varias veces por segundo, por ejemplo), deben implementarse de forma que cumplan posibles requisitos de rendimiento.
* Atributos relacionados con los Requisitos de Conducta

Para facilitar la gestión del proyecto se suelen añadir algunos atributos específicos a los requisitos de conducta que aumentan su especificación y comprensión. 
###### Buenas prácticas y recomendaciones de uso
A la hora de establecer los atributos de los requisitos se deben de considerar las siguientes recomendaciones:

* Asegurarse que se cumplimentan todos los atributos asociados a los requisitos, ya que de ellos dependen cuestiones como la trazabilidad, el tiempo de vida de la información, la planificación del desarrollo , etc.
* Establecer el coste estimado en función de una metodología de planificación, especialmente útil si se relaciona con los casos de uso que se deriven del requisito establecido.

[Bibliografía](http://www.juntadeandalucia.es/servicios/madeja/contenido/recurso/409)
  

