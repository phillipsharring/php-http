<?php

ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed PHP Script w/ Output Buffering</title>
</head>

<body>

    <h1>Fixed PHP Script w/ Output Buffering</h1>
    <p>I'm a PHP file that includes other files which attempt to start the session or send cookies <strike>after headers have been sent</strike> before headers have been sent because of output buffering.</p>
    <p>I output this HTML and some PHP.</p>
    <p><strike>Headers have already been sent.</strike></p>
    <p>This is the HTML.</p>
    </p>
    <?php

    include './include.php';
    include './session.php';
    include './class.php';

    use PhpHeaders\Person;

    echo '<hr><p>This is the PHP.</p>';

    $person = new Person();
    $person->setCookie();

    ?>
    <p>This is HTML again.</p>
</body>

</html>
<?

ob_end_flush();
