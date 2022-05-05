<?php
namespace App\Controller;
use App\Service\CalculationService;
use Couchbase\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class FormDataController extends AbstractController
{

    /**
     * @Route("/api2/calculator",methods={"POST"})
     */
     public function getCalculationResult(Request $request, CalculationService $calculationService): Response
    {
        $action = $request->get('action');
        $first = $request->get('firstNumber');
        $second = $request->get('secondNumber');

        return new Response($calculationService->runCalculation($first, $second, $action));

    }
}