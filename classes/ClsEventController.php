<?hh //strict
/**
 * Controlling the modification of event properties.
 * @method addEvent, removeEvent, getInfo, updateEvent
 */
class ClsEventController{
	public static string $errorMsg = '';

	public static function addEvent(): bool{return true;}
	public static function removeEvent(ClsEvent $event): bool{return true;}
	public static function getInfo(string $eventName): ClsEvent{return new ClsEvent();}
	public static function updateEvent(ClsEvent $event): bool{return true;}
}