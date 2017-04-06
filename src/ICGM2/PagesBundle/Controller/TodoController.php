<?php

namespace ICGM2\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ICGM2\PagesBundle\Entity\todos;
use ICGM2\PagesBundle\Entity\entities;
use ICGM2\PagesBundle\Entity\histories;
use ICGM2\PagesBundle\Form\todosType as todoForm;

class TodoController extends Controller {

    public function showAllAction() {
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:todos");
        $todos = $repository->findAll();
        return $this->render('PagesBundle:Todo:showAll.html.twig', array('todos' => $todos));
    }

    public function newAction($entity_id) {
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:entities");
        $entities = $repository->findAll();
        if ($entities !== null) {


            $user = $this->getUser();
            $em = $this->getDoctrine()->getManager();
            $todo = new todos();

            $form = $this->createForm(new todoForm(), $todo);
            $form->handleRequest($this->getRequest());

            if ($form->isValid()) {
                $em->persist($todo);
                $em->flush();

                $todoName = $todo->getSubject();
                $todoID = $todo->getId();
                $today = new \DateTime("now");

                $history = new histories();
                $history->setUser($user);

                $history->setDate($today);
                $history->setAction("added");
                $history->setFeatureName($todoName);
                $history->setFeatureId($todoID);
                $history->setFeatureType("todo");
                $em->persist($history);
                $em->flush();


                return $this->redirect($this->generateUrl('todos'));
            }


            if ($entity_id !== null) {
                return $this->render('PagesBundle:Todo:newTodo.html.twig', array(
                            'form' => $form->createView(), 'entity_id' => $entity_id
                ));
            } else {
                return $this->render('PagesBundle:Todo:newTodo.html.twig', array(
                            'form' => $form->createView(), 'entity_id' => null
                ));
            }
        } else {
            return $this->redirect($this->generateUrl("entities/new"));
        }
    }

    public function editAction($id) {

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("PagesBundle:todos");
        $todo = $repository->find($id);


        $form = $this->createForm(new todoForm(), $todo);
        $form->handleRequest($this->getRequest());

        if ($form->isValid()) {

            $em->persist($todo);
            $em->flush();

            $todoName = $todo->getSubject();
            $todoID = $todo->getId();
            $today = new \DateTime("now");

            $history = new histories();
            $history->setUser($user);

            $history->setDate($today);
            $history->setAction("updated");
            $history->setFeatureName($todoName);
            $history->setFeatureId($todoID);
            $history->setFeatureType("todo");
            $em->persist($history);
            $em->flush();

            return $this->redirect($this->generateUrl('todos'));
        }
        return $this->render('PagesBundle:Todo:edit.html.twig', array(
                    'form' => $form->createView(),
                    'todo' => $todo
        ));
    }

    public function showAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:todos");
        $todo = $repository->find($id);
        if ($todo === null) {
            return $this->redirect($this->generateUrl('todos'));
        }

        $entityID = $todo->getEntity()->getId();
        $userID = $todo->getUser()->getId();
        return $this->render('PagesBundle:Todo:show.html.twig', array('todo' => $todo,"entityId"=>$entityID));
    }

    public function deleteAction($id) {
 $user = $this->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $todo = $em->getRepository('PagesBundle:todos')->find($id);
        if (!$todo) {
            throw $this->createNotFoundException('No event found for id ' . $id);
        }
        $todoName = $todo->getSubject();
        $em->remove($todo);
        $em->flush();

        
        
        $today = new \DateTime("now");

        $history = new histories();
        $history->setUser($user);

        $history->setDate($today);
        $history->setAction("deleted");
        $history->setFeatureName($todoName);
        $history->setFeatureType("todo");
        $em->persist($history);
        $em->flush();


        return $this->redirect($this->generateUrl('todos'));
    }

}
