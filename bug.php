This code uses the `mysql_*` functions, which are deprecated and have been removed in PHP 7.4.  Attempting to use them will result in an error. 
```php
<?php
$link = mysql_connect('localhost', 'my_user', 'my_password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
```