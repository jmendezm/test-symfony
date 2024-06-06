<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

#[\Attribute]
class UnauthorizedEmailDomain extends Constraint
{
    public string $message = 'The email "{{ string }}" contains an unauthorized domain.';
    public array $unauthorized_domains = [];

    public function __construct(?array $unauthorized_domains = [], ?string $message = null, ?array $groups = null, $payload = null)
    {
        parent::__construct([], $groups, $payload);

        $this->unauthorized_domains = $unauthorized_domains ?? $this->unauthorized_domains;
        $this->message = $message ?? $this->message;
    }
}