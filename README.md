Pontificia Universidad Católica del Ecuador

Prueba - Desarrollo en Plataformas
Estudiante: William Cariron        Fecha: 19/12/2025        Paralelo: 2
Mis Decisiones de Diseño

1. Tabla
   Nombre de la tabla:
   ingresos
   Campos:
   Campo	Tipo	¿Obligatorio?
   id	BIGINT (auto incremental)	Sí
   placa	VARCHAR(10)	Sí
   marca	VARCHAR(50)	Sí
   modelo	VARCHAR(50)	Sí
   problema	TEXT	Sí
   cliente\_nombre	VARCHAR(80)	Sí
   cliente\_telefono	VARCHAR(20)	Sí
   estado	ENUM	Sí
   fecha\_ingreso	TIMESTAMP	Sí
   created\_at	TIMESTAMP	Sí
   updated\_at	TIMESTAMP	Sí
2. ¿Se puede eliminar registros?
   Respuesta: No
   Razón (1 línea):
   Los registros no se eliminan para conservar el historial de atención cuando el vehículo se retira, el estado se actualiza a retirado







https://github.com/Wfcmg/Prubea-RDA2.git



