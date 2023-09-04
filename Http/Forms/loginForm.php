<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class loginForm
{

    protected $errors = [];
    public function __construct(public array $attributes)
    {
        if(!Validator::email($attributes['email']))
        {
            $this->errors['email'] = 'Please provide a valid email address.';
        }
        if(!Validator::string($attributes['password']))
        {
            $this->errors['password'] = 'Please provide a valid password.';
        }
    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;

    }

    /**
     * @throws ValidationException
     */
    public function throw()
    {
            ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed(): int
    {
        return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $massage): static
    {
        $this->errors[$field] = $massage;
        return $this;
    }
}