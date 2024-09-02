<?php

namespace Symfony\Config\Contao;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CspConfig 
{
    private $allowedInlineStyles;
    private $maxHeaderSize;
    private $_usedProperties = [];

    /**
     * @return $this
     */
    public function allowedInlineStyles(string $property, mixed $value): static
    {
        $this->_usedProperties['allowedInlineStyles'] = true;
        $this->allowedInlineStyles[$property] = $value;

        return $this;
    }

    /**
     * Do not increase this value beyond the allowed response header size of your web server, as this will result in a 500 server error.
     * @default 3072
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxHeaderSize($value): static
    {
        $this->_usedProperties['maxHeaderSize'] = true;
        $this->maxHeaderSize = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('allowed_inline_styles', $value)) {
            $this->_usedProperties['allowedInlineStyles'] = true;
            $this->allowedInlineStyles = $value['allowed_inline_styles'];
            unset($value['allowed_inline_styles']);
        }

        if (array_key_exists('max_header_size', $value)) {
            $this->_usedProperties['maxHeaderSize'] = true;
            $this->maxHeaderSize = $value['max_header_size'];
            unset($value['max_header_size']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['allowedInlineStyles'])) {
            $output['allowed_inline_styles'] = $this->allowedInlineStyles;
        }
        if (isset($this->_usedProperties['maxHeaderSize'])) {
            $output['max_header_size'] = $this->maxHeaderSize;
        }

        return $output;
    }

}
