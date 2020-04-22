<?php

/* localisation/country_form.twig */
class __TwigTemplate_2ce92889e5567d60e941a12c7274366bfde5fda3bb28e7a99536beb4c0ae8074 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-country\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-country\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />";
        // line 32
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-iso-code-2\">";
        // line 38
        echo (isset($context["entry_iso_code_2"]) ? $context["entry_iso_code_2"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"iso_code_2\" value=\"";
        // line 40
        echo (isset($context["iso_code_2"]) ? $context["iso_code_2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_iso_code_2"]) ? $context["entry_iso_code_2"] : null);
        echo "\" id=\"input-iso-code-2\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-iso-code-3\">";
        // line 44
        echo (isset($context["entry_iso_code_3"]) ? $context["entry_iso_code_3"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"iso_code_3\" value=\"";
        // line 46
        echo (isset($context["iso_code_3"]) ? $context["iso_code_3"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_iso_code_3"]) ? $context["entry_iso_code_3"] : null);
        echo "\" id=\"input-iso-code-3\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-address-format\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["help_address_format"]) ? $context["help_address_format"] : null), "html");
        echo "\">";
        echo (isset($context["entry_address_format"]) ? $context["entry_address_format"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <textarea name=\"address_format\" rows=\"5\" placeholder=\"";
        // line 52
        echo (isset($context["entry_address_format"]) ? $context["entry_address_format"] : null);
        echo "\" id=\"input-address-format\" class=\"form-control\">";
        echo (isset($context["address_format"]) ? $context["address_format"] : null);
        echo "</textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 56
        echo (isset($context["entry_postcode_required"]) ? $context["entry_postcode_required"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">";
        // line 59
        if ((isset($context["postcode_required"]) ? $context["postcode_required"] : null)) {
            // line 60
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"1\" checked=\"checked\" />";
            // line 61
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 63
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"1\" />";
            // line 64
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 66
        echo "              </label>
              <label class=\"radio-inline\">";
        // line 68
        if ( !(isset($context["postcode_required"]) ? $context["postcode_required"] : null)) {
            // line 69
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"0\" checked=\"checked\" />";
            // line 70
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 72
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"0\" />";
            // line 73
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 75
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 79
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">";
        // line 82
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 83
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 84
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        } else {
            // line 86
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 87
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        }
        // line 89
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>";
        // line 97
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "localisation/country_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 97,  214 => 89,  210 => 87,  205 => 86,  201 => 84,  196 => 83,  194 => 82,  189 => 79,  183 => 75,  180 => 73,  178 => 72,  175 => 70,  173 => 69,  171 => 68,  168 => 66,  165 => 64,  163 => 63,  160 => 61,  158 => 60,  156 => 59,  151 => 56,  142 => 52,  135 => 50,  126 => 46,  121 => 44,  112 => 40,  107 => 38,  102 => 35,  97 => 33,  95 => 32,  90 => 31,  85 => 29,  80 => 27,  74 => 24,  70 => 22,  63 => 18,  61 => 17,  56 => 13,  46 => 11,  42 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-country" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-country" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-iso-code-2">{{ entry_iso_code_2 }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="iso_code_2" value="{{ iso_code_2 }}" placeholder="{{ entry_iso_code_2 }}" id="input-iso-code-2" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-iso-code-3">{{ entry_iso_code_3 }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="iso_code_3" value="{{ iso_code_3 }}" placeholder="{{ entry_iso_code_3 }}" id="input-iso-code-3" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-address-format"><span data-toggle="tooltip" data-html="true" title="{{ help_address_format|escape('html') }}">{{ entry_address_format }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="address_format" rows="5" placeholder="{{ entry_address_format }}" id="input-address-format" class="form-control">{{ address_format }}</textarea>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_postcode_required }}</label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline">*/
/*                 {% if postcode_required %}*/
/*                 <input type="radio" name="postcode_required" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="postcode_required" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not postcode_required %}*/
/*                 <input type="radio" name="postcode_required" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="postcode_required" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 {% if status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
