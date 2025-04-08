<?php

namespace Pyz\Zed\CustomerMerchantPortalGui\Communication\ConfigProvider;

use Generated\Shared\Transfer\GuiTableConfigurationTransfer;
use Spryker\Shared\GuiTable\Configuration\Builder\GuiTableConfigurationBuilderInterface;
use Spryker\Shared\GuiTable\GuiTableFactoryInterface;

class CustomerConfigurationProvider implements CustomerConfigurationProviderInterface
{
    /**
     * @var GuiTableFactoryInterface
     */
    protected GuiTableFactoryInterface $guiTableFactory;

    /**
     * @param GuiTableFactoryInterface $guiTableFactory
     */
    public function __construct(GuiTableFactoryInterface $guiTableFactory)
    {
        $this->guiTableFactory = $guiTableFactory;
    }

    /**
     * @inheritDoc
     */
    public function getConfiguration(): GuiTableConfigurationTransfer
    {
        $guiTableConfigurationBuilder = $this->guiTableFactory->createConfigurationBuilder();

        $guiTableConfigurationBuilder = $this->addColumns($guiTableConfigurationBuilder);

        $guiTableConfigurationBuilder
            ->setDataSourceUrl(static::DATA_URL)
            ->setDefaultPageSize(defaultPageSize: self::DEFAULT_PAGE_SIZE);

        return $guiTableConfigurationBuilder->createConfiguration();
    }

    /**
     * @param GuiTableConfigurationBuilderInterface $guiTableConfigurationBuilder
     *
     * @return GuiTableConfigurationBuilderInterface
     */
    protected function addColumns(GuiTableConfigurationBuilderInterface $guiTableConfigurationBuilder
    ): GuiTableConfigurationBuilderInterface {
        $guiTableConfigurationBuilder
            ->addColumnText(static::COL_KEY_ID_CUSTOMER, 'Customer ID', true, false)
            ->addColumnDate(static::COL_KEY_CREATED_AT, 'Registration Date', true, true)
            ->addColumnText(static::COL_KEY_EMAIL, 'Email', true, true)
            ->addColumnText(static::COL_KEY_LAST_NAME, 'Last Name', true, true)
            ->addColumnText(static::COL_KEY_FIRST_NAME, 'First Name', true, true);
        return $guiTableConfigurationBuilder;
    }
}
