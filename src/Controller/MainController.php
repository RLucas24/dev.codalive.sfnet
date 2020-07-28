<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/change-locale/{locale}", name="change_locale")
     */
    public function changeLocale($locale, Request $request)
    {   
        //request of the language in session
        $request->getSession()->set('_locale', $locale);
        // we come back to the previous page
        return $this->redirect($request->headers->get('referer'));
    }
} 
