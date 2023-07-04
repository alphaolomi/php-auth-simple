<?php

$pspell = pspell_new("en");
$word = "testt";
echo "Word: " . $word;
// Dictionary $dictionary, string $word
if (!pspell_check($pspell, $word)) {
    $suggestions = pspell_suggest($pspell, $word);

    if($suggestions == false){
        echo "No possible spellings\n\n";
    }

    foreach ($suggestions as $suggestion) {
        echo "Possible spelling: $suggestion\n";
    }
}
