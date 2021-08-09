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
	'EDS_BACK_INDEX'					=> 'Retour à l‘index',
	'EDS_BACK_LINK'						=> 'Cliquez %sici%s pour revenir à l‘index de téléchargement',
	'EDS_CATS_NAME'						=> 'Catégories',
	'EDS_CAT_DESC'						=> 'Description',
	'EDS_CAT_NAME'						=> 'Catégorie',
	'EDS_CAT_IMAGE'						=> 'Image',
	'EDS_COST'							=> 'Coût',
	'EDS_COST_ERROR'					=> 'Vous avez besoin de plus de %1$s pour télécharger ce fichier',
	'EDS_COST_FREE'						=> 'Ce téléchargement est gratuit',
	'EDS_COST_OK'						=> 'Vous avez suffisamment de %1$s pour télécharger ce fichier',
	'EDS_DISABLED'						=> 'Le système de téléchargement est actuellement désactivé. Veuillez réessayer plus tard.<br>Si vous rencontrez toujours le même problème, veuillez en informer l‘administrateur.',
	'EDS_DL_NOEXISTS'					=> 'Ce téléchargement n‘existe pas',
	'EDS_DOWNLOAD'						=> 'Télécharger',
	'EDS_DOWNLOADS'						=> 'Téléchargements',
	'EDS_DOWNLOAD_FILE'					=> 'Télécharger un fichier',
	'EDS_DOWNLOAD_DONATE'				=> 'Faire un don',
	'EDS_DOWNLOAD_DONATE_THX'			=> 'Merci pour votre don',
	'EDS_DOWNLOAD_DONATE_MES'			=> 'Souhaitez-vous également faire un petit <strong>don</strong><br>ou simplement <strong>télécharger</strong> le fichier ?',
	'EDS_DOWNLOAD_START'				=> 'Votre téléchargement débutera dans un instant !',
	'EDS_DOWNLOAD_NO_PERM'				=> 'Aucune autorisation !',
	'EDS_DOWNLOAD_NOT_DOWNLOAD'			=> 'Vous ne pouvez pas télécharger ce fichier',
	'EDS_DOWNLOAD_REDIRECT'				=> 'Redirection',
	'EDS_DOWNLOAD_EXPLAIN'				=> 'Cliquez sur l‘icône à droite pour télécharger le fichier souhaité.',
	'EDS_FILE_CLICKS'					=> 'Total des Téléchargements',
	'EDS_FILE_DESC'						=> 'Description',
	'EDS_FILE_TITLE'					=> 'Nom du fichier',
	'EDS_FILE_VERSION'					=> 'Version',
	'EDS_FREE'							=> 'Gratuit',
	'EDS_INDEX'							=> 'Index',
	'EDS_LAST_CHANGED_ON'				=> 'Dernière modification le',
	'EDS_LAST_DOWNLOAD'					=> '&nbsp;<strong>%1$s</strong><br><br>&nbsp;Téléchargé : %2$s fois<br>&nbsp;Dernière modification le : %3$s',
	'EDS_LAST_FILE'						=> 'Nouveau fichier',
	'EDS_LEGEND'						=> 'Légende',
	'EDS_LEGEND_ERROR'					=> 'Vous avez besoin de plus %1$s',
	'EDS_LEGEND_FREE'					=> 'Le téléchargement est gratuit',
	'EDS_LEGEND_NO_DL'					=> 'Vous n‘êtes pas autorisé à télécharger des fichiers',
	'EDS_LEGEND_OK'						=> 'Vous avez assez %1$s',
	'EDS_MULTI'							=> '%1$s Téléchargements',
	'EDS_NO_CAT'						=> '<strong>Désolé ! Il n‘y a actuellement aucune catégorie disponible.</strong><br><br>',
	'EDS_NO_CAT_IN_UPLOAD'				=> 'Désolé ! Il n‘y a actuellement aucunes catégories disponibles.',
	'EDS_NO_DOWNLOADS'					=> '<strong>Désolé ! Il n‘y a actuellement aucun téléchargement disponible.</strong><br><br>',
	'EDS_NO_FILES'						=> 'Il n‘y a pas de téléchargements',
	'EDS_NO_ID'							=> 'Aucun identifiant donné',
	'EDS_NUMBER_DOWNLOADS'				=> 'Fichiers',
	'EDS_REGULAR_DOWNLOAD'				=> 'Cliquez ici pour télécharger le fichier sélectionné',
	'EDS_REQUIRES_POINTS'				=> '<strong>Comme nous avons installé le module Ultimate Points et que vous avez besoin de points pour ce téléchargement,<br>vous devez être connecté avant de pouvoir télécharger ce fichier !</strong>',
	'EDS_SINGLE'						=> '1 Téléchargement',
	'EDS_SUB_CAT'						=> 'Sous-catégorie',
	'EDS_SUB_CATS'						=> 'Sous-catégories',
	'EDS_TITLE'							=> 'Téléchargements',
	'EDS_TITLE_EXPLAIN'					=> 'Sélectionnez une catégorie ci-dessous',
	'EDS_UPLOADED_ON'					=> 'Ajouté le',
	'EDS_UPLOAD'						=> 'Envoyer',
	'EDS_UPLOADS'						=> 'Envoie de fichier dans le système de téléchargement',
	'EDS_UPLOAD_SECTION'				=> 'Section de téléchargement',
	'EDS_UPLOAD_MESSAGE'				=> 'Envoyez ici votre fichier dans la bonne catégorie.',
	'EDS_FILESIZE'						=> 'Taille du fichier',
	'EDS_CAT_NOT_EXIST'					=> 'La catégorie sélectionnée n‘existe pas !',
	'EDS_BACK_DOWNLOADS'				=> 'Retour à l‘aperçu du téléchargement',
	'EDS_NO_PERMISSION'					=> 'Vous n‘avez pas la permission requises pour utiliser le système de téléchargement',
	'EDS_NO_DOWNLOAD'					=> 'Vous n‘avez pas l‘autorisation de télécharger des fichiers depuis le système de téléchargement',
	'EDS_NO_UPLOAD'						=> 'Vous n‘avez pas les permission requises pour utiliser la section de téléchargement',
	'EDS_NO_DIRECT_DL'					=> 'Vous n‘êtes pas autorisé à télécharger des fichiers',
	'EDS_CAT'							=> '%d catégorie',
	'EDS_CATS'							=> '%d catégories',
	'EDS_SUB_CATEGORY'					=> 'et %d sous-catégorie',
	'EDS_SUB_CATEGORIES'				=> 'et %d sous-catégories',
	'EDS_CURRENT_VERSION'				=> 'Version actuelle',
	'EDS_NEW_TITLE'						=> 'Titre',
	'EDS_NEW_TITLE_EXPLAIN'				=> 'Titre de votre nouveau téléchargement.',
	'EDS_NEW_VERSION'					=> 'Version',
	'EDS_NEW_VERSION_EXPLAIN'			=> 'Version de votre téléchargement.',
	'EDS_NEW_DESC'						=> 'Description',
	'EDS_NEW_DESC_EXPLAIN'				=> 'Entrez ici une description pour votre téléchargement.',
	'EDS_NEW_DL_CAT'					=> 'Catégorie',
	'EDS_NEW_DL_CAT_EXPLAIN'			=> 'Sélectionnez ici la catégorie.',
	'EDS_NEW_DOWNLOAD'					=> 'Nouveau téléchargement',
	'EDS_NEW_FILENAME'					=> 'Nom du fichier',
	'EDS_NEW_FILENAME_EXPLAIN'			=> 'Sélectionnez le fichier à télécharger.',
	'EDS_NEW_DOWNLOAD_SIZE'				=> 'La taille maximale du fichier est de <strong>%1$s %2$s</strong> ! En raison du temps de téléchargement dont vous pourriez avoir besoin, cette valeur peut être inférieure !',
	'EDS_SUBCAT_FILE'					=> '1 fichier',
	'EDS_SUBCAT_FILES'					=> '%1$d fichiers',
	'EDS_DL_IMAGE'						=> 'Image',
	'EDS_UPLOAD_FILE_EXISTS'			=> 'Le fichier que vous souhaitez envoyer existe déjà dans cette catégorie !',
	'EDS_NO_FILENAME'					=> 'Vous devez entrer un fichier, qui correspond à votre téléchargement !',
	'EDS_FILE_TOO_BIG'					=> 'Le fichier est plus gros que votre hébergeur ne le permet !',
	'EDS_CLICK'							=> 'ici',
	'EDS_ANNOUNCE_TITLE'				=> '%1$s',
	'EDS_ANNOUNCE_MSG'					=> 'Bonjour,

un nouveau téléchargement est disponible i

[b]Titre:[/b] %1$s
[b]Description:[/b] %2$s
[b]Catégorie :[/b] %3$s
[b]Cliquez %4$s pour aller à la page de téléchargement ![/b]

Merci !',
	'EDS_NEW_ADDED'							=> 'Votre entrée a été ajoutée avec succès dans la base de données',
));

