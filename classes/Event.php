<?hh //strict
namespace EPSClubs;

class Event{
	public int $eventID;
	public string $eventCode;
	public string $eventName;
	public string $eventDescription;
	public ClsUser $eventRaiser;
	public string $eventLocation;
	public DateTime $eventStartDateTime;
	public DateTime $eventEndDateTime;

	public ?array<ClsUser> $staffMembers;
	public ?array<ClsUser> $volunteers;

	public function __construct(int $_id,
								string $_code,
								string $_name,
								string $_description,
								ClsUser $_raiser,
								string $_location,
								DateTime $_startTime,
								DateTime $_endTime,
								array<ClsUser> $_staff,
								array<ClsUser> $_volunteer)
	{
		$this->eventID = $_id;
		$this->eventCode = $_code;
		$this->eventName = $_name;
		$this->eventDescription = $_description;
		$this->eventRaiser = $_raiser;
		$this->eventLocation = $_location;
		$this->eventStartDateTime = $_startTime;
		$this->eventEndDateTime = $_endTime;
		$this->staffMembers = $_staff;
		$this->volunteers = $_volunteer;
	}
}