<?php

namespace Symfony\Config\Contao;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'HstsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SecurityConfig 
{
    private $twoFactor;
    private $hsts;
    private $_usedProperties = [];

    /**
     * @default {"enforce_backend":false}
    */
    public function twoFactor(array $value = []): \Symfony\Config\Contao\Security\TwoFactorConfig
    {
        if (null === $this->twoFactor) {
            $this->_usedProperties['twoFactor'] = true;
            $this->twoFactor = new \Symfony\Config\Contao\Security\TwoFactorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "twoFactor()" has already been initialized. You cannot pass values the second time you call twoFactor().');
        }

        return $this->twoFactor;
    }

    /**
     * Enables sending the HTTP Strict Transport Security (HSTS) header for secure requests.
     * @default {"enabled":true,"ttl":31536000}
    */
    public function hsts(array $value = []): \Symfony\Config\Contao\Security\HstsConfig
    {
        if (null === $this->hsts) {
            $this->_usedProperties['hsts'] = true;
            $this->hsts = new \Symfony\Config\Contao\Security\HstsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "hsts()" has already been initialized. You cannot pass values the second time you call hsts().');
        }

        return $this->hsts;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('two_factor', $value)) {
            $this->_usedProperties['twoFactor'] = true;
            $this->twoFactor = new \Symfony\Config\Contao\Security\TwoFactorConfig($value['two_factor']);
            unset($value['two_factor']);
        }

        if (array_key_exists('hsts', $value)) {
            $this->_usedProperties['hsts'] = true;
            $this->hsts = new \Symfony\Config\Contao\Security\HstsConfig($value['hsts']);
            unset($value['hsts']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['twoFactor'])) {
            $output['two_factor'] = $this->twoFactor->toArray();
        }
        if (isset($this->_usedProperties['hsts'])) {
            $output['hsts'] = $this->hsts->toArray();
        }

        return $output;
    }

}
