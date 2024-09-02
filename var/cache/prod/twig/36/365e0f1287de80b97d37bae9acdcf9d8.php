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

/* @ContaoCore/Error/invalid_request_token.html.twig */
class __TwigTemplate_5c702a95e2d6e48731b256fcb10c699d extends Template
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
            'matter' => [$this, 'block_matter'],
            'howToFix' => [$this, 'block_howToFix'],
            'explain' => [$this, 'block_explain'],
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
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "@ContaoCore/Error/invalid_request_token.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.requestToken", [], "contao_exception"), "contao_html", null, true);
        yield "
";
        return; yield '';
    }

    // line 6
    public function block_matter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <p>";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.invalidToken", [], "contao_exception"), "contao_html", null, true);
        yield "</p>
";
        return; yield '';
    }

    // line 9
    public function block_howToFix($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "    <p><a href=\"javascript:window.location.href=window.location.href\" class=\"button\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.tokenReload", [], "contao_exception"), "contao_html", null, true);
        yield "</a></p>
    <p>";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.tokenRetry", [], "contao_exception");
        yield "</p>
";
        return; yield '';
    }

    // line 13
    public function block_explain($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        yield "    <p>";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.tokenExplainOne", [], "contao_exception");
        yield "</p>
    <p>";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.tokenExplainTwo", ["https://to.contao.org/support"], "contao_exception");
        yield "</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContaoCore/Error/invalid_request_token.html.twig";
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
        return array (  103 => 15,  98 => 14,  94 => 13,  87 => 11,  82 => 10,  78 => 9,  70 => 7,  66 => 6,  58 => 4,  54 => 3,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ContaoCore/Error/invalid_request_token.html.twig", "/var/www/hrm/vendor/contao/core-bundle/templates/Error/invalid_request_token.html.twig");
    }
}
