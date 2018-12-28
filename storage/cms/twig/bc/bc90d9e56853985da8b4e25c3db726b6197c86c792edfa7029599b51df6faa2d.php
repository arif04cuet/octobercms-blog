<?php

/* /var/www/html/rnd/laravel/octobercms/themes/blog/partials/nav-items.htm */
class __TwigTemplate_22475d8df06c332ef1ec67b9ec6732138cb96fe6b6708146cbcfddb224fcabd3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "

";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                // line 5
                echo "
<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
        aria-expanded=\"false\">
        ";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    echo "
        <a class=\"dropdown-item\" href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                    echo "</a>

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "    </div>
</li>


";
            } else {
                // line 23
                echo "

<li class=\"nav-item ";
                // line 25
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                echo "\">
    <a class=\"nav-link\" href=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "</a>
</li>


";
            }
            // line 31
            echo "


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/rnd/laravel/octobercms/themes/blog/partials/nav-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  79 => 26,  75 => 25,  71 => 23,  64 => 18,  53 => 15,  50 => 14,  46 => 13,  39 => 9,  33 => 5,  31 => 4,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in items %}


{% if(item.items) %}

<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
        aria-expanded=\"false\">
        {{item.title}}
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

        {% for item in item.items %}

        <a class=\"dropdown-item\" href=\"{{item.url}}\">{{item.title}}</a>

        {% endfor%}
    </div>
</li>


{% else %}


<li class=\"nav-item {{ item.isActive ? 'active' : '' }}\">
    <a class=\"nav-link\" href=\"{{ item.url }}\">{{ item.title }}</a>
</li>


{% endif %}



{% endfor %}", "/var/www/html/rnd/laravel/octobercms/themes/blog/partials/nav-items.htm", "");
    }
}
