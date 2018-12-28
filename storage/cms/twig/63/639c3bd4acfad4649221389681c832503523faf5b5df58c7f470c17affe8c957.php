<?php

/* /var/www/html/rnd/laravel/octobercms/themes/blog/partials/footer.htm */
class __TwigTemplate_40c2c1eabc8d1842fa9f258e3b4010cd6731dd4ed2d99ab0a4d5ca246c136049 extends Twig_Template
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
        return "/var/www/html/rnd/laravel/octobercms/themes/blog/partials/footer.htm";
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
</div>", "/var/www/html/rnd/laravel/octobercms/themes/blog/partials/footer.htm", "");
    }
}
