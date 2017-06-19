<?php


namespace App\Repository;


class CursoLivreRepository implements RepositoryInterface
{

    public function getData()
    {
        return [
            [
                'info1' => 'Linha 1 - titulo',
                'info2' => 'Linha 2 - descricao'
            ],
            [
                'info1' => 'Linha 1 - titulo',
                'info2' => 'Linha 2 - descricao'
            ]
        ];
    }
}