<?php

// This is only an example, the numbers below will
// differ depending on your system
// @param bool $real_usage
// [optional] Set this to true to get the real size of memory allocated from system. If not set or false only the memory used by emalloc() is reported.

// @return int — the memory amount in bytes.
echo '[start] Usage: ' . memory_get_usage($real_usage = false) . "\n"; // 36640

$a = str_repeat("Hello", 4242);

echo '[proc] Usage: ' . memory_get_usage() . "\n"; // 57960

unset($a);

echo '[peak] Usage: '.memory_get_peak_usage($real_usage = false). "\n";

echo '[final] Usage: ' . memory_get_usage() . "\n"; // 36744
