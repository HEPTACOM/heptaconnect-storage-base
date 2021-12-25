<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract\Action\PortalNode\Create;

use Heptacom\HeptaConnect\Dataset\Base\Support\AbstractObjectCollection;

/**
 * @extends \Heptacom\HeptaConnect\Dataset\Base\Support\AbstractObjectCollection<\Heptacom\HeptaConnect\Storage\Base\Contract\Action\PortalNode\Create\PortalNodeCreatePayload>
 */
class PortalNodeCreatePayloads extends AbstractObjectCollection
{
    protected function getT(): string
    {
        return PortalNodeCreatePayload::class;
    }
}