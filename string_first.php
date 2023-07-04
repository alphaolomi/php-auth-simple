<?php
$email  = 'alphaolomi@gmail.com';
echo "Email: $email\n";

$domain = strstr($email, '@');
echo "Domain: $domain\n"; // prints @example.com

$user = strstr($email, '@', true);
echo "Name: $user\n"; // prints name
