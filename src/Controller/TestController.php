<?php
declare(strict_types=1);

namespace Products\Controller;

use Jifeline\Products\Core\Application\Command\CreateProduct;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function testAction(): Response
    {
        $command = new CreateProduct();
    }
}
