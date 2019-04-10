#  Archivo: pom.xml 

## Introducción
1. Qué es:
***Project Object Model*** (Modelo de Objetos de Proyecto) 
Es un archivo XML que contiene información sobre el proyecto y los detalles de configuración utilizados por Maven, *es la unidad fundamental de trabajo*. Un POM no es más que la abstracción usada por Maven para definir proyectos.

2. Característica: la modularidad
    - Maven trabaja modularizando proyectos,de esta forma tendremos varios módulos que conforman un sólo proyecto. Para denotar esta relación en Maven, se crea un archivo super POM y otros archivos pom que heredan del primero.

    - Esta organización sirve para centralizar en el pom padre las variables (como el nombre del proyecto o el número de versión), las dependencias, los repositorios, los complementos u objetivos que se pueden ejecutar, los perfiles de compilación, así como la versión del proyecto, descripción, desarrolladores, listas de correo y similares que son comunes a los módulos, eliminando duplicidad de código.


##### El archivo POM es la abstracción para definir Proyectos
![Estructura de POM en relación a un proyecto](https://raw.githubusercontent.com/cs-ehu/img/master/Pom.jpg)


## Nociones iniciales

###  Super pom 
Un proyecto generado con Maven crea un POM en la raíz del proyecto, el Super POM. Todos los POM amplían el Super POM a menos que se establezca explícitamente, lo que significa que la configuración especificada en el Super POM es heredada por los POM que creó para sus proyectos.

###### Visualización de parte del archivo pom.xml
![Estructura inicial POM](https://raw.githubusercontent.com/cs-ehu/img/master/Captura.PNG)


### Estructura general de un archivo pom.xml

###### El archivo pom.xml comienza con la etiqueta inicial:
```
 <project>
 ...
 </project>
```
###### Principales etiquetas: 
**Etiquetas para nombrar el proyecto:**
Las tres etiquetas esenciales que encontramos tanto en la definición de nuestro archivo pom, en las dependencias y en el plugin son: 
* ```<groupId>```: Identifica de forma única un determinado proyecto en todos los proyectos almacenados. Un ID de grupo debe seguir las reglas de nombre de paquete de Java . Esto significa que comienza con un nombre de dominio invertido, por ejemplo  es.ehu.grupo . 
* ```<artifactId>```: Es el nombre del proyecto sin versión.
* ```<version>```: Es la versión asignada a nuestro proyecto, generalmente se usan números y puntos. En caso de artefacto de terceros la versión nos vendrá dada. 

Estos tres valores forman el nombre de artefacto totalmente calificado del proyecto. Son las coordenadas (espacial y temporal) de un proyecto en un repositorio Maven.

**Etiquetas que describen a nuestro proyecto:**
* ```<modelVersion>```  Esta etiqueta nos indica la versión de Maven en la cual estamos ejecutando nuestro proyecto. La versión 4.4.0 es la única soportada actualmente en Maven 2.
* ```<packaging>``` Es el tipo de artefacto que se genera en el proyecto. Por ejemplo jar, war... Si no se especifica en el POM, se usará el valor predeterminado “jar”.
* ```<name>```  Definimos el nombre de nuestro proyecto.
* ```<url>```  La URL, como el nombre, no es necesaria. Sin embargo, es un dato relevante para saber dónde está almacenado el proyecto.

```
<modelVersion>4.0.0</modelVersion>
<groupId>ehu.es.cs19</groupId>
<artifactId>primerMaven</artifactId>
<packaging>pom</packaging>
<version>1.0</version>
<name>primerMaven</name>
<url>http://www.example.com</url>
```

###### Etiqueta properties:
Se definen propiedades como la codificación de caracteres o el compilador utilizado.
```
<properties>
                <project.build.sourceEncoding>UTF-8
                </project.build.sourceEncoding>
        <maven.compiler.source>1.7</maven.compiler.source>
        <maven.compiler.target>1.7</maven.compiler.target>
</properties>
```

###### Etiqueta build
En estos elementos se declara, entre otras cosas, la estructura de directorios del proyecto:
```
<build>
<sourceDirectory>${basedir}/src/main/java</sourceDirectory>
<scriptSourceDirectory>${basedir}/src/main/scripts</scriptSourceDirectory>
<testSourceDirectory>${basedir}/src/test/java</testSourceDirectory>
<outputDirectory>${basedir}/target/classes</outputDirectory>
<testOutputDirectory>${basedir}/target/test-classes</testOutputDirectory>
...
</build>

```
La fase u objetivo a ejecutar por defecto, el directorio de construcción, nombre del producto final y ficheros de propiedades a usar:
```
<build>
<defaultGoal>install</defaultGoal>
<directory>${basedir}/target</directory>
<finalName>${artifactId}-${version}</finalName>
<filters>
<filter>filters/filter1.properties</filter>
</filters>
...
</build>
```

Se declara la ubicación de los archivos de recursos:
```
<build>
...
<resources>
<resource>
<targetPath>META-INF/plexus</targetPath>
<filtering>false</filtering>
<directory>${basedir}/src/main/plexus</directory>
<includes>
<include>configuration.xml</include>
</includes>
<excludes>
<exclude>**/*.properties</exclude>
</excludes>
</resource>
</resources>
<testResources>
...
</testResources>
...
</build>
```

Los plugins, indicando si cargar las extensiones de cada plugin, si la configuración es heredable por proyectos hijos, y la propia configuración de cada plugin, dependencias y objetivos a ejecutar.
```
<build>
...
<pluginManagement>
<plugins>
<plugin>
<groupId>org.apache.maven.plugins</groupId>
<artifactId>maven-jar-plugin</artifactId>
<version>2.0</version>
<executions>
<execution>
<id>pre-process-classes</id>
<phase>compile</phase>
<goals>
<goal>jar</goal>
</goals>
<configuration>
<classifier>pre-process</classifier>
</configuration>
</execution>
</executions>
</plugin>
</plugins>
</pluginManagement>
...
</build>
```
Y las extensiones: otros artefactos a activar durante la construcción.
```
<project>
<build>
...
<extensions>
<extension>
<groupId>org.apache.maven.wagon</groupId>
<artifactId>wagon-ftp</artifactId>
<version>1.0-alpha-3</version>
</extension>
</extensions>
...
</build>
</project>
```

###### Etiqueta dependencies:
Recoge las dependencias con otros proyectos durante la construcción o ejecución. Entre otras cosas sirven para que Maven los descargue y los incluya automáticamente cuando corresponda. Estas dependencias se guardan en el directorio ```.m2/repository``` y podemos encontrarlas en la página web [MVNREPOSITORY](https://mvnrepository.com/) en donde solo es necesario copiar el código xml ofrecido y agregarlo dentro de la etiqueta ```<dependencies>```. 
La etiqueta ```<scope>``` define el alcance de la dependencia. Se usa para limitar la transitividad de una dependencia, y para la ruta de la clase cuando existen varias tareas de compilación. Se pueden escoger seis valores diferentes: compile, provided, runtime, test, system e import.
```
<dependencies>
    <dependency>
        <groupId>junit</groupId>
        <artifactId>junit</artifactId>
        <version>4.11</version>
        <scope>test</scope>
    </dependency>
</dependencies>
```

<!-- ###### Etiqueta plugins:
Maven emplea un robusto conjunto de plugins que brindan toda su funcionalidad. En Maven, los plugins tienen 'goals', los cuales son sólo métodos Java. 


Los 'goals' ejecutan tareas de construcción como: compilar el proyecto, empaquetarlo e implementarlo en un servidor local o remoto. Esas actividades se correlacionan perfectamente para construir fases del ciclo de vida.


```
<build>
 <pluginManagement>     
    <plugins>
        <plugin>
                    <artifactId>maven-clean-plugin</artifactId>
                    <version>3.1.0</version>
                    <configuration>
                        <source>1.5</source>
                        <target>1.5</target>
                    </configuration>
        </plugin>
    </plugins>
</build>
```
-->
###### Etiqueta dependencyManagement
Es usado por un POM padre para definir propiedades sobre dependencias de los hijos, de forma que sean declaradas únicamente en un sitio.
La sección de administración de dependencias es un mecanismo para centralizar la información de dependencias. Cuando tiene un conjunto de proyectos que hereda un padre común, es posible poner toda la información sobre la dependencia en el POM común y tener referencias más simples a los artefactos en los POM secundarios. El mecanismo se ilustra mejor a través de algunos ejemplos. Teniendo en cuenta estos dos POM que extienden el mismo padre:
Proyecto A
```
<project>
  ...
  <dependencies>
    <dependency>
      <groupId> group-a </groupId>
      <artifactId> artifact-a </artifactId>
      <version> 1.0 </version>
      <exclusiones>
        <exclusión>
          <groupId> group-c </groupId>
          <artifactId> excluded-artifact </artifactId>
        </exclusion>
      </exclusiones>
    </dependency>
    <dependency>
      <groupId> group-a </groupId>
      <artifactId> artifact-b </artifactId>
      <version> 1.0 </version>
      <tipo> barra </type>
      <scope> runtime </scope>
    </dependency>
  </dependencies>
</project>

```
Proyecto B
```
<project>
  ...
  <dependencies>
    <dependency>
      <groupId> group-c </groupId>
      <artifactId> artifact-b </artifactId>
      <version> 1.0 </version>
      <tipo> guerra </type>
      <scope> runtime </scope>
    </dependency>
    <dependency>
      <groupId> group-a </groupId>
      <artifactId> artifact-b </artifactId>
      <version> 1.0 </version>
      <tipo> barra </type>
      <scope> runtime </scope>
    </dependency>
  </dependencies>
</project>
```
Estos dos POM de ejemplo comparten una dependencia común y cada uno tiene una dependencia no trivial. Esta información se puede poner en el POM principal así:
```
<project>
  ...
  <dependencyManagement>
    <dependencies>
      <dependency>
        <groupId> group-a </groupId>
        <artifactId> artifact-a </artifactId>
        <version> 1.0 </version>
 
        <exclusiones>
          <exclusión>
            <groupId> group-c </groupId>
            <artifactId> excluded-artifact </artifactId>
          </exclusion>
        </exclusiones>
 
      </dependency>
 
      <dependency>
        <groupId> group-c </groupId>
        <artifactId> artifact-b </artifactId>
        <version> 1.0 </version>
        <tipo> guerra </type>
        <scope> runtime </scope>
      </dependency>
 
      <dependency>
        <groupId> group-a </groupId>
        <artifactId> artifact-b </artifactId>
        <version> 1.0 </version>
        <tipo> barra </type>
        <scope> runtime </scope>
      </dependency>
    </dependencies>
  </dependencyManagement>
</project>
```
Y entonces los dos poms hijos se volverían mucho más simples:
```
<project>
  ...
  <dependencies>
    <dependency>
      <groupId> group-a </groupId>
      <artifactId> artifact-a </artifactId>
    </dependency>
 
    <dependency>
      <groupId> group-a </groupId>
      <artifactId> artifact-b </artifactId>
      <! - Esto no es una dependencia jar, por lo que debemos especificar el tipo. ->
      <tipo> barra </type>
    </dependency>
  </dependencies>
</project>
```
```
<project>
  ...
  <dependencies>
    <dependency>
      <groupId> group-c </groupId>
      <artifactId> artifact-b </artifactId>
      <! - Esto no es una dependencia jar, por lo que debemos especificar el tipo. ->
      <tipo> guerra </type>
    </dependency>
 
    <dependency>
      <groupId> group-a </groupId>
      <artifactId> artifact-b </artifactId>
      <! - Esto no es una dependencia jar, por lo que debemos especificar el tipo. ->
      <tipo> barra </type>
    </dependency>
  </dependencies>
</project>
```


###### Etiqueta modules:
Para declarar los módulos que componen un proyecto, en el caso de que sea multi-módulo. Cada uno de estos módulos será a su vez otro proyecto Maven ubicado directamente en el proyecto principal.
En esta etiqueta del módulo padre se recogen los módulos hijos
```
<modules>
    <module>primerMaven_jar</module>
```
Y en los POM generados para los hijos se verá la relación de parentesco:
```  
<parent>
    <artifactId>primerMaven</artifactId>
    <groupId>ehu.es.cs19</groupId>
    <version>1.0</version>
</parent>
```

### Conclusiones
Para utilizar la herramienta de administración de proyectos Maven es necesario conocer a fondo la estructura y funcionalidad de los archivos pom.

Es interesante conocer el universo de los plugins, entre los que vemos muy útiles, por ejemplo el de la herramienta Checkstyle. Esta herramienta detecta aquellas partes de código que no se adaptan a estándares de codificación.
```
<plugin>
        <groupId>org.apache.maven.plugins</groupId>
        <artifactId>maven-checkstyle-plugin</artifactId>
        <version>3.0.0</version>
</plugin>
```


### Referencias 
[Tutorial Maven](https://drive.google.com/file/d/1Z0lPzZ52zrpgKGKDV-kQu0BdikULEc_3/view)
[Documentación Maven](https://maven.apache.org/guides/introduction/introduction-to-the-pom.html)
[Ciclos de vida Maven](https://maven.apache.org/ref/3.6.0/maven-core/lifecycles.html#clean_Lifecycle)
[Convenciones de nombres de etiquetas](https://maven.apache.org/guides/mini/guide-naming-conventions.html)
[Introducción a Maven](https://www.adictosaltrabajo.com/2006/09/19/maven/)
[Enlace a POM desde Wikipedia](https://web.archive.org/web/20070927194307/http://www.elholgazan.com/2007/08/project-object-model-pom-de-maven.html)


