<?php


namespace App\Repository;


class AboutMeRepository implements RepositoryInterface
{

    public function getData()
    {
        return [
          'shortName'=>'João',
          'name'=>'João R C Almeida',
          'description'=>'
            Mais de 7 anos de experiência em desenvolvimento de sistemas;
            Trabalho em equipe e independente;
            Trabalho de maneira organizada;
            Facilidade para aprender e se adaptar;
            Resistência à pressão;
            Respeito a prazos, normas e horários;
            Acostumado a responsabilidades; 
            Bom relacionamento pessoal e público.'
        ];
    }
}
