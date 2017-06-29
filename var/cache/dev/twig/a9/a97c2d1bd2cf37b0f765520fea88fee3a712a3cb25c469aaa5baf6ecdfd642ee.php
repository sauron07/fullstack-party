<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7e30fb8dbde3c16ac07c4da8606687e576a0b996b5cd25b5de7852d7d88eb313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8d6bff31166511bc51275401962a786c69c0dd961132a8aa22b742c034fc83e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6bff31166511bc51275401962a786c69c0dd961132a8aa22b742c034fc83e5->enter($__internal_8d6bff31166511bc51275401962a786c69c0dd961132a8aa22b742c034fc83e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_aed6db2a799f7583ea3888de193dda4f83ab8a1d161d628316163f02a81647d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed6db2a799f7583ea3888de193dda4f83ab8a1d161d628316163f02a81647d0->enter($__internal_aed6db2a799f7583ea3888de193dda4f83ab8a1d161d628316163f02a81647d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d6bff31166511bc51275401962a786c69c0dd961132a8aa22b742c034fc83e5->leave($__internal_8d6bff31166511bc51275401962a786c69c0dd961132a8aa22b742c034fc83e5_prof);

        
        $__internal_aed6db2a799f7583ea3888de193dda4f83ab8a1d161d628316163f02a81647d0->leave($__internal_aed6db2a799f7583ea3888de193dda4f83ab8a1d161d628316163f02a81647d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_121ca0575342064eecedd67c3b482bc70788571bb654e3df546463f41f9ba5cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121ca0575342064eecedd67c3b482bc70788571bb654e3df546463f41f9ba5cc->enter($__internal_121ca0575342064eecedd67c3b482bc70788571bb654e3df546463f41f9ba5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32ad498231c3dbad10cfbdd201f627797cafd1c81328bc08a1a3d777b3cef6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ad498231c3dbad10cfbdd201f627797cafd1c81328bc08a1a3d777b3cef6b5->enter($__internal_32ad498231c3dbad10cfbdd201f627797cafd1c81328bc08a1a3d777b3cef6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_32ad498231c3dbad10cfbdd201f627797cafd1c81328bc08a1a3d777b3cef6b5->leave($__internal_32ad498231c3dbad10cfbdd201f627797cafd1c81328bc08a1a3d777b3cef6b5_prof);

        
        $__internal_121ca0575342064eecedd67c3b482bc70788571bb654e3df546463f41f9ba5cc->leave($__internal_121ca0575342064eecedd67c3b482bc70788571bb654e3df546463f41f9ba5cc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9938c15dd3f2c99cb9986247c7367cd291878b5c88fa308998cff6561055f387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9938c15dd3f2c99cb9986247c7367cd291878b5c88fa308998cff6561055f387->enter($__internal_9938c15dd3f2c99cb9986247c7367cd291878b5c88fa308998cff6561055f387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa4c67b9ca392311416bc60ff5b865a7df05e0e29fa097769e24c2402d621c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4c67b9ca392311416bc60ff5b865a7df05e0e29fa097769e24c2402d621c4b->enter($__internal_fa4c67b9ca392311416bc60ff5b865a7df05e0e29fa097769e24c2402d621c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fa4c67b9ca392311416bc60ff5b865a7df05e0e29fa097769e24c2402d621c4b->leave($__internal_fa4c67b9ca392311416bc60ff5b865a7df05e0e29fa097769e24c2402d621c4b_prof);

        
        $__internal_9938c15dd3f2c99cb9986247c7367cd291878b5c88fa308998cff6561055f387->leave($__internal_9938c15dd3f2c99cb9986247c7367cd291878b5c88fa308998cff6561055f387_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_25e558a41feb5094af4be09c1966f3b4ccd3dd665d1a439d4c60960b7b8daeff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e558a41feb5094af4be09c1966f3b4ccd3dd665d1a439d4c60960b7b8daeff->enter($__internal_25e558a41feb5094af4be09c1966f3b4ccd3dd665d1a439d4c60960b7b8daeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_29b9deb01ed0a3eb679a0c5faf9f998fd2f41cc3a13ecafd83bd8a6b9c726cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b9deb01ed0a3eb679a0c5faf9f998fd2f41cc3a13ecafd83bd8a6b9c726cc7->enter($__internal_29b9deb01ed0a3eb679a0c5faf9f998fd2f41cc3a13ecafd83bd8a6b9c726cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_29b9deb01ed0a3eb679a0c5faf9f998fd2f41cc3a13ecafd83bd8a6b9c726cc7->leave($__internal_29b9deb01ed0a3eb679a0c5faf9f998fd2f41cc3a13ecafd83bd8a6b9c726cc7_prof);

        
        $__internal_25e558a41feb5094af4be09c1966f3b4ccd3dd665d1a439d4c60960b7b8daeff->leave($__internal_25e558a41feb5094af4be09c1966f3b4ccd3dd665d1a439d4c60960b7b8daeff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/my_stuff/fullstack-party/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
