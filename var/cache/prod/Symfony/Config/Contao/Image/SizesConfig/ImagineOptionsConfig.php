<?php

namespace Symfony\Config\Contao\Image\SizesConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ImagineOptionsConfig 
{
    private $jpegQuality;
    private $jpegSamplingFactors;
    private $pngCompressionLevel;
    private $pngCompressionFilter;
    private $webpQuality;
    private $webpLossless;
    private $avifQuality;
    private $avifLossless;
    private $heicQuality;
    private $heicLossless;
    private $jxlQuality;
    private $jxlLossless;
    private $flatten;
    private $interlace;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function jpegQuality($value): static
    {
        $this->_usedProperties['jpegQuality'] = true;
        $this->jpegQuality = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function jpegSamplingFactors(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['jpegSamplingFactors'] = true;
        $this->jpegSamplingFactors = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function pngCompressionLevel($value): static
    {
        $this->_usedProperties['pngCompressionLevel'] = true;
        $this->pngCompressionLevel = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function pngCompressionFilter($value): static
    {
        $this->_usedProperties['pngCompressionFilter'] = true;
        $this->pngCompressionFilter = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function webpQuality($value): static
    {
        $this->_usedProperties['webpQuality'] = true;
        $this->webpQuality = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function webpLossless($value): static
    {
        $this->_usedProperties['webpLossless'] = true;
        $this->webpLossless = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function avifQuality($value): static
    {
        $this->_usedProperties['avifQuality'] = true;
        $this->avifQuality = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function avifLossless($value): static
    {
        $this->_usedProperties['avifLossless'] = true;
        $this->avifLossless = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function heicQuality($value): static
    {
        $this->_usedProperties['heicQuality'] = true;
        $this->heicQuality = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function heicLossless($value): static
    {
        $this->_usedProperties['heicLossless'] = true;
        $this->heicLossless = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function jxlQuality($value): static
    {
        $this->_usedProperties['jxlQuality'] = true;
        $this->jxlQuality = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function jxlLossless($value): static
    {
        $this->_usedProperties['jxlLossless'] = true;
        $this->jxlLossless = $value;

        return $this;
    }

    /**
     * Allows to disable the layer flattening of animated images. Set this option to false to support animations. It has no effect with Gd as Imagine service.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function flatten($value): static
    {
        $this->_usedProperties['flatten'] = true;
        $this->flatten = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function interlace($value): static
    {
        $this->_usedProperties['interlace'] = true;
        $this->interlace = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('jpeg_quality', $value)) {
            $this->_usedProperties['jpegQuality'] = true;
            $this->jpegQuality = $value['jpeg_quality'];
            unset($value['jpeg_quality']);
        }

        if (array_key_exists('jpeg_sampling_factors', $value)) {
            $this->_usedProperties['jpegSamplingFactors'] = true;
            $this->jpegSamplingFactors = $value['jpeg_sampling_factors'];
            unset($value['jpeg_sampling_factors']);
        }

        if (array_key_exists('png_compression_level', $value)) {
            $this->_usedProperties['pngCompressionLevel'] = true;
            $this->pngCompressionLevel = $value['png_compression_level'];
            unset($value['png_compression_level']);
        }

        if (array_key_exists('png_compression_filter', $value)) {
            $this->_usedProperties['pngCompressionFilter'] = true;
            $this->pngCompressionFilter = $value['png_compression_filter'];
            unset($value['png_compression_filter']);
        }

        if (array_key_exists('webp_quality', $value)) {
            $this->_usedProperties['webpQuality'] = true;
            $this->webpQuality = $value['webp_quality'];
            unset($value['webp_quality']);
        }

        if (array_key_exists('webp_lossless', $value)) {
            $this->_usedProperties['webpLossless'] = true;
            $this->webpLossless = $value['webp_lossless'];
            unset($value['webp_lossless']);
        }

        if (array_key_exists('avif_quality', $value)) {
            $this->_usedProperties['avifQuality'] = true;
            $this->avifQuality = $value['avif_quality'];
            unset($value['avif_quality']);
        }

        if (array_key_exists('avif_lossless', $value)) {
            $this->_usedProperties['avifLossless'] = true;
            $this->avifLossless = $value['avif_lossless'];
            unset($value['avif_lossless']);
        }

        if (array_key_exists('heic_quality', $value)) {
            $this->_usedProperties['heicQuality'] = true;
            $this->heicQuality = $value['heic_quality'];
            unset($value['heic_quality']);
        }

        if (array_key_exists('heic_lossless', $value)) {
            $this->_usedProperties['heicLossless'] = true;
            $this->heicLossless = $value['heic_lossless'];
            unset($value['heic_lossless']);
        }

        if (array_key_exists('jxl_quality', $value)) {
            $this->_usedProperties['jxlQuality'] = true;
            $this->jxlQuality = $value['jxl_quality'];
            unset($value['jxl_quality']);
        }

        if (array_key_exists('jxl_lossless', $value)) {
            $this->_usedProperties['jxlLossless'] = true;
            $this->jxlLossless = $value['jxl_lossless'];
            unset($value['jxl_lossless']);
        }

        if (array_key_exists('flatten', $value)) {
            $this->_usedProperties['flatten'] = true;
            $this->flatten = $value['flatten'];
            unset($value['flatten']);
        }

        if (array_key_exists('interlace', $value)) {
            $this->_usedProperties['interlace'] = true;
            $this->interlace = $value['interlace'];
            unset($value['interlace']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['jpegQuality'])) {
            $output['jpeg_quality'] = $this->jpegQuality;
        }
        if (isset($this->_usedProperties['jpegSamplingFactors'])) {
            $output['jpeg_sampling_factors'] = $this->jpegSamplingFactors;
        }
        if (isset($this->_usedProperties['pngCompressionLevel'])) {
            $output['png_compression_level'] = $this->pngCompressionLevel;
        }
        if (isset($this->_usedProperties['pngCompressionFilter'])) {
            $output['png_compression_filter'] = $this->pngCompressionFilter;
        }
        if (isset($this->_usedProperties['webpQuality'])) {
            $output['webp_quality'] = $this->webpQuality;
        }
        if (isset($this->_usedProperties['webpLossless'])) {
            $output['webp_lossless'] = $this->webpLossless;
        }
        if (isset($this->_usedProperties['avifQuality'])) {
            $output['avif_quality'] = $this->avifQuality;
        }
        if (isset($this->_usedProperties['avifLossless'])) {
            $output['avif_lossless'] = $this->avifLossless;
        }
        if (isset($this->_usedProperties['heicQuality'])) {
            $output['heic_quality'] = $this->heicQuality;
        }
        if (isset($this->_usedProperties['heicLossless'])) {
            $output['heic_lossless'] = $this->heicLossless;
        }
        if (isset($this->_usedProperties['jxlQuality'])) {
            $output['jxl_quality'] = $this->jxlQuality;
        }
        if (isset($this->_usedProperties['jxlLossless'])) {
            $output['jxl_lossless'] = $this->jxlLossless;
        }
        if (isset($this->_usedProperties['flatten'])) {
            $output['flatten'] = $this->flatten;
        }
        if (isset($this->_usedProperties['interlace'])) {
            $output['interlace'] = $this->interlace;
        }

        return $output;
    }

}
