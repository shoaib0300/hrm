<?php

namespace Symfony\Config\Contao\Security;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwoFactorConfig 
{
    private $enforceBackend;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enforceBackend($value): static
    {
        $this->_usedProperties['enforceBackend'] = true;
        $this->enforceBackend = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enforce_backend', $value)) {
            $this->_usedProperties['enforceBackend'] = true;
            $this->enforceBackend = $value['enforce_backend'];
            unset($value['enforce_backend']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enforceBackend'])) {
            $output['enforce_backend'] = $this->enforceBackend;
        }

        return $output;
    }

}
