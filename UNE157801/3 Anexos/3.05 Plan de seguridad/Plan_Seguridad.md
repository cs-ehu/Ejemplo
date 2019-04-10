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
+ Informe de evaluación de riesgos: estudio resultante de aplicar la metodología de evaluación anteriormente mencionada a los activos de información de la organización.
+ Plan de tratamiento de riesgos: documento que identifica las acciones de la dirección, los recursos, las responsabilidades y las prioridades para gestionar los riesgos de seguridad de la información, en función de las conclusiones obtenidas de la evaluación de riesgos, de los objetivos de control identificados, de los recursos disponibles, etc.
+ Procedimientos documentados: todos los necesarios para asegurar la planificación, operación y control de los procesos de seguridad de la información, así como para la medida de la eficacia de los controles implantados.
+ Registros: documentos que proporcionan evidencias de la conformidad con los requisitos y del funcionamiento eficaz del SGSI.
+ Declaración de aplicabilidad: (SOA -Statement of Applicability-, en sus siglas inglesas); documento que contiene los objetivos de control y los controles
contemplados por el SGSI, basado en los resultados de los procesos de evaluación y tratamiento de riesgos, justificando inclusiones y exclusiones.


Además de seguir estas consideraciones en los desarrollos de las aplicaciones, es muy importante prestar atención en los casos en que se utilicen componentes de terceros. En este sentido se recomienda disponer de un procedimiento documentado para la adquisición de componentes cuya evaluación se haya realizado conforme a normas europeas o internacionales (p.ej: cumple la [ISO/IEC 15408](https://www.iso.org/standard/50341.html), etc). Hay que tener en cuenta que la inclusión de un componente con vulnerabilidades en un sistema producirá probablemente un detrimento de la seguridad del mismo.

Una parte importante de los problemas de seguridad de los sistemas de información tiene su origen en defectos o carencias en las aplicaciones que los integran, lo cual eleva enormemente el riesgo de sufrir un incidente.

En una aplicación web, dividimos la seguridad en:

    1- Disponibilidad: Asegurar que las entidades o procesos autorizados tienen acceso a los activos cuando lo requieren.
    2- Autenticidad: Verificamos quien es el usuario. Generalmente, esto se hace pidiéndole un nombre de usuario y un password, es decir, se verifica que una entidad es quien dice ser o bien que garantiza la fuente de la que proceden los datos
    3- Integridad: Asegurar que los datos que se envían entre el cliente y el servidor no hayan sido alterados de forma no autorizada. Para esto, se utilizan generalmente algoritmos de encriptación.
    4- Confidencialidad: Asegurar que la información ni se pone a disposición, ni se revela a individuos, entidades o procesos no autorizados. Esto puede hacerse con algoritmos de encriptación y con certificados digitales.
    4-Trazabilidad: Verificar que las actuaciones de una entidad pueden ser imputadas exclusivamente a dicha entidad.
El análisis de las vulnerabilidades potenciales es un objetivo básico para el incremento de la seguridad en las aplicaciones web, que en ocasiones es subestimado como factor de riesgo crítico. El mantener parámetros que no son verificados, roles sin controlar, desbordamientos que se producen en la memoria son algunas de las situaciones que pueden provocar brechas de seguridad en las aplicaciones.
##### Control de Acceso y Autenticación
Se analizan la vulnerabilidades que pueden darse en las aplicaciones a la hora de identificar sus usuarios y los permisos que estos poseen. Recogiendo una serie de recomendaciones para el desarrollo de aplicaciones, que tenidas en cuenta, ayuden a mitigar los riesgos de producirse situaciones como el escalado de privilegios o la suplantación de identidad.

Hay dos procesos distintos que intervienen cuando se trata de permitir a un usuario acceder a páginas específicas de un sitio web:

- La autenticación es el proceso de identificación de un individuo sobre la base de sus credenciales (normalmente nombre de usuario y contraseña)

    El objetivo de la autenticación es decidir si "alguien es quien dice ser". Hay tres formas de reconocer a un usuario, que se conocen como factores:
        Algo que saben, como una contraseña o PIN
        Algo que tienen, tal como una licencia de conducir o tarjeta de crédito
        Algo que son, como las huellas digitales o la inserción de los patrones

- El control de acceso es el proceso de decidir si el usuario tiene permiso para ejecutar algo o no. También llamado autorización, se refiere a la gestión del acceso a los recursos protegidos y al proceso de determinar si un usuario está autorizado a acceder a un recurso particular. Por ejemplo, muchas aplicaciones web cuentan con recursos que sólo están disponibles para los usuarios autenticados, recursos que sólo están disponibles para los administradores, y los recursos que están disponibles para todos. Así, al establecer privilegios de acceso a los usuarios podemos asegurar la confidencialidad y disponibilidad de la información; pero, además, podemos:
    - Que sólo las personas autorizadas podrán acceder a ciertos recursos (sistemas, equipos, programas, aplicaciones, bases de datos, redes, etc…) por sus funciones laborales.
    - Nos permiten identificar y auditar los accesos realizados, estableciendo controles de seguridad internos.
    - Documentar los procedimientos de acceso a las diferentes aplicaciones que tratan datos personales.
    - En definitiva, controlar los accesos desde diferentes vertientes: red, sistemas y aplicaciones.

Hoy en día es muy común la escalada de privilegios, que no es más que la obtención de los privilegios del administrador. Por ello, debe existir una política o normativa específica que establezca el uso de mecanismos para impedir intentos de escalado de privilegios en nuestras aplicaciones web. 
Se considera que un sistema aplica políticas para evitar el escalado de privilegios cuando: No es posible acceder a información del sistema que pueda ser utilizada para la escalada de privilegios, no es posible ejecutar acciones haciéndose pasar por otro usuario, etc.
##### Codificación y Validación de entrada/salida
La debilidad de seguridad más común en aplicaciones web es la falta de validación apropiada de las entradas del cliente o del entorno.Teniendo en cuenta una serie de indicaciones y consejos a la hora de codificar nuestras aplicaciones podremos evitar problemas como la inyección de código SQL, de comandos, LDAP, XPath, XML o por XSS.
Esta debilidad lleva a casi todas las principales vulnerabilidades en las aplicaciones, tales como intérprete de inyección, ataques locale/Unicode, ataques al sistema de archivos y desbordamientos de memoria.

Nunca se debe confiar en los datos introducidos por el cliente, ya que podría manipularlos. Hay que garantizar que la aplicación sea robusta contra todas las formas de ingreso de datos, ya sea obtenida del usuario, de la infraestructura, de entidades externas o de sistemas de base de datos.

Existen vulnerabilidades asociadas a la validación de los datos,

Vulnerabilidad de la integridad de los datos El atacante manipula los datos introduciendo intencionadamente datos erróneos que manipulan la función de negocio.

Violación del formato de los datos Un atacante consigue introducir datos sin la sintaxis correcta, fuera de los limites de longitud, que contenga caracteres no permitidos, con signo incorrecto o fuera de los límites del rango. Esto provoca un mal funcionamiento de la aplicación.

Incumplimiento de las reglas de negocio Se introducen datos que no cumplen con las reglas de negocio. Lo que provoca un comportamiento no esperado de la aplicación.
##### Cifrado
Una de las principales medidas para asegurar la integridad y la confidencialidad de la información que se transmite a través de la red es la encriptación o codificación de los mensajes, evitando que, aún interceptando nuestra comunicación, no sea posible su entendimiento. Para ello, se resumen diversas situaciones en las que se debe cifrar la información y los algoritmos a utilizar.
El cifrado de datos es el proceso por el que una información legible se transforma mediante un algoritmo (llamado cifra) en información ilegible, llamada criptograma o secreto.

Esta información ilegible se puede enviar a un destinatario con muchos menos riesgos de ser leída por terceras partes. El destinatario puede volver a hacer legible la información (descifrarla) introduciendo la clave del cifrado.

La seguridad de un buen sistema de cifrado depende enteramente de la clave, y no debe depender del algoritmo de cifrado usado. Es decir, el algoritmo de cifrado a menudo es público, y es conocido por los posibles atacantes, pero si el algoritmo es bueno, esto no debe bastarles para descifrar el mensaje.

Los algoritmos usados en las comunicaciones seguras de Internet son públicos prácticamente siempre, por lo que es necesario centrarse en crear claves suficientemente seguras.

Además, la capacidad computacional de los ordenadores crece constantemente y cada vez son capaces de probar más y más claves por segundo de forma que puedan encontrar la clave simplemente probando una y otra vez.

No debe confundirse la clave del cifrado con las palabras de paso usadas para acceder a algunas aplicaciones: por ejemplo, para acceder a un cliente de correo online es necesaria una contraseña, que es enviada desde la ventana del explorador al servidor para que procese la petición de login. En este caso, la fuerza bruta (probar sucesivamente todas las claves posibles), es inútil, ya que casi todas las aplicaciones tienen limitado el número de intentos. No obstante, esa contraseña que enviamos desde el navegador, se envía cifrada al servidor a través de Internet. Si alguien consiguiera captar la información en la que viaja la contraseña sí podría introducir ese texto cifrado en una aplicación de criptoanálisis e intentar descifrarla y después usarla.
##### Gestión de Sesiones y Usuarios
El manejo de la sesión es uno de los aspectos críticos de la seguridad WEB. Veremos cómo es posible mejorar la seguridad en el control de acceso y la autenticación a través del manejo de las sesiones y de la información de los usuarios de nuestras aplicaciones.
Se detectan las siguientes vulnerabilidades significativas.

- Fijación de sesión que intenta explotar la vulnerabilidad de un sistema que permite a una persona fijar el identificador de sesión de otra persona. La mayoría de ataques de fijación del período de sesiones están basados en la web, y la mayoría depende de los identificadores de sesión que han sido aceptados de URL o datos POST

- Identificador de la sesión vulnerable, si no se reserva un tamaño adecuado el atacante, mediante técnicas de fuerza bruta atacante puede conocer el identificador de una sesión autenticada y por lo tanto hacerse con el control de la sesión.

- Manejo de la información de sesión errónea, ya sea por estar en un espacio compartido o mal encriptada, el atacante puede obtener datos de la sesión de otro usuario.

- Ataques de proxys o cachés, las aplicaciones web deben especificar mecanismos para impedir estos ataques de tal manera que no sea posible suplantar sesiones de otros usuarios.

##### Gestión de Errores y Excepciones
Uno de los focos que originan vulnerabilidades en nuestras aplicaciones se basa en la falta de control sobre los errores que se producen en su ejecución y el tratamiento correcto de las excepciones. Veremos cómo disminuir los riesgos de ser atacados a partir de la generación de un error o excepción en la aplicación.
El manejo de errores y excepciones son dos aspectos para realizar un seguimiento de fallos dentro de una aplicación. En términos generales, hay tres situaciones que hacen que las excepciones sean lanzadas:

- Excepciones que se producen en el código del cliente: El código cliente intenta hacer algo que no esta permitido por la API, de esta forma viola el contrato. El cliente puede tomar algún camino alternativo, si hay información útil proporcionada en la excepción. Por ejemplo: una excepción es lanzada cuando se está analizando un documento XML que no está bien formado. La excepción contiene información útil acerca de la localización en el documento XML donde se produce el problema. El cliente puede utilizar esta información para recuperarse del problema.

- Excepciones por fallos en los recursos mantenidos: Las excepciones se producen si existe un fallo derivado de un recurso. Por ejemplo, el agotamiento de memoria o el fallo de conexión cuando se cae una red. La respuesta del cliente a los recursos que fallan depende del contexto. El cliente puede reintentar la operación después de algún tiempo o simplemente registrar el fallo del recurso y detener la aplicación.

- Excepciones por errores derivados del código programado: En esta categoría, las excepciones se producen en la ejecución del código. El código cliente usualmente no puede hacer nada con estos errores.

##### Auditoría y Registro
La auditoría y el registro de los eventos que suceden al ejecutar nuestras aplicaciones nos permite monitorizarlas y detectar posibles intentos de ataques o intrusiones. Estudiar cómo mejorar la gestión de los archivos de log para que sean más seguros.

Un log es un registro oficial de eventos durante un rango de tiempo en particular. Para los profesionales en seguridad informática se utiliza para registrar datos o información sobre quién, qué, cuándo, dónde y por qué un evento ocurre en un dispositivo en particular o aplicación.

La mayoría de los logs son almacenados o desplegados en el formato estándar, el cual es un conjunto de caracteres para dispositivos comunes y aplicaciones. De esta forma cada log generado por un dispositivo en particular puede ser leído y desplegado en otro diferente.

También se le considera como aquel mensaje que genera el programador de un sistema operativo, alguna aplicación o algún proceso, en virtud del cual se muestra un evento del sistema.
##### Servicios Web
Otras actuaciones concretas para garantizar la seguridad en el uso de servicios web: la integridad, el no repudio y la confidencialidad de los mensajes, así como habilitar mecanismos para la identificación y autorización de servicios y usuarios.

Un ***Servicio Web*** es una aplicación que reside en un servidor centralizado y que utiliza una serie de protocolos estándares controlados por las organizaciones W3C, OASIS y el organismo WS-I como, por ejemplo, Simple Object Access Protocol (SOAP), Web Service Definition Language (WSDL) y Universal Description Discovery and Integration (UDDI), para intercambiar datos e información entre otras aplicaciones,independientemente del lenguaje de programación en el que estén desarrolladas y de la plataforma dónde se ejecuten.
W3C (World Wide Web Consortium) y OASIS (Organization for the Advancement of Structured Information Standards) son los comités responsables de la arquitectura y reglamentación de los Servicios Web.
WS-I es el organismo creado para mejorar la interacción y operatividad entre diferentes implementaciones de Servicios Web.

Un Servicio Web dispone de un interfaz público (API) descrito en un formato procesable por cualquier equipo o sistema llamado WSDL. WSDL es, además, el lenguaje de programación de esa interfaz pública que está basado en XML y contiene los requisitos funcionales necesarios para establecer una comunicación con el Servicio Web. El proveedor de los servicios es responsable de establecer y publicar los requisitos de seguridad que crea adecuados para proteger su servicio.

Un equipo cliente que se conecta a un Servicio Web puede leer ese fichero WSDL para determinar qué funciones están disponibles en el servidor. Los tipos de datos especiales se incluyen dentro del archivo WSDL en forma de XML Schema y el cliente utiliza SOAP para hacer la llamada a una de las funciones listadas en el WSDL.


***SOAP*** es el protocolo que define cómo se establece el intercambio de información mediante XML

***UDDI*** es el protocolo empleado para publicar la información del Servicio Web y que permite comprobar qué Servicios Web están disponibles.

Los Servicios Web se utilizan normalmente bajo el protocolo HTTP o HTTPS en los puertos TCP 80 y 443, respectivamente.

Desde el punto de vista de la seguridad, un Servicio Web presenta los mismos problemas que cualquier otra aplicación Web presente y accesible por Internet:

- Robo de sesiones
- SQL Injection
- XML Injection
- XPATH Injection
- Denegación de Servicio (DoS)
- Cross Site Scripting (XSS)
- Errores de configuración, etc...

Los archivos ***XML*** que conforman la estructura de los ficheros ***WSDL*** y mensajes ***SOAP***, que se utilizan en el funcionamiento de un Servicio Web, se intercambian entre el equipo cliente del usuario, el servidor frontal Web y el servidor de aplicaciones en forma de formularios en una petición SOAP.

Incluso se ejecutan en el servidor Web y son una puerta de entrada para diferentes ataques y vulnerabilidades Web. Es importante destacar que casi todos los Servicios Web están conectados a bases de datos.

**Bibliografía**

[Madeja](http://www.juntadeandalucia.es/servicios/madeja/contenido/subsistemas/entorno)

[iso27000](http://www.iso27000.es/download/doc_sgsi_all.pdf)
