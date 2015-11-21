<?php

/* core/modules/update/templates/update-project-status.html.twig */
class __TwigTemplate_e332c04fee5f2f2a7c2edcad5b34698f4d9e7c00552de00e668535303361db03 extends Twig_Template
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
        $tags = array("set" => 31, "if" => 40, "for" => 63, "trans" => 90);
        $filters = array("join" => 85, "t" => 87, "placeholder" => 91);
        $functions = array("constant" => 32);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for', 'trans'),
                array('join', 't', 'placeholder'),
                array('constant')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 31
        $context["status_classes"] = array(0 => ((($this->getAttribute(        // line 32
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SECURE"))) ? ("project-update__status--security-error") : ("")), 1 => ((($this->getAttribute(        // line 33
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_REVOKED"))) ? ("project-update__status--revoked") : ("")), 2 => ((($this->getAttribute(        // line 34
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SUPPORTED"))) ? ("project-update__status--not-supported") : ("")), 3 => ((($this->getAttribute(        // line 35
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_CURRENT"))) ? ("project-update__status--not-current") : ("")), 4 => ((($this->getAttribute(        // line 36
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_CURRENT"))) ? ("project-update__status--current") : ("")));
        // line 39
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "attributes", array()), "addClass", array(0 => "project-update__status", 1 => (isset($context["status_classes"]) ? $context["status_classes"] : null)), "method"), "html", null, true));
        echo ">";
        // line 40
        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "label", array())) {
            // line 41
            echo "<span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "label", array()), "html", null, true));
            echo "</span>";
        } else {
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "reason", array()), "html", null, true));
        }
        // line 45
        echo "  <span class=\"project-update__status-icon\">
    ";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "icon", array()), "html", null, true));
        echo "
  </span>
</div>

<div class=\"project-update__title\">";
        // line 51
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 52
            echo "<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</a>";
        } else {
            // line 54
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        }
        // line 56
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["existing_version"]) ? $context["existing_version"] : null), "html", null, true));
        echo "
  ";
        // line 57
        if ((((isset($context["install_type"]) ? $context["install_type"] : null) == "dev") && (isset($context["datestamp"]) ? $context["datestamp"] : null))) {
            // line 58
            echo "    <span class=\"project-update__version-date\">(";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["datestamp"]) ? $context["datestamp"] : null), "html", null, true));
            echo ")</span>
  ";
        }
        // line 60
        echo "</div>

