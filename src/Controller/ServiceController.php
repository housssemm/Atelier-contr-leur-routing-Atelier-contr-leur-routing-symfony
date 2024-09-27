<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/showService/{name}',name:'app_serv')]
   public function showService($name):Response{
    // return new Response ("service : ".$name);
     return $this->render ('service/showService.html.twig',['name'=>$name]);
   }

    #[Route('/index',name:'index')]
   public function goToIndex():Response{
    return $this->redirectToRoute('app_home');
   }
}
