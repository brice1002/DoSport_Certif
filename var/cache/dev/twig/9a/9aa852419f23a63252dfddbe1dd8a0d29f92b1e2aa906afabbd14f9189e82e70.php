<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/contact.html.twig */
class __TwigTemplate_e14c5de127cbc32254fbee3a4f9d21011b6ea0ce6946b0f57506497275bcff1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact - Do Sport
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "


\t<h2 class=\"mt-5\">Nous contacter</h2>

\t<form method=\"POST\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\" class=\"form-label mt-4\">
\t\t\t\t<strong>Email</strong>
\t\t\t</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Entrer votre email\">
\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">Nous ne partagerons jamais votre email avec quiconque.</small>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-form-label mt-4\" for=\"sujet\">
\t\t\t\t<strong>Sujet</strong>
\t\t\t</label>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Votre sujet\" name=\"sujet\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"message\" class=\"form-label mt-4\">
\t\t\t\t<strong>Message</strong>
\t\t\t</label>
\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"3\" placeholder=\"Votre message\"></textarea>
\t\t</div>
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer\">
\t</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact - Do Sport
{% endblock %}

{% block content %}



\t<h2 class=\"mt-5\">Nous contacter</h2>

\t<form method=\"POST\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\" class=\"form-label mt-4\">
\t\t\t\t<strong>Email</strong>
\t\t\t</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Entrer votre email\">
\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">Nous ne partagerons jamais votre email avec quiconque.</small>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-form-label mt-4\" for=\"sujet\">
\t\t\t\t<strong>Sujet</strong>
\t\t\t</label>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Votre sujet\" name=\"sujet\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"message\" class=\"form-label mt-4\">
\t\t\t\t<strong>Message</strong>
\t\t\t</label>
\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"3\" placeholder=\"Votre message\"></textarea>
\t\t</div>
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer\">
\t</form>

{% endblock %}
", "home/contact.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\home\\contact.html.twig");
    }
}
