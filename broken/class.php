<?php

declare(strict_types=1);

namespace PhpHeaders;

class Person
{
    public function __construct(public $greeting = 'Hi')
    {
        echo '<p>I\'m a class that has a closing PHP bracket and new lines at the end of the file.</p>';
    }

    public function setCookie()
    {
        setCookie('yummy_treat', 'broken');
    }
}

?>

