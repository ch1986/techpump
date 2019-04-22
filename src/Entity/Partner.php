<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartnerRepository")
 */
class Partner
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=2083)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nats1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nats2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stylePath;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $googleAnalyticsId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getNats1(): ?string
    {
        return $this->nats1;
    }

    public function setNats1(string $nats1): self
    {
        $this->nats1 = $nats1;

        return $this;
    }

    public function getNats2(): ?string
    {
        return $this->nats2;
    }

    public function setNats2(string $nats2): self
    {
        $this->nats2 = $nats2;

        return $this;
    }

    public function getStylePath(): ?string
    {
        return $this->stylePath;
    }

    public function setStylePath(string $stylePath): self
    {
        $this->stylePath = $stylePath;

        return $this;
    }

    public function getGoogleAnalyticsId(): ?string
    {
        return $this->googleAnalyticsId;
    }

    public function setGoogleAnalyticsId(string $googleAnalyticsId): self
    {
        $this->googleAnalyticsId = $googleAnalyticsId;

        return $this;
    }
}
