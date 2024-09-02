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

/* knp_menu_ordered.html.twig */
class __TwigTemplate_90dcf52f111f9c45ab433a8da2f78d0f extends Template
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
            'list' => [$this, 'block_list'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 4)->unwrap();
        // line 5
        yield "
";
        // line 6
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 6) &&  !(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 6) === 0)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 6))) {
            // line 7
            yield "    <ol";
            yield CoreExtension::callMacro($macros["macros"], "macro_attributes", [($context["listAttributes"] ?? null)], 7, $context, $this->getSourceContext());
            yield ">
        ";
            // line 8
            yield from             $this->unwrap()->yieldBlock("children", $context, $blocks);
            yield "
    </ol>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "knp_menu_ordered.html.twig";
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
        return array (  67 => 8,  62 => 7,  60 => 6,  57 => 5,  55 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "knp_menu_ordered.html.twig", "/var/www/hrm/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_ordered.html.twig");
    }
}
