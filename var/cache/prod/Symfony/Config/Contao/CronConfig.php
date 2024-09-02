<?php

namespace Symfony\Config\Contao;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CronConfig 
{
    private $webListener;
    private $_usedProperties = [];

    /**
     * Allows to enable or disable the kernel.terminate listener that executes cron jobs within the web process. "auto" will auto-disable it if a CLI cron is running.
     * @default 'auto'
     * @param ParamConfigurator|'auto'|true|false $value
     * @return $this
     */
    public function webListener($value): static
    {
        $this->_usedProperties['webListener'] = true;
        $this->webListener = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('web_listener', $value)) {
            $this->_usedProperties['webListener'] = true;
            $this->webListener = $value['web_listener'];
            unset($value['web_listener']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['webListener'])) {
            $output['web_listener'] = $this->webListener;
        }

        return $output;
    }

}
