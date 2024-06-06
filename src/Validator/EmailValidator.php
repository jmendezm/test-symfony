<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

class UnauthorizedEmailDomainValidator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!$constraint instanceof UnauthorizedEmailDomain) {
            throw new UnexpectedTypeException($constraint, UnauthorizedEmailDomain::class);
        }

        if (!is_string($value)) {
            throw new UnexpectedValueException($value, 'string');
        }

        $domains = $constraint->unauthorized_domains;

        $valid = true;

        $temp = explode("@", $value);
        if(count($temp) == 2) {
            for($i = 0; $i < count($domains); $i++) {
                if($temp[1] == $domains[$i]) {
                    $valid = false;
                    break;
                }
            }
        }
        else {
            return;
        }

        if($valid) {
            return;
        }

        $this->context->buildViolation($constraint->message)
            ->setParameter('{{ string }}', $value)
            ->addViolation();
    }
}