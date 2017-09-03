<?php
/**
 * Created by PhpStorm.
 * User: fsoul
 * Date: 03.09.2017
 * Time: 0:14
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class GenusController extends Controller
{
    /**
     *  @Route("/genus/{genusName}")
     *
     */
    public function showAction($genusName)
    {
        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
        ]);
    }

    /**
     *  @Route("/genus/{genusName}/notes", name="genus_show_notes")
     *  @Method("GET")
     */
    public function getNotesAction()
    {
        $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg'],
        ];

        $data = [
            'notes' => $notes
        ];

        return new JsonResponse($data);
    }
}