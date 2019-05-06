
# Código fuente de las aplicaciones

Una parte importante de un desarrollo es la decisión de la organización de los ficheros que lo componen y la jerarquía de carpetas que seguirán.  
La jerarquía de las carpetas puede variar dependiendo del lenguaje y del tipo de proyecto.  

## Archivo README

Es recomendable tener un `README` con una descripción del proyecto e incluir información útil, como por ejemplo, información de contacto con el equipo/empresa que desarrolla la aplicación.  
Si no se usase ninguna herramienta para gestionar las dependencias de un proyecto, este sería el documento adecuado para listarlas, junto con su versión y un link a la página oficial de la librería.  
GitHub, por ejemplo detecta automáticamente las dependencias listadas en algunos archivos específicos. Más información se puede encontrar en "[Listing the packages that a repository depends on](https://help.github.com/en/articles/listing-the-packages-that-a-repository-depends-on)".

Plantillas de ejemplo de archivos readme:

- [README-template-eng.md](README-template-eng.md) <small><kbd>Inglés</kbd></small>
- [README-template-esp.md](README-template-esp.md) <small><kbd>Español</kbd></small>

## Licencia del proyecto

El proyecto debería mencionar en alguna parte la licencia que usa. El archivo con la licencia debería estar presente dentro del proyecto, o al menos debería referenciarse en el `README`. Es importante que se defina una licencia, de esta forma se deja de forma clara que y que no se puede hacer con el código.

A continuación se describen la clasificación de las licencias de software.

### Según los derechos que cada autor se reserva sobre su obra

#### Licencia de software de código abierto permisivas

Se puede crear una obra derivada sin que ésta tenga obligación de protección alguna.

- Academic Free License v.1.2.
- Apache Software License v.1.1
- Artistic License v.2.0
- Attribution Assurance license.
- BSD License.
- MIT License.
- University of Illinois/NCSA Open Source License.
- W3C Software Notice and License.
- Zope Public License v.2.0
- Open LDAP License v.2.7
- Perl License.
- Academic Free License v.3.0
- Python License v.2.1
- PHP License v.3.0
- VMS License.

#### Licencia de software de código abierto robustas

Estas licencias aplican algunas restricciones a las obras derivadas, haciendo que según el grado de aplicación se puedan dividir a su vez en dos subcategorías:
Licencias de software de código abierto robustas fuertes

Las licencias de software de código abierto robustas fuertes o con copyleft fuerte, contienen una cláusula que obliga a que las obras derivadas o modificaciones que se realicen al software original se deban licenciar bajo los mismos términos y condiciones de la licencia original.

- Common Public License v.1.0.
- GNU General Public License v.2.0.
- GNU General Public License v.3.0.
- Eclipse Public License.
- eCos License v.2.0
- Sleepycat Software Product License.
- Affero License v.1.0
- Affero License v.2.0
- OpenSSL License.

#### Licencias de software de código abierto robustas débiles

Las licencias de software de código abierto robustas débiles, con copyleft débil/suave o híbridas, contienen una cláusula que obliga a que las modificaciones que se realicen al software original se deban licenciar bajo los mismos términos y condiciones de la licencia original, pero que las obras derivadas que se puedan realizar de él puedan ser licenciadas bajo otros términos y condiciones distintas.

- GNU Lesser General Public License v.2.1.
- Mozilla Public License
- Open Source License.
- Apple Source License v.2.0
- CDDL.
- EUPL.

#### Licencia de software de código cerrado

Estas licencias también se conocen con el nombre de "software propietario" o "privativo". En ellas los propietarios establecen los derechos de uso, distribución, redistribución, copia, modificación, cesión y en general cualquier otra consideración que se estime necesaria.

No permiten que el software sea modificado, desensamblado, copiado o distribuido de formas no especificadas en la propia licencia, regula el número de copias que pueden ser instaladas e incluso los fines concretos para los cuales puede ser utilizado. La mayoría de estas licencias limitan fuertemente la responsabilidad derivada de fallos en el programa.

Los fabricantes de programas sometidos a este tipo de licencias por lo general ofrecen servicios de soporte técnico y actualizaciones durante el tiempo de vida del producto.

Algunos ejemplos de este tipo de licencias son las llamadas acuerdo de **licencia de usuario final (ALUF)**, también llamado en algunos países **contrato de licencia de usuario final (CLUF)**.  
En el mundo anglosajón se llama **end-user license agreement (EULA)**, pero los contratos en español deben recoger el término en español.

#### Software de dominio público (sin licencia)

Se permite uso, copia, modificación o redistribución con o sin fines de lucro.

### Según su destinatario

#### Licencia de usuario final

El acuerdo de **licencia de usuario final (ALUF)** es una licencia por la cual el uso de un producto solo está permitido para un único usuario (el comprador).

En este tipo de contrato, el dueño de los derechos de un producto insta al usuario final de éste a que reconozca tener conocimiento de las restricciones de uso, de los derechos del autor, de las patentes, etc., y que acepte de conformidad.

El conocimiento del contenido de los contratos es difícil antes de la compra del producto ya que las cajas de los productos raramente contienen una copia completa del mismo, dándose que el comprador en la mayor parte de las ocasiones conoce su contenido después de la compra.

En ocasiones se exige al usuario el renunciar a realizar reclamos o demandas legales por diversos motivos (tales como posibles daños producidos por el producto o fallos en él) o aceptar la restitución de la mercancía en la forma y monto que la compañía decida.

Este tipo de acuerdo expresa los usos que se pueden dar y cuáles no al producto, ya que quien lo compra no es, legalmente, en ninguna forma dueño del producto, sino sólo de una licencia para su uso, considerándose por esto último por algunas personas como una limitación a los derechos del consumidor

Este tipo de acuerdos son unilaterales pues el usuario no tiene más opción que aceptar o rechazar el contenido del mismo (en algunos países existen organizaciones de protección al consumidor que autorizan ciertas excepciones).

#### Licencia de distribuidores

En este tipo de contrato, se le asigna derechos restringidos a un mayorista para que venda el producto software a terceros dando una remesa o comisión al fabricante.
La misma puede ser por primera venta o licencia de renovación de contrato. No se trata de una licencia de uso en términos jurídicos, sino más bien en un acuerdo comercial en el que no tiene por qué ser cedido el derecho de distribución necesariamente. Puede darse el caso de simple actividad comercial en la que el distribuidor ni siquiera tenga contacto con el software, y éste como elemento y la licencia de uso en sí sea directamente suscrita y puesta a disposición por parte del fabricante. Encargándose el distribuidor del correspondiente cobro al usuario y pago al fabricante menos su comisión.
