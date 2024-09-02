<?php

namespace Symfony\Config\Contao\Image;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PreviewConfig 
{
    private $targetDir;
    private $defaultSize;
    private $maxSize;
    private $enableFallbackImages;
    private $_usedProperties = [];

    /**
     * The target directory for the cached previews.
     * @example %kernel.project_dir%/assets/previews
     * @default '%kernel.project_dir%/assets/previews'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function targetDir($value): static
    {
        $this->_usedProperties['targetDir'] = true;
        $this->targetDir = $value;

        return $this;
    }

    /**
     * @default 512
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function defaultSize($value): static
    {
        $this->_usedProperties['defaultSize'] = true;
        $this->defaultSize = $value;

        return $this;
    }

    /**
     * @default 1024
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxSize($value): static
    {
        $this->_usedProperties['maxSize'] = true;
        $this->maxSize = $value;

        return $this;
    }

    /**
     * Whether or not to generate previews for unsupported file types that show a file icon containing the file type.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableFallbackImages($value): static
    {
        $this->_usedProperties['enableFallbackImages'] = true;
        $this->enableFallbackImages = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('target_dir', $value)) {
            $this->_usedProperties['targetDir'] = true;
            $this->targetDir = $value['target_dir'];
            unset($value['target_dir']);
        }

        if (array_key_exists('default_size', $value)) {
            $this->_usedProperties['defaultSize'] = true;
            $this->defaultSize = $value['default_size'];
            unset($value['default_size']);
        }

        if (array_key_exists('max_size', $value)) {
            $this->_usedProperties['maxSize'] = true;
            $this->maxSize = $value['max_size'];
            unset($value['max_size']);
        }

        if (array_key_exists('enable_fallback_images', $value)) {
            $this->_usedProperties['enableFallbackImages'] = true;
            $this->enableFallbackImages = $value['enable_fallback_images'];
            unset($value['enable_fallback_images']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['targetDir'])) {
            $output['target_dir'] = $this->targetDir;
        }
        if (isset($this->_usedProperties['defaultSize'])) {
            $output['default_size'] = $this->defaultSize;
        }
        if (isset($this->_usedProperties['maxSize'])) {
            $output['max_size'] = $this->maxSize;
        }
        if (isset($this->_usedProperties['enableFallbackImages'])) {
            $output['enable_fallback_images'] = $this->enableFallbackImages;
        }

        return $output;
    }

}
