<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FibonnaciController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function fibonnaci(){
        //construction de ma list
        $list = [1,2];
        for($i = 1 ; $i < 20 ; $i++){
            $list[] = $list[$i-1] + $list[$i];
        }

        $jsonlist = json_encode($list);//encodage de la liste en json
        return $this->render('stats.html.twig', ['json_list'=>$jsonlist]);
    }
}