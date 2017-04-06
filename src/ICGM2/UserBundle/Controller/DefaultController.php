<?php

namespace ICGM2\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
//        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function newUserAction() {
//        return $this->render('UserBundle:Default:newUser.html.twig');
    }

    public function profileAction($id) {

//        $repository = $this->getDoctrine()->getManager()->getRepository("UserBundle:user");
//        $user = $repository->find($id);
//        if ($user === null) {
//            return $this->redirect($this->generateUrl('pages'));
//        }
//        return $this->render('UserBundle:Profile:index.html.twig', array('user' => $user));
    }

}
