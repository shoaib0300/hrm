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

/* @ContaoCore/Backend/be_header_menu.html.twig */
class __TwigTemplate_d0143b6481638bc00cef2bad49c64b28 extends Template
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
        yield "<nav aria-label=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.headerNavigation", [], "contao_default"), "contao_html", null, true);
        yield "\">
    <a href=\"";
        // line 3
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "requestUri", [], "any", false, false, false, 3), "contao_html", null, true);
        yield "#skipHeaderNav\" class=\"invisible\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.skipNavigation", [], "contao_default"), "contao_html", null, true);
        yield "</a>
    ";
        // line 4
        yield $this->extensions['Knp\Menu\Twig\MenuExtension']->render("be_header_menu", ["allow_safe_labels" => true]);
        yield "
    <span id=\"skipHeaderNav\" class=\"invisible\"></span>
</nav>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContaoCore/Backend/be_header_menu.html.twig";
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
        return array (  53 => 4,  47 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ContaoCore/Backend/be_header_menu.html.twig", "/var/www/hrm/vendor/contao/core-bundle/templates/Backend/be_header_menu.html.twig");
    }
}
