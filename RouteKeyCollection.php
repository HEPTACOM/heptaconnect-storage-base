<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base;

use Heptacom\HeptaConnect\Dataset\Base\Support\AbstractCollection;
use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\StorageKeyInterface;
use Heptacom\HeptaConnect\Storage\Base\Contract\RouteKeyInterface;

/**
 * @extends AbstractCollection<RouteKeyInterface>
 */
class RouteKeyCollection extends AbstractCollection
{
    public function contains($value): bool
    {
        return $this->containsByEqualsCheck(
            $value,
            static fn (StorageKeyInterface $a, StorageKeyInterface $b): bool => $a->equals($b)
        );
    }

    protected function isValidItem(mixed $item): bool
    {
        return $item instanceof RouteKeyInterface;
    }
}
