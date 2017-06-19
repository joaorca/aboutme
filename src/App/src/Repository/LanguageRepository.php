<?php


namespace App\Repository;


class LanguageRepository implements RepositoryInterface
{

    public function getData()
    {
        return [
            ['description' => 'Português', 'percent' => '100'],
            ['description' => 'Inglês', 'percent' => '60'],
        ];
    }
}