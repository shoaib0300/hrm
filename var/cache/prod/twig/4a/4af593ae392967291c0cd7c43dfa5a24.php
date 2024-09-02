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

/* @ContaoCore/Error/backend.html.twig */
class __TwigTemplate_6e99ac9f0be10a7b54fe231d489fa605 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@ContaoCore/Error/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "@ContaoCore/Error/backend.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["statusName"] ?? null), "contao_html", null, true);
        yield "
";
        return; yield '';
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <h2>";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.matter", [], "contao_exception"), "contao_html", null, true);
        yield "</h2>
    <p>";
        // line 8
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["exception"] ?? null), "contao_html", null, true);
        yield "</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContaoCore/Error/backend.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  73 => 8,  68 => 7,  64 => 6,  56 => 4,  52 => 3,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ContaoCore/Error/backend.html.twig", "/var/www/hrm/vendor/contao/core-bundle/templates/Error/backend.html.twig");
    }
}
