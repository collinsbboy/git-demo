<div class="air__layout__content">
    <div class="air__utils__content">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="kit__utils__heading">
                <h5>
                    <span class="mr-3">Student List</span>
                </h5>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="table-responsive mb-5">
                <table class="table table-hover nowrap" id="example1">
                    <thead class="thead-default">
                        <tr>
                            <th>Student Name</th>
                            <th>Course</th>
                            <th>Status</th>
                            <th>option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($all_stud as $rowStud): ?>
                            <tr>
                                <td><?= $rowStud['name'] ?></td>
                                <td><?= get_type_by_id('courses', $rowStud['courses_id'], 'course_name') ?></td>
                                <td><?php if($rowStud['status'] == '1'):?>
                                  <span class="ml-1 badge bg-success text-white font-size-12 text-uppercase air__topbar__status">Active</span>
                                  <?php else: ?>
                                    <span onclick="changeFunction(<?= $rowStud['user_table_id'] ?>)" style="cursor: pointer;" class="ml-1 badge bg-danger text-white font-size-12 text-uppercase air__topbar__status">Pending</span>
                                <?php endif; ?>
                                </td>
                                <td>
                                    <button onclick="deleteUser(<?= $rowStud['user_table_id'] ?>)" class="btn btn-sm btn-light"><small><i class="fe fe-trash mr-2"><!-- --></i></small></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function changeFunction(id) {
    let text = "Press OK or Cancel to continue";
    if (confirm(text) == true) {
      window.location = '/student-list/change/student/'+id;
    } else {
      
    }
  }

  function deleteUser(id) {
    let text = "Press OK or Cancel to continue";
    if (confirm(text) == true) {
      window.location = '/student-list/delete/student/'+id;
    } else {
      
    }
  }
</script>
<script>
  ;(function($) {
    'use strict'
    $(function() {
        $('#form-validation-simple').validate({
        submit: {
          settings: {
            inputContainer: '.form-group',
            errorListClass: 'form-control-error-list',
            errorClass: 'has-danger',
          },
        },
      })

      $('#form-validation-work').validate({
        submit: {
          settings: {
            inputContainer: '.form-group',
            errorListClass: 'form-control-error-list',
            errorClass: 'has-danger',
          },
        },
      })

      $('.select2').select2()
      $('.select2-tags').select2({
        tags: true,
        tokenSeparators: [',', ' '],
      })


      $('#example1').DataTable({
        lengthMenu: [[20, 50, 100, -1], [20, 50, 100, 'All']],
        responsive: true,
        autoWidth: false,
      })

    })
  })(jQuery)
</script>