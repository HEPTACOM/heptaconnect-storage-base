<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract\Action\IdentityRedirect;

use Heptacom\HeptaConnect\Storage\Base\Action\IdentityRedirect\Overview\IdentityRedirectOverviewCriteria;
use Heptacom\HeptaConnect\Storage\Base\Action\IdentityRedirect\Overview\IdentityRedirectOverviewResult;
use Heptacom\HeptaConnect\Storage\Base\Exception\InvalidOverviewCriteriaException;

interface IdentityRedirectOverviewActionInterface
{
    /**
     * Paginate over all identity redirects.
     * Expected to be used for a human request listing.
     *
     * @return iterable<IdentityRedirectOverviewResult>
     *@throws InvalidOverviewCriteriaException
     *
     */
    public function overview(IdentityRedirectOverviewCriteria $criteria): iterable;
}