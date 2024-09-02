<?php

namespace Symfony\Config\Contao;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'WebWorkerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'WorkersConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MessengerConfig 
{
    private $webWorker;
    private $workers;
    private $_usedProperties = [];

    /**
     * Contao provides a way to work on Messenger transports in the web process (kernel.terminate) if there is no real "messenger:consume" worker. You can configure its behavior here.
     * @default {"transports":[],"grace_period":"PT10M"}
    */
    public function webWorker(array $value = []): \Symfony\Config\Contao\Messenger\WebWorkerConfig
    {
        if (null === $this->webWorker) {
            $this->_usedProperties['webWorker'] = true;
            $this->webWorker = new \Symfony\Config\Contao\Messenger\WebWorkerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "webWorker()" has already been initialized. You cannot pass values the second time you call webWorker().');
        }

        return $this->webWorker;
    }

    public function workers(array $value = []): \Symfony\Config\Contao\Messenger\WorkersConfig
    {
        $this->_usedProperties['workers'] = true;

        return $this->workers[] = new \Symfony\Config\Contao\Messenger\WorkersConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('web_worker', $value)) {
            $this->_usedProperties['webWorker'] = true;
            $this->webWorker = new \Symfony\Config\Contao\Messenger\WebWorkerConfig($value['web_worker']);
            unset($value['web_worker']);
        }

        if (array_key_exists('workers', $value)) {
            $this->_usedProperties['workers'] = true;
            $this->workers = array_map(fn ($v) => new \Symfony\Config\Contao\Messenger\WorkersConfig($v), $value['workers']);
            unset($value['workers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['webWorker'])) {
            $output['web_worker'] = $this->webWorker->toArray();
        }
        if (isset($this->_usedProperties['workers'])) {
            $output['workers'] = array_map(fn ($v) => $v->toArray(), $this->workers);
        }

        return $output;
    }

}
