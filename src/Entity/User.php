<?php

namespace App\Entity;

use App\Validator as CustomValidator;

class User
{
    protected string $username;

    #[CustomValidator\UnauthorizedEmailDomain(unauthorized_domains: ["nauta.cu", "gmail.com"])]
    protected string $email;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->email = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}