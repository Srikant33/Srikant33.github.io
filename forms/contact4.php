<?php

/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'k.iyer@ufl.edu';


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

if (file_exists($php_email_form = 'https://africatravelvicfalls.com/contact-us/assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
  // $txt = "Jane Doe\n";
  fwrite($myfile, $php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}


fclose($myfile);
