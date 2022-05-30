<?php
namespace App\Entity;
use App\Repository\DattaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DattaRepository::class)
 * @ORM\Table(name="datta") 
 */
class Datta
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id_datta;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="datta")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     */
    private $id_user;

    /** @ORM\Column(type="string", length="500") */
    private $commentary;

    

    /**
     * Get the value of id_datta
     */ 
    public function getId_datta()
    {
        return $this->id_datta;
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of commentary
     */ 
    public function getCommentary()
    {
        return $this->commentary;
    }

    /**
     * Set the value of commentary
     *
     * @return  self
     */ 
    public function setCommentary($commentary)
    {
        $this->commentary = $commentary;

        return $this;
    }

    
}