<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MwangejiController extends AbstractController
{
    /**
     * @Route("/mwangeji", name="mwangeji")
     */
    public function index()
    {
        return $this->render('mwangeji/index.html.twig', [
            'controller_name' => 'MwangejiController',
        ]);
    }

    /**
     * @Route("/", name="login")
    */
    public function login()
    {
        return $this->render('/mwangeji/login.html.twig',
        ['title'=>'Connectez-vous']
        );
    }
    /**
    * @Route ("/patient" , name="patient")
    */
    public function patient()
    {
        return $this->render('/mwangeji/patient.html.twig');
    }
}
