<?php

namespace Pyz\Zed\CustomerMerchantPortalGui\Communication\ConfigProvider;

use Generated\Shared\Transfer\GuiTableConfigurationTransfer;

//Customer ID, Name, Email, Registration Date

interface CustomerConfigurationProviderInterface
{
    public const DEFAULT_PAGE_SIZE = 10;
    /**
     * @var string
     */
    public const COL_KEY_ID_CUSTOMER = 'id_customer';

    /**
     * @var string
     */
    public const COL_KEY_CREATED_AT = 'created_at';

    /**
     * @var string
     */
    public const COL_KEY_EMAIL = 'email';

    /**
     * @var string
     */
    public const COL_KEY_FIRST_NAME = 'first_name';

    /**
     * @var string
     */
    public const COL_KEY_LAST_NAME = 'last_name';


    public const DATA_URL = '/customer-merchant-portal-gui/customers/table-data';
    
    /**
     * @return \Generated\Shared\Transfer\GuiTableConfigurationTransfer
     */
    public function getConfiguration(): GuiTableConfigurationTransfer;

}