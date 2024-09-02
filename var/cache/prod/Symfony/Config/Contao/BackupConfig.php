<?php

namespace Symfony\Config\Contao;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BackupConfig 
{
    private $ignoreTables;
    private $keepMax;
    private $keepIntervals;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function ignoreTables(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['ignoreTables'] = true;
        $this->ignoreTables = $value;

        return $this;
    }

    /**
     * The maximum number of backups to keep. Use 0 to keep all the backups forever.
     * @default 5
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function keepMax($value): static
    {
        $this->_usedProperties['keepMax'] = true;
        $this->keepMax = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function keepIntervals(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['keepIntervals'] = true;
        $this->keepIntervals = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('ignore_tables', $value)) {
            $this->_usedProperties['ignoreTables'] = true;
            $this->ignoreTables = $value['ignore_tables'];
            unset($value['ignore_tables']);
        }

        if (array_key_exists('keep_max', $value)) {
            $this->_usedProperties['keepMax'] = true;
            $this->keepMax = $value['keep_max'];
            unset($value['keep_max']);
        }

        if (array_key_exists('keep_intervals', $value)) {
            $this->_usedProperties['keepIntervals'] = true;
            $this->keepIntervals = $value['keep_intervals'];
            unset($value['keep_intervals']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['ignoreTables'])) {
            $output['ignore_tables'] = $this->ignoreTables;
        }
        if (isset($this->_usedProperties['keepMax'])) {
            $output['keep_max'] = $this->keepMax;
        }
        if (isset($this->_usedProperties['keepIntervals'])) {
            $output['keep_intervals'] = $this->keepIntervals;
        }

        return $output;
    }

}
