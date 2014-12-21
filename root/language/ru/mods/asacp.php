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
	'ASACP_AKISMET'			=> 'Akismet',
	'ASACP_AKISMET_SUBMIT'	=> 'Отправить это сообщение в Akismet (только спам)',
	'ASACP_BAN'				=> 'One Click Ban',
	'ASACP_BAN_ACTIONS'		=> 'Будет выполнено следующее действие: %s',
	'ASACP_BAN_COMPLETE'	=> 'Вы успешно заблокировали пользователя.<br /><br /><a href="%s">Нажмите здесь, чтобы вернуться в профиль пользователя.</a>',
	'ASACP_BAN_CONFIRM'		=> 'Вы уверены, что хотите заблокировать пользователя %s? <strong class="error">Это действие необратимо!</strong>',
	'ASACP_BAN_REASON'		=> 'Причина блокировки доступа',
	'ASACP_BAN_REASON_EXPLAIN'	=> 'Пожалуйста, укажите причину блокировки (для внутреннего пользования).',
	'ASACP_BAN_REASON_SHOWN_TO_USER'			=> 'Причина блокировки, показываемая пользователю',
	'ASACP_BAN_REASON_SHOWN_TO_USER_EXPLAIN'	=> 'Сообщение, введённое в это поле, будет показано заблокированному пользователю.',
	'ASACP_CREDITS'			=> '',
	'ASACP_EVIDENCE_SFS'	=> 'Если отправляете информацию на Stop Forum Spam, напишите здесь доказательства спама.<br />(не более 8.000 символов)',

	'FOUNDER_ONLY'			=> 'Для доступа к этой странице Вы должны быть основателем форума.',

	'IP_SEARCH'				=> 'Поиск IP',

	'MORE'					=> 'Ещё',

	'PROFILE_SPAM_DENIED'	=> 'Одно или несколько заполненных полей были помечены как спам.',

	'REMOVE_ASACP'			=> 'Удалить Anti-Spam ACP',
	'REMOVE_ASACP_CONFIRM'	=> 'Вы уверены, что хотите удалить изменения в база данных, сделанные плагином Anti-Spam ACP?<br /><br />Перед этим убедитесь, что удалены все изменения в файлах, иначе записи в базе данных будут автоматически добавлены снова.',

	'SFS_SUBMIT'			=> 'Отправить информацию из профиля на <a href="http://www.stopforumspam.com/">Stop Forum Spam</a><br /><br /><strong>Note that submitting users for something other than spam is not allowed and can result in a ban from Stop Forum Spam.</strong>',
	'SIGNATURE_DISABLED'	=> 'Вам не разрешено использовать подпись.',
	'SPAM_DENIED'			=> 'Это сообщение было помечено как спам и заблокировано.',
	'STOP_FORUM_SPAM'		=> 'Stop Forum Spam',

	'USER_FLAG'				=> 'Пометить как подозрительного',
	'USER_FLAGGED'			=> 'Подозрительный',
	'USER_FLAG_CONFIRM'		=> 'Вы уверены, что хотите пометить пользователя %s как подозрительного?',
	'USER_FLAG_NEW'			=> 'Новые пометки записаны в лог',
	'USER_FLAG_SUCCESS'		=> 'Пользователь был успешно помечен как подозрительный.',
	'USER_UNFLAG'			=> 'Снять пометку',
	'USER_UNFLAG_CONFIRM'	=> 'Вы уверены, что хотите снять пометку с пользователя %s?',
	'USER_UNFLAG_SUCCESS'	=> 'Пометка этого пользователя была успешно удалена.',
));

?>
