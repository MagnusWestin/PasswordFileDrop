<?php
   require_once( './config.php' );
   $pwd = $_POST['password'];
   $oUniqueString = openssl_random_pseudo_bytes( 32 );
   //error_log( print_r( $oUniqueString, TRUE ) );
   $oUniqueString = bin2hex( $oUniqueString );
   error_log( print_r( $oUniqueString, TRUE ) );
   error_log( print_r( "data/" . $oUniqueString . ".pwd", TRUE ) );
   $oFile = fopen( "data/" . $oUniqueString . ".pwd", "w" );
   fwrite( $oFile, $pwd );
   fclose( $oFile );
   echo SERVER_URL . "?PWD=" . $oUniqueString;
?>