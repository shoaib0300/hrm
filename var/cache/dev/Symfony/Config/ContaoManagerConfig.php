<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ContaoManagerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $managerPath;
    private $_usedProperties = [];

    /**
     * The path to the Contao manager relative to the Contao web directory.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function managerPath($value): static
    {
        $this->_usedProperties['managerPath'] = true;
        $this->managerPath = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'contao_manager';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('manager_path', $value)) {
            $this->_usedProperties['managerPath'] = true;
            $this->managerPath = $value['manager_path'];
            unset($value['manager_path']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['managerPath'])) {
            $output['manager_path'] = $this->managerPath;
        }

        return $output;
    }

}
