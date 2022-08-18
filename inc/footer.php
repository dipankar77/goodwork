<hr>
<h6 class="text-center mt-2 mb-2">&copy Dipankar Sarkar, <?php echo date("Y"); ?></h6>
</div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="js/jquery.quiz-min.js"></script>
<script>
  $('#quiz').quiz({
    resultsScreen: '#results-screen',
    counter: true,
    homeButton: '#custom-home',
    counterFormat: 'Question %current of %total',
    questions: [
      {
        'q': 'A sample question?',
        'options': [
          'Answer 1',
          'Answer 2',
          'Answer 3',
          'Answer 4'
        ],
        'correctIndex': 1,
        'correctResponse': 'Custom correct response.',
        'incorrectResponse': 'Custom incorrect response.'
      },
      {
        'q': 'What is this image? <img src="https://picsum.photos/100/100">',
        'options': [
          'Answer 1',
          'Answer 2'
        ],
        'correctIndex': 1,
        'correctResponse': 'Custom correct response.',
        'incorrectResponse': 'Custom incorrect response.'
      },
      {
        'q': 'Which image is the correct answer?',
        'options': [
          '<img src="https://picsum.photos/100/100">',
          '<img src="https://picsum.photos/100/100">'
        ],
        'correctIndex': 0,
        'correctResponse': 'Custom correct response.',
        'incorrectResponse': 'Custom incorrect response.'
      },
      {
        'q': 'A sample question?',
        'options': [
          'Answer 1',
          'Answer 2'
        ],
        'correctIndex': 1,
        'correctResponse': 'Custom correct response.',
        'incorrectResponse': 'Custom incorrect response.'
      },
      {
        'q': 'A sample question?',
        'options': [
          'Answer 1',
          'Answer 2',
          'Answer 3',
          'Answer 4'
        ],
        'correctIndex': 3,
        'correctResponse': 'Custom correct response.',
        'incorrectResponse': 'Custom incorrect response.'
      }
    ]
  });
</script>
</body>
</html>