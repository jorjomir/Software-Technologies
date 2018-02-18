<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df5e7b81da35c3dacbb68919ca5086acc43960c13abda2959ee8cc75681ae7f4 extends Twig_Template
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
        $__internal_63f34dbe9f7b49d9351ae5ea638a8b8a62fe13e094f3f9fceef3e31e3905605c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f34dbe9f7b49d9351ae5ea638a8b8a62fe13e094f3f9fceef3e31e3905605c->enter($__internal_63f34dbe9f7b49d9351ae5ea638a8b8a62fe13e094f3f9fceef3e31e3905605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f34dbe9f7b49d9351ae5ea638a8b8a62fe13e094f3f9fceef3e31e3905605c->leave($__internal_63f34dbe9f7b49d9351ae5ea638a8b8a62fe13e094f3f9fceef3e31e3905605c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eca97a00d6847b357337ee5ef0475e384584b39b38510ca7d54758b0d2ee2e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca97a00d6847b357337ee5ef0475e384584b39b38510ca7d54758b0d2ee2e16->enter($__internal_eca97a00d6847b357337ee5ef0475e384584b39b38510ca7d54758b0d2ee2e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eca97a00d6847b357337ee5ef0475e384584b39b38510ca7d54758b0d2ee2e16->leave($__internal_eca97a00d6847b357337ee5ef0475e384584b39b38510ca7d54758b0d2ee2e16_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccdb4e0d30c93c909509965882a40c6f956f2a7e4c502013ee72a525667b4202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccdb4e0d30c93c909509965882a40c6f956f2a7e4c502013ee72a525667b4202->enter($__internal_ccdb4e0d30c93c909509965882a40c6f956f2a7e4c502013ee72a525667b4202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ccdb4e0d30c93c909509965882a40c6f956f2a7e4c502013ee72a525667b4202->leave($__internal_ccdb4e0d30c93c909509965882a40c6f956f2a7e4c502013ee72a525667b4202_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7761c966eb3ae1a184130da96904738dee98cf20f68ad609d1f444316cf31f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7761c966eb3ae1a184130da96904738dee98cf20f68ad609d1f444316cf31f4->enter($__internal_b7761c966eb3ae1a184130da96904738dee98cf20f68ad609d1f444316cf31f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7761c966eb3ae1a184130da96904738dee98cf20f68ad609d1f444316cf31f4->leave($__internal_b7761c966eb3ae1a184130da96904738dee98cf20f68ad609d1f444316cf31f4_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
