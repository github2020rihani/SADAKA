<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_u", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idU;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_u", type="string", length=50, nullable=false)
     */
    private $nomU;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_u", type="string", length=50, nullable=false)
     */
    private $prenomU;

    /**
     * @var string
     *
     * @ORM\Column(name="email_u", type="string", length=255, nullable=false)
     */
    private $emailU;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_u", type="string", length=50, nullable=false)
     */
    private $mdpU;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_u", type="string", length=255, nullable=false)
     */
    private $paysU;

    /**
     * @var string
     *
     * @ORM\Column(name="gouvernorat", type="string", length=255, nullable=false)
     */
    private $gouvernorat;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="profession_u", type="string", length=255, nullable=false)
     */
    private $professionU;

    /**
     * @var string
     *
     * @ORM\Column(name="type_u", type="string", length=50, nullable=false)
     */
    private $typeU;


    public function __construct()
    {
        $this->services = new ArrayCollection();
    }




}
