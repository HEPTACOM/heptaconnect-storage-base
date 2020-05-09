<?php declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract;

use Heptacom\HeptaConnect\Portal\Base\MappingCollection;
use Heptacom\HeptaConnect\Storage\Base\Exception\StorageMethodNotImplemented;

interface StorageInterface
{
    /**
     * @throws StorageMethodNotImplemented
     */
    public function getConfiguration(string $portalNodeId): array;

    /**
     * @throws StorageMethodNotImplemented
     */
    public function setConfiguration(string $portalNodeId, array $data): array;

    /**
     * @param array<
     *     array-key,
     *     class-string<\Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityInterface>
     * > $datasetEntityClassNames
     *
     * @return array<array-key, string>
     */
    public function createMappingNodeIds(array $datasetEntityClassNames): array;

    public function createMappings(MappingCollection $mappings): void;
}