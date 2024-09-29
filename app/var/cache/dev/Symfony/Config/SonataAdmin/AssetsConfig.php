<?php

namespace Symfony\Config\SonataAdmin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AssetsConfig 
{
    private $stylesheets;
    private $extraStylesheets;
    private $removeStylesheets;
    private $javascripts;
    private $extraJavascripts;
    private $removeJavascripts;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function stylesheets(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['stylesheets'] = true;
        $this->stylesheets = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function extraStylesheets(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['extraStylesheets'] = true;
        $this->extraStylesheets = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function removeStylesheets(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['removeStylesheets'] = true;
        $this->removeStylesheets = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function javascripts(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['javascripts'] = true;
        $this->javascripts = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function extraJavascripts(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['extraJavascripts'] = true;
        $this->extraJavascripts = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function removeJavascripts(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['removeJavascripts'] = true;
        $this->removeJavascripts = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('stylesheets', $value)) {
            $this->_usedProperties['stylesheets'] = true;
            $this->stylesheets = $value['stylesheets'];
            unset($value['stylesheets']);
        }

        if (array_key_exists('extra_stylesheets', $value)) {
            $this->_usedProperties['extraStylesheets'] = true;
            $this->extraStylesheets = $value['extra_stylesheets'];
            unset($value['extra_stylesheets']);
        }

        if (array_key_exists('remove_stylesheets', $value)) {
            $this->_usedProperties['removeStylesheets'] = true;
            $this->removeStylesheets = $value['remove_stylesheets'];
            unset($value['remove_stylesheets']);
        }

        if (array_key_exists('javascripts', $value)) {
            $this->_usedProperties['javascripts'] = true;
            $this->javascripts = $value['javascripts'];
            unset($value['javascripts']);
        }

        if (array_key_exists('extra_javascripts', $value)) {
            $this->_usedProperties['extraJavascripts'] = true;
            $this->extraJavascripts = $value['extra_javascripts'];
            unset($value['extra_javascripts']);
        }

        if (array_key_exists('remove_javascripts', $value)) {
            $this->_usedProperties['removeJavascripts'] = true;
            $this->removeJavascripts = $value['remove_javascripts'];
            unset($value['remove_javascripts']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['stylesheets'])) {
            $output['stylesheets'] = $this->stylesheets;
        }
        if (isset($this->_usedProperties['extraStylesheets'])) {
            $output['extra_stylesheets'] = $this->extraStylesheets;
        }
        if (isset($this->_usedProperties['removeStylesheets'])) {
            $output['remove_stylesheets'] = $this->removeStylesheets;
        }
        if (isset($this->_usedProperties['javascripts'])) {
            $output['javascripts'] = $this->javascripts;
        }
        if (isset($this->_usedProperties['extraJavascripts'])) {
            $output['extra_javascripts'] = $this->extraJavascripts;
        }
        if (isset($this->_usedProperties['removeJavascripts'])) {
            $output['remove_javascripts'] = $this->removeJavascripts;
        }

        return $output;
    }

}
