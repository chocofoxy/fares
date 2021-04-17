<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var string
     *
     * @ORM\Column(name="order_id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_livraison", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $adrLivraison = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $country = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="post_code", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $postCode = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $date = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_price", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $totalPrice = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false, options={"default"="'''preparation'''"})
     */
    private $status = '\'\'\'preparation\'\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="liste_produit", type="string", length=3000, nullable=false)
     */
    private $listeProduit;

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getAdrLivraison(): ?string
    {
        return $this->adrLivraison;
    }

    public function setAdrLivraison(?string $adrLivraison): self
    {
        $this->adrLivraison = $adrLivraison;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPostCode(): ?int
    {
        return $this->postCode;
    }

    public function setPostCode(?int $postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(?float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getListeProduit(): ?string
    {
        return $this->listeProduit;
    }

    public function setListeProduit(string $listeProduit): self
    {
        $this->listeProduit = $listeProduit;

        return $this;
    }


}
