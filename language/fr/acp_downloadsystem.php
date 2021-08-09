<?php
/**
*
* Download system [French]
* 
* @package phpBB Extension - Download System
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
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
	'ACP_ADD'							=> 'Ajouter',
	'ACP_ALL_DOWNLOADS'					=> 'Tous les téléchargements',
	'ACP_ANNOUNCE_ENABLE'				=> 'Annoncer un nouveau téléchargement',
	'ACP_ANNOUNCE_ENABLE_EXPLAIN'		=> 'Si activé, annoncez les nouveaux téléchargements dans un certain forum.',
	'ACP_ANNOUNCE_LOCK'					=> 'Verrouillé l‘annonce',
	'ACP_ANNOUNCE_LOCK_EXPLAIN'			=> 'Si activé, le sujet sera verrouillé.',
	'ACP_ANNOUNCE_ID'					=> 'Forum des annonces',
	'ACP_ANNOUNCE_ID_EXPLAIN'			=> 'Entrez ici l‘ID du forum, où vous souhaitez annoncer de nouveaux téléchargements.',
	'ACP_ANNOUNCE_MSG'					=> 'Bonjour,

nouveau téléchargement disponible !

[b]Titre:[/b] %1$s
[b]Description:[/b] %2$s
[b]Categorie:[/b] %3$s
[b]Cliquez %4$s pour vous rendre sur la page de téléchargement ![/b]

Merci !',
	'ACP_ANNOUNCE_SETTINGS'				=> 'Paramètres d‘annonce',
	'ACP_ANNOUNCE_TITLE'				=> '%1$s',
	'ACP_CAT_NAME_SHOW_YES'				=> 'oui',
	'ACP_CAT_NAME_SHOW_NO'				=> 'non',
	'ACP_NEW_CAT_NAME_SHOW'				=> 'Afficher le téléchargement sur l‘index',
	'ACP_NEW_CAT_NAME_SHOW_EXPLAIN'		=> 'Afficher la catégorie dans la section de téléchargement pour les groupes autorisés à télécharger.<br><strong>Remarque :</strong> les administrateurs peuvent toujours voir toutes les catégories dans la section de téléchargement.',
	'ACP_ANNOUNCE_UP'					=> 'Annoncer de nouveau le téléchargement',
	'ACP_ANNOUNCE_UP_EXPLAIN'			=> 'Activez, si vous souhaitez ré-annoncer le téléchargement. Le message sera envoyé en tant qu‘information de mise à jour',
	'ACP_ANNOUNCE_UP_MSG'				=> 'Bonjour,

nouvelle mise à jour à télécharger !

[b]Titre:[/b] %1$s

[b]Description:[/b] %2$s

[b]Categorie:[/b] %3$s

[b]Cliquez %4$s pour vous rendre à la catégorie ![/b]

Have fun!',
	'ACP_ANNOUNCE_UP_TITLE'					=> '[UPD] %1$s',
	'ACP_BASIC'								=> 'Paramètres de base',
	'ACP_CAT'								=> 'Catégorie',
	'ACP_CAT_SUB'							=> 'Catégorie aves sous-catégorie',
	'ACP_CATEGORIES'						=> 'Catégories',
	'ACP_CAT_DELETE'						=> 'Supprimer la catégorie',
	'ACP_CAT_DELETE_DONE'					=> 'Votre catégorie a été supprimée avec succès',
	'ACP_CAT_DELETE_EXPLAIN'				=> 'Ici vous pouvez supprimer une catégorie.',
	'ACP_CAT_EDIT_DONE'						=> 'Votre catégorie a été mise à jour avec succès',
	'ACP_CAT_EXIST'							=> 'Le nom du dossier existe déjà sur votre espace web !',
	'ACP_CAT_EXPLAIN'						=> 'Entrez ici la catégorie dans laquelle votre téléchargement doit être répertorié',
	'ACP_CAT_INDEX'							=> 'Index des catégories',
	'ACP_CAT_NAME_ERROR'					=> 'Vous devez entrer un nom de dossier pour votre catégorie !',
	'ACP_CAT_NEW'							=> 'Ajouter une nouvelle catégorie',
	'ACP_CAT_NEW_DONE'						=> 'Votre nouvelle catégorie a été ajoutée et le dossier créé avec succès sur votre espace web !',
	'ACP_CAT_NEW_EXPLAIN'					=> 'Ici vous pouvez ajouter une nouvelle catégorie.',
	'ACP_CAT_NOT_EXIST'						=> 'La catégorie demandée n‘existe pas !',
	'ACP_CAT_SELECT'						=> 'Ici, vous pouvez ajouter, modifier ou supprimer des catégories.',
	'ACP_CAT_OF'							=> 'de',
	'ACP_CLICK'								=> 'ici',
	'ACP_CONFIG_SUCCESS'					=> 'La configuration a été mise à jour avec succès',
	'ACP_COPY_NEW'							=> 'Copier comme brouillon',
	'ACP_COST_ERROR'						=> 'Vous ne pouvez pas définir de coûts négatifs pour un téléchargement !<br>Entrez 0 pour le rendre gratuit ou toute valeur positive.',
	'ACP_COST_EXPLAIN'						=> 'Ici, vous pouvez définir combien %1$s les utilisateurs doivent payer pour ce téléchargement. Mettre 0, pour un téléchargement gratuit.',
	'ACP_COST_FREE'							=> 'Gratuit',
	'ACP_COST_SHORT'						=> 'Coût',
	'ACP_DELETE_HAS_FILES'					=> 'Il y a encore des fichiers dans la catégorie !<br>Veuillez d‘abord les supprimer ou les déplacer vers une autre catégorie !',
	'ACP_DELETE_SUB_CATS'					=> 'Veuillez d‘abord supprimer vos sous-catégories !',
	'ACP_DEL_CAT'							=> 'Êtes-vous certain de vouloir supprimer la catégorie <strong>%1$s</strong>?<br>Le dossier physique sur votre serveur Web - s‘il n‘y a plus de téléchargements à l‘intérieur - sera également supprimé !',
	'ACP_DEL_CAT_EXPLAIN'					=> 'Ici, vous pouvez supprimer une catégorie existante.',
	'ACP_DEL_DOWNLOAD'						=> 'Supprimer un téléchargement',
	'ACP_DEL_DOWNLOADS_TO'					=> 'Déplacer les téléchargements vers',
	'ACP_DEL_DOWNLOAD_YES'					=> 'Supprimer la catégorie y compris les téléchargements ?',
	'ACP_DEL_SUBS'							=> 'Supprimer les sous-catégories',
	'ACP_DEL_SUBS_TO'						=> 'Déplacer les sous-catégories vers',
	'ACP_DEL_SUBS_YES'						=> 'Supprimer la catégorie y compris les sous-catégories ?',
	'ACP_DOWNLOADS'							=> 'Téléchargements',
	'ACP_DOWNLOAD_DELETED'					=> 'Votre téléchargement a été supprimé avec succès.',
	'ACP_DOWNLOAD_UPDATED'					=> 'Votre téléchargement a été mis à jour avec succès',
	'ACP_DOWNLOAD_SYSTEM'					=> 'Système de téléchargement',
	'ACP_EDIT_CAT'							=> 'Modifier la catégorie',
	'ACP_EDIT_CAT_EXPLAIN'					=> 'Ici, vous pouvez modifier une catégorie existante.',
	'ACP_EDIT_DOWNLOADS'					=> 'Modifier les téléchargements',
	'ACP_EDIT_DOWNLOADS_EXPLAIN'			=> 'Ici, vous pouvez modifier le téléchargement sélectionné.',
	'ACP_EDIT_FILENAME'						=> 'Fichier enregistré',
	'ACP_EDIT_FILENAME_EXPLAIN'				=> '<strong>IMPORTANT:</strong> Si vous modifiez le nom du fichier ici, il n‘y aura plus de vérification, si le fichier existe vraiment sur votre espace Web. <strong>Vous devez télécharger le nouveau fichier via FTP et supprimer manuellement l‘ancien !</strong>',
	'ACP_EDIT_SUB_CAT_EXPLAIN'				=> 'Le sous-répertoire déjà créé ne peut pas être modifié. Si vous souhaitez avoir un sous-répertoire différent, vous devez supprimer la catégorie actuelle et en créer une nouvelle !',
	'ACP_FILE_TOO_BIG'						=> 'Le fichier est plus gros que votre hébergeur ne le permet !',
	'ACP_DL_ERROR_CATEGORY_IMAGE'			=> 'Il y a eu une erreur avec votre image de catégorie :',
	'ACP_FORUM_ID_ERROR'					=> 'L‘ID de forum saisi n‘existe pas !',
	'ACP_EDS_INDEX'							=> 'Système de téléchargement',
	'ACP_MANAGE_DOWNLOADS_EXPLAIN'			=> 'Ici, vous pouvez ajouter, modifier ou supprimer vos téléchargements <code>[URL]</code>.',
	'ACP_MULTI_DOWNLOAD'					=> '%d téléchargements',
	'ACP_NEED_DATA'							=> 'Vous devez remplir tous les champs !',
	'ACP_NEW_ADDED'							=> 'Votre entrée a été ajoutée avec succès dans la base de données',
	'ACP_NEW_CAT'							=> 'Nouvelle catégorie',
	'ACP_NEW_CAT_DESC'						=> 'Description de la catégorie',
	'ACP_NEW_CAT_DESC_EXPLAIN'				=> 'Entrez une description utile de votre nouvelle catégorie.<br>Les BB-Codes, les sourires et les liens seront reconnus automatiquement.',
	'ACP_NEW_CAT_NAME'						=> 'Nom de la catégorie',
	'ACP_NEW_CAT_PARENT'					=> 'Catégorie parent',
	'ACP_NEW_COPY_DOWNLOAD'					=> 'Nouveau téléchargement avec copie',
	'ACP_NEW_COPY_DOWNLOAD_EXPLAIN'			=> 'Vous avez choisi de copier un téléchargement déjà existant pour votre nouveau téléchargement. Cela vous fera gagner un peu de temps, surtout si vous aimez télécharger une nouvelle version',
	'ACP_NEW_DESC'							=> 'Description',
	'ACP_NEW_DESC_EXPLAIN'					=> 'Entrez ici une description pour votre téléchargement.',
	'ACP_NEW_DL_CAT'						=> 'Catégorie',
	'ACP_NEW_DL_CAT_EXPLAIN'				=> 'Sélectionnez ici la catégorie dans laquelle votre téléchargement doit rester.',
	'ACP_NEW_DOWNLOAD'						=> 'Nouveau téléchargement',
	'ACP_NEW_DOWNLOAD_EXPLAIN'				=> 'Ici, vous pouvez ajouter de nouveaux téléchargements.',
	'ACP_NEW_DOWNLOAD_SIZE'					=> 'La taille maximale du fichier, autorisée par votre hébergeur, est de <strong>%1$s %2$s</strong> ! En raison du temps de téléchargement dont vous pourriez avoir besoin, cette valeur peut être inférieure !',
	'ACP_NEW_FILENAME'						=> 'Nom du fichier',
	'ACP_NEW_FILENAME_EXPLAIN'				=> 'Sélectionnez le fichier à télécharger.',
	'ACP_NEW_SUB_CAT_EXPLAIN'				=> 'Entrez ici le nom du dossier que vous souhaitez utiliser sur votre espace web pour cette catégorie (sans slash !).<br>Ce dossier sera alors créé automatiquement sous votre dossier root/ext/dmzx/downloadsystem/files/.<br> Les caractères autorisés sont az, AZ, 0-9, le tiret ( - ) et le trait de soulignement ( _ ).',
	'ACP_NEW_SUB_CAT_NAME'					=> 'Nom du chemin de la catégorie',
	'ACP_NEW_TITLE'							=> 'Titre',
	'ACP_NEW_TITLE_EXPLAIN'					=> 'Entrez ici le titre de votre nouveau téléchargement.',
	'ACP_NEW_VERSION'						=> 'Version',
	'ACP_NEW_VERSION_EXPLAIN'				=> 'Entrez ici la version de votre téléchargement.',
	'ACP_NO_CAT'							=> 'Aucune catégorie n‘est disponible !<br>Vous devez d‘abord créer au moins une catégorie avant de pouvoir commencer à ajouter des fichiers à télécharger !',
	'ACP_NO_CAT_ID'							=> 'Aucun ID de catégorie',
	'ACP_NO_CAT_PARENT'						=> 'Aucune catégorie parent',
	'ACP_NO_CAT_UPLOAD'						=> 'Aucune catégorie n‘est disponible !<br>Vous devez d‘abord créer au moins une catégorie avant de pouvoir commencer à ajouter des fichiers !',
	'ACP_NO_DOWNLOADS'						=> 'Aucun téléchargement',
	'ACP_NO_FILENAME'						=> 'Vous devez entrer un fichier, qui appartient à votre téléchargement !',
	'ACP_PAGINATION_ACP'					=> 'Définir le nombre d‘entrées sur la page Gérer les téléchargements dans le PCA',
	'ACP_PAGINATION_ACP_EXPLAIN'			=> 'Définissez ici le nombre d‘entrées que vous souhaitez voir sur la page Gérer les téléchargements dans le PCA. <em>La valeur par défaut est 5.</em>',
	'ACP_PAGINATION_DOWNLOADS'				=> 'Définir le nombre d‘entrées sur la page de catégorie',
	'ACP_PAGINATION_DOWNLOADS_EXPLAIN'		=> 'Définissez ici le nombre d‘entrées que vous souhaitez voir sur la page de catégorie. <em>La valeur par défaut est 25.</em>',
	'ACP_PAGINATION_ERROR_ACP'				=> 'Vous ne pouvez pas définir une valeur inférieure à 5 !',
	'ACP_PAGINATION_ERROR_USER'				=> 'Vous ne pouvez pas définir une valeur inférieure à 3 !',
	'ACP_PAGINATION_ERROR_DOWNLOADS'		=> 'Vous ne pouvez pas définir une valeur inférieure à 10 !',
	'ACP_PAGINATION_USER'					=> 'Définir le nombre d‘entrées sur la page de téléchargement',
	'ACP_PAGINATION_USER_EXPLAIN'			=> 'Définissez ici le nombre d‘entrées que vous souhaitez voir sur la page de téléchargement. <em>La valeur par défaut est 3.</em>',
	'ACP_PARENT_OPTION_NAME'				=> 'Choisir une catégorie',
	'ACP_REALLY_DELETE'						=> 'Êtes-vous sûr de vouloir supprimer votre téléchargement ?<br>Le fichier physique sur votre serveur Web sera également supprimé !',
	'ACP_SINGLE_DOWNLOAD'					=> '1 téléchargement',
	'ACP_SORT_ASC'							=> 'Ascendant',
	'ACP_SORT_CAT'							=> 'Catégorie',
	'ACP_SORT_DESC'							=> 'Descendant',
	'ACP_SORT_DIRECTION'					=> 'sens de tri',
	'ACP_SORT_KEYS'							=> 'Trier par',
	'ACP_SORT_TITLE'						=> 'Titre',
	'ACP_SUB_DL_CAT'						=> 'Sous-catégorie',
	'ACP_SUB_NO_CAT'						=> '-----------',
	'ACP_SUB_DL_CAT_EXPLAIN'				=> 'Sélectionnez ici la sous-catégorie.',
	'ACP_SUB_HAS_CAT_EXPLAIN'				=> 'Cette catégorie a des sous-catégories et ne peut donc pas être liée à une autre catégorie.',
	'ACP_UPLOAD_FILE_EXISTS'				=> 'Le fichier que vous souhaitez envoyer existe déjà dans cette catégorie !',
	'ACP_WRONG_CHAR'						=> 'Vous avez entré un mauvais caractère dans le nom du chemin de la catégorie !<br>Les caractères suivants sont autorisés : a-z, A-Z, 0-9, ainsi que le tiret ( - ) et le trait de soulignement ( _ ) !',
	'ACP_MANAGE_CONFIG_EXPLAIN'				=> 'Ici, vous pouvez définir quelques valeurs de base.',
	'ACP_SET_USERNAME'						=> 'Nom d‘utilisateur pour un transfert',
	'ACP_SET_USERNAME_EXPLAIN'				=> 'Ici, vous pouvez définir un nom d‘utilisateur auquel les coûts de téléchargement doivent être transférés. Laissez vide, si aucun ne doit recevoir les coûts mentionnés ci-dessus.',
	'ACP_FTP_OR_UPLOAD'						=> 'Vous ne pouvez effectuer qu‘un téléchargement FTP <strong>OU</strong> normal !',
	'ACP_NEW_FTP_FILENAME_EXPLAIN'			=> 'Entrez ici le nom du fichier (ex. sample.zip), si vous souhaitez utiliser la méthode de téléchargement FTP.',
	'ACP_NEW_FTP_FILENAME'					=> 'Nom du fichier FTP',
	'ACP_UPLOAD_METHOD'						=> 'Méthode d‘envoie',
	'ACP_UPLOAD_METHOD_EXPLAIN'				=> 'Vous pouvez ajouter un nouvel envoie via FTP ou directement. Si vous envisagez d‘utiliser la méthode d‘envoie FTP, le fichier doit être transféré dans la bonne catégorie <strong>avant</strong> de l‘entrer ici ! Vous ne pouvez utiliser que l‘une ou l‘autre méthode à la fois !',
	'ACP_UPLOAD_FILE_NOT_EXISTS'			=> 'Le fichier n‘existe pas dans la catégorie nommée. Puisque vous avez sélectionné la méthode d‘envoie FTP, ce fichier doit être transféré via FTP dans le bon répertoire <strong>AVANT</strong> de pouvoir l‘ajouter !',
	'ACP_DM_EDS_IMAGE_SIZE'					=> 'Taille maximale du fichier image',
	'ACP_DM_EDS_IMAGE_SIZE_EXPLAIN'			=> 'Taille maximale de chaque fichier. Si cette valeur est 0, la taille du fichier téléchargeable n‘est limitée que par votre configuration PHP.<br>Taille moyenne des fichiers image : PNG ~ 2–4 ko, GIF ~ 6–8 ko, JPG ~ 9–12 ko',
	'ACP_DM_EDS_IMAGE_DIR'					=> 'Répertoire de téléchargement de l‘image système',
	'ACP_DM_EDS_IMAGE_DIR_EXPLAIN'			=> 'Chemin de stockage pour les images de blog. Veuillez noter que si vous modifiez ce répertoire alors que vous avez déjà téléchargé des images de blog, vous devez copier manuellement les fichiers vers leur nouvel emplacement.',
	'ACP_DM_EDS_IMAGE_CAT_DIR'				=> 'Répertoire de téléchargement d‘images de catégorie',
	'ACP_DM_EDS_IMAGE_CAT_DIR_EXPLAIN'		=> 'Chemin de stockage pour les images de catégorie. Veuillez noter que si vous modifiez ce répertoire alors que vous avez déjà téléchargé des images de catégorie, vous devez copier manuellement les fichiers vers leur nouvel emplacement.',
	'ACP_DM_EDS_ALLOW_DL_IMG'				=> 'Autoriser le téléchargement d‘images de fichiers',
	'ACP_DM_EDS_ALLOW_DL_IMG_EXPLAIN'		=> 'Autoriser l‘affichage des images pour les fichiers.',
	'ACP_DM_EDS_ALLOW_CAT_IMG'				=> 'Autoriser les images de catégorie',
	'ACP_DM_EDS_ALLOW_CAT_IMG_EXPLAIN'		=> 'Autoriser l‘affichage des images de catégorie.',
	'ACP_DM_EDS_ALLOW_BBCODES'				=> 'Autoriser les BBCodes',
	'ACP_DM_EDS_ALLOW_BBCODES_EXPLAIN'		=> 'Autoriser l‘utilisation des BBCodes dans l‘extension Système de Téléchargement.',
	'DM_EDS_ALLOW_SMILIES'					=> 'Autoriser les smileys',
	'DM_EDS_ALLOW_SMILIES_EXPLAIN'			=> 'Autoriser l‘utilisation de smileys dans l‘extension Système de Téléchargement.',
	'ACP_DM_EDS_ALLOW_MAGIC_URL'			=> 'Autoriser les liens',
	'ACP_DM_EDS_ALLOW_MAGIC_URL_EXPLAIN'	=> 'Si non autorisé, le BBCode <code>[URL]</code> et les URL automatiques/magiques sont désactivés dans l‘extension Système de Téléchargement.',
	'ACP_NEW_IMAGE_DL'						=> 'Images',
	'ACP_DL_DOWNLOAD_IMAGE'					=> 'Télécharger l‘image',
	'ACP_DL_DOWNLOAD_IMAGE_EXPLAIN'			=> 'Téléchargez une image pour ce fichier. La taille maximale du fichier et le répertoire du fichier sont définis dans les paramètres de configuration.',
	'ACP_DL_DOWNLOAD_IMAGE_CURRENT'			=> 'Image actuelle',
	'ACP_CHANGEDLIMAGE'						=> 'Changer l‘image ?',
	'ACP_DL_CATEGORY_IMAGE'					=> 'Image de la catégorie',
	'ACP_DL_CATEGORY_IMAGE_EXPLAIN'			=> 'Téléchargez une image pour ce fichier. La taille maximale du fichier et le répertoire du fichier sont définis dans les paramètres de configuration.',
	'ACP_DL_CATEGORY_IMAGE_CURRENT'			=> 'Image actuelle',
	'ACP_CHANGECATIMAGE'					=> 'Changer l‘image ?',
	'ACP_DM_CATEGORIES'						=> '',
	'ACP_DM_CATEGORIES_IMAGE'				=> 'Images',
	'ACP_DM_CATEGORIES_NAME'				=> 'Nom de catégorie',
	'ACP_DM_CATEGORIES_DESC'				=> 'Description',
	'ACP_DM_CATEGORIES_SHOW_INDEX' 			=> 'Afficher sur la page de téléchargement',
	'ACP_SHOW_DONATION'						=> 'Afficher le bouton de don avant de télécharger un fichier',
	'ACP_SHOW_DONATION_EXPLAIN' 			=> 'Affiche le bouton de don lors du téléchargement d‘un fichier.',
	'ACP_DONATION_URL'						=> 'URL vers la page de don',
	'ACP_DONATION_URL_EXPLAIN' 				=> 'Définir l‘URL de la page de don. S‘ouvrira dans un nouvel onglet et le téléchargement commencera automatiquement.',
));

