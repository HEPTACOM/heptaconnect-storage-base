<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base;

use Heptacom\HeptaConnect\Dataset\Base\Contract\AttachableInterface;
use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\Contract\ForeignKeyAwareInterface;
use Heptacom\HeptaConnect\Dataset\Base\Support\ForeignKeyTrait;
use Heptacom\HeptaConnect\Portal\Base\Mapping\Contract\MappingInterface;
use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\MappingNodeKeyInterface;
use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\PortalNodeKeyInterface;
use Heptacom\HeptaConnect\Storage\Base\Exception\UnsharableOwnerException;

class PrimaryKeySharingMappingStruct implements AttachableInterface, ForeignKeyAwareInterface, MappingInterface
{
    use ForeignKeyTrait;

    protected ?string $datasetEntityClassName = null;

    protected ?string $externalId = null;

    protected ?PortalNodeKeyInterface $portalNodeKey = null;

    protected ?MappingNodeKeyInterface $mappingNodeKey = null;

    /**
     * @var array|DatasetEntityContract[]
     */
    protected $owners = [];

    public function getDatasetEntityClassName(): string
    {
        return $this->datasetEntityClassName;
    }

    public function setDatasetEntityClassName(string $datasetEntityClassName): self
    {
        $this->datasetEntityClassName = $datasetEntityClassName;

        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getPortalNodeKey(): PortalNodeKeyInterface
    {
        return $this->portalNodeKey;
    }

    public function setPortalNodeKey(PortalNodeKeyInterface $portalNodeKey): self
    {
        $this->portalNodeKey = $portalNodeKey;

        return $this;
    }

    public function getMappingNodeKey(): MappingNodeKeyInterface
    {
        return $this->mappingNodeKey;
    }

    public function setMappingNodeKey(MappingNodeKeyInterface $mappingNodeKey): self
    {
        $this->mappingNodeKey = $mappingNodeKey;

        return $this;
    }

    public function getForeignDatasetEntityClassName(): string
    {
        return $this->getDatasetEntityClassName();
    }

    public function setForeignKey(?string $foreignKey): void
    {
        $this->foreignKey = $foreignKey;

        foreach ($this->getOwners() as $owner) {
            if ($owner->getPrimaryKey() !== $foreignKey) {
                $owner->setPrimaryKey($foreignKey);
            }
        }
    }

    /**
     * @return iterable|DatasetEntityContract[]
     * @psalm-return iterable<array-key, DatasetEntityContract>
     */
    public function getOwners(): iterable
    {
        yield from $this->owners;
    }

    /**
     * @throws UnsharableOwnerException
     */
    public function addOwner(DatasetEntityContract $owner): void
    {
        if (\get_class($owner) !== $this->getForeignDatasetEntityClassName()
            || $owner->getPrimaryKey() !== $this->getForeignKey()) {
            throw new UnsharableOwnerException($this->getForeignDatasetEntityClassName(), $this->getForeignKey(), $owner);
        }

        $this->owners[] = $owner;
        $owner->attach($this);
        $owner->setPrimaryKey($this->getForeignKey());
    }
}
