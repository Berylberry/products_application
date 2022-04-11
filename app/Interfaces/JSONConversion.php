<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Psy\Util\Json;

interface JSONConversion
{

    /**
     * Create Eloquent array from data
     *
     * @param string $json
     *
     * @returns array
     */
    public function createArray(string $json);
}
