<?php

namespace Sushi\SushiBufetBundle\Controller\Main;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/", service="sishi_bufet.controller.sushi")
 */
class SushiController extends Controller
{
    /**
     * @Route(path="/", name="sushi.app.index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {

        return $this->render('@SushiBufet/MainPage/index.html.twig', [

        ]);
    }

}