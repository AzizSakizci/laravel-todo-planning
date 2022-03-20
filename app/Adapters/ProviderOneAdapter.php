<?php

namespace App\Adapters;

use App\Services\ProviderOne;

class ProviderOneAdapter implements ProviderAdapterInterface
{

    public function getIssueData(): array
    {
        $providerOne = new ProviderOne();
        return $this->toformat($providerOne->getAllData()->toArray());
    }


    public function toformat(array $data): array
    {
        $multipleData = [];
        foreach ($data as $value) {
            $multipleData[] = [
                'name' => $value['id'],
                'timing' => $value['sure'],
                'difficulty' => $value['zorluk']
            ];
        }

        return $multipleData;

    }
}
