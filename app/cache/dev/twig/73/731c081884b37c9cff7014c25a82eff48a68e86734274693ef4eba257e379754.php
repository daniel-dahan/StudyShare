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
        $__internal_3c779e49aef625c41bbbb6ae853fa566509f942f89c84bda110dec37b7ba377f = $this->env->getExtension("native_profiler");
        $__internal_3c779e49aef625c41bbbb6ae853fa566509f942f89c84bda110dec37b7ba377f->enter($__internal_3c779e49aef625c41bbbb6ae853fa566509f942f89c84bda110dec37b7ba377f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c779e49aef625c41bbbb6ae853fa566509f942f89c84bda110dec37b7ba377f->leave($__internal_3c779e49aef625c41bbbb6ae853fa566509f942f89c84bda110dec37b7ba377f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13360d13a94c27676b659fe2e9925907a9f3eec920d6a8f194a9a123c5b1903f = $this->env->getExtension("native_profiler");
        $__internal_13360d13a94c27676b659fe2e9925907a9f3eec920d6a8f194a9a123c5b1903f->enter($__internal_13360d13a94c27676b659fe2e9925907a9f3eec920d6a8f194a9a123c5b1903f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13360d13a94c27676b659fe2e9925907a9f3eec920d6a8f194a9a123c5b1903f->leave($__internal_13360d13a94c27676b659fe2e9925907a9f3eec920d6a8f194a9a123c5b1903f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ccf27244528208d6d581fc85f53a51eb47f5ee924499781cdb49bf9629ecd03 = $this->env->getExtension("native_profiler");
        $__internal_2ccf27244528208d6d581fc85f53a51eb47f5ee924499781cdb49bf9629ecd03->enter($__internal_2ccf27244528208d6d581fc85f53a51eb47f5ee924499781cdb49bf9629ecd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ccf27244528208d6d581fc85f53a51eb47f5ee924499781cdb49bf9629ecd03->leave($__internal_2ccf27244528208d6d581fc85f53a51eb47f5ee924499781cdb49bf9629ecd03_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f445ff55cf8abd050405bdba6024a945d63539a161abcceb4d80520cc77f76dc = $this->env->getExtension("native_profiler");
        $__internal_f445ff55cf8abd050405bdba6024a945d63539a161abcceb4d80520cc77f76dc->enter($__internal_f445ff55cf8abd050405bdba6024a945d63539a161abcceb4d80520cc77f76dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f445ff55cf8abd050405bdba6024a945d63539a161abcceb4d80520cc77f76dc->leave($__internal_f445ff55cf8abd050405bdba6024a945d63539a161abcceb4d80520cc77f76dc_prof);

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
