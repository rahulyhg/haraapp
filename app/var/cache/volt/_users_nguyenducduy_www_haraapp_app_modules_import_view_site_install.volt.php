<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>
    <?php echo $this->lang->query('page-title-create'); ?> | <?php echo $this->config->global->title; ?>
</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->getStatic('favicon.ico'); ?>">
        <link rel="icon" type="image/x-icon" href="<?php echo $this->url->getStatic('favicon.ico'); ?>">
        <!-- BEGIN Pages CSS-->
        <link href="<?php echo $this->url->getStatic('plugins/boostrapv3/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $this->url->getStatic('min/index.php?g=cssCoreIframe&rev=' . $this->config->global->version->css); ?>" rel="stylesheet" type="text/css">
        


        <!--[if lte IE 9]>
            <link href="<?php echo $this->url->getStatic('plugins/admin-fix/ie9.css'); ?>" rel="stylesheet" type="text/css" />
        <![endif]-->
        <script type="text/javascript" src="<?php echo $this->url->getStatic('plugins/jquery/jquery-1.11.1.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo $this->url->getStatic('plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
        <script type="text/javascript">
            var root_url = "<?php echo $this->url->getBaseUri(); ?>admin";
            window.onload = function() {
                // fix for windows 8
                if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                    document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="<?php echo $this->url->getStatic('plugins/admin-fix/windows.chrome.fix.css'); ?>" />'
            }
        </script>
    </head>
    <body class="fixed-header">
        <!-- START PAGE-CONTAINER -->
        <div class="page-container">
            <!-- START PAGE HEADER WRAPPER -->
<!-- START HEADER -->
<div class="header ">
    <!-- START MOBILE CONTROLS -->
    <!-- LEFT SIDE -->
    <div class="pull-left full-height visible-sm visible-xs">
        <!-- START ACTION BAR -->
        <div class="sm-action-bar">
            <a href="#" class="btn-link toggle-sidebar" data-toggle="sidebar">
                <span class="icon-set menu-hambuger"></span>
            </a>
        </div>
        <!-- END ACTION BAR -->
    </div>
    <!-- END MOBILE CONTROLS -->
    <div class=" pull-left sm-table">
        <div class="header-inner">
            <div class="brand inline">
                
            </div>
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
                <li class="p-r-15 inline">
                    <div class="dropdown">
                        <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                            <span class="bubble"></span>
                        </a>
                        <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                            <div class="notification-panel">
                                <!-- START Notification Body-->
                                <div class="notification-body scrollable">
                                    <!-- START Notification Item-->
                                    <div class="notification-item  clearfix">
                                        <div class="heading">
                                            <a href="#" class="text-danger">
                                                <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                <span class="bold">98% Server Load</span>
                                                <span class="fs-12 m-l-10">Take Action</span>
                                            </a>
                                            <span class="pull-right time">2 mins ago</span>
                                        </div>
                                        <div class="option">
                                            <a href="#" class="mark"></a>
                                        </div>
                                    </div>
                                    <!-- END Notification Item-->
                                </div>
                                <!-- END Notification Body-->
                                <!-- START Notification Footer-->
                                <div class="notification-footer text-center">
                                    <a href="#" class="">Read all notifications</a>
                                    <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                                        <i class="pg-refresh_new"></i>
                                    </a>
                                </div>
                                <!-- END Notification Footer-->
                            </div>
                        </div>
                    </div>
                </li>
                <li class="p-r-15 inline">
                    <a href="#" class="icon-set clip "></a>
                </li>
                <li class="p-r-15 inline">
                    <a href="#" class="icon-set grid-box"></a>
                </li>
            </ul>
            <!-- END NOTIFICATION DROPDOWN -->
            <a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
        </div>
    </div>
    <div class=" pull-right">
        <!-- START User Info-->
        <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                <span class="semi-bold">David</span> <span class="text-master">Nest</span>
            </div>
            <div class="dropdown pull-right">
                <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                    
                </span>
                </button>
                <ul class="dropdown-menu profile-dropdown" role="menu">
                    <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                </li>
                <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
            </li>
            <li><a href="#"><i class="pg-signals"></i> Help</a>
        </li>
        <li class="bg-master-lighter">
            <a href="#" class="clearfix">
                <span class="pull-left">Logout</span>
                <span class="pull-right"><i class="pg-power"></i></span>
            </a>
        </li>
    </ul>
