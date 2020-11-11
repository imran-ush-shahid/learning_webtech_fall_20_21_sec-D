<?php

setcookie('flag', 'true', time()-200, '/');

header('location: ../login.html');

?>