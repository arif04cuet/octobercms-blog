<?php

/* /var/www/html/rnd/laravel/octobercms-blog/themes/blog/partials/footer.htm */
class __TwigTemplate_fee23bdc794e1f5a74ffd58968caab759e089c5947d7f503a7062e7f02962345 extends Twig_Template
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
        echo "<div class=\"footer\">
    <div class=\"container\">
    
        @footer
        
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/rnd/laravel/octobercms-blog/themes/blog/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer\">
    <div class=\"container\">
    
        @footer
        
    </div>
</div>", "/var/www/html/rnd/laravel/octobercms-blog/themes/blog/partials/footer.htm", "");
    }
}
