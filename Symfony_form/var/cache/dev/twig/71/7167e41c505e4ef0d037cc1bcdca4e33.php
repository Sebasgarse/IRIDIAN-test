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

/* _header.html.twig */
class __TwigTemplate_726d42cefd8194be546a0ccf18784a0c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 1
        echo "<header class=\"p-3 text-bg-dark\">
    <div class=\"container\">
      <div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">

        <div class=\"offset-md-9\">
        </div>

        <ul class=\"nav col-3 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 text-end\">
          <li><a href=\"#\" class=\"nav-link px-2 text-white\">Home</a></li>
          <li><a href=\"#\" class=\"nav-link px-2 text-white\">Contactanos</a></li>
          <li><a href=\"#\" class=\"nav-link px-2 text-white\">Acerca</a></li>
        </ul>

      </div>
    </div>
  </header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"p-3 text-bg-dark\">
    <div class=\"container\">
      <div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">

        <div class=\"offset-md-9\">
        </div>

        <ul class=\"nav col-3 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 text-end\">
          <li><a href=\"#\" class=\"nav-link px-2 text-white\">Home</a></li>
          <li><a href=\"#\" class=\"nav-link px-2 text-white\">Contactanos</a></li>
          <li><a href=\"#\" class=\"nav-link px-2 text-white\">Acerca</a></li>
        </ul>

      </div>
    </div>
  </header>", "_header.html.twig", "/home/sebastian/Documentos/Trabajo/IRIDIAN/Prueba/Symfony_form/templates/_header.html.twig");
    }
}
