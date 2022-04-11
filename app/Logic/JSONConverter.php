<?php

namespace App\Logic;

use Illuminate\Database\Eloquent\Collection;

class JSONConverter implements \App\Interfaces\JSONConversion
{

    /**
     * @inheritDoc
     */
    public function createArray(string $json)
    {
        return json_decode($json, true);
    }
}
