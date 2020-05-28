<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}


$qa_content = qa_content_prepare();

//$qa_content['title'] = qa_lang_html('main/nav_users');

//$qa_content['canonical'] = qa_get_canonical();

$qa_content['error'] = qa_lang_html('users/no_permission'); 




return $qa_content;
