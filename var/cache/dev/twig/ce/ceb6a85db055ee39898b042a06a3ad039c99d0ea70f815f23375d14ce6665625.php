<?php

/* base.html.twig */
class __TwigTemplate_dfb4ebba7246d306575e10e385abf8e9108e1d6bea8b638470b928398f5ac653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f38c9f19a3f57df09115f9e956672229a8d0f17f39411938760bfd4d10c0bdff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38c9f19a3f57df09115f9e956672229a8d0f17f39411938760bfd4d10c0bdff->enter($__internal_f38c9f19a3f57df09115f9e956672229a8d0f17f39411938760bfd4d10c0bdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9316029c5111802a7bb522fb07d3196ec869b702924c6e1de8c07bd1f94683b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9316029c5111802a7bb522fb07d3196ec869b702924c6e1de8c07bd1f94683b2->enter($__internal_9316029c5111802a7bb522fb07d3196ec869b702924c6e1de8c07bd1f94683b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f38c9f19a3f57df09115f9e956672229a8d0f17f39411938760bfd4d10c0bdff->leave($__internal_f38c9f19a3f57df09115f9e956672229a8d0f17f39411938760bfd4d10c0bdff_prof);

        
        $__internal_9316029c5111802a7bb522fb07d3196ec869b702924c6e1de8c07bd1f94683b2->leave($__internal_9316029c5111802a7bb522fb07d3196ec869b702924c6e1de8c07bd1f94683b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80d2984b39eabaca42e792ac34793ba47512af66d7ce3de3cd2ae9f34c5197f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d2984b39eabaca42e792ac34793ba47512af66d7ce3de3cd2ae9f34c5197f1->enter($__internal_80d2984b39eabaca42e792ac34793ba47512af66d7ce3de3cd2ae9f34c5197f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c27242ec9a561f6e0f7d124666487474a6864fa5813c89ea598c2f2411aa54d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27242ec9a561f6e0f7d124666487474a6864fa5813c89ea598c2f2411aa54d8->enter($__internal_c27242ec9a561f6e0f7d124666487474a6864fa5813c89ea598c2f2411aa54d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c27242ec9a561f6e0f7d124666487474a6864fa5813c89ea598c2f2411aa54d8->leave($__internal_c27242ec9a561f6e0f7d124666487474a6864fa5813c89ea598c2f2411aa54d8_prof);

        
        $__internal_80d2984b39eabaca42e792ac34793ba47512af66d7ce3de3cd2ae9f34c5197f1->leave($__internal_80d2984b39eabaca42e792ac34793ba47512af66d7ce3de3cd2ae9f34c5197f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7108a05e136b0f793dc925321a84608913d6ff31c86af97d39f10ea0c4de6481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7108a05e136b0f793dc925321a84608913d6ff31c86af97d39f10ea0c4de6481->enter($__internal_7108a05e136b0f793dc925321a84608913d6ff31c86af97d39f10ea0c4de6481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f10aea62f5acf3a79a9ce3c175a2696458e2c55aea6acc73955201b2aed85b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10aea62f5acf3a79a9ce3c175a2696458e2c55aea6acc73955201b2aed85b6e->enter($__internal_f10aea62f5acf3a79a9ce3c175a2696458e2c55aea6acc73955201b2aed85b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f10aea62f5acf3a79a9ce3c175a2696458e2c55aea6acc73955201b2aed85b6e->leave($__internal_f10aea62f5acf3a79a9ce3c175a2696458e2c55aea6acc73955201b2aed85b6e_prof);

        
        $__internal_7108a05e136b0f793dc925321a84608913d6ff31c86af97d39f10ea0c4de6481->leave($__internal_7108a05e136b0f793dc925321a84608913d6ff31c86af97d39f10ea0c4de6481_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2af7990ebf759a1beec82fec297d01e95334eb69ac3af7f6b4a7662e1f9ebe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2af7990ebf759a1beec82fec297d01e95334eb69ac3af7f6b4a7662e1f9ebe7->enter($__internal_f2af7990ebf759a1beec82fec297d01e95334eb69ac3af7f6b4a7662e1f9ebe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcaa9a51b8ec477776a4faa5232d3ef7d6d926a80910b9c03ba7eda8b2803941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcaa9a51b8ec477776a4faa5232d3ef7d6d926a80910b9c03ba7eda8b2803941->enter($__internal_bcaa9a51b8ec477776a4faa5232d3ef7d6d926a80910b9c03ba7eda8b2803941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bcaa9a51b8ec477776a4faa5232d3ef7d6d926a80910b9c03ba7eda8b2803941->leave($__internal_bcaa9a51b8ec477776a4faa5232d3ef7d6d926a80910b9c03ba7eda8b2803941_prof);

        
        $__internal_f2af7990ebf759a1beec82fec297d01e95334eb69ac3af7f6b4a7662e1f9ebe7->leave($__internal_f2af7990ebf759a1beec82fec297d01e95334eb69ac3af7f6b4a7662e1f9ebe7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04fb89bb079529993f0aebacd4f936568193ed4d1a35c48e934d53fcc1e9c4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04fb89bb079529993f0aebacd4f936568193ed4d1a35c48e934d53fcc1e9c4ef->enter($__internal_04fb89bb079529993f0aebacd4f936568193ed4d1a35c48e934d53fcc1e9c4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1df510b45804b20153060acbbd102985f187b63a1dd93c4a35def3b4d7f54abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df510b45804b20153060acbbd102985f187b63a1dd93c4a35def3b4d7f54abc->enter($__internal_1df510b45804b20153060acbbd102985f187b63a1dd93c4a35def3b4d7f54abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1df510b45804b20153060acbbd102985f187b63a1dd93c4a35def3b4d7f54abc->leave($__internal_1df510b45804b20153060acbbd102985f187b63a1dd93c4a35def3b4d7f54abc_prof);

        
        $__internal_04fb89bb079529993f0aebacd4f936568193ed4d1a35c48e934d53fcc1e9c4ef->leave($__internal_04fb89bb079529993f0aebacd4f936568193ed4d1a35c48e934d53fcc1e9c4ef_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/my_stuff/fullstack-party/app/Resources/views/base.html.twig");
    }
}
