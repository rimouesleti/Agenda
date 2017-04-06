<?php

namespace ICGM2\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ICGM2\PagesBundle\Form\messagesType as messageForm;
use ICGM2\PagesBundle\Entity\messages;

class MessageController extends Controller
{

//    public function showAction() {
//        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:events");
//        $events = $repository->findAll();
//        return $this->render('PagesBundle:Event:showCalendar.html.twig', array('events' => $events));
//    }

    public function newAction($receiver)
    {

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $message = new messages();

        $form = $this->createForm(new messageForm(), $message);
        $form->handleRequest($this->getRequest());

        if ($form->isValid()) {
            $today = new \DateTime("now");
            $message->setStatut("unread");
            $message->setDate($today);
            $message->setUser($user);
            $message->setReceiverId($receiver);
            $em->persist($message);
            $em->flush();
            $flash = $this->get('session')->getFlashBag()->add(
                    'notice', 'Your message has been sent!'
            );
            
        }
        else{
            $flash =  $this->get('session')->getFlashBag()->add(
                    'notice', 'An error has occured please try again.'
            );
        }
        return $this->redirect($this->generateUrl('contributor', array('id'=> $receiver)));
    }

}
