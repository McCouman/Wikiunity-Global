<?php
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'GlobWU 1.0',
        'url' => 'http://wikiunity.com',
        'author' => '[[User:McCouman|Michael McCouman jr.]]',
        'description' => 'GlobWU stellt alle Standards sowie Einstellungen f�r Host-Wikis bereit.<br> Die hilft vor allem  dabei, schnellere Backups der globalen Wikis zu verwalten. ',
		'version' => 'version 1.0',
);

//Einbindung der Wikiunity Logos (wu-logo-eng.css)
$wgHooks['BeforePageDisplay'][] = 'wfLogoStaffWUCSS';

function wfLogoStaffWUCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wu-logo-staff.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Logo/wu-logo-staff.css">
 ');
 return true;
}