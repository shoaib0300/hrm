<?php

namespace Symfony\Config\Contao;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class InsertTagsConfig 
{
    private $allowedTags;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function allowedTags(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['allowedTags'] = true;
        $this->allowedTags = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('allowed_tags', $value)) {
            $this->_usedProperties['allowedTags'] = true;
            $this->allowedTags = $value['allowed_tags'];
            unset($value['allowed_tags']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['allowedTags'])) {
            $output['allowed_tags'] = $this->allowedTags;
        }

        return $output;
    }

}
