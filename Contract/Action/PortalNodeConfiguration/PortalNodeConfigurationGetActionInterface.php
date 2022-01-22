<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract\Action\PortalNodeConfiguration;

use Heptacom\HeptaConnect\Storage\Base\Action\PortalNodeConfiguration\Get\PortalNodeConfigurationGetCriteria;
use Heptacom\HeptaConnect\Storage\Base\Action\PortalNodeConfiguration\Get\PortalNodeConfigurationGetResult;
use Heptacom\HeptaConnect\Storage\Base\Exception\UnsupportedStorageKeyException;

interface PortalNodeConfigurationGetActionInterface
{
    /**
     * @param PortalNodeConfigurationGetCriteria $criteria
     *
     * @return iterable<PortalNodeConfigurationGetResult>
     *
     * @throws UnsupportedStorageKeyException
     */
    public function get(PortalNodeConfigurationGetCriteria $criteria): iterable;
}