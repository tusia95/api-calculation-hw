<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use App\Service\CalculationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class JsonController extends AbstractController
{

    /**
     * @Route("/api3/calculate",methods={"POST"})
     */
    public function getCalculationResult(Request $request, CalculationService $calculationService): JsonResponse
    {
        $data= $request->toArray();
        $action = $data["action"];
        $firstNumber = $data["firstNumber"];
        $secondNumber = $data["secondNumber"];
        return new JsonResponse(['result' =>$calculationService->runCalculation($firstNumber, $secondNumber, $action)]);
    }
}