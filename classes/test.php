<?hh //strict
require '../vendor/autoload.php';

// function __autoload($class_name) {
    //include 'ClsUser.php';
// }
//use EPSClubs as eps;
//phpinfo();
$m = new MongoClient('mongodb://admin:test@dogen.mongohq.com:10080/epsclubs');
$collectionUsers = $m->epsclubs->users;
echo '<pre>';
$bob = new EPSClubs\User('email','pass','fn','ln',1116811,2015,5.6,null);
//$collectionUsers->save($bob->toArray());
//var_dump($collectionUsers->findOne());
echo '</pre>';