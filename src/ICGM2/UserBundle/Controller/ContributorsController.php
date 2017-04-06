<?php

namespace ICGM2\UserBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ICGM2\UserBundle\Entity\User;
use ICGM2\UserBundle\Form\UserType;
use ICGM2\UserBundle\Form\EditFormType;
use ICGM2\PagesBundle\Form;
use ICGM2\PagesBundle\Entity\messages;
use Doctrine\Common\Collections\Criteria;

class ContributorsController extends Controller
{

    public function showcontributorsAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('UserBundle:User');
        $Users = $repository->findAll();

        return $this->render('UserBundle:Contributors:show.html.twig', array('Users' => $Users));
    }

    public function editcontributorsAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('UserBundle:User');
        $user = $repository->find($id);

        $form = $this->createForm(new UserType(), $user);
        $request = $this->getRequest();

        if ($form->isValid()) {
            $user->preUpload();
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('contributors'));
        }

        return $this->render('UserBundle:Contributors:EditContributors.html.twig', array('user' => $user, 'form' => $form->createView()));
    }

    public function showcontributorAction($id)
    {

        $repository = $this->getDoctrine()->getManager()->getRepository("UserBundle:user");
        $user = $repository->find($id);
        if ($user === null) {
            return $this->redirect($this->generateUrl('contributors'));
        }



        $events = $user->getEvents();
//
        $today = new \DateTime("now");



//        $qb = $this->createQueryBuilder('events')
//                ->leftJoin('events.pseudos', 'pu')
//                ->leftJoin('pu.jeu', 'puj', 'WITH', 'puj.nom = :nom_jeu')
//                ->setParameter('nom_jeu', $nom_jeu)
//                ->addSelect('pu')
//                ->addSelect('puj');
//
//        return $qb->getQuery()->getResult();
//        $empty = "false";
//        if ($events->isEmpty()) {
//            $empty = "true";
//        }

        $form = $this->createForm(new Form\messagesType(), new messages());
        return $this->render('UserBundle:Contributors:detail.html.twig', array(
                    'user' => $user,
                    'events' => $events,
                    'today' => $today,
                    'form' => $form->createView()));
    }

    public function deletecontributorsAction($id)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        if (!$user) {
            throw $this->createNotFoundException('No user found for id ' . $id);
        }
        $em->remove($user);
        $em->flush();

        return $this->redirect($this->generateUrl('contributors'));
    }

}
