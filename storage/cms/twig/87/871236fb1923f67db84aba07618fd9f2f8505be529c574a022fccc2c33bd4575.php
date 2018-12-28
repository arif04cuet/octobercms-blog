<?php

/* /var/www/html/rnd/laravel/octobercms-blog/themes/blog/partials/header.htm */
class __TwigTemplate_3d4fa82d4a947dc442e8aae1b58376a3c2bd4a25119786e8e76f1ffe72872d2b extends Twig_Template
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
        echo "<div class=\"header\">
    
    <div class=\"container\">
    
        ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    
    </div>
    
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/rnd/laravel/octobercms-blog/themes/blog/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header\">
    
    <div class=\"container\">
    
        {% partial 'navbar' %}
    
    </div>
    
</div>", "/var/www/html/rnd/laravel/octobercms-blog/themes/blog/partials/header.htm", "");
    }
}
