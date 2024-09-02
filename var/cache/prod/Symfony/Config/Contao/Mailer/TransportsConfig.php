<?php

namespace Symfony\Config\Contao\Mailer;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TransportsConfig 
{
    private $from;
    private $_usedProperties = [];

    /**
     * Overrides the "From" address for any e-mails sent with this mailer transport.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function from($value): static
    {
        $this->_usedProperties['from'] = true;
        $this->from = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('from', $value)) {
            $this->_usedProperties['from'] = true;
            $this->from = $value['from'];
            unset($value['from']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['from'])) {
            $output['from'] = $this->from;
        }

        return $output;
    }

}
