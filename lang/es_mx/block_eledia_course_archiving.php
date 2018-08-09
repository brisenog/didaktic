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
 * Strings for component 'block_eledia_course_archiving', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   block_eledia_course_archiving
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archive'] = 'Empezar a archivar';
$string['configure_description'] = 'Aquí puede Usted configurar el proceso de archivación. Todos los cursos que estén localizados directamente en las categorías de orígen serán revisados, comparando contra su fecha de inicio del curso. Si la fecha está dentro del rango desde ahora y los días especificados hacia el pasado, el curso será archivado.
Esto significa que el curso se hará invisible y se moverá a la categoría de archivo configurado y todos los usuarios alumnos serán des-incritos (dados de baja) .
En un segundo paso, todos los cursos en la categoría de archivo son revisados  contra la fecha de inicio del curso.
Si son más días que los días elegidos hacia el pasado, el curso será eliminado.<br /><br />
El proceso puede iniciarse mediante un formato que está ligado dentro del bloque. El bloque solamente puede añadirse a la Página principal.';
$string['confirm_archiving'] = 'Los cursos siguientes serán archivados:<br />
<br />
{$a->archived}<br />
<br />
Los cursos siguientes serán eliminados:<br />
<br />
{$a->deleted}';
$string['confirm_header'] = 'Confirmar archivar';
$string['days'] = 'Número de días a archivar';
$string['eledia_course_archiving:addinstance'] = 'añadir bloque para archivar curso';
$string['eledia_course_archiving:use'] = 'usar bloque para archivar curso';
$string['notice'] = 'Los cursos siguientes fueron archivados:<br />
<br />
{$a->archived}<br />
<br />
Los cursos siguientes fueron eliminados:<br />
<br />
{$a->deleted}';
$string['pluginname'] = 'Archivador de Curso';
$string['remove_error'] = '- Errores al remover';
$string['remove_success'] = '-- Remoción exitosa';
$string['sourcecat'] = 'Categorías a archivar';
$string['targetcat'] = 'Archivar categoría';
$string['title'] = 'Archivador de Curso';
