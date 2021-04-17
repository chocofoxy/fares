<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="User_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="User_name", type="string", length=30, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="User_lastname", type="string", length=30, nullable=false)
     */
    private $userLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="User_Email", type="string", length=100, nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="User_phone", type="string", length=60, nullable=false)
     */
    private $userPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="User_password", type="string", length=30, nullable=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="User_photo", type="string", length=100, nullable=false)
     */
    private $userPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="User_gender", type="string", length=6, nullable=false)
     */
    private $userGender;

    /**
     * @var int
     *
     * @ORM\Column(name="user_role", type="integer", nullable=false, options={"default"="1"})
     */
    private $userRole = 1;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getUserLastname(): ?string
    {
        return $this->userLastname;
    }

    public function setUserLastname(string $userLastname): self
    {
        $this->userLastname = $userLastname;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): self
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    public function setUserPhone(string $userPhone): self
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->userPassword;
    }

    public function setUserPassword(string $userPassword): self
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    public function getUserPhoto(): ?string
    {
        return $this->userPhoto;
    }

    public function setUserPhoto(string $userPhoto): self
    {
        $this->userPhoto = $userPhoto;

        return $this;
    }

    public function getUserGender(): ?string
    {
        return $this->userGender;
    }

    public function setUserGender(string $userGender): self
    {
        $this->userGender = $userGender;

        return $this;
    }

    public function getUserRole(): ?int
    {
        return $this->userRole;
    }

    public function setUserRole(int $userRole): self
    {
        $this->userRole = $userRole;

        return $this;
    }


}
