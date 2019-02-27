
# Plan De Pruebas
El plan de prueba describe el ámbito del esfuerzo de prueba general y proporciona un registro del proceso de planificación de prueba. Puede configurarse el plan de pruebas para que se ajuste a las necesidades del equipo.

## Pruebas estáticas
Son el tipo de pruebas que se realizan sin ejecutar el código de la aplicación.
Puede referirse a la revisión de documentos, ya que no se hace una ejecución de código. Esto se debe a que se pueden realizar "pruebas de escritorio" con el objetivo de seguir los flujos de la aplicación.

## Pruebas dinámicas
Todas aquellas pruebas que para su ejecución requieren la ejecución de la aplicación.
Las pruebas dinámicas permiten el uso de técnicas de caja negra y caja blanca con mayor amplitud. Debido a la naturaleza dinámica de la ejecución de pruebas es posible medir con mayor precisión el comportamiento de la aplicación desarrollada.

### Unit Testing
Para que una prueba unitaria tenga la _calidad suficiente_ se deben cumplir los siguientes requisitos:

#### Características
Automatizable
: No debería requerirse una intervención manual. Esto es especialmente útil para integración continua

Completas
: Deben cubrir la mayor cantidad de código.

Repetibles o Reutilizables
: No se deben crear pruebas que sólo puedan ser ejecutadas una sola vez. También es útil para integración continua

Independientes
: La ejecución de una prueba no debe afectar a la ejecución de otra.

Profesionales
: Las pruebas deben ser consideradas igual que el código, con la misma profesionalidad, documentación, etc.

#### Ventajas
El objetivo de las pruebas unitarias es aislar cada parte del programa y mostrar que las partes individuales son correctas. Proporcionan un contrato escrito que el trozo de código debe satisfacer. Estas pruebas aisladas proporcionan cinco ventajas básicas:

Fomentan el cambio
: Las pruebas unitarias facilitan que el programador cambie el código para mejorar su estructura (lo que se ha dado en llamar refactorización), puesto que permiten hacer pruebas sobre los cambios y así asegurarse de que los nuevos cambios no han introducido errores.

Simplifica la integración
: Puesto que permiten llegar a la fase de integración con un grado alto de seguridad de que el código está funcionando correctamente. De esta manera se facilitan las pruebas de integración.

Documenta el código
: Las propias pruebas son documentación del código, puesto que ahí se puede ver cómo utilizarlo.

Separación de la interfaz y la implementación
: Dado que la única interacción entre los casos de prueba y las unidades bajo prueba son las interfaces de estas últimas, se puede cambiar cualquiera de los dos sin afectar al otro, a veces usando objetos maquetados que habilitan de forma aislada (unitaria) el comportamiento de objetos complejos.

Los errores están más acotados y son más fáciles de localizar
: Dado que tenemos pruebas unitarias que pueden desenmascararlos.
