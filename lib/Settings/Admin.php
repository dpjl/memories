<?php

namespace OCA\Memories\Settings;

use OCP\AppFramework\Http\TemplateResponse;
use OCP\IConfig;
use OCP\IL10N;
use OCP\Settings\ISettings;

class Admin implements ISettings
{
    /** @var IConfig */
    private $config;

    /** @var IL10N */
    private $l;

    public function __construct(
        IConfig $config,
        IL10N $l
    ) {
        $this->config = $config;
        $this->l = $l;
    }

    /**
     * @return TemplateResponse
     */
    public function getForm()
    {
        $parameters = [
        ];

        \OCP\Util::addScript('memories', 'memories-main');

        return new TemplateResponse('memories', 'admin', $parameters);
    }

    public function getSection()
    {
        return 'memories';
    }

    public function getPriority()
    {
        return 50;
    }
}
