<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Action\Identity\Persist;

use Heptacom\HeptaConnect\Dataset\Base\Contract\AttachmentAwareInterface;
use Heptacom\HeptaConnect\Dataset\Base\Support\AttachmentAwareTrait;
use Heptacom\HeptaConnect\Portal\Base\StorageKey\Contract\PortalNodeKeyInterface;

final class IdentityPersistPayload implements AttachmentAwareInterface
{
    use AttachmentAwareTrait;

    private PortalNodeKeyInterface $portalNodeKey;

    private IdentityPersistPayloadCollection $mappingPersistPayloads;

    public function __construct(
        PortalNodeKeyInterface $portalNodeKey,
        IdentityPersistPayloadCollection $mappingPersistPayloads
    ) {
        $this->portalNodeKey = $portalNodeKey;
        $this->mappingPersistPayloads = $mappingPersistPayloads;
    }

    public function getPortalNodeKey(): PortalNodeKeyInterface
    {
        return $this->portalNodeKey;
    }

    public function setPortalNodeKey(PortalNodeKeyInterface $portalNodeKey): void
    {
        $this->portalNodeKey = $portalNodeKey;
    }

    public function getMappingPersistPayloads(): IdentityPersistPayloadCollection
    {
        return $this->mappingPersistPayloads;
    }

    public function setMappingPersistPayloads(IdentityPersistPayloadCollection $mappingPersistPayloads): void
    {
        $this->mappingPersistPayloads = $mappingPersistPayloads;
    }
}
