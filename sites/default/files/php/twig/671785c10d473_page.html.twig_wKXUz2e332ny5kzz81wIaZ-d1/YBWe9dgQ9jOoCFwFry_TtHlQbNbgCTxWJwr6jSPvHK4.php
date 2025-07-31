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

/* themes/custom/openplc/templates/page.html.twig */
class __TwigTemplate_c14acd892b3215f7143d03e9922024a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        $context["has_sidebar_first"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 46), 46, $this->source)))));
        // line 47
        $context["has_sidebar_second"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 47), 47, $this->source)))));
        // line 48
        yield "<div class=\"container-fluid\" style=\"background: #e5f5cb;\">
    ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        yield "
    <header role=\"banner\">
      ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        yield "
    </header>

    ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        yield "
    ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        yield "
    ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        yield "
    ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "openplc_corousal", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        yield "

    ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        yield "
    ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        yield "
    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\">
        </a>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    ";
        // line 66
        if ((($context["has_sidebar_first"] ?? null) && ($context["has_sidebar_second"] ?? null))) {
            // line 67
            yield "                        ";
            if (($context["has_sidebar_first"] ?? null)) {
                // line 68
                yield "                                <div class=\"col-sm-3\"  role=\"complementary\">
                                    ";
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                yield "
                                </div>
                        ";
            }
            // line 72
            yield "                            <div class=\"col-sm-6\">
                                ";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            yield "
                            </div>";
            // line 75
            yield "                        ";
            if (($context["has_sidebar_second"] ?? null)) {
                // line 76
                yield "                                <div class=\"col-sm-3\" style=\"float: right;\"  role=\"complementary\">
                                    ";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                yield "
                                </div>
                        ";
            }
            // line 80
            yield "                    ";
        } elseif ((($context["has_sidebar_first"] ?? null) || ($context["has_sidebar_second"] ?? null))) {
            // line 81
            yield "                        ";
            if (($context["has_sidebar_first"] ?? null)) {
                // line 82
                yield "                                <div class=\"col-sm-3\"  role=\"complementary\">
                                    ";
                // line 83
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                yield "
                                </div>
                            <div class=\"col-sm-9\">
                                ";
                // line 86
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                yield "
                            </div>";
                // line 88
                yield "                        ";
            } elseif (($context["has_sidebar_second"] ?? null)) {
                // line 89
                yield "                            <div class=\"col-sm-9\">
                                ";
                // line 90
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                yield "
                            </div>";
                // line 92
                yield "                            <div class=\"col-sm-3\" style=\"float: right;\"  role=\"complementary\">
                                ";
                // line 93
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                yield "
                            </div>
                        ";
            } else {
                // line 96
                yield "                            <div class=\"col-xl-12 \">
                                ";
                // line 97
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                yield "
                            </div>";
                // line 99
                yield "                        ";
            }
            // line 100
            yield "                    ";
        } else {
            // line 101
            yield "                        <div class=\"col-xl-12 \">
                            ";
            // line 102
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            yield "
                        </div>";
            // line 104
            yield "                    ";
        }
        // line 105
        yield "                </div>
            </div>
    </main>
    ";
        // line 109
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/openplc/templates/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  187 => 109,  182 => 105,  179 => 104,  175 => 102,  172 => 101,  169 => 100,  166 => 99,  162 => 97,  159 => 96,  153 => 93,  150 => 92,  146 => 90,  143 => 89,  140 => 88,  136 => 86,  130 => 83,  127 => 82,  124 => 81,  121 => 80,  115 => 77,  112 => 76,  109 => 75,  105 => 73,  102 => 72,  96 => 69,  93 => 68,  90 => 67,  88 => 66,  79 => 60,  75 => 59,  70 => 57,  66 => 56,  62 => 55,  58 => 54,  52 => 51,  47 => 49,  44 => 48,  42 => 47,  40 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/openplc/templates/page.html.twig", "/var/www/html/openplc_10/themes/custom/openplc/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 46, "if" => 66);
        static $filters = array("trim" => 46, "striptags" => 46, "render" => 46, "escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['trim', 'striptags', 'render', 'escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
