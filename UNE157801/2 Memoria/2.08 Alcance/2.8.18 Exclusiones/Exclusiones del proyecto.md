##### Autor: Urko Lekuona
---

# Exclusiones del proyecto

## Descripción
El apartado de *Exclusiones* lista todas las características, tanto funcionales como no funcionales, del proyecto que no se vayan a realizar, dando razones para cada una de ellas y describiendo el impacto que tendría en el proyecto realizarlas.

Es importante no olvidarse de este punto a la hora de definir el alcance de un proyecto, para evitar confusiones con el cliente. Por esta misma razón, el cliente deberá estar de acuerdo con las exclusiones definidas, además de tener un acuerdo firmado en el que se ratifica.
## Ejemplos
Este es un ejemplo de las exclusiones de un Trabajo de Fin de Grado realizado por Iñaki Latorre Ortega en 2017[^1]. en el desarrollo de dos apps móviles híbridas y dos servicios web enmarcados dentro del proyecto WeLive a nivel europeo.

>Inicialmente, junto con Aritz Rabadán de Eurohelp, se excluyeron del proyecto
los siguientes puntos:
>* Aunque el desarrollo de las apps es híbrido, de momento no se realiza el empaquetado para iOS. Si bien dicho empaquetado es directo a partir del código desarrollado gracias a Ionic (y Apache Cordova internamente), es posible que el uso de algún plugin provoque que haya que retocarlo para la compilación de las apps en iOS.
>* En la app Bilbozkatu no se permite subir una imagen al crear una propuesta. La pantalla de detalles de propuesta mostrará una imagen predefinida asociada a la categoría a la que pertenece la misma.
>* No se aplica ningún sistema de seguridad o autenticación de WeLive para el uso de los Building Blocks desarrollados: usersFeedbackBB y bilbozkatuBB. Esto se hubiera hecho con el componente AAC BB de WeLive.
>* Tanto las apps como los Building Blocks desarrollados no se publican en el marketplace de WeLive (pero sí en Google Play las apps y en Cloud Foundry los BBs). Las tareas a realizar para la integración definitiva en la plataforma WeLive quedan excluídas del proyecto.

Como se puede ver, este lista ciertas características del proyecto que, aunque en otro contexto podrían incluirse, no se van a realizar, por diversas razones.

Algunos de los puntos que se suelen tratar son los siguientes:
1. **Características del producto que se excluyen:** Dependiendo del proyecto, puede variar el tipo de carácteristicas. En un proyecto de Ingeniería del Software se podría referir a las diferentes funcionalidades que no se van a añadir, aunque sean dependencias de otras que sí.
2. **Tecnologías que se no se van a utilizar:** Si ciertas tecnologías están fuera del alcance por tener licencias muy caras o por requerir un tiempo de aprendizaje demasiado largo, irían listadas en este apartado.
3. **Traducciones:** Por el coste que suele suponer dentro de la elaboración de un proyecto, la exclusión de traducciones a ciertos idiomas suele ser un elemento muy común de este apartado. No deberían listarse todos los idiomas que no se vayan a incluir, sino los que podría tener sentido incluir (por la situación geográfica, por ejemplo) pero no van a implementarse.
## Conclusión
Debido a la cantidad de problemas que puede evitar tener un buen apartado de *Exclusiones*, es indispensable que en el alcance de cualquier proyecto se incluya un listado de las mismas, por muy corto que sea.

[^1]:Trabajo obtenido de [este enlace](https://addi.ehu.es/bitstream/handle/10810/21806/TFG_LatorreOrtega.pdf?sequence=3&isAllowed=y)