</div>
</div>
<!-- END User Info-->
</div>
</div>
<!-- END HEADER -->
<!-- END PAGE HEADER WRAPPER -->

            <!-- START PAGE CONTENT WRAPPER -->
            <div class="page-content-wrapper">
                <!-- START PAGE CONTENT -->
                <div class="content">
                <div class="jumbotron" data-pages="parallax">
    <div class="container-fluid container-fixed-lg">
        <div class="inner">
            <?php if (isset($bc)) { ?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <?php foreach ($bc as $b) { ?>
                    <?php if (($b['active'])) { ?>
                        <li><a href="javascript:void(0)" class="active"><?php echo $b['text']; ?></a></li>
                    <?php } else { ?>
                        <li>
                            <p><a href="<?php echo $b['link']; ?>"><?php echo $b['text']; ?></a></p>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <!-- END BREADCRUMB -->
            <?php } ?>
        </div>
    </div>
</div>

                
<div class="container-fluid container-fixed-lg">
    <div id="rootwizard">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm">
            <li class="active">
                <a data-toggle="tab" href="#tab_category_map"><i class="fa fa-shopping-cart tab-icon"></i> <span>Category Map</span></a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#tab_shop_contact"><i class="fa fa-user tab-icon"></i> <span>Shop Contact</span></a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#tab4" id="summary"><i class="fa fa-check tab-icon"></i> <span>Summary</span></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane padding-20 active slide-left" id="tab_category_map">
                <div class="row row-same-height">
                    <div class="col-md-4 b-r b-dashed b-grey sm-b-b">
                        <div class="padding-30 m-t-50">
                            <i class="fa fa-shopping-cart fa-2x hint-text"></i>
                            <h2>Category Mapping!</h2>
                            <p>Discover goods you'll love from brands that inspire. The easiest way to open your own online store. Discover amazing stuff or open your own store for free!</p>
                            <p class="small hint-text">Below is a sample page for your cart , Created using pages design UI Elementes</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="padding-30">
                            <form>
                                <table class="table table-condensed">
                                    <?php foreach ($collections as $myCollection) { ?>
                                    <tr>
                                        <td class="col-lg-5 col-md-5 col-sm-5">
                                            <span class="m-l-10 "><?php echo $myCollection->title; ?></span>
                                        </td>
                                        <td class="col-lg-1 col-md-1 col-sm-1">
                                            <a
                                                href="#"
                                                class="btn-link pg-arrow_lright_line_alt menu-hambuger-plus choose-category"
                                                data-toggle="quickview"
                                                data-toggle-element="#quickview"
                                                data-id="<?php echo $myCollection->id; ?>"
                                                data-name="<?php echo $myCollection->title; ?>"
                                            ></a>
                                        </td>
                                        <td class="col-lg-5 col-md-5 col-sm-5">
                                            <input type="hidden" name="name" value="" class="category-id-<?php echo $myCollection->id; ?>-value">
                                            <span class="category-id-<?php echo $myCollection->id; ?>-name"></span>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </form>
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
                                    <p class="no-margin">Automatic Recommended FIVE category. </p>
                                    <p class="small hint-text">
                                        Click on the right button to do mapping with FIVE category, then you can edit for what you want.
                                    </p>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <button class="btn btn-success">AUTO</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane slide-left padding-20" id="tab_shop_contact">
                <div class="row row-same-height">
                    <div class="col-md-5 b-r b-dashed b-grey ">
                        <div class="padding-30 m-t-50">
                            <h2>Your Information is safe with us!</h2>
                            <p>We respect your privacy and protect it with strong encryption, plus strict policies . Two-step verification, which we encourage all our customers to use.</p>
                            <p class="small hint-text">Below is a sample page for your cart , Created using pages design UI Elementes</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="padding-30">
                            <form role="form">
                                <p>Name and Information</p>
                                <div class="form-group-attached">
                                    <div class="form-group form-group-default">
                                        <label>Fullname</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" placeholder="For contact and support" required>
                                    </div>
                                </div>
                                <br>
                                <p>Address</p>
                                <div class="form-group-attached">
                                    <div class="form-group form-group-default">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Current address" required>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default form-group-default-selectFx">
                                                <label>District</label>
                                                <select class="cs-select cs-skin-slide cs-transparent form-control" data-init-plugin="cs-select">
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default form-group-default-selectFx">
                                                <label>City</label>
                                                <select class="cs-select cs-skin-slide cs-transparent form-control" data-init-plugin="cs-select">
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane slide-left padding-20" id="tab4">
                <h1>Setup completed.</h1>
                <p>This progress will be take a long time to sync with our system.</p>
            </div>
            <div class="padding-20 bg-white">
                <ul class="pager wizard">
                    <li class="next">
                        <button class="btn btn-primary btn-cons btn-animated from-left fa fa-truck pull-right" type="button">
                        <span>Next</span>
                        </button>
                    </li>
                    <li class="next finish hidden">
                        <button class="btn btn-primary btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                        <span>Finish</span>
                        </button>
                    </li>
                    <li class="previous first hidden">
                        <button class="btn btn-default btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                        <span>First</span>
                        </button>
                    </li>
                    <li class="previous">
                        <button class="btn btn-default btn-cons pull-right" type="button">
                        <span>Previous</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- END PAGE CONTENT -->
                <!-- START FOOTER -->
<div class="container-fluid container-fixed-lg footer">
    <div class="copyright sm-text-center">
        <p class="small no-margin pull-left sm-pull-reset">
            <span class="hint-text">Copyright © 2014</span>
            <span class="font-montserrat">REVOX</span>.
            <span class="hint-text">All rights reserved.</span>
            <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a>
        </span>
    </p>
    <p class="small no-margin pull-right sm-pull-reset">
        <a href="#">Hand-crafted</a>
        <span class="hint-text">&amp; Made with Love ®</span>
    </p>
    <div class="clearfix"></div>
</div>
</div>
<!-- END FOOTER -->
</div>
<!-- END PAGE CONTENT WRAPPER -->

        </div>
        <!-- END PAGE CONTAINER -->
        <style media="screen">
    .list-view-fake-header {
        display: none;
    }
</style>

<!--START QUICKVIEW -->
<div id="quickview" class="quickview-wrapper" data-pages="quickview">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#quickview-category" data-toggle="tab" class="quickview-header-name"></a>
            <input type="hidden" value="" class="quickview-header-value">
        </li>
    </ul>
    <a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active no-padding" id="quickview-category">
            <div class="view-port clearfix">
                <div class="view bg-white">
                    <div class="navbar navbar-default navbar-sm">
                        <div class="navbar-inner">
                        <!-- BEGIN Header Controler !-->
                            <div class="view-heading">
                                <input type="text" name="name" id="category-search-field" class="form-control input-sm no-border" placeholder="Search category name">
                            </div>
                            <a href="#" class="inline action p-r-10 pull-right link text-master">
                                <i class="pg-search"></i>
                            </a>
                        <!-- END Header Controler !-->
                        </div>
                    </div>
                    <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                        <div class="list-view-group-container" style="padding:0" id="category-search-container">
                            <ul>
                                <?php foreach ($myCategories as $item) { ?>
                                <li class="chat-user-list clearfix category-search-row">
                                    <a class="category-search-child" href="javascript:;">
                                        <span class="col-xs-height col-middle">
                                        <?php if ($item['parent'] == 0) { ?>
                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                        <img width="34" height="34" alt="" data-src="<?php echo 'http://five.vn' . $item['iconpath']; ?>" src="<?php echo 'http://five.vn' . $item['iconpath']; ?>" class="col-top">
                                        </span>
                                        <?php } ?>
                                        </span>
                                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                                            <input type="hidden" value="<?php echo $item['id']; ?>" class="categoryId">
                                            <span class="text-master name"><?php echo $item['name']; ?></span>
                                        </p>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END QUICKVIEW-->

        <!-- START OVERLAY -->
<div class="overlay" style="display: none" data-pages="search">
    <!-- BEGIN Overlay Content !-->
    <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
            <!-- BEGIN Overlay Logo !-->
            
            <!-- END Overlay Logo !-->
            <!-- BEGIN Overlay Close !-->
            <a href="#" class="close-icon-light overlay-close text-black fs-16">
                <i class="pg-close"></i>
            </a>
            <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
            <!-- BEGIN Overlay Controls !-->
            <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
            <br>
            <div class="inline-block">
                <div class="checkbox right">
                    <input id="checkboxn" type="checkbox" value="1" checked="checked">
                    <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
                </div>
            </div>
            <div class="inline-block m-l-10">
                <p class="fs-13">Press enter to search</p>
            </div>
            <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
            <span>
                <strong>suggestions :</strong>
            </span>
            <span id="overlay-suggestions"></span>
            <br>
            <div class="search-results m-t-40">
                <p class="bold">Pages Search Results</p>
                <div class="row">
                    <div class="col-md-6">
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div>
                                    
                                </div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                                <p class="hint-text">via john smith</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div>T</div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                                <p class="hint-text">via pages</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div><i class="fa fa-headphones large-text "></i>
                                </div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                                <p class="hint-text">via pagesmix</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                    </div>
                    <div class="col-md-6">
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                                <div><i class="fa fa-facebook large-text "></i>
                                </div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                                <p class="hint-text">via facebook</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                                <div><i class="fa fa-twitter large-text "></i>
                                </div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                                <p class="hint-text">via twitter</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                                <div><i class="fa fa-google-plus large-text "></i>
                                </div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                                <p class="hint-text">via google plus</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Overlay Search Results !-->
    </div>
    <!-- END Overlay Content !-->
</div>
<!-- END OVERLAY -->

        <!-- BEGIN PAGE LEVEL JS -->
        <script type="text/javascript" src="<?php echo $this->url->getStatic('plugins/boostrapv3/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo $this->url->getStatic('min/index.php?g=jsCoreIframe&rev=' . $this->config->global->version->js); ?>"></script>
        


    </body>
</html>

<?php if ($this->config->global->profiler === true) { ?>
<?php echo \Engine\Helper::getInstance('profiler', 'core')->render(); ?>
<?php } ?>