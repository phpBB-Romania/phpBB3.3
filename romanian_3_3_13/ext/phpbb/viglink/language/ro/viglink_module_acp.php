<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
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
	'ACP_VIGLINK_SETTINGS'			=> 'Setări VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink este un serviciu terță-parte care monetizează discret legăturile postate de utilizatorii forumului tău, fără a modifica experiența utilizatorului. Când utilizatorii dau clic pe legăturile externe către produse sau servicii și cumpără ceva, comercianții plătesc VigLink un comision, din care o parte este donată proiectului phpBB. Alegând să activați VigLink și să donați veniturile către proiectul phpBB, sprijiniți organizația noastră open-source și asigurați securitatea noastră financiară pe termen lung.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Puteți schimba aceste setări oricând în panoul “<a href="%1$s">Setări VigLink</a>”',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'După ce trimiteți opțiunile preferate mai jos, făcând clic pe butonul Trimite, nu veți mai fi redirecționați către această pagină.',
	'ACP_VIGLINK_ENABLE'			=> 'Activează VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Activează serviciile VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Revendicați câștigurile proprii (opțional)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Vă puteți revendica propriile câștiguri înscriindu-vă pentru un cont VigLink Convert.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Serviciile VigLink au fost dezactivate de către phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Revendicați-vă câștigurile',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Puteți revendica câștigurile forumului dumneavoastră din legăturile monetizate de VigLink, în loc să donați câștigurile către proiectul phpBB. Pentru a gestiona setările contului, înscrieți-vă pentru un cont “VigLink Convert” făcând clic pe “Convert account”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Conversie cont',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Nu s-a putut obține legătura pentru conversie a contului VigLink.',
));
