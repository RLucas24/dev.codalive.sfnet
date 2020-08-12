<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class LiveChatController extends AbstractController
{
    /**
     * @Route("/live", name="app_live_chat")
     * @IsGranted("ROLE_USER")
     */
    public function index()
    {
        return $this->render('chat/live_chat.html.twig');
    }
}
