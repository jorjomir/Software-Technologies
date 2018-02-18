<?php

/* form/fields.html.twig */
class __TwigTemplate_93fcfc08c2338924eb60ed5712325e10c5d1d507b86bf3753248a817be318f44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df8cf39704489d574ef4f8b23f658238af6eddeab9ed9b13d096f841e768bf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8cf39704489d574ef4f8b23f658238af6eddeab9ed9b13d096f841e768bf3d->enter($__internal_df8cf39704489d574ef4f8b23f658238af6eddeab9ed9b13d096f841e768bf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_df8cf39704489d574ef4f8b23f658238af6eddeab9ed9b13d096f841e768bf3d->leave($__internal_df8cf39704489d574ef4f8b23f658238af6eddeab9ed9b13d096f841e768bf3d_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_5d61667b903f652417cca46e0b520226473852cc3dc301d0b40dbff87972cc50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d61667b903f652417cca46e0b520226473852cc3dc301d0b40dbff87972cc50->enter($__internal_5d61667b903f652417cca46e0b520226473852cc3dc301d0b40dbff87972cc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5d61667b903f652417cca46e0b520226473852cc3dc301d0b40dbff87972cc50->leave($__internal_5d61667b903f652417cca46e0b520226473852cc3dc301d0b40dbff87972cc50_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
