<?php

/* base.html.twig */
class __TwigTemplate_2ac151aa0e269633aac3241f7e4b286d9b9d66813986eeccc7c0af9fbb1fa69e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8caac6af858350cd9f7a96c30cda81dfc368ab87f5e9feb688083ed3b1b6778c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caac6af858350cd9f7a96c30cda81dfc368ab87f5e9feb688083ed3b1b6778c->enter($__internal_8caac6af858350cd9f7a96c30cda81dfc368ab87f5e9feb688083ed3b1b6778c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_8caac6af858350cd9f7a96c30cda81dfc368ab87f5e9feb688083ed3b1b6778c->leave($__internal_8caac6af858350cd9f7a96c30cda81dfc368ab87f5e9feb688083ed3b1b6778c_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a524bda02e821f8d2fc53aa23f34759593d605f3535b5d356754ca41e6dc936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a524bda02e821f8d2fc53aa23f34759593d605f3535b5d356754ca41e6dc936->enter($__internal_6a524bda02e821f8d2fc53aa23f34759593d605f3535b5d356754ca41e6dc936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_6a524bda02e821f8d2fc53aa23f34759593d605f3535b5d356754ca41e6dc936->leave($__internal_6a524bda02e821f8d2fc53aa23f34759593d605f3535b5d356754ca41e6dc936_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdd73e4a74dd6a83a52efdf4bc4029c95eff3d2223ff2311f596a2726dbf43be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd73e4a74dd6a83a52efdf4bc4029c95eff3d2223ff2311f596a2726dbf43be->enter($__internal_bdd73e4a74dd6a83a52efdf4bc4029c95eff3d2223ff2311f596a2726dbf43be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_bdd73e4a74dd6a83a52efdf4bc4029c95eff3d2223ff2311f596a2726dbf43be->leave($__internal_bdd73e4a74dd6a83a52efdf4bc4029c95eff3d2223ff2311f596a2726dbf43be_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_9c871242be403e6ed8181d23e0eff02915321a29eca5628af4b878cf1dfd022d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c871242be403e6ed8181d23e0eff02915321a29eca5628af4b878cf1dfd022d->enter($__internal_9c871242be403e6ed8181d23e0eff02915321a29eca5628af4b878cf1dfd022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_9c871242be403e6ed8181d23e0eff02915321a29eca5628af4b878cf1dfd022d->leave($__internal_9c871242be403e6ed8181d23e0eff02915321a29eca5628af4b878cf1dfd022d_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_f532a6bffa665b46eadf5f7de552b0e87bfc82e8e0eab2a9d1116aaafcc95161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f532a6bffa665b46eadf5f7de552b0e87bfc82e8e0eab2a9d1116aaafcc95161->enter($__internal_f532a6bffa665b46eadf5f7de552b0e87bfc82e8e0eab2a9d1116aaafcc95161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_f532a6bffa665b46eadf5f7de552b0e87bfc82e8e0eab2a9d1116aaafcc95161->leave($__internal_f532a6bffa665b46eadf5f7de552b0e87bfc82e8e0eab2a9d1116aaafcc95161_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_88aae472cdbdae010ad3c3497ec4e2b892382a69d153dba30403945099cd1068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88aae472cdbdae010ad3c3497ec4e2b892382a69d153dba30403945099cd1068->enter($__internal_88aae472cdbdae010ad3c3497ec4e2b892382a69d153dba30403945099cd1068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_88aae472cdbdae010ad3c3497ec4e2b892382a69d153dba30403945099cd1068->leave($__internal_88aae472cdbdae010ad3c3497ec4e2b892382a69d153dba30403945099cd1068_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_bbbc931224dd8e5c2f3b5f882100cb5fd59dd7b54b46801cf9b56b142563d495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbc931224dd8e5c2f3b5f882100cb5fd59dd7b54b46801cf9b56b142563d495->enter($__internal_bbbc931224dd8e5c2f3b5f882100cb5fd59dd7b54b46801cf9b56b142563d495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_bbbc931224dd8e5c2f3b5f882100cb5fd59dd7b54b46801cf9b56b142563d495->leave($__internal_bbbc931224dd8e5c2f3b5f882100cb5fd59dd7b54b46801cf9b56b142563d495_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91c7c97510c3cc6c81689d27cb9b5d9daeadf5189fa289ad3d04b1d11b98745a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c7c97510c3cc6c81689d27cb9b5d9daeadf5189fa289ad3d04b1d11b98745a->enter($__internal_91c7c97510c3cc6c81689d27cb9b5d9daeadf5189fa289ad3d04b1d11b98745a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_91c7c97510c3cc6c81689d27cb9b5d9daeadf5189fa289ad3d04b1d11b98745a->leave($__internal_91c7c97510c3cc6c81689d27cb9b5d9daeadf5189fa289ad3d04b1d11b98745a_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
