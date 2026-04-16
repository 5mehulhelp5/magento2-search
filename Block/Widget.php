<?php
namespace Koply\Search\Block;

use Koply\Search\Model\Config;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Widget extends Template
{
    public function __construct(
        Context $context,
        private readonly Config $config,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function isEnabled(): bool
    {
        return $this->config->isEnabled();
    }

    public function getApiKey(): string
    {
        return $this->config->getApiKey();
    }

    /**
     * CDN URL del widget de Koply.
     */
    public function getWidgetUrl(): string
    {
        return 'https://cdn.koply.eu/v1/koply.js';
    }
}
