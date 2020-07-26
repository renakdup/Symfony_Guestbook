<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/catalog/{name?1}", name="homepage")
     */
    public function index(string $name)
    {
        $greet = '';

        $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));

//        return $this->render('conference/index.html.twig', [
//            'controller_name' => 'ConferenceController',
//        ]);

        return new Response(<<<EOF
<html>
    <body>
        $greet
        <img src="/images/under-construction.png" alt="">
    </body>
</html>
EOF
        );
    }
}
