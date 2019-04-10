
##  JUnit

### Descripción
JUnit es un conjunto de clases (framework) que permite realizar la ejecución de clases Java de manera controlada, para poder evaluar si el funcionamiento de cada uno de los métodos de la clase se comporta como se espera. Es decir, en función de algún valor de entrada se evalúa el valor de retorno esperado; si la clase cumple con la especificación, entonces JUnit devolverá que el método de la clase pasó exitosamente la prueba; en caso de que el valor esperado sea diferente al que regresó el método durante la ejecución, JUnit devolverá un fallo en el método correspondiente.



![Imagen archivo .doc](https://lh5.googleusercontent.com/L6q_Srp86tda4hU6qGU4XWTtbpOvWYaz96RKolFbM7J0wouxGhQua6Kvjue-6qinp3T7NyqXRasBd5OD094LczOobqB63Bb4zB76GsDC0uS5bnlbM_K4Ys8zvCZTx_Oct5R_dVYqCnce7WGtIQ)
 **Ejemplo de prueba unitaria exitosa*
 
Esta clase FacadeImplementationWSTest realiza las pruebas unitarias correspondientes para ejecutar el método CreateOffer() exitosamente. En el panel izquierdo, se observan las nueve distintas pruebas realizadas, donde ocho de ellas tienen resultados exitosos, y una tiene un fallo, el cual demuestra que hay un error de codificación a la hora de crear una oferta con precio negativo, ya que esto no esta controlado. En el panel de abajo, se observa el porcentaje de cobertura del método createOffer(), que abarca un 100%.
 

### Tareas

#### Obligatorias

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  | Definición de JUnit y página oficial       | [Sitio oficial](https://junit.org/junit5/) | 01:30:00|
| 2  | Documentacion y ejemplo de JUnit      | [Documentación](http://www.jtech.ua.es/j2ee/publico/lja-2012-13/sesion04-apuntes.html) | 02:00:00|


#### Opcionales

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
|  1  | JUnit en Eclipse      | [Video de YouTube](https://www.youtube.com/watch?v=I8XXfgF9GSc) | 00:12:00|

### Horas de aprendizaje
    
En total, entre tareas obligatorias e opcionales, en algo más de 3 horas y media podríamos saber a usar JUnit. Tiene una curva de aprendizaje rápido.
    
### Ventajas
* Fácil de aprender
* Es gratiuto y open source.
* Se encuentra bien mantenido y actualizado
* Permite el desarrollo de código mas rápido y de mayor calidad
* Las pruebas son escritas utilizando java

### Desventajas
* JUnit no hace pruebas unitarias en interfaces como Swing, JSPs o HTML
* Las pruebas JUnit no pueden remplazar las pruebas funcionales
* Las pruebas unitarias no pueden ser código de Java del lado del servidor

### Conclusiones
JUnit nos ha parecido una herramienta útil para la creación de pruebas unitarias que van a probar y garantizar la calidad de nuestro código. Además, es una herramienta fácil de aprender, lo que hace que usuarios no expertos en programación puedan utilizarla rápidamente.

