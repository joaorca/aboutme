<?php


namespace App\Repository;


class SkillRepository implements RepositoryInterface
{

    public function getData()
    {
        $data = [
            ['percent' => 1.0, 'description' => 'PHP'],
            ['percent' => 0.9, 'description' => 'PostgreSQL'],
            ['percent' => 0.8, 'description' => 'MySQL'],
            ['percent' => 0.6, 'description' => 'Git'],
            ['percent' => 0.6, 'description' => 'CVS'],
            ['percent' => 0.5, 'description' => 'Scrum'],
            ['percent' => 0.4, 'description' => 'Vagrant'],
            ['percent' => 0.5, 'description' => 'Docker'],
            ['percent' => 0.3, 'description' => 'Laravel'],
            ['percent' => 0.2, 'description' => 'ZF 2'],
            ['percent' => 0.2, 'description' => 'ZF 3'],
            ['percent' => 0.4, 'description' => 'jQuery'],
            ['percent' => 0.4, 'description' => 'PrototypeJS'],
            ['percent' => 0.4, 'description' => 'SmartyPHP'],
        ];

        foreach ($data as $key => $row) {
            $percent[$key] = $row['percent'];
            $description[$key] = $row['description'];
        }

        array_multisort($percent, SORT_DESC, $description, SORT_ASC, $data);

        return $data;
    }
}