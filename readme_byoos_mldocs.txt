BYOOS solutions  entreprise informatique en logiciels libres S.S.L.L
05000  GAP  le 10 f�vrier 2007  http://www.byoos.fr  contact@byoos.fr ou gabybob@yahoo.fr


avant toutes choses, remerciements � Skalpa, Christian, pour l'aide apport�e au cours de ce projet
=> http://frxoops.org/    --  http://xoops.org  --  http://www.xoopspro.com/modules/news/

remerciements � eric JUDEN ainsi qu'� l'�quipe de 3dev (http://demo.3dev.org) pour le travail fourni sur xHelp


serveur web appache 2.0 et sup�rieur, php 4.2 php5 et sup�rieur, javascript 1.2, mysql 4 et 5 support�

test� sous UBUNTU 6.06 + apache, php5 et mysql5 de la distribution => http://www.ubuntu-fr.org/
test� sous xampp 1.5.4a sous linux et windows XP => http://www.apachefriends.org/fr/xampp.html

MLdocs est une gestion �lectronique de document bas�e sur xHelp 0.77.

OBJET: Classement centralis� de la document de l'entreprise, (vue num�ris�e, production de documents bureautique format Open Office, MS office, pdf) 

le principe est de cr�er l'archive dans un d�partement ou service (version initiale)
� cette archive il est possible de joindre des fichiers (vues num�ris�es et/ou documents) et de les visualiser ensuite � l'aide des plugins

LES PLUS => MLdocs se diff�rencie d'un simple gestionnaire d'upload par 
la gestion de la bannette comme r�ceptacle de vue num�ris�es ou de d�p�t de documents � production informatique.
le contenu de cette bannette est soit  sur le r�seau INTRANET soit sur le r�seau EXTRANET (option FTP)
� chaque indexation le contenu est index� dans MLdocs, tranf�r� sur le serveur de production et la bannette vid�e automatiquement.
Il est possible d'ajouter � ce d�p�t de vue(s) annexe(s) par le chargement multi-fichiers AJAX


Caract�ristiques de la version de base  v0.86

- indexation de une ou plusieurs vue(s) num�ris�es, documents *.opt, *.pdf, *.doc, *.xls,  ....
- cr�ation d'index personnalis�s
- recherche par mots cl�s
- classement par service (d�partement)
- visibilit� de un ou plusieurs d�partement(s)
- gestion des droits de l'utilisateur ou r�les
- gestion de la priorit�
- gestion des r�ponses (mini workflow) une archive <=> une r�ponse
- classement centralis� des archives et rayonnage informatique
- plugin  explore (application PHP permettant la visualisation des vues num�ris�es et/ou documents)
version actuelle impl�ment�e => 7.15, site Internet => http://www.jbc-explorer.com
- plugin  viewer (comparable � une galerie image) visualise les formats d'images  jpg, gif,bmp, png.
NOTA: le format d'image tiff n'est pas g�r� � l'affichage, celui ci est convertie au format png gr�ce 
au fichier binaire tiff2png http://www.libpng.org/pub/png/apps/tiff2png.html


version �tendue

- gestion de l'indexation avec code � barres
- int�gration OCR
- recherche plein text
- sauvegarde automatis�e
- scellement num�rique
- gestion de la version des documents
- reprise des archives (ajout, supression, modification)
- d�partement par d�faut pour l'utilisateur connect�

Installation

MLdocs respecte la proc�dure d'installation des modules XOOPS2.x

� minima :

une fois connect� comme admin xoops

cr�er un d�partement de base ex: BYOOS
- cr�er un compte au nom admin
- l'ajouter comme utilisateur (staff) de la GED
- affecter le r�le de gestionnaire d'archives (ne pas oublier de lui donner la visibilit� du d�partement BYOOS

dans le menu admin-> pr�f�rences indiquer le chemin des r�pertoires ou seront copi�s les vues num�ris�es ou documents.
un r�pertoire cgi-bin est pr�sent dans la racine pour la conversion du format tiff en format png
deux fichier binaires sont disponibles un pour les plateformes linux/unix  l'autre pour windows

pour certains h�bergeur le r�pertoire cgi-bin est fixe, il sera n�cessaire de modifier le script /xoops2016/modules/mldocs/fonctions.php
attention aux ressources consomm�es par le convertisseur tiff2png, votre h�gergeur peut vous envoyer une alerte de surchage CPU????
l'id�al  �tant bien s�r le serveur d�di�  ou l'Intranet.

Par ailleurs dans votre fichier php.ini, il est conseill� de placer "Resource Limits"=>memory_limit =  32Mo 
afin d'�viter la page blanche li�e � l'occupation de la m�moire par la classe xoopsObject (les listes sont limit�es � 30 lignes, la navgation suivante de fait par pas de 30 maxi.

dans cette version la modification d'une archive n'est pas permise  (option permettant d'ajouter ou de retirer des vues au rayonnage d'archives)

option d'affectation d'un d�partement par d�faut pour un utilisateur (fonction du username de connexion)

la version actuelle v0.86  est beta et utilis�e en production depuis avril 2006, 
en fonction des retours d'information que nous aurons nous passerons en version v1.0 stable

Mldocs est le d�but d'une suite logiciel qui aura pour objectif de fournir les outils de traitement de l'information 
sur les bases du logiciel libre diffus� sous licence GPL ou Cecill 
=> http://www.cecill.info/licences.fr.html
=> http://fsffrance.org/gpl/gpl-fr.fr.html


bonne utilisation et merci d'utiliser le forum de byoos.fr pour les remont�es d'informations
Gabriel
