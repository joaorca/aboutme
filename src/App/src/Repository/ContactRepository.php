<?php


namespace App\Repository;


class ContactRepository implements RepositoryInterface
{

    public function getData()
    {
        return [
            [
                'icon'  => 'phone',
                'title' => '+55 21 98850 3101'
            ],
            [
                'icon'  => 'envelope',
                'title' => 'joaorca@gmail.com'
            ],
            [
                'icon'        => 'skype',
                'title'       => 'Skype',
                'description' => 'joaorca@hotmail.com'
            ],
            [
                'icon'        => 'github',
                'title'       => 'GitHub',
                'description' => 'github.com/joaorca'
            ],
            [
                'icon'        => 'linkedin',
                'title'       => 'LinkedIn',
                'description' => 'linkedin.com/in/joaorca'
            ],
            [
                'icon'        => 'facebook',
                'title'       => 'Facebook',
                'description' => 'facebook.com/joaorca'
            ],
            [
                'icon'        => 'twitter',
                'title'       => 'Twitter',
                'description' => 'twitter.com/joao_rca'
            ],

        ];
    }
}