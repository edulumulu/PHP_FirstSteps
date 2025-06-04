<?php


//HEREDOC IDENTIFICADOR CON LA PALABRA DESPUES DE <<<
$str = <<<EOD
Ejemplo de string
extendiéndose en varias líneas
usando la sintaxis heredoc.
EOD;

/* Ejemplo más complejo, con variables. */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
Mi nombre es "$name". Estoy imprimiendo $foo->foo.
Ahora, imprimo {$foo->bar[1]}.
Esto debería imprimir una 'A' mayúscula : \x41
EOT;
?>

