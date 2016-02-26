<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b242d2635a8d04417e55fefb80576236f4403fa542c211f9bc774deca480ac62 extends Twig_Template
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
        $__internal_5132f0bd6e798ba46e3e52dd0484da85bae3867cc5a66f187e9c576740451b95 = $this->env->getExtension("native_profiler");
        $__internal_5132f0bd6e798ba46e3e52dd0484da85bae3867cc5a66f187e9c576740451b95->enter($__internal_5132f0bd6e798ba46e3e52dd0484da85bae3867cc5a66f187e9c576740451b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5132f0bd6e798ba46e3e52dd0484da85bae3867cc5a66f187e9c576740451b95->leave($__internal_5132f0bd6e798ba46e3e52dd0484da85bae3867cc5a66f187e9c576740451b95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36f3284c07b31549d769f3187f5109cd12c3fe878006e952345abc9b4ec58197 = $this->env->getExtension("native_profiler");
        $__internal_36f3284c07b31549d769f3187f5109cd12c3fe878006e952345abc9b4ec58197->enter($__internal_36f3284c07b31549d769f3187f5109cd12c3fe878006e952345abc9b4ec58197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36f3284c07b31549d769f3187f5109cd12c3fe878006e952345abc9b4ec58197->leave($__internal_36f3284c07b31549d769f3187f5109cd12c3fe878006e952345abc9b4ec58197_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f71e2e6a852451ed85e078282459f3d378cc4a593d55de5c073be890d750f65 = $this->env->getExtension("native_profiler");
        $__internal_8f71e2e6a852451ed85e078282459f3d378cc4a593d55de5c073be890d750f65->enter($__internal_8f71e2e6a852451ed85e078282459f3d378cc4a593d55de5c073be890d750f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f71e2e6a852451ed85e078282459f3d378cc4a593d55de5c073be890d750f65->leave($__internal_8f71e2e6a852451ed85e078282459f3d378cc4a593d55de5c073be890d750f65_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd90db175307124356873dda954f31f15977f26809104eb4b9239023ad6386c7 = $this->env->getExtension("native_profiler");
        $__internal_cd90db175307124356873dda954f31f15977f26809104eb4b9239023ad6386c7->enter($__internal_cd90db175307124356873dda954f31f15977f26809104eb4b9239023ad6386c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd90db175307124356873dda954f31f15977f26809104eb4b9239023ad6386c7->leave($__internal_cd90db175307124356873dda954f31f15977f26809104eb4b9239023ad6386c7_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
