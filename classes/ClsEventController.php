<?hh
/**
 * Controlling the modification of event properties.
 * @method addEvent, removeEvent, editEvent(get, update)
 */
class ClsEventController{
	public static string $errorMsg;

	public static function addEvent(): ClsEvent{}
	public static function removeEvent(ClsEvent $event): bool{}
	public static function getEvent(string $eventName): ClsEvent{}
	public static function updateEvent(ClsEvent $event): bool{}
}