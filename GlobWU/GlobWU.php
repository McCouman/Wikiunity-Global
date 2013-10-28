<?php
//********************Info zur Erweiterung***************************************************************//
/* Erweiterung zum Einf�gen von CSS & JS Daten.                                                          */
/* F�r ein schnelleres Backup und leitungs�rmere DB- Abfragen.                                           */
/* Diese Erweiterung macht genaue einbindungen von Grafischen Designs genauso m�glich,                   */
/* wie das globale Einbinden der Standards, wie Button oder Klappmen�s.                                  */
/*                                                                                                       */
/* Alle Versionen oder Backups, wie auch �nderunegen bitte im:                                           */
/* => http://developing.wikiunity.com                                                                    */
/* Zur Informationellen �bersicht, bitte IMMER f�r alle Staffs festhalten und protokolieren!!!           */
/*                                                                                                       */
/* Produced by Michael McCouman jr.                                                                      */
//********************HOME*******************************************************************************//

$wgExtensionCredits['parserhook'][] = array(
        'name' => 'GlobWU 3.0',
        'url' => 'http://wikiunity.com',
        'author' => '[http://de.community.wikiunity.com/wiki/User:McCouman <span style="color:#000;">Michael McCouman jr.</span>]',
        'description' => 'GlobWU stellt alle Standard-Stylesheets f&uuml;r Wikiunity-Projekte bereit.<br> Die hilft vor allem  dabei, schnellere Backups der globalen Wikis zu verwalten. ',
		'version' => 'version 3.1a',
);


//********************HOME********************************************************************************/
/* Dies Einstellungen sind f�r die folgenden Seiten als Standard eingebunden und erzeugen u.a.           */
/* Einbindungen durch CSS und JavaScripts, um Logos, Klappmen�s, Seitendesigns und Standard Buttons      */
/* in den Homewikis fest zu legen. Dies spart DB- Eintr�ge und ist somit nicht f�r Nutzer einsehbar.     */
/*                                                                                                       */
//************** DE Home **/
/* Hier findest du alle Einbindungen die f�r das DE Homewikis (www.de.wikiunity.com) relevant sind.      */
#require_once("$IP/extensions/GlobWU/HomePack/GlobWU.home-de.php" );  
/*                                                                                                       */
//************** ENG Home */
/* Hier findest du alle Einbindungen die f�r das ENG Homewikis (www.wikiunity.com) relevant sind.        */
#require_once("$IP/extensions/GlobWU/HomePack/GlobWU.home-eng.php" );  
/*                                                                                                       */
//********************HOME********************************************************************************/


//********************GLOBAL******************************************************************************/
/* Dies Einstellungen sind f�r die folgenden Seiten als Standard eingebunden und erzeugen u.a.           */
/* Einbindungen durch CSS und JavaScripts, um Logos, Klappmen�s, Seitendesigns und Standard Buttons      */
/* um diese in allen Wikis von Wikiunity fest zu legen. Es dient als Packet und kan durch die MWSeiten   */
/* ge�ndert werden. "Beispiel:(MediaWiki:Common.js/css)"                                                 */
/*                                                                                                       */
//************** DE Global **//
/* Hier findest du alle Einbindungen die f�r die DE Wikiunity gelten Bsp.:(de.gutentag.wikiunity.com)    */
#require_once("$IP/extensions/GlobWU/GlobalPack/GlobWU.global-de.php" );   
/*                                                                                                       */
//************** ENG Global *//
/* Hier findest du alle Einbindungen die f�r die ENG Wikiunity gelten Bsp.:(config.wikiunity.com)        */
#require_once("$IP/extensions/GlobWU/GlobalPack/GlobWU.global-eng.php" ); 
/*                                                                                                       */
//********************GLOBAL******************************************************************************/