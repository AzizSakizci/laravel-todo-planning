<?php

namespace App\Services;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Http;

class ProviderOne
{
    /**
     * @return \Illuminate\Support\Collection|string
     */
    public function getAllData(): string|\Illuminate\Support\Collection
    {
        try {
            $response = Http::get('http://www.mocky.io/v2/5d47f24c330000623fa3ebfa');
            return $response->collect();

        } catch (HttpResponseException $exception) {
            return $exception->getMessage();
        }
    }
}
