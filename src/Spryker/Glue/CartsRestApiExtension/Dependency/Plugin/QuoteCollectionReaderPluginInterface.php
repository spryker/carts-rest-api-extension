<?php

namespace Spryker\Glue\CartsRestApiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QuoteCollectionTransfer;
use Generated\Shared\Transfer\QuoteCriteriaFilterTransfer;

/**
 * @deprecated use Spryker\Zed\CartsRestApiExtension\Dependency\Plugin\QuoteCollectionReaderPluginInterface
 */
interface QuoteCollectionReaderPluginInterface
{
    /**
     * Specification:
     * - This plugin method is used to find quote collection in CartsRestApi module.
     * - Method provides quote collection.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\QuoteCriteriaFilterTransfer $quoteCriteriaFilterTransfer
     *
     * @return \Generated\Shared\Transfer\QuoteCollectionTransfer
     */
    public function getQuoteCollectionByCriteria(QuoteCriteriaFilterTransfer $quoteCriteriaFilterTransfer): QuoteCollectionTransfer;
}
