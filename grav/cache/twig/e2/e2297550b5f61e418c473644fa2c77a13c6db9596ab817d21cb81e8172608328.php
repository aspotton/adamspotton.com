<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_09d68641fa2fa07b777720e7b7db99348efc09b90f1e1d18815a63b63e7f2a4b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) : ("en"));
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "    </head>
    <body class=\"";
        // line 27
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

        <div class=\"main-nav\">
            <div class=\"container\">
                <header class=\"group top-nav\">
                    <nav class=\"navbar logo-w navbar-left\" >
                        <a class=\"logo\" href=\"";
        // line 33
        echo ($context["base_url_absolute"] ?? null);
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a>
                    </nav>
                    <div class=\"navigation-toggle\" data-tools=\"navigation-toggle\" data-target=\"#navbar-1\">
                        <span class=\"logo\">";
        // line 36
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</span>
                    </div>
                     ";
        // line 38
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 38)->display($context);
        // line 39
        echo "                </header>
            </div>
        </div>

        <div class=\"intro\">
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-10\">
                        <img class=\"img-intro\" src=\"";
        // line 47
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute(($context["site"] ?? null), "intro_avatar", [])));
        echo "\" alt=\"\">
                    </div>
                    <div class=\"unit-90\">
                        <p class=\"p-intro\">";
        // line 50
        echo $this->getAttribute(($context["site"] ?? null), "intro", []);
        echo "</p>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
        <footer>
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-50\">
                        <p class=\"text-centered foot-cp\">
                            <a href=\"";
        // line 69
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", []);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "footer", []);
        echo "</a>
                        </p>
                    </div>
                    <div class=\"unit-50\">
                        <ul class=\"social list-flat right\">
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["item"], "link", []);
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["item"], "icon", []);
            echo "\"></i></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        </ul>
                    </div>
                    <p class=\"text-centered foot-cp\">
                        <a href=\"";
        // line 80
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url2", []);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "footer2", []);
        echo "</a>
                    </p>
                </div>
            </div>
        </footer>

    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />

        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\">
        ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        // line 12
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 13
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/kube.min.js"], "method");
        // line 14
        echo "        ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 17
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/kube.min.css"], "method");
        // line 18
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css"], "method");
        // line 19
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.min.css"], "method");
        // line 20
        echo "        ";
    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        // line 57
        echo "            <div class=\"content\">
                <div class=\"container\">
                    ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "                </div>
            </div>
        ";
    }

    // line 59
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 59,  233 => 60,  231 => 59,  227 => 57,  224 => 56,  220 => 20,  217 => 19,  214 => 18,  211 => 17,  208 => 16,  204 => 14,  201 => 13,  198 => 12,  195 => 11,  185 => 21,  183 => 16,  178 => 15,  176 => 11,  171 => 9,  168 => 8,  166 => 7,  158 => 6,  155 => 5,  152 => 4,  137 => 80,  132 => 77,  121 => 75,  117 => 74,  107 => 69,  99 => 63,  97 => 56,  88 => 50,  82 => 47,  72 => 39,  70 => 38,  65 => 36,  57 => 33,  48 => 27,  45 => 26,  43 => 4,  38 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon.png') }}\" />

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/kube.min.js') %}
        {% endblock %}
        {{ assets.js() }}
        {% block stylesheets %}
            {% do assets.addCss('theme://css/kube.min.css') %}
            {% do assets.addCss('theme://css/font-awesome.min.css') %}
            {% do assets.addCss('theme://css/custom.min.css') %}
        {% endblock %}
        {{ assets.css() }}

        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock head%}
    </head>
    <body class=\"{{ page.header.body_classes }}\">

        <div class=\"main-nav\">
            <div class=\"container\">
                <header class=\"group top-nav\">
                    <nav class=\"navbar logo-w navbar-left\" >
                        <a class=\"logo\" href=\"{{ base_url_absolute }}\">{{ site.title }}</a>
                    </nav>
                    <div class=\"navigation-toggle\" data-tools=\"navigation-toggle\" data-target=\"#navbar-1\">
                        <span class=\"logo\">{{ site.title }}</span>
                    </div>
                     {% include 'partials/navigation.html.twig' %}
                </header>
            </div>
        </div>

        <div class=\"intro\">
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-10\">
                        <img class=\"img-intro\" src=\"{{ url('theme://img/' ~ site.intro_avatar ) }}\" alt=\"\">
                    </div>
                    <div class=\"unit-90\">
                        <p class=\"p-intro\">{{ site.intro }}</p>
                    </div>
                </div>
            </div>
        </div>

        {% block body %}
            <div class=\"content\">
                <div class=\"container\">
                    {% block content %}{% endblock %}
                </div>
            </div>
        {% endblock %}

        <footer>
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-50\">
                        <p class=\"text-centered foot-cp\">
                            <a href=\"{{ site.author.url }}\">{{ site.author.footer }}</a>
                        </p>
                    </div>
                    <div class=\"unit-50\">
                        <ul class=\"social list-flat right\">
                        {% for item in site.social %}
                            <li><a href=\"{{ item.link }}\"><i class=\"fa fa-{{ item.icon }}\"></i></a></li>
                        {% endfor %}
                        </ul>
                    </div>
                    <p class=\"text-centered foot-cp\">
                        <a href=\"{{ site.author.url2}}\">{{ site.author.footer2 }}</a>
                    </p>
                </div>
            </div>
        </footer>

    </body>
</html>
", "partials/base.html.twig", "/usr/html/user/themes/saturn/templates/partials/base.html.twig");
    }
}
