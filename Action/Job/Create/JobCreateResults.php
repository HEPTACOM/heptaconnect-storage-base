<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Action\Job\Create;

use Heptacom\HeptaConnect\Dataset\Base\Contract\AttachmentAwareInterface;
use Heptacom\HeptaConnect\Dataset\Base\Support\AbstractObjectCollection;
use Heptacom\HeptaConnect\Dataset\Base\Support\AttachmentAwareTrait;

/**
 * @extends \Heptacom\HeptaConnect\Dataset\Base\Support\AbstractObjectCollection<\Heptacom\HeptaConnect\Storage\Base\Action\Job\Create\JobCreateResult>
 */
final class JobCreateResults extends AbstractObjectCollection implements AttachmentAwareInterface
{
    use AttachmentAwareTrait;

    protected function getT(): string
    {
        return JobCreateResult::class;
    }
}
