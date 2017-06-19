<?php


namespace App\Factory;

use App\Action\HobbyAction;
use App\Repository\HoobyRepository;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class HobbyFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return HobbyAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new HobbyAction(new HoobyRepository());
    }
}
