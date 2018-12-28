<?php

/* /var/www/html/rnd/laravel/octobercms-blog/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_d0a2e5cb14ce649bc04e8540182c0ddd824caef0ce7d17b3e868a8614bbdf1dc extends Twig_Template
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
        echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", array());
    }

    public function getTemplateName()
    {
        return "/var/www/html/rnd/laravel/octobercms-blog/plugins/rainlab/pages/components/staticpage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ __SELF__.content|raw }}", "/var/www/html/rnd/laravel/octobercms-blog/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
