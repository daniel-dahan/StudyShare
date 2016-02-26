<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_287dbeb82a6adf92a6a550d88a7e925b352f01cee99711d67dca65bf284a2474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f9e93dce40617b0fc244c8196b14ee511c25c5123707dc01ef44ae1a01447f5 = $this->env->getExtension("native_profiler");
        $__internal_5f9e93dce40617b0fc244c8196b14ee511c25c5123707dc01ef44ae1a01447f5->enter($__internal_5f9e93dce40617b0fc244c8196b14ee511c25c5123707dc01ef44ae1a01447f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <link rel=\"stylesheet\" href=\"css/materialize.min.css\">
        <link rel=\"stylesheet\" href=\"css/style.css\">
    </head>
    <body>


        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
        <div>
            ";
        // line 22
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "        </div>
    </body>

    <script src=\"http://code.jquery.com/jquery-2.2.0.min.js\"></script>
    <script src=\"js/materialize.min.js\"></script>
    <script src=\"js/custom.js\"></script>
</html>
";
        
        $__internal_5f9e93dce40617b0fc244c8196b14ee511c25c5123707dc01ef44ae1a01447f5->leave($__internal_5f9e93dce40617b0fc244c8196b14ee511c25c5123707dc01ef44ae1a01447f5_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1fc7d63cd71151faea6023ddd4bc1fa2c561d7408cac5a5f6bf108c2cb4f5daa = $this->env->getExtension("native_profiler");
        $__internal_1fc7d63cd71151faea6023ddd4bc1fa2c561d7408cac5a5f6bf108c2cb4f5daa->enter($__internal_1fc7d63cd71151faea6023ddd4bc1fa2c561d7408cac5a5f6bf108c2cb4f5daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_1fc7d63cd71151faea6023ddd4bc1fa2c561d7408cac5a5f6bf108c2cb4f5daa->leave($__internal_1fc7d63cd71151faea6023ddd4bc1fa2c561d7408cac5a5f6bf108c2cb4f5daa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  86 => 22,  72 => 24,  70 => 22,  66 => 20,  60 => 19,  51 => 16,  46 => 15,  41 => 14,  37 => 13,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*         <link rel="stylesheet" href="css/materialize.min.css">*/
/*         <link rel="stylesheet" href="css/style.css">*/
/*     </head>*/
/*     <body>*/
/* */
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/* */
/*     <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>*/
/*     <script src="js/materialize.min.js"></script>*/
/*     <script src="js/custom.js"></script>*/
/* </html>*/
/* */
