<?php
//$Id: admin.php,v 0.51 2005/08/03 20:38:22 gabybob Exp $
// modification le 05 juillet 2006 Gabriel
//Menu choices
define('_AM_MLDOCS_ADMIN_TITLE', 'Menu Administration %s');
define('_AM_MLDOCS_BLOCK_TEXT', 'Gestion des Blocs');
define('_AM_MLDOCS_MENU_MANAGE_DEPARTMENTS', 'Gestion des D&eacute;partements');
define('_AM_MLDOCS_MENU_MANAGE_STAFF', 'Gestion des Equipes');
define('_AM_MLDOCS_MENU_MODIFY_EMLTPL', 'Mod&egrave;les des Emails');
define('_AM_MLDOCS_MENU_MODIFY_ARCHIVE_FIELDS', 'Modifier les champs des Archives');
define('_AM_MLDOCS_MENU_GROUP_PERM', 'Permissions des Groupes');
define('_AM_MLDOCS_MENU_MIMETYPES', 'Gestion des types MIME');
define('_AM_MLDOCS_MENU_PREFERENCES', 'Pr&eacute;f&eacute;rences');
define('_AM_MLDOCS_MENU_ADD_STAFF', 'Ajouter une Equipe');
define('_AM_MLDOCS_UPDATE_MODULE', 'Mise &agrave; Jour du Module'); 
define('_AM_MLDOCS_MENU_MANAGE_ROLES', 'Administation des Roles');
define('_AM_MLDOCS_TEXT_MANAGE_NOTIFICATIONS', 'Gestion des notifications');

define('_AM_MLDOCS_SEC_ARCHIVE_ADD', 0);
define('_AM_MLDOCS_SEC_ARCHIVE_EDIT', 1);
define('_AM_MLDOCS_SEC_ARCHIVE_DELETE', 2);
define('_AM_MLDOCS_SEC_ARCHIVE_OWNERSHIP', 3);
define('_AM_MLDOCS_SEC_ARCHIVE_STATUS', 4);
define('_AM_MLDOCS_SEC_ARCHIVE_PRIORITY', 5);
define('_AM_MLDOCS_SEC_ARCHIVE_LOGUSER', 6);
define('_AM_MLDOCS_SEC_RESPONSE_ADD', 7);
define('_AM_MLDOCS_SEC_RESPONSE_EDIT', 8);
define('_AM_MLDOCS_SEC_ARCHIVE_MERGE', 9);
define('_AM_MLDOCS_SEC_FILE_DELETE', 10);

define('_AM_MLDOCS_SEC_TEXT_ARCHIVE_ADD', 'Ajouter des Archives');
define('_AM_MLDOCS_SEC_TEXT_ARCHIVE_EDIT', 'Modifier des Archives');
define('_AM_MLDOCS_SEC_TEXT_ARCHIVE_DELETE', 'Effacer des Archives');
define('_AM_MLDOCS_SEC_TEXT_ARCHIVE_OWNERSHIP', 'Changer le propri&eacute;taire de l\'Archive');
define('_AM_MLDOCS_SEC_TEXT_ARCHIVE_STATUS', 'Changer l\'Etat de Archive');
define('_AM_MLDOCS_SEC_TEXT_ARCHIVE_PRIORITY', 'Changer la priorit&eacute; de l\'Archive');
define('_AM_MLDOCS_SEC_TEXT_ARCHIVE_LOGUSER', 'Enregistrer l\'Archive pour l\'Utilisateur');
define('_AM_MLDOCS_SEC_TEXT_RESPONSE_ADD', 'Ajouter une R&eacute;ponse');
define('_AM_MLDOCS_SEC_TEXT_RESPONSE_EDIT', 'Modifier une R&eacute;ponse');
define('_AM_MLDOCS_SEC_TEXT_ARCHIVE_MERGE', 'Fusionner des Archives');
define('_AM_MLDOCS_SEC_TEXT_FILE_DELETE', 'Effacer les fichiers attach&eacute;s');

// Admin Menu
define('_AM_MLDOCS_ADMIN_ABOUT', 'A propos');
define('_AM_MLDOCS_ADMIN_GOTOMODULE', 'Aller au Module');

//Permissions
define('_AM_MLDOCS_GROUP_PERM', 'Permissions des groupes');
define('_AM_MLDOCS_GROUP_PERM_TITLE', 'Modifier les Permissions des Groupes');
define('_AM_MLDOCS_GROUP_PERM_NAME', 'Permissions');
define('_AM_MLDOCS_GROUP_PERM_DESC', 'S&eacute;lectionnez le(s) service(s) que chaque groupe sera autoris&eacute; &agrave; modifier');

