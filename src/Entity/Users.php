<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 * @ORM\Table(name="users") 
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id_user;

    /** @ORM\Column(type="string", length="100") */
    private $user;

    /** @ORM\Column(type="string", length="100") */
    private $mail;

    /** @ORM\Column(type="string", length="64") */
    private $password;

    


    /**
     * @ORM\OneToMany(targetEntity="Datta", mappedBy="id_user");
     */
    private $datta;

    public function __construct()
    {
        $this->stats = new ArrayCollection();        
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get esto es una relación de un agent para muchas stats.
     */ 
    public function getDatta()
    {
        return $this->datta;
    }

    /**
     * Set esto es una relación de un agent para muchas stats.
     *
     * @return  self
     */ 
    public function setDatta(Datta $datta)
    {   
        if(!$this->datta->contains($datta)){
            $this->datta[] = $datta;
            $datta->setId_user($this);
        }

        return $this;
        
    }
}