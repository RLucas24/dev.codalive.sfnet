<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class PaymentController extends AbstractController
{
    /**
     * @Route("/payment", name="app_payment")
     */
    public function index(Request $request)
    {
        // Set your secret key. Remember to switch to your live secret key in production!
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey('sk_test_51H7FwJLBaSnejfFKKtzEvqJsOv4JrMXnmICyHYcZna4eJPgRMknLJ7UrjY1tqrTaxJ9Jt8alBOprnFsfvtJrY6Up00YYehEbFc');
        
        \Stripe\PaymentIntent::create(array(
            'amount' => 15000,
            'currency' => 'eur',
            'source' => $request->request->get('stripeToken'),
            'description' => "test payment success",
        ));
        return $this->render('payment/payment.html.twig');
    }
}