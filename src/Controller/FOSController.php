<?php
namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use App\Service\CalculationService;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;


class FOSController extends AbstractFOSRestController
{
    /**
     * Execute calculation
     * @Rest\Post("/api4/calculation")
     * @param Request $request
     * @return View
     */
    public function runCalculation(Request $request, CalculationService $calculationService): View
    {
        $action = $request->get('action');
        $first = $request->get('firstNumber');
        $second = $request->get('secondNumber');

        return View::create($calculationService->runCalculation($first, $second, $action), Response::HTTP_OK);
    }
}