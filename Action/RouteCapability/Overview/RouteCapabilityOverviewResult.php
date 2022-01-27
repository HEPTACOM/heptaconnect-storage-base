<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Action\RouteCapability\Overview;

final class RouteCapabilityOverviewResult
{
    protected string $name;

    protected \DateTimeInterface $createdAt;

    public function __construct(string $name, \DateTimeInterface $createdAt)
    {
        $this->name = $name;
        $this->createdAt = $createdAt;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }
}
