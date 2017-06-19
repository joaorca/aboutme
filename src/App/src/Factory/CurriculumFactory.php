<?php


namespace App\Factory;

use App\Action\CurriculumAction;
use App\Service\CurriculumService;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class CurriculumFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return CurriculumAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CurriculumAction($container->get(CurriculumService::class));
    }
}
