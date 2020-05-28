<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
  header('Location: ../../');
  exit;
}


qa_register_plugin_overrides('users-overrides.php'); 

/*
qa_register_plugin_module(
  'page', // type of module
  'users-page.php', // PHP file containing module class
  'users', // name of module class
  'UsersA' // human-readable name of module
);

*/


