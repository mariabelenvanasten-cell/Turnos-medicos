# Sistema de Gestión de Turnos Médicos Básicos

Proyecto desarrollado para la materia Programación III – Tecnicatura Universitaria en Programación (UTN).

---

## Nombre del proyecto
Sistema de Gestión de Turnos Médicos Básicos

---

## Descripción del Proyecto

Este proyecto consiste en el desarrollo de un sistema web simple para la gestión de turnos médicos.

El sistema permitirá a los pacientes:

- Solicitar turnos médicos  
- Visualizar turnos registrados  
- Cancelar turnos  

Además, un administrador podrá visualizar todos los turnos registrados para gestionar una agenda médica básica.

---

## MVP (Producto Mínimo Viable)

El sistema permitirá a los pacientes solicitar, ver y cancelar turnos médicos.  
El administrador podrá visualizar todos los turnos registrados.

---

## Entidades

### Paciente
Paciente (id, nombre, dni, telefono, email)

### Turno
Turno (id, fecha, hora, estado, paciente_id)

---

## Relación

Un turno pertenece a un paciente.  
Un paciente puede tener muchos turnos.

Relación: Paciente (1) → (N) Turnos

---

## Historias de Usuario

1. Como paciente quiero solicitar un turno médico para poder atenderme en una fecha determinada.  
2. Como paciente quiero ver mis turnos solicitados para saber cuándo tengo consultas médicas.  
3. Como paciente quiero cancelar un turno para liberar ese horario.  
4. Como administrador quiero ver todos los turnos registrados para gestionar la agenda médica.  
5. Como administrador quiero cambiar el estado de un turno para mantener actualizada la agenda médica.

---

## Integrantes del equipo

- Belén Van Asten  
- Franco Barcellone  
- Mauricio Rebeque  
- Ailen Quaglino Fail
