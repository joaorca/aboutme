<?php


namespace App\Factory;

use App\Action\ContactAction;
use App\Repository\ContactRepository;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ContactFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return ContactAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ContactAction(new ContactRepository());
    }
}
