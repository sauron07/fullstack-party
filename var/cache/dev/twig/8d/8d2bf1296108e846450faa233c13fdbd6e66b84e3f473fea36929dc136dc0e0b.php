<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a10c5a041bf74eb893ebf93fb680bba153791df4ebc401c9739d8c9e1f3b032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eef235752780b39be5fac62c2e3b8e742da76455b578f0f545496a4a2e75273f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef235752780b39be5fac62c2e3b8e742da76455b578f0f545496a4a2e75273f->enter($__internal_eef235752780b39be5fac62c2e3b8e742da76455b578f0f545496a4a2e75273f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b3e93c23de8312ef8e0a9a903d06ab493a03d3b4ef778c494d2c739f9eced3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e93c23de8312ef8e0a9a903d06ab493a03d3b4ef778c494d2c739f9eced3a1->enter($__internal_b3e93c23de8312ef8e0a9a903d06ab493a03d3b4ef778c494d2c739f9eced3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eef235752780b39be5fac62c2e3b8e742da76455b578f0f545496a4a2e75273f->leave($__internal_eef235752780b39be5fac62c2e3b8e742da76455b578f0f545496a4a2e75273f_prof);

        
        $__internal_b3e93c23de8312ef8e0a9a903d06ab493a03d3b4ef778c494d2c739f9eced3a1->leave($__internal_b3e93c23de8312ef8e0a9a903d06ab493a03d3b4ef778c494d2c739f9eced3a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_066a8c9e8bb102befaf3ed3a97fe5b53abe4e296b99cdf7397991803b703a8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066a8c9e8bb102befaf3ed3a97fe5b53abe4e296b99cdf7397991803b703a8f8->enter($__internal_066a8c9e8bb102befaf3ed3a97fe5b53abe4e296b99cdf7397991803b703a8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_64499dd2994d37b123351575e010196d7a571860c155a745d0ba8700cc0ac706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64499dd2994d37b123351575e010196d7a571860c155a745d0ba8700cc0ac706->enter($__internal_64499dd2994d37b123351575e010196d7a571860c155a745d0ba8700cc0ac706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64499dd2994d37b123351575e010196d7a571860c155a745d0ba8700cc0ac706->leave($__internal_64499dd2994d37b123351575e010196d7a571860c155a745d0ba8700cc0ac706_prof);

        
        $__internal_066a8c9e8bb102befaf3ed3a97fe5b53abe4e296b99cdf7397991803b703a8f8->leave($__internal_066a8c9e8bb102befaf3ed3a97fe5b53abe4e296b99cdf7397991803b703a8f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_723a2d015bdba23eaddd74d117efc487d6d42e344205e812d14c373a8d35b38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723a2d015bdba23eaddd74d117efc487d6d42e344205e812d14c373a8d35b38d->enter($__internal_723a2d015bdba23eaddd74d117efc487d6d42e344205e812d14c373a8d35b38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1880fe2236e2b450b678db4b0579c123e713fa3cefd402bdb2b89c5486ed8492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1880fe2236e2b450b678db4b0579c123e713fa3cefd402bdb2b89c5486ed8492->enter($__internal_1880fe2236e2b450b678db4b0579c123e713fa3cefd402bdb2b89c5486ed8492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1880fe2236e2b450b678db4b0579c123e713fa3cefd402bdb2b89c5486ed8492->leave($__internal_1880fe2236e2b450b678db4b0579c123e713fa3cefd402bdb2b89c5486ed8492_prof);

        
        $__internal_723a2d015bdba23eaddd74d117efc487d6d42e344205e812d14c373a8d35b38d->leave($__internal_723a2d015bdba23eaddd74d117efc487d6d42e344205e812d14c373a8d35b38d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af9d9704bc671f4cb588f1d7fc78fddf1de9a94f92d021e953153eea18d5f1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9d9704bc671f4cb588f1d7fc78fddf1de9a94f92d021e953153eea18d5f1d1->enter($__internal_af9d9704bc671f4cb588f1d7fc78fddf1de9a94f92d021e953153eea18d5f1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3da54500b20f9dcae3fdc70fa12c50667e181c66e2492af53fb6be15eb30c6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da54500b20f9dcae3fdc70fa12c50667e181c66e2492af53fb6be15eb30c6fc->enter($__internal_3da54500b20f9dcae3fdc70fa12c50667e181c66e2492af53fb6be15eb30c6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3da54500b20f9dcae3fdc70fa12c50667e181c66e2492af53fb6be15eb30c6fc->leave($__internal_3da54500b20f9dcae3fdc70fa12c50667e181c66e2492af53fb6be15eb30c6fc_prof);

        
        $__internal_af9d9704bc671f4cb588f1d7fc78fddf1de9a94f92d021e953153eea18d5f1d1->leave($__internal_af9d9704bc671f4cb588f1d7fc78fddf1de9a94f92d021e953153eea18d5f1d1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/my_stuff/fullstack-party/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
