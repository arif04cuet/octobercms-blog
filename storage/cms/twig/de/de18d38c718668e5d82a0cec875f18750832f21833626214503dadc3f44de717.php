<?php

/* /var/www/html/rnd/laravel/octobercms/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm */
class __TwigTemplate_0b2c1f7b8cc5e4c330ba0b3d8dc83d110c97ea681cb4edb4ef775148f642e4d2 extends Twig_Template
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
        if ((((($context["flashError"] ?? null) || (($context["flashSuccess"] ?? null) == false)) || (($context["flashSuccess"] ?? null) != ($context["__SELF__"] ?? null))) || ((($context["flashSuccess"] ?? null) == ($context["__SELF__"] ?? null)) && (call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), array("form_hide_after_success", 0)) == 0)))) {
            // line 2
            echo "
\t";
            // line 3
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getFormAttributes", array())));
            echo "

\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "
\t\t\t";
                // line 7
                echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getFieldHtmlCode", array(0 => $context["field"]), "method");
                echo "

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
\t\t";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getAntispamFieldHtmlCode", array(0 => array()), "method");
            echo "

\t\t";
            // line 13
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getDescriptionFieldHtmlCode", array(0 => array()), "method");
            echo "

\t\t";
            // line 15
            if ((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), array("add_google_recaptcha")) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), array("google_recaptcha_site_key")))) {
                // line 16
                echo "\t\t\t<div class=\"form-group\">
\t            <div class=\"g-recaptcha\" data-sitekey=\"";
                // line 17
                echo call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), array("google_recaptcha_site_key"));
                echo "\"></div>
\t        </div>
\t\t";
            }
            // line 20
            echo "
\t\t";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getSubmitButtonHtmlCode", array(0 => array()), "method");
            echo "

\t";
            // line 23
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

\t";
            // line 25
            if (call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), array("google_recaptcha_scripts_allow"))) {
                // line 26
                echo "\t\t<script src='https://www.google.com/recaptcha/api.js";
                echo twig_escape_filter($this->env, (((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), array("google_recaptcha_locale_allow")) && ($context["currentLocale"] ?? null))) ? (("?hl=" . ($context["currentLocale"] ?? null))) : ("")), "html", null, true);
                echo "'></script>
\t";
            }
            // line 28
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/rnd/laravel/octobercms/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  88 => 26,  86 => 25,  81 => 23,  76 => 21,  73 => 20,  67 => 17,  64 => 16,  62 => 15,  57 => 13,  52 => 11,  49 => 10,  40 => 7,  37 => 6,  33 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if flashError or (flashSuccess == false) or (flashSuccess!=__SELF__) or (flashSuccess==__SELF__ and settingsGet('form_hide_after_success', 0) == 0) %}

\t{{ form_open(__SELF__.getFormAttributes) }}

\t\t{% for field in __SELF__.fields %}

\t\t\t{{ __SELF__.getFieldHtmlCode(field)|raw }}

\t\t{% endfor %}

\t\t{{ __SELF__.getAntispamFieldHtmlCode({})|raw }}

\t\t{{ __SELF__.getDescriptionFieldHtmlCode({})|raw }}

\t\t{% if settingsGet('add_google_recaptcha') and settingsGet('google_recaptcha_site_key') %}
\t\t\t<div class=\"form-group\">
\t            <div class=\"g-recaptcha\" data-sitekey=\"{{ settingsGet('google_recaptcha_site_key') }}\"></div>
\t        </div>
\t\t{% endif %}

\t\t{{ __SELF__.getSubmitButtonHtmlCode({})|raw }}

\t{{ form_close() }}

\t{% if settingsGet('google_recaptcha_scripts_allow') %}
\t\t<script src='https://www.google.com/recaptcha/api.js{{ settingsGet(\"google_recaptcha_locale_allow\") and currentLocale ? (\"?hl=\"~currentLocale) }}'></script>
\t{% endif %}

{% endif %}
", "/var/www/html/rnd/laravel/octobercms/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm", "");
    }
}
