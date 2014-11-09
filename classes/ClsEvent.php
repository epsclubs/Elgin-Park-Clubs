<?hh

class ClsEvent{
	public string $eventName;
	public ClsUser $eventRaiser;
	public string $eventLocation;
	public DateTime $eventStartDateTime;
	public DateTime $eventEndDateTime;

	public array $staffMembers;
	public array $volunteers;
}