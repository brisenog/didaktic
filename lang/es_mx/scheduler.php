<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'scheduler', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['addappointment'] = 'Añadir otro estudiante';
$string['addondays'] = 'Añadir citas agendadas en';
$string['addscheduled'] = 'Añadir estudiante agendado';
$string['addscheduled_help'] = '<h3>Añadiendo una cita en la configuración del período</h3>
<p>Usando este enlace, Usted añadirá un usuario a la lista de reservaciones. Esto puede ser una forma simple y rápida para configurar una cita colectiva. </p>';
$string['addsession'] = 'Añadir espacio';
$string['addsingleslot'] = 'Añadir un solo lugar';
$string['addslot'] = 'Usted puede añadir lugares para cita agendada adicionales en cualquier momento';
$string['addstudenttogroup'] = 'Añadir a este estudiante al grupo de cita';
$string['allappointments'] = 'Todas las citas';
$string['allowgroup'] = 'Lugar exclusivo - elegir para cambiar';
$string['allslotsincloseddays'] = 'Añadir espacios en días cerrados';
$string['allteachersgrading'] = 'Los maestros pueden calificar todas las citas';
$string['allteachersgrading_desc'] = 'Cuando se habilita, los maestros pueden calificar las citas en las que no están asignados.';
$string['alreadyappointed'] = 'No puede hacerse la reservación. El lugar ya está completamente reservado.';
$string['appointagroup'] = 'Cita de grupo';
$string['appointagroup_help'] = 'Elija si quiere hacer la cita solamente para Usted, o para un grupo completo.';
$string['appointfor'] = 'Reservar para';
$string['appointformygroup'] = 'Reservar para mi grupo completo';
$string['appointingstudent'] = 'Reservación para lugar';
$string['appointingstudentinnew'] = 'Reservaciones para lugar nuevo';
$string['appointmentmode'] = 'Configurando el modo de reservación';
$string['appointmentmode_help'] = '<p>Usted puede elegir aquí algunas variantes en la manera en que se pueden tomar las citas (reservaciones). </p>
<p><ul>
<li><strong>"<emph>n</emph> citas en el agendador":</strong> El estudiante solamente puede reservar un número fijo de citas en esta actividad. Aun y cuando el profesor las marcara como "vistas", a ellos no se les permitirá reservar más reuniones. La única manera de reiniciarle al estudiante la habilidad para reservar es eliminar  los registros antiguos de "visto".</li>
<li><strong>"<emph>n</emph> citas (reservaciones) cada vez":</strong> El estudiante puede reservar un número fijo de citas (reservaciones). Una vez que termine la reunión y el profesor haya marcado al estudiante como "visto", el estudiante puede reservar más citas. Sin embargo, el estudiante está limitado a  <emph>n</emph> fechas-horas "abiertas" (no-vistas) en cualquier momento dado.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Reservación {$a}';
$string['appointmentnotes'] = 'Notas para reservación';
$string['appointments'] = 'Reservaciones';
$string['appointsolo'] = 'solamente yo';
$string['appointsomeone'] = 'Añadir nueva reservación';
$string['attendable'] = 'Asistible';
$string['attendablelbl'] = 'Total de candidatos para agendar';
$string['attended'] = 'Asistida';
$string['attendedlbl'] = 'Cantidad de estudiantes que asistieron';
$string['attendedslots'] = 'Lugares asistidos';
$string['availableslots'] = 'Lugares disponibles';
$string['availableslotsall'] = 'Todos los lugares';
$string['availableslotsnotowned'] = 'Sin dueño';
$string['availableslotsowned'] = 'Con dueño';
$string['bookwithteacher'] = 'Maestro';
$string['bookwithteacher_help'] = 'Elija un maestro para la cita';
$string['break'] = 'Receso entre lugares';
$string['breaknotnegative'] = 'La duración del receso no puede ser negativa';
$string['cancelledbystudent'] = '{$a} : Cita cancelada o movida por un estudiante';
$string['cancelledbyteacher'] = '{$a} : Cita cancelada por un maestro';
$string['choice'] = 'Elección';
$string['chooseexisting'] = 'Elegir existente';
$string['choosingslotstart'] = 'Eligiendo la hora de inicio';
$string['choosingslotstart_help'] = 'Cambie (o elija) la hora de inicio de la cita. Si esta cita choca con otros períodos, se le pedirá decidir si este período remplaza a todas las citas que conflictuan. Tenga en cuenta que los parámetros del nuevo período sobre-escribirán todas las configuraciones anteriores.';
$string['comments'] = 'Comentarios';
$string['complete'] = 'Reservada';
$string['composeemail'] = 'Redactar Email:';
$string['confirmdelete'] = 'La eliminación es definitiva. ¿Aún así, quiere continuar?';
$string['conflictingslots'] = 'Conflicto';
$string['course'] = 'Curso';
$string['csvencoding'] = 'Codificación del archivo de texto';
$string['csvfieldseparator'] = 'Separador de campos para el CSV';
$string['csvparms'] = 'Parámetros de formato del CSV';
$string['csvrecordseparator'] = 'Separador de registros del CSV';
$string['cumulatedduration'] = 'Suma de duraciones de citas';
$string['date'] = 'Fecha';
$string['datelist'] = 'Vista general';
$string['defaultslotduration'] = 'Duración por defecto del lugar';
$string['defaultslotduration_help'] = 'La duración por defecto (en minutos) para los lugares para citas que Usted configura';
$string['deleteallslots'] = 'eliminar todos los lugares';
$string['deleteallunusedslots'] = 'Eliminar lugar sin usar';
$string['deletemyslots'] = 'Eliminar todos mis lugares';
$string['deleteselection'] = 'Eliminar lugares seleccionados';
$string['deletetheseslots'] = 'Eliminar estos lugares';
$string['deleteunusedslots'] = 'Eliminar mis lugares sin usar';
$string['department'] = '¿ Desde donde ?';
$string['disengage'] = 'Abandonar mis cita';
$string['displayfrom'] = 'Mostrar citas a estudiantes desde';
$string['distributetoslot'] = 'Distribuir a todo el grupo';
$string['divide'] = '¿ Dividir en lugares ?';
$string['dontforgetsaveadvice'] = 'Usted ha cambiado la lista de personas agendadas. No se le olvide guardar este formato para que se apliquen los cambios en forma definitiva.';
$string['downloadexcel'] = 'Exportar a Excel';
$string['downloads'] = 'Exportaciones';
$string['duration'] = 'Duración';
$string['durationrange'] = 'La duración del lugar debe estar entre  {$a->min} y {$a->max} minutos..';
$string['email_applied_html'] = '<p>Se ha solicitado una cita para {$a->date} a las {$a->time},<br/>
por el estudiante <a href="{$a->attendee_url}">{$a->attendee}</a> para el curso:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>usando el agendador titulado "<i>{$a->module}</i>" en el sitio web: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = 'Se ha solicitado una cita para el {$a->date} a las  {$a->time},
por el estudiante {$a->attendee} para el curso:

