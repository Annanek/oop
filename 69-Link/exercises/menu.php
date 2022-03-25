<?php
require_once('../Link.php');

define('ROOT', '/69-Link/exercises/');
?>

<h1>Menu</h1>

<ul>
<?php

for ($i = 1; $i <= 5; $i++)
{
    echo '<li>';
    echo (new Link)->setText("$i")->setAttr('href', ROOT . "$i.php")->show();
    echo '</li>';
}

?>
</ul>

<?php
echo $_SERVER['REQUEST_URI'];
