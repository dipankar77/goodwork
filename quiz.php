<?php 
$quiz = new Quiz($db); 
$sql_content = 'SELECT * FROM menus WHERE cattype = 3';
//echo "<pre>"; print_r($_SESSION);
?>
<div class="col-md-6" style="margin:auto;padding-bottom:10px;border:3px solid #006ddb">
<div class="col-md-3"></div>   
   <!--<div class="quizHeader">QUIZ</div>-->
   <div class="quizRegister">
      <form onsubmit="event.preventDefault();">
         <div class="row">
            <div class="col-md-12">
               <div class="page-header clearfix">
                  <h2 class="text-center">QUIZ</h2>
               </div>
               <br>
               <div class="row">
                  <?php 
                  if($result_content = mysqli_query($link, $sql_content)) {
                     if(mysqli_num_rows($result_content) > 0) {
                        while($row_content = mysqli_fetch_array($result_content)) { ?>
                  <div class="col-sm-4">
                     <div class="card">
                        <div class="card-body">
                           <h5 class="card-title"><?=$row_content["category_name"];?></h5>
                           <p class="card-text"># apps available.</p>
                           <a href="?page=<?=$row_content["slug"];?>" class="btn btn-primary">View Apps</a>
                        </div>
                     </div>
                  </div>
                  <?php } } } ?>
               </div>
            </div>
         </div>

         <label class="label-input">Select Category</label>
         <label><input type=checkbox value=0 checked/>All</label>
         <?php
            foreach($db->getCategories() as $category){
                echo "<label><input type=checkbox value={$category['id']} />{$category['category_name']}</label>";
            }
            ?>
         <div class="text-center">
            <input id="startQuiz" type="button" value="Start Quiz" class="block btn btn-danger" />
         </div>
      </form>
   </div>
   <div class="quiz">
      <div class="score">
         <span id="correctL">Correct:</span><span id="correct"></span>
         <span id="wrongL">Wrong:</span><span id="wrong"></span>
         <span id="timeL">Time:</span><span class="time"></span>
         <a id="Qrestart" class="btn btn-danger pull-right">Restart Quiz</a>
      </div>
      <div class="status"></div>
      <div class="clearfix"></div>
      <div class="quizarea">
         <div class="question"></div>
         <div class="options"></div>
         <a id="Qskip" class=" btn btn-warning">Skip</a>
         <a id="Qanswer" class="pull-right btn btn-success">Answer</a>
      </div>
   </div>
   <div class="quizResults">
      <h2 style="text-align: center;">Results</h2>
      <div class="block" id="resultMsg"></div>
      <div class="col-md-2"></div>
      <div class="col-md-8">
         <div>Total: <span id="total"></span></div>
         <div>Correct: <span id="correct"></span></div>
         <div>Wrong: <span id="wrong"></span></div>
         <div>Skipped: <span id="skipped"></span></div>
         <div>Time taken: <span id="time"></span></div>
         <div>Score :<span id="score"></div>
      </div>
      <div class="col-md-2"></div>
      <div class="block"></div>
      <button id="restartQuiz" class="btn btn-default pull-right">Restart Quiz !</button>
      <div class="block"></div>
   </div>
</div>
<script src="js/quiz.js"></script>