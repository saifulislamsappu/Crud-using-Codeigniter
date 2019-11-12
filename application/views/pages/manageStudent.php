
<div class="box span12">

    <div class="box-header" data-original-title="">
        <h2><i class="halflings-icon user"></i><span class="break"></span>All Students</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
            
            <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 290px;" aria-sort="ascending" aria-label="Username: activate to sort column descending">ID</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 213px;" aria-label="Date registered: activate to sort column ascending">Student Name</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 213px;" aria-label="Date registered: activate to sort column ascending">Student Phone</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 213px;" aria-label="Date registered: activate to sort column ascending">Varsity ID</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 213px;" aria-label="Date registered: activate to sort column ascending">Actions</th>
                    </tr>
                </thead>

                <div style="height:70px;width:100%;">
                    <?php
                        $notification = $this->session->userdata('message');

                        if ($notification) {
                            echo "<h2 class='alert alert-success'>$notification</h2>";
                            $this->session->unset_userdata('message');
                        }
                    ?>
                </div>

                <tbody role="alert" aria-live="polite" aria-relevant="all">
                <?php
                    foreach($allStudentsinfo as $studentInfo) {
                ?>     
                    <tr>
                        <td class="  sorting_1"><?php echo $studentInfo->id ?></td>
                        <td class="center "><?php echo $studentInfo->student_name ?></td>
                        <td class="center "><?php echo $studentInfo->student_phone ?></td>
                        <td class="center "><?php echo $studentInfo->student_id ?></td>
                        <td class="center ">
                            <a class="btn btn-info" href="<?php base_url() ?>edit-student/<?php echo $studentInfo->id ?>">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="<?php base_url() ?>delete-student/<?php echo $studentInfo->id ?>"
                                onclick="return confirm('Are you sure you want to delete this Student?');">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php   
                    }
                ?>   
                </tbody>
            </table>
            
        </div>
    </div>

</div>