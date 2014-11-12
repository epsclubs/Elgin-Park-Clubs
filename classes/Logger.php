<?hh //strict
namespace EPSClubs;

class Logger{
	public static function logError($_sender,$_msg){
		echo $_sender.': '.$_msg; //log it to db
	}
}