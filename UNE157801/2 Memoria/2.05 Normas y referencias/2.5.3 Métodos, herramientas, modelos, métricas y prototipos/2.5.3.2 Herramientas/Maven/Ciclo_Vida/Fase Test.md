##  Unit Test en Maven

Usando mvn test se pueden ejecutar tests en Maven

**Ejemplos:**

1.  mvn test* &rarr; ejecutar todas las unit test
2.  mvn -Dtest=TestApp1 test* &rarr; ejecutar una única unit test
3.  mvn -Dtest=TestApp1,TestApp2 test* &rarr; ejecutar múltiples unit test.




---
El plugin Surefire se usa durante la fase de test del ciclo de vida para ejecutar los test de una aplicación.
Genera los reportes en dos formatos: 

- Texto plano(*.txt)
- XML(*.xml)

Última versión de [maven-surefire-plugin][link]: 2018-12-20

[link]: https://maven.apache.org/surefire/maven-surefire-plugin/

pom.xml

    <build>
        <plugins>
            <plugin>
                <groupId>org.apache.maven.plugins</groupId>
                <artifactId>maven-surefire-plugin</artifactId>
                <version>3.0.0-M3</version>
            </plugin>
        </plugins>
    </build>
---

### 1.Maven Java Project

Proyecto sencillo realizado en Java para realizar las diferentes pruebas

Repositorio del proyecto: https://github.com/cs-ehu/MavenTest

#### 1.1 Estructura del proyecto

![](https://i.imgur.com/i49VRZO.png=200x300)


#### 1.2 Maven + JUnit 5, ejemplos

---

pom.xml

    <?xml version="1.0" encoding="UTF-8"?>
    <project xmlns="http://maven.apache.org/POM/4.0.0"
             xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
             xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 
             http://maven.apache.org/xsd/maven-4.0.0.xsd">
        <modelVersion>4.0.0</modelVersion>
        <groupId>es.ehu.cs19</groupId>
        <artifactId>maven-unit-test</artifactId>
        <packaging>jar</packaging>
        <version>1.1</version>
        <properties>
            <project.build.sourceEncoding>UTF-8</project.build.sourceEncoding>
            <maven.compiler.source>1.8</maven.compiler.source>
            <maven.compiler.target>1.8</maven.compiler.target>
        </properties>
        <dependencies>
            <dependency>
                <groupId>org.junit.jupiter</groupId>
                <artifactId>junit-jupiter-engine</artifactId>
                <version>5.3.1</version>
                <scope>test</scope>
            </dependency>
        </dependencies>
        <build>
            <finalName>maven-unit-test</finalName>
            <plugins>
                <plugin>
                    <groupId>org.apache.maven.plugins</groupId>
                    <artifactId>maven-surefire-plugin</artifactId>
                    <version>3.0.0-M3</version>
                </plugin>
            </plugins>
        </build>
    </project>
---

#### 1.3 Dos clases Java, después se creará el unit test para las clases

--- 
NumMagico.java
    
    package es.ehu.cs19;

    public class NumMagico{

        public static int getNum() {
            return 10;
        }

    }
--- 

--- 
Mensaje.java
    
    package es.ehu.cs19;

    public class Mensaje{

        public static String getMsg(){
            return "Hello_world";
        }

        public static int getNumber(){
            return 7;
        }

    }
--- 
#### 1.4 Clase Test para *NumMagico*

---
TestNumMagico.java

    package es.ehu.cs19;

    import org.junit.jupiter.api.Test;

    import static org.junit.jupiter.api.Assertions.assertEquals;

    /**
     * Unit test for simple App.
     */
    public class TestNumMagico
    {
        @Test
        public void testNum() 
        {
            assertEquals(10, NumMagico.getNum());
        }

    }


---

#### 1.5 Clase Test para *Mensaje*

---
TestMensaje.java

    package es.ehu.cs19;

    import org.junit.jupiter.api.Test;

    import static org.junit.jupiter.api.Assertions.assertEquals;

    public class TestMensaje
    {
        @Test
        public void testHelloWorld() {
            assertEquals("Hello_world", Mensaje.getMsg());
        }

        @Test
        public void testNumber() {
            assertEquals(7, Mensaje.getNumber());
        }

    }

---



### 2.Maven Test

#### 2.1 Ejecutar todas las classes test
---
Resultados del terminal
    
    mvn test

    [INFO] -------------------------------------------------------
    [INFO]  T E S T S
    [INFO] -------------------------------------------------------
    [INFO] Running es.ehu.cs19.TestMensaje
    [INFO] Tests run: 2, Failures: 0, Errors: 0, Skipped: 0, Time elapsed: 0.016 s - in es.ehu.cs19.TestMensaje
    [INFO] Running es.ehu.cs19.TestNumMagico
    [INFO] Tests run: 1, Failures: 0, Errors: 0, Skipped: 0, Time elapsed: 0 s - in es.ehu.cs19.TestNumMagico
    [INFO]
    [INFO] Results:
    [INFO]
    [INFO] Tests run: 3, Failures: 0, Errors: 0, Skipped: 0
    [INFO]
    [INFO] ------------------------------------------------------------------------
    [INFO] BUILD SUCCESS
    [INFO] ------------------------------------------------------------------------
    [INFO] Total time:  3.097 s
    [INFO] Finished at: 2019-04-30T13:03:37+02:00
    [INFO] ------------------------------------------------------------------------


---

#### 2.2 Ejecutar una única clase test *TestMensaje*
---
Resultados del terminal

    $ mvn -Dtest=TestMensaje test

    [INFO] -------------------------------------------------------
    [INFO]  T E S T S
    [INFO] -------------------------------------------------------
    [INFO] Running es.ehu.cs19.TestMensaje
    [INFO] Tests run: 2, Failures: 0, Errors: 0, Skipped: 0, Time elapsed: 0.007 s - in es.ehu.cs19.TestMensaje
    [INFO]
    [INFO] Results:
    [INFO]
    [INFO] Tests run: 2, Failures: 0, Errors: 0, Skipped: 0
    [INFO]
    [INFO] ------------------------------------------------------------------------
    [INFO] BUILD SUCCESS
    [INFO] ------------------------------------------------------------------------
    [INFO] Total time:  2.445 s
    [INFO] Finished at: 2019-04-30T13:05:44+02:00
    [INFO] ------------------------------------------------------------------------


---


#### 2.3 Ejecutar un único método *testHelloWorld()* de la clase TestMensaje

---
Resultados del terminal

    $ mvn -Dtest=TestMensaje#testHelloWorld test

    [INFO] -------------------------------------------------------
    [INFO]  T E S T S
    [INFO] -------------------------------------------------------
    [INFO] Running es.ehu.cs19.TestMensaje
    [INFO] Tests run: 1, Failures: 0, Errors: 0, Skipped: 0, Time elapsed: 0.006 s - in es.ehu.cs19.TestMensaje
    [INFO]
    [INFO] Results:
    [INFO]
    [INFO] Tests run: 1, Failures: 0, Errors: 0, Skipped: 0
    [INFO]
    [INFO] ------------------------------------------------------------------------
    [INFO] BUILD SUCCESS
    [INFO] ------------------------------------------------------------------------
    [INFO] Total time:  2.413 s
    [INFO] Finished at: 2019-04-30T13:07:19+02:00
    [INFO] ------------------------------------------------------------------------


---
