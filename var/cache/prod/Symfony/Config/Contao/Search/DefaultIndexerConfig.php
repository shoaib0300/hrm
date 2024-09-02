<?php

namespace Symfony\Config\Contao\Search;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefaultIndexerConfig 
{
    private $enable;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enable($value): static
    {
        $this->_usedProperties['enable'] = true;
        $this->enable = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enable', $value)) {
            $this->_usedProperties['enable'] = true;
            $this->enable = $value['enable'];
            unset($value['enable']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enable'])) {
            $output['enable'] = $this->enable;
        }

        return $output;
    }

}
