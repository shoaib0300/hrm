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

/* @ContaoCore/Image/Studio/_macros.html.twig */
class __TwigTemplate_710dd75b387dfefba4b50f68e824b1f7 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 42
        yield "
";
        // line 101
        yield "
";
        return; yield '';
    }

    // line 49
    public function macro_figure($__figure__ = null, $__options__ = [], $__addSchemaOrg__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "figure" => $__figure__,
            "options" => $__options__,
            "addSchemaOrg" => $__addSchemaOrg__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 50
            $context["figure_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 50), "attr", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 50), "attr", [], "any", false, false, false, 50), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", false, false, false, 50), [])) : ([])));
            // line 51
            $context["link_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 51), "link_attr", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 51), "link_attr", [], "any", false, false, false, 51), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link_attr", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link_attr", [], "any", false, false, false, 51), [])) : ([])));
            yield "
    <figure";
            // line 52
            yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [($context["figure_attributes"] ?? null)], 52, $context, $this->getSourceContext());
            yield ">
        ";
            // line 53
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "linkHref", [], "any", false, false, false, 53)) {
                // line 54
                $context["base_attributes"] = Twig\Extension\CoreExtension::merge(["href" => CoreExtension::getAttribute($this->env, $this->source,                 // line 55
($context["figure"] ?? null), "linkHref", [], "any", false, false, false, 55), "title" => (((CoreExtension::getAttribute($this->env, $this->source,                 // line 56
($context["figure"] ?? null), "hasLightbox", [], "any", false, false, false, 56) && CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 56))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56)) : (null))], CoreExtension::getAttribute($this->env, $this->source,                 // line 57
($context["figure"] ?? null), "linkAttributes", [], "any", false, false, false, 57));
                // line 58
                yield "<a";
                yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [Twig\Extension\CoreExtension::merge(($context["base_attributes"] ?? null), ($context["link_attributes"] ?? null))], 58, $context, $this->getSourceContext());
                yield ">
