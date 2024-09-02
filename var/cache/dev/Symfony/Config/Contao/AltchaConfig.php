<?php

namespace Symfony\Config\Contao;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AltchaConfig 
{
    private $algorithm;
    private $rangeMax;
    private $challengeExpiry;
    private $_usedProperties = [];

    /**
     * The algorithm used to generate the challenges. Select between "SHA-256", "SHA-384" or "SHA-512".
     * @default 'SHA-256'
     * @param ParamConfigurator|'SHA-256'|'SHA-384'|'SHA-512' $value
     * @return $this
     */
    public function algorithm($value): static
    {
        $this->_usedProperties['algorithm'] = true;
        $this->algorithm = $value;

        return $this;
    }

    /**
     * A higher value increases the complexity/security but may significantly increase the computational load on client devices, potentially impacting the user experience.
     * @default 100000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function rangeMax($value): static
    {
        $this->_usedProperties['rangeMax'] = true;
        $this->rangeMax = $value;

        return $this;
    }

    /**
     * The time period in seconds for which a challenge is valid.
     * @default 86400
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function challengeExpiry($value): static
    {
        $this->_usedProperties['challengeExpiry'] = true;
        $this->challengeExpiry = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('algorithm', $value)) {
            $this->_usedProperties['algorithm'] = true;
            $this->algorithm = $value['algorithm'];
            unset($value['algorithm']);
        }

        if (array_key_exists('range_max', $value)) {
            $this->_usedProperties['rangeMax'] = true;
            $this->rangeMax = $value['range_max'];
            unset($value['range_max']);
        }

        if (array_key_exists('challenge_expiry', $value)) {
            $this->_usedProperties['challengeExpiry'] = true;
            $this->challengeExpiry = $value['challenge_expiry'];
            unset($value['challenge_expiry']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['algorithm'])) {
            $output['algorithm'] = $this->algorithm;
        }
        if (isset($this->_usedProperties['rangeMax'])) {
            $output['range_max'] = $this->rangeMax;
        }
        if (isset($this->_usedProperties['challengeExpiry'])) {
            $output['challenge_expiry'] = $this->challengeExpiry;
        }

        return $output;
    }

}
