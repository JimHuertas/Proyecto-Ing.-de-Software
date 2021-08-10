# Proyecto-Ing.-de-Software
## Propósito del proyecto
El presente proyecto tiene la finalidad de aplicar todo lo aprendido a lo largo del semestre del curso de ing de software de la carrera de ciencia de la computación de la Universidad Nacional de San Agustín.

## Tecnologias usadas
En el presente proyecto usamos HTML, CSS ; el gestor de Base de Datos se uso MySQL , para la conexion de la Base de Datos y el frontend se usó PHP 

## Funcionalidades
- Mostrar resumen general: El sistema debe mostrar información general de la Semana de la Computación, así como los ponentes más destacados, los eventos mejor puntuados y acerca de la escuela profesional de Ciencia de la computación.
- Inicio de sesión de usuario: los usuarios deberán identificarse para poder inscribirse a los concursos organizados por la escuela.
- Registrar usuario: El sistema debe permitir al usuario registrarse. El sistema pedirá al usuario ingresar su correo electrónico institucional (si es que es estudiante de la UNSA) o personal (si es un usuario no relacionado con la UNSA) y contraseña.
- Mostrar ediciones de la semana de la computación: El sistema lista los años en los que se realizó la Semana de la computación.
- Mostrar cronograma de eventos por edición: El sistema muestra al usuario el cronograma de la edición elegida. No es necesario que se inicie sesión para tener acceso a la vista. Desde el cronograma el usuario puede seleccionar un evento.
- Visualizar evento: El sistema permite a los usuarios en general tener acceso a los eventos. No es necesario que se inicie sesión.
  - Mostrar información general: Se muestra el título, información del ponente, tema, fecha, hora, lugar o link del evento.
  - Puntuar evento:  El usuario podrá dar una puntuación a los evento de acuerdo a su nivel de satisfacción. 
  - Visualizar material adjunto: El usuario puede visualizar las presentaciones se han adjuntado junto con el evento
- Gestionar eventos: 
  - Publicar evento: El sistema permite al administrador crear un evento, dependiendo el tipo de evento, el sistema pedirá que ingresar la información general del evento : 
  - Presentación: Ingresar un título, nombre del ponente, tema, descripción,  fecha, hora, lugar o link del evento.
  - Concurso: Nombre del concurso, área relacionada, descripción, nombre del docente a cargo, fecha, hora, link del evento.
  - Editar Evento: Solo el administrador puede editar la información de un evento.
  - Eliminar Evento:  Solo el administrador puede eliminar un evento.
- Registrar inscripciones para concursos: El sistema permite a un usuario inscribirse en un concurso. Para ello se requiere que se haya iniciado sesión.
- Buscar por filtro: El sistema permite al usuario buscar un evento por título o etiquetas.
<p align="center">
  <img src="funcionalidades.png" width="650" >
</p>

## Práctica de código legible aplicadas
## Estilos de Programación aplicados
* Programacion Orientada a  Objetos
## Principios SOLID aplicados
* Single-responsability : El principio de responsabilidad única ( SRP ) es un principio de programación de computadoras que establece que cada módulo , clase o función en un programa de computadora debe tener responsabilidad sobre una sola parte de la funcionalidad de ese programa , y debe encapsular esa parte. Todo eso de la función módulo, clase o servicios deben estar alineados estrechamente con esa responsabilidad.
  - Si una Clase tiene muchas responsabilidades, aumenta la posibilidad de errores porque hacer cambios en una de sus responsabilidades podría afectar a las otras sin que usted     lo sepa.
  -  "Una clase debe tener solo una razón para cambiar"
  -  EJEMPLO:
     Martin define una responsabilidad como una razón para cambiar y concluye que una clase o módulo debe tener una, y solo una, razón para cambiar (por ejemplo, reescribir). Como ejemplo, considere un módulo que compila e imprime un informe. Imagine que un módulo de este tipo se puede cambiar por dos razones. Primero, el contenido del informe podría cambiar. En segundo lugar, el formato del informe podría cambiar. Estas dos cosas cambian por diferentes causas. El principio de responsabilidad única dice que estos dos aspectos del problema son en realidad dos responsabilidades separadas y, por lo tanto, deberían estar en clases o módulos separados. Sería un mal diseño acoplar dos cosas que cambian por diferentes razones en diferentes momentos.
La razón por la que es importante mantener una clase enfocada en una sola preocupación es que hace que la clase sea más sólida. Continuando con el ejemplo anterior, si hay un cambio en el proceso de compilación del informe, existe un mayor peligro de que el código de impresión se rompa si es parte de la misma clase.

## Conceptos DDD aplicados
