<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
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
        $answers = [
            "That is not bab idea :-)",
            "It depends on whether you are in sociology or psychology",
            "Most of the population believe that paranoid is either derogertory or pathological.",
        ];
        return $this->render("question/show.html.twig", [
            'question' => ucwords(str_replace("-",' ', $wildcard )),
            'answers' => $answers,

        ]);

        /*
        return new Response( sprintf('Here will be the question of "%s" 
        and its answers.', ucwords(str_replace("-",' ', $wildcard ))));
       */
    }
}
