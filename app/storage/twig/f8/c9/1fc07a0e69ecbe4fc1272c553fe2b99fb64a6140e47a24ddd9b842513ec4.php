<?php

/* /home/admin/bits.co.id/themes/bits/partials/meta.htm */
class __TwigTemplate_f8c91fc07a0e69ecbe4fc1272c553fe2b99fb64a6140e47a24ddd9b842513ec4 extends Twig_Template
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
        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\">
<title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>

";
        // line 9
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 10
        echo "<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/main.css", 2 => "assets/css/font-awesome.min.css", 3 => "assets/css/animate.min.css", 4 => "assets/css/prettyPhoto.css", 5 => "assets/css/harga.css", 6 => "assets/css/footer.css", 7 => "assets/css/testimonial.css", 8 => "assets/css/karya.css", 9 => "assets/css/hubungi.css", 10 => "assets/css/proses.css", 11 => "assets/css/team.css", 12 => "assets/css/slides.css", 13 => "assets/css/features.css", 14 => "assets/css/responsive.css"));
        // line 26
        echo "\" rel=\"stylesheet\">

<link rel=\"shortcut icon\" href=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 32
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">";
    }

    public function getTemplateName()
    {
        return "/home/admin/bits.co.id/themes/bits/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 32,  65 => 31,  61 => 30,  57 => 29,  53 => 28,  49 => 26,  46 => 10,  43 => 9,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
