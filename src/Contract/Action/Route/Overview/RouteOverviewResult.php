<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract\Action\Route\Overview;

use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\PortalNodeKeyInterface;
use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\RouteKeyInterface;

class RouteOverviewResult
{
    protected RouteKeyInterface $routeKey;

    /**
     * @var class-string<\Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract>
     */
    protected string $entityType;

    protected PortalNodeKeyInterface $sourcePortalNodeKey;

    /**
     * @var class-string<\Heptacom\HeptaConnect\Portal\Base\Portal\Contract\PortalContract>
     */
    protected string $sourcePortalClass;

    protected PortalNodeKeyInterface $target;

    /**
     * @var class-string<\Heptacom\HeptaConnect\Portal\Base\Portal\Contract\PortalContract>
     */
    protected string $targetClass;

    protected \DateTimeInterface $createdAt;

    /**
     * @var string[]
     */
    private array $capabilities;

    /**
     * @param class-string<\Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract> $entityType
     * @param class-string<\Heptacom\HeptaConnect\Portal\Base\Portal\Contract\PortalContract>  $sourcePortalClass
     * @param class-string<\Heptacom\HeptaConnect\Portal\Base\Portal\Contract\PortalContract>  $targetClass
     * @param string[]                                                                         $capabilities
     */
    public function __construct(
        RouteKeyInterface $routeKey,
        string $entityType,
        PortalNodeKeyInterface $sourcePortalNodeKey,
        string $sourcePortalClass,
        PortalNodeKeyInterface $target,
        string $targetClass,
        \DateTimeInterface $createdAt,
        array $capabilities
    ) {
        $this->routeKey = $routeKey;
        $this->entityType = $entityType;
        $this->sourcePortalNodeKey = $sourcePortalNodeKey;
        $this->sourcePortalClass = $sourcePortalClass;
        $this->target = $target;
        $this->targetClass = $targetClass;
        $this->createdAt = $createdAt;
        $this->capabilities = $capabilities;
    }

    public function getRouteKey(): RouteKeyInterface
    {
        return $this->routeKey;
    }

    /**
     * @return class-string<\Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract>
     */
    public function getEntityType(): string
    {
        return $this->entityType;
    }

    public function getSourcePortalNodeKey(): PortalNodeKeyInterface
    {
        return $this->sourcePortalNodeKey;
    }

    /**
     * @return class-string<\Heptacom\HeptaConnect\Portal\Base\Portal\Contract\PortalContract>
     */
    public function getSourcePortalClass(): string
    {
        return $this->sourcePortalClass;
    }

    public function getTarget(): PortalNodeKeyInterface
    {
        return $this->target;
    }

    /**
     * @return class-string<\Heptacom\HeptaConnect\Portal\Base\Portal\Contract\PortalContract>
     */
    public function getTargetClass(): string
    {
        return $this->targetClass;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @return string[]
     */
    public function getCapabilities(): array
    {
        return $this->capabilities;
    }
}
