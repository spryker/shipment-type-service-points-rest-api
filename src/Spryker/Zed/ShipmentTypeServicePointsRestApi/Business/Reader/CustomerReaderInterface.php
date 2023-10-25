<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ShipmentTypeServicePointsRestApi\Business\Reader;

use Generated\Shared\Transfer\CustomerTransfer;

interface CustomerReaderInterface
{
    /**
     * @param string $customerReference
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function findCustomerTransferByCustomerReference(string $customerReference): ?CustomerTransfer;
}
