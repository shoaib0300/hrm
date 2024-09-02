<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'IntlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'MessengerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'ImageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'SecurityConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'SearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'CrawlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'MailerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'BackendConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'InsertTagsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'BackupConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'SanitizerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'CronConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'CspConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Contao'.\DIRECTORY_SEPARATOR.'AltchaConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ContaoConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $csrfCookiePrefix;
    private $csrfTokenName;
    private $errorLevel;
    private $intl;
    private $localconfig;
    private $locales;
    private $prettyErrorScreens;
    private $previewScript;
    private $uploadPath;
    private $editableFiles;
    private $consolePath;
    private $messenger;
    private $image;
    private $security;
    private $search;
    private $crawl;
    private $mailer;
    private $backend;
    private $insertTags;
    private $backup;
    private $sanitizer;
    private $cron;
    private $csp;
    private $altcha;
    private $_usedProperties = [];

    /**
     * @default 'csrf_'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function csrfCookiePrefix($value): static
    {
        $this->_usedProperties['csrfCookiePrefix'] = true;
        $this->csrfCookiePrefix = $value;

        return $this;
    }

    /**
     * @default 'contao_csrf_token'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function csrfTokenName($value): static
    {
        $this->_usedProperties['csrfTokenName'] = true;
        $this->csrfTokenName = $value;

        return $this;
    }

    /**
     * The error reporting level set when the framework is initialized. Defaults to E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_USER_DEPRECATED.
     * @default 8183
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function errorLevel($value): static
    {
        $this->_usedProperties['errorLevel'] = true;
        $this->errorLevel = $value;

        return $this;
    }

    /**
     * @default {"locales":[],"enabled_locales":[],"countries":[]}
    */
    public function intl(array $value = []): \Symfony\Config\Contao\IntlConfig
    {
        if (null === $this->intl) {
            $this->_usedProperties['intl'] = true;
            $this->intl = new \Symfony\Config\Contao\IntlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "intl()" has already been initialized. You cannot pass values the second time you call intl().');
        }

        return $this->intl;
    }

    /**
     * Allows to set TL_CONFIG variables, overriding settings stored in localconfig.php. Changes in the Contao back end will not have any effect.
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function localconfig(mixed $value): static
    {
        $this->_usedProperties['localconfig'] = true;
        $this->localconfig = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function locales(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['locales'] = true;
        $this->locales = $value;

        return $this;
    }

    /**
     * Show customizable, pretty error screens instead of the default PHP error messages.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function prettyErrorScreens($value): static
    {
        $this->_usedProperties['prettyErrorScreens'] = true;
        $this->prettyErrorScreens = $value;

        return $this;
    }

    /**
     * An optional entry point script that bypasses the front end cache for previewing changes (e.g. "/preview.php").
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function previewScript($value): static
    {
        $this->_usedProperties['previewScript'] = true;
        $this->previewScript = $value;

        return $this;
    }

    /**
     * The folder used by the file manager.
     * @default 'files'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uploadPath($value): static
    {
        $this->_usedProperties['uploadPath'] = true;
        $this->uploadPath = $value;

        return $this;
    }

    /**
     * @default 'css,csv,html,ini,js,json,less,md,scss,svg,svgz,ts,txt,xliff,xml,yml,yaml'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function editableFiles($value): static
    {
        $this->_usedProperties['editableFiles'] = true;
        $this->editableFiles = $value;

        return $this;
    }

    /**
     * The path to the Symfony console. Defaults to %kernel.project_dir%/bin/console.
     * @default '%kernel.project_dir%/bin/console'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function consolePath($value): static
    {
        $this->_usedProperties['consolePath'] = true;
        $this->consolePath = $value;

        return $this;
    }

    /**
     * Allows to define Symfony Messenger workers (messenger:consume). Workers are started every minute using the Contao cron job framework.
     * @default {"web_worker":{"transports":[],"grace_period":"PT10M"},"workers":[]}
    */
    public function messenger(array $value = []): \Symfony\Config\Contao\MessengerConfig
    {
        if (null === $this->messenger) {
            $this->_usedProperties['messenger'] = true;
            $this->messenger = new \Symfony\Config\Contao\MessengerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "messenger()" has already been initialized. You cannot pass values the second time you call messenger().');
        }

        return $this->messenger;
    }

    /**
     * @default {"bypass_cache":false,"imagine_options":{"jpeg_quality":80,"jpeg_sampling_factors":[2,1,1],"interlace":"plane"},"imagine_service":null,"reject_large_uploads":false,"sizes":[],"target_dir":"%kernel.project_dir%\/assets\/images","target_path":null,"valid_extensions":["jpg","jpeg","gif","png","tif","tiff","bmp","svg","svgz","webp","avif"],"preview":{"target_dir":"%kernel.project_dir%\/assets\/previews","default_size":512,"max_size":1024,"enable_fallback_images":true},"preserve_metadata_fields":{"xmp":{"http:\/\/purl.org\/dc\/elements\/1.1\/":["rights","creator"],"http:\/\/ns.adobe.com\/photoshop\/1.0\/":["Source","Credit"]},"iptc":["2#116","2#080","2#115","2#110"],"exif":{"IFD0":["Copyright","Artist"]},"png":["Copyright","Author","Source","Disclaimer"],"gif":["Comment"]}}
    */
    public function image(array $value = []): \Symfony\Config\Contao\ImageConfig
    {
        if (null === $this->image) {
            $this->_usedProperties['image'] = true;
            $this->image = new \Symfony\Config\Contao\ImageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "image()" has already been initialized. You cannot pass values the second time you call image().');
        }

        return $this->image;
    }

    /**
     * @default {"two_factor":{"enforce_backend":false},"hsts":{"enabled":true,"ttl":31536000}}
    */
    public function security(array $value = []): \Symfony\Config\Contao\SecurityConfig
    {
        if (null === $this->security) {
            $this->_usedProperties['security'] = true;
            $this->security = new \Symfony\Config\Contao\SecurityConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "security()" has already been initialized. You cannot pass values the second time you call security().');
        }

        return $this->security;
    }

    /**
     * @default {"default_indexer":{"enable":true},"index_protected":false,"listener":{"index":true,"delete":true}}
    */
    public function search(array $value = []): \Symfony\Config\Contao\SearchConfig
    {
        if (null === $this->search) {
            $this->_usedProperties['search'] = true;
            $this->search = new \Symfony\Config\Contao\SearchConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "search()" has already been initialized. You cannot pass values the second time you call search().');
        }

        return $this->search;
    }

    /**
     * @default {"additional_uris":[],"default_http_client_options":[]}
    */
    public function crawl(array $value = []): \Symfony\Config\Contao\CrawlConfig
    {
        if (null === $this->crawl) {
            $this->_usedProperties['crawl'] = true;
            $this->crawl = new \Symfony\Config\Contao\CrawlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "crawl()" has already been initialized. You cannot pass values the second time you call crawl().');
        }

        return $this->crawl;
    }

    /**
     * @default {"transports":[]}
    */
    public function mailer(array $value = []): \Symfony\Config\Contao\MailerConfig
    {
        if (null === $this->mailer) {
            $this->_usedProperties['mailer'] = true;
            $this->mailer = new \Symfony\Config\Contao\MailerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mailer()" has already been initialized. You cannot pass values the second time you call mailer().');
        }

        return $this->mailer;
    }

    /**
     * @default {"attributes":[],"custom_css":[],"custom_js":[],"badge_title":"","route_prefix":"\/contao","crawl_concurrency":5}
    */
    public function backend(array $value = []): \Symfony\Config\Contao\BackendConfig
    {
        if (null === $this->backend) {
            $this->_usedProperties['backend'] = true;
            $this->backend = new \Symfony\Config\Contao\BackendConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "backend()" has already been initialized. You cannot pass values the second time you call backend().');
        }

        return $this->backend;
    }

    /**
     * @default {"allowed_tags":["*"]}
    */
    public function insertTags(array $value = []): \Symfony\Config\Contao\InsertTagsConfig
    {
        if (null === $this->insertTags) {
            $this->_usedProperties['insertTags'] = true;
            $this->insertTags = new \Symfony\Config\Contao\InsertTagsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "insertTags()" has already been initialized. You cannot pass values the second time you call insertTags().');
        }

        return $this->insertTags;
    }

    /**
     * @default {"ignore_tables":["tl_crawl_queue","tl_log","tl_search","tl_search_index","tl_search_term"],"keep_max":5,"keep_intervals":["1D","7D","14D","1M"]}
    */
    public function backup(array $value = []): \Symfony\Config\Contao\BackupConfig
    {
        if (null === $this->backup) {
            $this->_usedProperties['backup'] = true;
            $this->backup = new \Symfony\Config\Contao\BackupConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "backup()" has already been initialized. You cannot pass values the second time you call backup().');
        }

        return $this->backup;
    }

    /**
     * @default {"allowed_url_protocols":["http","https","ftp","mailto","tel","data","skype","whatsapp"]}
    */
    public function sanitizer(array $value = []): \Symfony\Config\Contao\SanitizerConfig
    {
        if (null === $this->sanitizer) {
            $this->_usedProperties['sanitizer'] = true;
            $this->sanitizer = new \Symfony\Config\Contao\SanitizerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "sanitizer()" has already been initialized. You cannot pass values the second time you call sanitizer().');
        }

        return $this->sanitizer;
    }

    /**
     * @default {"web_listener":"auto"}
    */
    public function cron(array $value = []): \Symfony\Config\Contao\CronConfig
    {
        if (null === $this->cron) {
            $this->_usedProperties['cron'] = true;
            $this->cron = new \Symfony\Config\Contao\CronConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cron()" has already been initialized. You cannot pass values the second time you call cron().');
        }

        return $this->cron;
    }

    /**
     * @default {"allowed_inline_styles":{"text-align":"left|center|right|justify","text-decoration":"underline","background-color":"rgb\\(\\d{1,3},\\s?\\d{1,3},\\s?\\d{1,3}\\)|#([0-9a-f]{3}){1,2}","color":"rgb\\(\\d{1,3},\\s?\\d{1,3},\\s?\\d{1,3}\\)|#([0-9a-f]{3}){1,2}","font-family":"(('[a-z0-9 _-]+'|[a-z0-9 _-]+)(,\\s*|$))+","font-size":"[0-3]?\\dpt","line-height":"[0-3](\\.\\d+)?","padding-left":"\\d{1,3}px","border-collapse":"collapse","margin-right":"0px|auto","margin-left":"0px|auto","border-color":"rgb\\(\\d{1,3},\\s?\\d{1,3},\\s?\\d{1,3}\\)|#([0-9a-f]{3}){1,2}","vertical-align":"top|middle|bottom"},"max_header_size":3072}
    */
    public function csp(array $value = []): \Symfony\Config\Contao\CspConfig
    {
        if (null === $this->csp) {
            $this->_usedProperties['csp'] = true;
            $this->csp = new \Symfony\Config\Contao\CspConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "csp()" has already been initialized. You cannot pass values the second time you call csp().');
        }

        return $this->csp;
    }

    /**
     * @default {"algorithm":"SHA-256","range_max":100000,"challenge_expiry":86400}
    */
    public function altcha(array $value = []): \Symfony\Config\Contao\AltchaConfig
    {
        if (null === $this->altcha) {
            $this->_usedProperties['altcha'] = true;
            $this->altcha = new \Symfony\Config\Contao\AltchaConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "altcha()" has already been initialized. You cannot pass values the second time you call altcha().');
        }

        return $this->altcha;
    }

    public function getExtensionAlias(): string
    {
        return 'contao';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('csrf_cookie_prefix', $value)) {
            $this->_usedProperties['csrfCookiePrefix'] = true;
            $this->csrfCookiePrefix = $value['csrf_cookie_prefix'];
            unset($value['csrf_cookie_prefix']);
        }

        if (array_key_exists('csrf_token_name', $value)) {
            $this->_usedProperties['csrfTokenName'] = true;
            $this->csrfTokenName = $value['csrf_token_name'];
            unset($value['csrf_token_name']);
        }

        if (array_key_exists('error_level', $value)) {
            $this->_usedProperties['errorLevel'] = true;
            $this->errorLevel = $value['error_level'];
            unset($value['error_level']);
        }

        if (array_key_exists('intl', $value)) {
            $this->_usedProperties['intl'] = true;
            $this->intl = new \Symfony\Config\Contao\IntlConfig($value['intl']);
            unset($value['intl']);
        }

        if (array_key_exists('localconfig', $value)) {
            $this->_usedProperties['localconfig'] = true;
            $this->localconfig = $value['localconfig'];
            unset($value['localconfig']);
        }

        if (array_key_exists('locales', $value)) {
            $this->_usedProperties['locales'] = true;
            $this->locales = $value['locales'];
            unset($value['locales']);
        }

        if (array_key_exists('pretty_error_screens', $value)) {
            $this->_usedProperties['prettyErrorScreens'] = true;
            $this->prettyErrorScreens = $value['pretty_error_screens'];
            unset($value['pretty_error_screens']);
        }

        if (array_key_exists('preview_script', $value)) {
            $this->_usedProperties['previewScript'] = true;
            $this->previewScript = $value['preview_script'];
            unset($value['preview_script']);
        }

        if (array_key_exists('upload_path', $value)) {
            $this->_usedProperties['uploadPath'] = true;
            $this->uploadPath = $value['upload_path'];
            unset($value['upload_path']);
        }

        if (array_key_exists('editable_files', $value)) {
            $this->_usedProperties['editableFiles'] = true;
            $this->editableFiles = $value['editable_files'];
            unset($value['editable_files']);
        }

        if (array_key_exists('console_path', $value)) {
            $this->_usedProperties['consolePath'] = true;
            $this->consolePath = $value['console_path'];
            unset($value['console_path']);
        }

        if (array_key_exists('messenger', $value)) {
            $this->_usedProperties['messenger'] = true;
            $this->messenger = new \Symfony\Config\Contao\MessengerConfig($value['messenger']);
            unset($value['messenger']);
        }

        if (array_key_exists('image', $value)) {
            $this->_usedProperties['image'] = true;
            $this->image = new \Symfony\Config\Contao\ImageConfig($value['image']);
            unset($value['image']);
        }

        if (array_key_exists('security', $value)) {
            $this->_usedProperties['security'] = true;
            $this->security = new \Symfony\Config\Contao\SecurityConfig($value['security']);
            unset($value['security']);
        }

        if (array_key_exists('search', $value)) {
            $this->_usedProperties['search'] = true;
            $this->search = new \Symfony\Config\Contao\SearchConfig($value['search']);
            unset($value['search']);
        }

        if (array_key_exists('crawl', $value)) {
            $this->_usedProperties['crawl'] = true;
            $this->crawl = new \Symfony\Config\Contao\CrawlConfig($value['crawl']);
            unset($value['crawl']);
        }

        if (array_key_exists('mailer', $value)) {
            $this->_usedProperties['mailer'] = true;
            $this->mailer = new \Symfony\Config\Contao\MailerConfig($value['mailer']);
            unset($value['mailer']);
        }

        if (array_key_exists('backend', $value)) {
            $this->_usedProperties['backend'] = true;
            $this->backend = new \Symfony\Config\Contao\BackendConfig($value['backend']);
            unset($value['backend']);
        }

        if (array_key_exists('insert_tags', $value)) {
            $this->_usedProperties['insertTags'] = true;
            $this->insertTags = new \Symfony\Config\Contao\InsertTagsConfig($value['insert_tags']);
            unset($value['insert_tags']);
        }

        if (array_key_exists('backup', $value)) {
            $this->_usedProperties['backup'] = true;
            $this->backup = new \Symfony\Config\Contao\BackupConfig($value['backup']);
            unset($value['backup']);
        }

        if (array_key_exists('sanitizer', $value)) {
            $this->_usedProperties['sanitizer'] = true;
            $this->sanitizer = new \Symfony\Config\Contao\SanitizerConfig($value['sanitizer']);
            unset($value['sanitizer']);
        }

        if (array_key_exists('cron', $value)) {
            $this->_usedProperties['cron'] = true;
            $this->cron = new \Symfony\Config\Contao\CronConfig($value['cron']);
            unset($value['cron']);
        }

        if (array_key_exists('csp', $value)) {
            $this->_usedProperties['csp'] = true;
            $this->csp = new \Symfony\Config\Contao\CspConfig($value['csp']);
            unset($value['csp']);
        }

        if (array_key_exists('altcha', $value)) {
            $this->_usedProperties['altcha'] = true;
            $this->altcha = new \Symfony\Config\Contao\AltchaConfig($value['altcha']);
            unset($value['altcha']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['csrfCookiePrefix'])) {
            $output['csrf_cookie_prefix'] = $this->csrfCookiePrefix;
        }
        if (isset($this->_usedProperties['csrfTokenName'])) {
            $output['csrf_token_name'] = $this->csrfTokenName;
        }
        if (isset($this->_usedProperties['errorLevel'])) {
            $output['error_level'] = $this->errorLevel;
        }
        if (isset($this->_usedProperties['intl'])) {
            $output['intl'] = $this->intl->toArray();
        }
        if (isset($this->_usedProperties['localconfig'])) {
            $output['localconfig'] = $this->localconfig;
        }
        if (isset($this->_usedProperties['locales'])) {
            $output['locales'] = $this->locales;
        }
        if (isset($this->_usedProperties['prettyErrorScreens'])) {
            $output['pretty_error_screens'] = $this->prettyErrorScreens;
        }
        if (isset($this->_usedProperties['previewScript'])) {
            $output['preview_script'] = $this->previewScript;
        }
        if (isset($this->_usedProperties['uploadPath'])) {
            $output['upload_path'] = $this->uploadPath;
        }
        if (isset($this->_usedProperties['editableFiles'])) {
            $output['editable_files'] = $this->editableFiles;
        }
        if (isset($this->_usedProperties['consolePath'])) {
            $output['console_path'] = $this->consolePath;
        }
        if (isset($this->_usedProperties['messenger'])) {
            $output['messenger'] = $this->messenger->toArray();
        }
        if (isset($this->_usedProperties['image'])) {
            $output['image'] = $this->image->toArray();
        }
        if (isset($this->_usedProperties['security'])) {
            $output['security'] = $this->security->toArray();
        }
        if (isset($this->_usedProperties['search'])) {
            $output['search'] = $this->search->toArray();
        }
        if (isset($this->_usedProperties['crawl'])) {
            $output['crawl'] = $this->crawl->toArray();
        }
        if (isset($this->_usedProperties['mailer'])) {
            $output['mailer'] = $this->mailer->toArray();
        }
        if (isset($this->_usedProperties['backend'])) {
            $output['backend'] = $this->backend->toArray();
        }
        if (isset($this->_usedProperties['insertTags'])) {
            $output['insert_tags'] = $this->insertTags->toArray();
        }
        if (isset($this->_usedProperties['backup'])) {
            $output['backup'] = $this->backup->toArray();
        }
        if (isset($this->_usedProperties['sanitizer'])) {
            $output['sanitizer'] = $this->sanitizer->toArray();
        }
        if (isset($this->_usedProperties['cron'])) {
            $output['cron'] = $this->cron->toArray();
        }
        if (isset($this->_usedProperties['csp'])) {
            $output['csp'] = $this->csp->toArray();
        }
        if (isset($this->_usedProperties['altcha'])) {
            $output['altcha'] = $this->altcha->toArray();
        }

        return $output;
    }

}
