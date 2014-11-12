<?hh //strict
namespace EPSClubs;
class User{
	public string $userEmail;
	public int $userID;
	private string $userPass;
	public string $firstName;
	public string $lastName;
	private int $studentNumber;
	public int $classOf;

	public float $volunteerHrs;
	public ?array<ClsEvent> $eventsVolunteered; //list of events volunteered at

	public function __construct(string $_email,
								int $_id,
								string $_pass,
								string $_firstName,
								string $_lastName,
								int $_studentNumber,
								int $_classOf,
								float $_volunteerHrs,
								?array<ClsEvent> $_eventsVolunteered)
	{
		$this->userEmail = $_email;
		$this->userID = $_id;
		$this->userPass = $_pass;
		$this->firstName = $_firstName;
		$this->lastName = $_lastName;
		$this->studentNumber = $_studentNumber;
		$this->classOf = $_classOf;
		$this->volunteerHrs = $_volunteerHrs;
		$this->eventsVolunteered = $_eventsVolunteered;
	}

	public function toArray():array<T>{
		return array('userEmail' => $this->userEmail,
						'userPass' => $this->userPass,
						'firstName' => $this->firstName,
						'lastName' => $this->lastName,
						'studentNumber' => $this->studentNumber,
						'classOf' => $this->classOf,
						'volunteerHrs' => $this->volunteerHrs);
	}
}