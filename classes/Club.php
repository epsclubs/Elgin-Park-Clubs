<?hh //strict
namespace EPSClubs;
class Club{
	public int $clbID;
	public string $clbName;
	public string $clbDescription;
	public array<ClsClubAdmin> $clbAdmins;
	public ?array<ClsClubMember> $clbMembers;
	public ?array<ClsEvent> $clbEvents;

	public function __construct(int $_id,
								string $_name,
								string $_description,
								array<ClsClubAdmin> $_admins,
								array<ClsClubMember> $_members,
								array<ClsEvent> $_events)
	{
		$this->clbID = $_id;
		$this->clbName = $_name;
		$this->clbDescription = $_description;
		$this->clbAdmins = $_admins;
		$this->clbMembers = $_members;
		$this->clbEvents = $_events;
	}
}