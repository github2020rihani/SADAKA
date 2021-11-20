<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="famille")
 * @ORM\Entity
 */
class Famille
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_f", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idF;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=false)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_f", type="string", length=255, nullable=false)
     */
    private $etatF;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_f", type="string", length=50, nullable=false)
     */
    private $villeF;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_p", type="string", length=50, nullable=false)
     */
    private $nomP;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_p", type="string", length=50, nullable=false)
     */
    private $prenomP;

    /**
     * @var int
     *
     * @ORM\Column(name="tele_p", type="integer", nullable=false)
     */
    private $teleP;

    /**
     * @var string
     *
     * @ORM\Column(name="d_naissance_p", type="string", length=255, nullable=false)
     */
    private $dNaissanceP;

    /**
     * @var string
     *
     * @ORM\Column(name="s_revenue_p", type="string", length=50, nullable=false)
     */
    private $sRevenueP;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_m", type="string", length=50, nullable=false)
     */
    private $nomM;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_m", type="string", length=50, nullable=false)
     */
    private $prenomM;

    /**
     * @var int
     *
     * @ORM\Column(name="tele_m", type="integer", nullable=false)
     */
    private $teleM;

    /**
     * @var string
     *
     * @ORM\Column(name="d_naissance_m", type="string", length=255, nullable=false)
     */
    private $dNaissanceM;

    /**
     * @var string
     *
     * @ORM\Column(name="s_revenue_m", type="string", length=50, nullable=false)
     */
    private $sRevenueM;

    /**
     * @var float
     *
     * @ORM\Column(name="r_brute_f", type="float", precision=10, scale=0, nullable=false)
     */
    private $rBruteF;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_enf", type="integer", nullable=false)
     */
    private $nbrEnf;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_enf_malade", type="integer", nullable=false)
     */
    private $nbrEnfMalade;

    /**
     * @var string
     *
     * @ORM\Column(name="besoin_f", type="string", length=255, nullable=false)
     */
    private $besoinF;

    /**
     * @var string
     *
     * @ORM\Column(name="verif_f", type="string", length=255, nullable=false)
     */
    private $verifF;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="string", length=50, nullable=false)
     */
    private $remarque;

    /**
     * @var string
     *
     * @ORM\Column(name="date_v", type="string", length=50, nullable=false)
     */
    private $dateV;


}
