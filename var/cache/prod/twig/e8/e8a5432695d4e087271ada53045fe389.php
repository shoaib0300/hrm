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

/* @email/zurb_2/notification/body.txt.twig */
class __TwigTemplate_c8cb720fb798bc43b01901876d6bcecf extends Template
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
            'lead' => [$this, 'block_lead'],
            'content' => [$this, 'block_content'],
            'action' => [$this, 'block_action'],
            'exception' => [$this, 'block_exception'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('lead', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('action', $context, $blocks);
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('exception', $context, $blocks);
        return; yield '';
    }

    // line 1
    public function block_lead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["email"] ?? null), "subject", [], "any", false, false, false, 2);
        yield "
";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield ($context["content"] ?? null);
        yield "
";
        return; yield '';
    }

    // line 9
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        if (($context["action_url"] ?? null)) {
            // line 11
            yield ($context["action_text"] ?? null);
            yield ": ";
            yield ($context["action_url"] ?? null);
            yield "
";
        }
        return; yield '';
    }

    // line 15
    public function block_exception($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        if (($context["exception"] ?? null)) {
            // line 17
            yield "Exception stack trace attached.
";
            // line 18
            yield ($context["exception"] ?? null);
            yield "
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@email/zurb_2/notification/body.txt.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  113 => 18,  110 => 17,  108 => 16,  104 => 15,  94 => 11,  92 => 10,  88 => 9,  81 => 6,  77 => 5,  70 => 2,  66 => 1,  61 => 15,  58 => 14,  56 => 9,  53 => 8,  51 => 5,  48 => 4,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@email/zurb_2/notification/body.txt.twig", "/var/www/hrm/vendor/symfony/twig-bridge/Resources/views/Email/zurb_2/notification/body.txt.twig");
    }
}
