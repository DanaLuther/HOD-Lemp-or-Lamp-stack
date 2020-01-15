<?
/**
 * mysql-check.php
 */

try
{
	$db = new \PDO('mysql:host=db', 'root', 'sup3rs3cr3tp4ssw0rd');
	echo "MySQL Version: " . $db->getAttribute(\PDO::ATTR_CLIENT_VERSION);
} catch (\Exception $e)
{
	echo "Aw shucks pardner, {$e->getMessage()}";
}