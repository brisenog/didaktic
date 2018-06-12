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
 * Strings for component 'repository_boxnet', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   repository_boxnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Clave API';
$string['apiv1migration_message_content'] = 'Como parte de la reciente actualización a Moodle 2.5.3, el plugin del repositorio Box.net ha sido deshabilitado. Para re-habilitarlo, Usted necesita re-configurarlo, tal como se describe en la documentación {$a->docsurl}.';
$string['apiv1migration_message_small'] = 'Este plugin ha sido deshabilitado, porque requiere configuración, tal como se describe en la documentación acerca de migración de Box APIv1.';
$string['apiv1migration_message_subject'] = 'Información importante respecto al plugin del repositorio Box';
$string['boxnet:view'] = 'Ver repositorio Box';
$string['callbackurl'] = 'URL para redireccionar';
$string['callbackurltext'] = '1. Visite <a href="http://www.box.net/developers/services">www.box.net/developers/services</a>  de nuevo.}
2. Asegúrese de configurar la URL redireccionada de este servicio box.net service a {$a}.';
$string['callbackwarning'] = '1. Obtenga una API de <a href="http://www.box.net/developers/services">www.box.net/developers/services</a> para este sitio Moodle.
2. Introduzcal la clave API de Box.net aquí, después elija \'Save\' (Guardar) y luego regrese a esta página. Verá Usted que Moodle ha generado una URL de redirección para Usted.
3. Edite sus detalles de Box.net en el sitio web de box.net de nuevo y configure la URL de redirección.';
$string['cannotcreatereference'] = 'No puede crearse una referencia, no hay permisos suficientes para compartir el archivo en Box.';
$string['clientid'] = 'ID del cliente';
$string['clientsecret'] = 'Secreto del cliente';
$string['configplugin'] = 'Configuración Box';
$string['filesourceinfo'] = 'Box ({$a->fullname}): {$a->filename}';
$string['information'] = 'Obtenga una clave API de <a href="http://www.box.net/developers/services">Box.net developer page</a> para su sitio Moodle.';
$string['informationapiv2'] = 'Obtenga un secreto y una ID de cliente de <a href="https://app.box.com/developers/services">Box.net developer page (página para desarrolladores de Box.net)</a> para su sitio Moodle';
$string['invalidpassword'] = 'Contraseña inválida';
$string['migrationadvised'] = 'Al parecer, Usted estaba usando Box con API versión 1, ¿ Corrió Usted la <a href="{$a}">herramienta para migración</a> para converir las referencias antiguas?';
$string['migrationinfo'] = '<p>Como parte de la migración a la nueva API proporcionada por Box, sus referencias hacia archivos tuvieron que migrarse. Desaforttunadamente, el sistema de referencia no es compatible con el API v2, por lo que tendremos que descargarlas y convertirlas en archivos reales.</p>
<p>Por favor, tenga presente que la migración puede <strong>tardar mucho, mucho tiempo</strong>, dependiendo de cuantas referencias son usadas, y que tan grandes son sus archivos.</p>
<p>Usted puede correr la herramienta para migración al elegir el botón inferior, o en forma alterna, al ejecutar el script por linea de comando : repository/boxnet/cli/migrationv1.php.</p>
<p>Encuentre más detalles <a href="{$a->docsurl}">aquí</a>.</p>';
$string['migrationtool'] = 'Herramienta para migración de Box APIv1';
$string['nullfilelist'] = 'No hay archivos en este repositorio';
$string['password'] = 'Contraseña';
$string['pluginname'] = 'Box';
$string['pluginname_help'] = 'Repositorio en Box';
$string['runthemigrationnow'] = 'Corra ahora la herramienta para migración';
$string['saved'] = 'Datos Box guardados';
$string['shareurl'] = 'Compartir URL';
$string['username'] = 'Nombre_de_usuario para Box';
$string['warninghttps'] = 'Box requiere que su sitio esté usando HTTPS para que pueda funcionar el repositorio.';