";
                // line 59
                yield CoreExtension::callMacro($macros["_self"], "macro_picture", [($context["figure"] ?? null), ($context["options"] ?? null)], 59, $context, $this->getSourceContext());
                yield "
            </a>";
            } else {
                // line 62
                yield CoreExtension::callMacro($macros["_self"], "macro_picture", [($context["figure"] ?? null), ($context["options"] ?? null)], 62, $context, $this->getSourceContext());
            }
            // line 64
            yield "        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_caption", [($context["figure"] ?? null), ($context["options"] ?? null)], 64, $context, $this->getSourceContext());
            yield "
    </figure>
    ";
            // line 66
            if (($context["addSchemaOrg"] ?? null)) {
                // line 67
                $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\SchemaOrgRuntime')->add(CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "schemaOrgData", [], "any", false, false, false, 67));
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 76
    public function macro_picture($__figure__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "figure" => $__figure__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 77
            $context["picture_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 77), "picture_attr", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 77), "picture_attr", [], "any", false, false, false, 77), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "picture_attr", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "picture_attr", [], "any", false, false, false, 77), [])) : ([])));
            // line 78
            $context["source_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 78), "source_attr", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 78), "source_attr", [], "any", false, false, false, 78), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "source_attr", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "source_attr", [], "any", false, false, false, 78), [])) : ([])));
            // line 80
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 80), "sources", [], "any", false, false, false, 80)) {
                // line 81
                yield "<picture";
                yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [($context["picture_attributes"] ?? null)], 81, $context, $this->getSourceContext());
                yield ">
            ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 82), "sources", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                    // line 83
                    $context["define_proportions"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["source"], "width", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "width", [], "any", false, false, false, 83), false)) : (false)) && ((CoreExtension::getAttribute($this->env, $this->source, $context["source"], "height", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "height", [], "any", false, false, false, 83), false)) : (false)));
                    // line 84
                    $context["base_attributes"] = ["srcset" => CoreExtension::getAttribute($this->env, $this->source,                     // line 85
$context["source"], "srcset", [], "any", false, false, false, 85), "sizes" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 86
$context["source"], "sizes", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "sizes", [], "any", false, false, false, 86), null)) : (null)), "media" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 87
$context["source"], "media", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "media", [], "any", false, false, false, 87), null)) : (null)), "type" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 88
$context["source"], "type", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "type", [], "any", false, false, false, 88), null)) : (null)), "width" => ((                    // line 89
($context["define_proportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["source"], "width", [], "any", false, false, false, 89)) : (null)), "height" => ((                    // line 90
($context["define_proportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["source"], "height", [], "any", false, false, false, 90)) : (null))];
                    // line 92
                    yield "<source";
                    yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [Twig\Extension\CoreExtension::merge(($context["base_attributes"] ?? null), ($context["source_attributes"] ?? null))], 92, $context, $this->getSourceContext());
                    yield ">";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                yield "
            ";
                // line 95
                yield CoreExtension::callMacro($macros["_self"], "macro_img", [($context["figure"] ?? null), ($context["options"] ?? null)], 95, $context, $this->getSourceContext());
                yield "
        </picture>";
            } else {
                // line 98
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_img", [($context["figure"] ?? null), ($context["options"] ?? null)], 98, $context, $this->getSourceContext());
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 105
    public function macro_img($__figure__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "figure" => $__figure__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 106
            $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 107
                yield "        ";
                $context["img_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 107), "img_attr", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 107), "img_attr", [], "any", false, false, false, 107), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "img_attr", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "img_attr", [], "any", false, false, false, 107), [])) : ([])));
                // line 108
                yield "
        ";
                // line 109
                $context["img"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 109), "img", [], "any", false, false, false, 109);
                // line 110
                yield "        ";
                $context["define_proportions"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", false, false, false, 110), false)) : (false)) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", false, false, false, 110), false)) : (false)));
                // line 111
                yield "
        ";
                // line 112
                $context["base_attributes"] = ["src" => CoreExtension::getAttribute($this->env, $this->source,                 // line 113
($context["img"] ?? null), "src", [], "any", false, false, false, 113), "alt" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 114
($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 114)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 114), "alt", [], "any", false, false, false, 114)) : ("")), "title" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 115
($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 115)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 115), "title", [], "any", false, false, false, 115)) ?: (null))) : (null)), "srcset" => (((CoreExtension::getAttribute($this->env, $this->source,                 // line 116
($context["img"] ?? null), "srcset", [], "any", true, true, false, 116) && (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "srcset", [], "any", false, false, false, 116) != CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "src", [], "any", false, false, false, 116)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "srcset", [], "any", false, false, false, 116)) : (null)), "sizes" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 117
($context["img"] ?? null), "sizes", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "sizes", [], "any", false, false, false, 117), null)) : (null)), "width" => ((                // line 118
($context["define_proportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", false, false, false, 118)) : (null)), "height" => ((                // line 119
($context["define_proportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", false, false, false, 119)) : (null)), "loading" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 120
($context["img"] ?? null), "loading", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "loading", [], "any", false, false, false, 120), null)) : (null)), "class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 121
($context["img"] ?? null), "class", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "class", [], "any", false, false, false, 121), null)) : (null))];
                // line 123
                yield "        <img";
                yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [Twig\Extension\CoreExtension::merge(($context["base_attributes"] ?? null), ($context["img_attributes"] ?? null))], 123, $context, $this->getSourceContext());
                yield ">
    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            yield Twig\Extension\CoreExtension::spaceless($___internal_parse_0_);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 132
    public function macro_caption($__figure__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "figure" => $__figure__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 133
            $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 134
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 134) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 134), "caption", [], "any", false, false, false, 134))) {
                    // line 135
                    yield "            ";
                    $context["caption_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 135), "caption_attr", [], "any", true, true, false, 135)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 135), "caption_attr", [], "any", false, false, false, 135), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "caption_attr", [], "any", true, true, false, 135)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "caption_attr", [], "any", false, false, false, 135), [])) : ([])));
                    // line 136
                    yield "            <figcaption";
                    yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [($context["caption_attributes"] ?? null)], 136, $context, $this->getSourceContext());
                    yield ">";
                    // line 137
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 137), "caption", [], "any", false, false, false, 137);
                    // line 138
                    yield "</figcaption>
        ";
                }
                // line 140
                yield "    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 133
            yield Twig\Extension\CoreExtension::spaceless($___internal_parse_1_);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 153
    public function macro_html_attributes($__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["attributes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !(null === ($context["v"] ?? null)); }));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 155
                yield $this->env->getFilter('escape')->getCallable()($this->env, (" " . $context["attr"]), "contao_html", null, true);
                if ($context["value"]) {
                    yield "=\"";
                    yield $this->env->getFilter('escape')->getCallable()($this->env, $context["value"], "contao_html", null, true);
                    yield "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContaoCore/Image/Studio/_macros.html.twig";
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
        return array (  286 => 155,  282 => 154,  270 => 153,  264 => 133,  260 => 140,  256 => 138,  254 => 137,  250 => 136,  247 => 135,  244 => 134,  242 => 133,  229 => 132,  223 => 106,  216 => 123,  214 => 121,  213 => 120,  212 => 119,  211 => 118,  210 => 117,  209 => 116,  208 => 115,  207 => 114,  206 => 113,  205 => 112,  202 => 111,  199 => 110,  197 => 109,  194 => 108,  191 => 107,  189 => 106,  176 => 105,  168 => 98,  163 => 95,  160 => 94,  152 => 92,  150 => 90,  149 => 89,  148 => 88,  147 => 87,  146 => 86,  145 => 85,  144 => 84,  142 => 83,  138 => 82,  133 => 81,  131 => 80,  129 => 78,  127 => 77,  114 => 76,  107 => 67,  105 => 66,  99 => 64,  96 => 62,  91 => 59,  86 => 58,  84 => 57,  83 => 56,  82 => 55,  81 => 54,  79 => 53,  75 => 52,  71 => 51,  69 => 50,  55 => 49,  49 => 101,  46 => 42,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ContaoCore/Image/Studio/_macros.html.twig", "/var/www/hrm/vendor/contao/core-bundle/templates/Image/Studio/_macros.html.twig");
    }
}
