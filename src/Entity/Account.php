<?php

/**
 * @Author: jeanw
 * @Date:   2017-09-04 18:43:00
 * @Last Modified by:   jeanw
 * @Last Modified time: 2017-09-04 21:44:08
 */

namespace Hetwan\Entity;

/**
 * @Entity @Table(name="accounts")
 **/
class Account
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue 
     */
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $username;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $password;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $nickname;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $secretQuestion;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $secretAnswer;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $isBanned;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $community;

    /**
     * @OneToMany(targetEntity="Player", mappedBy="account")
     * @var arrayCollection
     */
    protected $players;

    public function __construct()
    {
        $this->players = new ArrayCollection();
    }

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
     * Set username
     *
     * @param string $username
     *
     * @return Account
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Account
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return Account
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set secretQuestion
     *
     * @param string $secretQuestion
     *
     * @return Account
     */
    public function setSecretQuestion($secretQuestion)
    {
        $this->secretQuestion = $secretQuestion;

        return $this;
    }

    /**
     * Get secretQuestion
     *
     * @return string
     */
    public function getSecretQuestion()
    {
        return $this->secretQuestion;
    }

    /**
     * Set secretAnswer
     *
     * @param string $secretAnswer
     *
     * @return Account
     */
    public function setSecretAnswer($secretAnswer)
    {
        $this->secretAnswer = $secretAnswer;

        return $this;
    }

    /**
     * Get secretAnswer
     *
     * @return string
     */
    public function getSecretAnswer()
    {
        return $this->secretAnswer;
    }

    /**
     * Set isBanned
     *
     * @param integer $isBanned
     *
     * @return Account
     */
    public function setIsBanned($isBanned)
    {
        $this->isBanned = $isBanned;

        return $this;
    }

    /**
     * Get isBanned
     *
     * @return integer
     */
    public function getIsBanned()
    {
        return $this->isBanned;
    }

    /**
     * Set community
     *
     * @param integer $community
     *
     * @return Account
     */
    public function setCommunity($community)
    {
        $this->community = $community;

        return $this;
    }

    /**
     * Get community
     *
     * @return integer
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * Add player
     *
     * @param \Player $player
     *
     * @return Account
     */
    public function addPlayer(\Player $player)
    {
        $this->players[] = $player;

        return $this;
    }

    /**
     * Remove player
     *
     * @param \Player $player
     */
    public function removePlayer(\Player $player)
    {
        $this->players->removeElement($player);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayers()
    {
        return $this->players;
    }
}