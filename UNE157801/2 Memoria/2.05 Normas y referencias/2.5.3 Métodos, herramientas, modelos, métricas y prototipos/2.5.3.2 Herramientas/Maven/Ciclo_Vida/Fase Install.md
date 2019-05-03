
# Lifecycle `install`

Para contruir e instalar artefactos en el repositorio local, maven ofrece el comando `install`.  
Ejemplo de uso:

```tex
mvn install
```

El comando ejecuta los ciclos anteriores (`validate`, `compile`, `package`, `verify`) antes de ejecutar la fase `install`.

Para realizar el `build` y el `deploy` de forma limpia de los artefactos del proyecto, se puede usar el comando:

```tex
mvn clean deploy
```

El comando se puede usar en un proyectos con multiples modules, ya que Maven va recorriendo cada subproyecto y ejecuta el comando en cada ellos.

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1 | Lectura sobre comando `install` | [Usual Command Line Calls][link-maven01] | 00:30:00 |

[link-maven01]: https://maven.apache.org/guides/introduction/introduction-to-the-lifecycle.html#Usual_Command_Line_Calls
