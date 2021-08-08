<?php
/**
*
* Download System [French]
* 
* @package phpBB Extension - Download System
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_DM_EDS'						=> 'Système de téléchargement',
	'ACP_MANAGE_CATEGORIES'				=> 'Gérer les catégories',
	'ACP_MANAGE_CONFIG'					=> 'Configuration',
	'ACP_MANAGE_DOWNLOADS'				=> 'Gérer les téléchargements',
	'LOG_DOWNLOAD_ADD'					=> '<strong>Ajout d‘un nouveau téléchargement</strong><br>» %1$s',
	'LOG_DOWNLOAD_UPDATED'				=> '<strong>Téléchargement mis à jour</strong><br>» %1$s',
	'LOG_DOWNLOAD_DELETED'				=> '<strong>Téléchargement supprimé</strong><br>» %1$s',
	'LOG_CATEGORY_ADD'					=> '<strong>Ajout d‘une nouvelle catégorie de téléchargement</strong><br>» %1$s',
	'LOG_CATEGORY_UPDATED'				=> '<strong>Catégorie de téléchargement mise à jour</strong><br>» %1$s',
	'LOG_CATEGORY_DELETED'				=> '<strong>Catégorie de téléchargement supprimée</strong><br>» %1$s',
	'LOG_CONFIG_UPDATED'				=> '<strong>Configuration de téléchargement mise à jour</strong>',
));

