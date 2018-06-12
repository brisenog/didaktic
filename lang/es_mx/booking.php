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
 * Strings for component 'booking', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   booking
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Editar categorías';
$string['addeditbooking'] = 'Editar reservaciones';
$string['additionalfields'] = 'Campos adicionales';
$string['addmorebookings'] = 'Añadir más reservaciones';
$string['addnewbookingoption'] = 'Añadir una nueva opción de reservación';
$string['addnewcategory'] = 'Añadir nueva categoría';
$string['addteachers'] = 'Añadir profesores';
$string['addtocalendar'] = 'Añadir al calendario';
$string['addtogroup'] = 'Inscribir automáticamente usuarios en grupo';
$string['addtogroup_help'] = 'Inscribir usuarios automáticamente al grupo - el grupo será creado automáticamente son el nombre de "Bookin name - Option name"';
$string['agreetobookingpolicy'] = 'He leído y estoy de acuerdo con las siguientes políticas para reservaciones';
$string['allbookingoptions'] = 'Descargar usuarios para todas las opciones de reservaciones';
$string['allmailssend'] = '¡ Se han enviado exitosamente todos los Emails a usuarios !';
$string['allowdelete'] = 'Permitirle a los usuarios cancelar sus reservaciones ellos mismos';
$string['allowupdate'] = 'Permitir que se actualicen reservaciones';
$string['answered'] = 'Contestado';
$string['associatedcourse'] = 'Curso asociado';
$string['attachedfiles'] = 'Archivos anexos';
$string['attachical'] = 'Añadir eventos de iCal';
$string['attachicaldesc'] = 'Las notificaciones por Email incluirán un evento anexo iCal, si esto es habilitado';
$string['autoenrol'] = 'Inscribir usuarios automáticamente';
$string['autoenrol_help'] = 'Si se selecciona, los usuarios serán inscritos dentro del curso relevante tan pronto como hagan la reservación y serán des-inscritos del curso tan pronto como se cancele la reservación.';
$string['availability'] = 'Todavía disponible';
$string['available'] = 'Lugares disponibles';
$string['booked'] = 'Reservado';
$string['bookedpast'] = 'Reservado (curso terminado)';
$string['bookedtext'] = 'Confirmación de reservación';
$string['bookedtext_help'] = 'Deje vacío esto para usar el texto por defecto del sitio. Usted puede usar cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
</ul>';
$string['bookedusers'] = 'Usuarios que reservaron';
$string['booking'] = 'Reservaciones';
$string['booking:addinstance'] = 'Añadir nueva reservación';
$string['bookingattachment'] = 'Anexo';
$string['bookingcategory'] = 'Categoría';
$string['booking:choose'] = 'Reservar';
$string['bookingclose'] = 'Hasta';
$string['bookingdeleted'] = 'Su reservación fue cancelada';
$string['booking:deleteresponses'] = 'Eliminar respuestas';
$string['booking:downloadresponses'] = 'Descargar respuestas';
$string['bookingduration'] = 'Duración';
$string['bookingfull'] = 'No hay lugares disponibles';
$string['bookingmanagererror'] = 'El nombre_de_usuario escrito no es válido. Puede ser que no exista o que haya más de un usuario con este nombre_de_usuario (por ejemplo, si Usted tiene habilitadas autenticaciones por Mnet y locales)';
$string['bookingmeanwhilefull'] = 'Mientras tanto, alguien tomó el último lugar disponible';
$string['bookingname'] = 'Nombre de reservación';
$string['bookingopen'] = 'Abierto';
$string['bookingorganizatorname'] = 'Nombre del organizador';
$string['bookingpoints'] = 'Puntos del curso';
$string['bookingpolicy'] = 'Política de reservaciones';
$string['bookingpollurl'] = 'URL de encuesta';
$string['booking:readresponses'] = 'Leer respuestas';
$string['bookingsaved'] = 'Su reservación fur guardada exitosamente. Usted puede ahora proceder a reservar otros cursos.';
$string['booking:sendpollurl'] = 'Enviar URL de encuesta';
$string['booking:subscribeusers'] = 'Hacer reservaciones para otros usuarios';
$string['bookingtags'] = 'Marcas';
$string['bookingtext'] = 'Texto de reservación';
$string['booking:updatebooking'] = 'Gestionar opciones de reservación';
$string['booknow'] = 'Reservar ahora';
$string['bookotherusers'] = 'Reservar para otros usuarios';
$string['cancelbooking'] = 'Cancelar reservación';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categoryname'] = 'Nombre de categoría';
$string['choosecourse'] = 'Elija un curso';
$string['closed'] = 'Reservaciones cerradas';
$string['confirmationmessage'] = 'Su reservación ha sido registrada. Status: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Para ver todos sus cursos reservados, elija la liga siguiente: {$a->link}';
$string['confirmationmessagesettings'] = 'Configuraciones de correo de confirmación';
$string['confirmationmessagewaitinglist'] = 'Hola {$a->participant},

