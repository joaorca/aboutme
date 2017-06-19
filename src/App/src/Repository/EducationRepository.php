<?php


namespace App\Repository;

class EducationRepository implements RepositoryInterface
{

    public function getData()
    {
        return [
            [
                'ano'         => 2001,
                'titulo'      => 'Técnino em Processamento de dados',
                'nivel'       => 'Ensino Médio',
                'instituicao' => 'Colégio da Cidade'
            ],
            [
                'ano'         => 2006,
                'titulo'      => 'Tecnologia da Informação',
                'nivel'       => 'Gradução',
                'instituicao' => 'UniverCidade'
            ],
            [
                'ano'         => 2014,
                'titulo'      => 'Engenharia de Software',
                'nivel'       => 'Pós-Gradução',
                'instituicao' => 'Instituto Infnet'
            ],
            [
                'ano'         => 2014,
                'titulo'      => 'Zend Certified PHP Engineer',
                'nivel'       => 'ZEND022595',
                'instituicao' => 'Zend Technologies'
            ]
        ];
    }
}