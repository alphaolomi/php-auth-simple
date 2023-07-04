<?php


print_r(hash_hmac_algos());
// 43 algos

echo hash_hmac('ripemd160', 'The quick brown fox jumped over the lazy dog.', 'secret');