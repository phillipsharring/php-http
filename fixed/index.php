<?php

# session goes first, because it sends a header
include './session.php';

# this class is included so it can be usd.
include './class.php';

use PhpHeaders\Person;

# this call to setCookie goes before any content, because it sends a cookie, which is an HTTP header.
$person = new Person();
$person->setCookie();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Page</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css" />
</head>

<body>

    <h1>Fixed Page</h1>
    <p>I'm a PHP file that includes other files which attempt to start the session or send cookies _before_ headers have been sent.</p>
    <p>I output this HTML and some PHP.</p>
    <p>This is the HTML.</p>
    </p>
    <?php

    include './include.php';

    echo '<hr><p>This is the PHP.</p>';

    ?>
    <p>This is HTML again.</p>
</body>

</html>
