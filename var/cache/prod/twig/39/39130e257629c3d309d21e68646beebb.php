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

/* @ContaoCore/Error/missing_route_parameters.html.twig */
class __TwigTemplate_eb482dd8be123ab3e9d9175410a01150 extends Template
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
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "@ContaoCore/Error/missing_route_parameters.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.missingRouteParameters.title", [], "contao_exception"), "contao_html", null, true);
        yield "
";
        return; yield '';
    }

    // line 7
    public function block_matter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <p>";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.missingRouteParameters.matter", [], "contao_exception"), "contao_html", null, true);
        yield "</p>
";
        return; yield '';
    }

    // line 10
    public function block_explain($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "    <p>";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.missingRouteParameters.explain", [], "contao_exception"), "contao_html", null, true);
        yield "</p>
    <p>";
        // line 12
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.missingRouteParameters.path", [], "contao_exception"), "contao_html", null, true);
        yield ": <code>";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["throwable"] ?? null), "route", [], "any", false, false, false, 12), "path", [], "any", false, false, false, 12), "contao_html", null, true);
        yield "</code></p>
    <table>
        <thead>
        <tr>
            <th>";
        // line 16
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.missingRouteParameters.parameterName", [], "contao_exception"), "contao_html", null, true);
        yield "</th>
            <th>";
        // line 17
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.missingRouteParameters.parameterRequirement", [], "contao_exception"), "contao_html", null, true);
        yield "</th>
            <th>";
        // line 18
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.missingRouteParameters.parameterDefault", [], "contao_exception"), "contao_html", null, true);
        yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["throwable"] ?? null), "route", [], "any", false, false, false, 22), "requirements", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["variable"] => $context["requirement"]) {
            // line 23
            yield "            <tr>
                <td>";
            // line 24
            yield $this->env->getFilter('escape')->getCallable()($this->env, $context["variable"], "contao_html", null, true);
            yield "</td>
                <td><code>";
            // line 25
            yield $this->env->getFilter('escape')->getCallable()($this->env, $context["requirement"], "contao_html", null, true);
            yield "</code></td>
                <td>";
            // line 26
            if (Twig\Extension\CoreExtension::testEmpty((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["throwable"] ?? null), "route", [], "any", false, false, false, 26), "defaults", [], "any", false, false, false, 26)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["variable"]] ?? null) : null))) {
                yield "<i>";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.missingRouteParameters.parameterEmpty", [], "contao_exception"), "contao_html", null, true);
                yield "</i>";
            } else {
                yield $this->env->getFilter('escape')->getCallable()($this->env, (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["throwable"] ?? null), "route", [], "any", false, false, false, 26), "defaults", [], "any", false, false, false, 26)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["variable"]] ?? null) : null), "contao_html", null, true);
            }
            yield "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['variable'], $context['requirement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "        </tbody>
    </table>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContaoCore/Error/missing_route_parameters.html.twig";
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
        return array (  140 => 29,  125 => 26,  121 => 25,  117 => 24,  114 => 23,  110 => 22,  103 => 18,  99 => 17,  95 => 16,  86 => 12,  81 => 11,  77 => 10,  69 => 8,  65 => 7,  57 => 5,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ContaoCore/Error/missing_route_parameters.html.twig", "/var/www/hrm/vendor/contao/core-bundle/templates/Error/missing_route_parameters.html.twig");
    }
}
