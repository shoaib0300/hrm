<?php

namespace Symfony\Config\Contao;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class IntlConfig 
{
    private $locales;
    private $enabledLocales;
    private $countries;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function locales(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['locales'] = true;
        $this->locales = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function enabledLocales(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['enabledLocales'] = true;
        $this->enabledLocales = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function countries(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['countries'] = true;
        $this->countries = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('locales', $value)) {
            $this->_usedProperties['locales'] = true;
            $this->locales = $value['locales'];
            unset($value['locales']);
        }

        if (array_key_exists('enabled_locales', $value)) {
            $this->_usedProperties['enabledLocales'] = true;
            $this->enabledLocales = $value['enabled_locales'];
            unset($value['enabled_locales']);
        }

        if (array_key_exists('countries', $value)) {
            $this->_usedProperties['countries'] = true;
            $this->countries = $value['countries'];
            unset($value['countries']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['locales'])) {
            $output['locales'] = $this->locales;
        }
        if (isset($this->_usedProperties['enabledLocales'])) {
            $output['enabled_locales'] = $this->enabledLocales;
        }
        if (isset($this->_usedProperties['countries'])) {
            $output['countries'] = $this->countries;
        }

        return $output;
    }

}
