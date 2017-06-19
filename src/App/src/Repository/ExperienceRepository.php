<?php


namespace App\Repository;


class ExperienceRepository implements RepositoryInterface
{

    public function getData()
    {
        return [
            [
                'where'       => 'UNISUAM',
                'year'        => '2012 - Hoje',
                'profession'  => 'Analista',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
                'where'       => 'UNISUAM',
                'year'        => '2007 - 2012',
                'profession'  => 'Programador',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
                'where'       => 'TDesign',
                'year'        => '2006 - 2007',
                'profession'  => 'Programador Web',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
                'where'       => 'Comunidade Mãe do Redentor',
                'year'        => '2001 - 2006',
                'profession'  => 'Programador Web',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
                'where'       => 'Colégio Imaculada Conceição',
                'year'        => '2003',
                'profession'  => 'Técnico em Informática',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
                'where'       => 'UniverCidade',
                'year'        => '2001',
                'profession'  => 'Estagiário de HelpDesk',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
                'where'       => 'UNISUAM',
                'year'        => '2007 - 2012',
                'profession'  => 'Programador',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ]
        ];
    }
}