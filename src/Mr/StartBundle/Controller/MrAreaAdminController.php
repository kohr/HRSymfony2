<?php
namespace Mr\StartBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;

class MrAreaAdminController extends Controller
{

    /**
     * return the Response object associated to the edit action
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     * @param  $id
     * @return \Symfony\Component\HttpFoundation\Response
     *
    public function editAction($id)
    {
        return parent::editAction($id);
 
        *
        // first load the article
        $em = $this->getDoctrine()->getEntityManager();
        $area = $this->admin->getObject($this->get('request')->get($this->admin->getIdParameter()));
        $area->setName('my name');
        $area->setTranslatableLocale('de_de'); // change locale
        $em->persist($area);
        $em->flush();        

        echo 'ADMIN';exit();
        *
    }
    */
}