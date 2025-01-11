# Deprecated mysql_* functions in PHP

This repository demonstrates a common error in PHP code: the use of deprecated `mysql_*` functions. These functions are no longer supported and have been removed from PHP 7.4 onwards.  Attempting to use them will result in a fatal error.

The `bug.php` file contains the problematic code. The `bugSolution.php` file provides a corrected version using MySQLi.

## Solution

Always use either MySQLi or PDO for database interaction in modern PHP applications. These offer improved security, performance, and support for object-oriented programming.