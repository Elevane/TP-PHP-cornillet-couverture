<?php
namespace AppBundle\Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass = "AppBundle\Repository\AdminRepository")
 *
 */
class Admin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy = "AUTO")
     * @ORM\Column(type = "integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type = "string")
     *
     */
    private $login;
    
    /**
     * @ORM\Column(type = "string")
     *
     */
    
    private $password;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }
    
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }
    
    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
}

