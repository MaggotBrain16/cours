<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
      */
    public function number()
    {
        $number = random_int(0, 100);

        $contenu = $this->render('lucky/number.html.twig', [ 
            "number" =>$number
        ]);


        return new Response($contenu, 500);
    }
}