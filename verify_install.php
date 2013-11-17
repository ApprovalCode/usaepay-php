<?php
// Approval Code PHP Library.
//      v1.6 
//
//  The following script uses the Test function to verify
//  that your PHP installation can properly communicate with
//  the Approval Code Gateway.  If a problem is detected, potential
//  solutions will be suggested.  If none of the suggestions
//  work for you, please contact support for additional
//  assistance.
//


// Change this path to match the location of your approvalcode.php file
include "/home/approvalcode-php/approvalcode.php";


$tran=new umTransaction();

// Uncomment this line to specify a root ca bundle location for Windows
//$tran->cabundle='c:\windows\curl-ca-bundle.crt';

// Uncomment this line to specify a root ca bundle location for Unix
//$tran->cabundle='/usr/share/curl/curl-ca-bundle.crt';

$tran->Test();

?>
