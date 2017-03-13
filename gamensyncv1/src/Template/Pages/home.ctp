<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'Game N Sync';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
   

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">



    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">

    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/tasks_grid.js"></script>
     
    <script type="text/javascript" src="assets/js/core/app.js"></script>
     
    
    <script type="text/javascript" src="assets/js/pages/components_pagination.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pagination/bootpag.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pagination/bs_pagination.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pagination/datepaginator.min.js"></script>
</head>
<body class="layout-boxed sidebar-opposite-visible sidebar-xs">

    <div class="navbar navbar-inverse">
        <div class="navbar-boxed">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="assets/images/gamensync.png" alt=""></a>

                <ul class="nav navbar-nav visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                    <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>
            </div>

            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav navbar-header">
                    <li class="social-media"><a class=""><i class="icon-facebook"></i></a></li>
                    <li class="social-media"><a class=""><i class="icon-google-plus"></i></a></li>
                    <li class="social-media"><a class=""><i class="icon-twitter"></i></a></li>
                    <li class="social-media"><a class=""><i class="icon-youtube"></i></a></li>
                    <li class="social-media"><a class=""><i class="icon-mail5"></i></a></li>
                    <li class="dropdown social-media">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-git-compare"></i>
                            <span class="visible-xs-inline-block position-right">Notifications</span>
                            <span class="badge bg-warning-400">9</span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-heading">
                                Git updates
                                <ul class="icons-list">
                                    <li><a href="#"><i class="icon-sync"></i></a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body width-350">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                        <div class="media-annotation">4 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                                    </div>
                                    
                                    <div class="media-body">
                                        Add full font overrides for popovers and tooltips
                                        <div class="media-annotation">36 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
                                    </div>
                                    
                                    <div class="media-body">
                                        <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
                                        <div class="media-annotation">2 hours ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
                                    </div>
                                    
                                    <div class="media-body">
                                        <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
                                        <div class="media-annotation">Dec 18, 18:36</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                                    </div>
                                    
                                    <div class="media-body">
                                        Have Carousel ignore keyboard events
                                        <div class="media-annotation">Dec 12, 05:46</div>
                                    </div>
                                </li>
                            </ul>

                            <div class="dropdown-content-footer">
                                <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
 
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown social-media1 language-switch">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/images/flags/gb.png" class="position-left" alt="">
                            English
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="deutsch"><img src="assets/images/flags/de.png" alt=""> Chinese</a></li>
                            <li><a class="ukrainian"><img src="assets/images/flags/ua.png" alt=""> Japanese</a></li>
                            <li><a class="english"><img src="assets/images/flags/gb.png" alt=""> Korean</a></li>
                            <li><a class="espana"><img src="assets/images/flags/es.png" alt=""> Thai</a></li>
                            <li><a class="russian"><img src="assets/images/flags/ru.png" alt=""> Spanish</a></li>
                        </ul>
                    </li>
 
                    <li class="dropdown social-media1 dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/images/placeholder.jpg" alt="">
                            <span>Victoria</span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                            <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                            <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                            <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
    <!-- /main navbar -->

    
    <!-- Page header -->
    <div class="navbar navbar-default" id="navbar-second">
        <div class="navbar-boxed">
            <ul class="nav navbar-nav no-border visible-xs-block">
                <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
            </ul>

            <div class="navbar-collapse collapse" id="navbar-second-toggle">
                <ul class="nav navbar-nav">
                    <li><a href="index.html"><i class="icon-home2 icon-orange position-left"></i> Home Page</a></li>

                    <li class="dropdown mega-menu mega-menu-wide">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 icon-orange position-left"></i> Category <span class="caret"></span></a>

                        <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="menu-heading underlined">Forms</span>
                                        <ul class="menu-list">
                                            <li>
                                                <a href="#"><i class="icon-pencil3"></i> Form components</a>
                                                <ul>
                                                    <li><a href="form_inputs_basic.html">Basic inputs</a></li>
                                                    <li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
                                                    <li><a href="form_input_groups.html">Input groups</a></li>
                                                    <li><a href="form_controls_extended.html">Extended controls</a></li>
                                                    <li><a href="form_floating_labels.html">Floating labels</a></li>
                                                    <li>
                                                        <a href="#">Selects</a>
                                                        <ul>
                                                            <li><a href="form_select2.html">Select2 selects</a></li>
                                                            <li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
                                                            <li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
                                                            <li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="form_tag_inputs.html">Tag inputs</a></li>
                                                    <li><a href="form_dual_listboxes.html">Dual Listboxes</a></li>
                                                    <li><a href="form_editable.html">Editable forms</a></li>
                                                    <li><a href="form_validation.html">Validation</a></li>
                                                    <li><a href="form_inputs_grid.html">Inputs grid</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-file-css"></i> JSON forms</a>
                                                <ul>
                                                    <li><a href="alpaca_basic.html">Basic inputs</a></li>
                                                    <li><a href="alpaca_advanced.html">Advanced inputs</a></li>
                                                    <li><a href="alpaca_controls.html">Controls</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-footprint"></i> Wizards</a>
                                                <ul>
                                                    <li><a href="wizard_steps.html">Steps wizard</a></li>
                                                    <li><a href="wizard_form.html">Form wizard</a></li>
                                                    <li><a href="wizard_stepy.html">Stepy wizard</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-spell-check"></i> Editors</a>
                                                <ul>
                                                    <li><a href="editor_summernote.html">Summernote editor</a></li>
                                                    <li><a href="editor_ckeditor.html">CKEditor</a></li>
                                                    <li><a href="editor_wysihtml5.html">WYSIHTML5 editor</a></li>
                                                    <li><a href="editor_code.html">Code editor</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-select2"></i> Pickers</a>
                                                <ul>
                                                    <li><a href="picker_date.html">Date &amp; time pickers</a></li>
                                                    <li><a href="picker_color.html">Color pickers</a></li>
                                                    <li><a href="picker_location.html">Location pickers</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-insert-template"></i> Form layouts</a>
                                                <ul>
                                                    <li><a href="form_layout_vertical.html">Vertical form</a></li>
                                                    <li><a href="form_layout_horizontal.html">Horizontal form</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="menu-heading underlined">Appearance</span>
                                        <ul class="menu-list">
                                            <li>
                                                <a href="#"><i class="icon-grid"></i> Components</a>
                                                <ul>
                                                    <li><a href="components_modals.html">Modals</a></li>
                                                    <li><a href="components_dropdowns.html">Dropdown menus</a></li>
                                                    <li><a href="components_tabs.html">Tabs component</a></li>
                                                    <li><a href="components_pills.html">Pills component</a></li>
                                                    <li><a href="components_navs.html">Accordion and navs</a></li>
                                                    <li><a href="components_buttons.html">Buttons</a></li>
                                                    <li><a href="components_notifications_pnotify.html">PNotify notifications</a></li>
                                                    <li><a href="components_notifications_others.html">Other notifications</a></li>
                                                    <li><a href="components_popups.html">Tooltips and popovers</a></li>
                                                    <li><a href="components_alerts.html">Alerts</a></li>
                                                    <li><a href="components_pagination.html">Pagination</a></li>
                                                    <li><a href="components_labels.html">Labels and badges</a></li>
                                                    <li><a href="components_loaders.html">Loaders and bars</a></li>
                                                    <li><a href="components_thumbnails.html">Thumbnails</a></li>
                                                    <li><a href="components_page_header.html">Page header</a></li>
                                                    <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                                                    <li><a href="components_media.html">Media objects</a></li>
                                                    <li><a href="components_affix.html">Affix and Scrollspy</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-browser"></i> Content panels</a>
                                                <ul>
                                                    <li><a href="panels.html">Panels</a></li>
                                                    <li><a href="panels_heading.html">Heading elements</a></li>
                                                    <li><a href="panels_footer.html">Footer elements</a></li>
                                                    <li><a href="panels_draggable.html">Draggable panels</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-droplets"></i> Content styling</a>
                                                <ul>
                                                    <li><a href="appearance_text_styling.html">Text styling</a></li>
                                                    <li><a href="appearance_typography.html">Typography</a></li>
                                                    <li><a href="appearance_helpers.html">Helper classes</a></li>
                                                    <li><a href="appearance_syntax_highlighter.html">Syntax highlighter</a></li>
                                                    <li><a href="appearance_content_grid.html">Grid system</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-gift"></i> Extra components</a>
                                                <ul>
                                                    <li><a href="extra_sliders_noui.html">NoUI sliders</a></li>
                                                    <li><a href="extra_sliders_ion.html">Ion range sliders</a></li>
                                                    <li><a href="extra_trees.html">Dynamic tree views</a></li>
                                                    <li><a href="extra_context_menu.html">Context menu</a></li>
                                                    <li><a href="extra_fab.html">Floating action buttons</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-wrench3"></i> Tools</a>
                                                <ul>
                                                    <li><a href="tools_session_timeout.html">Session timeout</a></li>
                                                    <li><a href="tools_idle_timeout.html">Idle timeout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="menu-heading underlined">Extensions</span>
                                        <ul class="menu-list">
                                            <li>
                                                <a href="#"><i class="icon-puzzle4"></i> Extensions</a>
                                                <ul>
                                                    <li><a href="extension_image_cropper.html">Image cropper</a></li>
                                                    <li><a href="extension_blockui.html">Block UI</a></li>
                                                    <li><a href="extension_dnd.html">Drag and drop</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-popout"></i> JQuery UI</a>
                                                <ul>
                                                    <li><a href="jqueryui_interactions.html">Interactions</a></li>
                                                    <li><a href="jqueryui_forms.html">Forms</a></li>
                                                    <li><a href="jqueryui_components.html">Components</a></li>
                                                    <li><a href="jqueryui_sliders.html">Sliders</a></li>
                                                    <li><a href="jqueryui_navigation.html">Navigation</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-upload"></i> File uploaders</a>
                                                <ul>
                                                    <li><a href="uploader_plupload.html">Plupload</a></li>
                                                    <li><a href="uploader_bootstrap.html">Bootstrap file uploader</a></li>
                                                    <li><a href="uploader_dropzone.html">Dropzone</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-calendar3"></i> Event calendars</a>
                                                <ul>
                                                    <li><a href="fullcalendar_views.html">Basic views</a></li>
                                                    <li><a href="fullcalendar_styling.html">Event styling</a></li>
                                                    <li><a href="fullcalendar_formats.html">Language and time</a></li>
                                                    <li><a href="fullcalendar_advanced.html">Advanced usage</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-sphere"></i> Internationalization</a>
                                                <ul>
                                                    <li><a href="internationalization_switch_direct.html">Direct translation</a></li>
                                                    <li><a href="internationalization_switch_query.html">Querystring parameter</a></li>
                                                    <li><a href="internationalization_on_init.html">Set language on init</a></li>
                                                    <li><a href="internationalization_after_init.html">Set language after init</a></li>
                                                    <li><a href="internationalization_fallback.html">Language fallback</a></li>
                                                    <li><a href="internationalization_callbacks.html">Callbacks</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="menu-heading underlined">Tables</span>
                                        <ul class="menu-list">
                                            <li>
                                                <a href="#"><i class="icon-table2"></i> Basic tables</a>
                                                <ul>
                                                    <li><a href="table_basic.html">Basic examples</a></li>
                                                    <li><a href="table_sizing.html">Table sizing</a></li>
                                                    <li><a href="table_borders.html">Table borders</a></li>
                                                    <li><a href="table_styling.html">Table styling</a></li>
                                                    <li><a href="table_elements.html">Table elements</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-grid7"></i> Data tables</a>
                                                <ul>
                                                    <li><a href="datatable_basic.html">Basic initialization</a></li>
                                                    <li><a href="datatable_styling.html">Basic styling</a></li>
                                                    <li><a href="datatable_advanced.html">Advanced examples</a></li>
                                                    <li><a href="datatable_sorting.html">Sorting options</a></li>
                                                    <li><a href="datatable_api.html">Using API</a></li>
                                                    <li><a href="datatable_data_sources.html">Data sources</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-alignment-unalign"></i> Data tables extensions</a>
                                                <ul>
                                                    <li><a href="datatable_extension_reorder.html">Columns reorder</a></li>
                                                    <li><a href="datatable_extension_row_reorder.html">Row reorder</a></li>
                                                    <li><a href="datatable_extension_fixed_columns.html">Fixed columns</a></li>
                                                    <li><a href="datatable_extension_fixed_header.html">Fixed header</a></li>
                                                    <li><a href="datatable_extension_autofill.html">Auto fill</a></li>
                                                    <li><a href="datatable_extension_key_table.html">Key table</a></li>
                                                    <li><a href="datatable_extension_scroller.html">Scroller</a></li>
                                                    <li><a href="datatable_extension_select.html">Select</a></li>
                                                    <li>
                                                        <a href="#">Buttons</a>
                                                        <ul>
                                                            <li><a href="datatable_extension_buttons_init.html">Initialization</a></li>
                                                            <li><a href="datatable_extension_buttons_flash.html">Flash buttons</a></li>
                                                            <li><a href="datatable_extension_buttons_print.html">Print buttons</a></li>
                                                            <li><a href="datatable_extension_buttons_html5.html">HTML5 buttons</a></li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="datatable_extension_colvis.html">Columns visibility</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-file-spreadsheet"></i> Handsontable</a>
                                                <ul>
                                                    <li><a href="handsontable_basic.html">Basic configuration</a></li>
                                                    <li><a href="handsontable_advanced.html">Advanced setup</a></li>
                                                    <li><a href="handsontable_cols.html">Column features</a></li>
                                                    <li><a href="handsontable_cells.html">Cell features</a></li>
                                                    <li><a href="handsontable_types.html">Basic cell types</a></li>
                                                    <li><a href="handsontable_custom_checks.html">Custom &amp; checkboxes</a></li>
                                                    <li><a href="handsontable_ac_password.html">Autocomplete &amp; password</a></li>
                                                    <li><a href="handsontable_search.html">Search</a></li>
                                                    <li><a href="handsontable_context.html">Context menu</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-versions"></i> Responsive options</a>
                                                <ul>
                                                    <li><a href="table_responsive.html">Responsive basic tables</a></li>
                                                    <li><a href="datatable_responsive.html">Responsive data tables</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown mega-menu mega-menu-wide">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-stars icon-orange position-left"></i> Events <span class="caret"></span></a>

                        <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="menu-heading underlined">Main content</span>
                                        <ul class="menu-list">
                                            <li>
                                                <a href="#"><i class="icon-stack2"></i> Page layouts</a>
                                                <ul>
                                                    <li><a href="layout_navbar_main_fixed.html">Fixed main navbar</a></li>
                                                    <li><a href="layout_navbar_secondary_fixed.html">Fixed secondary navbar</a></li>
                                                    <li><a href="layout_navbar_main_hideable.html">Hideable main navbar</a></li>
                                                    <li><a href="layout_navbar_secondary_hideable.html">Hideable secondary navbar</a></li>
                                                    <li><a href="layout_footer_fixed.html">Fixed footer</a></li>
                                                    <li><a href="layout_sidebar_sticky_custom.html">Sticky sidebar (custom scroll)</a></li>
                                                    <li><a href="layout_sidebar_sticky_native.html">Sticky sidebar (native scroll)</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-align-center-horizontal"></i> Fixed width</a>
                                                <ul>
                                                    <li><a href="boxed_full.html">Boxed full width</a></li>
                                                    <li><a href="boxed_default.html">Boxed with default sidebar</a></li>
                                                    <li class="active"><a href="boxed_mini.html">Boxed with mini sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-copy"></i> Layouts</a>
                                                <ul>
                                                    <li><a href="../../../layout_1/LTR/default/index.html" id="layout1">Layout 1</a></li>
                                                    <li><a href="../../../layout_2/LTR/default/index.html" id="layout2">Layout 2</a></li>
                                                    <li><a href="../../../layout_3/LTR/default/index.html" id="layout3">Layout 3</a></li>
                                                    <li><a href="index.html" id="layout4">Layout 4 <span class="label bg-warning-400">Current</span></a></li>
                                                    <li><a href="../../../layout_5/LTR/default/index.html" id="layout5">Layout 5</a></li>
                                                    <li class="disabled"><a href="../../layout_6/LTR/default/index.html" id="layout6">Layout 6 <span class="label bg-slate-300">Coming soon</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-droplet2"></i> Color system</a>
                                                <ul>
                                                    <li><a href="colors_primary.html">Primary palette</a></li>
                                                    <li><a href="colors_danger.html">Danger palette</a></li>
                                                    <li><a href="colors_success.html">Success palette</a></li>
                                                    <li><a href="colors_warning.html">Warning palette</a></li>
                                                    <li><a href="colors_info.html">Info palette</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="colors_pink.html">Pink palette</a></li>
                                                    <li><a href="colors_violet.html">Violet palette</a></li>
                                                    <li><a href="colors_purple.html">Purple palette</a></li>
                                                    <li><a href="colors_indigo.html">Indigo palette</a></li>
                                                    <li><a href="colors_blue.html">Blue palette</a></li>
                                                    <li><a href="colors_teal.html">Teal palette</a></li>
                                                    <li><a href="colors_green.html">Green palette</a></li>
                                                    <li><a href="colors_orange.html">Orange palette</a></li>
                                                    <li><a href="colors_brown.html">Brown palette</a></li>
                                                    <li><a href="colors_grey.html">Grey palette</a></li>
                                                    <li><a href="colors_slate.html">Slate palette</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="../../RTL/default/index.html"><i class="icon-width"></i> RTL version</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="menu-heading underlined">Layout</span>
                                        <ul class="menu-list">
                                            <li>
                                                <a href="#"><i class="icon-indent-decrease2"></i> Sidebars</a>
                                                <ul>
                                                    <li><a href="sidebar_default_collapse.html">Default collapsible</a></li>
                                                    <li><a href="sidebar_default_hide.html">Default hideable</a></li>
                                                    <li><a href="sidebar_mini_collapse.html">Mini collapsible</a></li>
                                                    <li><a href="sidebar_mini_hide.html">Mini hideable</a></li>
                                                    <li>
                                                        <a href="#">Dual sidebar</a>
                                                        <ul>
                                                            <li><a href="sidebar_dual.html">Dual sidebar</a></li>
                                                            <li><a href="sidebar_dual_double_collapse.html">Dual double collapse</a></li>
                                                            <li><a href="sidebar_dual_double_hide.html">Dual double hide</a></li>
                                                            <li><a href="sidebar_dual_swap.html">Swap sidebars</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Double sidebar</a>
                                                        <ul>
                                                            <li><a href="sidebar_double_collapse.html">Collapse main sidebar</a></li>
                                                            <li><a href="sidebar_double_hide.html">Hide main sidebar</a></li>
                                                            <li><a href="sidebar_double_fix_default.html">Fix default width</a></li>
                                                            <li><a href="sidebar_double_fix_mini.html">Fix mini width</a></li>
                                                            <li><a href="sidebar_double_visible.html">Opposite sidebar visible</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="sidebar_categories.html">Separate categories</a></li>
                                                    <li><a href="sidebar_hidden.html">Hidden sidebar</a></li>
                                                    <li><a href="sidebar_dark.html">Dark sidebar</a></li>
                                                    <li><a href="sidebar_components.html">Sidebar components</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-sort"></i> Vertical navigation</a>
                                                <ul>
                                                    <li><a href="navigation_vertical_collapsible.html">Collapsible menu</a></li>
                                                    <li><a href="navigation_vertical_accordion.html">Accordion menu</a></li>
                                                    <li><a href="navigation_vertical_sizing.html">Navigation sizing</a></li>
                                                    <li><a href="navigation_vertical_bordered.html">Bordered navigation</a></li>
                                                    <li><a href="navigation_vertical_right_icons.html">Right icons</a></li>
                                                    <li><a href="navigation_vertical_labels_badges.html">Labels and badges</a></li>
                                                    <li><a href="navigation_vertical_disabled.html">Disabled navigation links</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-transmission"></i> Horizontal navigation</a>
                                                <ul>
                                                    <li><a href="navigation_horizontal_click.html">Submenu on click</a></li>
                                                    <li><a href="navigation_horizontal_hover.html">Submenu on hover</a></li>
                                                    <li><a href="navigation_horizontal_elements.html">With custom elements</a></li>
                                                    <li><a href="navigation_horizontal_tabs.html">Tabbed navigation</a></li>
                                                    <li><a href="navigation_horizontal_disabled.html">Disabled navigation links</a></li>
                                                    <li><a href="navigation_horizontal_mega.html">Horizontal mega menu</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-paragraph-justify3"></i> Navbars</a>
                                                <ul>
                                                    <li><a href="navbar_single.html">Single navbar</a></li>
                                                    <li>
                                                        <a href="#">Multiple navbars</a>
                                                        <ul>
                                                            <li><a href="navbar_multiple_navbar_navbar.html">Navbar + navbar</a></li>
                                                            <li><a href="navbar_multiple_header_navbar.html">Header + navbar</a></li>
                                                            <li><a href="navbar_multiple_navbar_content.html">Navbar + content</a></li>
                                                            <li><a href="navbar_multiple_top_bottom.html">Top + bottom</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="navbar_colors.html">Color options</a></li>
                                                    <li><a href="navbar_sizes.html">Sizing options</a></li>
                                                    <li><a href="navbar_hideable.html">Hide on scroll</a></li>
                                                    <li><a href="navbar_components.html">Navbar components</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-tree5"></i> Menu levels</a>
                                                <ul>
                                                    <li><a href="#"><i class="icon-IE"></i> Second level</a></li>
                                                    <li>
                                                        <a href="#"><i class="icon-firefox"></i> Second level with child</a>
                                                        <ul>
                                                            <li><a href="#"><i class="icon-android"></i> Third level</a></li>
                                                            <li>
                                                                <a href="#"><i class="icon-apple2"></i> Third level with child</a>
                                                                <ul>
                                                                    <li><a href="#"><i class="icon-html5"></i> Fourth level</a></li>
                                                                    <li><a href="#"><i class="icon-css3"></i> Fourth level</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#"><i class="icon-windows"></i> Third level</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#"><i class="icon-chrome"></i> Second level</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="menu-heading underlined">Data visualization</span>
                                        <ul class="menu-list">
                                            <li>
                                                <a href="#"><i class="icon-graph"></i> Echarts library</a>
                                                <ul>
                                                    <li><a href="echarts_lines_areas.html">Lines and areas</a></li>
                                                    <li><a href="echarts_columns_waterfalls.html">Columns and waterfalls</a></li>
                                                    <li><a href="echarts_bars_tornados.html">Bars and tornados</a></li>
                                                    <li><a href="echarts_scatter.html">Scatter charts</a></li>
                                                    <li><a href="echarts_pies_donuts.html">Pies and donuts</a></li>
                                                    <li><a href="echarts_funnels_chords.html">Funnels and chords</a></li>
                                                    <li><a href="echarts_candlesticks_others.html">Candlesticks and others</a></li>
                                                    <li><a href="echarts_combinations.html">Chart combinations</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-statistics"></i> D3 library</a>
                                                <ul>
                                                    <li><a href="d3_lines_basic.html">Simple lines</a></li>
                                                    <li><a href="d3_lines_advanced.html">Advanced lines</a></li>
                                                    <li><a href="d3_bars_basic.html">Simple bars</a></li>
                                                    <li><a href="d3_bars_advanced.html">Advanced bars</a></li>
                                                    <li><a href="d3_pies.html">Pie charts</a></li>
                                                    <li><a href="d3_circle_diagrams.html">Circle diagrams</a></li>
                                                    <li><a href="d3_tree.html">Tree layout</a></li>
                                                    <li><a href="d3_other.html">Other charts</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-stats-dots"></i> Dimple library</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Line charts</a>
                                                        <ul>
                                                            <li><a href="dimple_lines_horizontal.html">Horizontal orientation</a></li>
                                                            <li><a href="dimple_lines_vertical.html">Vertical orientation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Bar charts</a>
                                                        <ul>
                                                            <li><a href="dimple_bars_horizontal.html">Horizontal orientation</a></li>
                                                            <li><a href="dimple_bars_vertical.html">Vertical orientation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Area charts</a>
                                                        <ul>
                                                            <li><a href="dimple_area_horizontal.html">Horizontal orientation</a></li>
                                                            <li><a href="dimple_area_vertical.html">Vertical orientation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Step charts</a>
                                                        <ul>
                                                            <li><a href="dimple_step_horizontal.html">Horizontal orientation</a></li>
                                                            <li><a href="dimple_step_vertical.html">Vertical orientation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="dimple_pies.html">Pie charts</a></li>
                                                    <li><a href="dimple_rings.html">Ring charts</a></li>
                                                    <li><a href="dimple_scatter.html">Scatter charts</a></li>
                                                    <li><a href="dimple_bubble.html">Bubble charts</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-stats-bars"></i> C3 library</a>
                                                <ul>
                                                    <li><a href="c3_lines_areas.html">Lines and areas</a></li>
                                                    <li><a href="c3_bars_pies.html">Bars and pies</a></li>
                                                    <li><a href="c3_advanced.html">Advanced examples</a></li>
                                                    <li><a href="c3_axis.html">Chart axis</a></li>
                                                    <li><a href="c3_grid.html">Grid options</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-google"></i> Google visualization</a>
                                                <ul>
                                                    <li><a href="google_lines.html">Line charts</a></li>
                                                    <li><a href="google_bars.html">Bar charts</a></li>
                                                    <li><a href="google_pies.html">Pie charts</a></li>
                                                    <li><a href="google_scatter_bubble.html">Bubble &amp; scatter charts</a></li>
                                                    <li><a href="google_other.html">Other charts</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="menu-heading underlined">Extras</span>
                                        <ul class="menu-list">
                                            <li><a href="animations_css3.html"><i class="icon-spinner3 spinner position-left"></i> CSS3 animations</a></li>
                                            <li>
                                                <a href="#"><i class="icon-spinner10 spinner position-left"></i> Velocity animations</a>
                                                <ul>
                                                    <li><a href="animations_velocity_basic.html">Basic usage</a></li>
                                                    <li><a href="animations_velocity_ui.html">UI pack effects</a></li>
                                                    <li><a href="animations_velocity_examples.html">Advanced examples</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-map5"></i> Maps integration</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Google maps</a>
                                                        <ul>
                                                            <li><a href="maps_google_basic.html">Basics</a></li>
                                                            <li><a href="maps_google_controls.html">Controls</a></li>
                                                            <li><a href="maps_google_markers.html">Markers</a></li>
                                                            <li><a href="maps_google_drawings.html">Map drawings</a></li>
                                                            <li><a href="maps_google_layers.html">Layers</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="maps_vector.html">Vector maps</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-magazine"></i> Timelines</a>
                                                <ul>
                                                    <li><a href="timelines_left.html">Left timeline</a></li>
                                                    <li><a href="timelines_right.html">Right timeline</a></li>
                                                    <li><a href="timelines_center.html">Centered timeline</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-thumbs-up2 position-left"></i> Icons</a>
                                                <ul>
                                                    <li><a href="icons_glyphicons.html">Glyphicons</a></li>
                                                    <li><a href="icons_icomoon.html">Icomoon</a></li>
                                                    <li><a href="icons_fontawesome.html">Font awesome</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-airplane3 icon-orange position-left"></i> Pilot Game <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu width-250">
                            <li class="dropdown-header">Available Schedule</li>                     
                            <li class="dropdown-submenu">
                                <a href="#"><i class="icon-task"></i> Blog</a>
                                <ul class="dropdown-menu width-200">
                                    <li class="dropdown-header highlight">Options</li>
                                    <li><a href="blog_classic_v.html">Classic vertical</a></li>
                                    <li><a href="blog_classic_h.html">Classic horizontal</a></li>
                                    <li><a href="blog_grid.html">Grid</a></li>
                                    <li><a href="blog_single.html">Single post</a></li>
                                    <li class="divider"></li>
                                    <li><a href="blog_sidebar_left.html">Left sidebar</a></li>
                                    <li><a href="blog_sidebar_right.html">Right sidebar</a></li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#"><i class="icon-images2"></i> Gallery</a>
                                <ul class="dropdown-menu width-200">
                                    <li class="dropdown-header highlight">Options</li>
                                    <li><a href="gallery_grid.html">Media grid</a></li>
                                    <li><a href="gallery_titles.html">Media with titles</a></li>
                                    <li><a href="gallery_description.html">Media with description</a></li>
                                    <li><a href="gallery_library.html">Media library</a></li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#"><i class="icon-grid6"></i> Others</a>
                                <ul class="dropdown-menu width-200">
                                    <li class="dropdown-header highlight">Options</li>
                                    <li><a href="general_feed.html">Feed</a></li>
                                    <li><a href="general_widgets_content.html">Content widgets</a></li>
                                    <li class="disabled"><a href="general_widgets_stats.html">Statistics widgets</a></li>
                                    <li><a href="general_embeds.html">Embeds</a></li>
                                    <li><a href="general_faq.html">FAQ page</a></li>
                                    <li><a href="general_knowledgebase.html">Knowledgebase</a></li>
                                </ul>
                            </li>

                            <li class="dropdown-header">Service pages</li>
                            <li class="dropdown-submenu">
                                <a href="#"><i class="icon-cash3"></i> Invoicing</a>
                                <ul class="dropdown-menu width-200">
                                    <li class="dropdown-header highlight">Options</li>
                                    <li><a href="invoice_template.html">Invoice template</a></li>
                                    <li><a href="invoice_grid.html">Invoice grid</a></li>
                                    <li><a href="invoice_archive.html">Invoice archive</a></li>
                                </ul>
                            </li>

                            
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-basket icon-orange position-left"></i> Shop <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header">Basic layouts</li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-grid2"></i> Columns</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header highlight">Options</li>
                                    <li><a href="starters/1_col.html">One column</a></li>
                                    <li><a href="starters/2_col.html">Two columns</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="#">Three columns</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-header highlight">Sidebar position</li>
                                            <li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
                                            <li><a href="starters/3_col_double.html">Double sidebars</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="starters/4_col.html">Four columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-paragraph-justify3"></i> Navbars</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header highlight">Fixed navbars</li>
                                    <li><a href="starters/layout_navbar_fixed_main.html">Fixed main navbar</a></li>
                                    <li><a href="starters/layout_navbar_fixed_secondary.html">Fixed secondary navbar</a></li>
                                    <li><a href="starters/layout_navbar_fixed_both.html">Both navbars fixed</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-header">Optional layouts</li>
                            <li><a href="starters/layout_boxed.html"><i class="icon-align-center-horizontal"></i> Fixed width</a></li>
                            <li><a href="starters/layout_sidebar_sticky.html"><i class="icon-flip-vertical3"></i> Sticky sidebar</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                     
                    <!--Message-->
                    <li class="dropdown chat-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bubbles4 icon-orange"></i>
                            <span class="visible-xs-inline-block position-right">Messages</span>
                            <span class="badge bg-warning-400">2</span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-content width-350">
                            <div class="dropdown-content-heading">
                                Messages
                                <ul class="icons-list icon-orange">
                                    <li><a href="#"><i class="icon-compose"></i></a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        <span class="badge bg-danger-400 media-badge">5</span>
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">James Alexander</span>
                                            <span class="media-annotation pull-right">04:58</span>
                                        </a>

                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        <span class="badge bg-danger-400 media-badge">4</span>
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Margo Baker</span>
                                            <span class="media-annotation pull-right">12:16</span>
                                        </a>

                                        <span class="text-muted">That was something he was unable to do because...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Jeremy Victorino</span>
                                            <span class="media-annotation pull-right">22:48</span>
                                        </a>

                                        <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Beatrix Diaz</span>
                                            <span class="media-annotation pull-right">Tue</span>
                                        </a>

                                        <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Richard Vango</span>
                                            <span class="media-annotation pull-right">Mon</span>
                                        </a>
                                        
                                        <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                    </div>
                                </li>
                            </ul>

                            <div class="dropdown-content-footer">
                                <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
                            </div>
                        </div>
                    </li>
                    <!--/Message-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /second navbar -->
    
    <!-- Carousel -->   
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="assets/images/banner/1.png" alt="Chania">
            </div>

            <div class="item">
              <img src="assets/images/banner/2.png" alt="Chania">
            </div>

            <div class="item">
              <img src="assets/images/banner/3.png" alt="Flower">
            </div>

            <div class="item">
              <img src="assets/images/banner/1.png" alt="Flower">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
    <!-- /carousel -->

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main sidebar-default">
                <div class="sidebar-content">

                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-title h6">
                            <span>Main navigation</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content sidebar-user">
                            <div class="media">
                                <a href="#" class="media-left"><img src="assets/images/avatar.png" class="img-circle img-sm" alt=""></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Victoria Baker</span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                    </div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">

                                <!-- Main -->
                                <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                                <li><a href="index.html"><i class="icon-home2"></i> <span>Home Page</span></a></li>
                                <li>
                                    <a href="#"><i class="icon-basket"></i> <span>Buy & Sell</span></a>
                                    <ul>
                                        <li><a href="buy.html">Buy</a></li>
                                        <li><a href="sell.html">Sell</a></li>
                                        <li><a href="swap.html">Swap</a></li>
                                        <li class="navigation-divider"></li>
                                        <li><a href="boxed_default.html">Bid</a></li>
                                        <li><a href="boxed_mini.html">Buy</a></li>
                                        <li><a href="boxed_full.html">Sell</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-copy"></i> <span>Layouts</span></a>
                                    <ul>
                                        <li><a href="../../../layout_1/LTR/default/index.html" id="layout1">Layout 1</a></li>
                                        <li><a href="../../../layout_2/LTR/default/index.html" id="layout2">Layout 2</a></li>
                                        <li><a href="index.html" id="layout3">Layout 3 <span class="label bg-warning-400">Current</span></a></li>
                                        <li><a href="../../../layout_4/LTR/default/index.html" id="layout4">Layout 4</a></li>
                                        <li><a href="../../../layout_5/LTR/default/index.html" id="layout5">Layout 5</a></li>
                                        <li class="disabled"><a href="../../../layout_6/LTR/default/index.html" id="layout6">Layout 6 <span class="label label-transparent">Coming soon</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-droplet2"></i> <span>Color system</span></a>
                                    <ul>
                                        <li><a href="colors_primary.html">Primary palette</a></li>
                                        <li><a href="colors_danger.html">Danger palette</a></li>
                                        <li><a href="colors_success.html">Success palette</a></li>
                                        <li><a href="colors_warning.html">Warning palette</a></li>
                                        <li><a href="colors_info.html">Info palette</a></li>
                                        <li class="navigation-divider"></li>
                                        <li><a href="colors_pink.html">Pink palette</a></li>
                                        <li><a href="colors_violet.html">Violet palette</a></li>
                                        <li><a href="colors_purple.html">Purple palette</a></li>
                                        <li><a href="colors_indigo.html">Indigo palette</a></li>
                                        <li><a href="colors_blue.html">Blue palette</a></li>
                                        <li><a href="colors_teal.html">Teal palette</a></li>
                                        <li><a href="colors_green.html">Green palette</a></li>
                                        <li><a href="colors_orange.html">Orange palette</a></li>
                                        <li><a href="colors_brown.html">Brown palette</a></li>
                                        <li><a href="colors_grey.html">Grey palette</a></li>
                                        <li><a href="colors_slate.html">Slate palette</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
                                    <ul>
                                        <li><a href="starters/horizontal_nav.html">Horizontal navigation</a></li>
                                        <li><a href="starters/1_col.html">1 column</a></li>
                                        <li><a href="starters/2_col.html">2 columns</a></li>
                                        <li>
                                            <a href="#">3 columns</a>
                                            <ul>
                                                <li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
                                                <li><a href="starters/3_col_double.html">Double sidebars</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="starters/4_col.html">4 columns</a></li>
                                        <li><a href="starters/layout_boxed.html">Boxed layout</a></li>
                                        <li class="navigation-divider"></li>
                                        <li><a href="starters/layout_navbar_fixed_main.html">Fixed main navbar</a></li>
                                        <li><a href="starters/layout_navbar_fixed_secondary.html">Fixed secondary navbar</a></li>
                                        <li><a href="starters/layout_navbar_fixed_both.html">Both navbars fixed</a></li>
                                        <li><a href="starters/layout_sidebar_sticky.html">Sticky sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="changelog.html"><i class="icon-list-unordered"></i> <span>Changelog <span class="label bg-blue-400">1.5</span></span></a></li>
                                <li><a href="../../RTL/default/index.html"><i class="icon-width"></i> <span>RTL version</span></a></li>
                                <!-- /main -->

                                <!-- Forms -->
                                <li class="navigation-header"><span>Review</span> <i class="icon-menu" title="Forms"></i></li>
                                <li>
                                    <a href="#"><i class="icon-pencil3"></i> <span>Write Review</span></a>
                                    <ul>
                                        <li><a href="form_inputs_basic.html">View</a></li>
                                        <li><a href="form_checkboxes_radios.html">Edit</a></li>
                                        <li><a href="form_input_groups.html">Delete</a></li> 
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-file-css"></i> <span>JSON forms</span></a>
                                    <ul>
                                        <li><a href="alpaca_basic.html">Basic inputs</a></li>
                                        <li><a href="alpaca_advanced.html">Advanced inputs</a></li>
                                        <li><a href="alpaca_controls.html">Controls</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-footprint"></i> <span>Wizards</span></a>
                                    <ul>
                                        <li><a href="wizard_steps.html">Steps wizard</a></li>
                                        <li><a href="wizard_form.html">Form wizard</a></li>
                                        <li><a href="wizard_stepy.html">Stepy wizard</a></li>
                                    </ul>
                                </li>
                                <!-- /forms -->
 
                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->
            

            <!-- Main content -->
            <div class="content-wrapper">
            
                <!-- Game Pilot -->
                <div class="col-sm-12 col-lg-12">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            Game Pilot
                            <div class="heading-elements">
                                <a href="#" class="heading-text">See all</a> 
                            </div>
                        </div>                  
                </div>
                
                <div class="col-sm-12 col-lg-6">
                
                <!-- List of latest updates -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Game Pilot Activities</h6>
                    </div>

                    <div class="panel-body">
                        <ul class="media-list">
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn border-primary text-primary btn-flat btn-icon btn-rounded btn-sm">
                                        <i class="icon-spinner11"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="#">David Linner</a> requested refund for a double card charge
                                    <div class="media-annotation">12 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn border-danger text-danger btn-flat btn-icon btn-rounded btn-sm">
                                        <i class="icon-infinite"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    User <a href="#">Christopher Wallace</a> is awaiting for staff reply
                                    <div class="media-annotation">16 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn border-slate text-slate btn-flat btn-icon btn-rounded btn-sm">
                                        <i class="icon-cash3"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    All sellers have received monthly payouts
                                    <div class="media-annotation">4 hours ago</div>
                                </div>
                            </li>
                            
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn border-slate text-slate btn-flat btn-icon btn-rounded btn-sm">
                                        <i class="icon-cash3"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    All sellers have received monthly payouts
                                    <div class="media-annotation">4 hours ago</div>
                                </div>
                            </li>
                            
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn border-slate text-slate btn-flat btn-icon btn-rounded btn-sm">
                                        <i class="icon-cash3"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    All sellers have received monthly payouts
                                    <div class="media-annotation">4 hours ago</div>
                                </div>
                            </li>
                            
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn border-slate text-slate btn-flat btn-icon btn-rounded btn-sm">
                                        <i class="icon-cash3"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    All sellers have received monthly payouts
                                    <div class="media-annotation">4 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn border-success text-success btn-flat btn-icon btn-rounded btn-sm">
                                        <i class="icon-checkmark3"></i>
                                    </a>
                                </div>
                                
                                <div class="media-body">
                                    Ticket #43683 has been closed by <a href="#">Victoria Wilson</a> 
                                    <div class="media-annotation">Apr 28, 21:39</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /list of latest updates -->
                </div>
                
                <div class="col-sm-16 col-lg-6">
                
                <!-- Request Pilot -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Request Pilot</h6>

                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-gear"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <input type="file" class="file-styled">
                        <span class="help-block no-margin-bottom">Accepted formats: gif, png, jpg</span>
                    </div>
                </div>
                <!-- /request pilot -->
                
                <!-- Pilot Knowledge Base -->
                <div class="panel">
                    <div class="panel-body text-center">
                        <div class="content-group mt-5">
                            <i class="icon-css3 icon-3x text-warning"></i>
                        </div>

                        <h6 class="text-semibold"><a href="#" class="text-default">Knowledge Base</a></h6>

                        <p class="mb-15">Questions? Here's a definitive guide on how to request a veteran pilot for your favorite mobile game!</p>

                        <a href="#">Read more &rarr;</a>
                    </div>
                </div>
                <!-- /pilot knowledge base -->
                
                <!-- Simple text stats with icons -->
                <div class="panel panel-body">
                    <div class="row text-center">
                        <div class="col-xs-4">
                            <p><i class="icon-users2 icon-2x display-inline-block text-info"></i></p>
                            <h5 class="text-semibold no-margin">2,345</h5>
                            <span class="text-muted text-size-small">Request Made</span>
                        </div>

                        <div class="col-xs-4">
                            <p><i class="icon-point-up icon-2x display-inline-block text-warning"></i></p>
                            <h5 class="text-semibold no-margin">3,568</h5>
                            <span class="text-muted text-size-small">Pending</span>
                        </div>

                        <div class="col-xs-4">
                            <p><i class="icon-cash3 icon-2x display-inline-block text-success"></i></p>
                            <h5 class="text-semibold no-margin">$9,693</h5>
                            <span class="text-muted text-size-small">Complete</span>
                        </div>
                    </div>
                </div>
                <!-- /simple text stats with icons -->
                
                </div>
                <!-- /game pilot -->
            
                <!-- Moderator -->
                <div class="col-sm-12 col-lg-12">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            Moderator
                            <div class="heading-elements">
                                <a href="#" class="heading-text">See all</a> <span class="caret-right"></span>
                            </div>
                        </div>                  
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <!-- User card with thumb and social icons at the bottom -->
                    <div class="panel">
                        <div class="panel-body text-center">
                            <a href="#" class="display-inline-block">
                                <img src="assets/images/placeholder.jpg" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                            </a>

                            <h6 class="text-semibold no-margin-bottom">
                                <a href="#" class="text-default">Nathan Jacobson</a>
                                <small class="display-block">Lead UX designer</small>
                            </h6>
                        </div>

                        <div class="panel-footer text-center no-padding">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Google Drive"><i class="icon-google-drive"></i></a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Twitter"><i class="icon-twitter"></i></a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Github"><i class="icon-github"></i></a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Dribbble"><i class="icon-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user card with thumb and social icons at the bottom -->
                </div>
                 
                <div class="col-sm-6 col-lg-4">
                    <!-- User card with thumb and social icons at the bottom -->
                    <div class="panel">
                        <div class="panel-body text-center">
                            <a href="#" class="display-inline-block">
                                <img src="assets/images/placeholder.jpg" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                            </a>

                            <h6 class="text-semibold no-margin-bottom">
                                <a href="#" class="text-default">Nathan Jacobson</a>
                                <small class="display-block">Lead UX designer</small>
                            </h6>
                        </div>

                        <div class="panel-footer text-center no-padding">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Google Drive"><i class="icon-google-drive"></i></a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Twitter"><i class="icon-twitter"></i></a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Github"><i class="icon-github"></i></a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Dribbble"><i class="icon-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user card with thumb and social icons at the bottom -->
                    <!-- /simple user card with social icons -->
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <!-- User card with thumb and social icons at the bottom -->
                    <div class="panel">
                        <div class="panel-body text-center">
                            <a href="#" class="display-inline-block">
                                <img src="assets/images/placeholder.jpg" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                            </a>

                            <h6 class="text-semibold no-margin-bottom">
                                <a href="#" class="text-default">Nathan Jacobson</a>
                                <small class="display-block">Lead UX designer</small>
                            </h6>
                        </div>

                        <div class="panel-footer text-center no-padding">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Google Drive"><i class="icon-google-drive"></i></a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Twitter"><i class="icon-twitter"></i></a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Github"><i class="icon-github"></i></a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Dribbble"><i class="icon-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user card with thumb and social icons at the bottom -->
                </div>
                <!-- moderator -->

            </div> 
            <!-- /main content -->


            <!-- Opposite sidebar -->
            <div class="sidebar sidebar-opposite sidebar-default sidebar-separate">
                <div class="sidebar-content">

                    <!-- Categories -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Categories</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content no-padding">
                            <ul class="navigation">
                                <li>
                                    <a href="#">
                                        <span class="text-muted text-size-small text-regular pull-right">12</span>
                                        <i class="icon-wordpress"></i>
                                        Wordpress
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <span class="text-muted text-size-small text-regular pull-right">26</span>
                                        <i class="icon-film2"></i>
                                        Video
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <span class="text-muted text-size-small text-regular pull-right">83</span>
                                        <i class="icon-images2"></i>
                                        Images
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <span class="text-muted text-size-small text-regular pull-right">43</span>
                                        <i class="icon-certificate"></i>
                                        Articles
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <span class="text-muted text-size-small text-regular pull-right">72</span>
                                        <i class="icon-camera"></i>
                                        Photography
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <span class="text-muted text-size-small text-regular pull-right">97</span>
                                        <i class="icon-bookmark"></i>
                                        Books
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /categories -->


                    <!-- Share -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Share</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content no-padding-bottom text-center">
                            <ul class="list-inline no-margin">
                                <li>
                                    <a href="#" class="btn bg-indigo btn-icon content-group">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn bg-danger btn-icon content-group">
                                        <i class="icon-youtube3"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn bg-info btn-icon content-group">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn bg-orange btn-icon content-group">
                                        <i class="icon-feed3"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /share -->


                    <!-- Recent comments -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Recent comments</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/sw.jpg" class="img-circle img-sm" alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">James Alexander</span>
                                        </a>

                                        <span class="text-muted">Who knows, maybe that...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/sw.jpg" class="img-circle img-sm" alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Margo Baker</span>
                                        </a>

                                        <span class="text-muted">That was something he...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/sw.jpg" class="img-circle img-sm" alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Jeremy Victorino</span>
                                        </a>

                                        <span class="text-muted">But that would be...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/sw.jpg" class="img-circle img-sm" alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Beatrix Diaz</span>
                                        </a>

                                        <span class="text-muted">What a strenuous career...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/sw.jpg" class="img-circle img-sm" alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Richard Vango</span>
                                        </a>
                                        
                                        <span class="text-muted">Other travelling salesmen...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /recent comments -->


                    <!-- Tags -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Tags</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content no-padding-bottom">
                            <ul class="list-inline list-inline-condensed no-margin-bottom">
                                <li>
                                    <a href="#">
                                        <span class="label border-left-success label-striped content-group">Audio</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label border-left-warning label-striped content-group">Gallery</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label border-left-indigo label-striped content-group">Image</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label border-left-teal label-striped content-group">Music</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label border-left-pink label-striped content-group">Blog</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label border-left-purple label-striped content-group">Learn</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label border-left-blue label-striped content-group">Youtube</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label border-left-slate label-striped content-group">Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label border-left-orange label-striped content-group">Eugene</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label border-left-brown label-striped content-group">Limitless</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /tags -->


                    <!-- Thumbnails -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Photos from Flickr</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="sidebar-category-wrapper">
                            <div class="category-content">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="thumbnail no-padding no-border">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/sw.jpg" alt="">
                                                    <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="thumbnail no-padding no-border">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/sw.jpg" alt="">
                                                    <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="thumbnail no-padding no-border">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/sw.jpg" alt="">
                                                    <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="thumbnail no-padding no-border">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/sw.jpg" alt="">
                                                    <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="thumbnail no-padding no-border">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/sw.jpg" alt="">
                                                    <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="thumbnail no-padding no-border">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/sw.jpg" alt="">
                                                    <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /thumbnails -->


                    <!-- Online users -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Transaction History</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content">
                            <ul class="media-list">
                                <li class="media">
                                    <a href="#" class="media-left"><img src="assets/images/sw.jpg" class="img-sm img-circle" alt=""></a>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Kirayuki</a>
                                        <span class="text-size-mini text-muted display-block">Santa Ana, CA.</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark border-success"></span>
                                    </div>
                                </li>

                                <li class="media">
                                    <a href="#" class="media-left"><img src="assets/images/sw.jpg" class="img-sm img-circle" alt=""></a>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Jeremy Victorino</a>
                                        <span class="text-size-mini text-muted display-block">Dowagiac, MI.</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark border-danger"></span>
                                    </div>
                                </li>

                                <li class="media">
                                    <a href="#" class="media-left"><img src="assets/images/sw.jpg" class="img-sm img-circle" alt=""></a>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Margo Baker</a>
                                        <span class="text-size-mini text-muted display-block">Kasaan, AK.</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark border-success"></span>
                                    </div>
                                </li>

                                <li class="media">
                                    <a href="#" class="media-left"><img src="assets/images/sw.jpg" class="img-sm img-circle" alt=""></a>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Beatrix Diaz</a>
                                        <span class="text-size-mini text-muted display-block">Neenah, WI.</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark border-warning"></span>
                                    </div>
                                </li>

                                <li class="media">
                                    <a href="#" class="media-left"><img src="assets/images/sw.jpg" class="img-sm img-circle" alt=""></a>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Richard Vango</a>
                                        <span class="text-size-mini text-muted display-block">Grapevine, TX.</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark border-grey-400"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /online users -->
  
                </div>
            </div>
            <!-- /opposite sidebar -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

    
    <!-- Footer -->
    <div class="navbar navbar-default navbar-fixed-bottom footer">
        <div class="navbar-boxed">
        <ul class="nav navbar-nav visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2 icon-orange"></i></a></li>
        </ul>

            <div class="navbar-collapse collapse" id="footer">
                <div class="navbar-text">
                    &copy; 2017 <a href="https://gamensync.com/about" class="navbar-link">Game N' Sync.</a> All Rights Reserved.</a>
                </div>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="service_sitemap.html">Sitemap</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#" class="text-semibold">Upgrade your account</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-cog3 icon-orange"></i>
                                <span class="visible-xs-inline-block position-right">Settings</span>
                                <span class="caret icon-orange"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-dribbble3"></i> Dribbble</a></li>
                                <li><a href="#"><i class="icon-pinterest2"></i> Pinterest</a></li>
                                <li><a href="#"><i class="icon-github"></i> Github</a></li>
                                <li><a href="#"><i class="icon-stackoverflow"></i> Stack Overflow</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /footer -->
    
     

</body>
</html>
