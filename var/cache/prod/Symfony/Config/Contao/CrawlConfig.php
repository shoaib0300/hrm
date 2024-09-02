<?php

namespace Symfony\Config\Contao;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CrawlConfig 
{
    private $additionalUris;
    private $defaultHttpClientOptions;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function additionalUris(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['additionalUris'] = true;
        $this->additionalUris = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function defaultHttpClientOptions(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['defaultHttpClientOptions'] = true;
        $this->defaultHttpClientOptions = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('additional_uris', $value)) {
            $this->_usedProperties['additionalUris'] = true;
            $this->additionalUris = $value['additional_uris'];
            unset($value['additional_uris']);
        }

        if (array_key_exists('default_http_client_options', $value)) {
            $this->_usedProperties['defaultHttpClientOptions'] = true;
            $this->defaultHttpClientOptions = $value['default_http_client_options'];
            unset($value['default_http_client_options']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['additionalUris'])) {
            $output['additional_uris'] = $this->additionalUris;
        }
        if (isset($this->_usedProperties['defaultHttpClientOptions'])) {
            $output['default_http_client_options'] = $this->defaultHttpClientOptions;
        }

        return $output;
    }

}
