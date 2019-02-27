##  JUPYTER

### Descripción
Jupyter es un entorno de trabajo open source orientado a científicos que soporta los lenguajes R y Python, entre otros, y que está revolucionando la forma de trabajar en el mundo de los datos.

Jupyter nos ofrece una shell interactiva vía web, a la que podemos acceder desde un navegador. La shell está organizada en pequeños bloques, cada bloque puede contener texto arbitrario formateado en Markdown, fórmulas matemáticas en LaTeX, código en multitud de lenguajes, resultados, gráficos, vídeos, widgets o cualquier elemento multimedia.
![](https://i.imgur.com/0nYZwTP.png)

Podemos escribir código de programación en estas celdas e ir ejecutándolo paso a paso o todo de golpe, obteniendo todos los resultados parciales. También podemos usar los bloques de texto para documentar el código o añadir las explicaciones oportunas, que pueden contener enlaces, imágenes, vídeos u otros elementos.

Esta serie de piezas de código, notas y resultados se guardan en un notebook, que es un fichero que contiene toda esta información. Uno de los principales objetivos de Jupyter es fomentar y simplificar la compartición de conocimiento y resultados a través de los notebooks. Plataformas como GitHub o Databricks Community Edition facilitan esta tarea. De esta manera los notebooks pueden ser fácilmente difundidos y los resultados pueden ser reproducidos y validados en diferentes entornos. Por supuesto esto es muy útil para la divulgación y la formación o en entornos educativos.

Jupyter soporta integración con más de 40 lenguajes de programación en los que podemos escribir el código de nuestro notebooks, por ejemplo Python, R, Scala, Ruby o Go. Pero también es fácilmente integrable con herramientas y plataformas de Big Data como Spark, lo que permite abstraerse de la complejidad de estas herramientas, aprovechando todo su potencial desde un entorno muy amigable.

Una forma muy sencilla de probar Jupyter es a través de Try Jupyter!, una página hospedada por Rackspace que nos ofrece una instancia de prueba donde podemos ejecutar algunos notebooks de ejemplo o escribir los nuestros propios.

### Tareas

#### Obligatorias

ID      | Descripción | Referencia | Tiempo  |
--------| ----------- | ---------- | ------- |
1  | Introducción a Jupyter y análisis de características (conferencia) |[Enlace](https://www.youtube.com/watch?v=LCngGEzzzkc) | 01:00:00 |
2  | Instalación y configuracion de Jupyter        | [Enlace](https://www.youtube.com/watch?v=mPkC0FJJRvw) | 00:15:00|
3  | Tutorial de Jupyter        | [Enlace](https://www.youtube.com/watch?v=Gzun8PpyBCo) | 02:30:00|

#### Opcionales

ID      | Descripción | Referencia | Tiempo  |
--------| ----------- | ---------- | ------- |
1  | Cuadernos de Jupyter interesantes        | [Enlace](https://github.com/jupyter/jupyter/wiki/A-gallery-of-interesting-Jupyter-Notebooks) | 06:00:00|
2 | Tutorial de instalación de Anaconda (incluye Jupyter) | [Enlace](https://www.youtube.com/watch?v=52h3r_lROGY) | 00:15:00 |
3 | Artículo sobre IPython y Jupyter de Nature (inglés) | [Enlace](https://www.nature.com/news/interactive-notebooks-sharing-the-code-1.16261) | 00:30:00 | 

Se recomienda, además de la realización de las tareas mencionadas con anterioridad, la instalación de la herramienta y la generación de algunos *Notebook*s de prueba, con el fin de afianzar conocimientos y familiarizarse en este nuevo entorno de trabajo.

### Horas de aprendizaje

Para la realización de las tareas obligatorias se estima un tiempo de trabajo de cerca de 4 horas. Si se realizase también las tareas opcionales propuestas, el tiempo de trabajo total ascendería a unas 11 horas.

Además, si se decidiese instalar la herramienta y probarla siguiendo alguno de los tutoriales provistos, podrá aumentar la carga de trabajo en 2 o 3 horas.

### Ventajas
1. Es perfecto para trabajos de análisis
Jupyter está pensado para ser utilizado en entornos de educación y comunicación, siendo muy fácil de seguir el flujo de trabajo de un programa y te trabajar con cantidades de datos estáticas.
 
2. Útil para diseño de funciones
Puedes escribir en un cuaderno las funciones que necesites, ver cómo funcionan e iterar sobre ellas. Una vez que tengas la base del algoritmo que necesites, es muy sencillo trasladarlo a un entorno de desarrollo orientado a producción.

3. Posibilidad de editar código 'en ejecución'
Jupyter permite ejecutar un script de Python línea a línea, lo que implica que se puede seguir el flujo del programa e ir cambiándolo según nos interese. Esto lo hace ideal para debuging, ya que evita tener que volver a ejecutar la totalidad del script cada vez que se quiera modificar una instrucción o un valor en concreto.

4. La documentación nunca antes ha sido tan fácil
Con los notebooks se nos ofrece una manera nueva de documentar nuestro programas. Se puede anotar tanto el código como el resultado de las ejecuciones. Las anotaciones incluyen desde texto, funciones matemáticas, imágenes, audio o cualquier otra cosa que podamos reproducir. Esto es una gran ventaja para poder compartir nuestro código con quién deseemos o incluso para nosotros mismos, si decidimos retomar un proyecto varios meses después y no nos acordamos exáctamente de cómo funcionaba.
### Desventajas
1. Es casi imposible habilitar un buen versionamiento de código
¿Trabaja en un equipo de datos que colabora y debe trabajar en los mismos notebooks? Probablemente entonces intentaste fusionar dos notebooks de Jupyter. Debido al hecho de que los notebooks de Jupyter se almacenan como archivos JSON grandes, la fusión de dos notebooks es prácticamente imposible. Esto es malo porque no podemos aplicar herramientas para equipos de software, ya que un buen flujo de trabajo de git atraerá solicitudes y revisiones.

2. Muy difícil de probar
Un colega mío dijo una vez que cuando trabajas con notebooks jupyter básicamente olvidas la ingeniería de software. ¡Y él tiene razón! Es muy difícil estructurar el código de manera razonable, y en funciones y luego desarrollar pruebas. Lo mejor es que se aleje lo más rápido posible de las notebooks jupyter cuando desarrolle serias líneas de datos. Los notebooks de Jupyter son una herramienta para la exploración, no para producción, tan pronto como desee ejecutar algunos experimentos y ejecutar notebooks con frecuencia. Descargue sus notebooks jupyter y desarrolle su script en Python basado en principios de desarrollo guiado por pruebas.

3. El flujo de trabajo no lineal de jupyter.
¿Alguna vez destruyó su estado de trabajo actual al saltar entre celdas de cuadernos de jupyter? ¿Sí? Puedo decir que no estás solo, esto me pasa con bastante frecuencia. Esta forma de saltar entre celdas puede resultar en experimentos no reproducibles. La forma interactiva de codificar y saltar en un notebook entre celdas es una de las mejores características de los notebooks jupyter y su mayor debilidad.

4. Jupyter es malo para ejecutar tareas asíncronas largas
Me gusta decir que big data significa grandes problemas. Por lo general, comienza cuando aborda un problema con un pequeño conjunto de datos que se ajusta a su memoria. Llegará al punto en que su máquina ya no es lo suficientemente buena. Luego puede saltar a herramientas como spark, dask y distribuidas y ejecutarlas desde su ordenador. Sugiero no hacerlo. Si realizó su primera exploración de datos y desea realizar experimentos a gran escala o incluso finalizar su canalización de datos. Saque su código del cuaderno jupyter, comience un proyecto Python adecuado, cree aparatos, escriba pruebas y despliegue su aplicación luego en un clúster. Esto te ayudará mucho a construir productos confiables basados en datos.

### Conclusiones
Jupyter es una herramienta libre fantástica que se está convirtiendo en el estándar en el mundo del análisis de datos. La comunidad que lo impulsa es muy activa y heterogénea, lo que está enriqueciendo el desarrollo y la integración con otras herramientas y plataformas.

Su impacto está siendo tan importante que hasta la prestigiosa revista científica Nature le ha dedicado un artículo que incluye una interesante demo interactiva y describe todas las ventajas de utilizar Jupyter en el mundo del análisis de datos científicos.
