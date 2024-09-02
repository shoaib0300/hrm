<?php

namespace Symfony\Config\SchebTwoFactor;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TrustedDeviceConfig 
{
    private $enabled;
    private $manager;
    private $lifetime;
    private $extendLifetime;
    private $key;
    private $cookieName;
    private $cookieSecure;
    private $cookieDomain;
    private $cookiePath;
    private $cookieSameSite;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default 'scheb_two_factor.default_trusted_device_manager'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function manager($value): static
    {
        $this->_usedProperties['manager'] = true;
        $this->manager = $value;

        return $this;
    }

    /**
     * @default 5184000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function lifetime($value): static
    {
        $this->_usedProperties['lifetime'] = true;
        $this->lifetime = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function extendLifetime($value): static
    {
        $this->_usedProperties['extendLifetime'] = true;
        $this->extendLifetime = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function key($value): static
    {
        $this->_usedProperties['key'] = true;
        $this->key = $value;

        return $this;
    }

    /**
     * @default 'trusted_device'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cookieName($value): static
    {
        $this->_usedProperties['cookieName'] = true;
        $this->cookieName = $value;

        return $this;
    }

    /**
     * @default 'auto'
     * @param ParamConfigurator|true|false|'auto' $value
     * @return $this
     */
    public function cookieSecure($value): static
    {
        $this->_usedProperties['cookieSecure'] = true;
        $this->cookieSecure = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cookieDomain($value): static
    {
        $this->_usedProperties['cookieDomain'] = true;
        $this->cookieDomain = $value;

        return $this;
    }

    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cookiePath($value): static
    {
        $this->_usedProperties['cookiePath'] = true;
        $this->cookiePath = $value;

        return $this;
    }

    /**
     * @default 'lax'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cookieSameSite($value): static
    {
        $this->_usedProperties['cookieSameSite'] = true;
        $this->cookieSameSite = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('manager', $value)) {
            $this->_usedProperties['manager'] = true;
            $this->manager = $value['manager'];
            unset($value['manager']);
        }

        if (array_key_exists('lifetime', $value)) {
            $this->_usedProperties['lifetime'] = true;
            $this->lifetime = $value['lifetime'];
            unset($value['lifetime']);
        }

        if (array_key_exists('extend_lifetime', $value)) {
            $this->_usedProperties['extendLifetime'] = true;
            $this->extendLifetime = $value['extend_lifetime'];
            unset($value['extend_lifetime']);
        }

        if (array_key_exists('key', $value)) {
            $this->_usedProperties['key'] = true;
            $this->key = $value['key'];
            unset($value['key']);
        }

        if (array_key_exists('cookie_name', $value)) {
            $this->_usedProperties['cookieName'] = true;
            $this->cookieName = $value['cookie_name'];
            unset($value['cookie_name']);
        }

        if (array_key_exists('cookie_secure', $value)) {
            $this->_usedProperties['cookieSecure'] = true;
            $this->cookieSecure = $value['cookie_secure'];
            unset($value['cookie_secure']);
        }

        if (array_key_exists('cookie_domain', $value)) {
            $this->_usedProperties['cookieDomain'] = true;
            $this->cookieDomain = $value['cookie_domain'];
            unset($value['cookie_domain']);
        }

        if (array_key_exists('cookie_path', $value)) {
            $this->_usedProperties['cookiePath'] = true;
            $this->cookiePath = $value['cookie_path'];
            unset($value['cookie_path']);
        }

        if (array_key_exists('cookie_same_site', $value)) {
            $this->_usedProperties['cookieSameSite'] = true;
            $this->cookieSameSite = $value['cookie_same_site'];
            unset($value['cookie_same_site']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['manager'])) {
            $output['manager'] = $this->manager;
        }
        if (isset($this->_usedProperties['lifetime'])) {
            $output['lifetime'] = $this->lifetime;
        }
        if (isset($this->_usedProperties['extendLifetime'])) {
            $output['extend_lifetime'] = $this->extendLifetime;
        }
        if (isset($this->_usedProperties['key'])) {
            $output['key'] = $this->key;
        }
        if (isset($this->_usedProperties['cookieName'])) {
            $output['cookie_name'] = $this->cookieName;
        }
        if (isset($this->_usedProperties['cookieSecure'])) {
            $output['cookie_secure'] = $this->cookieSecure;
        }
        if (isset($this->_usedProperties['cookieDomain'])) {
            $output['cookie_domain'] = $this->cookieDomain;
        }
        if (isset($this->_usedProperties['cookiePath'])) {
            $output['cookie_path'] = $this->cookiePath;
        }
        if (isset($this->_usedProperties['cookieSameSite'])) {
            $output['cookie_same_site'] = $this->cookieSameSite;
        }

        return $output;
    }

}
