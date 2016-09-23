<?php

/* modular/team.html.twig */
class __TwigTemplate_b4781d59862d649fe3f0296d9b280160d91499c8978e7f8a395e3c3ee95d4bd6 extends Twig_Template
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
        echo "<section id=\"team\" class=\"bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "people", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 10
            echo "            <div class=\"col-sm-4\">
                <div class=\"team-member\">
                    <img src=\"";
            // line 12
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["member"], "pic", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive img-circle\" alt=\"\">
                    <h4>";
            // line 13
            echo $this->getAttribute($context["member"], "name", array());
            echo "</h4>
                    <p class=\"text-muted\">";
            // line 14
            echo $this->getAttribute($context["member"], "position", array());
            echo "</p>
                    <ul class=\"list-inline social-buttons\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["member"], "social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
                // line 17
                echo "                            <li><a href=\"";
                echo $this->getAttribute($context["network"], "url", array());
                echo "\"><i class=\"fa fa-";
                echo $this->getAttribute($context["network"], "title", array());
                echo "\"></i></a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
                        </ul>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <p class=\"large text-muted\">";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array());
        echo "</p>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  78 => 23,  68 => 19,  57 => 17,  53 => 16,  48 => 14,  44 => 13,  40 => 12,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <section id="team" class="bg-light-gray">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*             {{ content }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         {% for member in page.header.people %}*/
/*             <div class="col-sm-4">*/
/*                 <div class="team-member">*/
/*                     <img src="{{ page.media[member.pic].url }}" class="img-responsive img-circle" alt="">*/
/*                     <h4>{{ member.name }}</h4>*/
/*                     <p class="text-muted">{{ member.position }}</p>*/
/*                     <ul class="list-inline social-buttons">*/
/*                         {% for network in member.social %}*/
/*                             <li><a href="{{ network.url }}"><i class="fa fa-{{ network.title }}"></i></a>*/
/*                             {% endfor %}*/
/* */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}  */
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 text-center">*/
/*                 <p class="large text-muted">{{ page.header.description }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
