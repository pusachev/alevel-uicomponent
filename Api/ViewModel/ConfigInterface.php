<?php
/**
 * Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2019, Pavel Usachev
 */

namespace ALevel\UiComponent\Api\ViewModel;

interface ConfigInterface
{
    const TITLE_SYSTEM_CONFIG_PATH   = 'alevel_uicomponent/general/title';
    const MESSAGE_SYSTEM_CONFIG_PATH = 'alevel_uicomponent/general/message';
    const ENABLED_SYSTEM_CONFIG_PATH = 'alevel_uicomponent/general/is_enabled';

    /**
     * @return string
     */
    public function getMessage() : string;

    /**
     * @return string
     */
    public function getTitle() : string;

    /**
     * @return bool
     */
    public function isEnabled() : bool;
}
