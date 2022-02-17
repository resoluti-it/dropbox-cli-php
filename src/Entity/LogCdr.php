<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * LogCdr
 * @ORM\Entity
 * @ORM\Table(name="log_cdr")
 */
class LogCdr
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private int $id;

    /**
     * @var int
     * @ORM\Column(name="contador", type="integer")
     */
    private int $contador;

    /**
     * @ORM\Column(name="calldate", type="datetime")
     */
    private \DateTime $calldate;

    /**
     * @var string
     * @ORM\Column(name="clid", type="string")
     */
    private string $clid;

    /**
     * @var string
     * @ORM\Column(name="src", type="string")
     */
    private string $src;

    /**
     * @var string
     * @ORM\Column(name="dst", type="string")
     */
    private string $dst;

    /**
     * @var string
     * @ORM\Column(name="dstname", type="string")
     */
    private string $dstname;

    /**
     * @var string
     * @ORM\Column(name="dcontext", type="string")
     */
    private string $dconext;

    /**
     * @var string
     * @ORM\Column(name="channel",type="string")
     */
    private string $channel;

    /**
     * @var string
     * @ORM\Column(name="dstchannel",type="string")
     */
    private string $dstchannel;

    /**
     * @var string
     * @ORM\Column(name="lastapp", type="string")
     */
    private string $lastapp;

    /**
     * @var string
     * @ORM\Column(name="lastdata", type="string")
     */
    private string $lastdata;

    /**
     * @ORM\Column(name="duration", type="integer")
     */
    private int $duration;

    /**
     * @var int
     * @ORM\Column(name="billsec", type="integer")
     */
    private int $billsec;

    /**
     * @var string
     * @ORM\Column(name="disposition",type="string")
     */
    private string $disposition;

    /**
     * @var int
     * @ORM\Column(name="amaflags", type="integer")
     */
    private int $amaflags;

    /**
     * @var string
     * @ORM\Column(name="accountcode", type="string")
     */
    private string $accountcode;


    /**
     * @var string
     * @ORM\Column(name="uniqueid",type="string")
     */
    private string $uniqueid;


    /**
     * @var string
     * @ORM\Column(name="linkMp3", type="string")
     */
    private string $linkMp3;

    /**
     * @var string
     * @ORM\Column(name="userField",type="string")
     */
    private string $userField;

    /**
     * @var string
     * @ORM\Column(name="cost",type="string")
     */
    private string $cost;

    /**
     * @var string
     * @ORM\Column(name="cause",type="string")
     */
    private string $cause;

    /**
     * @var string
     * @ORM\Column(name="seltype", type="string")
     */
    private string $seltype;

    /**
     * Get the value of lastdata
     */
    public function getLastdata()
    {
        return $this->lastdata;
    }

    /**
     * Set the value of lastdata
     *
     * @return  self
     */
    public function setLastdata($lastdata)
    {
        $this->lastdata = $lastdata;

        return $this;
    }

    /**
     * Get the value of lastapp
     */
    public function getLastapp()
    {
        return $this->lastapp;
    }

    /**
     * Set the value of lastapp
     *
     * @return  self
     */
    public function setLastapp($lastapp)
    {
        $this->lastapp = $lastapp;

        return $this;
    }

    /**
     * Get the value of dstchannel
     */
    public function getDstchannel()
    {
        return $this->dstchannel;
    }

    /**
     * Set the value of dstchannel
     *
     * @return  self
     */
    public function setDstchannel($dstchannel)
    {
        $this->dstchannel = $dstchannel;

        return $this;
    }

    /**
     * Get the value of channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set the value of channel
     *
     * @return  self
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get the value of dconext
     */
    public function getDconext()
    {
        return $this->dconext;
    }

    /**
     * Set the value of dconext
     *
     * @return  self
     */
    public function setDconext($dconext)
    {
        $this->dconext = $dconext;

        return $this;
    }

    /**
     * Get the value of dstname
     */
    public function getDstname()
    {
        return $this->dstname;
    }

    /**
     * Set the value of dstname
     *
     * @return  self
     */
    public function setDstname($dstname)
    {
        $this->dstname = $dstname;

        return $this;
    }

    /**
     * Get the value of dst
     */
    public function getDst()
    {
        return $this->dst;
    }

    /**
     * Set the value of dst
     *
     * @return  self
     */
    public function setDst($dst)
    {
        $this->dst = $dst;

        return $this;
    }

    /**
     * Get the value of src
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set the value of src
     *
     * @return  self
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get the value of clid
     */
    public function getClid()
    {
        return $this->clid;
    }

    /**
     * Set the value of clid
     *
     * @return  self
     */
    public function setClid($clid)
    {
        $this->clid = $clid;

        return $this;
    }

    /**
     * Get the value of accountcode
     */
    public function getAccountcode()
    {
        return $this->accountcode;
    }

    /**
     * Set the value of accountcode
     *
     * @return  self
     */
    public function setAccountcode($accountcode)
    {
        $this->accountcode = $accountcode;

        return $this;
    }

    /**
     * Get the value of uniqueid
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * Set the value of uniqeid
     *
     * @return  self
     */
    public function setUniqueid($uniqueid)
    {
        $this->uniqueid = $uniqueid;

        return $this;
    }

    /**
     * Get the value of linkMp3
     */
    public function getLinkMp3()
    {
        return $this->linkMp3;
    }

    /**
     * Set the value of linkMp3
     *
     * @return  self
     */
    public function setLinkMp3($linkMp3)
    {
        $this->linkMp3 = $linkMp3;

        return $this;
    }

    /**
     * Get the value of userField
     */
    public function getUserField()
    {
        return $this->userField;
    }

    /**
     * Set the value of userField
     *
     * @return  self
     */
    public function setUserField($userField)
    {
        $this->userField = $userField;

        return $this;
    }

    /**
     * Get the value of cost
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set the value of cost
     *
     * @return  self
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get the value of cause
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Set the value of cause
     *
     * @return  self
     */
    public function setCause($cause)
    {
        $this->cause = $cause;

        return $this;
    }

    /**
     * Get the value of seltype
     */
    public function getSeltype()
    {
        return $this->seltype;
    }

    /**
     * Set the value of seltype
     *
     * @return  self
     */
    public function setSeltype($seltype)
    {
        $this->seltype = $seltype;

        return $this;
    }

    /**
     * Get the value of amaflags
     */
    public function getAmaflags()
    {
        return $this->amaflags;
    }

    /**
     * Set the value of amaflags
     *
     * @return  self
     */
    public function setAmaflags($amaflags)
    {
        $this->amaflags = $amaflags;

        return $this;
    }

    /**
     * Get the value of disposition
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * Set the value of disposition
     *
     * @return  self
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;

        return $this;
    }

    /**
     * Get the value of billsec
     */
    public function getBillsec()
    {
        return $this->billsec;
    }

    /**
     * Set the value of billsec
     *
     * @return  self
     */
    public function setBillsec($billsec)
    {
        $this->billsec = $billsec;

        return $this;
    }

    /**
     * Get the value of duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of calldate
     */
    public function getCalldate()
    {
        return $this->calldate;
    }

    /**
     * Set the value of calldate
     *
     * @return  self
     */
    public function setCalldate($calldate)
    {
        $this->calldate = $calldate;

        return $this;
    }

    /**
     * Get the value of contador
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set the value of contador
     *
     * @return  self
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
