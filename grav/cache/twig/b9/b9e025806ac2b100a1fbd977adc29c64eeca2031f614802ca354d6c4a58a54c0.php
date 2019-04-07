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

/* partials/blog_item.html.twig */
class __TwigTemplate_1bc681857d07dd07d54904639c7d23989af4d73a23e96324ef608e2cad2847a3 extends \Twig\Template
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
        echo "<div class=\"post\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 3
            echo "        <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\"><h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1></a>
        ";
        } else {
            // line 5
            echo "        <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\"> <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1></a>
    ";
        }
        // line 7
        echo "    <hr>
    <div class=\"in-content\">
        ";
        // line 9
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 10
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
            ";
            // line 11
            if ( !($context["truncate"] ?? null)) {
                // line 12
                echo "                ";
                $context["show_prev_next"] = true;
                // line 13
                echo "                ";
            }
            // line 14
            echo "                ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 15
            echo "                ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
                <a class=\"read-more\" href=\"";
            // line 16
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Read more</a>
                ";
        } elseif (        // line 17
($context["truncate"] ?? null)) {
            // line 18
            echo "                ";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
            echo "
                <a class=\"read-more\" href=\"";
            // line 19
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Read more</a>
                ";
        } else {
            // line 21
            echo "                ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                ";
            // line 22
            $context["show_prev_next"] = true;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
    </div>

    <div class=\"foot-post\">
        <div class=\"units-row\">
            <div class=\"unit-100\">
                <strong>Date: </strong>
                <span>";
        // line 31
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []));
        echo "</span> 
            </div>  
            ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", [])) {
            // line 34
            echo "                <div class=\"unit-100\">
                    <strong>Author: </strong>
                    <span>";
            // line 36
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []);
            echo "</span>
                </div>
            ";
        }
        // line 39
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 40
            echo "                <div class=\"unit-100\">
                    <strong>Tags: </strong>
                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 43
                echo "                        <a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ", ";
                }
                echo "  
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </div>
            ";
        }
        // line 47
        echo "        </div>
    </div>

    ";
        // line 50
        if (($context["show_prev_next"] ?? null)) {
            // line 51
            echo "        <p class=\"prev-next\">
            ";
            // line 52
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 53
                echo "                <a class=\"btn btn-black\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\"><i class=\"fa fa-arrow-left\"></i> PREVIOUS</a>
            ";
            }
            // line 55
            echo "
            ";
            // line 56
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 57
                echo "                <a class=\"btn btn-black\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\">NEXT <i class=\"fa fa-arrow-right\"></i></a>
            ";
            }
            // line 59
            echo "        </p>
    ";
        }
        // line 61
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 61,  213 => 59,  207 => 57,  205 => 56,  202 => 55,  196 => 53,  194 => 52,  191 => 51,  189 => 50,  184 => 47,  180 => 45,  154 => 43,  137 => 42,  133 => 40,  130 => 39,  124 => 36,  120 => 34,  118 => 33,  113 => 31,  104 => 24,  101 => 23,  99 => 22,  94 => 21,  89 => 19,  84 => 18,  82 => 17,  78 => 16,  73 => 15,  70 => 14,  67 => 13,  64 => 12,  62 => 11,  57 => 10,  55 => 9,  51 => 7,  43 => 5,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"post\">
    {% if page.header.link %}
        <a href=\"{{ page.header.link }}\"><h1>{{ page.title }}</h1></a>
        {% else %}
        <a href=\"{{ page.url }}\"> <h1>{{ page.title }}</h1></a>
    {% endif %}
    <hr>
    <div class=\"in-content\">
        {% if page.header.continue_link is sameas(false) %}
            {{ page.content }}
            {% if not truncate %}
                {% set show_prev_next = true %}
                {% endif %}
                {% elseif truncate and page.summary != page.content %}
                {{ page.summary }}
                <a class=\"read-more\" href=\"{{ page.url }}\">Read more</a>
                {% elseif truncate %}
                {{ page.content|truncate(550) }}
                <a class=\"read-more\" href=\"{{ page.url }}\">Read more</a>
                {% else %}
                {{ page.content }}
                {% set show_prev_next = true %}
        {% endif %}

    </div>

    <div class=\"foot-post\">
        <div class=\"units-row\">
            <div class=\"unit-100\">
                <strong>Date: </strong>
                <span>{{ page.date|date() }}</span> 
            </div>  
            {% if page.header.author %}
                <div class=\"unit-100\">
                    <strong>Author: </strong>
                    <span>{{ page.header.author }}</span>
                </div>
            {% endif %}
            {% if page.taxonomy.tag %}
                <div class=\"unit-100\">
                    <strong>Tags: </strong>
                    {% for tag in page.taxonomy.tag %}
                        <a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>{% if not loop.last %}, {% endif %}  
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>

    {% if show_prev_next %}
        <p class=\"prev-next\">
            {% if not page.isLast %}
                <a class=\"btn btn-black\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-arrow-left\"></i> PREVIOUS</a>
            {% endif %}

            {% if not page.isFirst %}
                <a class=\"btn btn-black\" href=\"{{ page.nextSibling.url }}\">NEXT <i class=\"fa fa-arrow-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}
</div>
", "partials/blog_item.html.twig", "/usr/html/user/themes/saturn/templates/partials/blog_item.html.twig");
    }
}