Su solicitud de reservación ha sido registrada

Estatus de reservación: {$a->status}
Participante: {$a->participant}
Curso: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Para ver todos sus cursos reservados, elija el enlace siguiente: {$a->bookinglink}';
$string['confirmationsubject'] = 'Confirmación de reservación para {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'Nueva reservación para {$a->title} por {$a->participant}';
$string['confirmationsubjectwaitinglist'] = 'Estatus de reservación para {$a->title}';
$string['confirmationsubjectwaitinglistmanager'] = 'Estatus de reservación para {$a->title}';
$string['confirmbookingoffollowing'] = 'Por favor confirme la reservación para el siguiente curso';
$string['confirmdeletebookingoption'] = '¿Realmente desea eliminar esta opción de reservación?';
$string['coursedate'] = 'Fecha';
$string['courseendtime'] = 'Hora de fin del curso';
$string['coursestarttime'] = 'Hora de principio del curso';
$string['createdby'] = 'Módulo de reservaciones hecho por edulabs.org';
$string['days'] = '{$a} días';
$string['daystonotify'] = '¿Cuantos días antes del evento deberá notificarse a los participantes?';
$string['defaultbookingoption'] = 'Opciones por defecto para reservaciones';
$string['deletebooking'] = '¿Realmente desea des-inscribirse del curso siguiente <br /><br /> <b>{$a} </b>';
$string['deletebookingoption'] = 'Eliminar esta opción de reservación';
$string['deletecategory'] = 'Eliminar';
$string['deletedbookingmessage'] = 'Reservación eliminada para el curso siguiente: {$a->title}

