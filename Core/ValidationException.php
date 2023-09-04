<?php

namespace Core;

class ValidationException extends \Exception
{
    public readonly array $errors;
    public readonly array $old;

    /**
     * @throws ValidationException
     */
    public static function throw($errors, $old)
    {
        $instance = new static("Error");

        $instance->errors = $errors;
        $instance->old = $old;

        throw $instance;
    }

//    public function errors()        bsu teng public readonly array $errors;
//    {
//        return $this->errors;
//    }
}