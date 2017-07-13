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
            Bom relacionamento pessoal e público;
            Estou disposto a provar meu valor profissional e evolutivo;
            Sou uma pessoa obstinada com meus objetivos, e me comporto de maneira incansável até que atinja os mesmos.
            Estou sempre buscando soluções melhores para os problemas com solução complicada, 
            e melhores e mais ágeis meios de implementar e realizar as tarefas do cotidiano.'
        ];
    }
}
