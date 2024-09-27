<?php

declare(strict_types=1);

namespace PhpHeaders;

class Person
{
    public function __construct(public $greeting = 'Hi')
    {
        // echo '<p>I\'m a pure PHP that <strike>has a closing PHP bracket and new lines at the end of the file</strike>.</p>';
    }

    public function setCookie()
    {
        setCookie('yummy_treat', 'fixed');
    }
}
