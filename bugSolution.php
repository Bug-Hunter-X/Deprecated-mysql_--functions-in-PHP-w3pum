The following code uses MySQLi to connect to the database.  It's safer, more efficient, and supports prepared statements to prevent SQL injection vulnerabilities. 
```php
<?php
$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
if ($mysqli->connect_errno) {
die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}
echo 'Connected successfully';
$mysqli->close();
?>
```