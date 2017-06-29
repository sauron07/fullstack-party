<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f1c6fac1401d1a2ef4b0cedae02595baa12b10c512ea5ca37566e1368b943a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94aa98231dbeb439a1cf19df4f0e6fbcac1d9b7de3acc3717ac5f994edfd23ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94aa98231dbeb439a1cf19df4f0e6fbcac1d9b7de3acc3717ac5f994edfd23ad->enter($__internal_94aa98231dbeb439a1cf19df4f0e6fbcac1d9b7de3acc3717ac5f994edfd23ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cc647643a22a49d40589c13602a6800ea09d5cd6961faf484e83b718326e8ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc647643a22a49d40589c13602a6800ea09d5cd6961faf484e83b718326e8ddb->enter($__internal_cc647643a22a49d40589c13602a6800ea09d5cd6961faf484e83b718326e8ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_94aa98231dbeb439a1cf19df4f0e6fbcac1d9b7de3acc3717ac5f994edfd23ad->leave($__internal_94aa98231dbeb439a1cf19df4f0e6fbcac1d9b7de3acc3717ac5f994edfd23ad_prof);

        
        $__internal_cc647643a22a49d40589c13602a6800ea09d5cd6961faf484e83b718326e8ddb->leave($__internal_cc647643a22a49d40589c13602a6800ea09d5cd6961faf484e83b718326e8ddb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f2ce82c3dbbc9d147d7edcac704dc70c589b543e7013dc01b425d255076a107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2ce82c3dbbc9d147d7edcac704dc70c589b543e7013dc01b425d255076a107->enter($__internal_7f2ce82c3dbbc9d147d7edcac704dc70c589b543e7013dc01b425d255076a107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_156b74b7743d07c7f29cbdeef213fbab28608cd5366a9759e0c7c373948712ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156b74b7743d07c7f29cbdeef213fbab28608cd5366a9759e0c7c373948712ae->enter($__internal_156b74b7743d07c7f29cbdeef213fbab28608cd5366a9759e0c7c373948712ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_156b74b7743d07c7f29cbdeef213fbab28608cd5366a9759e0c7c373948712ae->leave($__internal_156b74b7743d07c7f29cbdeef213fbab28608cd5366a9759e0c7c373948712ae_prof);

        
        $__internal_7f2ce82c3dbbc9d147d7edcac704dc70c589b543e7013dc01b425d255076a107->leave($__internal_7f2ce82c3dbbc9d147d7edcac704dc70c589b543e7013dc01b425d255076a107_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b40e31a05da071f18686e25daca2ed1df155eb98427f96d883cb5fdf4855021a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40e31a05da071f18686e25daca2ed1df155eb98427f96d883cb5fdf4855021a->enter($__internal_b40e31a05da071f18686e25daca2ed1df155eb98427f96d883cb5fdf4855021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f82c81ec74e4df087324447e319c1722b92b3a67f3cbbb5915487d06467bc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f82c81ec74e4df087324447e319c1722b92b3a67f3cbbb5915487d06467bc03->enter($__internal_1f82c81ec74e4df087324447e319c1722b92b3a67f3cbbb5915487d06467bc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1f82c81ec74e4df087324447e319c1722b92b3a67f3cbbb5915487d06467bc03->leave($__internal_1f82c81ec74e4df087324447e319c1722b92b3a67f3cbbb5915487d06467bc03_prof);

        
        $__internal_b40e31a05da071f18686e25daca2ed1df155eb98427f96d883cb5fdf4855021a->leave($__internal_b40e31a05da071f18686e25daca2ed1df155eb98427f96d883cb5fdf4855021a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_110502c7a8babd7103016187ab0063d36a3080af2d71ad818f15e67c1dfe383b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110502c7a8babd7103016187ab0063d36a3080af2d71ad818f15e67c1dfe383b->enter($__internal_110502c7a8babd7103016187ab0063d36a3080af2d71ad818f15e67c1dfe383b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74eb59bd39384fe9f2997e236fe632dd7b35fad29852fa6ba5168d464375f91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74eb59bd39384fe9f2997e236fe632dd7b35fad29852fa6ba5168d464375f91c->enter($__internal_74eb59bd39384fe9f2997e236fe632dd7b35fad29852fa6ba5168d464375f91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_74eb59bd39384fe9f2997e236fe632dd7b35fad29852fa6ba5168d464375f91c->leave($__internal_74eb59bd39384fe9f2997e236fe632dd7b35fad29852fa6ba5168d464375f91c_prof);

        
        $__internal_110502c7a8babd7103016187ab0063d36a3080af2d71ad818f15e67c1dfe383b->leave($__internal_110502c7a8babd7103016187ab0063d36a3080af2d71ad818f15e67c1dfe383b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/my_stuff/fullstack-party/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
