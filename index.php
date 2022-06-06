<?php
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
echo 'php website';

include 'db_connect.php';
require 'feedbackPage.html';

exit;
