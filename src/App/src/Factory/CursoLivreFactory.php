<?php


namespace App\Factory;

use App\Action\CursoLivreAction;
use App\Repository\CursoLivreRepository;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class CursoLivreFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return CursoLivreAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CursoLivreAction(new CursoLivreRepository());
    }
}
