<?php
declare(ticks=1);

class Employee extends Contacts
{
    /*** @var string */
    private $firstName;

    /*** @var string */
    private $lastName;

    /*** @var int */
    private $age;

    /**
     * Employee constructor.
     * @param string $firstName
     * @param string $lastName
     * @param int $age
     */
    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * @return int
     */
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Override contact site url
     * @return string
     */
    public function getSiteUrl(): string
    {
        return parent::getSiteUrl().'!';
    }
}
