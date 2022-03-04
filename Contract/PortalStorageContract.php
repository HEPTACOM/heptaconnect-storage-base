<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract;

use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\PortalNodeKeyInterface;
use Heptacom\HeptaConnect\Storage\Base\Exception\UnsupportedStorageKeyException;

abstract class PortalStorageContract
{
    /**
     * @throws UnsupportedStorageKeyException
     */
    abstract public function list(PortalNodeKeyInterface $portalNodeKey): iterable;
}
