<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/css/app.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/question.js"></script>
    <title>Question</title>
  </head>
  <body>
    <div class="container">
      <h1>Some question 1?</h1>
      <p>Some answer 1</p>
      <p>Some answer 2</p>
      <hr/>
      <h1>Write an answer</h1>
      <form method="POST" action="/answer">
        <div class="form-group">
          <textarea name="question" class="form-control" id="answer"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-primary" id="submit">Answer question</button>
        </div>
        <p id="message"></p>
      </form>
    </div>
  </body>
</html>