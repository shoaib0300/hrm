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

/* @SchebTwoFactor/Authentication/form.html.twig */
class __TwigTemplate_5401d38ec7377eba93be3b402d295703 extends Template
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
        // line 5
        yield "
";
        // line 7
        if (($context["authenticationError"] ?? null)) {
            // line 8
            yield "<p>";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["authenticationError"] ?? null), ($context["authenticationErrorData"] ?? null), "SchebTwoFactorBundle"), "html", null, true);
            yield "</p>
";
        }
        // line 10
        yield "
";
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["availableTwoFactorProviders"] ?? null)) > 1)) {
            // line 13
            yield "    <p>";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("choose_provider", [], "SchebTwoFactorBundle"), "html", null, true);
            yield ":
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["availableTwoFactorProviders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                // line 15
                yield "            <a href=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("2fa_login", ["preferProvider" => $context["provider"]]), "html", null, true);
                yield "\">";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $context["provider"], "html", null, true);
                yield "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "    </p>
";
        }
        // line 19
        yield "
";
        // line 21
        yield "<p class=\"label\"><label for=\"_auth_code\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("auth_code", [], "SchebTwoFactorBundle"), "html", null, true);
        yield " ";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["twoFactorProvider"] ?? null), "html", null, true);
        yield ":</label></p>

<form class=\"form\" action=\"";
        // line 23
        ((($context["checkPathUrl"] ?? null)) ? (yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["checkPathUrl"] ?? null), "html", null, true)) : (yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["checkPathRoute"] ?? null))));
        yield "\" method=\"post\">
    <p class=\"widget\">
        <input
            id=\"_auth_code\"
            type=\"text\"
            name=\"";
        // line 28
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["authCodeParameterName"] ?? null), "html", null, true);
        yield "\"
            autocomplete=\"one-time-code\"
            autofocus
            ";
        // line 37
        yield "        />
    </p>

    ";
        // line 40
        if (($context["displayTrustedOption"] ?? null)) {
            // line 41
            yield "        <p class=\"widget\"><label for=\"_trusted\"><input id=\"_trusted\" type=\"checkbox\" name=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["trustedParameterName"] ?? null), "html", null, true);
            yield "\" /> ";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("trusted", [], "SchebTwoFactorBundle"), "html", null, true);
            yield "</label></p>
    ";
        }
        // line 43
        yield "    ";
        if (($context["isCsrfProtectionEnabled"] ?? null)) {
            // line 44
            yield "        <input type=\"hidden\" name=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["csrfParameterName"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken(($context["csrfTokenId"] ?? null)), "html", null, true);
            yield "\">
    ";
        }
        // line 46
        yield "    <p class=\"submit\"><input type=\"submit\" value=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login", [], "SchebTwoFactorBundle"), "html", null, true);
        yield "\" /></p>
</form>

";
        // line 50
        yield "<p class=\"cancel\"><a href=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["logoutPath"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel", [], "SchebTwoFactorBundle"), "html", null, true);
        yield "</a></p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SchebTwoFactor/Authentication/form.html.twig";
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
        return array (  140 => 50,  133 => 46,  125 => 44,  122 => 43,  114 => 41,  112 => 40,  107 => 37,  101 => 28,  93 => 23,  85 => 21,  82 => 19,  78 => 17,  67 => 15,  63 => 14,  58 => 13,  56 => 12,  53 => 10,  47 => 8,  45 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@SchebTwoFactor/Authentication/form.html.twig", "/var/www/hrm/vendor/scheb/2fa-bundle/Resources/views/Authentication/form.html.twig");
    }
}
