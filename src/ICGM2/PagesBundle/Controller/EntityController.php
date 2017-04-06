<?php

namespace ICGM2\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ICGM2\PagesBundle\Entity\entities;
use ICGM2\PagesBundle\Entity\histories;
use ICGM2\PagesBundle\Form as Form;
use Doctrine\Common\Collections\Collection;

class EntityController extends Controller
{

    public function showAllAction()
    {
        $excelReader = new \PHPExcel();
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:entities");

        $entities = $repository->findBy(Array(), Array('id' => 'DESC'));
        // $entities = $repository->findAll();

        return $this->render('PagesBundle:Entity:showAll.html.twig', array('entities' => $entities));
    }

    public function newAction($event)
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getEntityManager();
        $entity = new entities();
        $form = $this->createForm(new Form\AddEntity(), new entities());
        $form->handleRequest($this->getRequest());

        if ($form->isValid()) {

            $data = $form->getData();
            $data->setUser($user);
            $em->persist($data);
            $em->flush();

            $entityName = $data->getName();
            $entityID = $data->getId();
            $today = new \DateTime("now");

            $history = new histories();

            $history->setUser($user);
            $history->setDate($today);
            $history->setAction("added");
            $history->setFeatureName($entityName);
            $history->setFeatureId($entityID);
            $history->setFeatureType("entity");

            $em->persist($history);
            $em->flush();

            if ($event == "true") {
                
                return $this->redirect($this->generateUrl('event/new'));
            } else {
               
                return $this->redirect($this->generateUrl('entities'));
            }
        }
        return $this->render('PagesBundle:Entity:new.html.twig', array(
                    'form' => $form->createView(),"event"=>$event
        ));
    }

    public function showAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:entities");
        $entity = $repository->find($id);
        if ($entity === null) {
            return $this->redirect($this->generateUrl('entities'));
        }
        $todos = $entity->getTodos();
        $events = $entity->getEvents();
        $empty = "false";
        if ($todos->isEmpty() && $events->isEmpty()) {
            $empty = "true";
        }
        return $this->render('PagesBundle:Entity:detail.html.twig', array('entity' => $entity, "empty" => $empty, "todos" => $todos, "events" => $events));
    }

    public function editAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("PagesBundle:entities");
        $entity = $repository->find($id);
        if ($entity === null) {
            return $this->redirect($this->generateUrl('entities'));
        }
        $user = $this->getUser();

        $em = $this->getDoctrine()->getEntityManager();

        $form = $this->createForm(new Form\AddEntity(), $entity);
        $form->handleRequest($this->getRequest());

        if ($form->isValid()) {
            $data = $form->getData();
            $data->setUser($user);
            $entity->preUpload();
            $em->persist($data);
            $em->flush();

            $today = new \DateTime("now");
            $entityName = $data->getName();
            $entityID = $data->getId();

            $history = new histories();
            $history->setUser($user);
            $history->setDate($today);
            $history->setAction("updated");
            $history->setFeatureName($entityName);
            $history->setFeatureId($entityID);
            $history->setFeatureType("entity");

            $em->persist($history);
            $em->flush();

            return $this->redirect($this->generateUrl('entities'));
        }
        return $this->render('PagesBundle:Entity:edit.html.twig', array(
                    'form' => $form->createView(),
                    'entity' => $entity));
    }

    public function deleteAction($id)
    {
        $user = $this->getUser();


        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('PagesBundle:entities')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $entityName = $entity->getName();


        $em->remove($entity);
        $em->flush();

        $history = new histories();
        $history->setUser($user);

        $today = new \DateTime("now");
        $history->setDate($today);

        $history->setAction("deleted");
        $history->setFeatureName($entityName);
        $history->setFeatureType("entity");

        $em->persist($history);
        $em->flush();

        return $this->redirect($this->generateUrl('entities'));
    }

}
