<?php

namespace Symfony\Config\Contao;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'DefaultIndexerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'ListenerConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class SearchConfig 
{
    private $defaultIndexer;
    private $indexProtected;
    private $listener;
    private $_usedProperties = [];

    /**
     * The default search indexer, which indexes pages in the database.
     * @default {"enable":true}
    */
    public function defaultIndexer(array $value = []): \Symfony\Config\Contao\Search\DefaultIndexerConfig
    {
        if (null === $this->defaultIndexer) {
            $this->_usedProperties['defaultIndexer'] = true;
            $this->defaultIndexer = new \Symfony\Config\Contao\Search\DefaultIndexerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "defaultIndexer()" has already been initialized. You cannot pass values the second time you call defaultIndexer().');
        }

        return $this->defaultIndexer;
    }

    /**
     * Enables indexing of protected pages.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function indexProtected($value): static
    {
        $this->_usedProperties['indexProtected'] = true;
        $this->indexProtected = $value;

        return $this;
    }

    /**
     * The search index listener can index valid and delete invalid responses upon every request. You may limit it to one of the features or disable it completely.
     * @default {"index":true,"delete":true}
    */
    public function listener(array $value = []): \Symfony\Config\Contao\Search\ListenerConfig
    {
        if (null === $this->listener) {
            $this->_usedProperties['listener'] = true;
            $this->listener = new \Symfony\Config\Contao\Search\ListenerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "listener()" has already been initialized. You cannot pass values the second time you call listener().');
        }

        return $this->listener;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('default_indexer', $value)) {
            $this->_usedProperties['defaultIndexer'] = true;
            $this->defaultIndexer = new \Symfony\Config\Contao\Search\DefaultIndexerConfig($value['default_indexer']);
            unset($value['default_indexer']);
        }

        if (array_key_exists('index_protected', $value)) {
            $this->_usedProperties['indexProtected'] = true;
            $this->indexProtected = $value['index_protected'];
            unset($value['index_protected']);
        }

        if (array_key_exists('listener', $value)) {
            $this->_usedProperties['listener'] = true;
            $this->listener = new \Symfony\Config\Contao\Search\ListenerConfig($value['listener']);
            unset($value['listener']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultIndexer'])) {
            $output['default_indexer'] = $this->defaultIndexer->toArray();
        }
        if (isset($this->_usedProperties['indexProtected'])) {
            $output['index_protected'] = $this->indexProtected;
        }
        if (isset($this->_usedProperties['listener'])) {
            $output['listener'] = $this->listener->toArray();
        }

        return $output;
    }

}
