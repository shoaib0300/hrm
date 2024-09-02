<?php

namespace Symfony\Config\Contao\Image\SizesConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ItemsConfig 
{
    private $width;
    private $height;
    private $resizeMode;
    private $zoom;
    private $media;
    private $densities;
    private $sizes;
    private $resizeMode;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function width($value): static
    {
        $this->_usedProperties['width'] = true;
        $this->width = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function height($value): static
    {
        $this->_usedProperties['height'] = true;
        $this->height = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|'crop'|'box'|'proportional' $value
     * @return $this
     */
    public function resizeMode($value): static
    {
        $this->_usedProperties['resizeMode'] = true;
        $this->resizeMode = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function zoom($value): static
    {
        $this->_usedProperties['zoom'] = true;
        $this->zoom = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function media($value): static
    {
        $this->_usedProperties['media'] = true;
        $this->media = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function densities($value): static
    {
        $this->_usedProperties['densities'] = true;
        $this->densities = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sizes($value): static
    {
        $this->_usedProperties['sizes'] = true;
        $this->sizes = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|'crop'|'box'|'proportional' $value
     * @deprecated Using contao.image.sizes.*.items.resizeMode is deprecated. Please use contao.image.sizes.*.items.resize_mode instead.
     * @return $this
     */
    public function resizeMode($value): static
    {
        $this->_usedProperties['resizeMode'] = true;
        $this->resizeMode = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('width', $value)) {
            $this->_usedProperties['width'] = true;
            $this->width = $value['width'];
            unset($value['width']);
        }

        if (array_key_exists('height', $value)) {
            $this->_usedProperties['height'] = true;
            $this->height = $value['height'];
            unset($value['height']);
        }

        if (array_key_exists('resize_mode', $value)) {
            $this->_usedProperties['resizeMode'] = true;
            $this->resizeMode = $value['resize_mode'];
            unset($value['resize_mode']);
        }

        if (array_key_exists('zoom', $value)) {
            $this->_usedProperties['zoom'] = true;
            $this->zoom = $value['zoom'];
            unset($value['zoom']);
        }

        if (array_key_exists('media', $value)) {
            $this->_usedProperties['media'] = true;
            $this->media = $value['media'];
            unset($value['media']);
        }

        if (array_key_exists('densities', $value)) {
            $this->_usedProperties['densities'] = true;
            $this->densities = $value['densities'];
            unset($value['densities']);
        }

        if (array_key_exists('sizes', $value)) {
            $this->_usedProperties['sizes'] = true;
            $this->sizes = $value['sizes'];
            unset($value['sizes']);
        }

        if (array_key_exists('resizeMode', $value)) {
            $this->_usedProperties['resizeMode'] = true;
            $this->resizeMode = $value['resizeMode'];
            unset($value['resizeMode']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['width'])) {
            $output['width'] = $this->width;
        }
        if (isset($this->_usedProperties['height'])) {
            $output['height'] = $this->height;
        }
        if (isset($this->_usedProperties['resizeMode'])) {
            $output['resize_mode'] = $this->resizeMode;
        }
        if (isset($this->_usedProperties['zoom'])) {
            $output['zoom'] = $this->zoom;
        }
        if (isset($this->_usedProperties['media'])) {
            $output['media'] = $this->media;
        }
        if (isset($this->_usedProperties['densities'])) {
            $output['densities'] = $this->densities;
        }
        if (isset($this->_usedProperties['sizes'])) {
            $output['sizes'] = $this->sizes;
        }
        if (isset($this->_usedProperties['resizeMode'])) {
            $output['resizeMode'] = $this->resizeMode;
        }

        return $output;
    }

}
