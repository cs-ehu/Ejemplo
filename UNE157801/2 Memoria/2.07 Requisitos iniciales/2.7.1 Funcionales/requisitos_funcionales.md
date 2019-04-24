# Requisitos funcionales 

~~~
Aquellos que describen cualquier actividad que este deba realizar, el comportamiento o función particular de un sistema o software. 
~~~

Incluye funciones desempeñadas por pantallas específicas, descripciones de los flujos de trabajo a ser desempeñados por el sistema y otros requerimientos de negocio, cumplimiento, seguridad u otra índole. 

Deben redactarse de tal forma que el lector pueda entender el funcionamiento del sistema sin tener conocimentos. Estas se obtinen mediante técnicas de levantamiento de requerimientos de software. 

### Cómo se describen y clasifican 

Se suelen registrar en la **matriz de trazabilidad de requerimientos** y en la **especificación de requerimientos de software**, este último documenta las operaciones y actividades que el sistema debe poder desempeñar. 

Existen diferentes tipos de requerimientos funciionales:  
* Descripciones de los datos a ser ingresados en el sistema.
* Descripciones de las operaciones a ser realizadas por cada pantalla.
* Descripción de los flujos de trabajo realizados por el sistema.
* Descripción de los reportes del sistema y otras salidas.
* Definición de quien puede ingresar datos en el sistema.
* Como el sistema cumplirá los reglamentos y regulaciones de sector o generales que le sean aplicables.

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
* Los integrantes del grupo de usuarios de analistas pueden ingresar solicitudes pero no pueden aprobarlas o borrarlas.

