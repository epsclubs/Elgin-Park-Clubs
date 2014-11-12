<?hh //strict
namespace EPSClubs;

class MysqliConnector{
	private static string $host = 'wrssnewcomers.com';
	private static string $db = 'newcomer_epsclubs';
	private static string $user = 'newcomer_eps';
	private static string $pass = 'epsclubs';

	public static function connect(): ?\mysqli{
		$mysqli = new \mysqli(self::$host, self::$user, self::$pass, self::$db);
		return (!mysqli_connect_errno()) ? $mysqli : Logger::logError('MysqliConnector','Connection failed: '.mysqli_connect_error());
	}
}