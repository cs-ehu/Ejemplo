##  Herramienta: PANDOC 

### Descripción
    
Pandoc es un conversor de documentos libre y de código abierto creado y mantenido por John MacFarlane, Profesor de Filosofía en la Universidad de California, Berkeley.Es mayormente usado como una herramienta de escritura (especialmente por académicos), y es una base para la publicación de flujos de trabajo.

Pandoc puede convertir documentos en markdown, reStructuredText, textile, HTML, DocBook, LaTeX, MediaWiki markup, TWiki markup, OPML, Emacs Org-Mode, Txt2Tags, Microsoft Word docx, LibreOffice ODT, EPUB, o Haddock markup. 

![Diagrama de documentos](https://ull-esit-dsi-1617.github.io/estudiar-las-rutas-en-expressjs-alberto-diego/Diego/Pandoc/imagenes/portada.png)

### Tareas

#### Obligatorias

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  |Instalación de Pandoc| [Vídeo ejemplo](https://www.youtube.com/watch?v=XZDgWf94f5I) | 00:10:00|
| 2  |Primeros pasos con Pandoc| [Documentación](https://pandoc.org/getting-started.html) | 00:35:00|
| 3  |Especificaciones de Pandoc| [Manual de Pandoc](https://pandoc.org/MANUAL.html) | 02:40:00|


#### Opcionales

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  |Introducción a Pandoc| [Explicación de instalación](https://www.youtube.com/watch?v=N31E_NZYQQY) | 00:20:00|
| 2  |Makefile| [Hacer Makefile](https://ondahostil.wordpress.com/2015/12/01/lo-que-he-aprendido-makefile-para-pandoc/) | 00:15:00|
| 3  |Márgenes y fuentes| [Márgenes y fuentes](https://ondahostil.wordpress.com/2017/03/11/lo-que-he-aprendido-margenes-y-fuentes-en-pandoc/) | 00:15:00|

### Horas de aprendizaje
En total, entre tareas obligatorias e opcionales, en algo menos de hora y media podríamos aprender a usar pandoc con facilidad.Tiene una curva de aprendizaje rápido y corta. 
Si se require aprender funcionalidades más especificas estimamos otras 3h de dedicación.


### Ventajas

1. El documento es legible incluso antes de compilar.

2. Podemos usar cualquier editor de texto, cosa que también ocurre con LaTeX pero que exige un proceso de compilación más complejo.

3. Tecleamos menos, ya que Markdown es un lenguaje mucho más escueto que LaTeX. Podemos suplir las carencias de Markdown mezclando LaTeX alegremente por ahí y usando filtros.

4. No nos deja archivos auxiliares por ahí, los borra una vez hecha la transformación. Solo nos quedan el Markdown inicial y el pdf final.

5. Tenemos la opción de obtener diferentes formatos finales, lo que nos permite, por ejemplo, montar una web y sacamos un pdf a partir de los mismos archivos.


### Desventajas

1. Necesitamos más archivos, si es un documento complejo nos vendrá bien un Makefile.

2. Instalarlo puede ser un poco lío, sobre todo los filtros.

3. Tenemos que saber LaTeX y Markdown.

### Conclusiones
Pandoc al ser un conversor de documentos, como desarrolladores de software nos ayuda a transformar un formato a otro de una manera sencilla e intuitiva y sobretodo sin complicaciones. 

Al ser una herramientoa sencilla de aprender e implementar para los usuarios no se necesitan habilidades de programación.  