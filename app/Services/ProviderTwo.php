<?php

namespace App\Services;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Http;

class ProviderTwo
{

    /**
     * @return \Illuminate\Support\Collection|string
     */
    public function getAllData(): string|\Illuminate\Support\Collection
    {
        try {
            $response = Http::get('http://www.mocky.io/v2/5d47f235330000623fa3ebf7');
            return $response->collect();
        } catch (HttpResponseException $exception) {
            return $exception->getMessage();
        }
    }
}