// Messages
define('_AM_MLDOCS_MESSAGE_STAFF_UPDATE_ERROR', 'Erreur : &eacute;quipe non mise &agrave; jour');
define('_AM_MLDOCS_MESSAGE_FILE_READONLY', 'Ce fichier est en lecture seule. Merci de rendre le r&eacute;pertoire modules/mldocs/language/english/mail_templates ouvert en &eacute;criture');
define('_AM_MLDOCS_MESSAGE_FILE_UPDATED', 'Fichier mis &agrave; jour avec succ&egrave;s');
define('_AM_MLDOCS_MESSAGE_FILE_UPDATED_ERROR', 'Erreur : fichier non mis &agrave; jour');
define('_AM_MLDOCS_MESSAGE_ROLE_INSERT', 'Role ins&eacute;r&eacute; avec succ&egrave;s.');
define('_AM_MLDOCS_MESSAGE_ROLE_INSERT_ERROR', 'Erreur: le role n\'a pas &eacute;t&eacute; cr&eacute;&eacute;.');
define('_AM_MLDOCS_MESSAGE_ROLE_DELETE', 'Role effac&eacute; avec succ&egrave;s.');
define('_AM_MLDOCS_MESSAGE_ROLE_DELETE_ERROR', 'Erreur: n\'a pas &eacute;t&eacute; effac&eacute;.');
define('_AM_MLDOCS_MESSAGE_ROLE_UPDATE', 'Role mis &agrave; jour avec succ&egrave;s.');
define('_AM_MLDOCS_MESSAGE_ROLE_UPDATE_ERROR', 'Erreur: le role n\'a pas &eacute;t&eacute; mis &agrave; jour.');
define('_AM_MLDOCS_MESSAGE_DEPT_STORE', 'Permissions de d&eacute;partement enregistr&eacute;s avec succ&egrave;s.');
define('_AM_MLDOCS_MESSAGE_DEPT_STORE_ERROR', 'Erreur: les permissions du d&eacute;partement n\'ont pas &eacute;t&eacute; enregistr&eacute;es.');
define('_AM_MLDOCS_MESSAGE_DEF_ROLES', 'Les roles de permission par d&eacute;faut ont &eacute;t&eacute; ajout&eacute;s avec succ&egrave;s.');
define('_AM_MLDOCS_MESSAGE_DEF_ROLES_ERROR', 'Les roles de permissions par d&eacute;faut n\'ont pas &eacute;t&eacute; ajout&eacute;s.');
define('_AM_MLDOCS_MESSAGE_NO_DEPT', 'Erreur: pas de d&eacute;partement sp&eacute;cifi&eacute;');
define('_AM_MLDOCS_MESSAGE_NO_DESC', 'Erreur: Vous n\'avez pas sp&eacute;cifi&eacute; de description.');
define('_AM_MESSAGE_ADD_STATUS_ERR', 'Erreur: L\'&eacute;tat n\'a pas &eacute;t&eacute; ajout&eacute;.');
define('_AM_MESSAGE_EDIT_STATUS_ERR', 'Erreur: l\'&eacute:tat n\'a pas &eacute;t&eacute; mis &agrave; jour.');
define('_AM_MLDOCS_DEL_STATUS_ERR', 'Erreur: l\'&eacute;tat n\'a pas &eacute;t&eacute; effac&eacute;.');
define('_AM_MLDOCS_STATUS_HASARCHIVES_ERR', 'Erreur: Veuillez mettre &agrave; jour les archives utilisant cet &eacute;tat.');
define('_AM_MLDOCS_MESSAGE_NO_ID', 'Erreur: le num&eacute;ro n\'a pas &eacute;t&eacute; sp&eacute;cifi&eacute;.');
define('_AM_MLDOCS_MESSAGE_NO_VALUE', 'Erreur: la valeur du type mime n\'a pas &eacute;t&eacute; sp&eacute;cifi&eacute;e.');
define('_AM_MLDOCS_MESSAGE_EDIT_MIME_ERROR', 'Erreur: le type mime n\'a pas &eacute;t&eacute; mis &agrave; jour.');
define('_AM_MLDOCS_MESSAGE_DELETE_MIME_ERROR', 'Erreur: le type mime n\'a pas &eacute;t&eacute; effac&eacute;.');
define('_AM_MLDOCS_MESSAGE_ADD_MIME_ERROR', 'Erreur: le type mime n\'a pas &eacute;t&eacute; ajout&eacute;.');

// Buttons
define('_AM_MLDOCS_BUTTON_DELETE', 'Supprimer');
define('_AM_MLDOCS_BUTTON_EDIT', 'Editer');
define('_AM_MLDOCS_BUTTON_SUBMIT', 'Valider');
define('_AM_MLDOCS_BUTTON_RESET', 'RAZ');
define('_AM_MLDOCS_BUTTON_ADDSTAFF', 'Ajouter membre');
define('_AM_MLDOCS_BUTTON_UPDATESTAFF', 'Mise &agrave; jour de l\'&eacute;quipe');
define('_AM_MLDOCS_BUTTON_CANCEL', 'Annuler');
define('_AM_MLDOCS_BUTTON_UPDATE', 'Mise &agrave; jour');
define('_AM_MLDOCS_BUTTON_CREATE_ROLE', 'Cr&eacute;er un nouveau role');
define('_AM_MLDOCS_BUTTON_CLEAR_PERMS', 'Nettoyer les Permissions');
//define('_AM_MLDOCS_BUTTON_ADD_DEPT', 'Ajout de D&eacute;partement');

define('_AM_MLDOCS_EDIT_DEPARTMENT', 'Editer le D&eacute;partement');
define('_AM_MLDOCS_EXISTING_DEPARTMENTS', 'D&eacute;partements existants :');
define('_AM_MLDOCS_MANAGE_DEPARTMENTS', 'Gestion des D&eacute;partements');
define('_AM_MLDOCS_MENU_MANAGE_PROFILELOTS', 'Gestion profile du lot');
define('_AM_MLDOCS_MANAGE_STAFF', 'Gestion des Equipes');
define('_AM_MLDOCS_EXISTING_STAFF', 'Membres actuels de l\'&eacute;quipe :');
define('_AM_MLDOCS_ADD_STAFF', 'Ajouter un membre &agrave; l\'&eacute;quipe');
define('_AM_MLDOCS_EDIT_STAFF', 'Editer les membres de l\'&eacute;quipe');
define('_AM_MLDOCS_INDEX', 'Index');
define('_AM_MLDOCS_DEPARTMENT_SERVERS', 'Boite aux Lettres de D&eacute;partement');
define('_AM_MLDOCS_DEPARTMENT_SERVERS_EMAIL', 'Addresse Email');
define('_AM_MLDOCS_DEPARTMENT_SERVERS_TYPE', 'Type de Boite aux Lettres');
define('_AM_MLDOCS_DEPARTMENT_SERVERS_PRIORITY', 'Priorit&eacute; par d&eacute;faut de l\'Archive');
define('_AM_MLDOCS_DEPARTMENT_SERVERS_SERVERNAME', 'Serveur');
define('_AM_MLDOCS_DEPARTMENT_SERVERS_PORT', 'Port');
define('_AM_MLDOCS_DEPARTMENT_SERVERS_ACTION', 'Actions');
define('_AM_MLDOCS_DEPARTMENT_ADD_SERVER', 'Ajouter une Boite aux Lettres au moniteur');
define('_AM_MLDOCS_DEPARTMENT_SERVER_USERNAME', 'Nom d\'Utilisateur');
define('_AM_MLDOCS_DEPARTMENT_SERVER_PASSWORD', 'Mot de Passe');
define('_AM_MLDOCS_DEPARTMENT_SERVER_EMAILADDRESS', 'R&eacute;pondre � l\'Adresse Email');
define('_AM_MLDOCS_DEPARTMENT_NO_ID', 'Ne peut pas trouver le  N&ordm; de D&eacute;partement. Abandon.');
define('_AM_MLDOCS_DEPARTMENT_SERVER_SAVED', 'Ajouter une Boite aux Lettres au D&eacute;partement.');
define('_AM_MLDOCS_DEPARTMENT_SERVER_ERROR', 'Erreur lors de la Sauvegarde de la Boite aux Lettres du D&eacute;partement.');
define('_AM_MLDOCS_DEPARTMENT_SERVER_NO_ID', 'La Boite aux Lettres du D&eacute;partement n\'a pas &eacte;t&eacute; sp&eacute;cifi&eacute;e.');
define('_AM_MLDOCS_DEPARTMENT_SERVER_DELETED', 'Boite aux Lettres du D&eacute;partement Effac&eacute;e.');
define('_AM_MLDOCS_DEPARTMENT_SERVER_DELETE_ERROR', 'Erreur lors de l\'effacement de la Boite aux Lettres du D&eacute;partement.');
define('_AM_MLDOCS_STAFF_ERROR_DEPTARTMENTS', 'Vous devez assigner un utilisateur &agrave; 1 ou plusieurs d&eacute;partements avant de sauvegarder');
define('_AM_MLDOCS_STAFF_ERROR_ROLES', 'Vous devez assigner un utilisateur &agrave; 1 ou plusieurs roles avant de sauvegarder');
define('_AM_MLDOCS_STAFF_ERROR_USERS', 'Vous devez assigner un utilisateur &agrave; devenir membre de l\'&eacute;quipe.');
define('_AM_MLDOCS_STAFF_EXISTS', 'Erreur : cet utilisateur est d&eacute;j&agrave; membre de l\'&eacute;quipe.');

