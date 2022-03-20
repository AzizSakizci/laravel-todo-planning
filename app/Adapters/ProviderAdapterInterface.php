<?php

namespace App\Adapters;

interface ProviderAdapterInterface
{
    /**
     * @return mixed
     */
    public function getIssueData(): mixed;

    /**
     * @param array $data
     * @return mixed
     */
    public function toformat(array $data): mixed;
}
