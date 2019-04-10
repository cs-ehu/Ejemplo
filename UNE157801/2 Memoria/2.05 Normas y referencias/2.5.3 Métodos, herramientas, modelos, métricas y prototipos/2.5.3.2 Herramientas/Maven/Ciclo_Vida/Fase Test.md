##  Unit Test en Maven

Usando mvn test se pueden ejecutar tests en Maven

**Ejemplos:**

1. *$ mvn test* &rarr; ejecutar todas las unit test
2. *$ mvn -Dtest=TestApp1 test* &rarr; ejecutar una única unit test
3. *$ mvn -Dtest=TestApp1,TestApp2 test* &rarr; ejecutar múltiples unit test.

El *maven-surefireplugin* está anticuado, así que hay que asegurarse de tenerlo actualizado a la última versión para poder usar las nuevas características.




---
pom.xml


	<build>
        <plugins>

            <plugin>
                <groupId>org.apache.maven.plugins</groupId>
                <artifactId>maven-surefire-plugin</artifactId>
                <version>2.22.0</version>
            </plugin>

        </plugins>
    </build>


---

### 1.Maven Java Project


#### 1.1 Maven + JUnit 5, ejemplos


---

pom.xml




    <?xml version="1.0" encoding="UTF-8"?>
    <project xmlns="http://maven.apache.org/POM/4.0.0"
             xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
             xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 
             http://maven.apache.org/xsd/maven-4.0.0.xsd">

        <modelVersion>4.0.0</modelVersion>
        <groupId>prueba</groupId>
        <artifactId>maven-unit-test</artifactId>
        <packaging>jar</packaging>
        <version>1.0-SNAPSHOT</version>

        <properties>
            <!-- https://maven.apache.org/general.html#encoding-warning -->
            <project.build.sourceEncoding>UTF-8</project.build.sourceEncoding>
            <maven.compiler.source>1.8</maven.compiler.source>
            <maven.compiler.target>1.8</maven.compiler.target>
        </properties>

        <dependencies>

            <!-- junit 5, unit test -->
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
                    <version>2.22.0</version>
                </plugin>

            </plugins>
        </build>

    </project>

---

#### 1.2 Dos clases Java, después se creará el unit test para las clases

--- 
NumConstructor.java
    
    package prueba;

    public class NumConstructor {

        public static int getNum() {
            return 10;
        }

    }


--- 






--- 
MsgConstructor.java
    
    package prueba;

    public class MsgConstructor {

        public static String getMsg(){
            return "Hello_world";
        }

        public static int getNumber(){
            return 7;
        }

    }
    
--- 
#### 1.3 Clase Test para *NumConstructor*

---
TestNumConstructor.java

    package prueba;

    import org.junit.jupiter.api.Test;

    import static org.junit.jupiter.api.Assertions.assertEquals;

    public class TestNumConstructor {

        @Test
        public void testNum() {
            assertEquals(10, NumConstructor.getNum());
        }

    }


---

#### 1.4 Clase Test para *MsgConstructor*

---
TestMsgConstructor.java

    package prueba;

    import org.junit.jupiter.api.Test;

    import static org.junit.jupiter.api.Assertions.assertEquals;

    public class TestMsgConstructor {

        @Test
        public void testHelloWorld() {
            assertEquals("Hello_world", MsgConstructor.getMsg());
        }

        @Test
        public void testNumber() {
            assertEquals(7, MsgConstructor.getNumber());
        }

    }

---



### 2.Maven Test

#### 2.1 Ejecutar todas las classes test
---
Resultados del terminal
    
    $ mvn test

    [INFO] -------------------------------------------------------
    [INFO]  T E S T S
    [INFO] -------------------------------------------------------
    [INFO] Running prueba.TestNumConstructor
    [INFO] Tests run: 1, Failures: 0, Errors: 0, Skipped: 0, Time elapsed: 0.004 s - in prueba.TestNumConstructor
    [INFO] Running prueba.TestMsgConstructor
    [INFO] Tests run: 2, Failures: 0, Errors: 0, Skipped: 0, Time elapsed: 0.001 s - in prueba.TestMsgConstructor
    [INFO]


---

#### 2.2 Ejecutar una única clase test *TestMsgConstructor*
---
Resultados del terminal

    $ mvn -Dtest=TestMsgConstructor test

    [INFO] -------------------------------------------------------
    [INFO]  T E S T S
    [INFO] -------------------------------------------------------
    [INFO] Running prueba.TestMsgConstructor
    [INFO] Tests run: 2, Failures: 0, Errors: 0, Skipped: 0, Time elapsed: 0.004 s - in prueba.TestMsgConstructor
    [INFO] Tests run: 2, Failures: 0, Errors: 0, Skipped: 0, Time elapsed: 0.001 s - in prueba.TestMsgConstructor
    [INFO]


---


#### 2.3 Ejecutar un único método *testHelloWorld()* de la clase TestMsgConstructor

---
Resultados del terminal

    $ mvn -Dtest=TestMsgConstructor#testHelloWorld test

    [INFO] -------------------------------------------------------
    [INFO]  T E S T S
    [INFO] -------------------------------------------------------
    [INFO] Running prueba.TestMsgConstructor
    [INFO] Tests run: 1, Failures: 0, Errors: 0, Skipped: 0, Time elapsed: 0.004 s - in prueba.TestMsgConstructor
    [INFO]


---