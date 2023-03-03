<div class="air__layout__content">
    <div class="air__utils__content">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold mb-5">
            
              <li class="nav-item">
                <a class="nav-link active" id="set-exam-tab" href="#set" role="tab" aria-selected="true" data-toggle="tab">
                  <i class="fe fe-file-plus mr-1"></i>
                  Create Course
                </a>
              </li>
            </ul>

            <div class="card">
                  <div class="card-body">
                  <div class="tab-content" id="v-pills-tabContent">
                  
                  <div class="tab-pane fade show active" id="set" role="tabpanel" aria-labelledby="set-exam-tab">
                  <h4 class="mb-4"><strong>Creating Course</strong></h4>
                   <form id="form-validation-simple" name="form-validation-simple" method="POST" action="/courses/record/course/data">
                   <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="baseFullname">Course Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="course" id="course" data-validation="[NOTEMPTY]" placeholder="course">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-5">create sheet</button>
                    </form>
                  </div>
                </div>
                </div>
            </div>
        </div>

            <div class="col-xl-8 col-lg-8">
                <div class="kit__utils__heading">
                <h5>
                    <span class="mr-3">Course List</span>
                </h5>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="table-responsive mb-5">
                <table class="table table-hover nowrap" id="example1">
                    <thead class="thead-default">
                        <tr>
                            <th>Course Name</th>
                            <th>option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($course as $rowC): ?>
                            <tr>
                                <td><?= $rowC['course_name']?></td>
                                <td>
                                    <button onclick="deleteCourse(<?= $rowC['courses_id'] ?>)" class="btn btn-sm btn-light"><small><i class="fe fe-trash mr-2"><!-- --></i></small></button>
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
  function deleteCourse(id) {
    let text = "Press OK or Cancel to continue";
    if (confirm(text) == true) {
      window.location = '/courses/delete/courses/'+id;
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


      $('#example1').DataTable({
        lengthMenu: [[20, 50, 100, -1], [20, 50, 100, 'All']],
        responsive: true,
        autoWidth: false,
      })

    })
  })(jQuery)
</script>