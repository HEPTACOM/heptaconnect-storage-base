<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Storage\Base\Contract\Action\PortalExtension\Deactivate;

use Heptacom\HeptaConnect\Portal\Base\Portal\Contract\PortalExtensionContract;

class PortalExtensionDeactivateResult
{
    /**
     * @var array<class-string<PortalExtensionContract>>
     */
    private array $passedDeactivations;

    /**
     * @var array<class-string<PortalExtensionContract>>
     */
    private array $failedDeactivations;

    /**
     * @param array<class-string<PortalExtensionContract>> $passedDeactivations
     * @param array<class-string<PortalExtensionContract>> $failedDeactivations
     */
    public function __construct(array $passedDeactivations, array $failedDeactivations)
    {
        $this->passedDeactivations = $passedDeactivations;
        $this->failedDeactivations = $failedDeactivations;
    }

    /**
     * @return array<class-string<PortalExtensionContract>>
     */
    public function getPassedDeactivations(): array
    {
        return $this->passedDeactivations;
    }

    /**
     * @return array<class-string<PortalExtensionContract>>
     */
    public function getFailedDeactivations(): array
    {
        return $this->failedDeactivations;
    }

    public function isSuccess(): bool
    {
        return $this->failedDeactivations === [];
    }
}
