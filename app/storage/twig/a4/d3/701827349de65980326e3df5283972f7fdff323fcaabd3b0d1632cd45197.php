<?php

/* /home/admin/bits.co.id/themes/bits/pages/error.htm */
class __TwigTemplate_a4d3701827349de65980326e3df5283972f7fdff323fcaabd3b0d1632cd45197 extends Twig_Template
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
        echo "<section id=\"error\" class=\"container text-center\">
        <h1>Ooops! An Error Occured.</h1>
        <p>We're so sorry, the page you requested cannot be displayed due to an error.</p>
        <p><small><em>Error code: 500</em></small></p>
\t\t<a class=\"btn btn-primary\" href=\"";
        // line 5
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->";
    }

    public function getTemplateName()
    {
        return "/home/admin/bits.co.id/themes/bits/pages/error.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
