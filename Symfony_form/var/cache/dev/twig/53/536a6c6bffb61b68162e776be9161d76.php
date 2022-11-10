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

/* contact/index.html.twig */
class __TwigTemplate_305494c6baa6c4afe306e985589627a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Formulario de Contacto";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .contact-form__wrapper {
        padding: 3em;
    }
</style>
<div class='justify-content-center d-flex mute-text mt-5 flex-column align-items-center'>

    <p class='text-center text-muted'>Si tiene algún problema <br />puede comunicarse con nosotros <br/> a través de este formulario</p>
    <hr class='w-25' />
</div>
<div class=\"contact-form__wrapper row\">

    <div class='col-9'>
        <h1>Hello ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

        This friendly message is coming from:
        <ul>
            <li>Your controller at <code><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/sebastian/Documentos/Trabajo/IRIDIAN/Prueba/Symfony_form/src/Controller/ContactController.php", 0), "html", null, true);
        echo "\">src/Controller/ContactController.php</a></code></li>
            <li>Your template at <code><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/sebastian/Documentos/Trabajo/IRIDIAN/Prueba/Symfony_form/templates/contact/index.html.twig", 0), "html", null, true);
        echo "\">templates/contact/index.html.twig</a></code></li>
        </ul>
    </div>
    <aside class='col-2'>
        <h3>Contactanos</h3>
        <hr />
        <ul class='justify-content-start list-unstyled text-muted'>
            <li>Email: <a href='mailto: Correo@contacto.com'>Correo@contacto.com</a></li>
            <li>Telefono: 1234-1234567</li>
            <li><br/></li>
            <li>123 Calle Calle</li>
            <li>Oficina oficina</li>
        </ul>
    </aside>
    
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 24,  110 => 23,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formulario de Contacto{% endblock %}

{% block body %}
<style>
    .contact-form__wrapper {
        padding: 3em;
    }
</style>
<div class='justify-content-center d-flex mute-text mt-5 flex-column align-items-center'>

    <p class='text-center text-muted'>Si tiene algún problema <br />puede comunicarse con nosotros <br/> a través de este formulario</p>
    <hr class='w-25' />
</div>
<div class=\"contact-form__wrapper row\">

    <div class='col-9'>
        <h1>Hello {{ controller_name }}! ✅</h1>

        This friendly message is coming from:
        <ul>
            <li>Your controller at <code><a href=\"{{ '/home/sebastian/Documentos/Trabajo/IRIDIAN/Prueba/Symfony_form/src/Controller/ContactController.php'|file_link(0) }}\">src/Controller/ContactController.php</a></code></li>
            <li>Your template at <code><a href=\"{{ '/home/sebastian/Documentos/Trabajo/IRIDIAN/Prueba/Symfony_form/templates/contact/index.html.twig'|file_link(0) }}\">templates/contact/index.html.twig</a></code></li>
        </ul>
    </div>
    <aside class='col-2'>
        <h3>Contactanos</h3>
        <hr />
        <ul class='justify-content-start list-unstyled text-muted'>
            <li>Email: <a href='mailto: Correo@contacto.com'>Correo@contacto.com</a></li>
            <li>Telefono: 1234-1234567</li>
            <li><br/></li>
            <li>123 Calle Calle</li>
            <li>Oficina oficina</li>
        </ul>
    </aside>
    
</div>
{% endblock %}
", "contact/index.html.twig", "/home/sebastian/Documentos/Trabajo/IRIDIAN/Prueba/Symfony_form/templates/contact/index.html.twig");
    }
}
