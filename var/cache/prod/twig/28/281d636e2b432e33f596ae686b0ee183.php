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

/* @ContaoCore/Error/service_unavailable.html.twig */
class __TwigTemplate_1cb5241038daaad13e9a194526632926 extends Template
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
            'body_end' => [$this, 'block_body_end'],
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
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "@ContaoCore/Error/service_unavailable.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.unavailable", [], "contao_exception"), "contao_html", null, true);
        yield "
";
        return; yield '';
    }

    // line 6
    public function block_matter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <p data-trans=\"XPT.maintenance\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.maintenance", [], "contao_exception"), "contao_html", null, true);
        yield "</p>
";
        return; yield '';
    }

    // line 10
    public function block_body_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "    <script data-labels=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, json_encode(($context["defaultLabels"] ?? null)), "contao_html", null, true);
        yield "\">
        (function (n, d) {
            let language = n.language;
            const data = JSON.parse(d.currentScript.dataset.labels);
            function translate(key) {
                if (data[language] === undefined) {
                    language = new Intl.Locale(language).language;
                    if (data[language] === undefined) {
                        return null;
                    }
                }
                if (data[language][key] === undefined) {
                    return null;
                }
                return data[language][key];
            }
            d.querySelectorAll('[data-trans]').forEach(el => {
                let trans = translate(el.dataset.trans);
                if (trans) {
                    el.textContent = trans;
                }
            });
            let trans = translate('title');
            if (trans) {
                d.title = data[language].title;
            }
        })(navigator, document);
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContaoCore/Error/service_unavailable.html.twig";
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
        return array (  81 => 11,  77 => 10,  69 => 7,  65 => 6,  57 => 4,  53 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ContaoCore/Error/service_unavailable.html.twig", "/var/www/hrm/vendor/contao/core-bundle/templates/Error/service_unavailable.html.twig");
    }
}
