<?php

namespace ICGM2\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class HistoryController extends Controller {

   

    public function showAction() {
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:histories");
        $histories = $repository->findBy(Array(), Array('date' => 'DESC'));
        return $this->render('PagesBundle:History:show.html.twig', array('histories' => $histories));
    }

 
}
