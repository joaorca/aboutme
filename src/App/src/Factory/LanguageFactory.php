<?php


namespace App\Factory;

use App\Action\LanguageAction;
use App\Repository\LanguageRepository;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class LanguageFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return LanguageAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new LanguageAction(new LanguageRepository());
    }
}
