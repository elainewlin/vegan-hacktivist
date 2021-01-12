<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/css/app.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/home.js"></script>
    <title>Q/A</title>
  </head>
  <body>
    <div class="container">
      <h1>Ask a question</h1>
      <form method="POST" action="/question">
        @csrf
        <div class="form-group">
          <textarea name="question" placeholder="What's your favorite color?" class="form-control" id="question"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-primary" id="submit">Submit</button>
        </div>
        <p id="message"></p>
      </form>
      <hr/>
      <h1>Questions</h1>
      <table class="table">
        <tr>
          <td>Some question 1?</td>
          <td>
            <button type="button" class="btn btn-info btn-sm">1 answers</button>
          </td>
        </tr>
        <tr>
          <td>Some question 2?</td>
          <td>
            <button type="button" class="btn btn-info btn-sm">2 answers</button>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
