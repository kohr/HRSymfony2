<?php

namespace Liip\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Templating\TemplateReference,
    Symfony\Component\Routing\Exception\ResourceNotFoundException,
    Symfony\Component\Validator\ValidatorInterface;

use FOS\RestBundle\View\View,
    FOS\RestBundle\View\ViewHandler,
    FOS\RestBundle\View\RouteRedirectView;
use Liip\HelloBundle\Document\Article;

class HelloController
{
    /**
     * @var FOS\RestBundle\View\ViewHandler
     */
    protected $view;

    /**
     * @var Symfony\Component\Validator\ValidatorInterface
     */
    protected $validator;

    public function __construct(ViewHandler $view, ValidatorInterface $validator)
    {
        $this->view = $view;
        $this->validator = $validator;
    }

    public function indexAction($name = null)
    {
        if (!$name) {
            $view = RouteRedirectView::create('_welcome');
        } else {
            $view = View::create(array('name' => $name))
//                ->setEngine('php');
                ->setTemplate(new TemplateReference('LiipHelloBundle', 'Hello', 'index'));
            ;
        }

        return $this->view->handle($view);
    }

    public function serializerAction()
    {
        $article = new Article();
        $article->setPath('/foo');
        $article->setTitle('Example use of the GetSetMethodNormalizer normalizer');
        $article->setBody("fos_rest:
    normalizers:
        'Liip\\HelloBundle\\Document\\Article': 'liip_hello.get_set_method_normalizer'");

        $view = new View();
        $view->setData($article);

        return $this->view->handle($view);
    }

    public function exceptionAction()
    {
        throw new ResourceNotFoundException("This should return a 404 response if FOSRestBundle is configured accordingly
fos_rest:
    exception:
        code:
            'Symfony\Component\Routing\Exception\ResourceNotFoundException': 404");
    }

    public function validationFailureAction()
    {
        $validator = $this->validator;

        $article = new Article();
        //$article->setPath('/foo');
        $article->setTitle('The path was set');
        $article->setBody('Disable the setPath() call to get a validation error example');

        $view = new View();

        $errors = $validator->validate($article);
        if (count($errors)) {
            $view->setStatusCode(400);
            $view->setData($errors);
        } else {
            $view->setData($article);
        }

        return $this->view->handle($view);
    }

    public function facebookAction()
    {
        // example of hardcoding the full template name
        $view = new View();
        $view->setTemplate('LiipHelloBundle:Hello:facebook.html.twig');

        return $this->view->handle($view);
    }

    public function hyphenatorAction()
    {
        $view = new View();
        $view->setTemplate('LiipHelloBundle:Hello:hyphenator.html.twig');

        return $this->view->handle($view);
    }

    public function customHandlerAction()
    {
        $view = new View();
        return $this->view->handle($view);
    }
}