{$a->course_short}: {$a->course}

usando el agendador titulado "{$a->module}" en el sitio web: {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: Nueva cita';
$string['email_cancelled_html'] = '<p>Su cita en <strong>{$a->date}</strong> at <strong>{$a->time}</strong>,<br/>
con el estudiante <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> para el curso :</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>en el agendador llamado "<em>{$a->module}</em>" en el sitio webe : <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">ha sido cancelado o movido</span></strong>.</p>';
$string['email_cancelled_plain'] = 'Su cita del {$a->date} at {$a->time},
con el estudiante {$a->attendee} para el curso:

{$a->course_short} : {$a->course}

en el agendador titulado "{$a->module}" en el sitio web : {$a->site}

ha sido cancelada o movida.';
$string['email_cancelled_subject'] = '{$a->course_short}: Cita cancelada o movida por un estudiante';
$string['emailreminder'] = 'Mandar un recordatorio por Email';
$string['email_reminder_html'] = '<p>Usted tiene una cita futura en <b>{$a->date}</b>
desde las <b>{$a->time}</b> hasta las <b>{$a->endtime}</b><br/>
con <b><a href="{$a->attendant_url}">{$a->attendant}</a></b>.</p>

<p>Ubicación: <b>{$a->location}</b></p>';
$string['emailreminderondate'] = 'Mandar un Email recordatorio en';
$string['email_reminder_plain'] = 'Usted tiene una cita próxima en {$a->date} desde {$a->time} hasta {$a->endtime} con {$a->attendant}. Lugar: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Recordatorio de cita';
$string['email_teachercancelled_html'] = '<p>Su cita en <strong>{$a->date}</strong> a las <strong>{$a->time} </strong>,<br/>
con el  {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> para el curso:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>en el agendador "<em>{$a->module}</em>" del sitio web: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">ha sido cancelado</span></strong>. Por favor solicite una nueva cita.</p>';
$string['email_teachercancelled_plain'] = 'Su reservación en {$a->date} at {$a->time},
con el {$a->staffrole} {$a->attendant} para el curso:

{$a->course_short}: {$a->course}

en el agendador titulado "{$a->module}" en el sitio web: {$a->site}

ha sido cancelada. Por favor, solicite un nuevo lugar.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: Cita cancelada por el profesor';
$string['end'] = 'Fin';
$string['enddate'] = 'Repetir espacio de tiempo Hasta';
$string['endtime'] = 'Hora de término';
$string['exclusive'] = 'Exclusiva';
$string['exclusivity'] = 'Exclusividad';
$string['exclusivity_help'] = '<p>Usted puede configurar un límite para la cantidad de estudiantes que pueden solicitar un mismo tiempo-fecha dado. </p>
<p>Al configurar un límite de 1 (por defecto) se alternará la hora-fecha a modo exclusivo.</p>
<p>si la hora-fecha se configura a número ilimitado (0), esta hora-fecha nunca se considerará en evaluaciones de restricciones, aunque otras horas-fechas sean exclusivas o limitadas dentro del mismo rango de tiempo.
</p>';
$string['exclusivitylockedto'] = 'Usted no puede cambiar el modo del espacio al agendar. El límite actual del espacio destino se aplicará. Si el espacio es nuevo, se aplicará un límite por defecto de 1.';
$string['exclusivityoverload'] = 'El lugar tiene {$a} estudiantes citados, más de lo permitido por esta configuración.';
$string['explaingeneralconfig'] = 'Estas opciones solamente pueden configurarse al nivel de sitio y aplicarán para todos los agendadores de esta instalación Moodle.';
$string['exportinstructions'] = 'Más le conviene guardar el archivo de exportación generado en su disco duro antes de usarlo.';
$string['finalgrade'] = 'Calificación final';
$string['firstslotavailable'] = 'el primer período se abrirá en:';
$string['for'] = 'para';
$string['forbidgroup'] = 'Lugar de grupo - hacer click para cambiar';
$string['forcewhenoverlap'] = 'Forzar cuando se sobrepongan';
$string['forcewhenoverlap_help'] = '<h3>Forzar la creación de lugar cuando se traslapen lugares</h3>
<p>Esta configuración determina cuantos nuevos lugares se manejarán si se traslapan con otros lugares  ya existentes.</p>
<p>si se habilita, el lugar existente traslapado será eliminado y el nuevo lugar será creado.</p>
<p>Si se deshabilita, el lugar traslapado se conservará y <em>no</em> se creará un nuevo lugar.</p>';
$string['forcourses'] = 'Elegir estudiantes en cursos';
$string['friday'] = 'Viernes';
$string['generalconfig'] = 'Configuración general';
$string['grade'] = 'Calificación';
$string['gradingstrategy'] = 'Estrategia de calificación';
$string['gradingstrategy_help'] = 'En un agendador en donde los estudiantes pueden tener varias citas, seleccione la manera en la que se agragarán las calificaciones. El libro de calificaciones puede mostrar, tanto la <ul><li>calificación promedio o</li><li>la calificación máxima</li></ul> que el estudiante ha obtenido.';
$string['group'] = 'grupo';
$string['groupbreakdown'] = 'Por tamaño del grupo';
$string['groupscheduling'] = 'Habilitar reservación grupal';
$string['groupscheduling_desc'] = 'Permitir que se agenden grupos completos a la vez. (además de la opción Global, el modo de grupo de la actividad debe configurarse a "Grupos visibles" o "Grupos separados" para poder habilitar esta característica.)';
$string['groupsession'] = 'sesión grupal';
$string['groupsize'] = 'Tamaño del grupo';
$string['guestscantdoanything'] = 'Los invitados no pueden hacer nada aquí';
$string['howtoaddstudents'] = 'Para añadir estudiantes a un agendador de rango global (\'\'global scoped scheduler\'\') use la configuración de rol para el módulo .<br/>Usted también puede usar las definiciones de rol del módulo para definir a los asistentes entre sus estudiantes.';
$string['ignoreconflicts'] = 'Ignorar conflictos de reservación';
$string['ignoreconflicts_help'] = 'Si se activa esta casilla, entonces el lugar se moverá a la fecha y hora solicitada, aun cuando existan otros lugares en la misma hora. Esto puede provocar un encimamiento de reservaciones para varios profesores o estudiantes, y por esta razón debería de usarse con cautela.';
$string['incourse'] = 'en curso';
$string['introduction'] = 'Introducción';
$string['invitation'] = 'Invitación';
$string['invitationtext'] = 'Por favor, elija un período-de-tiempo para una cita en';
$string['isnonexclusive'] = 'No-exclusiva';
$string['lengthbreakdown'] = 'Por duración del lugar';
$string['limited'] = 'Limitada ({$a} restantes)';
$string['location'] = 'Lugar';
$string['location_help'] = 'Especifique el lugar reservado del encuentro.';
$string['markasseennow'] = 'Marcar como visto ahora';
$string['markseen'] = 'Después de haber tenido una cita con un estudiante, por favor, márquelo como "Visto" al elegir la casilla apropiada en la tabla superior.';
$string['maxgrade'] = 'Tomar la calificación máxima';
$string['maxstudentlistsize'] = 'Longitud máxima de la lista de estudiantes';
$string['maxstudentlistsize_desc'] = 'La longitud máxima de la lista de estudiantes que necesitan hacer una reservación, como se muestra en la vista del profesor para el agendador. Si hay más estudiantes que este número, no se mostrará ninguna lista.';
$string['maxstudentsperslot'] = 'Número máximo de estudiantes por lugar';
$string['maxstudentsperslot_desc'] = 'Los lugares de-grupo / lugares-no-exclusivos pueden tener como máximo este número de estudiantes. Tenga en cuenta que, adicionalmente, siempre puede elegirse la configuración de "ilimitada" para un lugar.';
$string['meangrade'] = 'Tomar la calificación promedio';
$string['meetingwith'] = 'Juntándose con su';
$string['meetingwithplural'] = 'Juntándose con su';
$string['mins'] = 'minutos';
$string['minutes'] = 'minutos';
$string['minutesperslot'] = 'minutos por lugar';
$string['missingstudents'] = '{$a} estudiantes todavía necesitan hacer una cita';
$string['missingstudentsmany'] = '{$a} estudiantes todavía necesitan hacer una cita. No se despliega la lista debido a su tamaño.';
$string['mode'] = 'Modo';
$string['modulename'] = 'Agendador';
$string['modulename_help'] = 'La actividad de agendador le ayuda para agendar citas (reservaciones) con sus estudiantes.

Los profesores especifican las horas-fechas para las reuniones, los estudiantes entonces eligen una de ellas en Moodle.

Los profesores en turno pueden grabar el resultado de la reunión - y opcionalmente una calificación - dentro del agendador.

Se soporta agendar grupos;  esto es, en cada hora-fecha se pueden acomodar a varios alumnos, y opcionalmente es posible agendar citas (reservaciones) para grupos completos al mismo tiempo.';
$string['modulenameplural'] = 'Agendadores';
$string['monday'] = 'Lunes';
$string['move'] = 'Cambiar';
$string['moveslot'] = 'Mover espacio';
$string['multiplestudents'] = '¿Permitir múltiples estudiantes por espacio?';
$string['myappointments'] = 'Mis citas';
$string['name'] = 'Nombre dle agendador';
$string['needteachers'] = 'No pueden añadirse lugares porque este curso no tiene profesores';
$string['negativerange'] = 'El rango es negativo. Esto no puede ser.';
$string['never'] = 'Nunca';
$string['newappointment'] = '{$a} : Nueva cita';
$string['noappointments'] = 'Sin citas';
$string['noexistingstudents'] = 'No hay estudiantes';
$string['nogroups'] = 'No hay grupos disponibles para agendar';
$string['noresults'] = 'Sin resultados.';
$string['noschedulers'] = 'No hay agendadores';
$string['noslots'] = 'No hay lugares a reservar disponibles';
$string['noslotsavailable'] = 'No se requiere cita, o todas las citas anunciadas están completas.';
$string['noslotsopennow'] = 'No hay períodos abiertos ahora mismo';
$string['nostudents'] = 'Sin estudiantes agendados';
$string['nostudenttobook'] = 'No hay estudiantes para reservar';
$string['note'] = 'Calificación';
$string['noteacherforslot'] = 'No hay maestro para el lugar';
$string['noteachershere'] = 'No hay maestro disponible';
$string['notes'] = 'Comentarios';
$string['notifications'] = 'Notificaciones';
$string['notifications_help'] = 'Cuando se habilita esta opción, los profesores y estudiantes recibirán notificaciones de cuando se aplican o cancelan reservaciones.';
$string['notselected'] = 'Usted aún no ha hecho una elección';
$string['now'] = 'Ahora';
$string['occurrences'] = 'Ocurrencias';
$string['on'] = 'en';
$string['oneappointmentonly'] = 'Los estudiantes solamente pueden registrar una cita';
$string['oneatatime'] = 'Los estudiantes solamente pueden registrar una cita a la vez';
$string['onedaybefore'] = '1 día antes de la fecha';
$string['oneslotadded'] = '1 lugar añadido';
$string['oneweekbefore'] = '1 semana antes de la fecha';
$string['onthemorningofappointment'] = 'En la ,mañana de la reservación';
$string['overall'] = 'En general';
$string['overlappings'] = 'Algunos otros lugares se sobreponen';
$string['pluginadministration'] = 'Adminsitración del agendador';
$string['pluginname'] = 'Agendador';
$string['registeredlbl'] = 'Estudiante agendado';
$string['reminder'] = 'Recordatorio';
$string['remindertext'] = 'Esto es solamente un recordatorio de que Usted no ha configurado todavía su reservación. Por favor, elija un espacio de tiempo tan pronto como le sea posible en :';
$string['remindtitle'] = '{$a}: Recordatorio de cita';
$string['remindwhere'] = 'Lugar de la cita:';
$string['remindwithwhom'] = 'Cita agendada con';
$string['resetappointments'] = 'Eliminar citas y calificaciones';
$string['resetslots'] = 'Eliminar lugares agendados';
$string['return'] = 'Regresar al curso';
$string['reuse'] = 'Re-utilizar este espacio';
$string['reuseguardtime'] = 'Re-utilizar tiempo de guarda';
$string['reuseguardtime_help'] = '<p>Este parámetro configura el tiempo de guarda para mantener espacios volátiles.</p>

<p>Cuando un espacio es declarado como volátil (no re-utilizable), será eliminado automáticamente cuando un estudiante camie su asignación de reservación, liberando completamente el espacio, o cuando un maestro revoque todas las citas en él. La eliminación tiene lugar cuando el espacio empieza muy cercanamente a la fecha actual.</p>

<p>El parámetro especifica el retraso, desde "ahora", debajo del cual un espacio liberado será eliminado y no estará disponible para más reservaciones.</p>';
$string['revoke'] = 'Revocar  la reservación';
$string['saturday'] = 'Sábado';
$string['save'] = 'Guardar';
$string['savechoice'] = 'Guardar mi elección';
$string['savecomment'] = 'Guardar el comentario';
$string['saveseen'] = 'Guardar vistas';
$string['schedule'] = 'Agenda';
$string['scheduleappointment'] = 'Agendar reservación para {$a}';
$string['schedulecancelled'] = '{$a} : Su cita cancelada o movida';
$string['schedulegroups'] = 'Agendar por grupo';
$string['scheduleinnew'] = 'Agendar en un lugar nuevo';
$string['scheduler'] = 'Agendador';
$string['scheduler:addinstance'] = 'Añadir un nuevo agendador';
$string['scheduler:appoint'] = 'Agendar';
$string['scheduler:attend'] = 'Asistencia estudiantes';
$string['scheduler:canscheduletootherteachers'] = 'Agendar citas para otros miembros del staff';
$string['scheduler:canseeotherteachersbooking'] = 'Ver y revisar las reservaciones de otros maestros';
$string['scheduler:disengage'] = 'Descartar todas las citas (estudiantes)';
$string['scheduler:manage'] = 'Gestionar sus lugares y citas';
$string['scheduler:manageallappointments'] = 'Gestionar todos los datos del reservador';
$string['scheduler:seeotherstudentsbooking'] = 'Ver reservaciones de otros estudiantes en el espacio';
$string['scheduler:seeotherstudentsresults'] = 'Ver resultados de otros espacios de estudiantes';
$string['schedulestudents'] = 'Agendar por estudiante';
$string['seen'] = 'Visto';
$string['setreused'] = 'Configurar reusable';
$string['setunreused'] = 'Configurar volátil';
$string['showemailplain'] = 'Mostrar direcciones Email en texto plano';
$string['showemailplain_desc'] = 'En la vista del profesor para el agendador, se muestran las direcciones de Email de los estudiantes que necesitan una cita en texto plano, adicionalmente a los enlaces de mailto: .';
$string['slot_is_just_in_use'] = '¡ Lo siento, la reservación ya ha sido elegida por otro estudiante t!<br>Por favor, inténtelo de nuevo.';
$string['slots'] = 'Lugares';
$string['slotsadded'] = '{$a} lugares han sido añadidos';
$string['slottype'] = 'Tipo de lug';
$string['slotupdated'] = 'lugar 1 espacio actualizado';
$string['slotwarning'] = '<strong>Advertencia: </strong>El mover este espacio hacia el horario seleccionado conflictúa con los espacios enlistados debajo. Elija "Ignorar conflictos de agenda" si desea mover el espacio a pesar de todo.';
$string['staffbreakdown'] = 'Por {$a}';
$string['staffmember'] = 'Miembro del staff';
$string['staffrolename'] = 'Nombre del rol del maestro';
$string['staffrolename_help'] = 'La etiqueta para el rol que atiende a los estudiantes. esto no necesariamente es un "maestro".';
$string['start'] = 'Inicio';
$string['startpast'] = 'Usted no puede iniciar un espacio de agenda en el pasado';
$string['starttime'] = 'Hora de inicio';
$string['statistics'] = 'Estadísticas';
$string['strdownloadcsvgrades'] = 'Exportación de calificaciones en CSV';
$string['strdownloadcsvslots'] = 'Exportación de espacios en CSV';
$string['strdownloadexcelsingle'] = 'Exportación de Excel como una hoja';
$string['strdownloadexcelteachers'] = 'Exportación Excel por {$a}';
$string['strdownloadodssingle'] = 'Exportación OpenDoc como una hoja';
$string['strdownloadodsteachers'] = 'Exportación OpenDoc por {$a}';
$string['student'] = 'Estudiante';
$string['studentbreakdown'] = 'Por estudiante';
$string['studentcomments'] = 'Notas del estudiante';
$string['studentdetails'] = 'Detalles del estudiante';
$string['studentmultiselect'] = 'Cada estudiante puede ser seleccionado solamente una vez en este lugar';
$string['studentnotes'] = 'Sus notas acerca de la reservación';
$string['students'] = 'Estudiantes';
$string['sunday'] = 'Domingo';
$string['teacher'] = 'Maestro';
$string['thursday'] = 'Jueves';
$string['tuesday'] = 'Martes';
$string['unattended'] = 'No asistido';
$string['unlimited'] = 'Ilimitado';
$string['unregisteredlbl'] = 'Estudiantes no agendados';
$string['updategrades'] = 'Actualizar calificaciones';
$string['updatesingleslot'] = '';
$string['updatingappointment'] = 'Actualizando una reservación';
$string['wednesday'] = 'Miércoles';
$string['welcomebackstudent'] = 'La línea oscura en la tabla inferior resalta sus horas elegidas de reservaciones. Usted puede cambiar a cualquier otro espacio disponible.';
$string['welcomenewstudent'] = 'La tabla debajo muestra todos los espacios disponibles para una cita. Haga su elección al seleccionar un botón de selección y no se olvide de elegir "Guarda mi elección" después. Si Usted necesita hacer un cambio posterior, puede volver a visitar esta página.';
$string['welcomenewteacher'] = 'Por favor, elija el botón inferior para añadir espacios de reservaciones para ver a todos sus estudiantes.';
$string['what'] = '¿ Qué ?';
$string['whathappened'] = '¿ Qué pasó ?';
$string['whatresulted'] = '¿ Qué resultó ?';
$string['when'] = '¿ Cuando ?';
$string['where'] = '¿ Donde ?';
$string['who'] = '¿ Con quién ?';
$string['whosthere'] = '¿ Quién está allì ?';
$string['xdaysbefore'] = '{$a} días antes del evento';
$string['xweeksbefore'] = '{$a} semanas antes del evento';
$string['yourappointmentnote'] = 'Comentarios sòlo para sus ojos';
$string['yourslotnotes'] = 'Comentarios sobre el encuentro';
