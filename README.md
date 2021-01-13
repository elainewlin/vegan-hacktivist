## Vegan Hacktivist Project

This is my submission for the Vegan Hackitivist coding project.

To run the app, run `php artisan serve`. The app will be available on `localhost:8000`.

## Code Overview

I followed the [Laravel Composer installation](https://laravel.com/docs/8.x/installation#installation-via-composer) to set up the app.

Here are the files I wrote/edited:
* `routes/web.php` - Defines web routes.
* `resources/views`
  * `home.blade.php` - Home page where users can view all questions and add questions.
  * `question.blade.php` - Question details page where users can view answers to a question and add answers.
* `app/Http/Controllers`
  * `HomeController` - Logic to render the home page + add a question.
  * `QuestionDetailsController` - Logic to render the question details page + add an answer.
* `public`
  * `js/app.js` - Client-side validation logic. This is a better UX. We can validate input before making a request or refreshing the page.
  * `css/app.css` - CSS for the application.

## DB Set-up

Here are the SQL commands I used to set up the DB.

Create questions table:
```
CREATE TABLE questions (
  id int NOT NULL AUTO_INCREMENT,
  text varchar(255) NOT NULL,
  created_at int NOT NULL,
  PRIMARY KEY (id)
);
```
Insert a question:
`INSERT INTO questions (text, created_at) VALUES ('some question 3?', 1004);`

Create answers table:
```
CREATE TABLE answers (
  id int NOT NULL AUTO_INCREMENT,
  text varchar(255) NOT NULL,
  created_at int NOT NULL,
  PRIMARY KEY (id),
  question_id int NOT NULL
);
```
Insert an answer:
`INSERT INTO answers (text, created_at, question_id) VALUES ('some answer 1', 1000, 1);`

Schema notes:
- `created_at` is the Unix timestamp.
- `question_id` should have an index.

## Limitations + trade-offs

- I did not figure out how to get MySQL connected to the web app. I saw [this error](failedSQLConnection.png), tried to fix it, but couldn't figure it out. Instead, here's what I did:
  - I tested all SQL queries worked via `mysqlsh`.
  - I wrote SQL queries according to [the Laravel DB docs](https://laravel.com/docs/8.x/database).
  - I commented out the SQL PHP code so the app would run.
  - I stubbed the results of SQL queries to pass into the templates.
- I do not know if the DB library functions `DB::insert` and `DB::select` protect against SQL injection.
- I wrote client-side validation in `public/js/app.js` instead of using the Laravel validation functionality.