Usuario: {$a->participant}
Título: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Curso: {$a->courselink}
Enlace a reservación: {$a->bookinglink}';
$string['deletedbookingsubject'] = 'Reservación eliminada: {$a->title} por {$a->participant}';
$string['deletedbookingusermessage'] = 'Hola {$a->participant},
Su reservación para {$a->title} ({$a->startdate} {$a->starttime}) ha sido cancelada.';
$string['deletedbookingusersubject'] = 'Reservación para {$a->title} cancelada';
$string['deletedtext'] = 'Mensaje de reservación cancelada';
$string['deletedtext_help'] = 'Deje esto vacío para usar el texto del sitio por defecto. Usted puede usar cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
</ul>';
$string['deletesubcategory'] = '¡Por favor, primeramente elimine todas las sub-categorías de esta categoría!';
$string['deleteuserfrombooking'] = '¿Realmente desea eliminar los usuarios de la reservación?';
$string['donotselectcourse'] = 'No seleccionó curso';
$string['download'] = 'Descargar';
$string['downloadallresponses'] = 'Descargar todas las respuestas para todas las opciones de reservaciones';
$string['downloadusersforthisoptionods'] = 'Descargar usuarios como archivo .ODS';
$string['downloadusersforthisoptionxls'] = 'Descargar usuarios como archivo .XLS';
$string['editcategory'] = 'Editar';
$string['endtimenotset'] = 'Fecha final no configurada';
$string['entervalidurl'] = '¡Por favor, escriba una URL válida !';
$string['error:failedtosendconfirmation'] = 'El usuario siguiente no recibió un correo de confirmación de Reservación. Status: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Liga: {$a->link}';
$string['eventduration'] = 'Duración del evento';
$string['eventpoints'] = 'Puntos';
$string['existingsubscribers'] = 'Suscriptores existentes';
$string['expired'] = 'Lo sentimos, esta actividad se cerró el {$a} y ya no está disponible';
$string['fillinatleastoneoption'] = 'Usted necesita proporcionar al menos dos posibles respuestas.';
$string['forcourse'] = 'para el curso';
$string['full'] = 'LLeno';
$string['groupname'] = 'Nombre del grupo';
$string['havetologin'] = 'Usted tiene que entrar antes de poder enviar su reservación';
$string['hours'] = '{$a} horas';
$string['limit'] = 'Límite';
$string['limitanswers'] = 'Limitar el número de participantes';
$string['mailconfirmationsent'] = 'Pronto recibirá un correo de confirmación';
$string['managebooking'] = 'Gestionar';
$string['maxoverbooking'] = 'Número máximo de lugares en lista de espera';
$string['maxparticipantsnumber'] = 'Número máximo de participantes';
$string['maxperuser'] = 'Reservaciones máximas por usuario';
$string['maxperuser_help'] = 'El número máximo de reservaciones que puede hacer un usuario individual el mismo tiempo. Después de que haya pasado el tiempo de terminación de un evento, ya no se contará este límite.';
$string['maxperuserwarning'] = 'Usted tiene actualmente {$a->count}/{$a->limit} reservaciones máximas';
$string['messagesend'] = 'Su mensaje fue enviado exitosamente.';
$string['messagesubject'] = 'Asunto';
$string['messagetext'] = 'Mensaje';
$string['minutes'] = '{$a} minutos';
$string['modulename'] = 'Reservación';
$string['modulenameplural'] = 'Reservaciones';
$string['mustchooseone'] = 'Usted debe elegir una opción antes de guardar. Nada se guardó.';
$string['mustfilloutuserinfobeforebooking'] = 'Antes de proceder al formato para reservación, por favor llene algunos datos personales';
$string['nobookingselected'] = 'No se seleccionó opción de reservación';
$string['noguestchoose'] = 'Lo sentimos, los invitados no pueden introducir datos';
$string['noresultsviewable'] = 'Los resultados no están visibles actualmente.';
$string['norighttobook'] = 'No es posible reservar para su rol de usuario. Por favor contacte al administrador del sitio para que le proporcione los permisos apropiados o entre al sitio.';
$string['nosubscribers'] = '¡No hay profesores asignados!';
$string['notbooked'] = 'Aún no reservado';
$string['notificationsubject'] = 'Curso próximo futuro...';
$string['notopenyet'] = 'Lo sentimos, esta actividad no estará disponible hasta después de {$a}';
$string['onwaitinglist'] = 'Usted está en la lista de espera';
$string['organizatorname'] = 'Nombre del organizador';
$string['placesavailable'] = 'Lugares disponibles';
$string['pluginadministration'] = 'Administración de reservaciones';
$string['pluginname'] = 'Reservación';
$string['pollurl'] = 'URL de encuesta';
$string['pollurltext'] = 'Enviar URL de encuesta';
$string['pollurltext_help'] = 'Deje vacío esto para usar el texto por defecto del sitio. Usted puede usar cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
</ul>';
$string['pollurltextmessage'] = 'Por favor, conteste la encuesta

