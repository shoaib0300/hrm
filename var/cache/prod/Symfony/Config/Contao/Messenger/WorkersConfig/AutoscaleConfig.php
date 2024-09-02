<?php

namespace Symfony\Config\Contao\Messenger\WorkersConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AutoscaleConfig 
{
    private $enabled;
    private $desiredSize;
    private $min;
    private $max;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * Contao will automatically autoscale the number of workers to meet this queue size. Logic: desiredWorkers = ceil(currentSize / desiredSize)
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function desiredSize($value): static
    {
        $this->_usedProperties['desiredSize'] = true;
        $this->desiredSize = $value;

        return $this;
    }

    /**
     * Contao will never scale down to less than this configured number of workers.
     * @default 1
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function min($value): static
    {
        $this->_usedProperties['min'] = true;
        $this->min = $value;

        return $this;
    }

    /**
     * Contao will never scale up to more than this configured number of workers.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function max($value): static
    {
        $this->_usedProperties['max'] = true;
        $this->max = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('desired_size', $value)) {
            $this->_usedProperties['desiredSize'] = true;
            $this->desiredSize = $value['desired_size'];
            unset($value['desired_size']);
        }

        if (array_key_exists('min', $value)) {
            $this->_usedProperties['min'] = true;
            $this->min = $value['min'];
            unset($value['min']);
        }

        if (array_key_exists('max', $value)) {
            $this->_usedProperties['max'] = true;
            $this->max = $value['max'];
            unset($value['max']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['desiredSize'])) {
            $output['desired_size'] = $this->desiredSize;
        }
        if (isset($this->_usedProperties['min'])) {
            $output['min'] = $this->min;
        }
        if (isset($this->_usedProperties['max'])) {
            $output['max'] = $this->max;
        }

        return $output;
    }

}
