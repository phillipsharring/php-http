<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broken PHP Script</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css" />
</head>

<body>

    <h1>Broken PHP Script</h1>
    <p>I'm a PHP file that includes other files which attempt to start the session or send cookies after headers have been sent.</p>
    <p>I output this HTML and some PHP.</p>
    <p>Headers have already been sent.</p>
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
