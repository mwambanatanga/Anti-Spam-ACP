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
	'ADD_WORD'									=> 'Add Word',
	'ALLOW_FIELD'								=> 'Allow',
	'ASACP_ENABLE'								=> 'Enable Anti-Spam ACP',
	'ASACP_ENABLE_EXPLAIN'						=> 'Set to no to disable the entire Anti-Spam ACP system.',
	'ASACP_FLAG_LIST_EXPLAIN'					=> 'A list of all currently flagged users.',
	'ASACP_IP_SEARCH_BOT_CHECK'					=> 'Bot Check',
	'ASACP_IP_SEARCH_EXPLAIN'					=> 'Search through the entire forum for actions made from a certain IP Address.',
	'ASACP_IP_SEARCH_FLAG_LOG'					=> 'Flag Log',
	'ASACP_IP_SEARCH_LOGS'						=> 'Log Actions',
	'ASACP_IP_SEARCH_POLL_VOTES'				=> 'Poll Votes',
	'ASACP_IP_SEARCH_POSTS'						=> 'Posts',
	'ASACP_IP_SEARCH_PRIVMSGS'					=> 'Private Messages',
	'ASACP_IP_SEARCH_SPAM_LOG'					=> 'Spam Log',
	'ASACP_IP_SEARCH_USERS'						=> 'Users',
	'ASACP_LOG'									=> 'Enable Spam Log',
	'ASACP_LOG_EXPLAIN'							=> 'If disabled new items will not be added to the spam log.',
	'ASACP_NOTIFY_NEW_FLAG'						=> 'Notify on new Flag Log entry',
	'ASACP_NOTIFY_NEW_FLAG_EXPLAIN'				=> 'Notify authorized users when a new item is added to the flag log.',
	'ASACP_PROFILE_FIELDS'						=> 'Profile Fields',
	'ASACP_PROFILE_FIELDS_EXPLAIN'				=> 'Allows you to set limits on when profile fields can be filled in for users.<br /><br /><strong>After submission, all of the fields will be resynced for all users to clear any fields they are not allowed to have filled in according to the new rules.',
	'ASACP_REGISTER_SETTINGS'					=> 'Registration Settings',
	'ASACP_REG_CAPTCHA'							=> 'Pre-Registration Captcha',
	'ASACP_REG_CAPTCHA_EXPLAIN'					=> 'This controls the display of the initial captcha shown before the registration process begins.<br />If enabled you should consider disabling "Enable visual confirmation for registrations" in General->Board configuration->User registration settings so the user does not have to fill out two captchas to register.',
	'ASACP_SETTINGS_UPDATED'					=> 'Anti-Spam ACP Settings have been updated successfully.',
	'ASACP_SPAM_WORDS_ENABLE'					=> 'Enable Spam Words',
	'ASACP_SPAM_WORDS_ENABLE_EXPLAIN'			=> 'Set to no to disable the entire Spam Words system.',
	'ASACP_SPAM_WORDS_EXPLAIN'					=> 'Enter and manage trigger words for the spam words system.',
	'ASACP_SPAM_WORDS_FLAG_LIMIT'				=> 'Flag Count before marking as spam',
	'ASACP_SPAM_WORDS_FLAG_LIMIT_EXPLAIN'		=> 'If the messages are marked as spam more than this many or more times the post will be either denied or require approval.',
	'ASACP_SPAM_WORDS_PM_ACTION'				=> 'Action for Spam Private Messages',
	'ASACP_SPAM_WORDS_PM_ACTION_EXPLAIN'		=> 'Select the action you would like performed when a private message is flagged as spam.',
	'ASACP_SPAM_WORDS_POSTING_ACTION'			=> 'Action for Spam Posts',
	'ASACP_SPAM_WORDS_POSTING_ACTION_EXPLAIN'	=> 'Select the action you would like performed when a post is flagged as spam.',
	'ASACP_SPAM_WORDS_POST_LIMIT'				=> 'Post count',
	'ASACP_SPAM_WORDS_POST_LIMIT_EXPLAIN'		=> 'If the user has a post count higher than submitted here the spam words check will not be used on that user.<br /><strong>If 0 is entered the spam words check will always run.</strong>',
	'ASACP_SPAM_WORDS_PROFILE_ACTION'			=> 'Action for Spam Profile Information',
	'ASACP_SPAM_WORDS_PROFILE_ACTION_EXPLAIN'	=> 'Select the action you would like performed when information entered into a user\'s profile is flagged as spam.',
	'ASACP_USER_FLAG_ENABLE'					=> 'Enable User Flag System',
	'ASACP_USER_FLAG_ENABLE_EXPLAIN'			=> 'If no is selected users will not be able to be flagged and any previous users flagged will no longer have items recorded in the flag log when they do something.',
	'ASACP_VERSION'								=> 'Version Information',

	'CLICK_CHECK_NEW_VERSION'					=> 'Click %shere%s to check for a new version.',
	'CLICK_GET_NEW_VERSION'						=> 'Click %shere%s to get the new version.',

	'DELETE_SPAM_WORD'							=> 'Delete Spam Word',
	'DELETE_SPAM_WORD_CONFIRM'					=> 'Are you sure you want to delete this spam word?',
	'DENY_FIELD'								=> 'Deny',
	'DENY_SUBMISSION'							=> 'Deny Submission',

	'INSTALLED_VERSION'							=> 'Installed Version',
	'INTERESTS_POST_COUNT'						=> 'Interests Post Count',
	'INTERESTS_POST_COUNT_EXPLAIN'				=> 'If Interests is set to Post Count, the user will be able to fill in that field after they have reached this many posts.',

	'LATEST_VERSION'							=> 'Latest Version',
	'LOCATION_POST_COUNT'						=> 'Location Post Count',
	'LOCATION_POST_COUNT_EXPLAIN'				=> 'If Location is set to Post Count, the user will be able to fill in that field after they have reached this many posts.',

	'NOTHING'									=> 'Nothing',
	'NOT_AVAILABLE'								=> 'Not Available',
	'NO_ITEMS'									=> 'No results from the given IP address.',
	'NO_SPAM_WORD'								=> 'The selected word does not exist.',
	'NO_SPAM_WORDS'								=> 'No Spam Words in database.',

	'OCCUPATION_POST_COUNT'						=> 'Occupation Post Count',
	'OCCUPATION_POST_COUNT_EXPLAIN'				=> 'If Occupation is set to Post Count, the user will be able to fill in that field after they have reached this many posts.',

	'POST_COUNT'								=> 'Post Count',

	'REGEX'										=> 'Regular Expression',
	'REGEX_AUTO'								=> 'Auto Regex',
	'REGEX_AUTO_EXPLAIN'						=> 'Select Yes to have the system automatically create a regular expression match from the given spam word text.',
	'REGEX_EXPLAIN'								=> 'Select Yes to use a regular expression match from the given spam word text.',
	'REQUIRE_APPROVAL'							=> 'Require moderator approval',
	'REQUIRE_FIELD'								=> 'Require',

	'SIGNATURE_POST_COUNT'						=> 'Signature Post Count',
	'SIGNATURE_POST_COUNT_EXPLAIN'				=> 'If Signature is set to Post Count, the user will be able to fill in that field after they have reached this many posts.',
	'SPAM_WORD_ADD_SUCCESS'						=> 'Spam word added successfully.',
	'SPAM_WORD_DELETE_SUCCESS'					=> 'Spam word deleted successfully.',
	'SPAM_WORD_EDIT_SUCCESS'					=> 'Spam word edited successfully.',
	'SPAM_WORD_TEXT'							=> 'Spam Word Text',

	'UCP_AIM_POST_COUNT'						=> 'AOL Instant Messenger Post Count',
	'UCP_AIM_POST_COUNT_EXPLAIN'				=> 'If AOL Instant Messenger is set to Post Count, the user will be able to fill in that field after they have reached this many posts.',
	'UCP_ICQ_POST_COUNT'						=> 'ICQ number Post Count',
	'UCP_ICQ_POST_COUNT_EXPLAIN'				=> 'If ICQ number is set to Post Count, the user will be able to fill in that field after they have reached this many posts.',
	'UCP_JABBER_POST_COUNT'						=> 'Jabber address Post Count',
	'UCP_JABBER_POST_COUNT_EXPLAIN'				=> 'If Jabber address is set to Post Count, the user will be able to fill in that field after they have reached this many posts.',
	'UCP_MSNM_POST_COUNT'						=> 'MSN Messenger Post Count',
	'UCP_MSNM_POST_COUNT_EXPLAIN'				=> 'If MSN Messenger is set to Post Count, the user will be able to fill in that field after they have reached this many posts.',
	'UCP_YIM_POST_COUNT'						=> 'Yahoo Messenger Post Count',
	'UCP_YIM_POST_COUNT_EXPLAIN'				=> 'If Yahoo Messenger is set to Post Count, the user will be able to fill in that field after they have reached this many posts.',

	'VERSION'									=> 'Version',
	'VIEW_POST'									=> '%sView Post%s',
	'VIEW_PROFILE'								=> '%sView Profile%s',

	'WEBSITE_POST_COUNT'						=> 'Website Post Count',
	'WEBSITE_POST_COUNT_EXPLAIN'				=> 'If Website is set to Post Count, the user will be able to fill in that field after they have reached this many posts.',
));

?>