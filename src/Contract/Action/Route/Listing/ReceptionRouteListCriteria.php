<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract\Action\Route\Listing;

use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\PortalNodeKeyInterface;

class ReceptionRouteListCriteria
{
    protected PortalNodeKeyInterface $source;

    /**
     * @var class-string<\Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract>
     */
    protected string $entityType;

    /**
     * @param class-string<\Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract> $entityType
     */
    public function __construct(PortalNodeKeyInterface $from, string $entityType)
    {
        $this->source = $from;
        $this->entityType = $entityType;
    }

    public function getSource(): PortalNodeKeyInterface
    {
        return $this->source;
    }

    public function setSource(PortalNodeKeyInterface $source): void
    {
        $this->source = $source;
    }

    /**
     * @return class-string<\Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract>
     */
    public function getEntityType(): string
    {
        return $this->entityType;
    }

    /**
     * @param class-string<\Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract> $entityType
     */
    public function setEntityType(string $entityType): void
    {
        $this->entityType = $entityType;
    }
}