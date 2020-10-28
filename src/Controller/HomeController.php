<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home(): Response
    {
        $ua = $_SERVER['HTTP_USER_AGENT'];
        $onglet = "Home";
        $systeme = "error";

        if (stristr($ua,"Win")==TRUE){
            $systeme="Windows";
        }elseif(stristr($ua,"Linux")==TRUE){
            $systeme="Linux";
        }

        return $this->render('home/home.html.twig',[
            'onglet' => $onglet,
            'systeme' => $systeme,
        ]);
    }
}
