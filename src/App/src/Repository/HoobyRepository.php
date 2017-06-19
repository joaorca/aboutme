<?php


namespace App\Repository;


class HoobyRepository implements RepositoryInterface
{

    public function getData()
    {
        return [
            ['description' => 'Programação'],
            ['description' => 'Games'],
            ['description' => 'Filmes'],
            ['description' => 'Seriados'],
            ['description' => 'Gatos'],
        ];
    }
}