<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace Spryker\Zed\CartsRestApiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\PersistentCartChangeTransfer;
use Generated\Shared\Transfer\QuoteTransfer;

/**
 * This plugin allows extending and adjusting the data used when a guest quote is merged into a customer quote after authentication.
 * It is executed during the guest-to-customer quote merge process and can be used to add, remove, or remap data in the persistent cart change before the merge is finalized.
 */
interface QuoteMergePersistentCartChangeExpanderPluginInterface
{
    /**
     * Specification:
     * - Executed during Guest Quote merge with Customer Quote (via `AddGuestQuoteItemsToCustomerQuotePostAuthPlugin`).
     * - Used to add / remove / map data before merge.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\PersistentCartChangeTransfer $persistentCartChangeTransfer
     * @param \Generated\Shared\Transfer\QuoteTransfer $guestQuoteTransfer
     *
     * @return \Generated\Shared\Transfer\PersistentCartChangeTransfer
     */
    public function expand(PersistentCartChangeTransfer $persistentCartChangeTransfer, QuoteTransfer $guestQuoteTransfer): PersistentCartChangeTransfer;
}
