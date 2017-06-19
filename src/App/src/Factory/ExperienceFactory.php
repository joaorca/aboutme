<?php


namespace App\Factory;

use App\Action\ExperienceAction;
use App\Repository\ExperienceRepository;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ExperienceFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return ExperienceAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ExperienceAction(new ExperienceRepository());
    }
}
