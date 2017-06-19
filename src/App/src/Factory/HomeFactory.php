<?php

namespace App\Factory;

use App\Service\CurriculumService;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use App\Action\HomeAction;

class HomeFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return HomeAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new HomeAction($container->get(TemplateRendererInterface::class),$container->get(CurriculumService::class));
    }
}
