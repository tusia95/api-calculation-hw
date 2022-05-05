<?php
namespace App\Tests;
use App\Service\CalculationService;
use PHPUnit\Framework\TestCase;

final class CalculationServiceTest extends TestCase
{
    public function testRunCalculation()
    {
        $calculationService = new CalculationService();

        $this->assertIsFloat($calculationService->runCalculation(1.879,-98, 'add'));
        $this->assertSame(-96.121, $calculationService->runCalculation(1.879,-98, 'add'));
        $this->assertSame('you cant divide on zero', $calculationService->runCalculation(-0.0097,0, 'divide'));
        $this->assertSame(6705.92745, round($calculationService->runCalculation(12345,0.54321, 'multiply'), 5));
        $this->assertSame(-2.857638888888889, $calculationService->runCalculation(-9876,3456, 'divide'));

    }
}