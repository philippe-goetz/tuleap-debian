<?php
/*
 * Test ID: IM_05
 * Test description: Permet la création d'un muc room et d'un shared group un projet qui n'est pas sinchronisé avec le service IM'.
 * Pre-conditions:
 * 		1 - Jabbex doit être bien configurer pour dialoguer avec le serveur openfire
 * 		2 - le tableau des paramétres $params doit contenir au moins le group_id du 
 * 			projet qui mappe le salon de discution et aussi le login (ici zdiallo) d'un utilisateur qui existe dans la base de données codex.
 * 		3 - l'identification ,$id,du Plugin IM doit être correcte il 10 ici
 * 		
 * 
 * Post-conditions:
 * 		1 - zdiallo va être ajouter au muc room du projet dont le group_id=252 .
 */
 
 ini_set('include_path',"/home/zdiallo/CodeX/dev_server/codex/src/www/include:/home/zdiallo/CodeX/dev_server/codex/src:.");
 require_once('pre.php');
 require_once("../include/IMPlugin.class.php");
 $id=10;
 
 $params=array("group_id"=>252,"user_unix_name"=>'zdiallo');
 $plugin=new IMPlugin($id,IM_DEBUG_ON);
 echo "\n\n\nBegin\n\n\n##########################################################################\n\n\n\n\n\n";
 
 $plugin->im_process_muc_add_member ($params);

 echo 'Message : '.$plugin->get_last_member_of_once_muc_room ().'';
 
 echo "\n\n\n\n\n\nEnd\n\n\n ###############################################################################\n\n\n ";

?>