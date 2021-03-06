# Requisitos Funcionales

### Introducción
Los requisitos funcionales especifican lo que se debe hacer o los servicios que debe proporcionar el sistema. 

Por ejemplo, en un software de gestión de una biblioteca podrían ser requisitos funcionales dar de alta un cliente, alquilar un libro, devolver un libro, comprar un libro, etc. 

Los requisitos funcionales deben describir también cómo responderá el sistema ante estas distintas entradas, y su comportamiento frente a situaciones particulares.
Aquellos que describen cualquier actividad que este deba realizar, el comportamiento o función particular de un sistema o software. 
Incluye funciones desempeñadas por pantallas específicas, descripciones de los flujos de trabajo a ser desempeñados por el sistema y otros requerimientos de negocio, cumplimiento, seguridad u otra índole. 

Deben redactarse de tal forma que el lector pueda entender el funcionamiento del sistema sin tener conocimientos. Estas se obtienen mediante técnicas de levantamiento de requerimientos de software. 

### Descripción y clasificación
Se suelen registrar en la **matriz de trazabilidad de requerimientos** y en la **especificación de requerimientos de software**, este último documenta las operaciones y actividades que el sistema debe poder desempeñar. 

Existen diferentes tipos de requerimientos funcionales:  
* Descripciones de los datos a ser ingresados en el sistema.
* Descripciones de las operaciones a ser realizadas por cada pantalla.
* Descripción de los flujos de trabajo realizados por el sistema.
* Descripción de los reportes del sistema y otras salidas.
* Definición de quien puede ingresar datos en el sistema.
* Como el sistema cumplirá los reglamentos y regulaciones de sector o generales que le sean aplicables.

### Ejemplos 
**Ejemplo requerimientos funcionales de proceso o área de negocio**
* El sistema enviará un correo electrónico cuando se registre alguna de las siguientes transacciones: pedido de venta de cliente, despacho de mercancía al cliente, emisión de factura a cliente y registro de pago de cliente.
* El software debe poder emitir los siguientes estados financieros: Balance general, Estado de ganancias y pérdidas, Estado de flujos de efectivo. Además, debe poder emitir un listado de mayor general y mayor analítico.

**Ejemplo requerimientos funcionales de interfaz gráfica**
* El campo de monto acepta únicamente valores numéricos con dos decimales.
* El campo fecha de transacción acepta únicamente fechas anteriores al día de hoy (día actual).
* El campo nombre acepta caracteres alfabéticos únicamente.
* El campo dirección acepta caracteres alfabéticos, numéricos y especiales.

**Ejemplo requerimientos funcionales legales o regulatorios**
* El sistema controlará el acceso y lo permitirá solamente a usuarios autorizados.
* La base de datos será implementada con trazas de auditoría.
* Las hojas de cálculo aseguraran los datos usando firmas electrónicas.

**Ejemplo requerimientos de seguridad**
* El sistema controlará el acceso y lo permitirá solamente a usuarios autorizados. Los usuarios deben ingresar al sistema con un nombre de usuario y contraseña.
* El sistema enviará una alerta al administrador del sistema cuando ocurra alguno de los siguientes eventos: Registro de nueva cuenta, ingreso al sistema por parte del cliente, 2 o más intentos fallidos en el ingreso de la contraseña de usuario y cambio de contraseña de usuario.
* Los integrantes del grupo de usuarios de analistas pueden ingresar solicitudes, pero no pueden aprobarlas o borrarlas.
Por ejemplo, en un software de gestión de una biblioteca podrían ser requisitos funcionales dar de alta un cliente, alquilar un libro, devolver un libro, comprar un libro, etc. 

Los requisitos funcionales deben describir también cómo responderá el sistema ante estas distintas entradas, y su comportamiento frente a situaciones particulares.

#### Ejemplo: Estudio de los requisitos funcionales del proyecto : WS_Lab2
~~~
Lo que debe hacer o los servicios que debe proporcionar el sistema. 
Los requisitos funcionales deben describir cómo responderá el sistema ante estas distintas entradas, 
y su comportamiento frente a situaciones particulares

~~~
##### El proyecto ***WS_Lab2*** tiene los siguientes requisitos funcionales
> Es un quiz de preguntas y respuestas que permite 
  > 1. Al usuario no registrado: 
    - Le permite jugar por temas o bien juego aleatorio.
    - En cualquier caso puede escoger jugar con Nick y crearlo.
  > 2. Al usuario registrado:
Al usuario que se ha conectado se le comunica un historial de su juego ya que entra en una sesión.

 > 3. Al administrador:
 Es quien crea las preguntas, las modifica y las borra.


##### Estructura básica y dependencias de la Especificación de Requisitos del Sistema
![Estructura básica y dependencias de la Especificación de Requisitos del Sistema](https://github.com/cs-ehu/Ejemplo/blob/pilar-1/UNE157801/2%20Memoria/2.07%20Requisitos%20iniciales/2.7.1%20Funcionales/captura.png)

## Bibliografía
[Requisitos de Software](http://www.kybele.etsii.urjc.es/docencia/IS_GII_M/2011-2012/Material/[IS-2010-11]6.%20RequisitosSoftware_CEC.pdf)

[Documentación](https://es.wikiversity.org/wiki/Ingenier%C3%ADa_de_requisitos_software)

[Otras fuentes de documentación contrastadas](http://www.juntadeandalucia.es/servicios/madeja/contenido/recurso/407)