define('_AM_MLDOCS_MBOX_POP3', 'POP3');
define('_AM_MLDOCS_MBOX_IMAP', 'IMAP');

define('_AM_MLDOCS_TEXT_ADD_DEPT', 'Ajouter un D&eacute;partement :');
define('_AM_MLDOCS_TEXT_EDIT_DEPT', 'Editer le Nom du D&eacute;partement :');
define('_AM_MLDOCS_TEXT_EDIT_SUBJECT', 'Editer le tag sujet :');
define('_AM_MLDOCS_TEXT_EDIT_DESCRIPTION', 'Editer le tag description :');
define('_AM_MLDOCS_TEXT_EDIT', 'Editer');
define('_AM_MLDOCS_TEXT_DELETE', 'Supprimer');
define('_AM_MLDOCS_TEXT_SELECTUSER', 'S&eacute;lectionner le pseudo :');
define('_AM_MLDOCS_TEXT_DEPARTMENTS', 'D&eacute;partements :');
define('_AM_MLDOCS_TEXT_USER', 'Pseudo :');
define('_AM_MLDOCS_TEXT_ALL_DEPTS', 'Tous');
define('_AM_MLDOCS_TEXT_NO_DEPTS', 'Aucun');
define('_AM_MLDOCS_TEXT_MAKE_DEPTS', 'Vous devez ajouter un D&eacute;partement avant de cr&eacute;er une &eacute;quipe !');
define('_AM_MLDOCS_LINK_ADD_DEPT', 'Ajouter des D&eacute;partements');
define('_AM_MLDOCS_TEXT_TOP_CLOSERS', 'Top Cl&ocirc;tureurs');
define('_AM_MLDOCS_TEXT_WORST_CLOSERS', 'Pires Cl&ocirc;tureurs');
define('_AM_MLDOCS_TEXT_HIGH_PRIORITY', 'Ouvrir une archive &agrave; Haute priorit&eacute;');
define('_AM_MLDOCS_TEXT_NO_OWNER', 'Pas de propri&eacute;taire');
define('_AM_MLDOCS_TEXT_NO_DEPT', 'Pas de d&eacute;partement');
define('_AM_MLDOCS_TEXT_RESPONSE_TIME', 'Temps de r&eacute;ponse le plus rapide');
define('_AM_MLDOCS_TEXT_RESPONSE_TIME_SLOW', 'Temps de r&eacute;ponse le plus long');
define('_AM_MLDOCS_TEXT_PRIORITY', 'Priorit&eacute; :');
define('_AM_MLDOCS_TEXT_ELAPSED', 'Ecoul&eacute; :');
define('_AM_MLDOCS_TEXT_STATUS', 'Statuts :');
define('_AM_MLDOCS_TEXT_SUBJECT', 'Sujet :');
define('_AM_MLDOCS_TEXT_DEPARTMENT', 'D&eacute;partement :');
define('_AM_MLDOCS_TEXT_OWNER', 'Propri&eacute;taire :');
define('_AM_MLDOCS_TEXT_LAST_UPDATED', 'Derni&egrave;re MAJ :');
define('_AM_MLDOCS_TEXT_LOGGED_BY', 'Enregist&eacute; Par :');
define('_AM_MLDOCS_TEXT_EXISTING_ROLES', 'Roles existants');
define('_AM_MLDOCS_TEXT_NO_ROLES', 'Pas de roles trouv&eacute;s');
define('_AM_MLDOCS_TEXT_ROLES', 'Roles:');
define('_AM_MLDOCS_TEXT_CREATE_ROLE', 'Cr&eacute;er un nouveau Role');
define('_AM_MLDOCS_TEXT_EDIT_ROLE', 'Editer un Role');
define('_AM_MLDOCS_TEXT_NAME', 'Nom:');
define('_AM_MLDOCS_TEXT_PERMISSIONS', 'Permissions:');
define('_AM_MLDOCS_TEXT_SELECT_ALL', 'Selectionner Tous');
define('_AM_MLDOCS_TEXT_DEPT_PERMS', 'Personnaliser les Permissions du D&eacute;partement');
define('_AM_MLDOCS_TEXT_CUSTOMIZE', 'Personnaliser');
define('_AM_MLDOCS_TEXT_ACTIONS', 'Actions:');
define('_AM_MLDOCS_TEXT_ID', 'N&ordm;:');
define('_AM_MLDOCS_TEXT_LOOKUP_USER', 'R&eacute;solution d\'Utilisateur');
define('_AM_MLDOCS_TEXT_BY', 'De');
define('_AM_MLDOCS_TEXT_ASCENDING', 'Croissant');
define('_AM_MLDOCS_TEXT_DESCENDING', 'D&eacute;croissant');
define('_AM_MLDOCS_TEXT_SORT_BY', 'trier par :');
define('_AM_MLDOCS_TEXT_ORDER_BY', 'Ordonner par :');
define('_AM_MLDOCS_TEXT_NUMBER_PER_PAGE', 'Nombre par Page:');
define('_AM_MLDOCS_TEXT_SEARCH_MIME', 'Recherche de type mime');
define('_AM_MLDOCS_TEXT_SEARCH_BY', 'Recherche par :');
define('_AM_MLDOCS_TEXT_SEARCH_TEXT', 'Recherche de texte :');
define('_AM_MLDOCS_TEXT_GO_BACK_SEARCH', 'Retour &agrave; la recherche');
define('_AM_MLDOCS_TEXT_FIND_USERS', 'Trouver des utilisateurs');

define('_AM_MLDOCS_SEARCH_BEGINEGINDATE', 'Date de d&eacute;but :');  
define('_AM_MLDOCS_SEARCH_ENDDATE', 'Date de cloture :');

