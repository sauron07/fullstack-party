<?php

/* default/index.html.twig */
class __TwigTemplate_3a988356632549279f4cd62e0c8de2790ca94eb72cf7566d33f41281fe6fe46c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb49e20a472fb114cfe66d27ea387b92ee3fc03550dd12d5747a7e1392939e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb49e20a472fb114cfe66d27ea387b92ee3fc03550dd12d5747a7e1392939e84->enter($__internal_bb49e20a472fb114cfe66d27ea387b92ee3fc03550dd12d5747a7e1392939e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1194b4b205ef5dcf2821fc9ad3da7db715b3dd8c23b4cd40467bd3252b6b0208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1194b4b205ef5dcf2821fc9ad3da7db715b3dd8c23b4cd40467bd3252b6b0208->enter($__internal_1194b4b205ef5dcf2821fc9ad3da7db715b3dd8c23b4cd40467bd3252b6b0208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb49e20a472fb114cfe66d27ea387b92ee3fc03550dd12d5747a7e1392939e84->leave($__internal_bb49e20a472fb114cfe66d27ea387b92ee3fc03550dd12d5747a7e1392939e84_prof);

        
        $__internal_1194b4b205ef5dcf2821fc9ad3da7db715b3dd8c23b4cd40467bd3252b6b0208->leave($__internal_1194b4b205ef5dcf2821fc9ad3da7db715b3dd8c23b4cd40467bd3252b6b0208_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_232a4476c7964fa5c4a97fa9709d6470a0ee495cbbc95d5693a0e211d664698b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232a4476c7964fa5c4a97fa9709d6470a0ee495cbbc95d5693a0e211d664698b->enter($__internal_232a4476c7964fa5c4a97fa9709d6470a0ee495cbbc95d5693a0e211d664698b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0cddb15c859bca70313117a254a9111159c7fb240f3e7299ea6166307bc7f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cddb15c859bca70313117a254a9111159c7fb240f3e7299ea6166307bc7f22->enter($__internal_c0cddb15c859bca70313117a254a9111159c7fb240f3e7299ea6166307bc7f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_c0cddb15c859bca70313117a254a9111159c7fb240f3e7299ea6166307bc7f22->leave($__internal_c0cddb15c859bca70313117a254a9111159c7fb240f3e7299ea6166307bc7f22_prof);

        
        $__internal_232a4476c7964fa5c4a97fa9709d6470a0ee495cbbc95d5693a0e211d664698b->leave($__internal_232a4476c7964fa5c4a97fa9709d6470a0ee495cbbc95d5693a0e211d664698b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c4d2b3304fbfaa7bba882cac1ff58601827416dd2cf606df2d7561837e74da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4d2b3304fbfaa7bba882cac1ff58601827416dd2cf606df2d7561837e74da2->enter($__internal_1c4d2b3304fbfaa7bba882cac1ff58601827416dd2cf606df2d7561837e74da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4b6f8380f2e8c7155aeb2963615a06553a49784feb66de002c1b7bcb013edd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6f8380f2e8c7155aeb2963615a06553a49784feb66de002c1b7bcb013edd2e->enter($__internal_4b6f8380f2e8c7155aeb2963615a06553a49784feb66de002c1b7bcb013edd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_4b6f8380f2e8c7155aeb2963615a06553a49784feb66de002c1b7bcb013edd2e->leave($__internal_4b6f8380f2e8c7155aeb2963615a06553a49784feb66de002c1b7bcb013edd2e_prof);

        
        $__internal_1c4d2b3304fbfaa7bba882cac1ff58601827416dd2cf606df2d7561837e74da2->leave($__internal_1c4d2b3304fbfaa7bba882cac1ff58601827416dd2cf606df2d7561837e74da2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "/var/www/my_stuff/fullstack-party/app/Resources/views/default/index.html.twig");
    }
}
