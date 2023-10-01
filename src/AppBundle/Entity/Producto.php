<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
/**
 * Rol
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 */
class Producto
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
     * @var \Codigo
     *
     * @ORM\ManyToOne(targetEntity="Codigo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Codigoid", referencedColumnName="id")
     * })
     */
    private $codigoid;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=120, nullable=false)
     */
    private $nombre;



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
     * @return \Codigo
     */
    public function getCodigoid()
    {
        return $this->codigoid;
    }

    /**
     * @param \Codigo $codigoid
     */
    public function setCodigoid($codigoid)
    {
        $this->codigoid = $codigoid;
    }


    public function __toString()
    {
        return $this->getNombre();
    }

}