define('_AM_MLDOCS_TEXT_ADD_STATUS', 'Ajouter un &eacute;tat');
define('_AM_MLDOCS_TEXT_STATE', 'Etat :');
define('_AM_MLDOCS_TEXT_MANAGE_STATUSES', 'Gestion des Statuts');
define('_AM_MLDOCS_TEXT_EDIT_STATUS', 'Editer les Statuts');

define('_AM_MLDOCS_TEXT_NO_RECORDS', 'Aucun enregistrement trouv&eacute;');
define('_AM_MLDOCS_TEXT_MAIL_EVENTS', 'Ev&eacute;nements d\'emails');
define('_AM_MLDOCS_TEXT_MAILBOX', 'Boite aux lettres :');
define('_AM_MLDOCS_TEXT_EVENT_CLASS', 'Classe d\'&eacute;v&eacute;nement :');
define('_AM_MLDOCS_TEXT_TIME', 'Heure :');
define('_AM_MLDOCS_NO_EVENTS', 'aucun &eacute;v&eacute;nement trouv&eacute;');
define('_AM_MLDOCS_SEARCH_EVENTS', 'Recherche d\'&eacute;v&egrave;nements d\'Email');
define('_AM_MLDOCS_BUTTON_SEARCH', 'Recherche');
define('_AM_MLDOCS_BUTTON_TEST', 'Test');
define('_AM_MLDOCS_POSITION', 'Position');
define('_AM_MLDOCS_TEXT_MANAGE_FILES', 'Gestion des fichiers');
define('_AM_MLDOCS_TEXT_ARCHIVEID', 'N&ordm; de Archive:');
define('_AM_MLDOCS_TEXT_FILENAME', 'Nom de fichier :');
define('_AM_MLDOCS_TEXT_MIMETYPE', 'Type Mine :');
define('_AM_MLDOCS_TEXT_TOTAL_USED_SPACE', 'Total de l\'Espace utilis&eacute;');
define('_AM_MLDOCS_TEXT_SIZE', 'Taille :');
define('_AM_MLDOCS_TEXT_DELETE_RESOLVED', 'Effacer les attachements des archives r&eacute;solus ?');
define('_AM_MLDOCS_TEXT_NO_FILES', 'Aucun fichier trouv&eacute;');
define('_AM_MLDOCS_TEXT_RESOLVED_ATTACH', 'Attachements des r&eacute;solus :');
define('_AM_MLDOCS_TEXT_ALL_ATTACH', 'Tous les attachements :');
define('_AM_MLDOCS_TEXT_MAINTENANCE', 'Taches de Maintenance');
define('_AM_MLDOCS_TEXT_ORPHANED', 'Supprimer les enregistrements de travaux orphelins dans la table mldocs_staff ?');
define('_AM_MLDOCS_TEXT_DELETE_STAFF_DEPT', 'Supprimer le membre de l\&eacute;quipe du d&eacute;partement');
define('_AM_MLDOCS_MSG_NO_DEPTID', 'Erreur: aucun d&eacute;partement sp&eacute;cifi&eacute;.');
define('_AM_MLDOCS_MSG_NO_UID', 'Erreur: aucun utilisateur sp&eacute;cifi&eacute;.');
define('_AM_MLDOCS_MSG_REMOVE_STAFF_DEPT_ERR', 'Erreur: le membre de l\'&eacte;quipe n\'a pas &eacute;t&eacute; suprim&eacute;.');
define('_AM_MLDOCS_TEXT_DEFAULT', 'D&eacute;faut');
define('_AM_MLDOCS_TEXT_MAKE_DEFAULT_DEPT', 'Faire de ce d&eacute;partement celui par d&eacute;faut');
define('_AM_MLDOCS_TEXT_DEFAULT_DEPT', 'D&eacute;partement par d&eacute;faut');
define('_AM_MLDOCS_MSG_CHANGED_DEFAULT_DEPT', 'Mise &agrave; jour du d&eacute;partement par d&eacute;faut.');

