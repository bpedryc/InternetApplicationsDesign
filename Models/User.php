<?php

class User {
    private $id;
    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $birthDate;
    private $addressId;
    private $followers;
    private $following;
    private $bio;
    private $role = ['ROLE_USER'];

    public function __construct(
        string $email,
        string $password,
        string $firstName,
        string $lastName,
        string $birthDate,
        int $addressId,
        int $followers = null,
        int $following = null,
        string $bio = null,
        int $id = null
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->addressId = $addressId;
        $this->followers = $followers;
        $this->following = $following;
        $this->bio = $bio;
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getRole(): array
    {
        return $this->role;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    public function getAddressId(): int
    {
        return $this->addressId;
    }

    public function getFollowers(): int
    {
        return $this->followers;
    }

    public function getFollowing(): int
    {
        return $this->following;
    }

    public function getBio(): string
    {
        return $this->bio;
    }
}