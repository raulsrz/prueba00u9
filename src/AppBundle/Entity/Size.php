<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
/**
 * Size
 *
 * @ORM\Table(name="size")
 * @DoctrineAssert\UniqueEntity("nombre")
 * @ORM\Entity
 */
class Size
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
     * @ORM\Column(name="nombre", type="string", length=30, nullable=true)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", nullable=false)
     * @Assert\Range(min=0)
     */
    private $precio;


    /**
     * @var float
     *
     * @ORM\Column(name="impuesto", type="float", nullable=false)
     * @Assert\Range(min=0)
     */
    private $impuesto;


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
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param float $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @return float
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * @param float $impuesto
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;
    }


    public function __toString()
    {
        return $this->getNombre();
    }

}

