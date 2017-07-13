<?php


namespace App\Repository;


class CursoLivreRepository implements RepositoryInterface
{

    public function getData()
    {
        $data = [
            [
                'course' => 'Inglês Leitura/Escrita/Conversação',
                'where' => 'Yes!',
                'year' => '2007',
            ],
            [
                'course' => 'Inglês Leitura/Escrita/Conversação',
                'where' => 'UNISUAM-CELEM',
                'year' => '2012',
            ],
            [
                'course' => 'PostgreSQL: Performance e Tuning',
                'where' => 'Dextra',
                'year' => '2007',
            ],
            [
                'course' => 'Grails: Desenvolvimento Ágil para Web',
                'where' => 'Professor Carlos Ribeiro',
                'year' => '2012',
            ],
            [
                'course' => 'PHP Zend Framework',
                'where' => 'School of Net',
                'year' => '2012',
            ],
            [
                'course' => 'PHP Extreme 5.3',
                'where' => 'School of Net',
                'year' => '2012',
            ],
            [
                'course' => 'Git: Workshop OnLine',
                'where' => 'School of Net',
                'year' => '2012',
            ],
            [
                'course' => 'Git: Trabalho em Equipe com Controle e Segurança (PM89)',
                'where' => 'Caelum',
                'year' => '2012',
            ],
            [
                'course' => 'Java: Orientação a Objetos (FJ11)',
                'where' => 'Caelum',
                'year' => '2012',
            ],
            [
                'course' => 'Java: Desenvolvimento Web (FJ21)',
                'where' => 'Caelum',
                'year' => '2012',
            ],
            [
                'course' => 'Java: Testes, XML e Design Patterns (FJ16)',
                'where' => 'Caelum',
                'year' => '2012',
            ],
            [
                'course' => 'Banco de Dados e SQL (CS-17)',
                'where' => 'Caelum',
                'year' => '2012',
            ],
            [
                'course' => 'PHP do jeito certo',
                'where' => 'School of Net',
                'year' => '2013',
            ],
            [
                'course' => 'PHP com MVC',
                'where' => 'School of Net',
                'year' => '2013',
            ],
            [
                'course' => 'PHP: Preparatório para Certificação',
                'where' => 'Season',
                'year' => '2013',
            ],
            [
                'course' => 'PHP Zend Framework 2 (Iniciando / Intermediário / Advanced / Inside)',
                'where' => 'School of Net',
                'year' => '2014',
            ],
        ];

        $year = null;
        $course = null;
        foreach ($data as $key => $row) {
            $year[$key] = $row['year'];
            $course[$key] = $row['course'];
            $where[$key] = $row['where'];
        }

        array_multisort($course, SORT_ASC, $year, SORT_ASC, $data);

        return $data;
    }
}