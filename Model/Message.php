<?php
/**
 * Created by PhpStorm.
 * User: Stratege Takam
 * Date: 29/07/2018
 * Time: 13:24
 */

class Message
{

    private  $Id;
    private  $Description;
    private  $CreateAt;
    private  $IsRead;

    private  $Sender;
    private  $IdSender;

    private  $Reciever;
    private  $IdRecieve;

    /**
     * Message constructor.
     * @param $Id
     * @param $Description
     * @param $CreateAt
     * @param $IsRead
     * @param $Sender
     * @param $IdSender
     * @param $Reciever
     * @param $IdRecieve
     */
    public function __construct($Id, $Description, $CreateAt, $IsRead, $Sender, $IdSender, $Reciever, $IdRecieve)
    {
        $this->Id = $Id;
        $this->Description = $Description;
        $this->CreateAt = $CreateAt;
        $this->IsRead = $IsRead;
        $this->Sender = $Sender;
        $this->IdSender = $IdSender;
        $this->Reciever = $Reciever;
        $this->IdRecieve = $IdRecieve;
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
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
    public function getisRead()
    {
        return $this->IsRead;
    }

    /**
     * @param mixed $IsRead
     */
    public function setIsRead($IsRead)
    {
        $this->IsRead = $IsRead;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->Sender;
    }

    /**
     * @param mixed $Sender
     */
    public function setSender($Sender)
    {
        $this->Sender = $Sender;
    }

    /**
     * @return mixed
     */
    public function getIdSender()
    {
        return $this->IdSender;
    }

    /**
     * @param mixed $IdSender
     */
    public function setIdSender($IdSender)
    {
        $this->IdSender = $IdSender;
    }

    /**
     * @return mixed
     */
    public function getReciever()
    {
        return $this->Reciever;
    }

    /**
     * @param mixed $Reciever
     */
    public function setReciever($Reciever)
    {
        $this->Reciever = $Reciever;
    }

    /**
     * @return mixed
     */
    public function getIdRecieve()
    {
        return $this->IdRecieve;
    }

    /**
     * @param mixed $IdRecieve
     */
    public function setIdRecieve($IdRecieve)
    {
        $this->IdRecieve = $IdRecieve;
    }


}