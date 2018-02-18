<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e83371a525b47656b3e0c1d2db430706589f84bb74ea7230bc491fe88211fe47 extends Twig_Template
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
        $__internal_fe93055514d775b4c808b3444f89f927af8123ee6e1a678d5dade8875b7d9035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe93055514d775b4c808b3444f89f927af8123ee6e1a678d5dade8875b7d9035->enter($__internal_fe93055514d775b4c808b3444f89f927af8123ee6e1a678d5dade8875b7d9035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe93055514d775b4c808b3444f89f927af8123ee6e1a678d5dade8875b7d9035->leave($__internal_fe93055514d775b4c808b3444f89f927af8123ee6e1a678d5dade8875b7d9035_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0aa21dacc9f2654be6cc135d9ccf62d6f576e9543f051b16765268adc047327c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa21dacc9f2654be6cc135d9ccf62d6f576e9543f051b16765268adc047327c->enter($__internal_0aa21dacc9f2654be6cc135d9ccf62d6f576e9543f051b16765268adc047327c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0aa21dacc9f2654be6cc135d9ccf62d6f576e9543f051b16765268adc047327c->leave($__internal_0aa21dacc9f2654be6cc135d9ccf62d6f576e9543f051b16765268adc047327c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc47eb574731ee90a57d6ab4e089892be895a08ddd0f24c9f7d1406f6b9089cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc47eb574731ee90a57d6ab4e089892be895a08ddd0f24c9f7d1406f6b9089cb->enter($__internal_fc47eb574731ee90a57d6ab4e089892be895a08ddd0f24c9f7d1406f6b9089cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fc47eb574731ee90a57d6ab4e089892be895a08ddd0f24c9f7d1406f6b9089cb->leave($__internal_fc47eb574731ee90a57d6ab4e089892be895a08ddd0f24c9f7d1406f6b9089cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a08300594954fc7d49d7329764230e85b652980ca6e323f6bc8a8ccc53ac3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a08300594954fc7d49d7329764230e85b652980ca6e323f6bc8a8ccc53ac3fa->enter($__internal_8a08300594954fc7d49d7329764230e85b652980ca6e323f6bc8a8ccc53ac3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8a08300594954fc7d49d7329764230e85b652980ca6e323f6bc8a8ccc53ac3fa->leave($__internal_8a08300594954fc7d49d7329764230e85b652980ca6e323f6bc8a8ccc53ac3fa_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
