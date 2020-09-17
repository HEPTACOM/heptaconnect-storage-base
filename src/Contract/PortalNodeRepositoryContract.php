<?php declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract;

use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\PortalNodeKeyInterface;
use Heptacom\HeptaConnect\Storage\Base\Exception\NotFoundException;
use Heptacom\HeptaConnect\Storage\Base\Exception\UnsupportedStorageKeyException;

abstract class PortalNodeRepositoryContract
{
    /**
     * @psalm-return class-string<\Heptacom\HeptaConnect\Portal\Base\Portal\Contract\PortalContract>
     * @throws NotFoundException
     * @throws UnsupportedStorageKeyException
     */
    abstract public function read(PortalNodeKeyInterface $portalNodeKey): string;

    /**
     * @return iterable
     * @psalm-return iterable<Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\PortalNodeKeyInterface>
     */
    abstract public function listAll(): iterable;

    /**
     * @psalm-param class-string<\Heptacom\HeptaConnect\Portal\Base\Portal\Contract\PortalContract> $className
     * @psalm-return iterable<Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\PortalNodeKeyInterface>
     */
    abstract public function listByClass(string $className): iterable;

    /**
     * @psalm-param class-string<\Heptacom\HeptaConnect\Portal\Base\Portal\Contract\PortalContract> $className
     * @throws UnsupportedStorageKeyException
     */
    abstract public function create(string $className): iterable;

    /**
     * @throws NotFoundException
     * @throws UnsupportedStorageKeyException
     */
    abstract public function delete(PortalNodeKeyInterface $portalNodeKey): void;
}
