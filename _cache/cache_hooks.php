<?php

if (!defined('S2_HOOKS_LOADED'))
	define('S2_HOOKS_LOADED', 1);

$s2_hooks = array (
  'fn_do_rss_pre_output' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_latex\',
\'path\'			=> S2_ROOT.\'_extensions/s2_latex\',
\'url\'			=> S2_PATH.\'/_extensions/s2_latex\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/functions.php\';

$rss_title = s2_latex_make($rss_title);
$rss_description = s2_latex_make($rss_description);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($request_uri == S2_BLOG_URL.\'/rss.xml\')
{
	global $lang_s2_blog;

	$rss_title = S2_BLOG_TITLE;
	$rss_link = s2_abs_link(str_replace(urlencode(\'/\'), \'/\', urlencode(S2_BLOG_URL)).\'/\');
	$rss_description = sprintf($lang_s2_blog[\'RSS description\'], S2_BLOG_TITLE);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_typo\',
\'path\'			=> S2_ROOT.\'_extensions/s2_typo\',
\'url\'			=> S2_PATH.\'/_extensions/s2_typo\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/functions.php\';

$rss_title = s2_typo_make($rss_title, true);
$rss_description = s2_typo_make($rss_description, true);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_do_rss_loop_pre_output' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_latex\',
\'path\'			=> S2_ROOT.\'_extensions/s2_latex\',
\'url\'			=> S2_PATH.\'/_extensions/s2_latex\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$item[\'title\'] = s2_latex_make($item[\'title\']);
$item[\'text\'] = s2_latex_make($item[\'text\']);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_typo\',
\'path\'			=> S2_ROOT.\'_extensions/s2_typo\',
\'url\'			=> S2_PATH.\'/_extensions/s2_typo\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$item[\'title\'] = s2_typo_make($item[\'title\'], true);
$item[\'text\'] = s2_typo_make($item[\'text\']);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ai_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

define(\'S2_BLOG_PATH\', s2_link(str_replace(urlencode(\'/\'), \'/\', urlencode(S2_BLOG_URL)).\'/\'));
define(\'S2_BLOG_TAGS_PATH\', S2_BLOG_PATH.urlencode(S2_TAGS_URL).\'/\');

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'rq_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

define(\'S2_BLOG_PATH\', s2_link(str_replace(urlencode(\'/\'), \'/\', urlencode(S2_BLOG_URL)).\'/\'));
define(\'S2_BLOG_TAGS_PATH\', S2_BLOG_PATH.urlencode(S2_TAGS_URL).\'/\');

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'idx_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

define(\'S2_BLOG_PATH\', s2_link(str_replace(urlencode(\'/\'), \'/\', urlencode(S2_BLOG_URL)).\'/\'));
define(\'S2_BLOG_TAGS_PATH\', S2_BLOG_PATH.urlencode(S2_TAGS_URL).\'/\');

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'opt_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$s2_const_types[\'S2_BLOG_URL\'] = \'string\';
$s2_const_types[\'S2_BLOG_TITLE\'] = \'string\';
$s2_const_types[\'S2_BLOG_CRUMBS\'] = \'string\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_search\',
\'path\'			=> S2_ROOT.\'_extensions/s2_search\',
\'url\'			=> S2_PATH.\'/_extensions/s2_search\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$s2_const_types[\'S2_SEARCH_QUICK\'] = \'boolean\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_wysiwyg\',
\'path\'			=> S2_ROOT.\'_extensions/s2_wysiwyg\',
\'url\'			=> S2_PATH.\'/_extensions/s2_wysiwyg\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$s2_const_types[\'S2_WYSIWYG_TYPE\'] = \'int\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ai_head_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

echo \'<link rel="stylesheet" type="text/css" href="\'.$ext_info[\'url\'].\'/admin.css" />\'."\\n";

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_highlight\',
\'path\'			=> S2_ROOT.\'_extensions/s2_highlight\',
\'url\'			=> S2_PATH.\'/_extensions/s2_highlight\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

echo \'<link rel="stylesheet" type="text/css" href="\'.$ext_info[\'url\'].\'/codemirror.css" />\'."\\n";

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ai_pre_edit' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
	require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
else
	require $ext_info[\'path\'].\'/lang/English.php\';
require $ext_info[\'path\'].\'/blog_lib.php\';
?>
		<dt id="blog_tab"><?php echo $lang_s2_blog[\'Blog\']; ?></dt>
		<dd class="inactive">
			<div class="reducer">
				<form name="blogform">
					<table width="100%" class="fields">
						<tr>
							<td class="label"><?php echo $lang_s2_blog[\'Start time\']; ?></td>
							<td><input style="width: 10em;" type="text" name="posts[start_time]" size="20" value="" /></td>
							<td class="label"><?php echo $lang_s2_blog[\'Search label\']; ?></td>
							<td><input type="text" name="posts[text]" size="40" value="" /></td>
							<td align="right"><input class="bitbtn add_post" name="button" type="button" value="<?php echo $lang_s2_blog[\'Create new\']; ?>" onclick="return CreateBlankRecord();" /></td>
						</tr>
						<tr>
							<td class="label"><?php echo $lang_s2_blog[\'End time\']; ?></td>
							<td><input style="width: 10em;" type="text" name="posts[end_time]" size="20" value="<?php echo date($lang_s2_blog[\'Date pattern\']); ?>" /></td>
							<td class="label"><?php echo $lang_s2_blog[\'Tag label\']; ?></td>
							<td><input type="text" name="posts[key]" size="40" value="" /></td>
							<td></td>
						</tr>
						<tr>
							<td class="label"><?php echo $lang_s2_blog[\'Author\']; ?></td>
							<td><input style="width: 10em;" type="text" name="posts[author]" size="20" value="" /></td>
							<td style="padding-left: 0.5em;"><label><input type="checkbox" name="posts[hidden]" value="1" checked="checked" /><?php echo $lang_s2_blog[\'Only hidden\']; ?></label></td>
							<td><input name="button" type="submit" value="<?php echo $lang_s2_blog[\'Show posts\']; ?>" onclick="return LoadPosts();" /></td>
							<td></td>
						</tr>
					</table>
				</form>
				<div id="blog_div"><?php s2_blog_output_post_list(array(\'hidden\' => 1)); ?></div>
			</div>
		</dd>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'rq_custom_action' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/blog_ajax.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_search\',
\'path\'			=> S2_ROOT.\'_extensions/s2_search\',
\'url\'			=> S2_PATH.\'/_extensions/s2_search\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($action == \'s2_search_makeindex\')
{
	$is_permission = $s2_user[\'create_articles\'] || $s2_user[\'edit_site\'];
	$save_action = isset($_GET[\'save_action\']) ? $_GET[\'save_action\'] : \'\';
	$id = isset($_GET[\'id\']) ? $_GET[\'id\'] : \'\';
	$save_action = ($save_action == \'save\') ? \'\' : $save_action.\'_\';
	$chapter = $id ? $save_action.$id : false;
	($hook = s2_hook(\'s2_search_action_makeindex\')) ? eval($hook) : null;
	s2_test_user_rights($is_permission);

	require $ext_info[\'path\'].\'/stemmer.class.php\';
	require $ext_info[\'path\'].\'/worker.class.php\';
	require $ext_info[\'path\'].\'/indexer.class.php\';
	require $ext_info[\'path\'].\'/fetcher.class.php\';

	$fetcher = new s2_search_fetcher();
	$finder = new s2_search_indexer(S2_CACHE_DIR, $fetcher);
	if (!$chapter)
		echo $finder->index();
	else
		$finder->refresh($chapter);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_tpl_edit\',
\'path\'			=> S2_ROOT.\'_extensions/s2_tpl_edit\',
\'url\'			=> S2_PATH.\'/_extensions/s2_tpl_edit\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($action == \'s2_tpl_edit_load\')
{
	$is_permission = $s2_user[\'edit_users\'];
	($hook = s2_hook(\'rq_action_s2_tpl_edit_load_start\')) ? eval($hook) : null;
	s2_test_user_rights($is_permission);

	if (!isset($_GET[\'filename\']))
		die(\'Error in GET parameters.\');
	$filename = preg_replace(\'#[^0-9a-zA-Z\\._\\-]#\', \'\', $_GET[\'filename\']);

	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
	require $ext_info[\'path\'].\'/functions.php\';

	header(\'Content-Type: application/json; charset=utf-8\');
	echo s2_json_encode(s2_tpl_edit_content($filename));
}

elseif ($action == \'s2_tpl_edit_save\')
{
	$is_permission = $s2_user[\'edit_users\'];
	($hook = s2_hook(\'rq_action_s2_tpl_edit_load_start\')) ? eval($hook) : null;
	s2_test_user_rights($is_permission);

	if (!isset($_POST[\'template\']))
		die(\'Error in POST parameters.\');
	$s2_tpl_edit_template = $_POST[\'template\'];

	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
	require $ext_info[\'path\'].\'/functions.php\';

	$s2_tpl_edit_template_id = s2_tpl_edit_save($s2_tpl_edit_template);
	echo s2_tpl_edit_file_list($s2_tpl_edit_template_id);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_delete_tag_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query = array(
	\'DELETE\'	=> \'s2_blog_post_tag\',
	\'WHERE\'		=> \'tag_id = \'.$id,
);
($hook = s2_hook(\'blrq_action_delete_tag_pre_del_links_qr\')) ? eval($hook) : null;
$s2_db->query_build($query) or error(__FILE__, __LINE__);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_load_tag_pre_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SELECT\'] .= \', s2_blog_important\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ai_after_js_include' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

echo \'<script type="text/javascript" src="\'.$ext_info[\'url\'].\'/blog.js"></script>\'."\\n";

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_counter\',
\'path\'			=> S2_ROOT.\'_extensions/s2_counter\',
\'url\'			=> S2_PATH.\'/_extensions/s2_counter\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

echo \'<script type="text/javascript" src="\'.$ext_info[\'url\'].\'/draw_chart.js"></script>\'."\\n";

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_search\',
\'path\'			=> S2_ROOT.\'_extensions/s2_search\',
\'url\'			=> S2_PATH.\'/_extensions/s2_search\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

echo \'<script type="text/javascript" src="\'.$ext_info[\'url\'].\'/admin.js"></script>\'."\\n";

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    3 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_tpl_edit\',
\'path\'			=> S2_ROOT.\'_extensions/s2_tpl_edit\',
\'url\'			=> S2_PATH.\'/_extensions/s2_tpl_edit\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

echo \'<script type="text/javascript" src="\'.$ext_info[\'url\'].\'/admin.js"></script>\'."\\n";

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    4 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_wysiwyg\',
\'path\'			=> S2_ROOT.\'_extensions/s2_wysiwyg\',
\'url\'			=> S2_PATH.\'/_extensions/s2_wysiwyg\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

?>
<script type="text/javascript">
	var s2_wysiwyg_type = <?php echo S2_WYSIWYG_TYPE; ?>, s2_wysiwyg_cut = <?php echo S2_ADMIN_CUT; ?>, s2_wysiwyg_lang = \'<?php echo substr(S2_LANGUAGE, 0, 7) == \'Russian\' ? \'ru\' : \'en\'; ?>\';
</script>
<script type="text/javascript" src="<?php echo $ext_info[\'url\']; ?>/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="<?php echo $ext_info[\'url\']; ?>/init.js"></script>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    5 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_highlight\',
\'path\'			=> S2_ROOT.\'_extensions/s2_highlight\',
\'url\'			=> S2_PATH.\'/_extensions/s2_highlight\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

?>
<script type="text/javascript" src="<?php echo $ext_info[\'url\']; ?>/codemirror/codemirror-compressed.js"></script>
<script type="text/javascript" src="<?php echo $ext_info[\'url\']; ?>/init.js"></script>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'cmnt_pre_path_check' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_GET[\'type\']) && $_GET[\'type\'] == \'s2_blog\')
	$path = str_replace(urlencode(\'/\'), \'/\', urlencode(S2_BLOG_URL)).date(\'/Y/m/d\', $row[\'create_time\']);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_get_counters_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
	require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
else
	require $ext_info[\'path\'].\'/lang/English.php\';

$query = array(
	\'SELECT\'	=> \'count(*)\',
	\'FROM\'		=> \'s2_blog_posts\',
	\'WHERE\'		=> \'published = 1\'
);
($hook = s2_hook(\'blfn_get_counters_pre_get_posts_qr\')) ? eval($hook) : null;
$result = $s2_db->query_build($query) or error(__FILE__, __LINE__);

$counters[] = sprintf($lang_s2_blog[\'Blog posts now\'], $s2_db->result($result));

$query = array(
	\'SELECT\'	=> \'count(*)\',
	\'FROM\'		=> \'s2_blog_comments AS c\',
	\'JOINS\'		=> array(
		array(
			\'INNER JOIN\'	=> \'s2_blog_posts AS p\',
			\'ON\'			=> \'p.id = c.post_id\'
		)
	),
	\'WHERE\'		=> \'c.shown = 1 AND p.published = 1\'
);
($hook = s2_hook(\'blfn_get_counters_pre_get_comm_qr\')) ? eval($hook) : null;
$result = $s2_db->query_build($query) or error(__FILE__, __LINE__);

$counters[] = sprintf($lang_s2_blog[\'Blog comments now\'], $s2_db->result($result));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_search\',
\'path\'			=> S2_ROOT.\'_extensions/s2_search\',
\'url\'			=> S2_PATH.\'/_extensions/s2_search\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
	require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
else
	require $ext_info[\'path\'].\'/lang/English.php\';
require $ext_info[\'path\'].\'/worker.class.php\';
$s2_search_reindex = \'<a href="#" onclick="return s2_search.reindex();" class="js" title="\'.$lang_s2_search[\'Reindex title\'].\'">\'.$lang_s2_search[\'Reindex\'].\'</a><span id="s2_search_progress"></span>\';
$counters[] = sprintf($lang_s2_search[\'Info link\'], s2_frendly_filesize(is_file(S2_CACHE_DIR.s2_search_worker::index_name) ? filesize(S2_CACHE_DIR.s2_search_worker::index_name) : 0), $s2_search_reindex);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_save_comment_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($type == \'blog\')
{
	// Does the comment exist?
	// We need post id for displaying comments
	$query = array(
		\'SELECT\'	=> \'post_id\',
		\'FROM\'		=> \'s2_blog_comments\',
		\'WHERE\'		=> \'id = \'.$id
	);
	($hook = s2_hook(\'blfn_save_comment_pre_get_pid_qr\')) ? eval($hook) : null;
	$result = $s2_db->query_build($query) or error(__FILE__, __LINE__);

	if ($row = $s2_db->fetch_row($result))
		$post_id = $row[0];
	else
		die(\'Comment not found!\');

	// Save comment
	$query = array(
		\'UPDATE\'	=> \'s2_blog_comments\',
		\'SET\'		=> "nick = \'$nick\', email = \'$email\', text = \'$text\', show_email = \'$show_email\', subscribed = \'$subscribed\'",
		\'WHERE\'		=> \'id = \'.$id
	);
	($hook = s2_hook(\'blfn_save_comment_pre_upd_qr\')) ? eval($hook) : null;
	$s2_db->query_build($query) or error(__FILE__, __LINE__);

	global $lang_s2_blog;
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';

	$article_id = $post_id;
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'idx_pre_get_queries' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (strpos($template, \'<!-- s2_blog_last_comments -->\') !== false)
{
	if (!defined(\'S2_BLOG_FUNCTIONS_LOADED\'))
		include $ext_info[\'path\'].\'/blog_functions.php\';
	$s2_blog_recent_comments = s2_blog_recent_comments($request_uri);
	$replace[\'<!-- s2_blog_last_comments -->\'] = $s2_blog_recent_comments ? \'<div class="header">\'.$lang_s2_blog[\'Last comments\'].\'</div>\'.$s2_blog_recent_comments : \'\';
}
if (strpos($template, \'<!-- s2_blog_last_discussions -->\') !== false)
{
	if (!defined(\'S2_BLOG_FUNCTIONS_LOADED\'))
		include $ext_info[\'path\'].\'/blog_functions.php\';
	$s2_blog_last_discussions = s2_blog_recent_discussions($request_uri);
	$replace[\'<!-- s2_blog_last_discussions -->\'] = $s2_blog_last_discussions ? \'<div class="header">\'.$lang_s2_blog[\'Last discussions\'].\'</div>\'.$s2_blog_last_discussions : \'\';
}
if (strpos($template, \'<!-- s2_blog_last_post -->\') !== false)
{
	if (!defined(\'S2_BLOG_FUNCTIONS_LOADED\'))
		include $ext_info[\'path\'].\'/blog_functions.php\';
	$replace[\'<!-- s2_blog_last_post -->\'] = s2_blog_last_post(1);
}
$replace[\'<!-- s2_blog_calendar -->\'] = !empty($page[\'s2_blog_calendar\']) ? $page[\'s2_blog_calendar\'] : \'\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_show_comments_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($mode == \'hidden\' || $mode == \'new\' || $mode == \'last\')
{
	global $lang_s2_blog;
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
	$output .= s2_show_comments(\'s2_blog_\'.$mode);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_save_tag_pre_ins_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'INSERT\'] .= \', s2_blog_important\';
$query[\'VALUES\'] .= \', \\\'\'.$s2_blog_important.\'\\\'\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_save_tag_pre_upd_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SET\'] .= \', s2_blog_important = \'.$s2_blog_important;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_tagged_articles_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Links to blog tags
if (!empty($s2_blog_links))
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
	$output[] = \'<div class="header">\'.$lang_s2_blog[\'See in blog\'].\'</div>\'.implode(\', \', $s2_blog_links);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_preload_editor_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!empty($_GET[\'path\']) && ($_GET[\'path\'] == S2_BLOG_URL.\'/\' || $_GET[\'path\'] == S2_BLOG_URL))
{
	echo \'document.location.hash = "#blog";\';
	return true;
}
elseif (!empty($_GET[\'path\']) && substr($_GET[\'path\'], 0, strlen(S2_BLOG_URL)) == S2_BLOG_URL)
{
	$path = substr($_GET[\'path\'], strlen(S2_BLOG_URL));
	$path = explode(\'/\', $path);   //   []/[2006]/[12]/[31]/[newyear]
	if (count($path) < 5)
		return true;

	$start_time = mktime(0, 0, 0, $path[2], $path[3], $path[1]);
	$end_time = mktime(0, 0, 0, $path[2], $path[3]+1, $path[1]);

	$query = array (
		\'SELECT\'	=> \'id\',
		\'FROM\'		=> \'s2_blog_posts\',
		\'WHERE\'		=> \'create_time < \'.$end_time.\' AND create_time >= \'.$start_time.\' AND url=\\\'\'.$s2_db->escape($path[4]).\'\\\'\'
	);
	($hook = s2_hook(\'blfn_preload_editor_loop_pre_get_post_qr\')) ? eval($hook) : null;
	$result = $s2_db->query_build($query) or error(__FILE__, __LINE__);

	if ($row = $s2_db->fetch_assoc($result))
		echo \'document.location.hash = "#edit";\'."\\n".\'setTimeout(function () { EditRecord(\'.$row[\'id\'].\'); }, 0);\'."\\n";

	($hook = s2_hook(\'blfn_preload_editor_end\')) ? eval($hook) : null;

	return true;
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'cmnt_pre_save_comment_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_GET[\'type\']) && $_GET[\'type\'] == \'s2_blog\')
{
	$query[\'INSERT\'] = \'post_id, time, ip, nick, email, show_email, subscribed, sent, shown, good, text\';
	$query[\'INTO\'] = \'s2_blog_comments\';
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_save_tag_pre_id_check' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$s2_blog_important = isset($_POST[\'tag\'][\'s2_blog_important\']) ? (int) $_POST[\'tag\'][\'s2_blog_important\'] : 0;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'cmnt_pre_get_page_info_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_GET[\'type\']) && $_GET[\'type\'] == \'s2_blog\')
	$query = array(
		\'SELECT\'	=> \'create_time, url, title, 0 AS parent_id\',
		\'FROM\'		=> \'s2_blog_posts\',
		\'WHERE\'		=> \'id = \'.$id.\' AND published = 1 AND commented = 1\'
	);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_output_tag_form_pre_url' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
	require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
else
	require $ext_info[\'path\'].\'/lang/English.php\';
?>
		<label for="s2_blog_important_tag" title="<?php echo $lang_s2_blog[\'Important tag info\']; ?>">
			<input type="checkbox" id="s2_blog_important_tag" name="tag[s2_blog_important]" value="1"<?php if (!empty($tag[\'s2_blog_important\'])) echo \' checked="checked"\' ?> />
			<?php echo $lang_s2_blog[\'Important tag\']; ?>
		</label>
		<hr />
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_get_options_pre_comment_fs' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
	require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
else
	require $ext_info[\'path\'].\'/lang/English.php\';
$fieldset = array(
	\'S2_BLOG_TITLE\' => s2_get_input(\'S2_BLOG_TITLE\', $options[\'S2_BLOG_TITLE\'], $lang_s2_blog[\'Blog title\'], $lang_s2_blog[\'Blog title label\']),
	\'S2_BLOG_URL\' => s2_get_input(\'S2_BLOG_URL\', $options[\'S2_BLOG_URL\'], $lang_s2_blog[\'Blog URL\'], $lang_s2_blog[\'Blog URL label\']),
	\'S2_BLOG_CRUMBS\' => s2_get_input(\'S2_BLOG_CRUMBS\', $options[\'S2_BLOG_CRUMBS\'], $lang_s2_blog[\'Blog crumbs\'], $lang_s2_blog[\'Blog crumbs label\']),
);
($hook = s2_hook(\'s2_blog_opt_pre_blog_fs_merge\')) ? eval($hook) : null;
$output .= \'<fieldset><legend>\'.$lang_s2_blog[\'Blog\'].\'</legend>\'.implode(\'\', $fieldset).\'</fieldset>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_search\',
\'path\'			=> S2_ROOT.\'_extensions/s2_search\',
\'url\'			=> S2_PATH.\'/_extensions/s2_search\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
	require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
else
	require $ext_info[\'path\'].\'/lang/English.php\';
$fieldset = array(
	\'S2_SEARCH_QUICK\' => s2_get_checkbox(\'S2_SEARCH_QUICK\', $options[\'S2_SEARCH_QUICK\'], $lang_s2_search[\'Quick search\'], $lang_s2_search[\'Quick search label\']),
);
($hook = s2_hook(\'s2_search_opt_pre_fs_merge\')) ? eval($hook) : null;
$output .= \'<fieldset><legend>\'.$lang_s2_search[\'Search\'].\'</legend>\'.implode(\'\', $fieldset).\'</fieldset>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_wysiwyg\',
\'path\'			=> S2_ROOT.\'_extensions/s2_wysiwyg\',
\'url\'			=> S2_PATH.\'/_extensions/s2_wysiwyg\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
	require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
else
	require $ext_info[\'path\'].\'/lang/English.php\';
$fieldset = array(
	\'S2_WYSIWYG_TYPE\' => s2_get_checkbox(\'S2_WYSIWYG_TYPE\', $options[\'S2_WYSIWYG_TYPE\'], $lang_s2_wysiwyg[\'WYSIWYG type\'], $lang_s2_wysiwyg[\'WYSIWYG type label\']),
);
($hook = s2_hook(\'s2_wysiwyg_opt_pre_fs_merge\')) ? eval($hook) : null;
$output .= \'<fieldset><legend>\'.$lang_s2_wysiwyg[\'WYSIWYG\'].\'</legend>\'.implode(\'\', $fieldset).\'</fieldset>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_show_comments_pre_get_comm_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (strpos($mode, \'s2_blog\') === 0)
{
	global $lang_s2_blog;

	$query = array(
		\'SELECT\'	=> \'p.title, c.post_id AS article_id, c.id, c.time, c.nick, c.email, c.show_email, c.subscribed, c.text, c.shown, c.good, c.ip\',
		\'FROM\'		=> \'s2_blog_comments AS c\',
		\'JOINS\'		=> array(
			array(
				\'INNER JOIN\'	=> \'s2_blog_posts AS p\',
				\'ON\'			=> \'p.id = c.post_id\'
			)
		),
		\'WHERE\'		=> \'c.post_id = \'.$id,
		\'ORDER BY\'	=> \'time\'
	);

	$output = \'\';
	if ($mode == \'s2_blog_hidden\')
	{
		// Show all hidden commetns
		$query[\'WHERE\'] = \'shown = 0\';
		$output = \'<h2>\'.$lang_s2_blog[\'Blog hidden comments\'].\'</h2>\';
	}
	elseif ($mode == \'s2_blog_new\')
	{
		// Show unverified commetns
		$query[\'WHERE\'] = \'shown = 0 AND sent = 0\';
		$output = \'<h2>\'.$lang_s2_blog[\'Blog new comments\'].\'</h2>\';
	}
	elseif ($mode == \'s2_blog_last\')
	{
		// Show last 20 commetns
		unset($query[\'WHERE\']);
		$query[\'ORDER BY\'] = \'time DESC\';
		$query[\'LIMIT\'] = \'20\';
		$output = \'<h2>\'.$lang_s2_blog[\'Blog last comments\'].\'</h2>\';
	}
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_tagged_articles_loop_get_tags' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($row[\'s2_blog_is_posts\'])
	$s2_blog_links[] = \'<a href="\'.S2_BLOG_TAGS_PATH.urlencode($row[\'url\']).\'/">\'.$row[\'name\'].\'</a>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_show_comments_pre_output_merge' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (strpos($mode, \'s2_blog\') === 0)
{
	$output_header = str_replace(\'EditArticle\', \'EditRecord\', $output_header);
	$output_subheader = $mode == \'s2_blog\' ? \'\' : str_replace(\'LoadComments\', \'LoadBlogComments\', $output_subheader);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_output_tag_form_pre_get_tags_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$subquery = array(
	\'SELECT\'	=> \'count(*)\',
	\'FROM\'		=> \'s2_blog_post_tag AS pt\',
	\'WHERE\'		=> \'t.tag_id = pt.tag_id\'
);
$raw_query = $s2_db->query_build($subquery, true) or error(__FILE__, __LINE__);
$query[\'SELECT\'] .= \', (\'.$raw_query.\') AS post_count\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_show_comments_after_table_merge' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($mode == \'s2_blog_new\' && count($article_titles))
	$output .= \'<div class="info-box"><p>\'.$lang_admin[\'Premoderation info\'].\'</p></div>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_tagged_articles_pre_get_tags_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$subquery = array(
	\'SELECT\'	=> \'p.id\',
	\'FROM\'		=> \'s2_blog_posts AS p\',
	\'JOINS\'		=> array(
		array(
			\'INNER JOIN\'	=> \'s2_blog_post_tag AS pt\',
			\'ON\'			=> \'p.id = pt.post_id\'
		)
	),
	\'WHERE\'		=> \'pt.tag_id = atg.tag_id AND p.published = 1\',
	\'LIMIT\'		=> \'1\'
);
$raw_query = $s2_db->query_build($subquery, true) or error(__FILE__, __LINE__);

$query[\'SELECT\'] .= \', (\'.$raw_query.\') IS NOT NULL as s2_blog_is_posts\';

$s2_blog_links = array();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_for_premoderation_pre_comm_check' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Check if there are new comments
$query = array(
	\'SELECT\'	=> \'count(id)\',
	\'FROM\'		=> \'s2_blog_comments\',
	\'WHERE\'		=> \'shown = 0 AND sent = 0\'
);
($hook = s2_hook(\'blfn_for_premoderation_pre_comm_check_qr\')) ? eval($hook) : null;
$result = $s2_db->query_build($query) or error(__FILE__, __LINE__);
$new_comment_count += $s2_db->result($result);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_output_tag_form_loop_get_tags_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$info .= \'/\'.$row[\'post_count\'];

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_show_comments_pre_table_row_merge' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (strpos($mode, \'s2_blog\') === 0)
{
	$s2_blog_replace = array(
		\'DeleteComment\' => \'DeleteBlogComment\',
		\'edit_comment\' => \'edit_blog_comment\',
		\'mark_comment\' => \'mark_blog_comment\',
		\'hide_comment\' => \'hide_blog_comment\',
		\'\\\'s2_blog_\' => \'\\\'\',
	);
	$buttons = strtr($buttons, $s2_blog_replace);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'cmnt_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_GET[\'blog_unsubscribe\']))
{
	header(\'X-Powered-By: S2/\'.S2_VERSION);
	header(\'Content-Type: text/html; charset=utf-8\');

	if (isset($_GET[\'id\']) && isset($_GET[\'mail\']))
	{
		$query = array(
			\'SELECT\'	=> \'id, nick, email, ip, time\',
			\'FROM\'		=> \'s2_blog_comments\',
			\'WHERE\'		=> \'post_id = \'.intval($_GET[\'id\']).\' and subscribed = 1 and email = \\\'\'.$s2_db->escape($_GET[\'mail\']).\'\\\'\'
		);
		($hook = s2_hook(\'blcmnt_unsubscribe_pre_get_receivers_qr\')) ? eval($hook) : null;
		$result = $s2_db->query_build($query) or error(__FILE__, __LINE__);

		$found = false;
		while ($receiver = $s2_db->fetch_assoc($result))
			if ($_GET[\'blog_unsubscribe\'] == base_convert(substr(md5($receiver[\'id\'].$receiver[\'ip\'].$receiver[\'nick\'].$receiver[\'email\'].$receiver[\'time\']), 0, 16), 16, 36))
				$found = true;

		if ($found)
		{
			$query = array(
				\'UPDATE\'	=> \'s2_blog_comments\',
				\'SET\'		=> \'subscribed = 0\',
				\'WHERE\'		=> \'post_id = \'.intval($_GET[\'id\']).\' and subscribed = 1 and email = \\\'\'.$s2_db->escape($_GET[\'mail\']).\'\\\'\'
			);
			($hook = s2_hook(\'blcmnt_unsubscribe_pre_upd_qr\')) ? eval($hook) : null;
			$result = $s2_db->query_build($query) or error(__FILE__, __LINE__);

			$template = s2_get_service_template();
			$replace = array(
				\'<!-- s2_head_title -->\'	=> $lang_comments[\'Unsubscribed OK\'],
				\'<!-- s2_title -->\'			=> \'<h1>\'.$lang_comments[\'Unsubscribed OK\'].\'</h1>\',
				\'<!-- s2_text -->\'			=> $lang_comments[\'Unsubscribed OK info\'],
				\'<!-- s2_debug -->\'			=> defined(\'S2_SHOW_QUERIES\') ? s2_get_saved_queries() : \'\',
			);

			($hook = s2_hook(\'cmnt_pre_unsubscribed_output\')) ? eval($hook) : null;

			foreach ($replace as $what => $to)
				$template = str_replace($what, $to, $template);

			$s2_db->close();

			die($template);
		}
	}

	$template = s2_get_service_template();
	$replace = array(
		\'<!-- s2_head_title -->\'	=> $lang_comments[\'Unsubscribed failed\'],
		\'<!-- s2_title -->\'			=> \'<h1>\'.$lang_comments[\'Unsubscribed failed\'].\'</h1>\',
		\'<!-- s2_text -->\'			=> $lang_comments[\'Unsubscribed failed info\'],
		\'<!-- s2_debug -->\'			=> defined(\'S2_SHOW_QUERIES\') ? s2_get_saved_queries() : \'\',
	);

	($hook = s2_hook(\'cmnt_pre_unsubscribed_output\')) ? eval($hook) : null;

	foreach ($replace as $what => $to)
		$template = str_replace($what, $to, $template);

	$s2_db->close();

	die($template);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'idx_pre_rss' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($request_uri == S2_BLOG_URL.\'/rss.xml\')
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
	if (!defined(\'S2_BLOG_FUNCTIONS_LOADED\'))
		include $ext_info[\'path\'].\'/blog_functions.php\';
	if (!defined(\'S2_RSS_FUNCTIONS_LOADED\'))
		require S2_ROOT.\'_include/rss.php\';
	s2_no_cache(false);
	s2_do_rss();

	$s2_db->close();
	die;
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'cmnt_pre_send_mail' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_GET[\'type\']) && $_GET[\'type\'] == \'s2_blog\')
	$unsubscribe_link = str_replace(\'unsubscribe\', \'blog_unsubscribe\', $unsubscribe_link);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'idx_pre_meta_merge' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_s2_blog))
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
}
if (defined(\'S2_BLOG_HANDLED\'))
	$meta_tags[] = \'<link rel="alternate" type="application/rss+xml" title="\'.$lang_s2_blog[\'RSS link title\'].\'" href="\'.s2_link(str_replace(urlencode(\'/\'), \'/\', urlencode(S2_BLOG_URL)).\'/rss.xml\').\'" />\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_comment_form_pre_output' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (defined(\'S2_BLOG_HANDLED\') || isset($_GET[\'type\']) && $_GET[\'type\'] == \'s2_blog\')
	$action = S2_BASE_URL.\'/comment.php?type=s2_blog\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_do_rss_pre_get_articles' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($request_uri == S2_BLOG_URL.\'/rss.xml\')
{
	$s2_blog_posts = s2_blog_last_posts_array();
	$s2_blog_items = array();
	foreach ($s2_blog_posts as $s2_blog_post)
		$s2_blog_items[] = array(
			\'title\'			=> $s2_blog_post[\'title\'],
			\'text\'			=> $s2_blog_post[\'text\'].(!empty($s2_blog_post[\'tags\']) ? \'<p>\'.sprintf($lang_s2_blog[\'Tags:\'], $s2_blog_post[\'tags\']).\'</p>\' : \'\'),
			\'time\'			=> $s2_blog_post[\'create_time\'],
			\'modify_time\'	=> $s2_blog_post[\'modify_time\'],
			\'rel_path\'		=> str_replace(urlencode(\'/\'), \'/\', urlencode(S2_BLOG_URL)).date(\'/Y/m/d/\', $s2_blog_post[\'create_time\']).urlencode($s2_blog_post[\'url\']),
			\'author\'		=> $s2_blog_post[\'author\'],
		);
	return $s2_blog_items;
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  's2_search_action_makeindex' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($save_action == \'save_blog_\' && $id)
	$chapter = \'s2_blog_\'.$id;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'cmnt_pre_get_subscribers_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_GET[\'type\']) && $_GET[\'type\'] == \'s2_blog\')
	$query = array(
		\'SELECT\'	=> \'id, nick, email, ip, time\',
		\'FROM\'		=> \'s2_blog_comments\',
		\'WHERE\'		=> \'post_id = \'.$id.\' AND subscribed = 1 AND shown = 1 AND email <> \\\'\'.$s2_db->escape($email).\'\\\'\'
	);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_s2_count_rss_count_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

global $request_uri;
if ($request_uri == S2_BLOG_URL.\'/rss.xml\')
	$filename = \'/data/rss_s2_blog.txt\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  's2_search_find_tags_pre_mrg' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_s2_blog))
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
}

$s2_blog_search_sql = array(
	\'SELECT\'	=> \'count(*)\',
	\'FROM\'		=> \'s2_blog_post_tag AS pt\',
	\'JOINS\'		=> array(
		array(
			\'INNER JOIN\'	=> \'s2_blog_posts AS p\',
			\'ON\'			=> \'p.id = pt.post_id\'
		)
	),
	\'WHERE\'		=> \'pt.tag_id = t.tag_id AND p.published = 1\',
	\'LIMIT\'		=> \'1\'
);
($hook = s2_hook(\'s2_blog_pre_find_tags_sub_qr\')) ? eval($hook) : null;
$s2_blog_search_sub_sql = $s2_db->query_build($s2_blog_search_sql, true) or error(__FILE__, __LINE__);

$s2_blog_search_sql = array(
	\'SELECT\'	=> \'tag_id, name, url, (\'.$s2_blog_search_sub_sql.\') AS used\',
	\'FROM\'		=> \'tags AS t\',
	\'WHERE\'		=> \'name LIKE \\\'\'.$s2_db->escape(trim($s2_search_query)).\'%\\\'\',
);
($hook = s2_hook(\'s2_blog_pre_find_tags_qr\')) ? eval($hook) : null;
$s2_blog_result = $s2_db->query_build($s2_blog_search_sql) or error(__FILE__, __LINE__);

$s2_blog_found_tag = array();
while ($s2_blog_row = $s2_db->fetch_assoc($s2_blog_result))
{
	($hook = s2_hook(\'s2_blog_find_tags_get_res\')) ? eval($hook) : null;

	if ($s2_blog_row[\'used\'])
		$s2_blog_found_tag[] = \'<a href="\'.S2_BLOG_TAGS_PATH.urlencode($s2_blog_row[\'url\']).\'/">\'.$s2_blog_row[\'name\'].\'</a>\';
}

if (!empty($s2_blog_found_tag))
{
	$s2_blog_search_found = count($s2_search_found_tags);
	if ($s2_blog_search_found)
		$s2_search_found_tags[$s2_blog_search_found - 1] .= sprintf($lang_s2_blog[\'Found tags short\'], implode(\', \', $s2_blog_found_tag));
	else
		echo \'<p class="s2_search_found_tags">\'.sprintf($lang_s2_blog[\'Found tags\'], implode(\', \', $s2_blog_found_tag)).\'</p>\';
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'cmnt_pre_get_comment_count_qr' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_GET[\'type\']) && $_GET[\'type\'] == \'s2_blog\')
	$query = array(
		\'SELECT\'	=> \'count(id)\',
		\'FROM\'		=> \'s2_blog_comments\',
		\'WHERE\'		=> \'post_id = \'.$id.\' AND shown = 1\'
	);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  's2_search_fetcher_process_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

global $s2_db;
$query = array (
	\'SELECT\'	=> \'id, title, text, create_time, url\',
	\'FROM\'		=> \'s2_blog_posts\',
	\'WHERE\'		=> \'published = 1\'
);
($hook = s2_hook(\'s2_blog_pre_index_fetch\')) ? eval($hook) : null;
$result = $s2_db->query_build($query) or error(__FILE__, __LINE__);
while ($s2_blog_post = $s2_db->fetch_assoc($result))
{
	$indexer->buffer_chapter(\'s2_blog_\'.$s2_blog_post[\'id\'], $s2_blog_post[\'title\'], $s2_blog_post[\'text\'], \'\', \'\', $s2_blog_post[\'create_time\'], str_replace(urlencode(\'/\'), \'/\', urlencode(S2_BLOG_URL)).date(\'/Y/m/d\', $s2_blog_post[\'create_time\']).\'/\'.$s2_blog_post[\'url\']);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  's2_search_fetcher_texts_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$s2_blog_ids = array();
foreach ($ids as $k => $v)
	if (substr($v, 0, 8) == \'s2_blog_\')
	{
		unset($ids[$k]);
		$s2_blog_ids[] = (int) substr($v, 8);
	}

if (count($s2_blog_ids))
{
	$query = array (
		\'SELECT\'	=> \'id, text\',
		\'FROM\'		=> \'s2_blog_posts\',
		\'WHERE\'		=> \'published = 1 AND id IN (\'.implode(\', \', $s2_blog_ids).\')\',
	);
	($hook = s2_hook(\'s2_blog_pre_get_snippets_qr\')) ? eval($hook) : null;
	$result = $s2_db->query_build($query) or error(__FILE__, __LINE__);
	while ($s2_blog_post = $s2_db->fetch_assoc($result))
		$articles[\'s2_blog_\'.$s2_blog_post[\'id\']] = $s2_blog_post[\'text\'];
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  's2_search_fetcher_chapter_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (substr($id, 0, 8) == \'s2_blog_\')
{
	$query = array (
		\'SELECT\'	=> \'id, title, text, create_time, url\',
		\'FROM\'		=> \'s2_blog_posts\',
		\'WHERE\'		=> \'published = 1 AND id = \'.intval(substr($id, 8)),
	);
	($hook = s2_hook(\'s2_blog_pre_get_chapter_qr\')) ? eval($hook) : null;
	$result = $s2_db->query_build($query) or error(__FILE__, __LINE__);
	$s2_blog_post = $s2_db->fetch_assoc($result);
	if (!$s2_blog_post)
		return array();

	return array(
		$s2_blog_post[\'title\'],
		$s2_blog_post[\'text\'],
		\'\',
		array(
			\'title\'		=> $s2_blog_post[\'title\'],
			\'descr\'		=> \'\',
			\'time\'		=> $s2_blog_post[\'create_time\'],
			\'url\'		=> str_replace(urlencode(\'/\'), \'/\', urlencode(S2_BLOG_URL)).date(\'/Y/m/d\', $s2_blog_post[\'create_time\']).\'/\'.$s2_blog_post[\'url\'],
		)
	);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ai_js_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_counter\',
\'path\'			=> S2_ROOT.\'_extensions/s2_counter\',
\'url\'			=> S2_PATH.\'/_extensions/s2_counter\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!is_writable($ext_info[\'path\'].\'/data/\'))
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';

?>
PopupMessages.show(\'<?php printf($lang_s2_counter[\'Data folder not writable\'], $ext_info[\'path\'].\'/data/\'); ?>\');
<?php
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_search\',
\'path\'			=> S2_ROOT.\'_extensions/s2_search\',
\'url\'			=> S2_PATH.\'/_extensions/s2_search\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/worker.class.php\';
if ((is_file(S2_CACHE_DIR.s2_search_worker::index_name) ? filesize(S2_CACHE_DIR.s2_search_worker::index_name) : 0) == 0)
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';

?>
PopupMessages.show(\'<?php echo $lang_s2_search[\'Indexing required\']; ?>\', [
	{
		name: \'<?php echo $lang_s2_search[\'Index now\']; ?>\',
		action: s2_search.build_index,
		once: true
	}
]);
<?php
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_do_rss_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_counter\',
\'path\'			=> S2_ROOT.\'_extensions/s2_counter\',
\'url\'			=> S2_PATH.\'/_extensions/s2_counter\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!defined(\'S2_COUNTER_FUNCTIONS_LOADED\'))
	include $ext_info[\'path\'].\'/functions.php\';

s2_counter_rss_count($ext_info[\'path\']);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_stat_info_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_counter\',
\'path\'			=> S2_ROOT.\'_extensions/s2_counter\',
\'url\'			=> S2_PATH.\'/_extensions/s2_counter\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$output .= \'<fieldset><legend>Traffic</legend><div id="s2_counter_hits"><strong>You need to upgrade your Flash Player in order to view graphs.</strong></div></fieldset>\';
$output .= \'<fieldset><legend>RSS readers</legend><div id="s2_counter_rss"><strong>You need to upgrade your Flash Player in order to view graphs.</strong></div></fieldset>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_404_header_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_counter\',
\'path\'			=> S2_ROOT.\'_extensions/s2_counter\',
\'url\'			=> S2_PATH.\'/_extensions/s2_counter\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

global $s2_counter_skip;
$s2_counter_skip = true;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'idx_template_pre_replace' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_counter\',
\'path\'			=> S2_ROOT.\'_extensions/s2_counter\',
\'url\'			=> S2_PATH.\'/_extensions/s2_counter\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($s2_counter_skip) || !$s2_counter_skip)
{
	if (!defined(\'S2_COUNTER_FUNCTIONS_LOADED\'))
		include $ext_info[\'path\'].\'/functions.php\';

	s2_counter_process($ext_info[\'path\']);
}
$replace[\'<!-- s2_counter_img -->\'] = \'<img class="s2_counter" src="\'.$ext_info[\'url\'].\'/counter.php" width="88" height="31" />\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_latex\',
\'path\'			=> S2_ROOT.\'_extensions/s2_latex\',
\'url\'			=> S2_PATH.\'/_extensions/s2_latex\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$replace[\'<!-- s2_styles -->\'] .= "\\n".\'<script type="text/javascript" src="http://tex.s2cms.ru/latex.js"></script>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_search\',
\'path\'			=> S2_ROOT.\'_extensions/s2_search\',
\'url\'			=> S2_PATH.\'/_extensions/s2_search\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($request_uri) && $request_uri == \'/search\' || isset($_GET[\'search\']) && isset($_GET[\'q\']))
{
	$replace[\'<!-- s2_styles -->\'] = \'<link rel="stylesheet" type="text/css" href="\'.$ext_info[\'url\'].\'/style.css" />\'.(isset ($replace[\'<!-- s2_styles -->\']) ? "\\n".$replace[\'<!-- s2_styles -->\'] : \'\');
	$replace[\'<!-- s2_search_field -->\'] = \'\';
}
else
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
	$replace[\'<!-- s2_search_field -->\'] = \'<form class="s2_search_form" method="get" action="\'.(S2_URL_PREFIX ? S2_PATH.S2_URL_PREFIX : S2_PATH.\'/search\').\'">\'.(S2_URL_PREFIX ? \'<input type="hidden" name="search" value="1" />\' : \'\').\'<input type="text" name="q" class="inactive" id="s2_search_input" onblur="if(this.value==\\\'\\\'){this.value=this.defaultValue; this.className=\\\'inactive\\\';}" onfocus="if(this.value==this.defaultValue){this.value=this.className=\\\'\\\';}" value="\'.$lang_s2_search[\'Search\'].\'"/></form>\';
}

if (S2_SEARCH_QUICK)
	$replace[\'<!-- s2_styles -->\'] = (isset ($replace[\'<!-- s2_styles -->\']) ? $replace[\'<!-- s2_styles -->\']."\\n" : \'\').\'<script type="text/javascript" src="\'.$ext_info[\'url\'].\'/autosearch.js"></script>\'."\\n".\'<script type="text/javascript">var s2_search_url = "\'.$ext_info[\'url\'].\'";</script>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_toolbar_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_highlight\',
\'path\'			=> S2_ROOT.\'_extensions/s2_highlight\',
\'url\'			=> S2_PATH.\'/_extensions/s2_highlight\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
	require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
else
	require $ext_info[\'path\'].\'/lang/English.php\';

$toolbar = str_replace(\'</div>\', \'<img id="s2_highlight_toggle_button" src="i/1.gif" alt="\'.$lang_s2_highlight[\'Highlight html\'].\'" />\'."\\n\\t".\'</div>\', $toolbar);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ai_pre_get_tpl_styles' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_latex\',
\'path\'			=> S2_ROOT.\'_extensions/s2_latex\',
\'url\'			=> S2_PATH.\'/_extensions/s2_latex\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

echo "\\n".\'<script type="text/javascript" src="http://tex.s2cms.ru/latex.js"></script>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_comment_form_pre_syntax_info' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_latex\',
\'path\'			=> S2_ROOT.\'_extensions/s2_latex\',
\'url\'			=> S2_PATH.\'/_extensions/s2_latex\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
	require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
else
	require $ext_info[\'path\'].\'/lang/English.php\';
echo $lang_s2_latex[\'Comment syntax\'];

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_get_service_template_pre_replace' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_latex\',
\'path\'			=> S2_ROOT.\'_extensions/s2_latex\',
\'url\'			=> S2_PATH.\'/_extensions/s2_latex\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$replace[\'<!-- s2_styles -->\'] .= "\\n".\'<script type="text/javascript" src="http://tex.s2cms.ru/latex.js"></script>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'idx_get_content' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_search\',
\'path\'			=> S2_ROOT.\'_extensions/s2_search\',
\'url\'			=> S2_PATH.\'/_extensions/s2_search\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($request_uri == \'/search\' || isset($_GET[\'search\']) && isset($_GET[\'q\']))
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
	require $ext_info[\'path\'].\'/main.php\';
	return true;
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_blog\',
\'path\'			=> S2_ROOT.\'_extensions/s2_blog\',
\'url\'			=> S2_PATH.\'/_extensions/s2_blog\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (substr($request_uri, 0, strlen(S2_BLOG_URL)) == S2_BLOG_URL)
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
	if (!defined(\'S2_BLOG_FUNCTIONS_LOADED\'))
		include $ext_info[\'path\'].\'/blog_functions.php\';
	return include $ext_info[\'path\'].\'/main.php\';
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_s2_error_404_pre_replace' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_search\',
\'path\'			=> S2_ROOT.\'_extensions/s2_search\',
\'url\'			=> S2_PATH.\'/_extensions/s2_search\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($request_uri) && $request_uri == \'/search\' || isset($_GET[\'search\']) && isset($_GET[\'q\']))
{
	$replace[\'<!-- s2_styles -->\'] = \'<link rel="stylesheet" type="text/css" href="\'.$ext_info[\'url\'].\'/style.css" />\'.(isset ($replace[\'<!-- s2_styles -->\']) ? "\\n".$replace[\'<!-- s2_styles -->\'] : \'\');
	$replace[\'<!-- s2_search_field -->\'] = \'\';
}
else
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
	$replace[\'<!-- s2_search_field -->\'] = \'<form class="s2_search_form" method="get" action="\'.(S2_URL_PREFIX ? S2_PATH.S2_URL_PREFIX : S2_PATH.\'/search\').\'">\'.(S2_URL_PREFIX ? \'<input type="hidden" name="search" value="1" />\' : \'\').\'<input type="text" name="q" class="inactive" id="s2_search_input" onblur="if(this.value==\\\'\\\'){this.value=this.defaultValue; this.className=\\\'inactive\\\';}" onfocus="if(this.value==this.defaultValue){this.value=this.className=\\\'\\\';}" value="\'.$lang_s2_search[\'Search\'].\'"/></form>\';
}

if (S2_SEARCH_QUICK)
	$replace[\'<!-- s2_styles -->\'] = (isset ($replace[\'<!-- s2_styles -->\']) ? $replace[\'<!-- s2_styles -->\']."\\n" : \'\').\'<script type="text/javascript" src="\'.$ext_info[\'url\'].\'/autosearch.js"></script>\'."\\n".\'<script type="text/javascript">var s2_search_url = "\'.$ext_info[\'url\'].\'";</script>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ai_pre_options' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_tpl_edit\',
\'path\'			=> S2_ROOT.\'_extensions/s2_tpl_edit\',
\'url\'			=> S2_PATH.\'/_extensions/s2_tpl_edit\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($s2_user[\'edit_users\'])
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.S2_LANGUAGE.\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';
	require $ext_info[\'path\'].\'/functions.php\';
?>
<style>#admin-tpl_tab:before { background-position: -32px -64px; }</style>
				<dt id="admin-tpl_tab"><?php echo $lang_s2_tpl_edit[\'Templates\']; ?></dt>
				<dd class="inactive">
					<div class="reducer" id="s2_tpl_edit_div"><?php echo s2_tpl_edit_form(); ?></div>
				</dd>
<?php
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_get_template_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_tpl_edit\',
\'path\'			=> S2_ROOT.\'_extensions/s2_tpl_edit\',
\'url\'			=> S2_PATH.\'/_extensions/s2_tpl_edit\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$s2_tpl_edit_cached)
	copy($path, S2_CACHE_DIR.\'s2_tpl_edit_\'.S2_STYLE.\'_\'.$template_id);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_get_template_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_tpl_edit\',
\'path\'			=> S2_ROOT.\'_extensions/s2_tpl_edit\',
\'url\'			=> S2_PATH.\'/_extensions/s2_tpl_edit\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$s2_tpl_edit_cached = false;
if (file_exists(S2_CACHE_DIR.\'s2_tpl_edit_\'.S2_STYLE.\'_\'.$template_id))
{
	$path = S2_CACHE_DIR.\'s2_tpl_edit_\'.S2_STYLE.\'_\'.$template_id;
	$s2_tpl_edit_cached = true;
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'cmnt_preview_pre_output' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_typo\',
\'path\'			=> S2_ROOT.\'_extensions/s2_typo\',
\'url\'			=> S2_PATH.\'/_extensions/s2_typo\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/functions.php\';
$template = s2_typo_make($template);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'idx_template_after_replace' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_typo\',
\'path\'			=> S2_ROOT.\'_extensions/s2_typo\',
\'url\'			=> S2_PATH.\'/_extensions/s2_typo\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/functions.php\';
$template = s2_typo_make($template);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ai_after_js_init' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_wysiwyg\',
\'path\'			=> S2_ROOT.\'_extensions/s2_wysiwyg\',
\'url\'			=> S2_PATH.\'/_extensions/s2_wysiwyg\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

?>
var s2_wysiwyg_pict_url = \'<?php echo S2_PATH; ?>/_admin/pictman.php\';
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_toolbar_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_wysiwyg\',
\'path\'			=> S2_ROOT.\'_extensions/s2_wysiwyg\',
\'url\'			=> S2_PATH.\'/_extensions/s2_wysiwyg\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

return \'<hr />\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_output_article_form_pre_text' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_wysiwyg\',
\'path\'			=> S2_ROOT.\'_extensions/s2_wysiwyg\',
\'url\'			=> S2_PATH.\'/_extensions/s2_wysiwyg\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$padding -= 2.583333;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_s2_blog_edit_post_form_pre_text' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'s2_wysiwyg\',
\'path\'			=> S2_ROOT.\'_extensions/s2_wysiwyg\',
\'url\'			=> S2_PATH.\'/_extensions/s2_wysiwyg\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$padding -= 2.583333;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
);