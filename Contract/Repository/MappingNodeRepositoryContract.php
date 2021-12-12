<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract\Repository;

use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\MappingNodeKeyInterface;
use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\PortalNodeKeyInterface;
use Heptacom\HeptaConnect\Portal\Base\StorageKey\MappingNodeKeyCollection;
use Heptacom\HeptaConnect\Storage\Base\Contract\MappingNodeStructInterface;
use Heptacom\HeptaConnect\Storage\Base\Exception\NotFoundException;
use Heptacom\HeptaConnect\Storage\Base\Exception\UnsupportedStorageKeyException;

abstract class MappingNodeRepositoryContract
{
    /**
     * @throws NotFoundException
     * @throws UnsupportedStorageKeyException
     */
    abstract public function read(MappingNodeKeyInterface $key): MappingNodeStructInterface;

    /**
     * @psalm-return iterable<\Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\MappingNodeKeyInterface>
     *
     * @throws UnsupportedStorageKeyException
     *
     * @deprecated Use listByTypeAndPortalNodeAndExternalIds instead
     */
    abstract public function listByTypeAndPortalNodeAndExternalId(
        string $entityType,
        PortalNodeKeyInterface $portalNodeKey,
        string $externalId
    ): iterable;

    /**
     * @psalm-return iterable<\Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\MappingNodeKeyInterface>
     *
     * @throws UnsupportedStorageKeyException
     */
    abstract public function listByTypeAndPortalNodeAndExternalIds(
        string $entityType,
        PortalNodeKeyInterface $portalNodeKey,
        array $externalIds
    ): iterable;

    /**
     * @param class-string<\Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract> $entityType
     *
     * @throws UnsupportedStorageKeyException
     *
     * @deprecated use createList instead
     */
    abstract public function create(
        string $entityType,
        PortalNodeKeyInterface $portalNodeKey
    ): MappingNodeKeyInterface;

    /**
     * @psalm-param class-string<\Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract> $entityType
     *
     * @throws UnsupportedStorageKeyException
     */
    abstract public function createList(
        string $entityType,
        PortalNodeKeyInterface $portalNodeKey,
        int $count
    ): MappingNodeKeyCollection;

    /**
     * @throws NotFoundException
     * @throws UnsupportedStorageKeyException
     */
    abstract public function delete(MappingNodeKeyInterface $key): void;
}