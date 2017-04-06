<?php

namespace ICGM2\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ICGM2\PagesBundle\Form\EventSearchForm;
use Symfony\Component\HttpFoundation\Response;

class MapController extends Controller
{

    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:events");
        $events = $repository->findAll();

        $form = $this->container->get('form.factory')->create(new EventSearchForm());

        return $this->render('PagesBundle:Map:showMap.html.twig', array(
                    'form' => $form->createView(),
                    'events' => $events));
    }

    public function eventSearchAction()
    {

        $request = $this->container->get('request');

        if ($request->isXmlHttpRequest()) {
            $keywords = '';
            $keywords = $request->request->get('keywords');

           

            if ($keywords != '') {
               

                $query = $this->getDoctrine()->getRepository('PagesBundle:events')
                        ->createQueryBuilder('a')
                        ->where("a.subject LIKE :keywords OR a.description LIKE :keywords")
                        ->setParameter('keywords', '%' . $keywords . '%')
                        ->getQuery();
                $events = $query->getResult();
               
                
                $response = new Response(json_encode($events));
                $response->headers->set('Content-Type', 'application/json');
            } else {
                $response = null;
            }

           
        } else {
            $response = "Empty Input";
        }
        
        return $response;
    }

}
