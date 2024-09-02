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

/* @ContaoCore/Backend/be_filesync_report.html.twig */
class __TwigTemplate_a4e65675b760909a020b4bdfba038149 extends Template
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
        // line 2
        yield "
";
        // line 4
        yield "<div class=\"tl_message\">
    <p class=\"tl_confirm\">";
        // line 5
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncComplete", [], "contao_tl_files"), "contao_html", null, true);
        yield "</p>
</div>
<div id=\"tl_buttons\">
    <a href=\"";
        // line 8
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["referer"] ?? null), "contao_html", null, true);
        yield "\" class=\"header_back\" title=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.backBTTitle", [], "contao_default"), "contao_html", null, true);
        yield "\" accesskey=\"b\" data-action=\"contao--scroll-offset#discard\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.backBT", [], "contao_default"), "contao_html", null, true);
        yield "</a>
</div>

";
        // line 12
        yield "<div id=\"result-list\">
    ";
        // line 13
        $context["modified"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToUpdate", [], "any", false, false, false, 13), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "updatesHash", [], "any", false, false, false, 13); });
        // line 14
        yield "    ";
        $context["moved"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToUpdate", [], "any", false, false, false, 14), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "updatesPath", [], "any", false, false, false, 14); });
        // line 15
        yield "
    <p>";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncResult", [Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToCreate", [], "any", false, false, false, 16)), Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["modified"] ?? null)), "-", Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["moved"] ?? null)), Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToDelete", [], "any", false, false, false, 16))], "contao_tl_files");
        yield "</p>

    ";
        // line 19
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToCreate", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            yield "        <p class=\"tl_new\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncAdded", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 20)], "contao_tl_files"), "contao_html", null, true);
            yield "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
    ";
        // line 24
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["modified"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            yield "        <p class=\"tl_info\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncChanged", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "existingPath", [], "any", false, false, false, 25)], "contao_tl_files"), "contao_html", null, true);
            yield "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
    ";
        // line 29
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["moved"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            yield "        <p class=\"tl_info\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncMoved", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "existingPath", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "newPath", [], "any", false, false, false, 30)], "contao_tl_files"), "contao_html", null, true);
            yield "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
    ";
        // line 34
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToDelete", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            yield "        <p class=\"tl_error\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncDeleted", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 35)], "contao_tl_files"), "contao_html", null, true);
            yield "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "</div>

";
        // line 40
        yield "<div class=\"tl_formbody_submit\">
    <div class=\"tl_submit_container\">
        <a href=\"";
        // line 42
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["referer"] ?? null), "contao_html", null, true);
        yield "\" class=\"tl_submit\" style=\"display:inline-block\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.continue", [], "contao_default"), "contao_html", null, true);
        yield "</a>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContaoCore/Backend/be_filesync_report.html.twig";
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
        return array (  153 => 42,  149 => 40,  145 => 37,  136 => 35,  131 => 34,  128 => 32,  119 => 30,  114 => 29,  111 => 27,  102 => 25,  97 => 24,  94 => 22,  85 => 20,  80 => 19,  75 => 16,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  54 => 8,  48 => 5,  45 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ContaoCore/Backend/be_filesync_report.html.twig", "/var/www/hrm/vendor/contao/core-bundle/templates/Backend/be_filesync_report.html.twig");
    }
}
