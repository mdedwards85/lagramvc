<?php



// turn on/off error display

ini_set("display_errors", "1");



/**
* Root directory of application.
*
* @var			string ROOT_PATH
*/ 

define("ROOT_PATH", dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);



/**
* Main entry point of application.
*
* @name			main
* @return		void
*/

function main() {

	echo "URI: " . $_SERVER["REQUEST_URI"];

	return;

}



// call main entry point function then exit

main();

exit(0);
