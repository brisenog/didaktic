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
 * Strings for component 'block_use_stats', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   block_use_stats
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockname'] = 'Estadísticas de Uso';
$string['configcapturemodules'] = 'Módulos considerados para el análisis detallado';
$string['configcapturemodules_desc'] = 'Módulos que son considerados en el análisis detallados';
$string['configcustomtagselect'] = 'Seleccionar para marca personalizada';
$string['configcustomtagselect_desc'] = 'Esta consulta necesita regresar un resultado único por fila logueada, lo que alimentará a la columna customtag {$a}.';
$string['configenablecompilecube'] = 'Habilitar compilación cúbica';
$string['configenablecompilecube_desc'] = 'Cuando se habilita, se calculan dimensiones adicionales usando selecciones definidas';
$string['configenablecompilelogs'] = 'Habilitar compilación gaps (huecos)';
$string['configenablecompilelogs_desc'] = 'Cuando se habilita, usa las bitácoras de compilar estadísticas y huecos en cron';
$string['configfromwhen'] = 'Período de compilación (días, hasta hoy)';
$string['configfromwhen_desc'] = 'Período de compilación (en días hasta hoy)';
$string['configignoremodules'] = 'Ignorar tiempos de estos módulos';
$string['configignoremodules_desc'] = 'Ignorar horas de estos módulos';
$string['configlastcompiled'] = 'Fecha de registro de últimas bitácoras compiladas';
$string['configlastcompiled_desc'] = 'Al cambiar esta fecha de seguimiento, el cron recalculará todas las bitácoras a partir de la fecha siguiente';
$string['configlastpingcredit'] = 'Este lapso de tiempo (en minutos) será añadido sistemáticamente a la bitácora del total de tiempo registrado cada vez que se adivine que hubo un cierre o descontinuidad de sesión.';
$string['configlastpingcredit_desc'] = 'Esta cantidad de tiempo (en minutos) será añadida sistemáticamente al contador de tiempo registrado en bitácora para cada vez que se cierre una sesión o se adivine discontinuidad';
$string['configstudentscanuse_desc'] = 'Los estudiantes pueden (por ellos mismos) ver el bloque';
$string['configstudentscanuseglobal_desc'] = 'Permitirles a los estudiantes ver el bloque de estadísticas de uso en espacios globales (Mi Moodle, fuera de curso, por ellos mismos)';
$string['configthreshold'] = 'Umbral';
$string['configthreshold_desc'] = 'Umbral de continuidad de actividad (minutos). Por arriba de este lapso de tiempo transcurrido entre dos anotaciones sucesivas en la bitácora, el usuario es considerado como desconectado. El tiempo arbitrario de "Crédito del Último Ping" será añadido a este conteo del tiempo.';
$string['credittime'] = 'Tiempo crédito';
$string['dimensionitem'] = 'Clases observables';
$string['errornorecords'] = 'No hay información de seguimiento';
$string['errornotinitialized'] = 'El módulo no está inicializado. Contacte al administrador.';
$string['eventscount'] = 'Visitas';
$string['from'] = 'Desde';
$string['ignored'] = 'Módulo/Actividad ignorada en seguimiento';
$string['lastcompiled'] = 'Último registro compilado de bitácora';
$string['modulename'] = 'Seguimiento de actividades';
$string['noavailablelogs'] = 'Sin bitácoras disponibles';
$string['onthisMoodlefrom'] = 'en este sitio Moodle desde';
$string['pluginname'] = 'Estadísticas de Uso';
$string['showdetails'] = 'Mostrar detalles';
$string['timeelapsed'] = 'Tiempo transcurrido';
$string['use_stats:addinstance'] = 'Puede añadirse una instancia';
$string['use_stats_description'] = 'Al publicar este servicio, Usted permite que servidores remotos pidan lectura de estadísticas sobre usuarios locales.<br/>Al suscribirse al servicio, Usted permite que su servidor local busque en un servidor remoto acerca de estadísticas de sus miembros.<br/>';
$string['use_stats:myaddinstance'] = 'Puede añadirse una instancia a Mi Página';
$string['use_stats_name'] = 'Acceso remoto a estadísticas';
$string['use_stats_rpc_service'] = 'Acceso remoto a estadísticas';
$string['use_stats_rpc_service_name'] = 'Acceso remoto a estadísticas';
$string['use_stats:seecoursedetails'] = 'Puede ver detalle de todos los usuarios desde su curso';
$string['use_stats:seegroupdetails'] = 'Puede ver detalle de todos los usuarios desde sus grupos';
$string['use_stats:seeowndetails'] = 'Puede ver su detalle propio';
$string['use_stats:seesitedetails'] = 'Puede ver detalles de todos los usuarios';
$string['use_stats:view'] = 'Puede ver estadísticas';
$string['youspent'] = 'Usted ya gastó';