";
        // line 62
        if ((isset($context["versions"]) ? $context["versions"] : null)) {
            // line 63
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 64
                echo "    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["version"], "html", null, true));
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 67
        echo "
";
        // line 69
        $context["extra_classes"] = array(0 => ((($this->getAttribute(        // line 70
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SECURE"))) ? ("project-not-secure") : ("")), 1 => ((($this->getAttribute(        // line 71
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_REVOKED"))) ? ("project-revoked") : ("")), 2 => ((($this->getAttribute(        // line 72
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SUPPORTED"))) ? ("project-not-supported") : ("")));
        // line 75
        echo "<div class=\"project-updates__details\">
  ";
        // line 76
        if ((isset($context["extras"]) ? $context["extras"] : null)) {
            // line 77
            echo "    <div class=\"extra\">
      ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extras"]) ? $context["extras"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 79
                echo "        <div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["extra"], "attributes", array()), "addClass", array(0 => (isset($context["extra_classes"]) ? $context["extra_classes"] : null)), "method"), "html", null, true));
                echo ">
          ";
                // line 80
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["extra"], "label", array()), "html", null, true));
                echo ": ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["extra"], "data", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "    </div>
  ";
        }
        // line 85
        echo "  ";
        $context["includes"] = twig_join_filter((isset($context["includes"]) ? $context["includes"] : null), ", ");
        // line 86
        echo "  ";
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            // line 87
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Includes:")));
            echo "
    <ul>
      <li>
        ";
            // line 90
            echo t("Enabled: %includes", array("%includes" =>             // line 91
(isset($context["includes"]) ? $context["includes"] : null), ));
            // line 93
            echo "      </li>
      <li>
        ";
            // line 95
            $context["disabled"] = twig_join_filter((isset($context["disabled"]) ? $context["disabled"] : null), ", ");
            // line 96
            echo "        ";
            echo t("Disabled: %disabled", array("%disabled" =>             // line 97
(isset($context["disabled"]) ? $context["disabled"] : null), ));
            // line 99
            echo "      </li>
    </ul>
  ";
        } else {
            // line 102
            echo "    ";
            echo t("Includes: %includes", array("%includes" =>             // line 103
(isset($context["includes"]) ? $context["includes"] : null), ));
            // line 105
            echo "  ";
        }
        // line 106
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/update/templates/update-project-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 106,  195 => 105,  193 => 103,  191 => 102,  186 => 99,  184 => 97,  182 => 96,  180 => 95,  176 => 93,  174 => 91,  173 => 90,  166 => 87,  163 => 86,  160 => 85,  156 => 83,  145 => 80,  140 => 79,  136 => 78,  133 => 77,  131 => 76,  128 => 75,  126 => 72,  125 => 71,  124 => 70,  123 => 69,  120 => 67,  110 => 64,  105 => 63,  103 => 62,  99 => 60,  93 => 58,  91 => 57,  86 => 56,  83 => 54,  76 => 52,  74 => 51,  67 => 46,  64 => 45,  61 => 43,  56 => 41,  54 => 40,  50 => 39,  48 => 36,  47 => 35,  46 => 34,  45 => 33,  44 => 32,  43 => 31,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the project status report.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The project title.*/
/*  * - url: The project url.*/
/*  * - status: The project status.*/
/*  *   - label: The project status label.*/
/*  *   - attributes: HTML attributes for the project status.*/
/*  *   - reason: The reason you should update the project.*/
/*  *   - icon: The project status version indicator icon.*/
/*  * - existing_version: The version of the installed project.*/
/*  * - versions: The available versions of the project.*/
/*  * - install_type: The type of project (e.g., dev).*/
/*  * - datestamp: The date/time of a project version's release.*/
/*  * - extras: HTML attributes and additional information about the project.*/
/*  *   - attributes: HTML attributes for the extra item.*/
/*  *   - label: The label for an extra item.*/
/*  *   - data: The data about an extra item.*/
/*  * - includes: The projects within the project.*/
/*  * - disabled: The currently disabled projects in the project.*/
/*  **/
/*  * @see template_preprocess_update_project_status()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set status_classes = [*/
/*     project.status == constant('UPDATE_NOT_SECURE') ? 'project-update__status--security-error',*/
/*     project.status == constant('UPDATE_REVOKED') ? 'project-update__status--revoked',*/
/*     project.status == constant('UPDATE_NOT_SUPPORTED') ? 'project-update__status--not-supported',*/
/*     project.status == constant('UPDATE_NOT_CURRENT') ? 'project-update__status--not-current',*/
/*     project.status == constant('UPDATE_CURRENT') ? 'project-update__status--current',*/
/*   ]*/
/* %}*/
/* <div{{ status.attributes.addClass('project-update__status', status_classes) }}>*/
/*   {%- if status.label -%}*/
/*     <span>{{ status.label }}</span>*/
/*   {%- else -%}*/
/*     {{ status.reason }}*/
/*   {%- endif %}*/
/*   <span class="project-update__status-icon">*/
/*     {{ status.icon }}*/
/*   </span>*/
/* </div>*/
/* */
/* <div class="project-update__title">*/
/*   {%- if url -%}*/
/*     <a href="{{ url }}">{{ title }}</a>*/
/*   {%- else -%}*/
/*     {{ title }}*/
/*   {%- endif %}*/
/*   {{ existing_version }}*/
/*   {% if install_type == 'dev' and datestamp %}*/
/*     <span class="project-update__version-date">({{ datestamp }})</span>*/
/*   {% endif %}*/
/* </div>*/
/* */
/* {% if versions %}*/
/*   {% for version in versions %}*/
/*     {{ version }}*/
/*   {% endfor %}*/
/* {% endif %}*/
/* */
/* {%*/
/*   set extra_classes = [*/
/*     project.status == constant('UPDATE_NOT_SECURE') ? 'project-not-secure',*/
/*     project.status == constant('UPDATE_REVOKED') ? 'project-revoked',*/
/*     project.status == constant('UPDATE_NOT_SUPPORTED') ? 'project-not-supported',*/
/*   ]*/
/* %}*/
/* <div class="project-updates__details">*/
/*   {% if extras %}*/
/*     <div class="extra">*/
/*       {% for extra in extras %}*/
/*         <div{{ extra.attributes.addClass(extra_classes) }}>*/
/*           {{ extra.label }}: {{ extra.data }}*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% set includes = includes|join(', ') %}*/
/*   {% if disabled %}*/
/*     {{ 'Includes:'|t }}*/
/*     <ul>*/
/*       <li>*/
/*         {% trans %}*/
/*           Enabled: {{ includes|placeholder }}*/
/*         {% endtrans %}*/
/*       </li>*/
/*       <li>*/
/*         {% set disabled = disabled|join(', ') %}*/
/*         {% trans %}*/
/*           Disabled: {{ disabled|placeholder }}*/
/*         {% endtrans %}*/
/*       </li>*/
/*     </ul>*/
/*   {% else %}*/
/*     {% trans %}*/
/*       Includes: {{ includes|placeholder }}*/
/*     {% endtrans %}*/
/*   {% endif %}*/
/* </div>*/
/* */
