<?php

namespace Sushi\SushiBufetBundle\Controller\Main;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sushi\SushiBufetBundle\Services\DishService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/", service="sishi_bufet.controller.sushi")
 */
class SushiController extends Controller
{
    /** @var DishService */
    private $dishService;


    /**
     * SushiController constructor.
     * @param DishService $dishService
     */
    public function __construct(
        DishService $dishService
    ){
        $this->dishService = $dishService;
    }

    /**
     * @Route(path="/", name="sushi.app.index")
     * @param Request $request
     * @param DishService $dishService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {

        return $this->render('@SushiBufet/MainPage/index.html.twig', [

        ]);
    }

}