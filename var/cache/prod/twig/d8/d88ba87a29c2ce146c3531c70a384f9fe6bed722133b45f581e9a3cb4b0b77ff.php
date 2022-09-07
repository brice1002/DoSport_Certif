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
class __TwigTemplate_9441b40429335a27b0f1f71997870dd0a72a7d890b635327e6320b2f6e993389 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contact - Do Sport
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/contact.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/home/contact.html.twig");
    }
}
