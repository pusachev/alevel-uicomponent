<?php
/**
 * Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2019, Pavel Usachev
 */

namespace ALevel\UiComponent\ViewModel;

use ALevel\UiComponent\Api\ViewModel\ConfigInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Config implements ArgumentInterface, ConfigInterface
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfigInterface;

    /**
     * Config constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfigInterface = $scopeConfig;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->scopeConfigInterface->getValue(self::MESSAGE_SYSTEM_CONFIG_PATH);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->scopeConfigInterface->getValue(self::TITLE_SYSTEM_CONFIG_PATH);
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return (bool) $this->scopeConfigInterface->getValue(self::ENABLED_SYSTEM_CONFIG_PATH);
    }
}
