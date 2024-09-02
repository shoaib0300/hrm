<?php

namespace Symfony\Config\Security\FirewallConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ContaoLoginConfig 
{
    private $provider;
    private $rememberMe;
    private $successHandler;
    private $failureHandler;
    private $requirePreviousSession;
    private $authCodeParameterName;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): static
    {
        $this->_usedProperties['provider'] = true;
        $this->provider = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function rememberMe($value): static
    {
        $this->_usedProperties['rememberMe'] = true;
        $this->rememberMe = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function successHandler($value): static
    {
        $this->_usedProperties['successHandler'] = true;
        $this->successHandler = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function failureHandler($value): static
    {
        $this->_usedProperties['failureHandler'] = true;
        $this->failureHandler = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated Option "require_previous_session" at "contao_login" is deprecated, it will be removed in version 7.0. Setting it has no effect anymore.
     * @return $this
     */
    public function requirePreviousSession($value): static
    {
        $this->_usedProperties['requirePreviousSession'] = true;
        $this->requirePreviousSession = $value;

        return $this;
    }

    /**
     * @default 'verify'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function authCodeParameterName($value): static
    {
        $this->_usedProperties['authCodeParameterName'] = true;
        $this->authCodeParameterName = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('provider', $value)) {
            $this->_usedProperties['provider'] = true;
            $this->provider = $value['provider'];
            unset($value['provider']);
        }

        if (array_key_exists('remember_me', $value)) {
            $this->_usedProperties['rememberMe'] = true;
            $this->rememberMe = $value['remember_me'];
            unset($value['remember_me']);
        }

        if (array_key_exists('success_handler', $value)) {
            $this->_usedProperties['successHandler'] = true;
            $this->successHandler = $value['success_handler'];
            unset($value['success_handler']);
        }

        if (array_key_exists('failure_handler', $value)) {
            $this->_usedProperties['failureHandler'] = true;
            $this->failureHandler = $value['failure_handler'];
            unset($value['failure_handler']);
        }

        if (array_key_exists('require_previous_session', $value)) {
            $this->_usedProperties['requirePreviousSession'] = true;
            $this->requirePreviousSession = $value['require_previous_session'];
            unset($value['require_previous_session']);
        }

        if (array_key_exists('auth_code_parameter_name', $value)) {
            $this->_usedProperties['authCodeParameterName'] = true;
            $this->authCodeParameterName = $value['auth_code_parameter_name'];
            unset($value['auth_code_parameter_name']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['provider'])) {
            $output['provider'] = $this->provider;
        }
        if (isset($this->_usedProperties['rememberMe'])) {
            $output['remember_me'] = $this->rememberMe;
        }
        if (isset($this->_usedProperties['successHandler'])) {
            $output['success_handler'] = $this->successHandler;
        }
        if (isset($this->_usedProperties['failureHandler'])) {
            $output['failure_handler'] = $this->failureHandler;
        }
        if (isset($this->_usedProperties['requirePreviousSession'])) {
            $output['require_previous_session'] = $this->requirePreviousSession;
        }
        if (isset($this->_usedProperties['authCodeParameterName'])) {
            $output['auth_code_parameter_name'] = $this->authCodeParameterName;
        }

        return $output;
    }

}
