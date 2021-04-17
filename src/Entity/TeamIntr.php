<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamIntr
 *
 * @ORM\Table(name="team_intr")
 * @ORM\Entity
 */
class TeamIntr
{
    /**
     * @var int
     *
     * @ORM\Column(name="team_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teamId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="team_name", type="string", length=255, nullable=false)
     */
    private $teamName;

    /**
     * @var string
     *
     * @ORM\Column(name="team_logo", type="string", length=255, nullable=false)
     */
    private $teamLogo;

    /**
     * @var string
     *
     * @ORM\Column(name="Team_Website", type="string", length=255, nullable=false)
     */
    private $teamWebsite;

    /**
     * @var int
     *
     * @ORM\Column(name="member1_id", type="integer", nullable=false)
     */
    private $member1Id;

    /**
     * @var int
     *
     * @ORM\Column(name="member2_id", type="integer", nullable=false)
     */
    private $member2Id;

    /**
     * @var int
     *
     * @ORM\Column(name="member3_id", type="integer", nullable=false)
     */
    private $member3Id;

    /**
     * @var int
     *
     * @ORM\Column(name="member4_id", type="integer", nullable=false)
     */
    private $member4Id;

    /**
     * @var int
     *
     * @ORM\Column(name="member5_id", type="integer", nullable=false)
     */
    private $member5Id;

    public function getTeamId(): ?int
    {
        return $this->teamId;
    }

    public function getTeamName(): ?string
    {
        return $this->teamName;
    }

    public function setTeamName(string $teamName): self
    {
        $this->teamName = $teamName;

        return $this;
    }

    public function getTeamLogo(): ?string
    {
        return $this->teamLogo;
    }

    public function setTeamLogo(string $teamLogo): self
    {
        $this->teamLogo = $teamLogo;

        return $this;
    }

    public function getTeamWebsite(): ?string
    {
        return $this->teamWebsite;
    }

    public function setTeamWebsite(string $teamWebsite): self
    {
        $this->teamWebsite = $teamWebsite;

        return $this;
    }

    public function getMember1Id(): ?int
    {
        return $this->member1Id;
    }

    public function setMember1Id(int $member1Id): self
    {
        $this->member1Id = $member1Id;

        return $this;
    }

    public function getMember2Id(): ?int
    {
        return $this->member2Id;
    }

    public function setMember2Id(int $member2Id): self
    {
        $this->member2Id = $member2Id;

        return $this;
    }

    public function getMember3Id(): ?int
    {
        return $this->member3Id;
    }

    public function setMember3Id(int $member3Id): self
    {
        $this->member3Id = $member3Id;

        return $this;
    }

    public function getMember4Id(): ?int
    {
        return $this->member4Id;
    }

    public function setMember4Id(int $member4Id): self
    {
        $this->member4Id = $member4Id;

        return $this;
    }

    public function getMember5Id(): ?int
    {
        return $this->member5Id;
    }

    public function setMember5Id(int $member5Id): self
    {
        $this->member5Id = $member5Id;

        return $this;
    }


}
