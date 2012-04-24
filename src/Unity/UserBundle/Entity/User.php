<?php

namespace Unity\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\Column(type="string",name="user_lastname",nullable="true")
    */
    protected $lastname;

    /**
    * @ORM\Column(type="string",name="user_firstname",nullable="true")
    */
    protected $firstname;

    /**
    * @ORM\Column(type="date",name="user_dob",nullable="true")
    */
    protected $dob;

    /**
    * @ORM\Column(type="string",name="user_adr1",nullable="true",nullable="true")
    */
    protected $adr1;

    /**
    * @ORM\Column(type="string",name="user_adr2",nullable="true")
    */
    protected $adr2;

    /**
    * @ORM\Column(type="string",name="user_adr3",nullable="true")
    */
    protected $adr3;

    /**
    * @ORM\Column(type="string",name="user_postcode",nullable="true")
    */
    protected $postcode;

    /**
    * @ORM\Column(type="string",name="user_city",nullable="true")
    */
    protected $city;

    /**
    * @ORM\Column(type="string",name="user_tel",nullable="true")
    */
    protected $tel;

    /**
    * @ORM\Column(type="string",name="user_gsm",nullable="true")
    */
    protected $gsm;

    /**
     * @ORM\Column(type="string",name="user_facebook",nullable="true")
     */
    protected $facebook;

    /**
    * @ORM\Column(type="string",name="user_twitter",nullable="true")
    */
    protected $twitter;

    /**
    * @ORM\Column(type="string",name="user_googleplus",nullable="true")
    */
    protected $googleplus;

    /**
    * @ORM\Column(type="string",name="user_website",nullable="true")
    */
    protected $website;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set dob
     *
     * @param date $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * Get dob
     *
     * @return date 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set adr1
     *
     * @param string $adr1
     */
    public function setAdr1($adr1)
    {
        $this->adr1 = $adr1;
    }

    /**
     * Get adr1
     *
     * @return string 
     */
    public function getAdr1()
    {
        return $this->adr1;
    }

    /**
     * Set adr2
     *
     * @param string $adr2
     */
    public function setAdr2($adr2)
    {
        $this->adr2 = $adr2;
    }

    /**
     * Get adr2
     *
     * @return string 
     */
    public function getAdr2()
    {
        return $this->adr2;
    }

    /**
     * Set adr3
     *
     * @param string $adr3
     */
    public function setAdr3($adr3)
    {
        $this->adr3 = $adr3;
    }

    /**
     * Get adr3
     *
     * @return string 
     */
    public function getAdr3()
    {
        return $this->adr3;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set tel
     *
     * @param string $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set gsm
     *
     * @param string $gsm
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;
    }

    /**
     * Get gsm
     *
     * @return string 
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set googleplus
     *
     * @param string $googleplus
     */
    public function setGoogleplus($googleplus)
    {
        $this->googleplus = $googleplus;
    }

    /**
     * Get googleplus
     *
     * @return string 
     */
    public function getGoogleplus()
    {
        return $this->googleplus;
    }

    /**
     * Set website
     *
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

}