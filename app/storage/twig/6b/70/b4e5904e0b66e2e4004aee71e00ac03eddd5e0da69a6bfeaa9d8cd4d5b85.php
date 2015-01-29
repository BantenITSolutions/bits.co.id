<?php

/* /home/admin/bits.co.id/themes/bits/partials/slides.htm */
class __TwigTemplate_6b70b4e5904e0b66e2e4004aee71e00ac03eddd5e0da69a6bfeaa9d8cd4d5b85 extends Twig_Template
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
        echo "<div class=\"flexslider\">
    <ul class=\"slides\">
        <li>
            <div class=\"slider-caption\">
                <h1>BITS.CO.ID - Solusi IT Untuk Anda</h1>
                <p>Sistem Infrastruktur IT memiliki peran penting di dalam berbagai segmen industri dan Anda membutuhkan teknologi<br><br>yang tepat untuk pengembangan bisnis dan usaha Anda</p>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("samples/single-post");
        echo "\">Lebih Lanjut</a>
            </div>
            <img src=\"";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide1.jpg");
        echo "\" alt=\"BITS.CO.ID Solusi IT Untuk Anda\" />
        </li>
        <li>
            <div class=\"slider-caption\">
                <h1>WEBSITE ADALAH ASET YANG PALING BERHARGA</h1>
                <p>Website menjadi aset yang paling berharga bagi Perusahaan anda karena branding<br><br>perusahaan anda di publish di seluruh dunia dan Anda memperkenalkan perusahaan kepada publik</p>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->pageFilter("samples/single-post");
        echo "\">Lebih Lanjut</a>
            </div>
            <img src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide3.jpg");
        echo "\" alt=\"\" />
        </li>
        <li>
            <div class=\"slider-caption\">
                <h1>BANGUN WEBSITE DI BITS.CO.ID</h1>
                <p>BITS.CO.ID akan membangun Website anda dengan teknologi yang terbaru dan profesional karena itu merupakan aset berharga anda<br><br>Silahkan lihat keterangan lebih lengkap tentang Jasa Pembuatan Website Profesioanl kami</p>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->pageFilter("samples/single-post");
        echo "\">Lebih Lanjut</a>
            </div>
            <img src=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide2.jpg");
        echo "\" alt=\"\" />
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/admin/bits.co.id/themes/bits/partials/slides.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  55 => 23,  46 => 17,  41 => 15,  32 => 9,  27 => 7,  19 => 1,);
    }
}
