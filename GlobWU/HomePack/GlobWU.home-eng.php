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
//*******************************************************************************************************//
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'GlobWU 1.2',
        'url' => 'http://wikiunity.com',
        'author' => '[[User:McCouman|Michael McCouman jr.]]',
        'description' => 'GlobWU stellt alle Standards sowie Einstellungen f�r Host-Wikis bereit.<br> Die hilft vor allem  dabei, schnellere Backups der globalen Wikis zu verwalten. ',
		'version' => 'Version 1.1a ',
);
//********************HOME********************************************************************************/
/* Dies Einstellungen sind f�r die folgenden Seiten als Standard eingebunden und erzeugen u.a.           */
/* Einbindungen durch CSS und JavaScripts, um Logos, Klappmen�s, Seitendesigns und Standard Buttons      */
/* in den Homewikis fest zu legen. Dies spart DB- Eintr�ge und ist somit nicht f�r Nutzer einsehbar.     */
/*                                                                                                       */
//************** ENG Home */
/* Hier findest du alle Einbindungen die f�r das ENG Homewikis (www.wikiunity.com) relevant sind.        */
/*                                                                                                       */
/* CSS f�r ENG Buttons  */
require_once("$IP/extensions/GlobWU/HomePack/eng/GWU-Buttons.eng.php" ); 

/* CSS f�r ENG Wikilogo */
require_once("$IP/extensions/GlobWU/HomePack/eng/GWU-Logo.eng.php" ); 

/* CSS f�r ENG Seiten */
require_once("$IP/extensions/GlobWU/HomePack/eng/GWU-Sites.eng.php" );
/*                                                                                                       */
/*                                                                                                       */
//********************HOME********************************************************************************/


//********************GLOBAL******************************************************************************/
/* Dies Einstellungen sind f�r die folgenden Seiten als Standard eingebunden und erzeugen u.a.           */
/* Einbindungen durch CSS und JavaScripts, um Logos, Klappmen�s, Seitendesigns und Standard Buttons      */
/* um diese in allen Wikis von Wikiunity fest zu legen. Es dient als Packet und kan durch die MWSeiten   */
/* ge�ndert werden. "Beispiel:(MediaWiki:Common.js/css)"                                                 */
/*                                                                                                       */
//************** ENG Global *//
/* Hier findest du alle Einbindungen die f�r die ENG Wikiunity gelten Bsp.:(config.wikiunity.com)        */
/*                                                                                                       */
/* CSS f�r ENG Buttons  */
#require_once("$IP/extensions/GlobWU/GlobalPack/eng/GWU-Buttons.eng.php" ); 

/* CSS f�r ENG Wikilogo */
#require_once("$IP/extensions/GlobWU/GlobalPack/eng/GWU-Logo.eng.php" ); 

/* CSS f�r ENG Seiten */
#require_once("$IP/extensions/GlobWU/GlobalPack/eng/GWU-Sites.eng.php" );

/*                                                                                                       */
//********************GLOBAL******************************************************************************/