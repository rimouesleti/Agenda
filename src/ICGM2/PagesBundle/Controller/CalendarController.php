<?php

namespace ICGM2\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalendarController extends Controller
{

    public function showAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("UserBundle:user");
        $user = $repository->find($id);
        if ($user === null) {
            return $this->redirect($this->generateUrl('fos_user_register'));
        }
        $events = $user->getEvents();
        $empty = "false";
        if ($events->isEmpty()) {
            $empty = "true";
        }
       
            return $this->render('PagesBundle:Event:showCalendar.html.twig', array('events' => $events, 'empty' => $empty));
    }

    public function insertEventAction(Request $request)
    {

        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        if ($request->isXmlHttpRequest()) {
            $title = $request->get("title");
            $start = $request->get("start");
            $end = $request->get("end");



            $evt = new Evenement(); //entity Evenement

            $evt->setTitle($title);
            $evt->setStart($start);
            $evt->setEnd($end);


            $em->persist($evt);
            $em->flush();
        }
        return $this->getEventAction();
    }

//Afficher tous les événements
}
