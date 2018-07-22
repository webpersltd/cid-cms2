<div  class="col-md-13">
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
    <?php
    foreach ($info as $value) {
    if($this->user_management->this_record_is_already_started_reviewing_by_this_user($value->rid) != $this->ion_auth->user()->row()->id 
                                && $this->user_management->has_review_permission($value->rid) && !is_null($this->user_management->this_record_is_already_started_reviewing_by_this_user($value->rid)) ){
    ?>
    <div class="well">
        <b>Note: </b>This Record has already Started Reviewing by another Authorized User.
    </div>
    <?php
    }
    break;
    }
    ?>
    <div class="col-md-13">
        <?php
        foreach ($info as $value) {
        ?>
        <h3 align="center">The Record URN: <?= $value->urn ?></h3>
        <?php
        break;
        }
        ?>
    </div>
    <div class="col-md-13">
        <hr>
    </div>
    <div class="col-md-13" id="pm-heading">
        <div class="row">
            <div class="col-md-2"><b>Department</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->department_name ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Date of Report</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= date('d-M-Y',strtotime($value->date_of_report)) ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Information Source</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= (strpos($value->inf_src_name, 'Other') !== false) ? $value->other_source : $value->inf_src_name ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Report Submitted by</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->report_submitted_by ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Time of Report</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->time_of_report ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>ISR</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->isr ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>First Name</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->fname ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Surname</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->surname ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Father's Name</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->father_name ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Gender</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->gender ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Date of Birth</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= date('d-M-Y',strtotime($value->dob)) ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Place of Birth</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->pob ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Nationality</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->natlty ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Identification Type</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->id_type ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>ID Number</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->id_number ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Home Address</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->home_address ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Business Name</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->business_name ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Business Address</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->business_address ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>BIN/TIN</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->bin_tin ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Telephone</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->telephone ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Decription of Subject</b></div>
            <div class="col-md-1"><b>:</b></div>
            <div class="col-md-8">
                <?php
                foreach ($info as $value) {
                ?>
                <b><?= $value->description ?></b>
                <?php
                break;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-13">
        <hr>
    </div>
    <div class="col-md-9" id="pm-heading">
        <h4 style="color: red">THE FOLLOWING PROTECTIVE MARKING HAS BEEN APPLIED TO THIS RECORD:</h4>
    </div>
    <div class="col-md-1" id="pm-title" style="width: 301px !important">
        <?php
        foreach ($info as $value) {
        ?>
        <b id="p_mark_name"><?= $value->p_name ?></b>
        <?php
        break;
        }
        ?>
    </div>
    <?php
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
    <div id="container_handling_code" style="margin-bottom: 10px">
        <div id="text_area" class="col-md-13">
            <textarea id="instruction" name="instruction" rows="5" style="width:100%" disabled><?= $value->instruction ?></textarea>
        </div>
    </div>
    <hr>
    <?php
    }
    ?>
    <?php
    foreach ($info as $value) {
    if($value->fully_submitted != 0){
    ?>
    <div class="col-md-5" id="pm-heading">
        <h4>AUTHORIZED FOR DISSEMINATION:</h4>
    </div>
    <div class="col-md-7" id="pm-title" style="width: 707px !important;">
        <b>YES</b>
    </div>
    <div class="col-md-2" id="pm-heading" style="margin-top: 10px">
        <h4>NAME:</h4>
    </div>
    <div class="col-md-3" id="pm-title" style="width: 301px !important; margin-top: 10px;">
        <?php
        foreach ($info as $value) {
        ?>
        <b><?= $value->officer_first_name ?> <?= $value->officer_last_name ?></b>
        <?php
        break;
        }
        ?>
    </div>
    <div class="col-md-2" id="pm-heading" style="margin-top: 10px; margin-left: 49px;">
        <h4>TIME:</h4>
    </div>
    <div class="col-md-3" id="pm-title" style="width: 172px !important; margin-top: 10px;">
        <?php
        foreach ($info as $value) {
        ?>
        <b><?= date('H:i', strtotime($value->dis_ca)) ?></b>
        <?php
        break;
        }
        ?>
    </div>
    <div class="col-md-2" id="pm-heading" style="margin-top: 10px; margin-left: 49px;">
        <h4>DATE:</h4>
    </div>
    <div class="col-md-3" id="pm-title" style="width: 215px !important; margin-top: 10px;">
        <?php
        foreach ($info as $value) {
        ?>
        <b><?= date('d-m-y', strtotime($value->dis_ca)) ?></b>
        <?php
        break;
        }
        ?>
    </div>
    <div class="col-md-8" id="pm-heading" style="margin-top: 10px">
        <h4>CLEARLY RECORD WHO THIS INFORMATION CAN BE DISSEMINATED TO:</h4>
    </div>
    <div class="col-md-3" id="pm-title" style="width: 412px !important; margin-top: 10px; margin-left: 25px; height: 45px !important;">
        <?php
        foreach ($info as $value) {
        ?>
        <b><?= $value->diss_to_first_name." ".$value->diss_to_last_name ?></b>
        <?php
        break;
        }
        ?>
    </div>
    <?php
    }
    break;
    }
    ?>
    <?php
    foreach ($info as $value) {
    if($this->user_management->has_review_permission($value->rid) && $value->fully_submitted == 0 && ( $this->Home_model->this_record_is_already_started_reviewing_by_this_user($value->rid) == $this->ion_auth->user()->row()->id 
                                || $this->Home_model->this_record_is_already_started_reviewing_by_this_user($value->rid) == NULL )){
    ?>
    <div class="col-md-8">
        <a href="<?= base_url() ?>review_approve/<?= $value->urn ?>" type="button" class="btn btn-success">Review & Approve <?= ($this->user_management->check_final_review_exist($value->rid)) ? '(Continue)':'' ?>&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span></a>
    </div>
    <?php
    }else if($this->user_management->has_review_permission($value->rid, "check_continue") === "continue"){
    ?>
    <div class="col-md-8">
        <a href="<?= base_url() ?>continue/<?= $value->urn ?>" type="button" class="btn btn-success">Continue&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span></a>
    </div>
    <?php   
    }
    break;
    }
    ?>
    <div class="col-md-4">
        <a href="<?= base_url() ?>dashboard" type="button" class="btn btn-info">Go Back&nbsp;&nbsp;<span class="glyphicon glyphicon-repeat"></span></a>
    </div>
</div>