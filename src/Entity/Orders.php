<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdersRepository::class)]
class Orders
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $statut = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'orders')]
    #[ORM\JoinColumn(nullable: false)]
    private ?users $users = null;

    #[ORM\OneToMany(mappedBy: 'OrdersId', targetEntity: OrdersDetails::class)]
    private Collection $OrdresDetails;

    public function __construct()
    {
        $this->OrdresDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUsers(): ?users
    {
        return $this->users;
    }

    public function setUsers(?users $users): static
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return Collection<int, OrdersDetails>
     */
    public function getOrdresDetails(): Collection
    {
        return $this->OrdresDetails;
    }

    public function addOrdresDetail(OrdersDetails $ordresDetail): static
    {
        if (!$this->OrdresDetails->contains($ordresDetail)) {
            $this->OrdresDetails->add($ordresDetail);
            $ordresDetail->setOrdersId($this);
        }

        return $this;
    }

    public function removeOrdresDetail(OrdersDetails $ordresDetail): static
    {
        if ($this->OrdresDetails->removeElement($ordresDetail)) {
            // set the owning side to null (unless already changed)
            if ($ordresDetail->getOrdersId() === $this) {
                $ordresDetail->setOrdersId(null);
            }
        }

        return $this;
    }
}
