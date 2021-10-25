<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * Returns HTML template
     * @Route("/data-entry-form", name="dataEntryForm")
     */
    public function dataEntryForm()
    {
        return $this->render("main/data_entry_form.html.twig", 
			[
				"subfolderAlias" => "blah"
			]
        );
    }

     /**
     * Returns HTML template
     * @Route("/survey-form", name="surveyForm")
     */
    public function surveyForm()
    {
        return $this->render("main/survey_form.html.twig", 
			[
				"subfolderAlias" => "blah"
			]
        );
    }




}
