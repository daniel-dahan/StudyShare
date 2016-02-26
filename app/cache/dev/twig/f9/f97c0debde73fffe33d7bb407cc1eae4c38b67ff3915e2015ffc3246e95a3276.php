<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8f01a2ad085fb1e88124927af8bb3fe98a963cbf878bfa39460a4d021c7c2410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a89a94de4693213732d922a7648a62043bbcc4264eadfee53b1dbcdb2be18f8 = $this->env->getExtension("native_profiler");
        $__internal_3a89a94de4693213732d922a7648a62043bbcc4264eadfee53b1dbcdb2be18f8->enter($__internal_3a89a94de4693213732d922a7648a62043bbcc4264eadfee53b1dbcdb2be18f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a89a94de4693213732d922a7648a62043bbcc4264eadfee53b1dbcdb2be18f8->leave($__internal_3a89a94de4693213732d922a7648a62043bbcc4264eadfee53b1dbcdb2be18f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8dc9f020b04077772e4eeeda237c3408368eba0aab8357cf469f7eebb8598508 = $this->env->getExtension("native_profiler");
        $__internal_8dc9f020b04077772e4eeeda237c3408368eba0aab8357cf469f7eebb8598508->enter($__internal_8dc9f020b04077772e4eeeda237c3408368eba0aab8357cf469f7eebb8598508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8dc9f020b04077772e4eeeda237c3408368eba0aab8357cf469f7eebb8598508->leave($__internal_8dc9f020b04077772e4eeeda237c3408368eba0aab8357cf469f7eebb8598508_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
