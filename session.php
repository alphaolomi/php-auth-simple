<?php
// page1.php

session_start();

// // This sends a persistent cookie that lasts a day.
// session_start([
//     'cookie_lifetime' => 86400,
// ]);

// // If we know we don't need to change anything in the
// // session, we can just read and close right away to avoid
// // locking the session file and blocking other pages
// session_start([
//     'cookie_lifetime' => 86400,
//     'read_and_close'  => true,
// ]);

echo 'Welcome to page #1';

$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

// Works if session cookie was accepted
echo '<br /><a href="page2.php">page 2</a>';

// Or maybe pass along the session id, if needed
echo '<br /><a href="page2.php?' . SID . '">page 2</a>';
?>