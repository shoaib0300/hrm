<?php

namespace Symfony\Config\Contao\Messenger;

require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkersConfig'.\DIRECTORY_SEPARATOR.'AutoscaleConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class WorkersConfig 
{
    private $transports;
    private $options;
    private $autoscale;
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
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function options(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['options'] = true;
        $this->options = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Enables autoscaling.
     * @default {"enabled":false,"min":1}
     * @return \Symfony\Config\Contao\Messenger\WorkersConfig\AutoscaleConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Contao\Messenger\WorkersConfig\AutoscaleConfig : static)
     */
    public function autoscale(array $value = []): \Symfony\Config\Contao\Messenger\WorkersConfig\AutoscaleConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['autoscale'] = true;
            $this->autoscale = $value;

            return $this;
        }

        if (!$this->autoscale instanceof \Symfony\Config\Contao\Messenger\WorkersConfig\AutoscaleConfig) {
            $this->_usedProperties['autoscale'] = true;
            $this->autoscale = new \Symfony\Config\Contao\Messenger\WorkersConfig\AutoscaleConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "autoscale()" has already been initialized. You cannot pass values the second time you call autoscale().');
        }

        return $this->autoscale;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('transports', $value)) {
            $this->_usedProperties['transports'] = true;
            $this->transports = $value['transports'];
            unset($value['transports']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        if (array_key_exists('autoscale', $value)) {
            $this->_usedProperties['autoscale'] = true;
            $this->autoscale = \is_array($value['autoscale']) ? new \Symfony\Config\Contao\Messenger\WorkersConfig\AutoscaleConfig($value['autoscale']) : $value['autoscale'];
            unset($value['autoscale']);
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
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }
        if (isset($this->_usedProperties['autoscale'])) {
            $output['autoscale'] = $this->autoscale instanceof \Symfony\Config\Contao\Messenger\WorkersConfig\AutoscaleConfig ? $this->autoscale->toArray() : $this->autoscale;
        }

        return $output;
    }

}
