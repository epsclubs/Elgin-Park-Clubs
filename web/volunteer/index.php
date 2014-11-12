<?hh //strict

require '../../vendor/autoload.php';
$t = microtime(true);
var_dump(EPSClubs\MysqliConnector::connect());
echo microtime(true) - $t;