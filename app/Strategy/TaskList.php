<?php

namespace App\Strategy;

use App\Adapters\ProviderAdapterInterface;


class TaskList
{

    public function __construct(
        private ProviderAdapterInterface $providerAdapter
    ){}

    /**
     * @return mixed
     */
    public function getAll(): mixed
    {
        return $this->providerAdapter->getIssueData();
    }
}