// Mimetypes
define("_AM_MLDOCS_MIME_ID", "N&ordm;");
define("_AM_MLDOCS_MIME_EXT", "EXT");
define("_AM_MLDOCS_MIME_NAME", "Type d'Application");
define("_AM_MLDOCS_MIME_ADMIN", "Admin");
define("_AM_MLDOCS_MIME_USER", "Utilisateur");
// Mimetype Form
define("_AM_MLDOCS_MIME_CREATEF", "Cr&eacute;er type Mime");
define("_AM_MLDOCS_MIME_MODIFYF", "Modifier type Mime");
define("_AM_MLDOCS_MIME_EXTF", "Extension fichier :");
define("_AM_MLDOCS_MIME_NAMEF", "Type d'application :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Entrer l'application associ&eacute;e &agrave; cette extension.</span></div>");
define("_AM_MLDOCS_MIME_TYPEF", "Types Mime :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Entrer chaque type mime associ&eacute; avec l'extension. Chaque type mime doit &ecirc;tre s&eacute;par&eacute; avec un espace.</span></div>");
define("_AM_MLDOCS_MIME_ADMINF", "Types Mime autoris&eacute;s pour l'Admin");
define("_AM_MLDOCS_MIME_ADMINFINFO", "<b>Types Mime autoris&eacute;s pour l'envoi de fichier par l'admin :</b>");
define("_AM_MLDOCS_MIME_USERF", "Types Mime autoris&eacute;s pour les utilisateurs");
define("_AM_MLDOCS_MIME_USERFINFO", "<b>Types Mime autoris&eacute;s pour l'envoi de fichier par les utilisateurs :</b>");
define("_AM_MLDOCS_MIME_NOMIMEINFO", "Pas de type Mime s&eacute;lectionn&eacute;.");
define("_AM_MLDOCS_MIME_FINDMIMETYPE", "Trouver un nouveau type Mime :");
define("_AM_MLDOCS_MIME_EXTFIND", "Recherche Extension de fichier :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Entrer l'extension recherch&eacute;e.</span></div>");
define("_AM_MLDOCS_MIME_INFOTEXT", "<ul><li>Nouveau type Mime a cr&eacute;er, &eacute;diter ou supprimer via ce formulaire.</li> 
	<li>Rechercher de nouveaux types mime via un site web externe.</li> 
	<li>Voir les types mime pour envoi de fichier des admins et des utilisateurs.</li> 
	<li>Changer le statut d'envoi d'un type mime.</li></ul> 
	");

// Mimetype Buttons
define("_AM_MLDOCS_MIME_CREATE", "Cr&eacute;er");
define("_AM_MLDOCS_MIME_CLEAR", "RAZ");
define("_AM_MLDOCS_MIME_CANCEL", "Annuler");
define("_AM_MLDOCS_MIME_MODIFY", "Modifier");
define("_AM_MLDOCS_MIME_DELETE", "Supprimer");
define("_AM_MLDOCS_MIME_FINDIT", "R&eacute;cuperer Extension !");
// Mimetype Database
define("_AM_MLDOCS_MIME_DELETETHIS", "Supprimer le type mime s&eacute;lectionn&eacute; ?");
define("_AM_MLDOCS_MIME_MIMEDELETED", "type Mime %s effac&eacute;");
define("_AM_MLDOCS_MIME_CREATED", "Information du type mime Cr&eacute;&eacute;e");
define("_AM_MLDOCS_MIME_MODIFIED", "Information du type mime Modifi&eacute;e");

define("_AM_MLDOCS_MINDEX_ACTION", "Action");
define("_AM_MLDOCS_MINDEX_PAGE", "<b>Page :<b> ");

//image admin icon 
define("_AM_MLDOCS_ICO_EDIT","Editer cet &eacute;l&eacute;ment");
define("_AM_MLDOCS_ICO_DELETE","Supprimer cet &eacute;l&eacute;ment");
define("_AM_MLDOCS_ICO_ONLINE","En ligne");
define("_AM_MLDOCS_ICO_OFFLINE","Hors ligne");
define("_AM_MLDOCS_ICO_APPROVED","Approuv&eacute;");
define("_AM_MLDOCS_ICO_NOTAPPROVED","Non Approuv&eacute;");

define("_AM_MLDOCS_ICO_LINK","Lien relatif");
define("_AM_MLDOCS_ICO_URL","Ajouter une URL");
define("_AM_MLDOCS_ICO_ADD","Ajouter");
define("_AM_MLDOCS_ICO_APPROVE","Approuver");
define("_AM_MLDOCS_ICO_STATS","Stats");

define("_AM_MLDOCS_ICO_IGNORE","Ignorer");
define("_AM_MLDOCS_ICO_ACK","Rapport de rompus accept&eacute;");
define("_AM_MLDOCS_ICO_REPORT","Accepter le rapport des rompus?");
define("_AM_MLDOCS_ICO_CONFIRM","Rapport de rompu confirm&eacute;");
define("_AM_MLDOCS_ICO_CONBROKEN","Confirmer le rapport de rompus?");

define("_AM_MLDOCS_UPLOADFILE", "Fichier transmis correctement");
define('_AM_MLDOCS_TEXT_ARCHIVE_INFO', 'Information Archive');
define('_AM_MLDOCS_TEXT_OPEN_ARCHIVES', 'Archives ouvertes');
define('_AM_MLDOCS_TEXT_HOLD_ARCHIVES', 'Archives en cours');
define('_AM_MLDOCS_TEXT_CLOSED_ARCHIVES', 'Archives ferm&eacute;es');
define('_AM_MLDOCS_TEXT_TOTAL_ARCHIVES', 'Total Archives');

define('_AM_MLDOCS_TEXT_TEMPLATE_NAME', 'Nom du mod&egrave;le :');
define('_AM_MLDOCS_TEXT_DESCRIPTION', 'Description :');
define('_AM_MLDOCS_TEXT_PATH', 'Chemin :');
define('_AM_MLDOCS_TEXT_GENERAL_TAGS', 'Tags G&eacute;n&eacute;raux');
define('_AM_MLDOCS_TEXT_GENERAL_TAGS1', 'X_SITEURL - URL du site');
define('_AM_MLDOCS_TEXT_GENERAL_TAGS2', 'X_SITENAME - nom du site');
define('_AM_MLDOCS_TEXT_GENERAL_TAGS3', 'X_ADMINMAIL - adresse mail de l\'administrateur');
define('_AM_MLDOCS_TEXT_GENERAL_TAGS4', 'X_MODULE - nom du module');
define('_AM_MLDOCS_TEXT_GENERAL_TAGS5', 'X_MODULE_URL - lien vers la page index du module');
define('_AM_MLDOCS_TEXT_TAGS_NO_MODIFY', 'Ne pas modifier les autres tags que ceux list&eacute;s !');

define('_AM_MLDOCS_CURRENTVER', 'Version Courante: <span class="currentVer">%s</span>');
define('_AM_MLDOCS_DBVER', 'Version de Base de Donn&eacute;es : <span class="dbVer">%s</span>');
define('_AM_MLDOCS_DB_NOUPDATE', 'Votre Base de Donn&eacute;es est � jour. Aucune mis � jour n\'est n&eacute;c&eacute;ssaire.');
define('_AM_MLDOCS_DB_NEEDUPDATE', 'Votre Base de Donn&eacute;es est p&eacute;rim&eacute;e. Veuillez mettre &agrave; jour les tables de votre Base de Donn&eacute;es !');
define('_AM_MLDOCS_UPDATE_NOW', 'Mettre &agrave; jour maintenant !');
define('_AM_MLDOCS_DB_NEEDINSTALL', 'Votre Base de Donn&eacute;es n\'est pas synchronis&eacute;e avec la version install&eacute;e. Veuillez installer la m&ecirc;me version que celle de la Base de Donn&eacute;es');
define('_AM_MLDOCS_VERSION_ERR', 'Incapacit&eacute; de d&eacute;terminer la version pr&eacute;vue.');
define('_AM_MLDOCS_MSG_MODIFYTABLE', 'Table %s modifi&eacute;e');
define('_AM_MLDOCS_MSG_MODIFYTABLE_ERR', 'Erreur lors de la modification de la table %s');
define('_AM_MLDOCS_MSG_ADDTABLE', 'Table %s ajout&eacute;e');
define('_AM_MLDOCS_MSG_ADDTABLE_ERR', 'Erreur lors de l\'ajout de la table %s');
define('_AM_MLDOCS_MSG_UPDATESTAFF', 'Equipe #%s mis &agrave; jour');
define('_AM_MLDOCS_MSG_UPDATESTAFF_ERR', 'Erreur lors de la mise &agrave; jour de l\'&eacute;quipe #%s');
define('_AM_MLDOCS_UPDATE_DB', 'Mise &agrave; jour de la Base de Donn&eacute;es :');
define('_AM_MLDOCS_UPDATE_TO', 'Mise &agrave; jour vers la version %s:');
define('_AM_MLDOCS_UPDATE_OK', 'Mise &agrave; jour vers la version %s r&eacute;ussie');
define('_AM_MLDOCS_UPDATE_ERR', 'Erreurs lors de la mise &agrave; jour vers la version %s');
define('_AM_MLDOCS_MSG_UPD_PERMS', 'Permissions du Staff #%s ajout&eacute;s pour le d&eacute;partement #%s.');
define('_AM_MLDOCS_MSG_REMOVE_TABLE', 'la Table %s a &eacute;t&eacute; effac&eacute;e de votre base de donn&eacute;es.');
define('_AM_MLDOCS_MSG_GLOBAL_PERMS', 'l\'&eacute;quipe #%s dispose des permissions globales.');
define('_AM_MLDOCS_MSG_NOT_REMOVE_TABLE', 'Erreur: la table %s n\'a pas &eacute;t&eacute; effac&eacute;e de votre base de donn&eacute;es.');
define('_AM_MLDOCS_MSG_RENAME_TABLE', 'la Table %s a &eacte;t&eacute; renomm&eacute;e en %s.');
define('_AM_MLDOCS_MSG_RENAME_TABLE_ERR', 'Erreur: la table %s n\'a pas &eacute;t&eacute; renomm&eacute;e.');
define('_AM_MLDOCS_MSG_UPDATE_ROLE', 'le role de permissions %s a &eacute;t&eacute; mis � jour.');
define('_AM_MLDOCS_MSG_UPDATE_ROLE_ERR', 'Erreur: le role de permissions %s n\'a pas &eacte;t&eacute; mis &agrave; jour.');
define('_AM_MLDOCS_MSG_DEPT_DEL_CFRM', 'Etes vous certain de vouloir effacer ce D&eacute;partement #%u?');
define('_AM_MLDOCS_MSG_STAFF_DEL_CFRM', 'Etes vous certain de vouloir effacer cette &ecute;quipe #%u?');
define('_AM_MLDOCS_MSG_DEPT_MBOX_DEL_CFRM', 'Ets vous certain de d&eacute;sirer effacer cette boite aux lettres %s?');
define('_AM_MLDOCS_MSG_ADD_STATUS_ERR', 'Erreur: L\'&eacute;tat \'%s\' n\'a pas &eacute;t&eacute; ajout&eacute;.');
define('_AM_MLDOCS_MSG_ADD_STATUS', 'L\'&eacute;tat \'%s\' a &eacute;t&eacute; ajout&eacute;.');
define('_AM_MLDOCS_MSG_CHANGED_STATUS', 'Archives mis &agrave; jour avec le nouvel &eacute;tat.');
define('_AM_MLDOCS_MSG_CHANGED_STATUS_ERR', 'Erreur: &eacute;tat de l\'archive non mis &agrave; jour.');
define('_AM_MLDOCS_MSG_DELETE_RESOLVED', 'Etes vous certain de vouloir d&eacute;sirer supprimer les attachements des archives r&eacute;solues ?');
define('_AM_MLDOCS_MSG_DELETE_FILE', 'Etes vous certain de d&eacute;sirer effacer cette pi&egrave;ce attach&eacute;e ?');
define('_AM_MLDOCS_MSG_ADD_CONFIG_ERR', 'Erreur: la valeur de configuration pour le d&eacute;partement n\'a pa &eacute;t&eacute; sauvegard&eacute;e');
define('_AM_MLDOCS_MSG_UPDATE_CONFIG_ERR', 'Erreur: la valeur de configuration pour le d&eacute;partement n\'a pas &eacute;t&eacute; mis &agrave; jour');
define('_AM_MLDOCS_MSG_CLEAR_ORPHANED_ERR', 'Vos enregistrement de travaux ont &eacute;t&eacute; mis &agrave; jour.');
define('_AM_MLDOCS_MSG_UPDATE_SEARCH', 'La recherche sauvegard&eacute;e #%u a &eacute;t&eacute; mise &agrave; jour.');
define('_AM_MLDOCS_MSG_UPDATE_SEARCH_ERR', 'Erreur : la recherche sauvegard&eacute;e #%u n\'a pas &eacute;t&eacute; mise &agrave; jour.');

define('_AM_MLDOCS_TEXT_CONTRIB_INFO', 'Informations sur les contributeurs');
define('_AM_MLDOCS_TEXT_DEVELOPERS', 'D&eacute;velopeurs:');
define('_AM_MLDOCS_TEXT_TRANSLATORS', 'Traducteurs:');
define('_AM_MLDOCS_TEXT_TESTERS', 'Testeurs:');
define('_AM_MLDOCS_TEXT_DOCUMENTER', 'Documentateurs:');
define('_AM_MLDOCS_TEXT_CODE', 'Code:');
define('_AM_MLDOCS_TEXT_MODULE_DEVELOPMENT', 'Informtions de D&eacute;velopment du Module');
define('_AM_MLDOCS_TEXT_DEMO_SITE', 'Site de d&eacute;mo :');
define('_AM_MLDOCS_DEMO_SITE', 'Site de d&eacute;mo MLdocs');
define('_AM_MLDOCS_TEXT_OFFICIAL_SITE', 'Site de support officiel :');
define('_AM_MLDOCS_OFFICIAL_SITE', 'mldocs.org');
define('_AM_MLDOCS_TEXT_REPORT_BUG', 'Vous avez rencontr&eacute, un bug?');
define('_AM_MLDOCS_REPORT_BUG', 'Rapporter un Bug');
define('_AM_MLDOCS_TEXT_NEW_FEATURE', 'Vous d&eacute;sirez une fonction ?');
define('_AM_MLDOCS_NEW_FEATURE', 'Nouvelle fonction');
define('_AM_MLDOCS_TEXT_QUESTIONS', 'Questions ?');
define('_AM_MLDOCS_QUESTIONS', 'Poser une question aux d&eacute;veloppeurs du module');
define('_AM_MLDOCS_TEXT_RELEASE_DATE', 'Date de mise &agrave; disposition :');
define('_AM_MLDOCS_TEXT_DISCLAIMER', 'Avertissement');
define('_AM_MLDOCS_DISCLAIMER', 'Attention: Ce module est &agrave; l\'&eacute;tape b&eacute;ta. Il ne doit pas &ecirc;tre utilis&eacute; sur un site de production. Les d&eacute;veloppeurs ne peuvent &ecirc;tre tenu responsable en aucune sorte des troubles pouvant &ecirc;tre occasionn&eacute; par l\'utilisation de ce module.');
define('_AM_MLDOCS_TEXT_CHANGELOG', 'Journal de modifications');
define('_AM_MLDOCS_TEXT_EDIT_DEPT_PERMS', 'Visibilit&eacute, de d&eacute;partement :');

define('_AM_MLDOCS_PATH_CONFIG', "Configuration du r&eacute;pertoire du module");
define('_AM_MLDOCS_PATH_ARCHIVEATTACH', 'Emplacement de l\'Archive bureau');
define('_AM_MLDOCS_PATH_ARCHIVEPRODUCT', 'Emplacement de l\'Archive de production');
define('_AM_MLDOCS_PATH_ARCHIVE100DIR', 'Emplacement des 100 r&eacute;pertoires de production');
define('_AM_MLDOCS_PATH_ARCHIVEBANNETTE', 'Emplacement de la bannette utilisateur');
define('_AM_MLDOCS_PATH_CACHE_IMG', 'Emplacement du cache g&eacute;n&eacute;ration images &agrave; la vol&eacute;e');
define('_AM_MLDOCS_PATH_CONVERT', 'Emplacement des executables de conversion tiff2png');

define('_AM_MLDOCS_PATH_EMAILTPL', 'Mod&eacute;le d\'Email');
define('_AM_MLDOCS_TEXT_CREATETHEDIR', 'Cr&eacute;ation du dossier');
define('_AM_MLDOCS_TEXT_CREATE100DIR', 'Cr&eacute;ation des 100 r&eacute;pertoires');
define('_AM_MLDOCS_TEXT_SETPERM', 'Param&egrave;trages des Permissions');

define('_AM_MLDOCS_PATH_AVAILABLE', "<span style='font-weight: bold; color: green;'>Valide</span>");
define('_AM_MLDOCS_PATH_NOTAVAILABLE', "<span style='font-weight: bold; color: red;'>Non valide</span>");
define('_AM_MLDOCS_PATH_NOTWRITABLE', "<span style='font-weight: bold; color: red;'>Non ouvert en &eacute;criture</span>");
define('_AM_MLDOCS_PATH_CREATED', "Dossier cr&eacute;&eacute; avec succ&egrave;s");
define('_AM_MLDOCS_PATH_NOTCREATED', "Le dossier n\'a pas &eacute;t&eacute; cr&eacute;&eacute;");
define('_AM_MLDOCS_MESSAGE_ACTIVATE', 'Activer');
define('_AM_MLDOCS_MESSAGE_DEACTIVATE', 'D&eacute;sactiver');
define('_AM_MLDOCS_TEXT_ACTIVE', 'Actif');
define('_AM_MLDOCS_TEXT_INACTIVE', 'En-Activit&eacute;');
define('_AM_MLDOCS_TEXT_ACTIVITY', 'Activit&eacute;');
define('_AM_MLDOCS_DEPARTMENT_EDIT_SERVER', 'Mise &agrave; jour de la boite aux lettres du d&eacute;partement');

define('_AM_MLDOCS_TEXT_MANAGE_FIELDS', 'Gestion de champs personnalis&eacute;s');
define('_AM_MLDOCS_TEXT_MANAGE_FIELDLOTS', 'Gestion des champs du lot');
define('_AM_MLDOCS_ADD_FIELD', 'Ajouter un champ personnaliser');
define('_AM_MLDOCS_EDIT_FIELD', 'Modification du champ personnalis&eacute;');
define('_AM_MLDOCS_TEXT_NAME_DESC', 'Nom qui sera montr&eacute; &agrave; chacun lorsqu\'il remplira les informations de l\'archive.');
define('_AM_MLDOCS_TEXT_FIELDNAME', 'Nom du champs :');
define('_AM_MLDOCS_TEXT_FIELDNAME_DESC', 'Utilis&eacute; dans le code pour le nom de l\'&eacute;l&eacute;ment.');
define('_AM_MLDOCS_TEXT_DESCRIPTION_DESC', 'Tout texte pouvant clarifier la fonction du champ (La m&ecirc;me chose ce texte est donn&eacute; sur cette page.)');
define('_AM_MLDOCS_TEXT_CONTROLTYPE', 'Type de contr&ocirc;le :');
define('_AM_MLDOCS_TEXT_CONTROLTYPE_DESC', 'Le type de contr&ocirc;le HTML rendu dans le champs customis&eacute;.');
define('_AM_MLDOCS_TEXT_DEPT_DESC', 'Dans quel d&eacute;partement d&eacute;sirez vous montrer ce champ ?');
define('_AM_MLDOCS_TEXT_REQUIRED', 'Requis :');
define('_AM_MLDOCS_TEXT_REQUIRED_DESC', 'Ce champs devra t\'il &ecirc;tre requis &agrave; l\'ajout de l\'archive ?');
define('_AM_MLDOCS_TEXT_DATATYPE', 'Type de donn&eacute;es :');
define('_AM_MLDOCS_TEXT_DATATYPE_DESC', 'De quel type de donn&eacute;es est ce champ ?');
define('_AM_MLDOCS_TEXT_VALIDATION', 'Validation:');
define('_AM_MLDOCS_TEXT_VALIDATION_DESC', 'Utilisatez une expression r&eacute;guliaire afin de valider les donn&eacute;es entr&eacute;es par les utilisateurs.');
define('_AM_MLDOCS_TEXT_WEIGHT', 'Poid :');
define('_AM_MLDOCS_TEXT_WEIGHT_DESC', 'Utilisation des champs customis&eacute;s de mani&egrave;re ordonn&eacute;.');
define('_AM_MLDOCS_TEXT_FIELDVALUES', 'Liste des valeurs de champs :');
define('_AM_MLDOCS_TEXT_FIELDVALUES_DESC', '*** Placeholder: requiert une description texte');
define('_AM_MLDOCS_TEXT_DEFAULTVALUE', 'Valeur par d&eacute;faut :');
define('_AM_MLDOCS_TEXT_DEFAULTVALUE_DESC', 'Valeur par d&eacute;faut propos&eacute;e dans le champs customis&eacute;.<br />Pour un champ customis&eacute; qui aurait plus d\'une valeur, utilisez la cl&eacute; de l\'&eacute;l&eacute;ment.');
define('_AM_MLDOCS_TEXT_LENGTH', 'Longueur :');
define('_AM_MLDOCS_TEXT_LENGTH_DESC', 'Longueur du champ customis&eacute;.');

define('_AM_MLDOCS_TEXT_REGEX_CUSTOM', 'Personnalisation');
define('_AM_MLDOCS_TEXT_REGEX_USPHONE', 'Num&eacute;ro de t&eacute;l&eacute;phone');
define('_AM_MLDOCS_TEXT_REGEX_USZIP', 'code postal');
define('_AM_MLDOCS_TEXT_REGEX_EMAIL', 'Adresse Email');

define('_MLDOCS_CONTROL_DESC_TXTBOX', 'Bo&icirc;te texte');
define('_MLDOCS_CONTROL_DESC_TXTAREA', 'Bo&icirc;te texte multi-lignes');
define('_MLDOCS_CONTROL_DESC_SELECT', 'Bo&icirc;te de s&eacute;lection');
define('_MLDOCS_CONTROL_DESC_MULTISELECT', 'Bo&icirc;te de multi s&eacute;lection');
define('_MLDOCS_CONTROL_DESC_YESNO', 'Oui / Non');
define('_MLDOCS_CONTROL_DESC_CHECKBOX', 'Bo&icirc;te &agrave; cocher');
define('_MLDOCS_CONTROL_DESC_RADIOBOX', 'Bo&icirc;te radio');
define('_MLDOCS_CONTROL_DESC_DATETIME', 'Date+Heure');
define('_MLDOCS_CONTROL_DESC_FILE', 'Fichier');

define('_MLDOCS_DATATYPE_TEXT', 'Texte');
define('_MLDOCS_DATATYPE_NUMBER_INT', 'Nombre (Entier)');
define('_MLDOCS_DATATYPE_NUMBER_DEC', 'Nombre (D&eacute;cimal)');

define('_AM_MLDOCS_MSG_FIELD_DEL_CFRM', 'Etes vous certain de d&eacute;sirer effacer ce champs #%u?');
define('_AM_MLDOCS_VALID_ERR_CONTROLTYPE', 'Type de contr&ocirc;le s&eacute;lectionn&eacute; invalide.');
define('_AM_MLDOCS_TEXT_SESSION_RESET', 'Nettoyer les erreurs');
define('_AM_MLDOCS_VALID_ERR_NAME', 'Nom non param&eacute;tr&eacute;');
define('_AM_MLDOCS_VALID_ERR_FIELDNAME', 'Nom de champ non param&eacute;tr&eacute;');
define('_AM_MLDOCS_VALID_ERR_FIELDNAME_UNIQUE', 'le nom de champ doit &ecirc;tre unique');
define('_AM_MLDOCS_VALID_ERR_LENGTH', 'la longueur doit &ecirc;tre un nombre dont la valeur est comprise entre %u et %u');
define('_AM_MLDOCS_VALID_ERR_DEFAULTVALUE', 'la valeur par d&eacute;faut doit &ecicrc;tre dans la liste d\'options');
define('_AM_MLDOCS_VALID_ERR_VALUE_LENGTH', 'La valeur "%s" est plus grande que la valeur du champ, %u caract&egrave;res');
define('_AM_MLDOCS_VALID_ERR_VALUE', 'Vous devez fournir un param&egrage;trage de valeur pour ce champ');
define('_AM_MLDOCS_MSG_FIELD_ADD_OK', 'Champ ajout&eacute; avec succ&egrave;s');
define('_AM_MLDOCS_MSG_FIELD_ADD_ERR', 'des erreurs sont apparues &agrave; l\'ajout du champ');
define('_AM_MLDOCS_MSG_FIELD_UPD_OK', 'Champ mis &agrave; jour avec succ&egrave;s');
define('_AM_MLDOCS_MSG_FIELD_UPD_ERR', 'Des erreurs sont apparues &agrave; la mise &agrave; jour du champ');
define('_AM_MLDOCS_MSG_SUBMISSION_ERR', 'Votre soumission contient des erreurs.  Veuillez les corriger et soumettre de nouveau');
define('_AM_MLDOCS_MSG_NEED_UID', 'Erreur: vous devez s&eacute;lectionner un utilisateur en premier.');

define('_AM_MLDOCS_TEXT_DEFAULT_STATUS', 'Statuts par d&eacute;faut');

define('_AM_MLDOCS_VALID_ERR_MIME_EXT', 'Extension de fichier non param&egrave;tr&eacute;e');
define('_AM_MLDOCS_VALID_ERR_MIME_NAME', 'Application Type/Nom non param&egrave;tr&eacute;s');
define('_AM_MLDOCS_VALID_ERR_MIME_TYPES', 'Types Mine non param&egrave;tr&eacute;');

define('_AM_MLDOCS_TEXT_NOTIF_NAME', 'Nom de Notification');
define('_AM_MLDOCS_TEXT_SUBSCRIBED_MEMBERS', 'Membres souscrits');

define('_AM_MLDOCS_NOTIF_NEW_ARCHIVE', 'Cr&eacute;ation de l\'archive');
define('_AM_MLDOCS_NOTIF_DEL_ARCHIVE', 'Effacement de l\'archive');
define('_AM_MLDOCS_NOTIF_MOD_ARCHIVE', 'Modification de l\'archive');
define('_AM_MLDOCS_NOTIF_NEW_RESPONSE', 'Ajout de r&eacute;ponse');
define('_AM_MLDOCS_NOTIF_MOD_RESPONSE', 'Modification de r&eacute;ponse');
define('_AM_MLDOCS_NOTIF_MOD_STATUS', 'Modification d\'&eacute;tat');
define('_AM_MLDOCS_NOTIF_MOD_PRIORITY', 'Modification de priorit&eacute;');
define('_AM_MLDOCS_NOTIF_MOD_OWNER', 'Modification de propri&eacute;taire');
define('_AM_MLDOCS_NOTIF_CLOSE_ARCHIVE', 'Cloture de l\'archive');
define('_AM_MLDOCS_NOTIF_MERGE_ARCHIVE', 'Fusion de l\'archives');

//Used for Manage Notifications page
define('_AM_MLDOCS_STAFF_SETTING1', 'Toutes les &eacute;quipes');
define('_AM_MLDOCS_STAFF_SETTING2', 'Equipe du d&eacute;partement');
define('_AM_MLDOCS_STAFF_SETTING3', 'Propri&eacute;taire de l\'archive');
define('_AM_MLDOCS_STAFF_SETTING4', 'Notification d&eacute;sactiv&eacute;e');
define('_AM_MLDOCS_USER_SETTING1', 'Notification activ&eacute;');
define('_AM_MLDOCS_USER_SETTING2', 'Notification d&eacute;sactiv&eacute;e');
define('_AM_MLDOCS_TEXT_SUBMITTER', '&eacute;m&eacute;teur');
define('_AM_MLDOCS_TEXT_NOTIF_STAFF', 'Notification de l\'&eacute;quipe');
define('_AM_MLDOCS_TEXT_NOTIF_USER', 'Notification de l\'utilisateur');
define('_AM_MLDOCS_TEXT_ASSOC_TPL', 'Mod&egrave;les associ&eacute;s');
define('_AM_MLDOCS_TEXT_AND', 'et');
define('_AM_MLDOCS_TEXT_SELECT_DEPTUSERDEF', 'Affecter un d&eacute;partement � l\'utilisateur');
define('_AM_MLDOCS_TEXT_SELECT_AUCUN', 'aucun');
?>
