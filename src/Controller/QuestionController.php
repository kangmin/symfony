<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{

    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('What is bewitching controller we have jsut conjured!');
    }

    /**
     * @Route("/questions/{wildcard}")
     */
    public function show($wildcard){
        return new Response( sprintf('Here will be the question of "%s" 
        and its answers.', ucwords(str_replace("-",' ', $wildcard ))));
    }
}
