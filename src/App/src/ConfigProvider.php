<?php

namespace App;

/**
 * The configuration provider for the App module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            'invokables' => [
                Action\PingAction::class         => Action\PingAction::class,
                Service\CurriculumService::class => Service\CurriculumService::class,
            ],
            'factories'  => [
                Action\HomeAction::class       => Factory\HomeFactory::class,
                Action\AboutMeAction::class    => Factory\AboutMeFactory::class,
                Action\ContactAction::class    => Factory\ContactFactory::class,
                Action\CursoLivreAction::class => Factory\CursoLivreFactory::class,
                Action\EducationAction::class  => Factory\EducationFactory::class,
                Action\ExperienceAction::class => Factory\ExperienceFactory::class,
                Action\HobbyAction::class      => Factory\HobbyFactory::class,
                Action\LanguageAction::class   => Factory\LanguageFactory::class,
                Action\SkillAction::class      => Factory\SkillFactory::class,
                Action\CurriculumAction::class => Factory\CurriculumFactory::class,
            ],
        ];
    }

    /**
     * Returns the templates configuration
     *
     * @return array
     */
    public function getTemplates()
    {
        return [
            'paths' => [
                'app'    => [__DIR__ . '/../templates/app'],
                'error'  => [__DIR__ . '/../templates/error'],
                'layout' => [__DIR__ . '/../templates/layout'],
            ],
        ];
    }
}
