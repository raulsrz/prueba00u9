<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @DoctrineAssert\UniqueEntity("correo")
 * @ORM\Entity
 */
class Usuario implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     * @Assert\Length(min=10)
     * @Assert\Regex(pattern="/\d/", match=false, message = "Por favor, escribe tu nombre  y aoellidos")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=100, nullable=false)
     * @Assert\Email()
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     * @Assert\Length(min=4)
     */
    private $password;
    /**
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Rolid", referencedColumnName="id")
     * })
     */
    private $rolid;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=500, nullable=true)
     */
    private $salt;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param string $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return \AppBundle\Entity\Rol
     */
    public function getRolid()
    {
        return $this->rolid;
    }

    /**
     * @param \AppBundle\Entity\ $rolid
     */
    public function setRolid($rolid)
    {
        $this->rolid = $rolid;
    }


    /**
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }


    public function eraseCredentials()
    {
    }
    public function getRoles()
    {
        $x=array();
        $x[]=$this->getRolid()->getNombre();
        return $x;

        //return array('ROLE_ADMIN');
    }
    public function getUsername()
    {
        return $this->getNombre();
    }


    public function __toString()
    {
        return $this->getNombre();
    }
}

