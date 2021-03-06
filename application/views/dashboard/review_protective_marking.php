<!DOCTYPE html>
<html>
    <head>
        <title>Final Review</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="../css/style.css"/>
        <link type="text/css" rel="stylesheet" href="../css/navbar-fixed-left.min.css"/>
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>js/review.js" type="text/javascript"></script>
    </head>

    <body style="padding-top: 70px">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img height="50px" width="50px" style="margin-top: -16px; margin-right: 102px;" src="<?= base_url() ?>assets/images/NBR-customs-logo.png" ></a>
                </div>
                  
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <?php cid_cms_tab(); ?>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href="">Database : Custom Intelligence Database(CID)</a></li>
                    </ul>
                        
                    <ul class="nav navbar-nav navbar-right">                          
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp</span>Hi, <?= $user->first_name." ".$user->last_name ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp</span>Change password</a></li>                              
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>logout/"><span class="glyphicon glyphicon-off" aria-hidden="true">&nbsp</span>Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container-fluid">
            <div class="col-md-2 navbar-fixed-left" style="margin-top: 67px">
                <ul class="list-group">
                    <li  class="list-group-item"><a href="<?php echo base_url(); ?>dashboard"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp&nbspDashboard</a></li>
                    <li  class="list-group-item"><a href="<?php echo base_url(); ?>initials/"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp&nbspInitials</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>subjects/"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp&nbspSubjects</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>text/"><span class="glyphicon glyphicon-text-size" aria-hidden="true"></span>&nbsp&nbspText</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>handlingcode/"><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span>&nbsp&nbspHandling code</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>protectivemark/"><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span>&nbsp&nbspProtective</a></li>
                    <!-- <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>&nbsp&nbspMarking</a></li>-->
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>review/"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp&nbspReview</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>dissemination/"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp&nbspDissemination</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>search/"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp&nbspSearch</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>viewlog/"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp&nbspView log</a></li>
                </ul>
            </div>

            <div class="col-md-13">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="#">INITIALS&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a>
                    <a class="breadcrumb-item" href="#">SUBJECT&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a>
                    <a class="breadcrumb-item" href="#">TEXT&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a>
                    <a class="breadcrumb-item" href="#">HANDLING CODE&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a>
                    <a class="breadcrumb-item" href="#">PROTECTIVE MARKING&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a>
                    <a class="breadcrumb-item active" id="remaining" href="#">REVIEW<span class="glyphicon glyphicon-menu-right" style="color: black; margin-left: 14px;"></span></a>
                    <a class="breadcrumb-item" href="dissemination.html">DISSEMINATION</a>
                </nav>

                <?php
                if(!empty($this->session->flashdata('warning'))){
                ?>
                <div class="alert alert-warning">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Sorry!</strong> <?= $this->session->flashdata('warning') ?>
                </div>
                <?php
                }
                ?>
            </div>

            <div  class="col-md-13">                    
                <div class="well">
                    <b>Completion Note:</b> You must carefully review the overall Protective Marking.
                </div>
                <div class="col-md-7" id="pm-heading">
                    <h4>THE PROTECTIVE MARKING FOR THIS RECORD IS SET AS:</h4>
                </div>
                <div class="col-md-1" id="pm-title">
                    <b id="p_mark_name"><?= $p_mark->name; ?></b>
                </div>
                <div class="col-md-10" id="pm-confirm">
                    <div class="col-md-7 handling-heading" style="margin-right: -57px">
                        <h4>IS THIS PROTECTIVE MARKING CORRECT?</h4>
                    </div>
                    <div class="col-md-2 decission" style="padding-left: 0px">
                        <button type="button" id="pm_confirm_ok" class="btn btn-default"><span class="glyphicon glyphicon-ok" style="color: green;"></span></button>
                        <button id="recheck_pro" type="button" class="btn btn-default" data-toggle="modal" data-target="#pro_mark"><span class="glyphicon glyphicon-remove" style="color: red;"></span></button>
                    </div>
                </div>
                <?php
                $count   = count($info);
                $counter = 1;
                foreach ($info as $value) {
                ?>
                <div class="col-md-9 handling-heading">
                    <h4>SUMMARY OF RECORD:</h4>
                </div>
                <div class="col-md-1 grade-title">                       
                </div>
                <div id="container_handling_code">
                    <div id="text_area" class="col-md-8">
                        <textarea id="summary" name="summary" rows="5" style="width:100%" disabled><?= $value->summary ?></textarea>
                    </div>
                    <input type="hidden" name="handlingcodeID" value="">
                    <div id="grading" class="col-md-2">
                        <h4>GRADING</h4>
                        <table  class="table grade-table table-bordered">
                            <tbody id="grading-body">
                                <tr>
                                    <td id="src_eval"><?= $value->src_eval ?></td>
                                    <td id="inf_int_eval"><?= $value->inf_int_eval ?></td>
                                    <td id="code"><?= $value->code ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-9 handling-heading">
                    <h4>DETAILED HANDLING INSTRUCTIONS:</h4>
                </div>
                <div id="container_handling_code">
                    <div id="text_area" class="col-md-11">
                        <textarea id="instruction" name="instruction" rows="5" style="width:100%" disabled><?= $value->instruction ?></textarea>
                        <?= ($counter != $count) ? "<hr>":"" ?>
                    </div>
                </div>
                <?php
                $counter++;
                }
                ?>
            </div>
        </div>

        <!-- Modal for text recheck -->
        <div class="modal fade" id="pro_mark" style="z-index: 999999" role="dialog">
            <div class="modal-dialog" style="width: 80% !important">            
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Review the Protective Mark</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                <?php
                                $options = array();
                                foreach ($protective_mark_lists as $value) {
                                    $options[$value->id] = $value->name;
                                }
                                echo form_dropdown('pm', $options, '', 'id="pro_marking" style = "width: 480px"');
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>              
            </div>
        </div>
        <!-- End Modal for text recheck -->

        <!-- Modal For Details about Portective Marking -->
        <div id="modalDetails" class="modal fade" role="dialog" style="z-index: 999999">
            <div class="modal-dialog" style="width: 100% !important;">            
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="p_mark_head" class="modal-title"></h4>
                    </div>
                    <div  class="modal-body">
                        <h5 style="font-weight:bold">In your Assestment, the accidental loss or disclosure of this information may :</h5>
                        <ul id="p_mark_body">                            
                        </ul>
                        <h5 style="font-weight:bold"><span style="color:red">WARNING : </span>&nbsp;&nbsp;APPLYING THIS PROTECTIVE MARKING WILL SIGNIFICANTLY IMPEDE WHO THE INFORMATION CAN BE SHARED WITH AND HOW </h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="update_pro_mark"  data-dismiss="modal" class="btn btn-success">THIS ASSESMENT IS CORRECT&nbsp;&nbsp<span class="glyphicon glyphicon-ok"></span></button>
                        <button type="button"   class="btn btn-danger" id="close_protective_btn" data-dismiss="modal">MAKE A DIFFERENT SELECTION&nbsp;&nbsp<span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                </div>               
            </div>
        </div>
        <!-- End Modal For Details about Portective Marking -->

    </body>
    <div class="loader"></div>
</html>