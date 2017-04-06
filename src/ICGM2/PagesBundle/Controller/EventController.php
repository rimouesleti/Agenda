<?php

namespace ICGM2\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ICGM2\PagesBundle\Entity\events;
use ICGM2\PagesBundle\Entity\location;
use ICGM2\PagesBundle\Entity\histories;
use ICGM2\PagesBundle\Entity\eventHistory;
use ICGM2\PagesBundle\Entity\PendingEvent;
use ICGM2\PagesBundle\Form as Form;

class EventController extends Controller
{

    public function showAllAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:events");

        $events = $repository->findBy(Array(), Array('startDate' => 'DESC'));

        return $this->render('PagesBundle:Event:showAll.html.twig', array('events' => $events));
    }

    public function showAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:events");
        $event = $repository->find($id);
        if ($event === null) {
            return $this->redirect($this->generateUrl('event/new'));
        }
        $eventHistory = $event->getEventHistory();
        $entityID = $event->getEntity()->getId();

        $em = $this->getDoctrine()->getManager();
        $pendingRepo = $em->getRepository('PagesBundle:PendingEvent');
        $nb = $pendingRepo->getNb($id);

        return $this->render('PagesBundle:Event:show.html.twig', array('event' => $event,
                    "entityId" => $entityID,
                    "nb" => $nb,
                    'eventHistory' => $eventHistory));
    }

    public function newAction($entity_id)
    {
        $userRepository = $this->getDoctrine()->getManager()->getRepository("UserBundle:user");
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:entities");
        $entities = $repository->findAll();
        if ($entities !== null) {
            $user = $this->getUser();
            $userId = $user->getId();

            $em = $this->getDoctrine()->getManager();
            $event = new events();

            $location = new location();
            $formLocation = $this->createForm(new Form\locationType(), $location);
            $form = $this->createForm(new Form\eventsType(), $event);
            $form->handleRequest($this->getRequest());

            if ($form->isValid()) {
                $event->setActive(1);

                if ($event->getLocation() == null) {
                    $event->setPosition($event->getEntity()->getPosition());
                }
                else{
                     $event->setPosition($event->getLocation()->getPosition());
                }


                $em->persist($event);
                $em->flush();

                $eventName = $event->getSubject();
                $eventID = $event->getId();
                $today = new \DateTime("now");

                $history = new histories();
                $history->setUser($user);

                $history->setDate($today);
                $history->setAction("added");
                $history->setFeatureName($eventName);
                $history->setFeatureId($eventID);
                $history->setFeatureType("event");
                $em->persist($history);
                $em->flush();

                $users = $event->getUser();
                foreach ($users as $user) {
                    $pending = new PendingEvent();
                    $pending->setEventId($eventID);
                    $pending->setUserId($user->getId());
                    $em->persist($pending);
                    $em->flush();
                }

                return $this->redirect($this->generateUrl('calendar', array("id" => $userId)));
            } else {
                
            }

            if ($entity_id !== null) {
                return $this->render('PagesBundle:Event:newEvt.html.twig', array(
                            'form' => $form->createView(),
                            'entity_id' => $entity_id,
                            'user_id' => $userId,
                            'formLocation' => $formLocation->createView()
                ));
            } else {
                return $this->render('PagesBundle:Event:newEvt.html.twig', array(
                            'form' => $form->createView(),
                            'entity_id' => null,
                            'user_id' => $userId,
                            'formLocation' => $formLocation->createView()
                ));
            }
        } else {
            return $this->redirect($this->generateUrl("entities/new"));
        }
    }

    public function editAction($id)
    {

        $eventHistory = new eventHistory();
        $user = $this->getUser();
        $userId = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("PagesBundle:events");
        $event = $repository->find($id);

        $today = new \DateTime("now");

        $eventHistory->setUser($user);
        $eventHistory->setStatus1($event->getStatus());
        $eventHistory->setStartDate1($event->getStartDate());
        $eventHistory->setEndDate1($event->getEndDate());

        $eventHistory->setDate($today);

        $form = $this->createForm(new Form\eventsType(), $event);
        $form->handleRequest($this->getRequest());


        if ($form->isValid()) {

            $em->persist($event);
            $em->flush();

            $eventName = $event->getSubject();
            $eventID = $event->getId();

            $history = new histories();
            $history->setUser($user);
            $history->setDate($today);
            $history->setAction("updated");
            $history->setFeatureName($eventName);
            $history->setFeatureId($eventID);
            $history->setFeatureType("event");
            $em->persist($history);
            $em->flush();

            $eventHistory->setEvent($event);
            $eventHistory->setStatus2($event->getStatus());
            $eventHistory->setStartDate2($event->getStartDate());
            $eventHistory->setEndDate2($event->getEndDate());
            $em->persist($eventHistory);
            $em->flush();


            return $this->redirect($this->generateUrl('calendar', array("id" => $userId)));
        }
        return $this->render('PagesBundle:Event:edit.html.twig', array(
                    'form' => $form->createView(),
                    'event' => $event
                    
        ));
    }

    public function deleteAction($id)
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $em = $this->getDoctrine()->getEntityManager();
        $event = $em->getRepository('PagesBundle:events')->find($id);
        if (!$event) {
            throw $this->createNotFoundException('No event found for id ' . $id);
        }

        // $pendingRepo = $em->getRepository('PagesBundle:PendingEvent');


        $eventName = $event->getSubject();
        $em->remove($event);
        $em->flush();

        $q = $em->createQuery('delete from PagesBundle:PendingEvent tb where tb.eventId = ' . $id);
        $q->execute();

        $today = new \DateTime("now");

        $history = new histories();
        $history->setUser($user);

        $history->setDate($today);
        $history->setAction("deleted");
        $history->setFeatureName($eventName);
        $history->setFeatureType("event");
        $em->persist($history);
        $em->flush();

        return $this->redirect($this->generateUrl('events'));
    }

    public function newLocationAction()
    {

        $em = $this->getDoctrine()->getManager();
        $location = new location();
        $form = $this->createForm(new Form\locationType(), $location);
        $form->handleRequest($this->getRequest());

        if ($form->isValid()) {

            $em->persist($location);
            $em->flush();

            return $this->get('session')->getFlashBag()->add('notice','message');
        }
    }

}
