<?php

$source = <<<'code'
<?php

class Circle
{
    private $radius;
    const PI = 3.14;

    public function __constructor(int|float $radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return $this->radius;
    }
}
code;

$tokens = token_get_all($source, TOKEN_PARSE);

foreach ($tokens as $token) {
    if (is_array($token)) {
        // echo token_name($token[0]) , PHP_EOL;
        echo "Line {$token[2]}:\t". token_name($token[0]). "\t('".trim($token[1])."')". PHP_EOL;
    }
}
