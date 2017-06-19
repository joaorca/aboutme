<?php


namespace App\Factory;

use App\Action\SkillAction;
use App\Repository\SkillRepository;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class SkillFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return SkillAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new SkillAction(new SkillRepository());
    }
}
