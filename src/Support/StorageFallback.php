<?php declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Support;

use Heptacom\HeptaConnect\Dataset\Base\Contract\KeyInterface;
use Heptacom\HeptaConnect\Portal\Base\Contract\MappingInterface;
use Heptacom\HeptaConnect\Portal\Base\MappingCollection;
use Heptacom\HeptaConnect\Storage\Base\Contract\StorageInterface;
use Heptacom\HeptaConnect\Storage\Base\Exception\StorageMethodNotImplemented;

abstract class StorageFallback implements StorageInterface
{
    public function getConfiguration(string $portalNodeId): array
    {
        throw new StorageMethodNotImplemented(static::class, __FUNCTION__);
    }

    public function setConfiguration(string $portalNodeId, array $data): void
    {
        throw new StorageMethodNotImplemented(static::class, __FUNCTION__);
    }

    public function createMappingNodes(array $datasetEntityClassNames): array
    {
        throw new StorageMethodNotImplemented(static::class, __FUNCTION__);
    }

    public function getMapping(string $mappingNodeId, string $portalNodeId): ?MappingInterface
    {
        throw new StorageMethodNotImplemented(static::class, __FUNCTION__);
    }

    public function createMappings(MappingCollection $mappings): void
    {
        throw new StorageMethodNotImplemented(static::class, __FUNCTION__);
    }

    public function getRouteTargets(string $sourcePortalNodeId, string $entityClassName): array
    {
        throw new StorageMethodNotImplemented(static::class, __FUNCTION__);
    }

    public function addRouteTarget(string $sourcePortalNodeId, string $targetPortalNodeId, string $entityClassName): void
    {
        throw new StorageMethodNotImplemented(static::class, __FUNCTION__);
    }

    public function generateKey(string $datasetEntityClassName): KeyInterface
    {
        throw new StorageMethodNotImplemented(static::class, __FUNCTION__);
    }
}
