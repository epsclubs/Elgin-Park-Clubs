<?hh //strict
require '../vendor/autoload.php';
//phpinfo();
$m = new MongoClient('mongodb://admin:test@dogen.mongohq.com:10080/epsclubs');
echo '<pre>';
//var_dump($m);
echo '</pre>';