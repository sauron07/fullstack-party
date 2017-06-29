<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_86315dfc4911a6c0b5427e6bfce548a7854dde902e4ab0025c4c33be21aa2790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8af3fa241e55c1b3df93dd828460b21e6fea8c9ee47fe475bb2d11d24ffee60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af3fa241e55c1b3df93dd828460b21e6fea8c9ee47fe475bb2d11d24ffee60a->enter($__internal_8af3fa241e55c1b3df93dd828460b21e6fea8c9ee47fe475bb2d11d24ffee60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_841589ba6ac84e8fc1b40b39c2075e164710ca86de22f61ebeb4f378fbe9f538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841589ba6ac84e8fc1b40b39c2075e164710ca86de22f61ebeb4f378fbe9f538->enter($__internal_841589ba6ac84e8fc1b40b39c2075e164710ca86de22f61ebeb4f378fbe9f538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8af3fa241e55c1b3df93dd828460b21e6fea8c9ee47fe475bb2d11d24ffee60a->leave($__internal_8af3fa241e55c1b3df93dd828460b21e6fea8c9ee47fe475bb2d11d24ffee60a_prof);

        
        $__internal_841589ba6ac84e8fc1b40b39c2075e164710ca86de22f61ebeb4f378fbe9f538->leave($__internal_841589ba6ac84e8fc1b40b39c2075e164710ca86de22f61ebeb4f378fbe9f538_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b672cb5561262f3fbe938b990ef59ed6f92dffc2dd86e25d48006ef01be1f08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b672cb5561262f3fbe938b990ef59ed6f92dffc2dd86e25d48006ef01be1f08a->enter($__internal_b672cb5561262f3fbe938b990ef59ed6f92dffc2dd86e25d48006ef01be1f08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d5a265a32a43f01c61d4537e1afd2c16883ef503b4978281f4b2a4a8659afd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a265a32a43f01c61d4537e1afd2c16883ef503b4978281f4b2a4a8659afd6d->enter($__internal_d5a265a32a43f01c61d4537e1afd2c16883ef503b4978281f4b2a4a8659afd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d5a265a32a43f01c61d4537e1afd2c16883ef503b4978281f4b2a4a8659afd6d->leave($__internal_d5a265a32a43f01c61d4537e1afd2c16883ef503b4978281f4b2a4a8659afd6d_prof);

        
        $__internal_b672cb5561262f3fbe938b990ef59ed6f92dffc2dd86e25d48006ef01be1f08a->leave($__internal_b672cb5561262f3fbe938b990ef59ed6f92dffc2dd86e25d48006ef01be1f08a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dc1e5ef0623278202e55b4b72f99e19d56628971aa183a9bc999ae027ff6694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc1e5ef0623278202e55b4b72f99e19d56628971aa183a9bc999ae027ff6694->enter($__internal_0dc1e5ef0623278202e55b4b72f99e19d56628971aa183a9bc999ae027ff6694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ac8aba18cd44f0688ee495c067811989065a88d6e32f46c51865c854c6a382f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac8aba18cd44f0688ee495c067811989065a88d6e32f46c51865c854c6a382f->enter($__internal_4ac8aba18cd44f0688ee495c067811989065a88d6e32f46c51865c854c6a382f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4ac8aba18cd44f0688ee495c067811989065a88d6e32f46c51865c854c6a382f->leave($__internal_4ac8aba18cd44f0688ee495c067811989065a88d6e32f46c51865c854c6a382f_prof);

        
        $__internal_0dc1e5ef0623278202e55b4b72f99e19d56628971aa183a9bc999ae027ff6694->leave($__internal_0dc1e5ef0623278202e55b4b72f99e19d56628971aa183a9bc999ae027ff6694_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cf3ad2bf402cb3426a27c87d2a5b34f1c34061fd1117871c43ec080bff23dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf3ad2bf402cb3426a27c87d2a5b34f1c34061fd1117871c43ec080bff23dfb->enter($__internal_3cf3ad2bf402cb3426a27c87d2a5b34f1c34061fd1117871c43ec080bff23dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab69bedcd1bc14c33514e4fa3d94f4f4eeef9f8eea25d62c98bde49e06ac6764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab69bedcd1bc14c33514e4fa3d94f4f4eeef9f8eea25d62c98bde49e06ac6764->enter($__internal_ab69bedcd1bc14c33514e4fa3d94f4f4eeef9f8eea25d62c98bde49e06ac6764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ab69bedcd1bc14c33514e4fa3d94f4f4eeef9f8eea25d62c98bde49e06ac6764->leave($__internal_ab69bedcd1bc14c33514e4fa3d94f4f4eeef9f8eea25d62c98bde49e06ac6764_prof);

        
        $__internal_3cf3ad2bf402cb3426a27c87d2a5b34f1c34061fd1117871c43ec080bff23dfb->leave($__internal_3cf3ad2bf402cb3426a27c87d2a5b34f1c34061fd1117871c43ec080bff23dfb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/my_stuff/fullstack-party/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
