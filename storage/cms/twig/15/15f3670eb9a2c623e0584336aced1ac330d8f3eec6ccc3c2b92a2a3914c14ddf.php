<?php

/* /var/www/html/rnd/laravel/octobercms/themes/blog/pages/Home.htm */
class __TwigTemplate_97ac24903d5389000db788a9fcdd079d9816073bf6f822ac956afb847855c8e0 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-9\">




        ";
        // line 7
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", array());
        // line 8
        echo "        <ul class=\"post-list\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "            <li>
                <h3><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a></h3>

                <p class=\"info\">
                    Posted
                    ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 16
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 17
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 18
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                    on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
                </p>

                <p class=\"excerpt\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", array());
            echo "</p>
            </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "            <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>

        ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 30
            echo "        <ul class=\"pagination\">
            ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 32
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
            ";
            }
            // line 34
            echo "
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 36
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 37
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
            ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()))) {
                // line 42
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
            ";
            }
            // line 44
            echo "        </ul>
        ";
        }
        // line 46
        echo "


    </div>

    <div class=\"col-md-3\">

        <form action=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["searchInput"] ?? null), "searchPage", array()));
        echo "?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
        echo "\" method=\"get\">
            <div class=\"ss-search-form\">
                <div class=\"ss-search-form__input\">
                    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["searchInput"] ?? null), "query", array()), "html", null, true);
        echo "\"
                        autocomplete=\"off\" autofocus ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["searchInput"] ?? null), "useAutoComplete", array())) {
            echo " data-track-input data-request=\"";
            echo twig_escape_filter($this->env, ($context["searchInput"] ?? null), "html", null, true);
            echo "::onType\"
                        data-request-before-update=\"document.getElementById('autocomplete-results').classList.add('ss-search-form__results--visible')\"
                        data-request-update=\"'";
            // line 59
            echo twig_escape_filter($this->env, ($context["searchInput"] ?? null), "html", null, true);
            echo "::autocomplete': '#autocomplete-results'\" ";
        }
        echo ">
                    <button class=\"ss-search-form__submit\" type=\"submit\">Search</button>
                </div>
                <div class=\"ss-search-form__results\" id=\"autocomplete-results\"></div>
            </div>
        </form>


        <br>
        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", array())) {
            // line 69
            echo "        <ul class=\"category-list\">
            ";
            // line 70
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", array())            ;
            $context['__cms_partial_params']['currentCategorySlug'] = twig_get_attribute($this->env, $this->source,             // line 71
($context["blogCategories"] ?? null), "currentCategorySlug", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 70
($context["blogCategories"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 73
            echo "        </ul>
        ";
        }
        // line 75
        echo "

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/rnd/laravel/octobercms/themes/blog/pages/Home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 75,  232 => 73,  229 => 70,  227 => 71,  224 => 70,  221 => 69,  219 => 68,  205 => 59,  198 => 57,  194 => 56,  186 => 53,  177 => 46,  173 => 44,  167 => 42,  165 => 41,  162 => 40,  151 => 37,  146 => 36,  142 => 35,  139 => 34,  133 => 32,  131 => 31,  128 => 30,  126 => 29,  122 => 27,  113 => 25,  105 => 22,  98 => 19,  84 => 18,  75 => 17,  57 => 16,  53 => 15,  44 => 11,  41 => 10,  36 => 9,  33 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-md-9\">




        {% set posts = blogPosts.posts %}
        <ul class=\"post-list\">
            {% for post in posts %}
            <li>
                <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>

                <p class=\"info\">
                    Posted
                    {% if post.categories.count %} in {% endif %}
                    {% for category in post.categories %}
                    <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                    {% endfor %}
                    on {{ post.published_at|date('M d, Y') }}
                </p>

                <p class=\"excerpt\">{{ post.summary|raw }}</p>
            </li>
            {% else %}
            <li class=\"no-data\">{{ noPostsMessage }}</li>
            {% endfor %}
        </ul>

        {% if posts.lastPage > 1 %}
        <ul class=\"pagination\">
            {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
            {% endif %}

            {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
            {% endfor %}

            {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
            {% endif %}
        </ul>
        {% endif %}



    </div>

    <div class=\"col-md-3\">

        <form action=\"{{ searchInput.searchPage | page }}?q={{ query | url_encode(true) }}\" method=\"get\">
            <div class=\"ss-search-form\">
                <div class=\"ss-search-form__input\">
                    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" value=\"{{ searchInput.query }}\"
                        autocomplete=\"off\" autofocus {% if searchInput.useAutoComplete %} data-track-input data-request=\"{{ searchInput }}::onType\"
                        data-request-before-update=\"document.getElementById('autocomplete-results').classList.add('ss-search-form__results--visible')\"
                        data-request-update=\"'{{ searchInput }}::autocomplete': '#autocomplete-results'\" {% endif %}>
                    <button class=\"ss-search-form__submit\" type=\"submit\">Search</button>
                </div>
                <div class=\"ss-search-form__results\" id=\"autocomplete-results\"></div>
            </div>
        </form>


        <br>
        {% if blogCategories.categories %}
        <ul class=\"category-list\">
            {% partial blogCategories ~ \"::items\" categories = blogCategories.categories currentCategorySlug =
            blogCategories.currentCategorySlug
            %}
        </ul>
        {% endif %}


    </div>
</div>", "/var/www/html/rnd/laravel/octobercms/themes/blog/pages/Home.htm", "");
    }
}
