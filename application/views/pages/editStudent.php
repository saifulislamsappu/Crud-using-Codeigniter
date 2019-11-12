<div class="box span12">

    <div class="box-header" data-original-title="">
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
        </div>
    </div>
    
    <div class="box-content">
        <form class="form-horizontal" method="post" action="<?php echo base_url() ?>update-student">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Name </label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" value="<?php echo $editStudent->student_name ?>" name="student_name" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Phone </label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" value="<?php echo $editStudent->student_phone ?>" name="student_phone" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">ID </label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" value="<?php echo $editStudent->student_id ?>" name="student_id" required>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $editStudent->id ?>">
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>

</div>