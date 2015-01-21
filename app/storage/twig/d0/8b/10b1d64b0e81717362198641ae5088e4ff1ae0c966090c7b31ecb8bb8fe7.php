<?php

/* /home/server/public_html/server.banten-it.com/themes/bits/partials/footer.htm */
class __TwigTemplate_d08b10b1d64b0e81717362198641ae5088e4ff1ae0c966090c7b31ecb8bb8fe7 extends Twig_Template
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
                        <h3 class=\"widget-title\">Contact</h3>
                        <div class=\"widget-body\">
                            <p>+234 23 9873237<br>
                                <a href=\"mailto:#\">some.email@somewhere.com</a><br>
                                <br>
                                234 Hidden Pond Road, Ashland City, TN 37015
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Follow me</h3>
                        <div class=\"widget-body\">
                            <p class=\"follow-me-icons\">
                                <a href=\"https://twitter.com/goradiantweb\"><i class=\"fa fa-twitter fa-2\"></i></a>
                                <a href=\"\"><i class=\"fa fa-dribbble fa-2\"></i></a>
                                <a href=\"\"><i class=\"fa fa-github fa-2\"></i></a>
                                <a href=\"https://www.facebook.com/radiantweb\"><i class=\"fa fa-facebook fa-2\"></i></a>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <h3 class=\"widget-title\">Text widget</h3>
                        <div class=\"widget-body\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                            <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

<section id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    &copy;  ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo ". Designed by <a target=\"_blank\" href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\">ShapeBootstrap</a> &#123;&#123; Powered by <a href=\"http://octobercms.com/\">OctoberCMS</a> &#125;&#125;
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
        return "/home/server/public_html/server.banten-it.com/themes/bits/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 44,  19 => 1,);
    }
}
