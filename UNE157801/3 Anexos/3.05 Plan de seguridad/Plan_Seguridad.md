# Plan de seguridad
## Introducción
El documento de plan de seguridad debe definir la seguridad de las entidades y elementos relacionados con el
proyecto y las medidas que se deben utilizar para integrar ésta dentro del proyecto.Por lo tanto se definirían los aspectos técnicos, organizativos y legales de la gestión de la seguridad.
En este documento deben indicarse las metodologías y herramientas a utilizar en la gestión de la seguridad en el proyecto e identificar claramente los puntos críticos donde la seguridad es determinante o está impuesta por ley.
La gestión de la seguridad de la información queda recogida en las [normas ISO 27000](http://www.iso27000.es/download/doc_sgsi_all.pdf) y de la [Ley Orgánica de Protección de Datos](https://www.boe.es/eli/es/lo/2018/12/05/3).

## ¿Qué es un SGSI?
Para garantizar que la seguridad de la información es gestionada correctamente, se debe hacer uso de un proceso sistemático, documentado y conocido por toda la organización, desde un enfoque de riesgo empresarial. Este proceso es el que constituye un Sistema de Gestión de la Seguridad de la Información (SGSI),  ISMS es el concepto equivalente en idioma inglés, siglas de Information Security Management System. 

La seguridad de la información, según ISO 27001, consiste en la preservación de su confidencialidad, integridad y disponibilidad, así como de los sistemas implicados en su tratamiento, dentro de una organización. Así pues, estos tres términos constituyen la base sobre la que se cimienta todo el edificio de la seguridad de la información:
- Confidencialidad: la información no se pone a disposición ni se revela a individuos, entidades o procesos no autorizados.
- Integridad: mantenimiento de la exactitud y completitud de la información y sus métodos de proceso.
- Disponibilidad: acceso y utilización de la información y los sistemas de tratamiento de la misma por parte de los individuos, entidades o procesos autorizados cuando lo requieran.

## ¿Qué incluye un SGSI?
En  el  ámbito  de  la  gestión  de  la  calidad  según  ISO  9001,  siempre  se  ha  mostrado  gráficamente  la  documentación  del  sistema  como  una  pirámide  de  cuatro  niveles.  Es  posible  trasladar  ese  modelo  a  un  Sistema  de  Gestión  de  la  Seguridad  de  la  Información basado en ISO 27001 de la siguiente forma:
![](https://i.imgur.com/ZA1K8An.png)
+ Documentos de Nivel 1
    + Manual de seguridad: Sería el documento que inspira y dirige todo el sistema, el que expone y determina las intenciones, alcance, objetivos, responsabilidades, políticas y directrices principales, etc., del SGSI.
+ Documentos de Nivel 2
    + Procedimientos: documentos en el nivel operativo, que aseguran que se realicen de forma eficaz la planificación, operación y control de los procesos de seguridad de la información.
+ Documentos de Nivel 3
    + Instrucciones, checklists y formularios: documentos que describen cómo se realizan las tareas y las actividades específicas relacionadas con la seguridad de la información.
+ Documentos de Nivel 4
    + Registros: documentos que proporcionan una evidencia objetiva del cumplimiento de los requisitos del SGSI; están asociados a documentos de los otros tres niveles como output que demuestra que se ha cumplido lo indicado en los mismos.

De manera específica, ISO 27001 indica que un SGSI debe estar formado por los siguientes documentos (en cualquier formato o tipo de medio):

+ Alcance del SGSI: ámbito de la organización que queda sometido al SGSI, incluyendo una identificación clara de las dependencias, relaciones y límites que existen entre el alcance y aquellas partes que no hayan sido consideradas (en aquellos casos en los que el ámbito de influencia del SGSI considere un subconjunto de la organización como delegaciones, divisiones, áreas, procesos, sistemas o tareas concretas).
+ Política y objetivos de seguridad: documento de contenido genérico que establece el compromiso de la dirección y el enfoque de la organización en la gestión de la seguridad de la información.
+ Procedimientos y mecanismos de control que soportan al SGSI: aquellos procedimientos que regulan el propio funcionamiento del SGSI.
+ Enfoque de evaluación de riesgos: descripción de la metodología a emplear (cómo se realizará la evaluación de las amenazas, vulnerabilidades, probabilidades de ocurrencia e impactos en relación a los activos de información contenidos dentro del alcance seleccionado), desarrollo de criterios de aceptación de riesgo y fijación de niveles de riesgo aceptables 
***[Estudio sobre la búsqueda de vulnerabilidades](https://github.com/cs-ehu/Ejemplo/blob/develop/UNE157801/3%20Anexos/3.05%20Plan%20de%20seguridad/Busqueda_Vulnerabilidades.md)***
+ Informe de evaluación de riesgos: estudio resultante de aplicar la metodología de evaluación anteriormente mencionada a los activos de información de la organización.
+ Plan de tratamiento de riesgos: documento que identifica las acciones de la dirección, los recursos, las responsabilidades y las prioridades para gestionar los riesgos de seguridad de la información, en función de las conclusiones obtenidas de la evaluación de riesgos, de los objetivos de control identificados, de los recursos disponibles, etc.
+ Procedimientos documentados: todos los necesarios para asegurar la planificación, operación y control de los procesos de seguridad de la información, así como para la medida de la eficacia de los controles implantados.
+ Registros: documentos que proporcionan evidencias de la conformidad con los requisitos y del funcionamiento eficaz del SGSI.
+ Declaración de aplicabilidad: (SOA -Statement of Applicability-, en sus siglas inglesas); documento que contiene los objetivos de control y los controles
contemplados por el SGSI, basado en los resultados de los procesos de evaluación y tratamiento de riesgos, justificando inclusiones y exclusiones.

## ¿Cómo se implementa un SGSI?
Para establecer y gestionar un Sistema de Gestión de la Seguridad de la Información en base a ISO 27001, se utiliza el ciclo continuo PDCA, tradicional en los sistemas de gestión de la calidad que significa "Planificar-Hacer-Controlar-Actuar" siendo este un enfoque de mejora continua:

+ Plan (planificar): es una fase de diseño del SGSI, realizando la evaluación de riesgos de seguridad de la información y la selección de controles adecuados. 
+ Do (hacer): es una fase que envuelve la implantación y operación de los controles. 
+ Check (verificar): es una fase que tiene como objetivo revisar (monitorizar) y evaluar el desempeño (eficiencia y eficacia) del SGSI. 
+ Act (actuar): en esta fase ademas de mantener el SGSI tambien se realizan cambios cuando sea necesario para llevar de vuelta el SGSI a máximo rendimiento. 

## Conclusión
Además de seguir estas consideraciones en los desarrollos de las aplicaciones, es muy importante prestar atención en los casos en que se utilicen componentes de terceros. En este sentido se recomienda disponer de un procedimiento documentado para la adquisición de componentes cuya evaluación se haya realizado conforme a normas europeas o internacionales (p.ej: cumple la [ISO/IEC 15408](https://www.iso.org/standard/50341.html), etc). Hay que tener en cuenta que la inclusión de un componente con vulnerabilidades en un sistema producirá probablemente un detrimento de la seguridad del mismo.

Una parte importante de los problemas de seguridad de los sistemas de información tiene su origen en defectos o carencias en las aplicaciones que los integran, lo cual eleva enormemente el riesgo de sufrir un incidente.

## Enlaces de interes
[Implantación de un SGSI en la empresa ](https://www.incibe.es/extfrontinteco/img/File/intecocert/sgsi/img/Guia_apoyo_SGSI.pdf)

[ISO/IEC 27001](https://es.wikipedia.org/wiki/ISO/IEC_27001)

## Bibliografía

[Madeja](http://www.juntadeandalucia.es/servicios/madeja/contenido/subsistemas/entorno)

[ISO 27000](http://www.iso27000.es/download/doc_sgsi_all.pdf)

[SGSI Wikipedia](https://es.wikipedia.org/wiki/Sistema_de_gesti%C3%B3n_de_la_seguridad_de_la_informaci%C3%B3n)
