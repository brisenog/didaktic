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
 * Strings for component 'enrol_pagseguro', language 'es_mx', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_pagseguro
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['businessemail'] = 'Email de negocios de PagSeguro';
$string['businessemail_desc'] = 'La dirección Email de su cuenta de negocios de PagSeguro';
$string['businesstoken'] = 'Token de negocios de PagSeguro';
$string['businesstoken_desc'] = 'El token de su cuenta de negocios de PagSeguro';
$string['cost'] = 'Costo de inscripción';
$string['costerror'] = 'El costo de inscripción no es numérico';
$string['costorkey'] = 'Por favor elija alguno de los siguientes métodos de inscripción.';
$string['currency'] = 'Divisa';
$string['currency_desc'] = 'Divisa brasileña: Real de Brasil';
$string['defaultrole'] = 'Asignaciones de rol por defecto';
$string['defaultrole_desc'] = 'Seleccionar el rol que se debe asignar a los usuarios durante las inscripciones de PagSeguro';
$string['enrolenddate'] = 'Fecha de fin';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios solamente pueden ser inscritos hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha de terminacion de inscripción no puede ser antes de la decha de inicio';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_desc'] = 'Lapso de tiempo por defecto durante el cual es válida su inscripción (en segundos). Si se configura a cero, la duración de la inscripción será ilimitada por defecto.';
$string['enrolperiod_help'] = 'Período de tiempo durante el cual la inscripción es válida, comenzando desde el momento en que el usuario se inscribe. Si está deshabilitado, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios solamente podrán ser inscritos a partir de esta fecha en adelante.';
$string['mailadmins'] = 'Notificar administradores';
$string['mailstudents'] = 'Notificar estudiantes';
$string['mailteachers'] = 'Notificar profesores';
$string['messageprovider:pagseguro_enrolment'] = 'Mensajes de inscripción PagSeguro';
$string['nocost'] = '¡No hay costo asociado con inscribirse en este curso!';
$string['pagseguroaccepted'] = 'Pagos de PagSeguro aceptados';
$string['pagseguro:config'] = 'Configurar instancias de inscripción PagSeguro';
$string['pagseguro:manage'] = 'Gestionar usuarios inscritos';
$string['pagseguro:unenrol'] = 'Des-inscribir usuarios del curso';
$string['pagseguro:unenrolself'] = 'Des-inscribirse a sí mismo del curso';
$string['pluginname'] = 'PagSeguro';
$string['pluginname_desc'] = 'El módulo PagSeguro le permite configurar cursos pagados. Si el costo de cualquier curso es cero, entonces no se les pide a los estudiantes que paguen la entrada. Hay un costo para todo el sitio que se establece aquí como predeterminado para todo el sitio y luego una configuración de curso que puede establecer costo para cada curso individualmente. El costo del curso anula el costo del sitio.';
$string['sendpaymentbutton'] = 'Mandar pago via PagSeguro';
$string['status'] = 'Permitir inscripciones PagSeguro';
$string['status_desc'] = 'Permita que los usuarios usen PagSeguro para inscribirse en un curso por defecto.';
$string['unenrolselfconfirm'] = '¿Realmente desea des-inscribirse Usted mismo del curso  "{$a}"?';