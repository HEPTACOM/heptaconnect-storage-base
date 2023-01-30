<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Action\IdentityError\Create;

use Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection;
use Heptacom\HeptaConnect\Dataset\Base\Contract\AttachmentAwareInterface;
use Heptacom\HeptaConnect\Dataset\Base\Support\AttachmentAwareTrait;
use Heptacom\HeptaConnect\Portal\Base\Mapping\Contract\MappingComponentStructContract;
use Heptacom\HeptaConnect\Storage\Base\Contract\Action\Create\CreatePayloadInterface;

final class IdentityErrorCreatePayload implements CreatePayloadInterface, AttachmentAwareInterface
{
    use AttachmentAwareTrait;

    protected MappingComponentStructContract $mappingComponent;

    private \Throwable $throwable;

    public function __construct(MappingComponentStructContract $mappingComponent, \Throwable $throwable)
    {
        $this->attachments = new AttachmentCollection();
        $this->mappingComponent = $mappingComponent;
        $this->throwable = $throwable;
    }

    public function getMappingComponent(): MappingComponentStructContract
    {
        return $this->mappingComponent;
    }

    public function setMappingComponent(MappingComponentStructContract $mappingComponent): void
    {
        $this->mappingComponent = $mappingComponent;
    }

    public function getThrowable(): \Throwable
    {
        return $this->throwable;
    }

    public function setThrowable(\Throwable $throwable): void
    {
        $this->throwable = $throwable;
    }
}
