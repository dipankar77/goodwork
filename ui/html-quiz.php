<?php include("inc/header.php"); ?>
<main>
    <section class="text-center text-white position-relative vh-100 bg-white">

        <div class="container py-5">
            <div class="w-50 m-auto py-3 position-relative">
                <img src="../img/frontend.svg" class="img-fluid" width="75%" alt="html" />
                <h2 class="fw-bold text-secondary">Frontend HTML Quiz</h2>
                <p class="lead text-secondary fs-5">Front end interview preparation materials for busy engineers -
                    trivias, coding, algorithms, front end system design and more!</p>
                <a href="#reading" class="btn btn-primary text-white fw-bold">Start Quiz &nbsp;&nbsp;→</a>

            </div>
        </div>
    </section>

    <section class="py-5 border-top border-bottom" id="reading">
        <div class="container px-5">
           <h2>HTML Quiz</h2>
           <p>Question 1 of 25:</p>
           <!-- quiz form -->
           <p class="fw-bold">Who is making the Web standards?</p>
           <from id="quizform">
           <div class="form-check bg-light py-2">
  <input class="form-check-input" type="radio" name="question" id="Mozilla">
  <label class="form-check-label" for="Mozilla">
    Mozilla
  </label>
</div>
<div class="form-check bg-light py-2">
  <input class="form-check-input" type="radio" name="question" id="Chrome">
  <label class="form-check-label" for="Chrome">
    Chrome
  </label>
</div>
<div class="form-check bg-light py-2">
  <input class="form-check-input" type="radio" name="question" id="Microsoft">
  <label class="form-check-label" for="Microsoft">
    Microsoft
  </label>
</div>
<button class="btn btn-primary fw-bold text-white mt-3">Next&nbsp;&nbsp;→</button>
</form>
<!-- quiz form end -->
        </div>
    </section>
</main>


<?php include("inc/footer.php"); ?>
