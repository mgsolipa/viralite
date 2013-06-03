<?php
if( (isset($_GET['method']) && isset($_GET['file'])) && 
	($_GET['method']=='tweet' || $_GET['method']=='share') ) {

	$filepath = 'descargas/'.$_GET['file'] . '.pdf';

	if(file_exists($filepath))
		header('Location: ' . $filepath);
	else
		die('Error');
}
else 
	die ('Error');

