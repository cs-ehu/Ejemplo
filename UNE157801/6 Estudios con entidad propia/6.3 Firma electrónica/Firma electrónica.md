
# Firma electrónica


*Referencia Wikipedia:* La **firma electrónica** es un concepto jurídico, equivalente electrónico al de la firma manuscrita, donde una persona acepta el contenido de un mensaje electrónico a través de cualquier medio electrónico válido.

*Ley 59/2003, de 19 de diciembre, de firma electrónica*: "La **firma electrónica** es el conjunto de datos en forma electrónica, consignados junto a otros o asociados con ellos, que pueden ser utilizados como medio de identificación del firmante."

La **firma electrónica avanzada** es la firma electrónica que permite identificar al firmante y
detectar cualquier cambio de los datos firmados, que está vinculada al firmante de
manera única y a los datos a los que se refiere, y que ha sido creada por medios que el firmante puede
mantener bajo su exclusivo control.

A su vez, se considera **firma electrónica reconocida** la firma electrónica avanzada basada en un
certificado reconocido y generada mediante un dispositivo seguro de creación de firma. La firma
electrónica reconocida tendrá respecto de los datos consignados en forma electrónica el
mismo valor que la firma manuscrita en relación con los consignados en papel.

#### Funciones:
1. Identificar al firmante de manera inequívoca
2. Asegurar la integridad del documento firmado. Asegura que el documento firmado es exactamente el mismo que el original y que no ha sufrido alteración o manipulación.
3. Asegurar el no repudio del documento firmado. Los datos que utiliza el firmante para realizar la firma son únicos y exclusivos y, por tanto, posteriormente, no puede decir que no ha firmado el documento.


#### ¿Qué se necesita para tener una firma electrónica?

El certificado digital o un DNI electrónico es la clave para poder tener una firma electrónica. Con una de estas dos piezas electrónicas ya será posible tener la firma electrónica.
El certificado electrónico o el DNI electrónico contiene unas claves criptográficas que son los elementos necesarios para firmar. Los certificados electrónicos tienen el objetivo de identificar inequívocamente a su poseedor y son emitidos por Proveedores de Servicios de Certificación.


#### Proceso de Firma Electrónica
*Referencia de la página del gobierno de España*
![](https://i.imgur.com/RGhfkdS.png)

1. El usuario dispone de un documento electrónico (una hoja de cálculo, un pdf, una imagen, incluso un formulario en una página web) y de un certificado que le pertenece y le identifica.
2. La aplicación o dispositivo digital utilizados para la firma realiza un resumen del documento. El resumen de un documento de gran tamaño puede llegar a ser tan solo de unas líneas. Este resumen es único y cualquier modificación del documento implica también una modificación del resumen.
3. La aplicación utiliza la clave privada para codificar el resumen.
4. La aplicación crea otro documento electrónico que contiene ese resumen codificado. Este nuevo documento es la firma electrónica.

#### ¿Qué utilidad tiene?
Las utilidades se pueden dividir en tres categorías:
1. **En relaciones con otras personas**: Permite garantizar la identidad de la
persona que realiza una gestión, así como la integridad del contenido de los
mensajes que envía. Es por esto que proporciona el máximo grado de confidencialidad y seguridad en Internet.
2. **En relaciones con las Administraciones Públicas**: El Art. 16.2 de la Ley 59/2003 de Firma Electrónica indica que: ”*La
Administración General del Estado empleará, en la medida de lo posible,
sistemas que garanticen la compatibilidad de los instrumentos de firma
electrónica incluidos en el documento nacional de identidad electrónico con
los distintos dispositivos y productos de firma electrónica generalmente
aceptados*”. Esto significa que la Administración General del Estado será uno de los principales proveedores de servicios relacionados con la firma electrónica, por lo que ya no será necesaria la presencia física para realizar ciertos trámites.
3. **En relaciones con empresas**: Las empresas podrán desarrollar diferentes servicios basados en la
identificación y firma electrónica, de forma que dinamicen la relación
comercial con sus clientes.

#### ¿Cómo se puede firmar un documento?
En una figura más arriba se puede ver el proceso a seguir para realizar la firma electrónica de un *input*. Esta imágen es útil para hacerse a la idea del modo de funcionamiento, pero no es relevante de cara a un usuario interesado en firmar un documento. Si lo que nos interesa es el resultado final y no tanto el proceso, habrá que buscar herramientas que nos ayuden a generar la firma.

La cantidad de herramientas que existen es enorme. Por poder, se podría incluso implementar una herramienta propia. Sin embargo, en esta sección hablaremos sobre una de las herramientas de criptografía más importantes y potentes del momento: **OpenSSL**.

Según Wikipedia, OpenSSL es "*un robusto paquete de herramientas de administración y bibliotecas relacionadas con la criptografía, que suministran funciones criptográficas a otros paquetes como OpenSSH y navegadores web (para acceso seguro a sitios HTTPS).

Estas herramientas ayudan al sistema a implementar el Secure Sockets Layer (SSL), así como otros protocolos relacionados con la seguridad, como el Transport Layer Security (TLS). OpenSSL también permite crear certificados digitales que pueden aplicarse a un servidor, por ejemplo Apache.*"

Además de eso, OpenSSL ofrece herramientas como funciones hash criptográficas (las vamos a necesitar para firmar el documento) y generadores de claves (hay varios tipos diferentes, los que nos interesan en nuestro caso serían los pares de claves pública/privada).

El proceso para firmar un documento mediante OpenSSL usando la línea de comandos es el siguiente:
  1. Generar una clave privada: `openssl genrsa -des3 -out private.pem 2048` (Genera una clave privada en el archivo private.pem)
  2. Generar una clave pública: `openssl rsa -in private.pem -outform PEM -pubout -out public.pem` (Extrae la clave pública de private.pem al fichero public.pem)
  
Suponiendo que el fichero que queremos firmar digitalmente es `data.txt`:
  1. Generar un hash correspondiente al fichero `data.txt`: `openssl dgst -sha256 data.txt > hash.txt` (El hash se almacenara en el fichero hash.txt)
  2. Generar una firma digital: `openssl rsautl -sign -inkey privatekey.pem -keyform PEM -in hash.txt > signature.txt` (Genera la firma en `signature.txt` del fichero `hash.txt`usando la clave `privatekey.pem`)

Para verificar la firma:
  * Verificar únicamente la firma: `openssl rsautl -verify -inkey publickey.pem -pubin -keyform PEM -in signature`
  * Verificar firma y contenido del fichero: `openssl dgst -sha256 -verify publickey.pem -signature signature data.txt`
  
