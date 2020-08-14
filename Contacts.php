<?php
declare(strict_types=1);

class Contacts
{
    /*** @var string */
    protected $phone;

    /*** @var string */
    protected $email;

    /*** @var string */
    protected $siteUrl;

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $siteUrl
     */
    public function setSiteUrl(string $siteUrl)
    {
        $this->siteUrl = $siteUrl;
    }

    /**
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getSiteUrl() : string
    {
        return $this->siteUrl == ''
            ? 'Employee does not have own site'
            : $this->siteUrl;
    }
}
