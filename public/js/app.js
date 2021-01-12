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

const ERROR_MESSAGES = {
  INVALID_QUESTION: "Question must be at least 5 characters long and end in ?",
  INVALID_ANSWER: "Answer must be at least 5 characters long"
}
const showErrorMessage = (message) => {
  $("#message").text(message);
}
const clearErrorMessage = () =>{
  showErrorMessage("");
}

// Handle submitting a question
const handleQuestionSubmit = () => {
  const questionText = $("#question").val();
  if (!isValidQuestion(questionText)) {
    showErrorMessage(ERROR_MESSAGES.INVALID_QUESTION);
    return false;
  }
  clearErrorMessage();
}

// Handle submitting an answer
const handleAnswerSubmit = () => {
  const answerText = $("#answer").val();
  if (!isValidAnswer(answerText)) {
    showErrorMessage(ERROR_MESSAGES.INVALID_ANSWER);
    return false;
  }
  clearErrorMessage();
}

$(document).ready(() => {
  $("#submitQuestion").click(handleQuestionSubmit);
  $("#submitAnswer").click(handleAnswerSubmit);
});