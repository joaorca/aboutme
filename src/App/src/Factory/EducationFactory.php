<?php


namespace App\Factory;

use App\Action\EducationAction;
use App\Repository\EducationRepository;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class EducationFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return EducationAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new EducationAction(new EducationRepository());
    }
}
