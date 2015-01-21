<?php

/* /home/server/public_html/server.banten-it.com/themes/bits/partials/features.htm */
class __TwigTemplate_752859f19733e9fdf98ea4940a03088f44517b45c69985c9e162bde4177555ae extends Twig_Template
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
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Awesome Features</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    <img class=\"img-responsive\" src=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/main-feature.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-line-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">UX design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-cubes\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">UI design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/server/public_html/server.banten-it.com/themes/bits/partials/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
