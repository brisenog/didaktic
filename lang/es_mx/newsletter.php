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
 * Strings for component 'newsletter', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   newsletter
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_already_confirmed'] = 'Su cuenta ya ha sido habilitada. Para seguir al boletín, elija {$a->newsletterlink}.';
$string['account_confirmed'] = 'Bienvenido a {$a->sitename}, {$a->fullname}!
Su cuenta {$a->username} ha sido habilitada.
Para editar detalles de su cuenta elija {$a->editlink}.
Para continuar al boletín, elija {$a->newsletterlink}.';
$string['allow_guest_user_subscriptions_desc'] = 'Habilitar que los usuarios invitados puedan suscribirse al boletín en este sitio. Esto necesitará que ellos mismos se creen sus cuentas.';
$string['allow_guest_user_subscriptions_label'] = 'Permitir suscripción de usuario invitado';
$string['already_published'] = 'Este ejemplar ha sido publicado';
$string['attachments'] = 'Anexos';
$string['attachments_help'] = 'Suba archivos que quiera enviar como anexos con este ejemplar.';
$string['config_activation_timeout_desc'] = 'Seleccione para cuantos días será válido el enlace de activación enviado por Email.';
$string['config_activation_timeout_label'] = 'Tiempo de caducidad de enlaces para activación';
$string['config_debug_desc'] = 'Elija esta caja para habilitar la salida de depuración para el trabajo cron del boletín.';
$string['config_debug_label'] = 'Modo depuración CRON';
$string['config_send_notifications_desc'] = 'Elija esta caja para habilitar notificaciones relacionadas con la suscripción a los suscriptores.';
$string['config_send_notifications_label'] = 'Enviar notificaciones';
$string['create_new_issue'] = 'Crear nuevo ejemplar';
$string['default_stylesheet'] = 'Hoja de estilo por defecto';
$string['delete_all_subscriptions'] = 'Eliminar todas las suscripciones';
$string['delete_issue'] = 'Eliminar este ejemplar';
$string['delete_issue_question'] = '¿Esta Usted seguro de querer eliminar este ejemplar?';
$string['delete_subscription_question'] = '¿Esta Usted seguro de querer eliminar esta suscripción?';
$string['edit_issue'] = 'Editar este ejemplar';
$string['edit_issue_title'] = 'Editar ejemplar del boletín';
$string['edit_subscription_title'] = 'Editar suscripción';
$string['entries_per_page'] = 'Entradas por página';
$string['header_actions'] = 'Acciones';
$string['header_content'] = 'Contenido del ejemplar';
$string['header_email'] = 'E-mail';
$string['header_health'] = 'Status';
$string['header_name'] = 'Nombre';
$string['header_publish'] = 'Opciones de publicación';
$string['health_0'] = 'Activo';
$string['health_1'] = 'Problemático';
$string['health_2'] = 'Lista-negra';
$string['health_4'] = 'Sin suscripción';
$string['issue_htmlcontent'] = 'Contenido HTML';
$string['issue_stylesheet'] = 'Archivo de hoja de estilo para contenido HTML';
$string['issue_title'] = 'Título del ejemplar';
$string['issue_title_help'] = 'Escriba el título de este ejemplar. Obligatorio.';
$string['manage_subscriptions'] = 'Gestionar suscripciones';
$string['mode_group_by_month'] = 'Agrupar ejemplares por mes';
$string['mode_group_by_week'] = 'Agrupar ejemplares por semana';
$string['mode_group_by_year'] = 'Agrupar ejemplares por año';
$string['modulename'] = 'Boletín (newsletter)';
$string['modulename_help'] = 'El módulo de boletín (newsletter) permite publicar boletines en Email.';
$string['modulenameplural'] = 'Boletines';
$string['newsletter'] = 'Boletín';
$string['newsletterintro'] = 'Descripción';
$string['newslettername'] = 'Nombre';
$string['newslettername_help'] = 'Este es el contenido de la ayuda asociada con el campo del boletín. Se soporta la sintaxis Markdown.';
$string['new_user_subscribe_message'] = 'Hola {$a->fullname},
Usted ha solicitado suscribirse al boletín
\'{$a->newslettername}\'  en \'{$a->sitename}\'
usando esta dirección de correo. Se le ha creado una cuenta nueva :

Nombre_de_usuario: {$a->username}
Contraseña: {$a->password}

Usted puede cambiar los detalles de la cuanta después de confirmarse.
Para confirmar su nueva cuenta, por favor vaya a:

{$a->link}

En la mayoría de los programas de correo, esto debería de aparecer como un enlace de color azul; simplemente haga click sobre  él . Si esto no funciona, entonces corte la dirección y péguela en su navegador de Internet.

Si requiere ayuda, por favor contacte al administrador del sitio,
{$a->admin}';
$string['no_issues'] = 'Este boletín todavía no tiene ejemplares.';
$string['page_first'] = 'Primero';
$string['page_last'] = 'Último';
$string['page_next'] = 'Siguiente';
$string['page_previous'] = 'Anterior';
$string['pluginadministration'] = 'Administración del boletín';
$string['pluginname'] = 'Boletín';
$string['publish_in'] = 'Para ser publicado en {$a->days} días, {$a->hours} hrs, {$a->minutes} min, {$a->seconds} seg.';
$string['publishon'] = 'Publicar en';
$string['stylesheets'] = 'Subir hojas de estilo del boletín';
$string['stylesheets_help'] = 'Subir archivos CSS que servirán como hojas de estilo para estos ejemplares del boletín. Usted puede subir más de una, y Usted puede seleccionarlas al crear un nuevo ejemplar. El campo es opcional, dado que el módulo ya viene con al menos un archivo de hoja de estilo pre-incluido.';
$string['sub_mode_forced'] = 'forzado';
$string['sub_mode_opt_in'] = 'Entrada opcional';
$string['sub_mode_opt_out'] = 'Salida opcional';
$string['subscribe'] = 'Suscribir';
$string['subscribe_question'] = '¿Le gustaría suscribirse al boletín "{$a->name}" usando la cuenta de correo "{$a->email}"?';
$string['subscription_mode'] = 'Modo de suscripción';
$string['subscription_mode_help'] = 'Selecciona si los usuarios inscritos estarán suscritos al boletín automáticamente (salida opcional) o tendrán que suscribirse manualmente (entrada opcional). ADVERTENCIA:  ¡La salida automática suscribirá automáticamente a todos los usuarios inscritos!';
$string['unsubscribe'] = 'Des-suscribir';
$string['unsubscribe_link_text'] = 'Elija aquí para des-suscribir';
$string['unsubscribe_question'] = '¿Quiere Usted des-suscribir su dirección Email "{$a->email}" del boletín "{$a->name}"?';
