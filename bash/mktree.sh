#! /bin/bash
PROYECTO=$1 
mkdir $PROYECTO 
cd $PROYECTO 

#
A="1 Índice general"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

#
A="2 Memoria"
mkdir "$A"
cd "$A"
##
A="2.1 Introducción"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

##
A="2.2 Objeto del proyecto"
mkdir "$A"
cd "$A"

###
A="2.2.1 Acta de constitución del proyecto"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

###
A="2.2.2 Enunciado del alcance"
mkdir "$A"
cd "$A"
####
for A in  \
"2.2.2.1 Descripción del alcance" \
"2.2.2.2 Criterios de aceptación" \
"2.2.2.3 Relación de entregables" \
"2.2.2.4 Exclusiones" \
"2.2.2.5 Restricciones" \
"2.2.2.6 Supuestos" \
"2.2.2.7 Objetivos medibles y criterios de éxito"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ../..

##
A="2.3 Antecedentes"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

##
A="2.4 Descripción de la situación actual"
mkdir "$A"
cd "$A"
###
for A in  \
"2.4.1 Descripción del entorno actual" \
"2.4.2 Resumen de las deficiencias identificadas"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

##
A="2.5 Normas y referencias"
mkdir "$A"
cd "$A"

###
A="2.5.1 Disposiciones legales y normas aplicadas"
mkdir "$A"
cd "$A"
for A in  \
"2.5.1.1 UNE 157801" \
"2.5.1.2 UNE 50132" \
"2.5.1.3 CCII-N2016-02" \
"2.5.1.4 ISO 25.000" \
"2.5.1.5 ..."
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done
cd ..

###
A="2.5.2 Bibliografía"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

###
A="2.5.3 Métodos, herramientas, modelos, métricas y prototipos"
mkdir "$A"
cd "$A"
for A in  \
"2.5.3.1 Métodos" \
"2.5.3.2 Herramientas" \
"2.5.3.3 Modelos" \
"2.5.3.4 Métricas" \
"2.5.3.5 Prototipos"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done
cd ..

###
A="2.5.4 Mecanismos de control de calidad en la redacción del proyecto"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

###
A="2.5.5  Otras referencias"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

cd ..
##
A="2.6 Definiciones y abreviaturas"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

##
A="2.7 Requisitos iniciales"
mkdir "$A"
cd "$A"
for A in  \
"2.7.1 Funcionales" \
"2.7.2 No funcionales"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done
cd ..

##
A="2.8 Alcance"
mkdir "$A"
cd "$A"
for A in  \
"2.8.01 Enunciado del alcance" \
"2.8.02 Diagrama EDT-WBS" \
"2.8.03 Diccionario EDT-WBS" \
"2.8.04 Entregables" \
"2.8.05 Criterios de aceptación, exclusiones, restricciones y supuestos." \
"2.8.06 Paquetes de trabajo" \
"2.8.07 Lista de requisitos" \
"2.8.08 Listas de verificación de requisitos" \
"2.8.09 Matriz de trazabilidad de requisitos" \
"2.8.10 Lista de actividades" \
"2.8.11 Duración de las actividades" \
"2.8.12 Lista de hitos" \
"2.8.13 Recursos de las actividades" \
"2.8.14 Precedencia de las actividades" \
"2.8.15 Línea base del cronograma" \
"2.8.16 Línea base de costes" \
"2.8.17 Registro de interesados" \
"2.8.18 Exclusiones" \
"2.8.19 ..." 
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done
cd ..

##
A="2.9 Hipótesis y restricciones"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

##
A="2.10 Estudio de alternativas y viabilidad"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

##
A="2.11 Descripción de la solución propuesta"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

##
A="2.12 Análisis de riesgos"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

##
A="2.13 Organización y gestión del proyecto"
mkdir "$A"

###
cd "$A"
for A in  \
"2.13.1 Organización" \
"2.13.2 Planificación del proyecto (PP)" 
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

###
A="2.13.3 Gestión del proyecto (PMC)"
mkdir "$A"
cd "$A"

####
A="2.13.3.1 Gestión de la integración del proyecto (AC4)"
mkdir "$A"
cd "$A"
#####
for A in  \
"2.13.3.1.1 Desarrollar el acta de constitución del proyecto (4.1)" \
"2.13.3.1.2 Desarrollar el plan para la dirección del proyecto (4.2)" \
"2.13.3.1.3 Dirigir y gestionar el trabajo del proyecto (4.3)" \
"2.13.3.1.4 Monitorizar y controlar el trabajo del proyecto (4.4)"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

