<div class="box span12">

    <div class="box-header" data-original-title="">
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
        </div>
    </div>
    <div style="height:70px;width:100%;">
        <?php
            $notification = $this->session->userdata('message');

            if ($notification) {
                echo "<h2 class='alert alert-success'>$notification</h2>";
                $this->session->unset_userdata('message');
            }
        ?>
    </div>
    <div class="box-content">
        <form class="form-horizontal" method="post" action="<?php base_url() ?>save-student">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Name </label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" name="student_name" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Phone </label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" name="student_phone" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">ID </label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" name="student_id" required>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>

</div>