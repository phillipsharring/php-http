<hr>
<?php

echo '<p>I\'m a PHP file with content before the opening PHP bracket that attempts to start the session after headers have been sent, but it doesn\'t matter</p>';

session_start();