####
A="2.13.3.2 Gestión del alcance del proyecto (AC5)"
mkdir "$A"
cd "$A"
for A in  \
"2.13.3.2.1 Planificar la gestión del alcance (5.1)" \
"2.13.3.2.2 Recopilar requisitos (5.2)" \
"2.13.3.2.3 Definir el alcance (5.3)" \
"2.13.3.2.4 Crear la ETD-WBS (5.4)"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done
cd ..

####
A="2.13.3.3 Gestión del calendario del proyecto (AC6)"
mkdir "$A"
cd "$A"
#####
for A in  \
"2.13.3.3.1 Planificar la gestión del cronograma (6.1)" \
"2.13.3.3.2 Definir las actividades (6.2)" \
"2.13.3.3.3 Secuenciar las actividades (6.3)" \
"2.13.3.3.4 Estimar los recursos de las actividades (6.4)" \
"2.13.3.3.5 Estimar la duración de las actividades (6.5)" \
"2.13.3.3.6 Desarrollar el cronograma (6.6)"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

####
A="2.13.3.4 Gestión de los costes del proyecto (AC7)"
mkdir "$A"
cd "$A"
#####
for A in  \
"2.13.3.4.1 Planificar la gestión de los costes (7.1)" \
"2.13.3.4.2 Estimar los costes (7.2)" \
"2.13.3.4.3 Determinar el presupuesto (7.3)" \
"2.13.3.4.4 Controlar los costes (7.4)"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

####
A="2.13.3.5 Gestión de la calidad del proyecto (AC8)"
mkdir "$A"
cd "$A"
#####
for A in  \
"2.13.3.5.1 Planificar la gestión de la calidad (8.1)" \
"2.13.3.5.2 Realizar el aseguramiento de la calidad (8.2)" \
"2.13.3.5.3 Controlar la calidad (8.3)"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

####
A="2.13.3.6 Gestión de los recursos humanos (AC9)"
mkdir "$A"
cd "$A"
#####
for A in  \
"2.13.3.6.1 Planificar la gestión de los recursos humanos (9.1)" \
"2.13.3.6.2 Adquirir el equipo del proyecto (9.2)" \
"2.13.3.6.3 Desarrollar el equipo del proyecto (9.3)" \
"2.13.3.6.4 Dirigir el equipo del proyecto (9.4)"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

####
A="2.13.3.7 Gestión de las comunicaciones del proyecto (AC10)"
mkdir "$A"
cd "$A"
#####
for A in  \
"2.13.3.7.1 Planificar la gestión de las comunicaciones (10.1)" \
"2.13.3.7.2 Gestionar las comunicaciones (10.2)" \
"2.13.3.7.3 Controlar las comunicaciones (10.3)"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

####
A="2.13.3.8 Gestión de los riesgos del proyecto (AC11)"
mkdir "$A"
cd "$A"
#####
for A in  \
"2.13.3.8.1 Planificar la gestión de riesgos (11.1)" \
"2.13.3.8.2 Identificar los riesgos (11.2)" \
"2.13.3.8.3 Realizar el análisis cualitativo de riesgos (11.3)" \
"2.13.3.8.4 Realizar el análisis cuantitativo de riesgos (11.4)" \
"2.13.3.8.5 Planificar la respuesta a los riesgos (11.5)" \
"2.13.3.8.6 Controlar los riesgos (11.6)"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

####
A="2.13.3.9 Gestión de adquisiciones del proyecto (AC12)"
mkdir "$A"
cd "$A"
#####
for A in  \
"2.13.3.9.1 Planificar la gestión de las adquisiciones (12.1)" \
"2.13.3.9.2 Efectuar las adquisiciones (12.2)" \
"2.13.3.9.3 Controlar las adquisiciones (12.3)" \
"2.13.3.9.4 Cerrar las adquisiciones (12.4)"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

####
A="2.13.3.10 Gestión de los interesados del proyecto (AC13)"
mkdir "$A"
cd "$A"
#####
for A in  \
"2.13.3.10.1 Identificar a los interesados (13.1)" \
"2.13.3.10.2 Planificar la gestión de los interesados (13.2)" \
"2.13.3.10.3 Gestionar la participación de los interesados (13.3)" \
"2.13.3.10.4 Controlar la participación de los interesados (13.4)"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ../../..

##
A="2.14 Planificación temporal"
mkdir "$A"
cd "$A"
###
A="2.14.1 Cronograma"
mkdir "$A"
cd "$A"
####
for A in  \
"2.14.1.1 Lista de hitos" \
"2.14.1.2 Diagrama de red del cronograma"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

###
A="2.14.2 Calendarios de recursos"
mkdir "$A"
cd "$A"
cd ..

cd ..

##
A="2.15 Resumen del Presupuesto"
mkdir "$A"
cd "$A"
cd ..

