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

/* @Security/Collector/icon.svg */
class __TwigTemplate_8d1fe6b4e88a663b3aed627f5a9aa3c8 extends Template
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
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-user\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"  role=\"img\">
    <title>Security</title>
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>
    <path d=\"M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2\"></path>
</svg>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Security/Collector/icon.svg";
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
        return new Source("", "@Security/Collector/icon.svg", "/var/www/hrm/vendor/symfony/security-bundle/Resources/views/Collector/icon.svg");
    }
}
