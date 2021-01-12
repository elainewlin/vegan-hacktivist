/**
 * Check if an answer is valid
 * @param  {String} text
 * @return {Boolean}
 */
const isValidAnswer = (text) => {
  if (!text) return false;

  const MIN_ANSWER_LENGTH = 5;
  if (text.length < MIN_ANSWER_LENGTH) return false;
  return true;
}

const showErrorMessage = () => {
  $("#message").text("Answer must be at least 5 characters long");
}

const clearErrorMessage = () =>{
  $("#message").text("");
}

$(document).ready(() => {
  $("#submit").click(function () {
    const answerText = $("#answer").val();
    if (!isValidAnswer(answerText)) {
      showErrorMessage();
      return false;
    }
    clearErrorMessage();
    return false;
  })
});