##### Requisitos Funcionales
[Documentación](https://es.wikiversity.org/wiki/Ingenier%C3%ADa_de_requisitos_software)

#### Introducción 
### Requisitos del sistema
~~~
Entender las necesidades exactas de los usuarios y traducir éstas a funciones y acciones que serán usadas en el desarrollo del sistema.
~~~
## Requisito
1. Una condición o capacidad requerida por un usuario para resolver un problema o alcanzar un objetivo.
2. Una condición o capacidad que debe cumplir o poseer un sistema o componente de sistema para satisfacer un contrato, estándar, especificación, o cualquier otro documento impuesto formalmente.
3. Una representación documentada de una condición o capacidad de lo explicado en los puntos 1 o 2.

### Los requisitos pueden dividirse en:

1. Requisitos de usuario: 
>Son frases en lenguaje natural o descripciones gráficas (diagramas) 
de los servicios que se espera que ofrezca el sistema y de sus restricciones.

1. Requisitos de sistema: 
>Una descripción más detallada de los servicios exactos que se proporcionarán y sus restricciones. 

Estos requisitos sirven como contrato con el cliente. 
A su vez los requisitos de sistema pueden dividirse en:
 - requisitos funcionales, 
 - no funcionales y 
 - de dominio.
 
2. **Requisitos funcionales**: Especifican lo que debe hacer o los servicios que debe proporcionar el sistema. 

Por ejemplo, en un software de gestión de una biblioteca podrían ser requisitos funcionales dar de alta un cliente, alquilar un libro, devolver un libro, comprar un libro, etc. 

Los requisitos funcionales deben describir también cómo responderá el sistema ante estas distintas entradas, y su comportamiento frente a situaciones particulares.

3. **Requisitos no funcionales**: Son restricciones de los servicios del sistema o funciones que ofrece. 

Por ejemplo, en un software de gestión de compras de una tienda podrían ser requisitos no funcionales un tpv para pagar con tarjeta, un PC con memoria y espacio en disco para almacenar la base de datos de ventas, que sea capaz de atender a la vez a varios clientes, que no tarde más de X tiempo en gestionar una venta, etc.

3. **Requisitos de dominio**: Estos requisitos reflejan características del dominio de la aplicación. 

Por ejemplo, la forma en la que se comunicarán distintas partes de la aplicación, el tipo de datos con los que trabajará, etc.

#### Ejemplo: Estudio de los requisitos funcionales del proyecto : WS_Lab2
~~~
> Lo que debe hacer o los servicios que debe proporcionar el sistema. 

Los requisitos funcionales deben describir cómo responderá el sistema ante estas distintas entradas, 
y su comportamiento frente a situaciones particulares

~~~
##### El proyecto ***WS_Lab2*** tiene los siguientes requisitos funcionales

##### [Otras fuentes de documentación contrastadas](http://www.juntadeandalucia.es/servicios/madeja/contenido/recurso/407)
![Estructura básica y dependencias de la Especificación de Requisitos del Sistema](https://github.com/cs-ehu/Ejemplo/blob/pilar-1/UNE157801/2%20Memoria/2.07%20Requisitos%20iniciales/2.7.1%20Funcionales/captura.png)
> Es un quiz de preguntas y respuestas que permite 
  > 1. Al usuario no registrado: 
    - Le permite jugar por temas o bien juego aleatorio.
    - En cualquier caso puede escoger jugar con Nick y crearlo.
  > 2. Al usuario registrado:
Al usuario que se ha conectado se le comunica un historial de su juego ya que entra en una sesión.

 > 3. Al administrador:
 Es quien crea las preguntas, las modifica y las borra.
