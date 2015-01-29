<?php

/* /home/admin/bits.co.id/themes/bits/partials/nav.htm */
class __TwigTemplate_dbc95e02c74e130b7bc439d1fba41f2aa9ebf49d6539790c06d0c271dcd394a1 extends Twig_Template
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
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Beranda"), "blog" => array(0 => "blog", 1 => "Blog"), "pages" => array("name" => "Jasa Kami", "sublinks" => array("services" => array(0 => "samples/services", 1 => "Web Development"), "pricing" => array(0 => "samples/pricing", 1 => "Apps Development"), "error" => array(0 => "error", 1 => "Android & iOS Apps"), "404" => array(0 => "404", 1 => "Online Course"), "shortcodes" => array(0 => "samples/shortcodes", 1 => "IT Consultant"))), "page" => array("name" => "Hosting", "sublinks" => array("error" => array(0 => "error", 1 => "Web Hosting"), "404" => array(0 => "404", 1 => "Reseller Hosting"), "shortcodes" => array(0 => "samples/shortcodes", 1 => "VPS Managed"), "short" => array(0 => "samples/short", 1 => "VPS Unmanaged"), "services" => array(0 => "samples/services", 1 => "Install VPS & Server"))), "portfolio" => array(0 => "samples/portfolio", 1 => "Hasil Karya"), "about" => array(0 => "samples/about", 1 => "Tentang Kami"), "contact" => array(0 => "samples/contact", 1 => "Hubungi Kami"));
        // line 31
        echo "
";
        // line 52
        echo "
";
        // line 53
        $context["nav"] = $this;
        // line 54
        echo "
<nav class=\"navbar navbar-inverse\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 64
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t";
        // line 68
        echo $context["nav"]->getrender_menu((isset($context["links"]) ? $context["links"] : null));
        echo "
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->";
    }

    // line 32
    public function getrender_menu($__links__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 34
                echo "        <li class=\"";
                echo ((($context["code"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 36
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('CMS')->pageFilter((($this->getAttribute($context["link"], "page", array())) ? ($this->getAttribute($context["link"], "page", array())) : ($this->getAttribute($context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 37
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 38
                echo "                class=\"";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 40
                echo twig_escape_filter($this->env, (($this->getAttribute($context["link"], "name", array())) ? ($this->getAttribute($context["link"], "name", array())) : ($this->getAttribute($context["link"], 1, array(), "array"))), "html", null, true);
                echo "
                ";
                // line 41
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 42
                echo "            </a>
            ";
                // line 43
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    // line 44
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 46
                    echo $this->getAttribute($this, "render_menu", array(0 => $this->getAttribute($context["link"], "sublinks", array())), "method");
                    echo "
                </ul>
            ";
                }
                // line 49
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "/home/admin/bits.co.id/themes/bits/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  114 => 46,  110 => 44,  108 => 43,  105 => 42,  101 => 41,  97 => 40,  91 => 38,  87 => 37,  83 => 36,  75 => 34,  70 => 33,  59 => 32,  50 => 68,  41 => 64,  29 => 54,  27 => 53,  24 => 52,  21 => 31,  19 => 2,);
    }
}
