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

/* partials/pagination.html.twig */
class __TwigTemplate_06ac5e97bef99d6479830ed0cd5777528cee13e15aaf1b7ea7a8459db2e5c942 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 2
            if ((($context["base_url"] ?? null) == "")) {
                // line 3
                echo "    ";
                $context["base_url"] = "/";
            }
            // line 5
            echo "<div class=\"units-row\">
    <div class=\"unit-100\">
        <ul class=\"pagination\">
            ";
            // line 8
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", [])) {
                // line 9
                echo "                ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", [])), ["//" => "/"]);
                // line 10
                echo "                <li><a rel=\"prev\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&laquo;</a></li>
            ";
            } else {
                // line 12
                echo "                <li><span>&laquo;</span></li>
            ";
            }
            // line 14
            echo "
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 16
                echo "
                ";
                // line 17
                if ($this->getAttribute($context["paginate"], "isCurrent", [])) {
                    // line 18
                    echo "                    <li><span>";
                    echo $this->getAttribute($context["paginate"], "number", []);
                    echo "</span></li>
                ";
                } elseif ($this->getAttribute(                // line 19
$context["paginate"], "isInDelta", [])) {
                    // line 20
                    echo "                    ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute($context["paginate"], "url", [])), ["//" => "/"]);
                    // line 21
                    echo "                    <li><a href=\"";
                    echo ($context["url"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", []);
                    echo "</a></li>
                ";
                } elseif ($this->getAttribute(                // line 22
$context["paginate"], "isDeltaBorder", [])) {
                    // line 23
                    echo "                    <li class=\"gap\"><span>&hellip;</span></li>
                ";
                }
                // line 25
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
                // line 28
                echo "                ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", [])), ["//" => "/"]);
                // line 29
                echo "                <li><a rel=\"next\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&raquo;</a></li>
            ";
            } else {
                // line 31
                echo "                <li><span>&raquo;</span></li>
            ";
            }
            // line 33
            echo "        </ul>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  112 => 31,  106 => 29,  103 => 28,  100 => 27,  93 => 25,  89 => 23,  87 => 22,  80 => 21,  77 => 20,  75 => 19,  70 => 18,  68 => 17,  65 => 16,  61 => 15,  58 => 14,  54 => 12,  48 => 10,  45 => 9,  43 => 8,  38 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if pagination|length > 1 %}
{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}
<div class=\"units-row\">
    <div class=\"unit-100\">
        <ul class=\"pagination\">
            {% if pagination.hasPrev %}
                {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
                <li><a rel=\"prev\" href=\"{{ url }}\">&laquo;</a></li>
            {% else %}
                <li><span>&laquo;</span></li>
            {% endif %}

            {% for paginate in pagination %}

                {% if paginate.isCurrent %}
                    <li><span>{{ paginate.number }}</span></li>
                {% elseif paginate.isInDelta %}
                    {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
                    <li><a href=\"{{ url }}\">{{ paginate.number }}</a></li>
                {% elseif paginate.isDeltaBorder %}
                    <li class=\"gap\"><span>&hellip;</span></li>
                {% endif %}

            {% endfor %}
            {% if pagination.hasNext %}
                {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
                <li><a rel=\"next\" href=\"{{ url }}\">&raquo;</a></li>
            {% else %}
                <li><span>&raquo;</span></li>
            {% endif %}
        </ul>
    </div>
</div>
{% endif %}
", "partials/pagination.html.twig", "/usr/html/user/themes/saturn/templates/partials/pagination.html.twig");
    }
}
