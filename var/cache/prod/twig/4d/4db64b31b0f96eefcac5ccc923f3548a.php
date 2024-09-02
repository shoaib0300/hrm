<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @ContaoCore/Collector/contao.svg */
class __TwigTemplate_09e8cb42c65007dbf50fbaf8fe7e97fc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" viewBox=\"-272 399 49.9 44.1\"><path d=\"M-268.723 399.17c-1.875 0-3.25 1.5-3.25 3.25v37.25c0 1.874 1.5 3.25 3.25 3.25h7.75c-4.125-4.5-5.25-10.75-6.625-17.25-1.75-8-3.5-15.5.875-22.376 1-1.625 2.25-3 3.625-4.25l-5.624.125zm34.625 0c2.125 2.124 3.875 4.874 5.125 8.25l-13.375 2.874c-1.5-2.875-3.75-5.25-8-4.25-2.375.5-4 1.875-4.75 3.375-.875 1.873-1.25 3.873.75 13.623 2.125 9.75 3.25 11.5 4.875 12.875 1.25 1.124 3.25 1.624 5.625 1.124 4.375-.875 5.5-4 5.625-7.125l13.375-2.876c.375 7-1.875 12.376-5.625 16.126h5.125c1.875 0 3.25-1.5 3.25-3.25v-37.25c0-1.876-1.5-3.25-3.25-3.25l-8.75-.25z\" fill=\"#fff\"/></svg>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContaoCore/Collector/contao.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ContaoCore/Collector/contao.svg", "/var/www/hrm/vendor/contao/core-bundle/templates/Collector/contao.svg");
    }
}
