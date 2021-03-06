<?php

/* UserBundle:Studyview:student.html.twig */
class __TwigTemplate_a88712bf1fa105b11e5b19c88adb79682377f9fb40e5f62200afb5827125ef13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15bacd685b55568f240c7bcc429405a6d4e117464709ddabb417ee355fab0a56 = $this->env->getExtension("native_profiler");
        $__internal_15bacd685b55568f240c7bcc429405a6d4e117464709ddabb417ee355fab0a56->enter($__internal_15bacd685b55568f240c7bcc429405a6d4e117464709ddabb417ee355fab0a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Studyview:student.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>StudyShare</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

</head>
<body class=\"home-content\">

<header class=\"global-header\">
    <nav class=\"nav-wrapper\">
        <h1 class=\"logo\">
            <a>StudyShare <br> <span>Université Joseph Fournier - <strong>Filière GTE</strong></span></a>
        </h1>
        <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
            <li>
                <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Mathématiques<i class=\"material-icons right\">arrow_drop_down</i></a>
                <ul id=\"dropdown1\" class=\"dropdown-content\">
                    <li><a href=\"#!\">L1</a></li>
                    <li><a href=\"#!\">L2</a></li>
                    <li><a href=\"#!\">L3</a></li>
                    <li><a href=\"#!\">M1</a></li>
                    <li><a href=\"#!\">M2</a></li>
                </ul>
            </li>
            <li>
                <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Science de l'ingénieur<i class=\"material-icons right\">arrow_drop_down</i></a>
                <ul id=\"dropdown2\" class=\"dropdown-content\">
                    <li><a href=\"#!\">L1</a></li>
                    <li><a href=\"#!\">L2</a></li>
                    <li><a href=\"#!\">L3</a></li>
                    <li><a href=\"#!\">M1</a></li>
                    <li><a href=\"#!\">M2</a></li>
                </ul>

            </li>
            <li>
                <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown3\">Physique<i class=\"material-icons right\">arrow_drop_down</i></a>
                <ul id=\"dropdown3\" class=\"dropdown-content\">
                    <li><a href=\"#!\">L1</a></li>
                    <li><a href=\"#!\">L2</a></li>
                    <li><a href=\"#!\">L3</a></li>
                    <li><a href=\"#!\">M1</a></li>
                    <li><a href=\"#!\">M2</a></li>
                </ul>

            </li>
            <li>
                <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown4\">Anglais<i class=\"material-icons right\">arrow_drop_down</i></a>
                <ul id=\"dropdown4\" class=\"dropdown-content\">
                    <li><a href=\"#!\">L1</a></li>
                    <li><a href=\"#!\">L2</a></li>
                    <li><a href=\"#!\">L3</a></li>
                    <li><a href=\"#!\">M1</a></li>
                    <li><a href=\"#!\">M2</a></li>
                </ul>

            </li>
        </ul>
    </nav>
    <!--USER BLOC-->
    <section class=\"user-box row\">
        <div class=\"user-box--identity right\">

            <img src=\"img/user.png\" alt=\"user icon\" class=\"user-logo circle\">

            <p>
                John Doe - Étudiant - <strong>L1 GTE</strong><br><a href=\"#\">Modifier mon mot de passe</a>
            </p>
            <a href=\"#\" class=\"logout\">&#x2169;</a>

        </div>
    </section>
</header>


<main class=\"content\">
    <section class=\"top-section\">
        <div class=\"container center-align\">
            <h1>Bienvenue dans votre espace <strong>StudyShare GTE</strong></h1>
            <p class=\"style-text-2\">Vous pouvez désormais retouver tous les cours complets de vos enseignants en format PDF ainsi que les cours des années antérieurs et supérieurs.<br>
                StudyShare vous permet également d'échanger avec les enseignants et autres élèves via des sujets de discussion pour chaque cours vous permettant ainsi d'obtenir toute l'aide nécessaire.</p>
        </div>
    </section>
    <section class=\"bg-banner\">
        <article class=\"bloc-navs container\">
            <p>Les cours sont triés par matière et année de formation, à vous de jouer !</p>

            <nav class=\"row\">
                <ul>
                    <li class=\"col s3 bloc-navs--nav\">
                        <span>Mathématiques</span>
                        <ul>
                            <li><a href=\"#\">License 1</a></li>
                            <li><a href=\"#\">License 2</a></li>
                            <li><a href=\"#\">License 3</a></li>
                            <li><a href=\"#\">Master 1</a></li>
                            <li><a href=\"#\">Master 2</a></li>
                        </ul>
                    </li>

                    <li class=\"col s3 bloc-navs--nav\">
                        <span>Science de l'ingénieur</span>
                        <ul>
                            <li><a href=\"#\">License 1</a></li>
                            <li><a href=\"#\">License 2</a></li>
                            <li><a href=\"#\">License 3</a></li>
                            <li><a href=\"#\">Master 1</a></li>
                            <li><a href=\"#\">Master 2</a></li>
                        </ul>
                    </li>
                    <li class=\"col s3 bloc-navs--nav\">
                        <span>Physique</span>
                        <ul>
                            <li><a href=\"#\">License 1</a></li>
                            <li><a href=\"#\">License 2</a></li>
                            <li><a href=\"#\">License 3</a></li>
                            <li><a href=\"#\">Master 1</a></li>
                            <li><a href=\"#\">Master 2</a></li>
                        </ul>
                    </li>

                    <li class=\"col s3 bloc-navs--nav\">
                        <span>Anglais</span>
                        <ul>
                            <li><a href=\"#\">License 1</a></li>
                            <li><a href=\"#\">License 2</a></li>
                            <li><a href=\"#\">License 3</a></li>
                            <li><a href=\"#\">Master 1</a></li>
                            <li><a href=\"#\">Master 2</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </article>
    </section>

    <section>
        <article class=\"container center-align\">
            <div class=\"row valign-wrapper\">
                <div class=\"col s6 support-img\">
                    <img src=\"img/admin-support.png\" alt=\"support admin\" class=\"responsive-img\">
                </div>
                <div class=\"col s6 left-align valign\">
                    <h2>Un problème, une question ?</h2>
                    <p class=\"style-text-2\">Vous pouvez contacter l'administrateur du site :<br><br>
                        - par mail à <strong>admin@studyshare-ujfg.com</strong><br>
                        - par téléphonne au <strong>05&nbsp;85&nbsp;09&nbsp;75&nbsp;10</strong></p>
                </div>
            </div>
        </article>
    </section>
</main>
<footer class=\"global-footer login-page-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <p class=\"col l6 m12\">©StudyShare UJF GTE - 2016</p>
            <ul class=\"col l6 m12 right-align footer-links\">
                <li><a href=\"#\">Mentions légales</a></li>
                <li><a href=\"#\">Contact</a></li>
                <li><a href=\"#\">Déconnexion</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
<script src=\"http://code.jquery.com/jquery-2.2.0.min.js\"></script>
<script src=\"js/materialize.min.js\"></script>
</html>";
        
        $__internal_15bacd685b55568f240c7bcc429405a6d4e117464709ddabb417ee355fab0a56->leave($__internal_15bacd685b55568f240c7bcc429405a6d4e117464709ddabb417ee355fab0a56_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Studyview:student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  32 => 9,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>StudyShare</title>*/
/*     <meta name="description" content="">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/* */
/* </head>*/
/* <body class="home-content">*/
/* */
/* <header class="global-header">*/
/*     <nav class="nav-wrapper">*/
/*         <h1 class="logo">*/
/*             <a>StudyShare <br> <span>Université Joseph Fournier - <strong>Filière GTE</strong></span></a>*/
/*         </h1>*/
/*         <ul id="nav-mobile" class="right hide-on-med-and-down">*/
/*             <li>*/
/*                 <a class="dropdown-button" href="#!" data-activates="dropdown1">Mathématiques<i class="material-icons right">arrow_drop_down</i></a>*/
/*                 <ul id="dropdown1" class="dropdown-content">*/
/*                     <li><a href="#!">L1</a></li>*/
/*                     <li><a href="#!">L2</a></li>*/
/*                     <li><a href="#!">L3</a></li>*/
/*                     <li><a href="#!">M1</a></li>*/
/*                     <li><a href="#!">M2</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>*/
/*                 <a class="dropdown-button" href="#!" data-activates="dropdown2">Science de l'ingénieur<i class="material-icons right">arrow_drop_down</i></a>*/
/*                 <ul id="dropdown2" class="dropdown-content">*/
/*                     <li><a href="#!">L1</a></li>*/
/*                     <li><a href="#!">L2</a></li>*/
/*                     <li><a href="#!">L3</a></li>*/
/*                     <li><a href="#!">M1</a></li>*/
/*                     <li><a href="#!">M2</a></li>*/
/*                 </ul>*/
/* */
/*             </li>*/
/*             <li>*/
/*                 <a class="dropdown-button" href="#!" data-activates="dropdown3">Physique<i class="material-icons right">arrow_drop_down</i></a>*/
/*                 <ul id="dropdown3" class="dropdown-content">*/
/*                     <li><a href="#!">L1</a></li>*/
/*                     <li><a href="#!">L2</a></li>*/
/*                     <li><a href="#!">L3</a></li>*/
/*                     <li><a href="#!">M1</a></li>*/
/*                     <li><a href="#!">M2</a></li>*/
/*                 </ul>*/
/* */
/*             </li>*/
/*             <li>*/
/*                 <a class="dropdown-button" href="#!" data-activates="dropdown4">Anglais<i class="material-icons right">arrow_drop_down</i></a>*/
/*                 <ul id="dropdown4" class="dropdown-content">*/
/*                     <li><a href="#!">L1</a></li>*/
/*                     <li><a href="#!">L2</a></li>*/
/*                     <li><a href="#!">L3</a></li>*/
/*                     <li><a href="#!">M1</a></li>*/
/*                     <li><a href="#!">M2</a></li>*/
/*                 </ul>*/
/* */
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/*     <!--USER BLOC-->*/
/*     <section class="user-box row">*/
/*         <div class="user-box--identity right">*/
/* */
/*             <img src="img/user.png" alt="user icon" class="user-logo circle">*/
/* */
/*             <p>*/
/*                 John Doe - Étudiant - <strong>L1 GTE</strong><br><a href="#">Modifier mon mot de passe</a>*/
/*             </p>*/
/*             <a href="#" class="logout">&#x2169;</a>*/
/* */
/*         </div>*/
/*     </section>*/
/* </header>*/
/* */
/* */
/* <main class="content">*/
/*     <section class="top-section">*/
/*         <div class="container center-align">*/
/*             <h1>Bienvenue dans votre espace <strong>StudyShare GTE</strong></h1>*/
/*             <p class="style-text-2">Vous pouvez désormais retouver tous les cours complets de vos enseignants en format PDF ainsi que les cours des années antérieurs et supérieurs.<br>*/
/*                 StudyShare vous permet également d'échanger avec les enseignants et autres élèves via des sujets de discussion pour chaque cours vous permettant ainsi d'obtenir toute l'aide nécessaire.</p>*/
/*         </div>*/
/*     </section>*/
/*     <section class="bg-banner">*/
/*         <article class="bloc-navs container">*/
/*             <p>Les cours sont triés par matière et année de formation, à vous de jouer !</p>*/
/* */
/*             <nav class="row">*/
/*                 <ul>*/
/*                     <li class="col s3 bloc-navs--nav">*/
/*                         <span>Mathématiques</span>*/
/*                         <ul>*/
/*                             <li><a href="#">License 1</a></li>*/
/*                             <li><a href="#">License 2</a></li>*/
/*                             <li><a href="#">License 3</a></li>*/
/*                             <li><a href="#">Master 1</a></li>*/
/*                             <li><a href="#">Master 2</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li class="col s3 bloc-navs--nav">*/
/*                         <span>Science de l'ingénieur</span>*/
/*                         <ul>*/
/*                             <li><a href="#">License 1</a></li>*/
/*                             <li><a href="#">License 2</a></li>*/
/*                             <li><a href="#">License 3</a></li>*/
/*                             <li><a href="#">Master 1</a></li>*/
/*                             <li><a href="#">Master 2</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="col s3 bloc-navs--nav">*/
/*                         <span>Physique</span>*/
/*                         <ul>*/
/*                             <li><a href="#">License 1</a></li>*/
/*                             <li><a href="#">License 2</a></li>*/
/*                             <li><a href="#">License 3</a></li>*/
/*                             <li><a href="#">Master 1</a></li>*/
/*                             <li><a href="#">Master 2</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li class="col s3 bloc-navs--nav">*/
/*                         <span>Anglais</span>*/
/*                         <ul>*/
/*                             <li><a href="#">License 1</a></li>*/
/*                             <li><a href="#">License 2</a></li>*/
/*                             <li><a href="#">License 3</a></li>*/
/*                             <li><a href="#">Master 1</a></li>*/
/*                             <li><a href="#">Master 2</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </nav>*/
/*         </article>*/
/*     </section>*/
/* */
/*     <section>*/
/*         <article class="container center-align">*/
/*             <div class="row valign-wrapper">*/
/*                 <div class="col s6 support-img">*/
/*                     <img src="img/admin-support.png" alt="support admin" class="responsive-img">*/
/*                 </div>*/
/*                 <div class="col s6 left-align valign">*/
/*                     <h2>Un problème, une question ?</h2>*/
/*                     <p class="style-text-2">Vous pouvez contacter l'administrateur du site :<br><br>*/
/*                         - par mail à <strong>admin@studyshare-ujfg.com</strong><br>*/
/*                         - par téléphonne au <strong>05&nbsp;85&nbsp;09&nbsp;75&nbsp;10</strong></p>*/
/*                 </div>*/
/*             </div>*/
/*         </article>*/
/*     </section>*/
/* </main>*/
/* <footer class="global-footer login-page-footer">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <p class="col l6 m12">©StudyShare UJF GTE - 2016</p>*/
/*             <ul class="col l6 m12 right-align footer-links">*/
/*                 <li><a href="#">Mentions légales</a></li>*/
/*                 <li><a href="#">Contact</a></li>*/
/*                 <li><a href="#">Déconnexion</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* </body>*/
/* <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>*/
/* <script src="js/materialize.min.js"></script>*/
/* </html>*/
