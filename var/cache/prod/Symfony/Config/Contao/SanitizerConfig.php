<?php

namespace Symfony\Config\Contao;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SanitizerConfig 
{
    private $allowedUrlProtocols;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function allowedUrlProtocols(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['allowedUrlProtocols'] = true;
        $this->allowedUrlProtocols = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('allowed_url_protocols', $value)) {
            $this->_usedProperties['allowedUrlProtocols'] = true;
            $this->allowedUrlProtocols = $value['allowed_url_protocols'];
            unset($value['allowed_url_protocols']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['allowedUrlProtocols'])) {
            $output['allowed_url_protocols'] = $this->allowedUrlProtocols;
        }

        return $output;
    }

}
