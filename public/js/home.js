/**
 * Check if a question is valid
 * @param  {String} text
 * @return {Boolean}
 */
const isValidQuestion = (text) => {
  if (!text) return false;
  if (!text.endsWith("?")) return false;

  const MIN_QUESTION_LEN = 5;
  if (text.length < MIN_QUESTION_LEN) return false;
  return true;
}

const showErrorMessage = () => {
  $("#message").text("Question must be at least 5 characters long and end in ?");
}

const clearErrorMessage = () =>{
  $("#message").text("");
}

$(document).ready(() => {
  $("#submit").click(function () {
    const questionText = $("#question").val();
    if (!isValidQuestion(questionText)) {
      showErrorMessage();
      return false;
    }
    clearErrorMessage();
    return false;
  })
});