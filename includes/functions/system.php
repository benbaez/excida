<?php

// ----------------------------------------------------------------------------
// printdate($date)
//
// returns the date converted to the format specified in $lang['Date_Format']
//
// $date - date string, e.g DD-MM-YYYY
//

function printdate($date) {

 global $lang;

 $search = array ( '/y/', '/m/', '/d/' );
 $replace = explode ( '-', $date );
 $date = preg_replace ( $search, $replace, $lang['Date_Format'] );
 return $date;

}

// ----------------------------------------------------------------------------
// rewrite($message)
//
// converts the string to be safely used in mod_rewrite rewritten URLs
//
// $message - string
//

function rewrite($message) {

 $message = preg_replace('#[\s_/]+#', '_', $message);
 return urlencode(@trim($message, '_'));
}

// ----------------------------------------------------------------------------
// htmlErrorBox($id)
//
// shows the box with error, does not stop the script
//
// $text - error text
//

function htmlErrorBox($text) {
 return '<div style="background-color:#FF0000;font-size:12px;color:#FFFFFF;border:1px solid #FFBABA; padding:10px;" id="errorBox">' . $text . '</div> <br />';
}

// ----------------------------------------------------------------------------
// gd_version()
//
// returns the version of GD library
//

function gd_version() {

 static $gd_version_number = null;

 if ($gd_version_number === null) {
  $gdinfo = gd_info();

  if( is_array($gdinfo) && isset( $gdinfo['GD Version'] )) {
   $gd_version_number = $gdinfo['GD Version'];
  } else {
   $gd_version_number = 0;
  }

 }

 return $gd_version_number;

} 

?>
