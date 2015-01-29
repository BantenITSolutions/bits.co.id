<?php

/* /home/admin/bits.co.id/themes/bits/partials/testimonial.htm */
class __TwigTemplate_eeb1ad83daa1a5a606b692f0ee9de3713efd6db5d8ec8094dc0207a5a03fe724 extends Twig_Template
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
        echo "<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2\">

                    <div id=\"carousel-testimonial\" class=\"carousel slide text-center\" data-ride=\"carousel\">
                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/testimonial/01.jpg");
        echo "\" alt=\"\"></p>
                                <h4>Sugiarto</h4>
                                <small>IT Manager - Jamkrida Banten</small>
                                <p>Pelayanan dan dukungan yang sangat baik dari BITS yang sudah membangun Infrastruktur Jaringan, Server &amp; Website Jamkrida Banten.</p>
                            </div>
                            <div class=\"item\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/testimonial/01.jpg");
        echo "\" alt=\"\"></p>
                                <h4>Indra Kusuma</h4>
                                <small>Architect Design - Gubah Massa Studio</small>
                                <p>Saya sebagai seorang desainer pun salut dengan kinerja team BITS yang bisa mencurahkan desain apa yang saya inginkan untuk website Gubah Massa Studio.</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class=\"btns\">
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"next\">
                                <span class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/admin/bits.co.id/themes/bits/partials/testimonial.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  29 => 9,  19 => 1,);
    }
}
