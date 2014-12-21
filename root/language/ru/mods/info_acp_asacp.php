<?php
/**
*
* @package Anti-Spam ACP
* @copyright (c) 2008 EXreaction
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'ANTISPAM'						=> 'Анти-спам',
	'ASACP_FLAG_LIST'				=> 'Список подозрительных пользователей',
	'ASACP_FLAG_LOG'				=> 'Лог пометок',
	'ASACP_IP_SEARCH'				=> 'Поиск IP',
	'ASACP_PROFILE_FIELDS'			=> 'Поля профиля',
	'ASACP_SETTINGS'				=> 'Настройки Anti-Spam ACP',
	'ASACP_SPAM_LOG'				=> 'Лог спама',
	'ASACP_SPAM_WORDS'				=> 'Стоп-лист спама',

	'LOG_ADDED_POST'				=> 'Добавил сообщение',
	'LOG_ALTERED_PROFILE'			=> 'Изменил информацию в профиле',
	'LOG_ALTERED_SIGNATURE'			=> 'Изменил подпись',
	'LOG_ASACP_SETTINGS'			=> 'Обновил настроийки Anti-Spam ACP',
	'LOG_CLEAR_FLAG_LOG'			=> 'Очистил лог пометок',
	'LOG_CLEAR_SPAM_LOG'			=> 'Очистил лог спама',
	'LOG_EDITED_POST'				=> 'Отредактировал сообщение',
	'LOG_INCORRECT_CODE'			=> 'Ввёл неверный код подтверждения.',
	'LOG_INCORRECT_CODE_DATA'		=> 'Показанный код: "%s"<br />Введённый код: "%s"',
	'LOG_USER_SFS_ACTIVATION'		=> '%s зарегистрировался и был помечен системой Stop Forum Spam как потенциальный спамер.',
	'LOG_SENT_PM'					=> 'Отправил ЛС<br />Адресаты: %s',
	'LOG_SPAM_PM_DENIED'			=> 'Личное сообщение было помечено как спам и заблокировано.<br />Тема личного сообщения:<br />%s<br /><br />Текст личного сообщения:<br />%s',
	'LOG_SPAM_PM_DENIED_AKISMET'	=> 'Личное сообщение было помечено системой Akismet как спам и заблокировано.<br />Тема личного сообщения:<br />%s<br /><br />Текст личного сообщения:<br />%s',
	'LOG_SPAM_POST_DENIED'			=> 'Сообщение было помечено как спам и заблокировано.<br />Тема сообщения:<br />%s<br /><br />Текст сообщения:<br />%s',
	'LOG_SPAM_POST_DENIED_AKISMET'	=> 'Форумное сообщение было помечено системой Akismet как спам и заблокировано.<br />Тема сообщения:<br />%s<br /><br />Текст сообщения:<br />%s',
	'LOG_SPAM_PROFILE_DENIED'		=> 'Одно или несколько заполненных полей профиля были помечены как спам.<br />Отправленная информация:<br /><br />%s',
	'LOG_SPAM_SIGNATURE_DENIED'		=> 'Подпись была помечена как спам.<br />Подпись:<br />%s',
	'LOG_SPAM_USER_DENIED_SFS'		=> 'Пользователю запрещена регистрация согласно настройкам Stop Forum Spam.<br />Запрос был:<br />%s',
	'LOG_USER_FLAGGED'				=> '%s помечен как подозрительный.',
	'LOG_USER_UNFLAGGED'			=> 'Пометка пользователя %s была удалена.',

	'acl_a_asacp'					=> array(
		'lang'						=> 'Может управлять Anti-Spam ACP',
		'cat'						=> 'настройки',
	),

	'acl_m_asacp_ban'				=> array(
		'lang'						=> 'Может блокировать пользователей через "One Click Ban"<br /><em>Проверьте настройки .MODS-&gt;Anti-Spam ACP.</em>',
		'cat'						=> 'разное',
	),

	'acl_m_asacp_ip_search'			=> array(
		'lang'						=> 'Может использовать поиск IP',
		'cat'						=> 'разное',
	),

	'acl_a_asacp_profile_fields'	=> array(
		'lang'						=> 'Может изменять настройки полей профиля',
		'cat'						=> 'настройки',
	),

	'acl_m_asacp_spam_log'			=> array(
		'lang'						=> 'Может просматривать лог спама',
		'cat'						=> 'разное',
	),

	'acl_a_asacp_spam_words'		=> array(
		'lang'						=> 'Может управлять списком спам-слов',
		'cat'						=> 'настройки',
	),

	'acl_m_asacp_user_flag'			=> array(
		'lang'						=> 'Может помечать подозрительных пользователей, просматривать лог пометок и просматривать список помеченных пользователей',
		'cat'						=> 'разное',
	),

));

?>
