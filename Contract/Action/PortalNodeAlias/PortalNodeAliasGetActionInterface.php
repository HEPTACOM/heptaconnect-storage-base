<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract\Action\PortalNodeAlias;

use Heptacom\HeptaConnect\Storage\Base\Action\PortalNodeAlias\Get\PortalNodeAliasGetCriteria;
use Heptacom\HeptaConnect\Storage\Base\Action\PortalNodeAlias\Get\PortalNodeAliasGetResult;
use Heptacom\HeptaConnect\Storage\Base\Exception\ReadException;
use Heptacom\HeptaConnect\Storage\Base\Exception\UnsupportedStorageKeyException;

interface PortalNodeAliasGetActionInterface
{
    /**
     * @throws ReadException
     * @throws UnsupportedStorageKeyException
     *
     * @return iterable<PortalNodeAliasGetResult>
     */
    public function get(PortalNodeAliasGetCriteria $criteria): iterable;
}
