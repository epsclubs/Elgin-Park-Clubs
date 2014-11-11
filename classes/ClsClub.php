<?hh //strict
class ClsClub{
	public string $clbName;
	public array<ClsClubAdmin> $clbAdmins;
	public array<ClsClubMember> $clbMembers;
	public array<ClsEvent> $clbEvents;

	public function __construct(string $_name,
								array<ClsClubAdmin> $_admins,
								array<ClsClubMember> $_members,
								array<ClsEvent> $_events)
	{
		$this->clbName = $_name;
		$this->clbAdmins = $_admins;
		$this->clbMembers = $_members;
		$this->clbEvents = $_events;
	}
}