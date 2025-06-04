<?php
echo "<form method='POST'><textarea name='entrada'></textarea><input type='submit'></form>";
if ($_POST) file_put_contents("entradas.txt", $_POST['entrada'] . PHP_EOL, FILE_APPEND);
