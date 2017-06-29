<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f858510bd3191b37665041f11f975f32be17740210d87eccdb81b8a798b06fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_321fc5474bfd230638031999bfb33311a8a1128739c21c11e1a4e85e60217a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321fc5474bfd230638031999bfb33311a8a1128739c21c11e1a4e85e60217a0a->enter($__internal_321fc5474bfd230638031999bfb33311a8a1128739c21c11e1a4e85e60217a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6f20090b1aa3d13fcb073f905d17697e62e92fac6e5c816e383af74011d9fdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f20090b1aa3d13fcb073f905d17697e62e92fac6e5c816e383af74011d9fdcf->enter($__internal_6f20090b1aa3d13fcb073f905d17697e62e92fac6e5c816e383af74011d9fdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_321fc5474bfd230638031999bfb33311a8a1128739c21c11e1a4e85e60217a0a->leave($__internal_321fc5474bfd230638031999bfb33311a8a1128739c21c11e1a4e85e60217a0a_prof);

        
        $__internal_6f20090b1aa3d13fcb073f905d17697e62e92fac6e5c816e383af74011d9fdcf->leave($__internal_6f20090b1aa3d13fcb073f905d17697e62e92fac6e5c816e383af74011d9fdcf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_723f28308286e2db2b2772cf0adb789fed3b2b322a5472de0e903cea8d58b3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723f28308286e2db2b2772cf0adb789fed3b2b322a5472de0e903cea8d58b3d0->enter($__internal_723f28308286e2db2b2772cf0adb789fed3b2b322a5472de0e903cea8d58b3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_03c920ba2918ef15e246e04c92f382d62e97c67ace21b3204bd8d72d8b9929ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c920ba2918ef15e246e04c92f382d62e97c67ace21b3204bd8d72d8b9929ea->enter($__internal_03c920ba2918ef15e246e04c92f382d62e97c67ace21b3204bd8d72d8b9929ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_03c920ba2918ef15e246e04c92f382d62e97c67ace21b3204bd8d72d8b9929ea->leave($__internal_03c920ba2918ef15e246e04c92f382d62e97c67ace21b3204bd8d72d8b9929ea_prof);

        
        $__internal_723f28308286e2db2b2772cf0adb789fed3b2b322a5472de0e903cea8d58b3d0->leave($__internal_723f28308286e2db2b2772cf0adb789fed3b2b322a5472de0e903cea8d58b3d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/my_stuff/fullstack-party/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
