<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity()
 * )
 */
class Connect
{
    /**
     * @ORM\Column(name="idJoueur", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idJoueur;

    /**
     * @ORM\Column(name="title", type="integer", length=255)
     */
    protected $code;

    /**
     * @ORM\Column(name="nomJoueur", type="string", length=255)
     */
    protected $nomJoueur;

    /**
     * @ORM\Column(name="numJoueur", type="integer", length=255)
     */
    protected $numJoueur;

    /**
     * @return mixed
     */
    public function getIdJoueur()
    {
        return $this->idJoueur;
    }

    /**
     * @param mixed $idJoueur
     */
    public function setIdJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getNomJoueur()
    {
        return $this->nomJoueur;
    }

    /**
     * @param mixed $nomJoueur
     */
    public function setNomJoueur($nomJoueur)
    {
        $this->nomJoueur = $nomJoueur;
    }

    /**
     * @return mixed
     */
    public function getNumJoueur()
    {
        return $this->numJoueur;
    }

    /**
     * @param mixed $numJoueur
     */
    public function setNumJoueur($numJoueur)
    {
        $this->numJoueur = $numJoueur;
    }




}
