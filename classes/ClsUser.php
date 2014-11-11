<?hh //strict

class ClsUser{
	public string $userEmail;
	private string $userPass;
	public string $firstName;
	public string $lastName;
	private int $studentNumber;
	public int $classOf;

	public float $volunteerHrs;
	public ?array<ClsEvent> $eventsVolunteered; //list of events volunteered at

	public function __construct(string $_email,
								string $_pass,
								string $_firstName,
								string $_lastName,
								int $_studentNumber,
								int $_classOf,
								float $_volunteerHrs,
								array<ClsEvent> $_eventsVolunteered)
	{
		$this->userEmail = $_email;
		$this->userPass = $_pass;
		$this->firstName = $_firstName;
		$this->lastName = $_lastName;
		$this->studentNumber = $_studentNumber;
		$this->classOf = $_classOf;
		$this->volunteerHrs = $_volunteerHrs;
		$this->eventsVolunteered = $_eventsVolunteered;
	}
}