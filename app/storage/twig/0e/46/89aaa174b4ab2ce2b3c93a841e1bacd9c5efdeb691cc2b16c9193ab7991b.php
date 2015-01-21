<?php

/* /home/server/public_html/server.banten-it.com/themes/bits/partials/hubungi.htm */
class __TwigTemplate_0e4689aaa174b4ab2ce2b3c93a841e1bacd9c5efdeb691cc2b16c9193ab7991b extends Twig_Template
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
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Feel free to send a message</h2>
                    <img src=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
                </div>
            </div>
    </div>
    <div id=\"contact-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"product-item col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <div class=\"message-form\">
                                <form role=\"form\" action=\"#\" method=\"post\" class=\"send-message\">
                                    <div class=\"row\">
                                    <div class=\"name col-md-4\">
                                        <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" class=\"form-control\" required=\"required\">
                                    </div>
                                    <div class=\"email col-md-4\">
                                        <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\" class=\"form-control\" required=\"required\">
                                    </div>
                                    <div class=\"subject col-md-4\">
                                        <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" class=\"form-control\" required=\"required\">
                                    </div>
                                    </div>
                                    <div class=\"row\">
                                    <div class=\"text col-md-12\">
                                        <textarea name=\"text\" placeholder=\"Message\" class=\"form-control\" required=\"required\"></textarea>
                                    </div>
                                    </div>
                                    <div class=\"send\">
                                        <button type=\"submit\" name=\"submit\" required=\"required\">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"info\">
                                <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit. </p>
                                <ul>
                                    <li><i class=\"fa fa-phone\"></i>010-020-0340</li>
                                    <li><i class=\"fa fa-globe\"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                                    <li><i class=\"fa fa-envelope\"></i><a href=\"#\">info@company.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/server/public_html/server.banten-it.com/themes/bits/partials/hubungi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
