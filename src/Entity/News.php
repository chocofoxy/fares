<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity
 */
class News
{
    /**
     * @var int
     *
     * @ORM\Column(name="News_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsId;

    /**
     * @var string
     *
     * @ORM\Column(name="News_title", type="string", length=255, nullable=false)
     */
    private $newsTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="News_description", type="text", length=65535, nullable=false)
     */
    private $newsDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="News_img", type="string", length=255, nullable=false)
     */
    private $newsImg;

    /**
     * @var string
     *
     * @ORM\Column(name="News_type", type="string", length=255, nullable=false)
     */
    private $newsType;

    public function getNewsId(): ?int
    {
        return $this->newsId;
    }

    public function getNewsTitle(): ?string
    {
        return $this->newsTitle;
    }

    public function setNewsTitle(string $newsTitle): self
    {
        $this->newsTitle = $newsTitle;

        return $this;
    }

    public function getNewsDescription(): ?string
    {
        return $this->newsDescription;
    }

    public function setNewsDescription(string $newsDescription): self
    {
        $this->newsDescription = $newsDescription;

        return $this;
    }

    public function getNewsImg(): ?string
    {
        return $this->newsImg;
    }

    public function setNewsImg(string $newsImg): self
    {
        $this->newsImg = $newsImg;

        return $this;
    }

    public function getNewsType(): ?string
    {
        return $this->newsType;
    }

    public function setNewsType(string $newsType): self
    {
        $this->newsType = $newsType;

        return $this;
    }


}
