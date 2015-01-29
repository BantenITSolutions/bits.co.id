<?php

/* /home/admin/bits.co.id/themes/bits/partials/footer.htm */
class __TwigTemplate_5d14557825ea041617b8098b9d4540f64c74edb936e798a4b0fb338930076b44 extends Twig_Template
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
        echo "<footer id=\"footerku\">
        <div class=\"footer1\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Blog</h3>
                        <div class=\"widget-body\">
                            <ul>
                                <li>
                                    <a href=\"#\">Install Nginx, MariaDB, PHP di Ubuntu</a>
                                </li>
                                <li>
                                    <a href=\"#\">Cara Install Laravel PHP Framework</a>
                                </li>
                                <li>
                                    <a href=\"#\">Membangun Website Dengan OctoberCMS</a>
                                </li>
                                <li>
                                    <a href=\"#\">Install Kloxo MR Hosting Panel di Ubuntu</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Jasa Kami</h3>
                        <div class=\"widget-body\">
                            <ul>
                                <li>
                                    <a href=\"#\">Jasa Pembuatan Website</a>
                                </li>
                                <li>
                                    <a href=\"#\">Jasa Pembuatan Program Aplikasi</a>
                                </li>
                                <li>
                                    <a href=\"#\">Jasa Install / Manage VPS &amp; Server</a>
                                </li>
                                <li>
                                    <a href=\"#\">Web Hosting &amp; Virtual Private Server</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <h3 class=\"widget-title\">Tentang BITS.co.id</h3>
                        <div class=\"widget-body\">
                            <p>BITS merupakan Perusahaan yang bergerak di bidang Teknologi Informasi. BITS berdiri pada 29 Agustus 2013 dan bertempat di Jl. Raya Cilegon Km.03 Serang Trade Center CC 15 Taktakan Serang 42162 Banten.</p>
                            <p>Untuk Informasi lebih lengkap mengenai BITS, silahkan kunjungi halaman <a href=\"/tentang-kami\">Tentang Kami</a>.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

<section id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    &copy; Copyright 2013 - ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://www.bits.co.id/\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>. Powered <em>by</em> <a href=\"http://octobercms.com/\" target=\"_blank\">OctoberCMS</a>
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"social-icons\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-flickr\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-github\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
</section>

    </footer>";
    }

    public function getTemplateName()
    {
        return "/home/admin/bits.co.id/themes/bits/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 61,  19 => 1,);
    }
}
