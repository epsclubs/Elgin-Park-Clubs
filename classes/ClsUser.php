<?hh

class ClsUser{
	public string $userEmail;
	private string $userPass;
	public string $firstName;
	public string $lastName;
	private int $studentNumber;
	public int $classOf;

	public int $volunteerHrs;
	public array $eventsVolunteered; //list of events volunteered at
}