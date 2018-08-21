<?php

use FM\ElfinderBundle\FMElfinderBundle;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use Project3\WebsiteBundle\Project3WebsiteBundle;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            //STANDARD
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle(),
            //CUSTOM
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Trsteel\CkeditorBundle\TrsteelCkeditorBundle(),
            //WEBSITE
            new Project3WebsiteBundle(),
            new FM\ElfinderBundle\FMElfinderBundle(),
            new FOS\ElasticaBundle\FOSElasticaBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),

    );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }

    public function __construct($environment, $debug)
    {
        date_default_timezone_set('Europe/Amsterdam');
        parent::__construct($environment, $debug);
    }
}
