
##  ELK

### Descripción
ELK es un motor de búsqueda y análisis de texto completo de código abierto altamente escalable. Permite almacenar, buscar y analizar grandes volúmenes de datos rápidamente y casi en tiempo real. 
Generalmente se utiliza como el motor/tecnología subyacente que impulsa las aplicaciones que tienen características y requisitos de búsqueda complejos.
Estos son algunos ejemplos de casos de uso para los que se podría utilizar Elasticsearch:
* Una tienda web en línea donde  buscar los productos. 
Se puede utilizar Elasticsearch para almacenar todo el catálogo de productos e inventario y proporcionar sugerencias de búsqueda y autocompletarlos.
* Para recopilar datos de registro o de transacción y  analizar y extraer estos datos para buscar tendencias, estadísticas, resúmenes o anomalías. 
En este caso,se puede utilizar Logstash (parte de la pila Elasticsearch/Logstash/Kibana) para recopilar, agregar y analizar los datos y, a continuación, hacer que Logstash los introduzca en Elasticsearch. 
Una vez que los datos están en Elasticsearch, se pueden ejecutar búsquedas y agregaciones para extraer cualquier información de interés.



ELK es el conjunto formado por las herramientas: 
  * Logstash
  * Elasticsearch
  * Kibana
1. Logstasch es un proceso ETL. Como tal consta de estas tres fases: extracción, transformación y carga.

- Extrae información de un punto A a un punto B(elasticsearch)
- Transforma la información
- Modifica
- Añade información
- La información se puede extraer mediante Beats : plugin que permite la instalación en servidores para recuperar información y enviarla a elasticsearch

2. Elasticsearch 
    - Es la parte principal
    - Guarda información
    - Envia información a Kibana

3. Kibana
    - Realiza las visualizaciones
    - Busca la información de elasticsearch


![Visualizaciones mediante Kibana](https://lh3.googleusercontent.com/b2f84q33d8_cdVml-jP2YwnYoxqBOIyBDeCD6D117FYuIhp6X2yUqVisSY9K6ICOZF3pLrSMyxgyo751VhpTXXzfWuaMXrIj8v2E04T17Pgc-bj3Epq4UOEy0emtz2RgnvFMFwux)

### Tareas

#### Obligatorias

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
| 1  | Introducción Elastisearch     | [Video Elasticsearch](https://www.elastic.co/es/webinars/getting-started-elasticsearch?baymax=rtp&elektra=home&storm=sub1&iesrc=ctr) | 00:50:00|
| 2  | Primeros pasos con Kibana      | [Video Kibana](https://www.elastic.co/es/webinars/getting-started-kibana?elektra=home&amp;storm=sub2) | 00:50:00|
| 3  |Primeros pasos con Logstash     | [Video Logstash](https://www.elastic.co/es/webinars/getting-started-logstash?baymax=rtp&elektra=home&storm=sub3&iesrc=ctr) | 01:00:00|

#### Opcionales

| ID      | Descripción | Referencia | Tiempo  |
| ------- | ----------- | ---------- | ------- |
|  1  | Documentación       | [Recursos y aprendizaje](https://www.elastic.co/es/learn) | 40:00:00|

### Horas de aprendizaje
Con una primera fase de 3 horas podría realizarse alguna pequeña implementación.
Para conocer a fondo esta herramienta estimo un mínimo de 40 horas porque la documentación y videos son abundantes.
    
### Ventajas
* La documentación es muy didáctica.
* Se puede encontrar mucha documentación y videos oficiales en castellano.
* Hay una comunidad muy activa donde también se pueden realizar aportaciones.
* Se puede implementar en diversas plataformas.

### Desventajas
* Las partes que no son de código abierto como X-Path llevan a los vendedores a realizar su publicidad que en algunos caso puede resultar insistente.

### Conclusiones
ELK es una herramienta muy interesante que puede dirigirse a campos como la seguridad o el Maching learning.
Tiene una comunidad activa amplia y ofrece un soporte formativo de calidad.
