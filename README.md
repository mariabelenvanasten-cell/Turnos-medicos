# Gestor de Órdenes de Trabajo para Obras y Servicios

## Introducción
Muchas empresas de obras y servicios gestionan sus trabajos mediante herramientas informales como WhatsApp, registros en papel y planillas de Excel. Esta forma de trabajo genera desorganización, pérdida de información, errores administrativos y dificultades en la facturación y control de los trabajos.

Este proyecto propone el desarrollo de un sistema web que permita digitalizar y centralizar la gestión operativa y administrativa de una empresa de obras y servicios, mejorando la organización, el control de la información y la eficiencia del trabajo.

## Objetivo del Sistema
El objetivo del sistema es desarrollar una aplicación que permita gestionar de manera digital todas las órdenes de trabajo de la empresa, desde la solicitud del cliente hasta la facturación y el cobro del servicio.

El sistema permitirá:
- Registrar solicitudes de clientes
- Gestionar órdenes de trabajo
- Asignar técnicos a los trabajos
- Registrar horas trabajadas
- Registrar materiales utilizados
- Registrar compras de materiales
- Generar presupuestos
- Realizar facturación
- Registrar cobros
- Generar reportes

## Alcance del Sistema
El sistema abarcará la gestión completa de los trabajos realizados por una empresa de obras y servicios, incluyendo:
- Gestión de empresas (clientes)
- Registro de contactos
- Registro de solicitudes de trabajo
- Generación y administración de órdenes de trabajo
- Asignación de técnicos
- Registro de horas trabajadas
- Registro de materiales utilizados
- Gestión de proveedores
- Registro de órdenes de compra
- Generación de presupuestos
- Emisión de facturas
- Registro de pagos y cobros
- Generación de reportes y estadísticas

El sistema será una aplicación web accesible desde computadoras y dispositivos móviles.

## Usuarios del Sistema

### Encargado / Jefe
- Revisar solicitudes de trabajo
- Priorizar trabajos
- Asignar técnicos
- Controlar el estado de las órdenes de trabajo
- Cerrar órdenes de trabajo

### Técnicos
- Ver trabajos asignados
- Registrar horas trabajadas
- Registrar materiales utilizados
- Registrar compras de materiales
- Cargar informe del trabajo realizado

### Administración
- Gestionar empresas y contactos
- Generar presupuestos
- Realizar facturación
- Registrar cobros
- Consultar reportes

### Clientes
- Realizar solicitudes de trabajo
- Consultar estado de trabajos
- Consultar presupuestos
- Consultar facturas

## Flujo del Sistema
Solicitud → Orden de Trabajo → Ejecución del Trabajo → Presupuesto → Facturación → Cobro → Cierre del Trabajo

## Estados de la Orden de Trabajo
Las órdenes de trabajo podrán tener los siguientes estados:
- Solicitud nueva
- Pendiente
- Asignado
- En proceso
- Esperando materiales
- Terminado
- Presupuestado
- Aprobado
- Facturado
- Pendiente de cobro
- Cobrado
- Cerrado

## Gestión de Materiales
El sistema contempla dos modalidades:

**Materiales a cargo del cliente:**  
El cliente paga directamente los materiales al proveedor y la empresa solo factura la mano de obra.

**Materiales a cargo de la empresa:**  
La empresa compra los materiales y estos se incluyen en el presupuesto y en la factura al cliente.

## Módulos del Sistema
El sistema estará compuesto por los siguientes módulos:
- Usuarios
- Empresas
- Contactos
- Solicitudes
- Órdenes de Trabajo
- Técnicos
- Horas de Trabajo
- Materiales
- Proveedores
- Órdenes de Compra
- Presupuestos
- Facturación
- Pagos / Cobros
- Reportes

## Base de Datos
Tablas principales del sistema:
- usuarios
- empresas
- contactos
- tecnicos
- solicitudes
- ordenes_trabajo
- horas_trabajo
- materiales
- proveedores
- ordenes_compra
- detalle_orden_compra
- presupuestos
- facturas
- pagos

## Integrantes del Proyecto
- Belén Van Asten
- Franco Barcellone
- Mauricio Rebeque


## Carrera
Tecnicatura Universitaria en Programación  
Universidad Tecnológica Nacional (UTN)
