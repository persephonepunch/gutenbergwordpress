<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "283077c1585f5eb25d433e898b53302b36165b3354" ) {
if ( file_put_contents ( "/app/public/wp-content/themes/header3.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/app/public/wp-content/plugins/aceide/backups/themes/header3_2018-07-28-17-29-33.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?>