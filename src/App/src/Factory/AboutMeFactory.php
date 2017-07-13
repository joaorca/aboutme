<?php


namespace App\Factory;

use App\Action\AboutMeAction;
use App\Repository\AboutMeRepository;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class AboutMeFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return AboutMeAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new AboutMeAction(new AboutMeRepository());
    }
}
