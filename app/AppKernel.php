<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\DoctrineBundle\DoctrineBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
  
            //added
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new FOS\FacebookBundle\FOSFacebookBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\jQueryBundle\SonatajQueryBundle(),
            new Sonata\BluePrintBundle\SonataBluePrintBundle(),
            new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
            //new Sonata\MediaBundle\SonataMediaBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            //new Knplabs\Bundle\GaufretteBundle\KnplabsGaufretteBundle(),
            //new Avalanche\Bundle\SitemapBundle\AvalancheSitemapBundle(),
            //new Avalanche\Bundle\ImagineBundle\AvalancheImagineBundle(),
            
            //Test
            new Liip\ContainerWrapperBundle\LiipContainerWrapperBundle(),
            new Liip\HelloBundle\LiipHelloBundle(),
            
            //Mr
            new Mr\StartBundle\MrStartBundle(),
            new Mr\GraphBundle\MrGraphBundle(),
            new Mr\RestBundle\MrRestBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }
  
        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