##
A="2.16 Orden de prioridad de los documentos básicos del proyecto"
mkdir "$A"
cd "$A"
cd ..

##
A="2.17 Procesos de ingeniería del sistema y producto"
mkdir "$A"
cd "$A"
###
for A in  \
"2.17.1 Definición de los requisitos de los interesados" \
"2.17.2 Análisis de los requisitos del sistema" \
"2.17.3 Diseño de la arquitectura del sistema" 
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

###
A="2.17.4 Implementación"
mkdir "$A"
cd "$A"
####
for A in  \
"2.17.4.1 Análisis de los requisitos del software (RD)" \
"2.17.4.2 Gestión de requisitos (REQM)" \
"2.17.4.3 Diseño de la arquitectura del software" \
"2.17.4.4 Diseño detallado del software" \
"2.17.4.5 Construcción del software" \
"2.17.4.6 Integración del producto (PI)" \
"2.17.4.7 Test de calidad del software"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

###
A="2.17.5 Soporte del software"
mkdir "$A"
cd "$A"
####
for A in  \
"2.17.5.1 Gestión de la documentación del software" \
"2.17.5.2 Gestión de la configuración del software (CM)" \
"2.17.5.3 Aseguramiento de la calidad del software (PPQA)" \
"2.17.5.4 Verificación del software" \
"2.17.5.5 Validación del software" \
"2.17.5.6 Revisión del software" \
"2.17.5.7 Auditoría del software" \
"2.17.5.8 Resolución de problemas de software"
#####
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

###
A="2.17.6 Reutilización del software"
mkdir "$A"
cd "$A"
####
for A in  \
"2.17.6.1 Ingeniería del dominio" \
"2.17.6.2 Gestión del aseguramiento de la reutilización" \
"2.17.6.3 Gestión de la reutilización"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

cd ..

cd ..

#
A="3 Anexos"
mkdir "$A"
cd "$A"
##
for A in  \
"3.1 Documentación de entrada" \
"3.2 Análisis y diseño del sistema" \
"3.3 Estimación de tamaño y esfuerzos"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

##
A="3.4 Planes de gestión del proyecto"
mkdir "$A"
cd "$A"
###
for A in  \
"3.4.01 Plan de gestión de la integración" \
"3.4.02 Plan de gestión del alcance" \
"3.4.03 Plan de gestión de plazos " \
"3.4.04 Plan de gestión de costes" \
"3.4.05 Plan de gestión de calidad" \
"3.4.06 Plan de gestión de recursos humanos" \
"3.4.07 Plan de gestión de comunicaciones" \
"3.4.08 Plan de gestión de riesgos" \
"3.4.09 Plan de gestión de adquisiciones" \
"3.4.10 Plan de gestión de interesados" \
"3.4.11 Plan de gestión de cambios" \
"3.4.12 Plan de gestión de la configuración" \
"3.4.13 Plan de gestión de mejoras de los procesos" \
"3.4.14 Plan de gestión de requisitos" \
"3.4.15 Plan de gestión de pruebas"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

##
A="3.5 Plan de seguridad"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

##
A="3.6 Manuales"
mkdir "$A"
cd "$A"
###
for A in  \
"3.6.1 Manual de usuario" \
"3.6.2 Manual de instalación" \
"3.6.3 Manual de administración"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

##
A="3.7 Plan de pruebas"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

##
A="3.8 Planos"
mkdir "$A"
cd "$A"
###
for A in  \
"3.8.1 Planos del sistema" \
"3.8.2 Planos del producto" \
"3.8.3 Planos de procesos"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

##
A="3.9 Bases de datos"
mkdir "$A"
cd "$A"
###
for A in  \
"3.9.1 Estructura de las Bases de Datos" \
"3.9.2 Tablas de las Bases de Datos" \
"3.9.3 Relaciones de las Bases de Datos"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done

cd ..

##
A="3.10 Código fuente de las aplicaciones"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda 
cd ..  

##
A="3.11 Copias de seguridad"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda 
cd ..  

##
A="3.12 Otros anexos"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda

cd ..
cd ..

#
A="4 Especificaciones del sistema"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

#
A="5 Presupuesto"
mkdir "$A"
cd "$A"
echo "ayuda" >.ayuda
cd ..

#
A="6 Estudios con entidad propia"
mkdir "$A"
cd "$A"
###
for A in  \
"6.1 LOPD y RGPD" \
"6.2 LSSI" \
"6.3 Firma electrónica" \
"6.4 Prevención de Riesgos Laborales" \
"6.5 Impacto Ambiental"
do
   mkdir "$A"
   cd "$A"
   echo "ayuda" >.ayuda
   cd ..
done


