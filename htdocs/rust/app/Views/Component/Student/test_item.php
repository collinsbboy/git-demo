<?php

use App\Models\ExamAnswers;
use App\Models\Teacher\SetQuestions;
use App\Models\Teacher\StudentExams;

$x=0;
$y=0; ?>

<script>
jQuery(document).ready(function(){	
    jQuery(".questions").each(function(){
        jQuery(this).hide();
    });
    jQuery("#q_1").show();
});
</script>

    <script>
    jQuery(document).ready(function(){
    var nq = 0;
    var qn = 0;
    var pq = 0;
    jQuery(".nextq").click(function(){
        qn = jQuery(this).attr('qn');
        nq = parseInt(qn) + 1;
        if (nq  > <?= $qC++ ?>) {
            $(".nextq").attr('disabled',false);

        }
        else if(nq  < <?= $qC ?>){
            $(".nextq").attr('disabled',false);
            jQuery('#q_' + qn ).hide();
            jQuery('#q_' + nq ).show();		
        }
    });


    jQuery(".nextn").click(function(){
        qn = jQuery(this).attr('qn');
        nq = parseInt(qn) + 1;
        pq = parseInt(qn) - 1;
        if(pq  < <?= $qC ?>){
            $(".nextn").attr('disabled',false);
            $(this).addClass("prevq");
            jQuery('#q_' + qn ).hide();
            jQuery('#q_' + nq ).show();		
        }else if(nq  > <?= $qC ?>){
      $(".prevq").attr('disabled',false);
      jQuery('#q_' + qn ).hide();
      jQuery('#q_' + nq ).hide();
      jQuery('#q_' + pq ).show();	
    }
        
    });

    jQuery(".prevq").click(function(){
        qn = jQuery(this).attr('qn');
        pq = parseInt(qn) - 1;
        if (pq  < 0) {
      $(".prevq").attr('disabled',false);
    }else if(pq  > 0){
      $(".prevq").attr('disabled',false);
      jQuery('#q_' + qn ).hide();
      jQuery('#q_' + pq ).show();	
    }
    });

});
</script>
<div class="air__layout__content">
  <div class="air__utils__content bg-success">
  <div class="card">
    <div class="card-body">
        test
    </div>
  </div>

  <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                    <form method="post" action="/quiz-in-progress/ended" id="examForm">
                    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                    <div class="row">
                    <div class="col-12 col-md-9">
                    <table class="questions-table table">
                        <?php foreach($quiz as $rowQ): ?>
                        <?php $examID = $rowQ['exam_id'] ?>
                        <tr id="q_<?php echo $x=$x+1;?>" class="questions">
                        <td id="qa"><span></span>
                        <h5> <?php echo $x;?>. &nbsp; <?= $rowQ['exam_question'] ?></h5>
                        <br>
                        <br>
                        <span>select one</span> 
                        <br>
                        <?php
                        if($rowQ['exam_type_id']=='2'){
                        ?>
                        <div class="ml-2">
                        <input name="q-<?php echo $rowQ['exam_question_id'];?>" value="True" type="radio"> True<br> <input name="q-<?php echo $rowQ['exam_question_id'];?>" value="False" type="radio"> False
                        </div>
                        <?php }elseif($rowQ['exam_type_id']=='1'){
                            $examAn = new ExamAnswers();
                            $answer = $examAn->WHERE('exam_question_id', $rowQ['exam_question_id'])->findAll();
                            

                            foreach($answer as $rowAn){
                                if($rowAn['choices'] == 'A') {
                                    ?>
                                    <input name="q-<?php echo $rowQ['exam_question_id'];?>" value="A" type="radio"> &nbsp;&nbsp;&nbsp;&nbsp; A. <?php echo $rowAn['answer_text'];?><br />
                                    <?php } else if ($rowAn['choices'] == 'B') {?>                                 
                                    <input name="q-<?php echo $rowQ['exam_question_id'];?>" value="B" type="radio"> &nbsp;&nbsp;&nbsp;&nbsp; B. <?php echo $rowAn['answer_text'];?><br />
                                    <?php } else if ($rowAn['choices'] == 'C') {?>                                 
                                    <input name="q-<?php echo $rowQ['exam_question_id'];?>" value="C" type="radio"> &nbsp;&nbsp;&nbsp;&nbsp; C. <?php echo $rowAn['answer_text'];?><br />
                                    <?php } else if ($rowAn['choices'] == 'D') {?>                                 
                                    <input name="q-<?php echo $rowQ['exam_question_id'];?>" value="D" type="radio"> &nbsp;&nbsp;&nbsp;&nbsp; D. <?php echo $rowAn['answer_text'];?><br />
                                    <?php
                                        }
                            }
                        }
                        
                        ?>
                        <br/><br>
                        <div class="pull-left" >
                        <button onclick="return false;" qn="<?php echo $x;?>" class="prevq btn btn-light" id="next_<?php echo $x;?>">Previous page<i class="icon-arrow-right"></i> </button>
                        <input type="hidden" name="x-<?php echo $x;?>" value="<?php echo $rowQ['exam_question_id'];?>">
                        </div>

                        <div class="pull-right" >
                        <button onclick="return false;" qn="<?php echo $x;?>" class="nextq btn btn-info" id="next_<?php echo $x;?>">Next page<i class="icon-arrow-right"></i> </button>
                        <input type="hidden" name="x-<?php echo $x;?>" value="<?php echo $rowQ['exam_question_id'];?>">
                        </div>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                        <td>
                            <br><br>
                        <button type="submit" class="btn btn-info" id="submit-test" name="submit_answer"><i class="icon-check"></i> Submit Answer</button>
                        </td>
                    </table>
                    </div>
                    <input type="hidden" name="x" value="<?php echo $x;?>">
                    <input type="hidden" name="examID" value="<?= $examID ?>">
                </form>
                    <div class="col-12 col-md-3">
                    <?php  foreach($quiz as $rowQ): 
                         $examID = $rowQ['exam_id'];
                     
                        $ETime = new StudentExams();
                        $examTime = $ETime->SELECT('exam_id, endDate')->WHERE('exam_id', $examID)->orderBy('exam_id', 'DESC')->limit(1)->find();
                        $endtestDate = date('M d Y H:m:s', '1614031200');
                        endforeach;
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-primary">Quiz Navigation</h4>
                                <a href="javascript: void(0);" class="">
                                <div class="air__menuLeft__user__avatar">
                                    <img src="/assets/components/kit/core/img/avatars/avatar.png" alt="Pascal Botwey" />
                                </div>
                                <div class="air__menuLeft__user__name">
                                   <?= get_type_by_id('user_table', session()->get('teacher_id'), 'firstName'). ' ' . get_type_by_id('user_table', session()->get('teacher_id'), 'lastName') ?>
                                </div>
                                </a>
                                <br><br><br>
                                <nav class="testQ">
                                    <ul class="pagination pagination-sm">
                                    <?php foreach($quiz as $rowQ): ?>
                                    <li qn="<?php echo $y;?> " class="page-item nextn" aria-current="page">
                                        <a class="page-link" href="javascript: void(0);"><?php echo $y=$y+1;?></a>
                                    </li>&nbsp;
                                    <?php endforeach; ?>
                                    </ul>
                                </nav>
                            </div>
                            <p><h6 class="ml-3"> Time left &nbsp; <span id="timer"></span></h6></p>
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

  </div>
  <script>
// Set the date we're counting down to
var countDownDate = new Date("<?= $endtestDate ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timer").innerHTML = hours + ":"
  + minutes + ":" + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    //document.getElementById("examForm").submit();
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);
</script>