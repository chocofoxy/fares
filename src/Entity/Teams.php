<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teams
 *
 * @ORM\Table(name="teams")
 * @ORM\Entity
 */
class Teams
{
    /**
     * @var int
     *
     * @ORM\Column(name="team_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teamId;

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
     * @ORM\Column(name="user1_id", type="integer", nullable=false)
     */
    private $user1Id;

    /**
     * @var int
     *
     * @ORM\Column(name="user2_id", type="integer", nullable=false)
     */
    private $user2Id;

    /**
     * @var int
     *
     * @ORM\Column(name="user3_id", type="integer", nullable=false)
     */
    private $user3Id;

    /**
     * @var int
     *
     * @ORM\Column(name="user4_id", type="integer", nullable=false)
     */
    private $user4Id;

    /**
     * @var int
     *
     * @ORM\Column(name="user5_id", type="integer", nullable=false)
     */
    private $user5Id;

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

    public function getUser1Id(): ?int
    {
        return $this->user1Id;
    }

    public function setUser1Id(int $user1Id): self
    {
        $this->user1Id = $user1Id;

        return $this;
    }

    public function getUser2Id(): ?int
    {
        return $this->user2Id;
    }

    public function setUser2Id(int $user2Id): self
    {
        $this->user2Id = $user2Id;

        return $this;
    }

    public function getUser3Id(): ?int
    {
        return $this->user3Id;
    }

    public function setUser3Id(int $user3Id): self
    {
        $this->user3Id = $user3Id;

        return $this;
    }

    public function getUser4Id(): ?int
    {
        return $this->user4Id;
    }

    public function setUser4Id(int $user4Id): self
    {
        $this->user4Id = $user4Id;

        return $this;
    }

    public function getUser5Id(): ?int
    {
        return $this->user5Id;
    }

    public function setUser5Id(int $user5Id): self
    {
        $this->user5Id = $user5Id;

        return $this;
    }


}
