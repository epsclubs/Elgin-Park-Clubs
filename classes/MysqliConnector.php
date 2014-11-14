<?hh //strict
namespace EPSClubs;

class MysqliConnector{
	private static string $host = 'host';
	private static string $db = 'db';
	private static string $user = 'user';
	private static string $pass = 'pass';

	public static function connect(): ?\mysqli{
		$mysqli = new \mysqli(self::$host, self::$user, self::$pass, self::$db);
		return (!mysqli_connect_errno()) ? $mysqli : Logger::logError('MysqliConnector','Connection failed: '.mysqli_connect_error());
	}
}