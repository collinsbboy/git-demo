<?php $account = session()->get('account_type') ?>
<div class="air__layout__content">
        <div class="air__utils__content">
          <?php if($account == 2 || $account == 3 ): ?>
            <div class="row">
              <div class="col-xl-9 col-lg-8">
                <h4 class="mb-4"><strong>Analytics</strong></h4>
                  <div class="row">
                    <?php if(empty($class_list)): ?>
                  <div class="col-12 col-md-12 col-lg-12">
                  <center><h6><span class="ml-1 badge bg-primary text-white font-size-12 ">No record was found</span></h6></center>
                  </div>
                <?php else: ?>
                <?php foreach($class_list as $rowTC): ?>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center">
                          <div class="mr-auto">
                            <p class="text-uppercase text-dark font-weight-bold mb-1">
                            <?= get_type_by_id('class', $rowTC['class_id'], 'class_name') ?>
                            </p>
                            <p class="text-uppercase text-gray-5 mb-0">
                            <?= get_type_by_id('subject', $rowTC['subject_id'], 'subject_title') ?>
                            </p>
                          </div>
                          <p class="text-primary font-weight-bold font-size-24 mb-0">
                            <?= count_class_members($rowTC['class_id']) ?>
                          </p>
                        </div>

                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                <?php endif; ?>
                </div>
              </div>
            </div>
          <?php elseif($account == 5): ?>
          <div class="row">
          <div class="col-xl-4 col-lg-4">
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="align-items-center justify-content-between">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pr-0 pt-3">
                              <div class="card-content">
                                <h5 class="font-15"><?= 'Registered Students' ?></h5>
                                <h2 class="mb-3 font-18 align-items-center"><?= $total_stud ?></h2>
                                <p class="mb-0"><span class="col-green">0%</span> Increase</p>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                              <div class="banner-img">
                                <img src="/uploads/banner/student.jpg" width="150px" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="align-items-center justify-content-between">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pr-0 pt-3">
                              <div class="card-content">
                                <h5 class="font-15"><?= 'Pending Registration' ?></h5>
                                <h2 class="mb-3 font-18 align-items-center"><?= $total_PS ?></h2>
                                <p class="mb-0"><span class="col-green">0%</span> Increase</p>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 
                            col-sm-6 col-xs-6 pl-0">
                              <div class="banner-img">
                                <img src="/uploads/banner/student.jpg" width="150px" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="align-items-center justify-content-between">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pr-0 pt-3">
                              <div class="card-content">
                                <h5 class="font-15"><?= 'Courses' ?></h5>
                                <h2 class="mb-3 font-18 align-items-center"><?= $total_C ?></h2>
                                <p class="mb-0"><span class="col-green">0%</span> Increase</p>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                              <div class="banner-img">
                                <img src="/uploads/banner/stud.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
  </div>
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
    })

    // BAR CHART
    var barCtx = document.getElementById('chart-bar').getContext('3d')

    var dataBar = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
          ],
          borderWidth: 1,
          data: [],
        },
      ],
    }

    new Chart(barCtx, {
      type: 'bar',
      data: dataBar,
      options: {
        scales: {
          xAxes: [
            {
              stacked: true,
            },
          ],
          yAxes: [
            {
              stacked: true,
            },
          ],
        },
      },
    })

  })(jQuery)
</script>