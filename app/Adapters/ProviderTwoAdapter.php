<?php

namespace App\Adapters;


use App\Services\ProviderTwo;

class ProviderTwoAdapter implements ProviderAdapterInterface
{

    public function getIssueData(): array
    {
        $providerTwo = new ProviderTwo();
        return $this->toformat($providerTwo->getAllData()->toArray());
    }


    public function toformat(array $data): array
    {
        $multipleData = [];
        foreach ($data as $value) {
            foreach ($value as $key => $val) {
                $multipleData[] = [
                    'name' => $key,
                    'timing' => $val['estimated_duration'],
                    'difficulty' => $val['level']
                ];
            }
        }
        return $multipleData;

    }
}
