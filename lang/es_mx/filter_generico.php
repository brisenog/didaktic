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
 * Strings for component 'filter_generico', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   filter_generico
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bundle'] = 'Paquete';
$string['commonpageheading'] = 'Configuraciones comunes';
$string['dataset'] = 'Dataset (conjunto de datos)';
$string['dataset_desc'] = 'Generico le permite a Usted sacar un conjunto de datos (dataset) de la Base de Datos para usarlo en su plantilla. Esta es una carcterística avanzada. Escriba aquí la porción sql de una llamada $DB->get_records_sql';
$string['datasetvars'] = 'Variables del conjunto de datos (dataset)';
$string['datasetvars_desc'] = 'Ponga una lista de variables separadas por comas que constituye las vars para el SQL. Usted puede y probablemente deseará usar variables aquí.';
$string['filterdescription'] = 'Convertir cadenas filtradas en plantillas unidas con datos';
$string['filtername'] = 'Generico';
$string['jqueryurl'] = 'URL de JQuery';
$string['jqueryurl_desc'] = 'El URL que usará  Generico si añade JQuery a la página del host. Si su tema previamente ya usaba  JQuery (como por ejemplo, el tema essential) , entonces Usted probablemente pueda dejar  jquery no-revisado (no-activado) en su plantilla. Esta configuración por defecto tiene la versión alojada CDN hosted. Si su sitio no tiene acceso a Internet Usted probablemente necesitará apuntar ésto hacia una localización dentro de su servidor Moodle. Cualquier cosa que haga, NO comience con http: ni con https:. Comience la URL con //';
$string['pluginname'] = 'Generico';
$string['presets'] = 'Auto-rellenar plantilla con una Preconfiguración';
$string['presets_desc'] = 'Genérico viene con algunas preconfiguraciones por defecto que Usted puede usar de inmediato, o para ayudarle con sus propias plantillas. Elija una de estas aquí, o simplemente cree su propia plantilla desde cero.';
$string['template'] = 'El cuerpo de la plantilla  {$a}';
$string['templatecount'] = 'Número de plantillas';
$string['templatecount_desc'] = 'El Número de plantillas que Usted puede tener. El valor por defecto son 20.';
$string['templatedefaults'] = 'Los valores por defecto de la variable (plantilla {$a})';
$string['templatedefaults_desc'] = 'Define los valores por defecto en conjuntos delimitados por coma de parejas de nombre=valor (\'\'name=value\'\'). por ejemplo: ancho=800,alto=900,sentimiento=alegría';
$string['template_desc'] = 'Ponga aquí la plantilla, defina variables al rodearlas con caracteres @@ en ambos extremos, por ejemplio: @@variable@@';
$string['templateend'] = 'Marcas de fin (End tags) (plantilla {$a})';
$string['templateend_desc'] = 'Si su plantilla incluye contenido del usuario; por ejemplo, una caja con información, ponga las marcas de cierre aquí. El usuario escribirá algo parecido a  {GENERICO:mytag_end} para cerrar el filtro.';
$string['templateheading'] = 'Configuraciones para la plantilla de Generico  {$a}';
$string['templateheadingcss'] = 'Configuraciones CSS/Estilo';
$string['templateheadingjs'] = 'Configuraciones JavaScript';
$string['templateinstructions'] = 'Instrucciones (plantilla {$a})';
$string['templateinstructions_desc'] = 'Cualquier instrucción que se incluya aquí se mostrará en el formato de Atto para Generico para que se muestre esta plantilla. Hágalo corto o se verá mal.';
$string['templatekey'] = 'La clave que identifica a la plantilla  {$a}';
$string['templatekey_desc'] = 'La clave debería de ser una palabra y contener solamente números y letras, signo de subrayado. guión y punto.';
$string['templatepageheading'] = 'Plantilla: {$a}';
$string['templaterequire_amd'] = 'Cargar mediante AMD';
$string['templaterequire_amd_desc'] = 'AMD es un mecanismo para cargar JavaScript. Si Usted sube o enlaza bilbiotecas (librerías) JavaScript en su plantilla, Usted podría necesitar desactivar ésto. Solamente aplica para Moodle 2.9 o superior.';
$string['templaterequire_css'] = 'Requiree CSS (plantilla{$a})';
$string['templaterequire_css_desc'] = 'Un enlace (solamente 1) hacia un archivo CSS externo que necesite esta plantilla, opcional.';
$string['templaterequire_jquery'] = 'Requiere JQuery (plantilla{$a})';
$string['templaterequire_jquery_desc'] = 'Lo mejor es NO activar ésto. Muchas plantillas que no sean AMD requieren JQuery. El seleccionar/activar aquí cargará JQuery, pero no muy bien. Es posible que su tema ya haya  cargado JQuery. Si no fuera así, añada ésta cadena de caracteres a Administración del sitio -> Apariencia .> HTML adicional  (dentro de HEAD):<br/> <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>';
$string['templaterequire_js'] = 'Requiere JS (plantilla{$a})';
$string['templaterequire_js_desc'] = 'Un enlace (solamente 1) hacia un archivo JS externo que necesite esta plantilla, opcional.';
$string['templatescript'] = 'JS Personalizado (plantilla{$a})';
$string['templatescript_desc'] = 'Si su plantilla necesita correr JavaScript personalizado, escríbalo aquí. Se ejecutará una vez que todos los elementos se hayan cargado en la página.';
$string['templatestyle'] = 'CSS Personalizado (plantilla{$a})';
$string['templatestyle_desc'] = 'Escriba aquí cualquier CSS personalizado que use su plantilla. Las variables de la plantilla no funcionarán aquí. Simple y llanamente CSS simple y llano.';
$string['uploadcss'] = 'Subir CSS  (plantilla{$a})';
$string['uploadcss_desc'] = 'Usted puede subir un archivo CSS que será cargado para su plantilla. Solamente uno.';
$string['uploadjs'] = 'Subir JS (plantilla {$a})';
$string['uploadjs_desc'] = 'Usted puede subir un archivo de librería JS que se cargará para su plantilla. Solamente uno.';
