<?php

namespace App\Controller;

use App\Service\CalculationService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class QueryController extends AbstractController
{

    /**
     * @Route("/api/calculate")
     */
    public function getCalculationResult(Request $request, CalculationService $calculationService): JsonResponse
    {
        $action = $request->get('action');
        $first = $request->get('firstNumber');
        $second = $request->get('secondNumber');

        return new JsonResponse(['result' => $calculationService->runCalculation($first, $second, $action)]);

    }


}