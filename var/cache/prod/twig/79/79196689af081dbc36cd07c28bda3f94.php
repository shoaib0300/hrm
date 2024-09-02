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

/* @ContaoCore/Backend/be_menu.html.twig */
class __TwigTemplate_ad0a99c528b45cc5431fe4b05084396b extends Template
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
        yield "<nav
    id=\"tl_navigation\"
    data-controller=\"contao--toggle-navigation\"
    data-contao--toggle-navigation-collapsed-class=\"collapsed\"
    data-contao--toggle-navigation-url-value=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contao_backend");
        yield "\"
    data-contao--toggle-navigation-request-token-value=\"";
        // line 7
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["request_token"] ?? null), "contao_html", null, true);
        yield "\"
    data-contao--toggle-navigation-expand-title-value=\"";
        // line 8
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.expandNode", [], "contao_default"), "contao_html", null, true);
        yield "\"
    data-contao--toggle-navigation-collapse-title-value=\"";
        // line 9
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.collapseNode", [], "contao_default"), "contao_html", null, true);
        yield "\"
    aria-label=\"";
        // line 10
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.mainNavigation", [], "contao_default"), "contao_html", null, true);
        yield "\"
>
    <a href=\"";
        // line 12
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "requestUri", [], "any", false, false, false, 12), "contao_html", null, true);
        yield "#skipMainNav\" class=\"invisible\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.skipNavigation", [], "contao_default"), "contao_html", null, true);
        yield "</a>
    ";
        // line 13
        yield $this->extensions['Knp\Menu\Twig\MenuExtension']->render("be_menu");
        yield "
    <span id=\"skipMainNav\" class=\"invisible\"></span>
</nav>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContaoCore/Backend/be_menu.html.twig";
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
        return array (  75 => 13,  69 => 12,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ContaoCore/Backend/be_menu.html.twig", "/var/www/hrm/vendor/contao/core-bundle/templates/Backend/be_menu.html.twig");
    }
}
