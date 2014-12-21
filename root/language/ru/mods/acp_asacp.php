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
	'ADD_WORD'									=> 'Добавить слово',
	'ALLOW_FIELD'								=> 'Разрешено',
	'ASACP_AKISMET'								=> 'Akismet',
	'ASACP_AKISMET_DOMAIN'						=> 'Адрес домашней страницы',
	'ASACP_AKISMET_DOMAIN_EXPLAIN'				=> 'Главная страница или URL этого вебсайта. Прим.: Полный адрес, включая http://.',
	'ASACP_AKISMET_ENABLE'						=> 'Включить интеграцию с Akismet',
	'ASACP_AKISMET_INVALID_KEY'					=> 'Похоже, что ваш ключ к Akismet API недействителен. Убедитесь, что вы успользуете ключ, полученный с <a href="http://akismet.com/">http://akismet.com/</a> и что адрес вашей домашней страницы действителен.',
	'ASACP_AKISMET_KEY'							=> 'Ключ Akismet API',
	'ASACP_AKISMET_KEY_EXPLAIN'					=> 'Для использования этого сервиса требуется ключ Akismet API. Вы можете получить его на <a href="http://akismet.com/">http://akismet.com/</a>',
	'ASACP_AKISMET_POST_LIMIT'			   		=> 'Число сообщений',
	'ASACP_AKISMET_POST_LIMIT_EXPLAIN'			=> 'Если число сообщений пользователя превышает заданный лимит, для этого пользователя проверка Akismet не будет проводиться.<br /><strong>Если лимит установлен на 0, проверка Akismet будет проводиться всегда.</strong>',
	'ASACP_BAN_CLEAR_OUTBOX'					=> 'Очистить папку «Исходящие»',
	'ASACP_BAN_CLEAR_OUTBOX_EXPLAIN'			=> 'Удаляет все сообщения из папки «Исходящие»',
	'ASACP_BAN_DEACTIVATE_USER'					=> 'Деактивировать учётную запись',
	'ASACP_BAN_DEACTIVATE_USER_EXPLAIN'			=> 'Деактивировать учётную запись пользователя',
	'ASACP_BAN_DELETE_AVATAR'					=> 'Удалить аватару',
	'ASACP_BAN_DELETE_AVATAR_EXPLAIN'			=> 'Удалить аватару пользователя при выполнении One Click Ban',
	'ASACP_BAN_DELETE_BLOG'						=> 'Удалить блог',
	'ASACP_BAN_DELETE_BLOG_EXPLAIN'				=> 'Удалить записи в блоге пользователя (User Blog Mod)',
	'ASACP_BAN_DELETE_POSTS'					=> 'Удалить сообщения',
	'ASACP_BAN_DELETE_POSTS_EXPLAIN'			=> 'Удалить все сообщения пользователя при выполнении One Click Ban',
	'ASACP_BAN_DELETE_PROFILE_FIELDS'			=> 'Очистить профиль',
	'ASACP_BAN_DELETE_PROFILE_FIELDS_EXPLAIN'	=> 'Удалить информацию из профиля пользователя при выполнении One Click Ban',
	'ASACP_BAN_DELETE_SIGNATURE'				=> 'Удалить подпись',
	'ASACP_BAN_DELETE_SIGNATURE_EXPLAIN'		=> 'Удалить подпись пользователя при выполнении One Click Ban',
	'ASACP_BAN_MOVE_TO_GROUP'					=> 'Переместить в группу',
	'ASACP_BAN_MOVE_TO_GROUP_EXPLAIN'			=> 'Переместить пользователя в следующую группу при выполнении One Click Ban',
	'ASACP_BAN_SETTINGS'						=> 'Настройки One Click Ban',
	'ASACP_BAN_USERNAME'						=> 'Запретить имя пользователя',
	'ASACP_BAN_USERNAME_EXPLAIN'				=> 'Запретить имя пользователя при выполнении One Click Ban',
	'ASACP_ENABLE'								=> 'Включить Anti-Spam ACP',
	'ASACP_ENABLE_EXPLAIN'						=> 'Выберите «Нет» для отключения системы Anti-Spam ACP (некоторые функции, как например One Click Ban, останутся включенными).',
	'ASACP_FLAG_LIST_EXPLAIN'					=> 'Список всех пользователей, помеченных как подозрительные.',
	'ASACP_IP_SEARCH_BOT_CHECK'					=> 'Проверить бота',
	'ASACP_IP_SEARCH_EXPLAIN'					=> 'Искать по всему форуму действия, совершённые с определённого адреса IP.',
	'ASACP_IP_SEARCH_FLAG_LOG'					=> 'Лог подозрительных пользователей',
	'ASACP_IP_SEARCH_LOGS'						=> 'Лог действий',
	'ASACP_IP_SEARCH_POLL_VOTES'				=> 'Голосования в опросах',
	'ASACP_IP_SEARCH_POSTS'						=> 'Сообщения',
	'ASACP_IP_SEARCH_PRIVMSGS'					=> 'Личные сообщения',
	'ASACP_IP_SEARCH_SPAM_LOG'					=> 'Лог спама',
	'ASACP_IP_SEARCH_USERS'						=> 'Пользователи',
	'ASACP_LOG'									=> 'Включить лог спама',
	'ASACP_LOG_EXPLAIN'							=> 'При отключении новые записи не будут добавляться в лог.',
	'ASACP_NOTIFY_NEW_FLAG'						=> 'Уведомлять о новой записи в логе пометок',
	'ASACP_NOTIFY_NEW_FLAG_EXPLAIN'				=> 'Уведомлять уполномоченных пользователей о добавлении новых записей в лог пометок.',
	'ASACP_PROFILE_DURING_REG'					=> 'Показывать разрешённые поля профиля при регистрации',
	'ASACP_PROFILE_DURING_REG_EXPLAIN'			=> 'Если выбрано «Да», то все разрешённые поля профиля (кроме подписи) будут показаны при регистрации.',
	'ASACP_PROFILE_FIELDS'						=> 'Поля профиля',
	'ASACP_PROFILE_FIELDS_EXPLAIN'				=> 'Позволяет установить ограничения на заполнение пользователями полей своего профиля.<br /><br /><strong>После отправки, профили всех пользователей будут проверены и те поля, на которые действуют новые ограничения, будут очищены.</strong>',
	'ASACP_REGISTER_SETTINGS'					=> 'Настройки регистрации',
	'ASACP_REG_CAPTCHA'							=> 'Капча перед регистрацией',
	'ASACP_REG_CAPTCHA_EXPLAIN'					=> 'Эта опция управляет показом капчи перед началом процесса регистрации.<br />Если она включена, вам стоит отключить опцию «Использовать средства против спам-ботов при регистрации» в меню Общие->Конфигурация->Регистрация пользователей, чтобы пользователям при регистрации не приходилось вводить две капчи.',
	'ASACP_SETTINGS_UPDATED'					=> 'Настройки Anti-Spam ACP были успешно обновлены',
	'ASACP_SFS_ACTION'							=> 'Действие Stop Forum Spam',
	'ASACP_SFS_ACTION_EXPLAIN'					=> 'Действие, выполняемое при совпадении регистрационных данных профиля с информацией из базы данных <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>',
	'ASACP_SFS_KEY'								=> 'Ключ Stop Forum Spam',
	'ASACP_SFS_KEY_EXPLAIN'						=> 'Если вам нужна возможность отправлять информацию на <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>, получите ключ API <a href="http://www.stopforumspam.com/signup">здесь</a> и введите его в это поле.',
	'ASACP_SFS_MIN_FREQ'						=> 'Минимальная частота',
	'ASACP_SFS_MIN_FREQ_EXPLAIN'				=> 'Минимальное число жалоб, поступивших на эту учётную запись, после которой к учётной записи будут применены санкции согласно информации, полученной от <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>',
	'ASACP_SFS_SETTINGS'						=> 'Настройки Stop Forum Spam',
	'ASACP_SPAM_WORDS_ENABLE'					=> 'Включить стоп-лист спама',
	'ASACP_SPAM_WORDS_ENABLE_EXPLAIN'			=> 'Выберите «Нет», чтобы полностью отключить систему стоп-листов спама.',
	'ASACP_SPAM_WORDS_EXPLAIN'					=> 'Управление списком слов, являющихся спамом.',
	'ASACP_SPAM_WORDS_FLAG_LIMIT'				=> 'Минимальное число слов из стоп-листа, необходимое для признания сообщения спамом',
	'ASACP_SPAM_WORDS_FLAG_LIMIT_EXPLAIN'		=> 'Если сообщение будет помечено как спам такое или большее количество раз, оно будет заблокировано или отправлено на премодерацию.',
	'ASACP_SPAM_WORDS_PM_ACTION'				=> 'Действие над спамом в ЛС',
	'ASACP_SPAM_WORDS_PM_ACTION_EXPLAIN'		=> 'Выберите, что делать с личными сообщениями, помеченными как спам.',
	'ASACP_SPAM_WORDS_POSTING_ACTION'			=> 'Действие над сообщением-спамом',
	'ASACP_SPAM_WORDS_POSTING_ACTION_EXPLAIN'	=> 'Выберите, что делать с форумными сообщениями, помеченными как спам.',
	'ASACP_SPAM_WORDS_POST_LIMIT'				=> 'Лимит сообщений',
	'ASACP_SPAM_WORDS_POST_LIMIT_EXPLAIN'		=> 'Если пользователь достиг или превысил указанное количество сообщений, его сообщения не будут проверяться по стоп-листу.<br /><strong>Если лимит установлен на 0, все сообщения всегда будут проверяться по стоп-листу.</strong>',
	'ASACP_SPAM_WORDS_PROFILE_ACTION'			=> 'Действие над спамом в пользовательском профиле',
	'ASACP_SPAM_WORDS_PROFILE_ACTION_EXPLAIN'	=> 'Выберите, что делать, если информация в пользовательском профиле помечена как спам.',
	'ASACP_USER_FLAG_ENABLE'					=> 'Включить систему пометок подозрительных пользователей',
	'ASACP_USER_FLAG_ENABLE_EXPLAIN'			=> 'Если выбрано «Нет», то вы не сможете помечать новых подозрительных пользователей и действия ранее помеченных пользователей не будут записываться в лог.',
	'ASACP_VERSION'								=> 'Информация о версии',

	'CLICK_CHECK_NEW_VERSION'					=> 'Нажмите %sздесь%s, чтобы проверить наличие новой версии.',
	'CLICK_GET_NEW_VERSION'						=> 'Нажмите %sздесь%s, чтобы скачать новую версию.',

	'DELETE_SPAM_WORD'							=> 'Удалить слово из стоп-листа',
	'DELETE_SPAM_WORD_CONFIRM'					=> 'Вы уверены, что хотите удалить данное слово из стоп-листа?',
	'DENY_FIELD'								=> 'Запрещено',
	'DENY_SUBMISSION'							=> 'Заблокировать',

	'FLAG_USER'									=> 'Пометить пользователя как подозрительного',

	'INSTALLED_VERSION'							=> 'Установленная версия',
	'INTERESTS_POST_COUNT'						=> 'Лимит сообщений для интересов',
	'INTERESTS_POST_COUNT_EXPLAIN'				=> 'Если поле «Интересы» ограничено лимитом сообщений, пользователь сможет заполнить его лишь после достижения указанного количества сообщений.',

	'LOCATION_POST_COUNT'						=> 'Лимит сообщений для местонахождения',
	'LOCATION_POST_COUNT_EXPLAIN'				=> 'Если поле «Откуда» ограничено лимитом сообщений, пользователь сможет заполнить его лишь после достижения указанного количества сообщений.',
	'LOG_VIEW_POST'								=> '%sПосмотреть сообщение%s',
	'LOG_VIEW_PROFILE'							=> '%sПосмотреть профиль%s',

	'NOTHING'									=> 'Ничего',
	'NOT_AVAILABLE'								=> 'Недоступно',
	'NO_ITEMS'									=> 'Нет результатов для данного адреса IP.',
	'NO_SPAM_WORD'								=> 'Выбранное слово не существует.',
	'NO_SPAM_WORDS'								=> 'Стоп-лист пуст.',

	'OCCUPATION_POST_COUNT'						=> 'Лимит сообщений для рода занятий',
	'OCCUPATION_POST_COUNT_EXPLAIN'				=> 'Если поле «Род занятий» ограничено лимитом сообщений, пользователь сможет заполнить его лишь после достижения указанного количества сообщений.',

	'POST_COUNT'								=> 'По достижении лимита сообщений',

	'REGEX'										=> 'Регулярное выражение',
	'REGEX_AUTO'								=> 'Auto Regex',
	'REGEX_AUTO_EXPLAIN'						=> 'Если вы хотите, чтобы система автоматически создала регулярное выражение для данного текста, выберите «Да».',
	'REGEX_EXPLAIN'								=> 'Если для данного текста требуется совпадение по регулярному выражению, выберите «Да».',
	'REQUIRE_ADMIN_ACTIVATION'					=> 'Запросить активацию администратором',
	'REQUIRE_APPROVAL'							=> 'Отправить на премодерацию',
	'REQUIRE_FIELD'								=> 'Обязательное',
	'REQUIRE_USER_ACTIVATION'					=> 'Запросить активацию пользователем',

	'SIGNATURE_POST_COUNT'						=> 'Лимит сообщений для подписи',
	'SIGNATURE_POST_COUNT_EXPLAIN'				=> 'Если подпись ограничена лимитом сообщений, пользователь сможет заполнить её лишь после достижения указанного количества сообщений.<br /><br />Требования к подписи отличаются от других полей. Подпись не может быть обязательной при регистрации.',
	'SPAM_WORD_ADD_SUCCESS'						=> 'Слово успешно добавлено в стоп-лист.',
	'SPAM_WORD_DELETE_SUCCESS'					=> 'Слово успешно удалено из стоп-листа.',
	'SPAM_WORD_EDIT_SUCCESS'					=> 'Слово успешно отредактировано.',
	'SPAM_WORD_TEXT'							=> 'Текст для стоп-листа',
	'SPAM_WORD_TEXT_EXPLAIN'					=> 'Если вы используете регулярное выражение, убедитесь, что формат (в т.ч. разделители) соответствует функции <a href="http://us2.php.net/manual/en/function.preg-match.php">preg_match</a>',

	'UCP_AIM_POST_COUNT'						=> 'Лимит сообщений для AOL Instant Messenger',
	'UCP_AIM_POST_COUNT_EXPLAIN'				=> 'Если поле «AIM» ограничено лимитом сообщений, пользователь сможет заполнить его лишь после достижения указанного количества сообщений.',
	'UCP_ICQ_POST_COUNT'						=> 'Лимит сообщений для номера ICQ',
	'UCP_ICQ_POST_COUNT_EXPLAIN'				=> 'Если поле «ICQ» ограничено лимитом сообщений, пользователь сможет заполнить его лишь после достижения указанного количества сообщений.',
	'UCP_JABBER_POST_COUNT'						=> 'Лимит сообщений для адреса Jabber',
	'UCP_JABBER_POST_COUNT_EXPLAIN'				=> 'Если поле «Jabber» ограничено лимитом сообщений, пользователь сможет заполнитьего лишь после достижения указанного количества сообщений.',
	'UCP_MSNM_POST_COUNT'						=> 'Лимит сообщений для MSN Messenger',
	'UCP_MSNM_POST_COUNT_EXPLAIN'				=> 'Если поле «WL/MSN Messenger» ограничено лимитом сообщений, пользователь сможет заполнить его лишь после достижения указанного количества сообщений.',
	'UCP_YIM_POST_COUNT'						=> 'Лимит сообщений для Yahoo Messenger',
	'UCP_YIM_POST_COUNT_EXPLAIN'				=> 'Если поле «Yahoo Messenger» ограничено лимитом сообщений, пользователь сможет заполнить его лишь после достижения указанного количества сообщений.',

	'VERSION'									=> 'Версия',

	'WEBSITE_POST_COUNT'						=> 'Лимит сообщений для вебсайта',
	'WEBSITE_POST_COUNT_EXPLAIN'				=> 'Если поле «Сайт» ограничено лимитом сообщений, пользователь сможет заполнить его лишь после достижения указанного количества сообщений.',
));

?>
