<?php
/**
*
* @package Anti-Spam ACP
* @copyright (c) 2008 EXreaction
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class acp_asacp
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_admin_path, $phpbb_root_path, $phpEx;

		$user->add_lang(array('acp/board', 'mods/acp_asacp', 'install'));
		include($phpbb_root_path . 'antispam/acp_asacp.' . $phpEx);

		$error = $notify = array();
		$submit = (isset($_POST['submit'])) ? true : false;
		$action = request_var('action', '');

		add_form_key('as_acp');
		if ($submit && !check_form_key('as_acp'))
		{
			trigger_error($user->lang['FORM_INVALID'] . adm_back_link($this->u_action), E_USER_WARNING);
		}

		$error = $options = array();

		switch ($mode)
		{
			case 'spam_words' :
				$this->tpl_name = 'acp_asacp';
				$this->page_title = 'ASACP_SPAM_WORDS';

				$word_id = request_var('w', 0);
				$word_data = array(
					'word_text'			=> utf8_normalize_nfc(request_var('word_text', '', true)),
					'word_regex'		=> request_var('word_regex', 0),
					'word_regex_auto'	=> request_var('word_regex_auto', 0),
				);
				switch ($action)
				{
					case 'edit' :
						if (!$word_id)
						{
							trigger_error('NO_SPAM_WORD');
						}
						$result = $db->sql_query('SELECT * FROM ' . SPAM_WORDS_TABLE . ' WHERE word_id = ' . $word_id);
						$word = $db->sql_fetchrow($result);
						if (!$word)
						{
                            trigger_error('NO_SPAM_WORD');
						}

						if (!$submit)
						{
							$word_data = $word;
						}
					case 'add' :
						$template->assign_vars(array(
							'WORD_TEXT'			=> $word_data['word_text'],
							'WORD_REGEX'		=> ($word_data['word_regex']) ? true : false,
							'WORD_REGEX_AUTO'	=> ($word_data['word_regex_auto']) ? true : false,
							'S_ADD'				=> ($action == 'add') ? true : false,
							'U_WORD_ACTION'		=> $this->u_action . '&amp;action=' . $action . (($action == 'edit') ? '&amp;w=' . $word_id : ''),
						));

						if ($submit)
						{
							if ($action == 'add')
							{
								$db->sql_query('INSERT INTO ' . SPAM_WORDS_TABLE . ' ' . $db->sql_build_array('INSERT', $word_data));
								$cache->destroy('_spam_words');
								trigger_error($user->lang['SPAM_WORD_ADD_SUCCESS'] . adm_back_link($this->u_action));
							}
							else
							{
								$db->sql_query('UPDATE ' . SPAM_WORDS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $word_data) . ' WHERE word_id = ' . $word_id);
								$cache->destroy('_spam_words');
								trigger_error($user->lang['SPAM_WORD_EDIT_SUCCESS'] . adm_back_link($this->u_action));
							}
						}
					break;

					case 'delete' :
						if (!$word_id)
						{
							trigger_error('NO_SPAM_WORD');
						}
						$result = $db->sql_query('SELECT * FROM ' . SPAM_WORDS_TABLE . ' WHERE word_id = ' . $word_id);
						$word = $db->sql_fetchrow($result);
						if (!$word)
						{
                            trigger_error('NO_SPAM_WORD');
						}

						if (confirm_box(true))
						{
							$db->sql_query('DELETE FROM ' . SPAM_WORDS_TABLE . ' WHERE word_id = ' . $word_id);
							$cache->destroy('_spam_words');
							trigger_error($user->lang['SPAM_WORD_DELETE_SUCCESS'] . adm_back_link($this->u_action));
						}
						else
						{
							confirm_box(false, 'DELETE_SPAM_WORD');
						}
					break;

					default :
						$result = $db->sql_query('SELECT * FROM ' . SPAM_WORDS_TABLE);
						while ($row = $db->sql_fetchrow($result))
						{
							$template->assign_block_vars('spam_words', array(
								'TEXT'			=> $row['word_text'],
								'REGEX'			=> $row['word_regex'],
								'REGEX_AUTO'	=> $row['word_regex_auto'],
								'U_DELETE'		=> append_sid($this->u_action . '&amp;action=delete&amp;w=' . $row['word_id']),
								'U_EDIT'		=> append_sid($this->u_action . '&amp;action=edit&amp;w=' . $row['word_id']),
							));
						}
						$db->sql_freeresult($result);
						$template->assign_var('S_SPAM_WORD_LIST', true);
					break;
				}

				$template->assign_vars(array(
					'L_TITLE'			=> $user->lang['ASACP_SPAM_WORDS'],
					'L_TITLE_EXPLAIN'	=> $user->lang['ASACP_SPAM_WORDS_EXPLAIN'],

					'S_SPAM_WORDS'		=> true,
				));
			break;
			// case 'spam_words' :

			case 'ip_search' :
				$this->tpl_name = 'acp_asacp';
				$this->page_title = 'ASACP_IP_SEARCH';

				$ip = request_var('ip', '');
				$type = request_var('type', '');
				if ($ip)
				{
					asacp_display_ip_search($type, $ip, $this->u_action . '&amp;ip=' . $ip, request_var('start', 0));
				}

				$template->assign_vars(array(
					'L_TITLE'			=> $user->lang['ASACP_IP_SEARCH'],
					'L_TITLE_EXPLAIN'	=> $user->lang['ASACP_IP_SEARCH_EXPLAIN'],
					'S_IP_SEARCH'		=> true,
					'S_DISPLAY_INPUT'	=> ($ip) ? false : true,

					'U_BACK'			=> ($type) ? $this->u_action . '&amp;ip=' . $ip : false,
					'U_BACK_NONE'		=> $this->u_action,
				));
			break;
			// case 'ip_search' :

			case 'log' :
				$this->tpl_name = 'acp_logs';
				$this->page_title = $user->lang['ASACP_SPAM_LOG'];

				$user->add_lang('mcp');

				// Set up general vars
				$start		= request_var('start', 0);
				$deletemark = (!empty($_POST['delmarked'])) ? true : false;
				$deleteall	= (!empty($_POST['delall'])) ? true : false;
				$marked		= request_var('mark', array(0));

				// Sort keys
				$sort_days	= request_var('st', 0);
				$sort_key	= request_var('sk', 't');
				$sort_dir	= request_var('sd', 'd');

				// Delete entries if requested and able
				if (($deletemark || $deleteall) && $auth->acl_get('a_clearlogs'))
				{
					if (confirm_box(true))
					{
						$where_sql = '';

						if ($deletemark && sizeof($marked))
						{
							$sql_in = array();
							foreach ($marked as $mark)
							{
								$sql_in[] = $mark;
							}
							$where_sql = ' AND ' . $db->sql_in_set('log_id', $sql_in);
							unset($sql_in);
						}

						if ($where_sql || $deleteall)
						{
							$sql = 'DELETE FROM ' . SPAM_LOG_TABLE . '
								WHERE log_type = 1' .
								$where_sql;
							$db->sql_query($sql);

							if ($deleteall)
							{
								add_log('admin', 'LOG_CLEAR_SPAM_LOG');
							}
						}
					}
					else
					{
						confirm_box(false, $user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
							'start'		=> $start,
							'delmarked'	=> $deletemark,
							'delall'	=> $deleteall,
							'mark'		=> $marked,
							'st'		=> $sort_days,
							'sk'		=> $sort_key,
							'sd'		=> $sort_dir,
							'i'			=> $id,
							'mode'		=> $mode,
							'action'	=> $this->u_action))
						);
					}
				}

				// Sorting
				$limit_days = array(0 => $user->lang['ALL_ENTRIES'], 1 => $user->lang['1_DAY'], 7 => $user->lang['7_DAYS'], 14 => $user->lang['2_WEEKS'], 30 => $user->lang['1_MONTH'], 90 => $user->lang['3_MONTHS'], 180 => $user->lang['6_MONTHS'], 365 => $user->lang['1_YEAR']);
				$sort_by_text = array('t' => $user->lang['SORT_DATE'], 'u' => $user->lang['SORT_USERNAME'], 'i' => $user->lang['SORT_IP'], 'o' => $user->lang['SORT_ACTION']);
				$sort_by_sql = array('t' => 'l.log_time', 'u' => 'u.username_clean', 'i' => 'l.log_ip', 'o' => 'l.log_operation');

				$s_limit_days = $s_sort_key = $s_sort_dir = $u_sort_param = '';
				gen_sort_selects($limit_days, $sort_by_text, $sort_days, $sort_key, $sort_dir, $s_limit_days, $s_sort_key, $s_sort_dir, $u_sort_param);

				// Define where and sort sql for use in displaying logs
				$sql_days = ($sort_days) ? (time() - ($sort_days * 86400)) : 0;
				$sql_sort = $sort_by_sql[$sort_key] . ' ' . (($sort_dir == 'd') ? 'DESC' : 'ASC');

				// Grab log data
				$log_data = array();
				$log_count = 0;
				antispam::view_log('spam', $log_data, $log_count, $config['topics_per_page'], $start, $sql_days, $sql_sort);

				$template->assign_vars(array(
					'L_TITLE'		=> $user->lang['ASACP_SPAM_LOG'],
					'L_EXPLAIN'		=> '',

					'S_ON_PAGE'		=> on_page($log_count, $config['topics_per_page'], $start),
					'PAGINATION'	=> generate_pagination($this->u_action . "&amp;$u_sort_param", $log_count, $config['topics_per_page'], $start, true),

					'S_LIMIT_DAYS'	=> $s_limit_days,
					'S_SORT_KEY'	=> $s_sort_key,
					'S_SORT_DIR'	=> $s_sort_dir,
					'S_CLEARLOGS'	=> $auth->acl_get('a_clearlogs'),
				));

				foreach ($log_data as $row)
				{
					$template->assign_block_vars('log', array(
						'USERNAME'			=> $row['username_full'],
						'REPORTEE_USERNAME'	=> ($row['reportee_username'] && $row['user_id'] != $row['reportee_id']) ? $row['reportee_username_full'] : '',

						'IP'				=> '<a href="' . append_sid("{$phpbb_admin_path}index.$phpEx", "i={$id}&amp;mode=ip_search&amp;ip={$row['ip']}") . '">' . $row['ip'] . '</a>',
						'DATE'				=> $user->format_date($row['time']),
						'ACTION'			=> $row['action'],
						'DATA'				=> (sizeof($row['data'])) ? @vsprintf($user->lang[$row['operation'] . '_DATA'], $row['data']) : '',
						'ID'				=> $row['id'],
					));
				}
			break;
			// case 'log' :

			case 'profile_fields' :
				$user->add_lang('ucp');
				$this->tpl_name = 'acp_asacp';
				$this->page_title = 'ASACP_PROFILE_FIELDS';

				$options = array(
					'legend1'				=> 'ASACP_PROFILE_FIELDS',
				);

				$cfg_array = (isset($_REQUEST['config'])) ? utf8_normalize_nfc(request_var('config', array('' => ''), true)) : $config;
				foreach (antispam::$profile_fields as $field => $ary)
				{
					if ($submit)
					{
						switch ($cfg_array['asacp_profile_' . $field])
						{
							case 1 :
								// Required
							break;

							case 2 :
								// Normal
							break;

							case 3 :
								// Never allowed
								$sql = 'UPDATE ' . USERS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array($ary['db'] => ''));
								$db->sql_query($sql);
							break;

							case 4 :
								// Post Count
								$sql = 'UPDATE ' . USERS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array($ary['db'] => '')) . '
									WHERE user_posts < ' . (int) $cfg_array['asacp_profile_' . $field . '_post_limit'];
								$db->sql_query($sql);
							break;
						}
					}

					$options['asacp_profile_' . $field] = array('lang' => $ary['lang'], 'validate' => 'int:1:4', 'type' => 'custom', 'method' => 'profile_fields_select', 'explain' => false);
					$options['asacp_profile_' . $field . '_post_limit'] = array('lang' => $ary['lang'] . '_POST_COUNT', 'validate' => 'int:1:99999', 'type' => 'text:40:255', 'explain' => true);
				}

				$template->assign_vars(array(
					'L_TITLE'			=> $user->lang['ASACP_PROFILE_FIELDS'],
					'L_TITLE_EXPLAIN'	=> $user->lang['ASACP_PROFILE_FIELDS_EXPLAIN'],
				));
			break;
			//case 'profile_fields' :

			default :
				$this->tpl_name = 'acp_asacp';
				$this->page_title = 'ASACP_SETTINGS';

				$options = array(
					'legend1'				=> 'ASACP_SETTINGS',
					'asacp_enable'			=> array('lang' => 'ASACP_ENABLE', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),
					'asacp_log'				=> array('lang' => 'ASACP_LOG', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),

					'legend2'				=> 'ASACP_REGISTER_SETTINGS',
					'asacp_reg_captcha'		=> array('lang' => 'ASACP_REG_CAPTCHA', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),

					'legend3'							=> 'ASACP_SPAM_WORDS',
					'asacp_spam_words_enable'			=> array('lang' => 'ASACP_SPAM_WORDS_ENABLE', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),
					'asacp_spam_words_post_limit'		=> array('lang' => 'ASACP_SPAM_WORDS_POST_LIMIT', 'validate' => 'string', 'type' => 'text:40:255', 'explain' => true),
					'asacp_spam_words_flag_limit'		=> array('lang' => 'ASACP_SPAM_WORDS_FLAG_LIMIT', 'validate' => 'int:1', 'type' => 'text:40:255', 'explain' => true),
					'asacp_spam_words_posting_action'	=> array('lang' => 'ASACP_SPAM_WORDS_POSTING_ACTION', 'validate' => 'int:0:2', 'type' => 'custom', 'method' => 'spam_words_nothing_deny_approval_action', 'explain' => true),
					'asacp_spam_words_pm_action'		=> array('lang' => 'ASACP_SPAM_WORDS_PM_ACTION', 'validate' => 'int:0:2', 'type' => 'custom', 'method' => 'spam_words_nothing_deny_action', 'explain' => true),
					'asacp_spam_words_profile_action'	=> array('lang' => 'ASACP_SPAM_WORDS_PROFILE_ACTION', 'validate' => 'int:0:1', 'type' => 'custom', 'method' => 'spam_words_nothing_deny_action', 'explain' => true),
				);

				$template->assign_vars(array(
					'L_TITLE'			=> $user->lang['ASACP_SETTINGS'],
					'L_TITLE_EXPLAIN'	=> '',
					'S_SETTINGS'		=> true,

					'CURRENT_VERSION'	=> ASACP_VERSION,
					'LATEST_VERSION'	=> $this->asacp_latest_version(),
				));
			break;
		}
		// switch($mode)

		// Display the options if there are any (setup similar to acp_board)
		if (sizeof($options))
		{
			asacp_display_options($options, $error, $this->u_action);
		}

        $template->assign_vars(array(
			'ERROR'			=> implode('<br />', $error),
			'U_ACTION'		=> $this->u_action,
		));
	}

	function profile_fields_select($value, $key)
	{
		global $user;

		$key1	= ($value == 1) ? ' checked="checked"' : '';
		$key2	= ($value == 2) ? ' checked="checked"' : '';
		$key3	= ($value == 3) ? ' checked="checked"' : '';
		$key4	= ($value == 4) ? ' checked="checked"' : '';

		return '<label><input type="radio" name="config[' . $key . ']" value="1"' . $key1 . ' class="radio" /> ' . $user->lang['REQUIRE_FIELD'] . '</label>
<label><input type="radio" name="config[' . $key . ']" value="2"' . $key2 . ' class="radio" /> ' . $user->lang['ALLOW_FIELD'] . '</label>
<label><input type="radio" name="config[' . $key . ']" value="3"' . $key3 . ' class="radio" /> ' . $user->lang['DENY_FIELD'] . '</label>
<label><input type="radio" name="config[' . $key . ']" value="4"' . $key4 . ' class="radio" /> ' . $user->lang['POST_COUNT'] . '</label>';
	}

	function spam_words_nothing_deny_approval_action($value, $key)
	{
		global $user;

		$key0	= ($value == 0) ? ' checked="checked"' : '';
		$key1	= ($value == 1) ? ' checked="checked"' : '';
		$key2	= ($value == 2) ? ' checked="checked"' : '';

		return '<label><input type="radio" name="config[' . $key . ']" value="0"' . $key0 . ' class="radio" /> ' . $user->lang['NOTHING'] . '</label>
<label><input type="radio" name="config[' . $key . ']" value="1"' . $key1 . ' class="radio" /> ' . $user->lang['DENY_SUBMISSION'] . '</label>
<label><input type="radio" name="config[' . $key . ']" value="2"' . $key2 . ' class="radio" /> ' . $user->lang['REQUIRE_APPROVAL'] . '</label>';
	}

	function spam_words_nothing_deny_action($value, $key)
	{
		global $user;

		$key0	= ($value == 0) ? ' checked="checked"' : '';
		$key1	= ($value == 1) ? ' checked="checked"' : '';

		return '<label><input type="radio" name="config[' . $key . ']" value="0"' . $key0 . ' class="radio" /> ' . $user->lang['NOTHING'] . '</label>
<label><input type="radio" name="config[' . $key . ']" value="1"' . $key1 . ' class="radio" /> ' . $user->lang['DENY_SUBMISSION'] . '</label>';
	}

    function asacp_latest_version()
	{
		global $user, $config;

		$latest_version = antispam::version_check();
		if ($latest_version === false)
		{
			$version = $user->lang['NOT_AVAILABLE'];
			$version .= '<br />' . sprintf($user->lang['CLICK_CHECK_NEW_VERSION'], '<a href="http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=31&amp;t=941">', '</a>');
		}
		else
		{
			$version = $latest_version;
			if (version_compare(ASACP_VERSION, $latest_version, '<'))
			{
				$version .= '<br />' . sprintf($user->lang['CLICK_GET_NEW_VERSION'], '<a href="http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=31&amp;t=941">', '</a>');
			}
		}

		return $version;
	}
}

?>