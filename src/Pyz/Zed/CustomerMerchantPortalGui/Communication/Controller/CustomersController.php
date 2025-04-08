<?php

namespace Pyz\Zed\CustomerMerchantPortalGui\Communication\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

class CustomersController extends AbstractController
{
    /**
     * @return array
     */
    public function indexAction(): array
    {
        $configuration = $this->getFactory()->createCustomerConfigurationProvider()->getConfiguration();
        return $this->viewResponse([
            'customerTableConfiguration' => $configuration,
        ]);
    }
    public function tableDataAction(Request $request): Response
    {
        return $this->getFactory()->getGuiTableHttpDataRequestExecutor()->execute(
            $request,
            $this->getFactory()->createCustomerGuiTableDataProvider(),
            $this->getFactory()->createCustomerConfigurationProvider()->getConfiguration(),
        );
    }
}