URL de la encuesta {pollurl}';
$string['pollurltextsubject'] = 'Por favor, conteste la encuesta';
$string['potentialsubscribers'] = 'Suscriptores potenciales';
$string['removeresponses'] = 'Quitar todas las respuestas';
$string['responses'] = 'Respuestas';
$string['responsesto'] = 'Respuestas a {$a}';
$string['rootcategory'] = 'Raíz';
$string['searchtag'] = 'Buscar marcas';
$string['select'] = 'Selección';
$string['selectcategory'] = 'Seleccionar categoría';
$string['sendconfirmmail'] = 'Mandar correo de confirmación';
$string['sendconfirmmailtobookingmanger'] = 'Mandar correo de confirmación al mánager de reservaciones';
$string['sendcustommessage'] = 'Mandar mensaje personalizado';
$string['sendmailtobooker'] = 'Página para Reservar para otros usuarios: Enviar Email al usuario que reserva en vez de mandárselos a los usuarios que son reservados.';
$string['sendmailtobooker_help'] = 'Active esta opción para mandar Emails de confirmación de reservación al usuario que reserva para otros usuarios en lugar de usuarios que han sido añadidos a una opción de reservación.
Esto solamente es relevante para reservaciones hechas en la página para "reservar para otros usuarios".';
$string['showallbookings'] = 'Mostrar vista general de reservaciones para todas las reservaciones';
$string['showmybookings'] = 'Mostrar solamente mis reservaciones';
$string['spaceleft'] = 'espacio disponible';
$string['spacesleft'] = 'espacios disponibles';
$string['startendtimeknown'] = 'Hora de principio y fin del curso son conocidas';
$string['starttimenotset'] = 'No se configuró fecha de inicio';
$string['statuschangebookedmessage'] = 'Hola {$a->name}, Su status de reservación ha cambiado. Usted está ahora registrado en {$a->bookingname}. Status de reservación: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Para ver todos sus cursos reservados elija la liga siguiente: {$a->link}';
$string['statuschangebookedsubject'] = 'Cambió el estatus de reservación para {$a->title}';
$string['statuschangetext'] = 'Mensaje de cambio de estatus';
$string['statuschangetext_help'] = 'Deje esto vacío para usar el texto por defecto del sitio. Usted puede usar cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
</ul>';
$string['submitandaddnew'] = 'Guardar y añadir nuevo';
$string['subscribersto'] = 'Profesores para \'{$a}';
$string['subscribetocourse'] = 'Inscribir usuarios al curso';
$string['subscribeuser'] = '¿Realmente quiere inscribir a los usuarios en el curso siguiente?';
$string['sucesfulldeleted'] = '¡La categoría fue eliminada exitosamente!';
$string['taken'] = 'Tomado';
$string['teachers'] = 'Profesores:';
$string['timerestrict'] = 'Restringir respuestas a este lapso de tiempo';
$string['unlimited'] = 'Ilimitado';
$string['updatebooking'] = 'Editar esta opción de reservación';
$string['usedinbooking'] = '¡Usted no puede eliminar esta categoría, porque Usted está usándola al reservar!';
$string['userdownload'] = 'Descargar usuarios';
$string['usernameofbookingmanager'] = 'Nombre_de_usuario del mánager de reservaciones';
$string['usernameofbookingmanager_help'] = 'Nombre_de_usuario del usuario que se mostrará en el campo "De" de las notificaciones de confirmación.
Si está habilitada la opción para "Enviar Email de confirmación al Mánager de reservaciones", éste será el usuario quien recibe  una copia de las notificaciones de confirmación.';
$string['viewallresponses'] = 'Gestionar {$a} respuestas';
$string['waitinglist'] = 'En lista de espera';
$string['waitinglisttaken'] = 'En la lista de espera';
$string['waitinglistusers'] = 'Usuarios en lista de espera';
$string['waitingplacesavailable'] = 'Lugares disponibles en lista de espera';
$string['waitingtext'] = 'Confirmación de lista de espera';
$string['waitingtext_help'] = 'Deje esto vacío para usar el texto por defecto del sitio. Usted puede usar cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
</ul>';
$string['waitspaceavailable'] = 'Lugares en lista de espera disponibles';
$string['withselected'] = 'Con usuarios seleccionados:';
$string['yourselection'] = 'Su selección';
