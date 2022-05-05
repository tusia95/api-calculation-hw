<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use App\Service\CalculationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class JsonController extends AbstractController
{

    /**
     * @Route("/api3/calculate",methods={"POST"})
     */
    public function getCalculationResult(Request $request, CalculationService $calculationService): Response
    {
        $data= $request->toArray();
        $action = $data["action"];
        $firstNumber = $data["firstNumber"];
        $secondNumber = $data["secondNumber"];
        return new Response($calculationService->runCalculation($firstNumber, $secondNumber, $action));
    }
}