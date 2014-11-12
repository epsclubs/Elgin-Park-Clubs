<?hh //strict
namespace EPSClubs;

class Event{
	public string $eventName;
	public ClsUser $eventRaiser;
	public string $eventLocation;
	public DateTime $eventStartDateTime;
	public DateTime $eventEndDateTime;

	public ?array<ClsUser> $staffMembers;
	public ?array<ClsUser> $volunteers;

	public function __construct(string $_name,
								ClsUser $_raiser,
								string $_location,
								DateTime $_startTime,
								DateTime $_endTime,
								array<ClsUser> $_staff,
								array<ClsUser> $_volunteer)
	{
		$this->eventName = $_name;
		$this->eventRaiser = $_raiser;
		$this->eventLocation = $_location;
		$this->eventStartDateTime = $_startTime;
		$this->eventEndDateTime = $_endTime;
		$this->staffMembers = $_staff;
		$this->volunteers = $_volunteer;
	}
}