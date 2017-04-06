<?php

/* PagesBundle:Entity:detail.html.twig */
class __TwigTemplate_44a386bde2ee92cb4fb169d182162ddc49a7eeca7b6f3784aced2eed9b2e2267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 5
        echo "    <li>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("entities");
        echo "\">
            Entities list
        </a>
    </li>
    <li class=\"active\"> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</li>
    ";
    }

    // line 13
    public function block_mainContent($context, array $blocks = array())
    {
        // line 14
        echo "


    <div class=\"container\">

        <!-- start: PAGE CONTENT -->
        <div class=\"row\" style=\"margin-top: 20px;\">
            <div class=\"col-sm-12\">
                <div class=\"tabbable\">

                    <div class=\"tab-content\">
                        <div id=\"panel_overview\" class=\"tab-pane fade in active\">
                            <div class=\"row\">
                                <div class=\"col-sm-5 col-md-4\">
                                    <div class=\"user-left\">
                                        <div class=\"center\">
                                            <h4>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</h4>


                                            <div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
                                                <div class=\"user-image\">
                                                    <div class=\"fileupload-new thumbnail\">
                                                        ";
        // line 36
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profilePicture")) {
            // line 37
            echo "                                                            <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profilePicture")), "html", null, true);
            echo " \" alt=\"\" >
                                                        ";
        } else {
            // line 39
            echo "                                                            ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sort") == "company")) {
                // line 40
                echo "                                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/Company.png"), "html", null, true);
                echo " \" alt=\"\">

                                                            ";
            } else {
                // line 43
                echo "                                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
                echo " \" alt=\"\" >
                                                            ";
            }
            // line 45
            echo "                                                        ";
        }
        // line 46
        echo "                                                    </div>                                          

                                                </div>
                                            </div>

                                            <hr>


                                        </div>
                                        <table class=\"table table-condensed table-hover\">
                                            <thead>
                                                <tr>
                                                    <th colspan=\"3\">Contact Information</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>email:</td>
                                                    <td>
                                                        <a href=\"\">
                                                            ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "
                                                        </a></td>
                                                    <td><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>phone:</td>
                                                    <td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>country:</td>
                                                    <td>
                                                        ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>city:</td>
                                                    <td>                                                   
                                                        ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>address:</td>
                                                    <td>                                                   
                                                        ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>zip_code:</td>
                                                    <td>                                                  
                                                        ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zipCode"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class=\"table table-condensed table-hover\">  
                                            <thead>
                                                <tr>
                                                    <th colspan=\"3\">General Information</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Creator:</td>
                                                    <td>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Sort:</td>
                                                    <td>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sort"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Type:</td>
                                                    <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Speciality:</td>
                                                    <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "speciality"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                ";
        // line 134
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "website")) {
            // line 135
            echo "                                                    <tr>
                                                        <td>Website:</td>
                                                        <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "website"), "html", null, true);
            echo "</td>
                                                        <td><a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                ";
        }
        // line 141
        echo "                                                ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employeesNumber")) {
            // line 142
            echo "                                                    <tr>
                                                        <td>Employees number:</td>
                                                        <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employeesNumber"), "html", null, true);
            echo "</td>
                                                        <td><a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                ";
        }
        // line 148
        echo "                                                ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description")) {
            // line 149
            echo "                                                    <tr>
                                                        <td>Description:</td>
                                                        <td>";
            // line 151
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description");
            echo "</td>
                                                        <td><a href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                ";
        }
        // line 155
        echo "



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"col-sm-7 col-md-8\">

                                    <span class=\"btn-group pull-right\" style=\"margin-bottom: 2%\">
                                        <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:void(0);\"><i class=\"fa fa-fw fa-wrench\"></i> <span class=\"hidden-xs\">More</span>                                                           </button>
                                        <ul class=\"dropdown-menu pull-right\">                                                            

                                            <li id=\"Contacts_detailView_moreAction_LBL_ADD_NOTE\">
                                                <a href=\"\"><i class=\"fa fa-fw fa-file-o\"></i>   Add Document</a></li>

                                            <li id=\"Contacts_detailView_moreAction_LBL_ADD_EVENT\">
                                                <a href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/new", array("entity_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-calendar-o\"></i>   Add Event</a>
                                            </li>
                                            <li id=\"Contacts_detailView_moreAction_LBL_ADD_TASK\">
                                                <a href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo/new", array("entity_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-file-text-o\"></i>   Add To Do</a>
                                            </li>
                                            <li id=\"Contacts_detailView_moreAction_Delete_Contact\">
                                                <a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-pencil\"></i>   Edit</a>
                                            </li>
                                            <li id=\"Contacts_detailView_moreAction_Delete_Contact\">
                                                <a href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entities/delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-times\"></i>   Delete</a>
                                            </li>
                                        </ul>
                                    </span>
                                    <div class=\"panel panel-white space20\">
                                        <div class=\"panel-heading\" style=\"font-weight: bold;\">
                                            <i class=\"clip-checkmark-2\"></i>
                                            Geolocation
                                            <div class=\"panel-tools\">
                                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                                    <i class=\"fa fa-times\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"panel-body panel-scroll height-300\">
                                            <div id=\"divMap\"></div>
                                        </div>
                                    </div>

                                    <div class=\"panel panel-white space20\">
                                        <div class=\"panel-heading\" style=\"font-weight: bold;\">                                           
                                            Activities
                                            <div class=\"panel-tools\">
                                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                                    <i class=\"fa fa-times\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"panel-body panel-scroll height-300\">
                                            ";
        // line 211
        if (((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")) == "true")) {
            // line 212
            echo "                                                No recent activities
                                            ";
        } else {
            // line 214
            echo "

                                                <table class=\"table table-striped table-hover\">
                                                    <tbody>
                                                        ";
            // line 218
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
            foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
                // line 219
                echo "                                                            <tr>
                                                                <td class=\"center\" style=\"color: #ADADAD;\">

                                                                    <i class=\"fa fa-tasks\"></i>

                                                                </td>

                                                                <td>
                                                                    <span class=\"bold-text text-small\"><a href=\"";
                // line 227
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo", array("id" => $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "subject"), "html", null, true);
                echo "</a> </span>
                                                                </td>
                                                                <td>


                                                                    ";
                // line 232
                if (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "pending")) {
                    echo "                            
                                                                        <span class=\"label label-sm label-success\">";
                    // line 233
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                    echo "</span>
                                                                    ";
                } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "completed")) {
                    // line 235
                    echo "                                                                        <span class=\"label label-sm label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                    echo "</span>
                                                                    ";
                } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "planned")) {
                    // line 237
                    echo "                                                                        <span class=\"label label-sm label-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                    echo "</span>
                                                                    ";
                } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "cancelled")) {
                    // line 239
                    echo "                                                                        <span class=\"label label-sm label-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                    echo "</span>
                                                                    ";
                } else {
                    // line 241
                    echo "                                                                        <span class=\"label label-sm label-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                    echo "</span>
                                                                    ";
                }
                // line 243
                echo "                                                                </td>
                                                                <td class=\"center\" style=\"color: #ADADAD;\"><strong>Start :</strong> ";
                // line 244
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "startDate"), "d-m-Y H:i"), "html", null, true);
                echo " <strong>End :</strong> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate"), "d-m-Y H:i"), "html", null, true);
                echo "</td>

                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "                                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 249
                echo "                                                            <tr>
                                                                <td class=\"center\" style=\"color: #ADADAD;\">
                                                                    <i class=\"fa fa-clock-o\"></i>
                                                                </td>

                                                                <td>
                                                                    <span class=\"bold-text text-small\"><a href=\"";
                // line 255
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
                echo "</a> </span>
                                                                </td>
                                                                <td>
                                                                    ";
                // line 258
                if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "planned")) {
                    echo "                            
                                                                        <span class=\"label label-sm label-success\">";
                    // line 259
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status"), "html", null, true);
                    echo "</span>
                                                                    ";
                } elseif (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "cancelled")) {
                    // line 261
                    echo "                                                                        <span class=\"label label-sm label-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status"), "html", null, true);
                    echo "</span>
                                                                    ";
                } else {
                    // line 263
                    echo "                                                                        <span class=\"label label-sm label-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status"), "html", null, true);
                    echo "</span>
                                                                    ";
                }
                // line 264
                echo " 
                                                                </td>
                                                                <td class=\"center\" style=\"color: #ADADAD;\"><strong>Start :</strong> ";
                // line 266
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "d-m-Y H:i"), "html", null, true);
                echo " <strong>End :</strong> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "d-m-Y H:i"), "html", null, true);
                echo "</td>

                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "                                                    </tbody>
                                                </table>


                                            ";
        }
        // line 275
        echo "                                        </div>
                                    </div>

                                    <div class=\"panel panel-white space20\">
                                        <div class=\"panel-heading\" style=\"font-weight: bold;\">                                            
                                            Documents
                                            <div class=\"panel-tools\">
                                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                                    <i class=\"fa fa-times\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"panel-body panel-scroll height-300\">
                                            No Related Documents
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end: PAGE CONTENT-->
    </div>

    <script type=\"text/javascript\" src=\"http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0&mkt=fr-fr\"></script>


    ";
        // line 305
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b37284") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1b37284.js");
            // line 308
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 311
        echo "
    <script>
        window.onload = GetMap;
        var map = null;

        // load Map Content with a handler on click to insert a pushpin
        function GetMap() {

            Microsoft.Maps.loadModule('Microsoft.Maps.Themes.BingTheme',
                    {
                        callback: function () {
                            map = new Microsoft.Maps.Map(document.getElementById('divMap'),
                                    {
                                        credentials: \"AoqgNgDfcQ1C-pSBC6q8hJj9jxslNxwEzb8sySpQJtOZSCtg3GXWy11AFqx_5--Z\",
                                        mapTypeId: Microsoft.Maps.MapTypeId.road,
                                        enableClickableLogo: false,
                                        enableSearchLogo: false,
                                        center: new Microsoft.Maps.GeoLocationProvider(map).getCurrentPosition({showAccuracyCircle: false}),
                                        zoom: 5,
                                        showBreadcrumb: false
                                    });
                            LoadSearchModule();

                        }
                    });
        }



        function LoadSearchModule() {
            Microsoft.Maps.loadModule('Microsoft.Maps.Search', {callback: searchRequest})
        }


        function createSearchManager() {
            map.addComponent('searchManager', new Microsoft.Maps.Search.SearchManager(map));
            searchManager = map.getComponent('searchManager');
        }

        function searchRequest() {
            createSearchManager();
            var query = '";
        // line 352
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zipCode"), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
        echo "';
            if (query != \"\")
            {
                var request = {
                    query: query,
                    count: 20,
                    startIndex: 0,
                    bounds: map.getBounds(),
                    callback: search_onSearchSuccess,
                    errorCallback: search_onSearchFailure
                };
                searchManager.search(request);
            }
            else
                alert('champ vide');
        }

        function search_onSearchSuccess(result, userData) {
            console.log(result);
            if (result.searchRegion.mapBounds !== null) {

                search_createMapPin(result['searchRegion']['geocodeLocations']['0']['location']['latitude'], result['searchRegion']['geocodeLocations']['0']['location']['longitude']);
                map.setView({
                    bounds: result.searchRegion.mapBounds.locationRect
                });
            }
            else {
                console.log('pas de resultat');
            }
        }

        function search_createMapPin(a, b) {
            var pin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(a, b), null);

            Microsoft.Maps.Events.addHandler(pin, 'click', function () {
                search_showInfoBox(result)
            });
            map.entities.push(pin);

        }

        function search_showInfoBox(result) {
            if (currInfobox) {
                currInfobox.setOptions({
                    visible: true
                });
                map.entities.remove(currInfobox);
            }
            currInfobox = new Microsoft.Maps.Infobox(result.location, {
                title: result.name,
                description: [result.address, result.city, result.state,
                    result.country, result.phone].join(' '),
                showPointer: true,
                titleAction: null,
                titleClickHandler: null
            });
            currInfobox.setOptions({
                visible: true
            });
            map.entities.push(currInfobox);
        }

        function search_onSearchFailure(result, userData) {
            alert('Search  failed');
        }



    </script>
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Entity:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 227,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 141,  265 => 138,  250 => 132,  228 => 122,  213 => 116,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 78,  148 => 58,  333 => 151,  303 => 148,  299 => 152,  266 => 117,  197 => 88,  289 => 130,  205 => 82,  137 => 53,  124 => 57,  118 => 55,  239 => 127,  190 => 91,  186 => 90,  282 => 145,  267 => 117,  261 => 137,  180 => 83,  152 => 79,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 177,  326 => 155,  320 => 173,  318 => 172,  307 => 164,  286 => 149,  262 => 109,  150 => 73,  134 => 63,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 126,  292 => 147,  270 => 114,  263 => 115,  248 => 104,  225 => 96,  215 => 111,  191 => 100,  184 => 84,  178 => 93,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 115,  242 => 106,  234 => 118,  212 => 86,  206 => 101,  200 => 83,  194 => 90,  153 => 59,  146 => 73,  129 => 66,  304 => 127,  288 => 148,  284 => 119,  274 => 142,  259 => 109,  257 => 135,  251 => 129,  244 => 107,  233 => 120,  222 => 90,  218 => 95,  207 => 110,  185 => 80,  165 => 86,  155 => 70,  127 => 61,  104 => 39,  90 => 30,  211 => 91,  192 => 87,  181 => 83,  170 => 88,  84 => 27,  65 => 22,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 149,  255 => 134,  253 => 111,  249 => 110,  237 => 121,  232 => 94,  226 => 91,  216 => 87,  188 => 86,  167 => 79,  53 => 11,  114 => 57,  97 => 48,  81 => 29,  77 => 32,  23 => 3,  175 => 81,  172 => 80,  160 => 76,  110 => 42,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 121,  381 => 214,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 148,  314 => 146,  312 => 98,  309 => 165,  305 => 155,  298 => 130,  294 => 90,  285 => 132,  283 => 121,  278 => 144,  268 => 112,  264 => 116,  258 => 108,  252 => 105,  247 => 128,  241 => 98,  229 => 97,  220 => 70,  214 => 106,  177 => 82,  169 => 67,  140 => 73,  132 => 70,  128 => 67,  107 => 37,  61 => 12,  273 => 96,  269 => 134,  254 => 130,  243 => 99,  240 => 99,  238 => 105,  235 => 126,  230 => 93,  227 => 81,  224 => 121,  221 => 77,  219 => 93,  217 => 117,  208 => 68,  204 => 72,  179 => 71,  159 => 71,  143 => 66,  135 => 53,  119 => 67,  102 => 45,  71 => 28,  67 => 26,  63 => 15,  59 => 12,  87 => 31,  201 => 81,  196 => 102,  183 => 95,  171 => 61,  166 => 76,  163 => 74,  158 => 62,  156 => 73,  151 => 73,  142 => 59,  138 => 70,  136 => 71,  121 => 45,  117 => 42,  105 => 46,  91 => 27,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 40,  85 => 25,  75 => 19,  68 => 24,  56 => 12,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 33,  78 => 36,  46 => 11,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 30,  47 => 10,  40 => 6,  37 => 5,  22 => 1,  246 => 131,  157 => 81,  145 => 66,  139 => 65,  131 => 50,  123 => 45,  120 => 60,  115 => 43,  111 => 22,  108 => 45,  101 => 34,  98 => 47,  96 => 43,  83 => 35,  74 => 19,  66 => 27,  55 => 12,  52 => 11,  50 => 8,  43 => 9,  41 => 6,  35 => 6,  32 => 5,  29 => 4,  209 => 85,  203 => 102,  199 => 85,  193 => 87,  189 => 86,  187 => 89,  182 => 66,  176 => 84,  173 => 68,  168 => 79,  164 => 78,  162 => 63,  154 => 70,  149 => 72,  147 => 66,  144 => 74,  141 => 54,  133 => 69,  130 => 59,  125 => 45,  122 => 54,  116 => 56,  112 => 55,  109 => 37,  106 => 51,  103 => 34,  99 => 34,  95 => 41,  92 => 34,  86 => 39,  82 => 22,  80 => 37,  73 => 19,  64 => 25,  60 => 16,  57 => 16,  54 => 17,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 5,  36 => 6,  33 => 3,  30 => 1,);
    }
}
