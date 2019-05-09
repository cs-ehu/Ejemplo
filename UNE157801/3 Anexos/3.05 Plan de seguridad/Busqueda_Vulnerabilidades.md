# Búsqueda de vulnerabilidades

Este documento estaría incluido en la documentación sobre evaluación de riesgos: descripción de la metodología a emplear (cómo se realizará la evaluación de las amenazas, vulnerabilidades)

Para la búsqueda de vulnerabilidades tenemos múltiples herramientas.

### Grendel-Scan
Es una herramienta desarrollada en Java disponible para Windows, Linux y Mac OS.
[Descarga](https://sourceforge.net/projects/grendel/)

### [Vega](https://subgraph.com/vega/documentation/index.en.html)
Esta herramienta está escrita en Java y ofrece un entorno basado en GUI. Está disponible para Mac, Linux y Windows.

Puede utilizarse para encontrar SQL injection, header injection, directory listing, shell injection, cross site scripting, file inclusion y otras vulnerabilidades de aplicaciones web. Esta herramienta también se puede ampliar usando una potente API escrita en JavaScript.

### [Wapiti](http://wapiti.sourceforge.net/)
Realiza pruebas de caja negra al escanear páginas web e inyectar datos. Intenta inyectar cargas y ver si un script es vulnerable. Es compatible con los ataques GET y POSTHTTP y detecta múltiples vulnerabilidades.

Puede detectar las siguientes vulnerabilidades:

- File Disclosure
- File inclusion
- Cross Site Scripting (XSS)
- Command execution detection
- CRLF Injection
- SEL Injection and Xpath Injection
- Weak .htaccess configuration
- Backup files disclosure

Wapiti es una aplicación de línea de comandos. Por lo tanto, puede no ser fácil para los principiantes. Pero para los expertos, funcionará muy bien. Para utilizar esta herramienta se necesitan aprender muchos comandos, o tener la documentación siempre a mano.

### [Skipfish](https://code.google.com/archive/p/skipfish/)
Skipfish rastrea el sitio web y luego revisa cada página buscando varias amenazas de seguridad para después preparar un informe final. Esta herramienta esta escrita en C y está muy optimizada para el manejo HTTP y muy pocos recursos de CPU. En la descripción dice que puede manejar fácilmente 2000 solicitudes por segundo sin agregar una carga en la CPU. Utiliza un enfoque heurístico al rastrear y probar páginas web. Esta herramienta también pretende ofrecer alta calidad y menos falsos positivos.

Está disponible para Linux, FreeBSD, MacOS X y Windows.

### SQLMap
SQLMap es una herramienta popular de test de penetración. Automatiza el proceso de encontrar y explotar la vulnerabilidad de SQL injection en la base de datos de un sitio web. Tiene un poderoso motor de detección y muchas características útiles.

Soporta un alto rango de servidores de bases de datos incluyendo MySQL, Oracle, PostgreSQL, Microsoft SQL Server, Microsoft Access, IBM DB2, SQLite, Firebird, Sybase y SAP MaxDB. Ofrece soporte completo a 6 tipos de técnicas de SQL injection: time-based blind, boolean-based blind, error-based, UNION query, stacked queries y out-of-band.


### Graber
Graber puede detectar muchas vulnerabilidades de seguridad en aplicaciones web. Realiza exploraciones e indica dónde está la vulnerabilidad. Puede detectar las siguientes vulnerabilidades:

- Cross site scripting
- SQL injection
- Ajax testing
- File inclusion
- JS source code analyzer
- Backup file check
No es muy rápido en comparación con otros escáneres, pero es simple y portátil. Yo lo usaría sólo para probar aplicaciones web pequeñas, ya que toma demasiado tiempo explorar aplicaciones grandes.

Esta herramienta no ofrece ningún interfaz GUI, tampoco puede crear ningún informe PDF. Fue diseñada para ser simple y para uso personal, no la recomiendo para uso profesional.

Esta desarrollada en Python y existe una versión ejecutable. El código fuente está disponible, por lo que puedes modificarlo de acuerdo a tus necesidades. El script principal es grabber.py, que una vez ejecutado llama a otros módulos como sql.py, xss.py u otros.


### Ratproxy
Ratproxy es también una herramienta de auditoria para aplicaciones web que puede utilizarse para encontrar vulnerabilidades de seguridad. Es compatible con entornos Linux, FreeBSD, Mac OS y Windows (Cygwin).

Está diseñada para superar los problemas que los usuarios usualmente enfrentan al usar otras herramientas de proxy para auditorías de seguridad. Es capaz de distinguir entre hojas de estilo CSS y códigos JavaScript. También soporta ataques SSL man-in-the-middle, lo que significa que también puedes ver los datos que pasan a través de SSL.

### Arachni
Esta herramienta ha sido diseñada para proporcionar un entorno para realizar test de penetración. Esta herramienta puede detectar varias vulnerabilidades de seguridad en aplicaciones web como SQL Injection, XSS, Local File inclusion, remote file inclusion, unvalidated redirect, etc.

### Wfuzz
Esta herramienta se puede usar para hacer fuerza bruta de parámetros GET y POST para realizar comprobaciones de varios tipos de inyecciones como SWL, XSS, LDAP. También realiza cookie fuzzing, multi-threading, SOCK, Proxy, Authentication, parameters brute forcing y multiple proxy. No ofrece un interfaz GUI por lo que hay que trabajar con comandos.

### Zed Attack Proxy
Zed Attack Proxy conocida ZAP, desarrollada por AWASP, está disponible para Windows, Unix / Linux y Mac OS.  
Puede utilizarse para encontrar una amplia gama de vulnerabilidades en aplicaciones web. La herramienta es muy simple y fácil de usar. Incluso si eres nuevo en los test de penetración, puedes utilizar fácilmente esta herramienta para comenzar a aprender.


