<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tournaments
 *
 * @ORM\Table(name="tournaments", indexes={@ORM\Index(name="Game_id", columns={"Game_id"}), @ORM\Index(name="Team_id", columns={"Team1_id"})})
 * @ORM\Entity
 */
class Tournaments
{
    /**
     * @var int
     *
     * @ORM\Column(name="Tr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trId;

    /**
     * @var string
     *
     * @ORM\Column(name="Tr_cover", type="string", length=255, nullable=false)
     */
    private $trCover;

    /**
     * @var int
     *
     * @ORM\Column(name="Game_id", type="integer", nullable=false)
     */
    private $gameId;

    /**
     * @var int
     *
     * @ORM\Column(name="Team1_id", type="integer", nullable=false)
     */
    private $team1Id;

    /**
     * @var int
     *
     * @ORM\Column(name="Team2_id", type="integer", nullable=false)
     */
    private $team2Id;

    /**
     * @var int
     *
     * @ORM\Column(name="Team3_id", type="integer", nullable=false)
     */
    private $team3Id;

    /**
     * @var int
     *
     * @ORM\Column(name="Team4_id", type="integer", nullable=false)
     */
    private $team4Id;

    public function getTrId(): ?int
    {
        return $this->trId;
    }

    public function getTrCover(): ?string
    {
        return $this->trCover;
    }

    public function setTrCover(string $trCover): self
    {
        $this->trCover = $trCover;

        return $this;
    }

    public function getGameId(): ?int
    {
        return $this->gameId;
    }

    public function setGameId(int $gameId): self
    {
        $this->gameId = $gameId;

        return $this;
    }

    public function getTeam1Id(): ?int
    {
        return $this->team1Id;
    }

    public function setTeam1Id(int $team1Id): self
    {
        $this->team1Id = $team1Id;

        return $this;
    }

    public function getTeam2Id(): ?int
    {
        return $this->team2Id;
    }

    public function setTeam2Id(int $team2Id): self
    {
        $this->team2Id = $team2Id;

        return $this;
    }

    public function getTeam3Id(): ?int
    {
        return $this->team3Id;
    }

    public function setTeam3Id(int $team3Id): self
    {
        $this->team3Id = $team3Id;

        return $this;
    }

    public function getTeam4Id(): ?int
    {
        return $this->team4Id;
    }

    public function setTeam4Id(int $team4Id): self
    {
        $this->team4Id = $team4Id;

        return $this;
    }


}
