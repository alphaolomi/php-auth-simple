<?php
class Testing
{
    final public static function foo()
    {
        return;
    }

    public function bar()
    {
        return;
    }
}

// Method
// $foo = new ReflectionMethod('Testing', 'foo');

// echo "Modifiers for method foo():\n";
// echo $foo->getModifiers() . "\n";
// echo implode(' ', Reflection::getModifierNames($foo->getModifiers())) . "\n";

// $bar = new ReflectionMethod('Testing', 'bar');

// echo "Modifiers for method bar():\n";
// echo $bar->getModifiers() . "\n";
// echo implode(' ', Reflection::getModifierNames($bar->getModifiers()));

// Class
class Foo {
    public    $foo  = 1;
    protected $bar  = 2;
    private   $baz  = 3;
}

$foo = new Foo();
$reflect = new ReflectionClass($foo);
$props   = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);

foreach ($props as $prop) {
    print $prop->getName() . "\n";
}

var_dump($props);
