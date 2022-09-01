<?php include("inc/header.php"); ?>
<main>
    <section class="text-center text-white position-relative vh-100 bg-white">
        
        <div class="container py-5">
        <div class="w-50 m-auto py-3 position-relative">
          <img src="../img/html.svg" class="img-fluid" width="75%" alt="html"/>
                            <h2 class="fw-bold text-secondary">Frontend HTML Question & Answer</h2>
                            <p class="lead text-secondary fs-5">Front end interview preparation materials for busy engineers - trivias, coding, algorithms, front end system design and more!</p>
                            <a href="#reading" class="btn btn-primary text-white fw-bold">Start Reading &nbsp;&nbsp;→</a>
                            
                        </div>
                            </div>
    </section>

<section class="py-5 border-top border-bottom" id="reading">
    <div class="container px-5">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <strong>Define Element, Tag and Attribute in HTML?</strong>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      The HTML Element is consists of HTML Tag and and Attributes e.g. Title, Paragraph etc.
In the following example the paragraph element having <code>&lt;p&gt; and &lt;/p&gt;</code> as start tag and end tag respectively. The class is the attribute and foo is the value of the attribute.
<code>&lt;p class="foo"&gt; This is paragraph&lt;/p&gt;</code>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <strong>What are void elements in HTML?</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      HTML elements which do not have closing tags or do not need to be closed are Void elements. For Example <code>&lt;br /&gt;, &lt;img /&gt;, &lt;hr /&gt;</code>, etc.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>
</section>
</main>


<?php include("inc/footer.php"); ?>
