<?php

function qac_approved_user() {

  $l_output = qa_get_logged_in_level() >= QA_USER_LEVEL_APPROVED;
  return $l_output;

}


function qa_content_prepare($voting = false, $categoryids = null)
{
    $l_content = qa_content_prepare_base($voting, $categoryids);

    $l_confirmed = qac_approved_user();

    if (!$l_confirmed) {
        unset($l_content['navigation']['main']['users']);
    }

    return $l_content;
}


function qa_page_routing() {

  $l_routing = qa_page_routing_base();

  $l_confirmed = qac_approved_user();

//print_r ($l_routing);

  if (!$l_confirmed) {
    
    $l_routing['user/'] = '../qa-plugin/q2a-hide-users-list/no-permission.php';
  }

   return $l_routing;

}



function qa_get_one_user_html($handle, $microdata = false, $favorited = false)	{

  $l_confirmed = qac_approved_user();

  if ($l_confirmed) {
    $l_output = qa_get_one_user_html_base($handle, $microdata, $favorited);
  } else {
    $l_output = "$handle";
  }
	return $l_output;

}


function qa_get_avatar_blob_url($blobId, $size = null, $absolute = false) {
  $l_confirmed = qac_approved_user();

  if ($l_confirmed) {
    $l_output = qa_get_avatar_blob_url_base($blobId, $size, $absolute);
  } else {
    $l_output = qa_get_avatar_blob_url_base($blobId, $size, $absolute);
  }
	return $l_output;
}