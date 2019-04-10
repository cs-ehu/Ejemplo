# Plan de seguridad
La gestión de la seguridad de la información queda recogida en las [normas ISO 27000](http://www.iso27000.es/download/doc_sgsi_all.pdf) y de la [Ley Orgánica de Protección de Datos](https://www.boe.es/eli/es/lo/2018/12/05/3).

La seguridad de la información, según ISO 27001, consiste en la preservación de su confidencialidad, integridad y disponibilidad, así como de los sistemas implicados en su tratamiento, dentro de una organización. Así pues, estos tres términos constituyen la base sobre la que se cimienta todo el edificio de la seguridad de la información:
- Confidencialidad: la información no se pone a disposición ni se revela a individuos, entidades o procesos no autorizados.
- Integridad: mantenimiento de la exactitud y completitud de la información y sus métodos de proceso.
- Disponibilidad: acceso y utilización de la información y los sistemas de tratamiento de la misma por parte de los individuos, entidades o procesos autorizados cuando lo requieran.

Para garantizar que la seguridad de la información es gestionada correctamente, se debe hacer uso de un proceso sistemático, documentado y conocido por toda la organización, desde un enfoque de riesgo empresarial. Este proceso es el que constituye un Sistema de Gestión de la Seguridad de la Información (SGSI). 

La documentación del sistema se ve como una pirámide de cuatro niveles:
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
***En este punto es el que me centro el desarrollo
profundizando en [la búsqueda de vulnerabilidades]()***
+ Informe de evaluación de riesgos: estudio resultante de aplicar la metodología de evaluación anteriormente mencionada a los activos de información de la organización.
+ Plan de tratamiento de riesgos: documento que identifica las acciones de la dirección, los recursos, las responsabilidades y las prioridades para gestionar los riesgos de seguridad de la información, en función de las conclusiones obtenidas de la evaluación de riesgos, de los objetivos de control identificados, de los recursos disponibles, etc.
+ Procedimientos documentados: todos los necesarios para asegurar la planificación, operación y control de los procesos de seguridad de la información, así como para la medida de la eficacia de los controles implantados.
+ Registros: documentos que proporcionan evidencias de la conformidad con los requisitos y del funcionamiento eficaz del SGSI.
+ Declaración de aplicabilidad: (SOA -Statement of Applicability-, en sus siglas inglesas); documento que contiene los objetivos de control y los controles
contemplados por el SGSI, basado en los resultados de los procesos de evaluación y tratamiento de riesgos, justificando inclusiones y exclusiones.


Además de seguir estas consideraciones en los desarrollos de las aplicaciones, es muy importante prestar atención en los casos en que se utilicen componentes de terceros. En este sentido se recomienda disponer de un procedimiento documentado para la adquisición de componentes cuya evaluación se haya realizado conforme a normas europeas o internacionales (p.ej: cumple la [ISO/IEC 15408](https://www.iso.org/standard/50341.html), etc). Hay que tener en cuenta que la inclusión de un componente con vulnerabilidades en un sistema producirá probablemente un detrimento de la seguridad del mismo.

Una parte importante de los problemas de seguridad de los sistemas de información tiene su origen en defectos o carencias en las aplicaciones que los integran, lo cual eleva enormemente el riesgo de sufrir un incidente.



**Bibliografía**

[Madeja](http://www.juntadeandalucia.es/servicios/madeja/contenido/subsistemas/entorno)

[iso27000](http://www.iso27000.es/download/doc_sgsi_all.pdf)
