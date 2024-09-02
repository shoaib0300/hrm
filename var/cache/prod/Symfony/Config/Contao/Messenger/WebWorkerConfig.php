<?php

namespace Symfony\Config\Contao\Messenger;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class WebWorkerConfig 
{
    private $transports;
    private $gracePeriod;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function transports(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['transports'] = true;
        $this->transports = $value;

        return $this;
    }

    /**
     * @default 'PT10M'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function gracePeriod($value): static
    {
        $this->_usedProperties['gracePeriod'] = true;
        $this->gracePeriod = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('transports', $value)) {
            $this->_usedProperties['transports'] = true;
            $this->transports = $value['transports'];
            unset($value['transports']);
        }

        if (array_key_exists('grace_period', $value)) {
            $this->_usedProperties['gracePeriod'] = true;
            $this->gracePeriod = $value['grace_period'];
            unset($value['grace_period']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['transports'])) {
            $output['transports'] = $this->transports;
        }
        if (isset($this->_usedProperties['gracePeriod'])) {
            $output['grace_period'] = $this->gracePeriod;
        }

        return $output;
    }

}
