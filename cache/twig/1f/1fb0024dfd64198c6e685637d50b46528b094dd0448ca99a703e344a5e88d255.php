<?php

/* partials/dashboard-feed.html.twig */
class __TwigTemplate_5b5d8f43df73c430e3800d61e9370a90b73b0996e8b36efdc1008a897ab29a54 extends Twig_Template
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
        echo "<div id=\"news-feed\" class=\"dashboard-item admin-block default-box-shadow\">
    <h1>
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEWS_FEED"), "html", null, true);
        echo "
        <span class=\"right\">
            <a href=\"#\" class=\"button button-small\" data-refresh=\"feed\"><i class=\"fa fa-refresh\"></i></a>
        </span>
    </h1>

    <div class=\"widget-content\">
    <div class=\"widget-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
        <ul></ul>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/dashboard-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <div id="news-feed" class="dashboard-item admin-block default-box-shadow">*/
/*     <h1>*/
/*         {{ "PLUGIN_ADMIN.NEWS_FEED"|tu }}*/
/*         <span class="right">*/
/*             <a href="#" class="button button-small" data-refresh="feed"><i class="fa fa-refresh"></i></a>*/
/*         </span>*/
/*     </h1>*/
/* */
/*     <div class="widget-content">*/
/*     <div class="widget-loader"><i class="fa fa-refresh fa-spin"></i></div>*/
/*         <ul></ul>*/
/*     </div>*/
/* </div>*/
/* */
/* */
