<?php

/* UserBundle:Studyview:add-cour.html.twig */
class __TwigTemplate_b76faf2db7ef977af6fa3319d387bbe0d434afe6e73287514259587094463ef8 extends Twig_Template
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
        $__internal_383b8fe2721921f4d532cdd52c22f6ad69a1dc6228f7f2e06d98b8b1e786a1b0 = $this->env->getExtension("native_profiler");
        $__internal_383b8fe2721921f4d532cdd52c22f6ad69a1dc6228f7f2e06d98b8b1e786a1b0->enter($__internal_383b8fe2721921f4d532cdd52c22f6ad69a1dc6228f7f2e06d98b8b1e786a1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Studyview:add-cour.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\"><html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>StudyShare</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"stylesheet\" href=\"css/materialize.min.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">

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
                John Doe - Enseignant - <strong>Chimie</strong><br><a href=\"#\">Modifier mon mot de passe</a>
            </p>
            <a href=\"#\" class=\"logout\">&#x2169;</a>

        </div>
        <div class=\"user-box--teacher-admin right\">
            <ul class=\"admin-link\">
                <li><a href=\"#\"><em class=\"transition-hover\"></em>Ajouter un cours</a></li>
                <li><a href=\"#\"><em class=\"transition-hover\"></em>Gérer mes cours publiés</a></li>
            </ul>
        </div>
    </section>
</header>

<main class=\"content\">
    <section class=\"top-section no-bottom-style\">
        <div class=\"container center-align\">
            <h1>Nouveau cours</h1>
            <p class=\"style-text-2\">Bienvenue dans votre back office, cette section vous permet d'ajouter un nouveau cours pour vos éléves.<br>
            Nous rappelons que <strong>l'upload d'un PDF correspondant à un cours est obligatoire</strong>, les fichiers .jpg, .png, .txt ... ne sont pas acceptés.</p>
        </div>
    </section>


        <form action=\"\" method=\"post\" class=\"container form-add-cour\">
            <div class=\"input-field\">
                <input id=\"title\" type=\"text\" class=\"validate\" required>
                <label for=\"title\">Titre du cours</label>
            </div>

            <div class=\"input-field\">
                <textarea id=\"description\" class=\"materialize-textarea\"></textarea>
                <label for=\"description\">Description du cours</label>
            </div>

            <div class=\"row\">
                <div class=\"input-field col s4\">
                    <select required>
                        <option value=\"\" disabled selected>Sélectionnez le niveau du cours</option>
                        <optgroup label=\"Mathématiques\">
                            <option value=\"1\">Maths L1</option>
                            <option value=\"2\">Maths L2</option>
                            <option value=\"3\">Maths L3</option>
                            <option value=\"4\">Maths M1</option>
                            <option value=\"5\">Maths M2</option>
                        </optgroup>
                        <optgroup label=\"Science de l'ingénieur\">
                            <option value=\"6\">SI L1</option>
                            <option value=\"7\">SI L2</option>
                            <option value=\"8\">SI L3</option>
                            <option value=\"9\">SI M1</option>
                            <option value=\"10\">SI M2</option>
                        </optgroup>
                        <optgroup label=\"Physique\">
                            <option value=\"11\">Physique L1</option>
                            <option value=\"12\">Physique L2</option>
                            <option value=\"13\">Physique L3</option>
                            <option value=\"14\">Physique M1</option>
                            <option value=\"15\">Physique M2</option>
                        </optgroup>
                        <optgroup label=\"Anglais\">
                            <option value=\"16\">Anglais L1</option>
                            <option value=\"17\">Anglais L2</option>
                            <option value=\"18\">Anglais L3</option>
                            <option value=\"19\">Anglais M1</option>
                            <option value=\"20\">Anglais M2</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class=\"file-field input-field\">
                <div class=\"btn\">
                    <span>PDF</span>
                    <input type=\"file\" required>
                </div>
                <div class=\"file-path-wrapper\">
                    <input class=\"file-path validate\" type=\"text\" placeholder=\"Télécharger le PDF du cours\">
                </div>
            </div>

            <div class=\"input-field col s3\">
                <input type=\"submit\" value=\"Publier le nouveau cours\">
            </div>

        </form>


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
<script src=\"js/custom.js\"></script>
</html>";
        
        $__internal_383b8fe2721921f4d532cdd52c22f6ad69a1dc6228f7f2e06d98b8b1e786a1b0->leave($__internal_383b8fe2721921f4d532cdd52c22f6ad69a1dc6228f7f2e06d98b8b1e786a1b0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Studyview:add-cour.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="fr"><html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>StudyShare</title>*/
/*     <meta name="description" content="">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <link rel="stylesheet" href="css/materialize.min.css">*/
/*     <link rel="stylesheet" href="css/style.css">*/
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
/* */
/*         <div class="user-box--identity right">*/
/* */
/*             <img src="img/user.png" alt="user icon" class="user-logo circle">*/
/* */
/*             <p>*/
/*                 John Doe - Enseignant - <strong>Chimie</strong><br><a href="#">Modifier mon mot de passe</a>*/
/*             </p>*/
/*             <a href="#" class="logout">&#x2169;</a>*/
/* */
/*         </div>*/
/*         <div class="user-box--teacher-admin right">*/
/*             <ul class="admin-link">*/
/*                 <li><a href="#"><em class="transition-hover"></em>Ajouter un cours</a></li>*/
/*                 <li><a href="#"><em class="transition-hover"></em>Gérer mes cours publiés</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </section>*/
/* </header>*/
/* */
/* <main class="content">*/
/*     <section class="top-section no-bottom-style">*/
/*         <div class="container center-align">*/
/*             <h1>Nouveau cours</h1>*/
/*             <p class="style-text-2">Bienvenue dans votre back office, cette section vous permet d'ajouter un nouveau cours pour vos éléves.<br>*/
/*             Nous rappelons que <strong>l'upload d'un PDF correspondant à un cours est obligatoire</strong>, les fichiers .jpg, .png, .txt ... ne sont pas acceptés.</p>*/
/*         </div>*/
/*     </section>*/
/* */
/* */
/*         <form action="" method="post" class="container form-add-cour">*/
/*             <div class="input-field">*/
/*                 <input id="title" type="text" class="validate" required>*/
/*                 <label for="title">Titre du cours</label>*/
/*             </div>*/
/* */
/*             <div class="input-field">*/
/*                 <textarea id="description" class="materialize-textarea"></textarea>*/
/*                 <label for="description">Description du cours</label>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s4">*/
/*                     <select required>*/
/*                         <option value="" disabled selected>Sélectionnez le niveau du cours</option>*/
/*                         <optgroup label="Mathématiques">*/
/*                             <option value="1">Maths L1</option>*/
/*                             <option value="2">Maths L2</option>*/
/*                             <option value="3">Maths L3</option>*/
/*                             <option value="4">Maths M1</option>*/
/*                             <option value="5">Maths M2</option>*/
/*                         </optgroup>*/
/*                         <optgroup label="Science de l'ingénieur">*/
/*                             <option value="6">SI L1</option>*/
/*                             <option value="7">SI L2</option>*/
/*                             <option value="8">SI L3</option>*/
/*                             <option value="9">SI M1</option>*/
/*                             <option value="10">SI M2</option>*/
/*                         </optgroup>*/
/*                         <optgroup label="Physique">*/
/*                             <option value="11">Physique L1</option>*/
/*                             <option value="12">Physique L2</option>*/
/*                             <option value="13">Physique L3</option>*/
/*                             <option value="14">Physique M1</option>*/
/*                             <option value="15">Physique M2</option>*/
/*                         </optgroup>*/
/*                         <optgroup label="Anglais">*/
/*                             <option value="16">Anglais L1</option>*/
/*                             <option value="17">Anglais L2</option>*/
/*                             <option value="18">Anglais L3</option>*/
/*                             <option value="19">Anglais M1</option>*/
/*                             <option value="20">Anglais M2</option>*/
/*                         </optgroup>*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="file-field input-field">*/
/*                 <div class="btn">*/
/*                     <span>PDF</span>*/
/*                     <input type="file" required>*/
/*                 </div>*/
/*                 <div class="file-path-wrapper">*/
/*                     <input class="file-path validate" type="text" placeholder="Télécharger le PDF du cours">*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="input-field col s3">*/
/*                 <input type="submit" value="Publier le nouveau cours">*/
/*             </div>*/
/* */
/*         </form>*/
/* */
/* */
/* </main>*/
/* */
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
/* <script src="js/custom.js"></script>*/
/* </html>*/
