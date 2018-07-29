<?php
/**
 * Created by PhpStorm.
 * User: Stratege Takam
 * Date: 29/07/2018
 * Time: 13:23
 */

class Book
{
    private  $Id;
    private  $Name;
    private  $IsbnCode;
    private  $CreateAt;
    private  $Author;
    private  $User;
    private  $IdUser;

    /**
     * Book constructor.
     * @param $Id
     * @param $Name
     * @param $IsbnCode
     * @param $CreateAt
     * @param $Author
     * @param $User
     * @param $IdUser
     */
    public function __construct($Id, $Name, $IsbnCode, $CreateAt, $Author, $User, $IdUser)
    {
        $this->Id = $Id;
        $this->Name = $Name;
        $this->IsbnCode = $IsbnCode;
        $this->CreateAt = $CreateAt;
        $this->Author = $Author;
        $this->User = $User;
        $this->IdUser = $IdUser;
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
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getIsbnCode()
    {
        return $this->IsbnCode;
    }

    /**
     * @param mixed $IsbnCode
     */
    public function setIsbnCode($IsbnCode)
    {
        $this->IsbnCode = $IsbnCode;
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

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * @param mixed $Author
     */
    public function setAuthor($Author)
    {
        $this->Author = $Author;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param mixed $User
     */
    public function setUser($User)
    {
        $this->User = $User;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->IdUser;
    }

    /**
     * @param mixed $IdUser
     */
    public function setIdUser($IdUser)
    {
        $this->IdUser = $IdUser;
    }



}