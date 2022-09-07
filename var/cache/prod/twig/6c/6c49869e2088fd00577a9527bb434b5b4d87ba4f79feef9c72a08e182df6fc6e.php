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

/* register/confirmation_email.html.twig */
class __TwigTemplate_7a5c2cc55357e29f2ae11187113948a5ae1bec8f5234f0ca1ad00e96b6dfd629 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1>Bonjour ! Merci de confirmer votre email !</h1>

<p>
    Merci de confirmer votre adresse email en cliquant sur le lien suivant : <br><br>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["signedUrl"] ?? null), "html", null, true);
        echo "\">Confirmer mon email</a>.
    Ce lien expire dans ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["expiresAtMessageKey"] ?? null), ($context["expiresAtMessageData"] ?? null), "VerifyEmailBundle"), "html", null, true);
        echo ".
</p>

<p>
    A tout de suite !!
</p>
";
    }

    public function getTemplateName()
    {
        return "register/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "register/confirmation_email.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/register/confirmation_email.html.twig");
    }
}
