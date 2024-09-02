<?php

namespace Symfony\Config\Contao;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BackendConfig 
{
    private $attributes;
    private $customCss;
    private $customJs;
    private $badgeTitle;
    private $routePrefix;
    private $crawlConcurrency;
    private $_usedProperties = [];

    /**
     * @return $this
     */
    public function attributes(string $name, mixed $value): static
    {
        $this->_usedProperties['attributes'] = true;
        $this->attributes[$name] = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function customCss(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['customCss'] = true;
        $this->customCss = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function customJs(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['customJs'] = true;
        $this->customJs = $value;

        return $this;
    }

    /**
     * Configures the title of the badge in the back end.
     * @example develop
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function badgeTitle($value): static
    {
        $this->_usedProperties['badgeTitle'] = true;
        $this->badgeTitle = $value;

        return $this;
    }

    /**
     * Defines the path of the Contao backend.
     * @example /admin
     * @default '/contao'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function routePrefix($value): static
    {
        $this->_usedProperties['routePrefix'] = true;
        $this->routePrefix = $value;

        return $this;
    }

    /**
     * The number of concurrent requests that are executed. Defaults to 5.
     * @default 5
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function crawlConcurrency($value): static
    {
        $this->_usedProperties['crawlConcurrency'] = true;
        $this->crawlConcurrency = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('attributes', $value)) {
            $this->_usedProperties['attributes'] = true;
            $this->attributes = $value['attributes'];
            unset($value['attributes']);
        }

        if (array_key_exists('custom_css', $value)) {
            $this->_usedProperties['customCss'] = true;
            $this->customCss = $value['custom_css'];
            unset($value['custom_css']);
        }

        if (array_key_exists('custom_js', $value)) {
            $this->_usedProperties['customJs'] = true;
            $this->customJs = $value['custom_js'];
            unset($value['custom_js']);
        }

        if (array_key_exists('badge_title', $value)) {
            $this->_usedProperties['badgeTitle'] = true;
            $this->badgeTitle = $value['badge_title'];
            unset($value['badge_title']);
        }

        if (array_key_exists('route_prefix', $value)) {
            $this->_usedProperties['routePrefix'] = true;
            $this->routePrefix = $value['route_prefix'];
            unset($value['route_prefix']);
        }

        if (array_key_exists('crawl_concurrency', $value)) {
            $this->_usedProperties['crawlConcurrency'] = true;
            $this->crawlConcurrency = $value['crawl_concurrency'];
            unset($value['crawl_concurrency']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['attributes'])) {
            $output['attributes'] = $this->attributes;
        }
        if (isset($this->_usedProperties['customCss'])) {
            $output['custom_css'] = $this->customCss;
        }
        if (isset($this->_usedProperties['customJs'])) {
            $output['custom_js'] = $this->customJs;
        }
        if (isset($this->_usedProperties['badgeTitle'])) {
            $output['badge_title'] = $this->badgeTitle;
        }
        if (isset($this->_usedProperties['routePrefix'])) {
            $output['route_prefix'] = $this->routePrefix;
        }
        if (isset($this->_usedProperties['crawlConcurrency'])) {
            $output['crawl_concurrency'] = $this->crawlConcurrency;
        }

        return $output;
    }

}
