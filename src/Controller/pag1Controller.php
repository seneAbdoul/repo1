<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class pag1Controller{
    #[Route('/page1')]
    public function index():Response{
       return new Response('hello');
    }
}