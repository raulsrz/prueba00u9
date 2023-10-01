<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
/**
 * Rol
 *
 * @ORM\Table(name="factura")
 * @ORM\Entity
 */
class Factura
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     * @Assert\NotBlank()
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="nombcliente", type="string", length=255, nullable=false)
     */
    private $nombcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombempresa", type="string", length=255, nullable=false)
     */
    private $nombempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="nombvendedor", type="string", length=255, nullable=false)
     */
    private $nombvendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="direcmpresa", type="string", length=255, nullable=false)
     */
    private $direcmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="telecmpresa", type="string", length=255, nullable=false)
     */
    private $telecmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="text", nullable=true)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="listsize", type="text", nullable=false)
     */
    private $listsize;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma", type="string", length=100, nullable=false)
     */
    private $idioma;
    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=100, nullable=false)
     */
    private $moneda;

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Productoid", referencedColumnName="id")
     * })
     */
    private $productoid;
    /**
     * @var \Tipo
     *
     * @ORM\ManyToOne(targetEntity="Tipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tipoid", referencedColumnName="id")
     * })
     */
    private $tipoid;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param \DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return string
     */
    public function getNombcliente()
    {
        return $this->nombcliente;
    }

    /**
     * @param string $nombcliente
     */
    public function setNombcliente($nombcliente)
    {
        $this->nombcliente = $nombcliente;
    }

    /**
     * @return string
     */
    public function getNombempresa()
    {
        return $this->nombempresa;
    }

    /**
     * @param string $nombempresa
     */
    public function setNombempresa($nombempresa)
    {
        $this->nombempresa = $nombempresa;
    }

    /**
     * @return string
     */
    public function getNombvendedor()
    {
        return $this->nombvendedor;
    }

    /**
     * @param string $nombvendedor
     */
    public function setNombvendedor($nombvendedor)
    {
        $this->nombvendedor = $nombvendedor;
    }

    /**
     * @return string
     */
    public function getDirecmpresa()
    {
        return $this->direcmpresa;
    }

    /**
     * @param string $direcmpresa
     */
    public function setDirecmpresa($direcmpresa)
    {
        $this->direcmpresa = $direcmpresa;
    }

    /**
     * @return string
     */
    public function getTelecmpresa()
    {
        return $this->telecmpresa;
    }

    /**
     * @param string $telecmpresa
     */
    public function setTelecmpresa($telecmpresa)
    {
        $this->telecmpresa = $telecmpresa;
    }

    /**
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * @param string $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    /**
     * @return string
     */
    public function getListsize()
    {
        return $this->listsize;
    }

    /**
     * @param string $listsize
     */
    public function setListsize($listsize)
    {
        $this->listsize = $listsize;
    }

    /**
     * @return \Producto
     */
    public function getProductoid()
    {
        return $this->productoid;
    }

    /**
     * @param \Producto $productoid
     */
    public function setProductoid($productoid)
    {
        $this->productoid = $productoid;
    }



    /**
     * @return string
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * @param string $idioma
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;
    }

    /**
     * @return \Size
     */
    public function getSizeid()
    {
        return $this->sizeid;
    }

    /**
     * @param \Size $sizeid
     */
    public function setSizeid($sizeid)
    {
        $this->sizeid = $sizeid;
    }

    /**
     * @return \Tipo
     */
    public function getTipoid()
    {
        return $this->tipoid;
    }

    /**
     * @param \Tipo $tipoid
     */
    public function setTipoid($tipoid)
    {
        $this->tipoid = $tipoid;
    }

    /**
     * @return string
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * @param string $moneda
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;
    }


    public function __toString()
    {
        return $this->getNombempresa();
    }

}

