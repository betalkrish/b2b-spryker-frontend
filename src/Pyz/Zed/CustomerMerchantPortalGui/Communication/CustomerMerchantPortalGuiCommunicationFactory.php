<?php
namespace Pyz\Zed\CustomerMerchantPortalGui\Communication;

use Pyz\Zed\CustomerMerchantPortalGui\Communication\ConfigProvider\CustomerConfigurationProvider;
use Pyz\Zed\CustomerMerchantPortalGui\Communication\DataProvider\CustomerGuiTableDataProvider;
use Pyz\Zed\CustomerMerchantPortalGui\CustomerMerchantPortalGuiDependencyProvider;
use Spryker\Shared\GuiTable\GuiTableFactoryInterface;
use Spryker\Shared\GuiTable\Http\GuiTableDataRequestExecutorInterface;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

class CustomerMerchantPortalGuiCommunicationFactory extends AbstractCommunicationFactory
{
    public function createCustomerConfigurationProvider(): CustomerConfigurationProvider
    {
        return new CustomerConfigurationProvider(
            $this->getProvidedDependency(
                CustomerMerchantPortalGuiDependencyProvider::SERVICE_GUI_TABLE_FACTORY
            )
        );
    }
    public function createCustomerGuiTableDataProvider(): CustomerGuiTableDataProvider
    {
        return new CustomerGuiTableDataProvider(
            $this->getProvidedDependency(CustomerMerchantPortalGuiDependencyProvider::FACADE_CUSTOMER)
        );
    }
    public function getGuiTableHttpDataRequestExecutor(): GuiTableDataRequestExecutorInterface
    {
        return $this->getProvidedDependency(
            CustomerMerchantPortalGuiDependencyProvider::SERVICE_GUI_TABLE_HTTP_DATA_REQUEST_EXECUTOR
        );
    }
}