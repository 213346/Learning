<?php
/**
 * Created by PhpStorm.
 * User: Stratege Takam
 * Date: 29/07/2018
 * Time: 13:23
 */

class User
{
    private $Id;
    private $Email;
    private $Password;
    private $Lastname;
    private $Firstname;
    private $Birthdate;
    private $CreateAt;

    /**
     * User constructor.
     * @param $Id
     * @param $Email
     * @param $Password
     * @param $Lastname
     * @param $Firstname
     * @param $Birthdate
     * @param $CreateAt
     */
    public function __construct($Id, $Email, $Password, $Lastname, $Firstname, $Birthdate, $CreateAt)
    {
        $this->Id = $Id;
        $this->Email = $Email;
        $this->Password = $Password;
        $this->Lastname = $Lastname;
        $this->Firstname = $Firstname;
        $this->Birthdate = $Birthdate;
        $this->CreateAt = $CreateAt;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->Lastname;
    }

    /**
     * @param mixed $Lastname
     */
    public function setLastname($Lastname)
    {
        $this->Lastname = $Lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->Firstname;
    }

    /**
     * @param mixed $Firstname
     */
    public function setFirstname($Firstname)
    {
        $this->Firstname = $Firstname;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->Birthdate;
    }

    /**
     * @param mixed $Birthdate
     */
    public function setBirthdate($Birthdate)
    {
        $this->Birthdate = $Birthdate;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->CreateAt;
    }

    /**
     * @param mixed $CreateAt
     */
    public function setCreateAt($CreateAt)
    {
        $this->CreateAt = $CreateAt;
    }


}