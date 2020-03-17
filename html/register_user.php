<?php

class User
{
    private $name;
    private $email;
    private $gender;
    private $address;
    private $city;
    private $country;
    private $interest;

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of interest
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set the value of interest
     *
     * @return  self
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }
}
$user = new User();
if (isset($_POST['submit'])) {
    $user->setName($_POST['name']);
    $user->setEmail($_POST['email']);
    $user->setGender($_POST['gender']);
    $user->setAddress($_POST['address']);
    $user->setCity($_POST['city']);
    $user->setCountry($_POST['country']);
    $user->setInterest($_POST['interest']);
}
    echo "<p>{$user->getName()}</p>";
    echo "<p>{$user->getEmail()}</p>";
    echo "<p>{$user->getGender()}</p>";
    echo "<p>{$user->getAddress()}</p>";
    echo "<p>{$user->getCity()}</p>";
    echo "<p>{$user->getCountry()}</p>";
    echo "<p>{$user->getInterest()}</p>";
