<?php

/* /var/www/html/rnd/laravel/octobercms/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_28224df12864bf04b6ae168a14ca7ba8969b2227bc7bca20450286389546935f extends Twig_Template
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
        return "/var/www/html/rnd/laravel/octobercms/plugins/rainlab/pages/components/staticpage/default.htm";
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
        return new Twig_Source("{{ __SELF__.content|raw }}", "/var/www/html/rnd/laravel/octobercms/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
