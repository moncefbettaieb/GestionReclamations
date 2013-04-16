<?php

namespace Esprit\CollaborateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collaborateur
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\CollaborateurBundle\Entity\CollaborateurRepository")
 */
class Collaborateur {

    /**
     * @ORM\OneToOne(targetEntity="Esprit\MangerBundle\Entity\Image", cascade={"persist", "remove"})
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     * 
     * @ORM\Column(name="service", type="string", length=255)
     */
    private $service;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Collaborateur
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Collaborateur
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Collaborateur
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Collaborateur
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Collaborateur
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }
    
    /**
     * Set image
     *
     * @param \Esprit\MangerBundle\Entity\Image $image
     * @return Manger
     */
    public function setImage(\Esprit\MangerBundle\Entity\Image $image = null) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Esprit\MangerBundle\Entity\Image 
     */
    public function getImage() {
        return $this->image;
    }

}