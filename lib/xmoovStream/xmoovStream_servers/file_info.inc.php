<?php 
/*

	xmoovStream Server Configuration - File Information Server
	########################################################################
	
	xmoovStream Server Version: 0.8.4b
	
	Author: Eric Lorenzo Benjamin jr. stream (AT) xmoov (DOT) com
	License: Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License. http://stream.xmoov.com/support/licensing/	
	
	Description:
	########################################################################
	
	This configuration is used for extracting file information.
	Requires no htaccess file.
	
*/
define ('XS_PROVIDER', 'File Information Server');
function init_server ()
{
	$config = array
	(	
		'show_errors' => false
	);
	return $config;
}
?>