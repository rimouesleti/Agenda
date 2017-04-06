<?php

namespace ICGM2\PagesBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("UserBundle:user");
        $userID = $this->getUser()->getId();

        $user = $repository->find($userID);

        $events = $user->getEvents();

        $today = new \DateTime("now");
        $current = date('Y-m-d', strtotime('now'));

        $query = $this->getDoctrine()->getRepository('PagesBundle:events')
                ->createQueryBuilder('u')->where('u.startDate LIKE :date')
                ->setParameter('date', $current . '%')
                ->getQuery();
        $result = $query->getResult();

        $appointement = "false";
        if (!$events->isEmpty() && count($result) > 0) {
            
                $appointement = "true";
           
        }
        $repositoryForHistory = $this->getDoctrine()->getManager()->getRepository("PagesBundle:histories");

        $histories = $repositoryForHistory->findBy(Array(), Array('date' => 'DESC'), 10);
        return $this->render('PagesBundle:Default:index.html.twig', array(
                    "appointement" => $appointement,
                    "events" => $events,
                    'today' => $today,
                    'histories' => $histories));
    }

    function reloadHistoryAction()
    {
        $repositoryForHistory = $this->getDoctrine()->getManager()->getRepository("PagesBundle:histories");

        $histories = $repositoryForHistory->findBy(Array(), Array('date' => 'DESC'), 10);
        $html = "";
        foreach ($histories as $history) {
            if ($history->getFeatureType() == "entity") {
                $faType = "<i class='fa fa-user'></i>";
            } else if ($history->getFeatureType() == "event") {
                $faType = "<i class='fa fa-clock-o'></i>";
            } else {
                $faType = "<i class='fa fa-tasks'></i>";
            }
            if ($history->getFeatureId() !== "") {
                $featureType = $history->getFeatureType();
                $featureID = $history->getFeatureId();
                $route = $this->get('request')->getBasePath();
                $route = $route . "/" . $featureType . "/" . $featureID;
                $link = "<a href=$route>" . $history->getFeatureName() . "</a>";
            } else {
                $link = $history->getFeatureName();
            }

            $html .="<tr>
                       <td class='center' style='color: #ADADAD;'>                            
                         $faType                       
                        </td>
                       <td>
                         <span class='bold-text text-small'>" . $history->getUser() . " " . $history->getAction() . " $link
                          </span>
                       </td>
                       <td class='center' style='color: #ADADAD;'>
                      " . $history->getDate()->format('d-m-Y  H:i') . "
                       </td>

                 </tr> ";
        }
        return new Response($html);
    }

}
