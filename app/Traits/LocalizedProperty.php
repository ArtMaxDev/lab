<?php

namespace App\Traits;

trait LocalizedProperty
{
    public function getLocalizedProperty($path)
    {
        $property = $path . '_' . \LaravelLocalization::getCurrentLocale();

        return $this->$property;
    }
}
