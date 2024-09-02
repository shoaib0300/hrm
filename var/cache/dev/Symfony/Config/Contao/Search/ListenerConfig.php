<?php

namespace Symfony\Config\Contao\Search;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ListenerConfig 
{
    private $index;
    private $delete;
    private $_usedProperties = [];

    /**
     * Enables indexing successful responses.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function index($value): static
    {
        $this->_usedProperties['index'] = true;
        $this->index = $value;

        return $this;
    }

    /**
     * Enables deleting unsuccessful responses from the index.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function delete($value): static
    {
        $this->_usedProperties['delete'] = true;
        $this->delete = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('index', $value)) {
            $this->_usedProperties['index'] = true;
            $this->index = $value['index'];
            unset($value['index']);
        }

        if (array_key_exists('delete', $value)) {
            $this->_usedProperties['delete'] = true;
            $this->delete = $value['delete'];
            unset($value['delete']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['index'])) {
            $output['index'] = $this->index;
        }
        if (isset($this->_usedProperties['delete'])) {
            $output['delete'] = $this->delete;
        }

        return $output;
    }

}
