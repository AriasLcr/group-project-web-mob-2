
document.addEventListener("DOMContentLoaded", function() {
    const quizForm = document.getElementById("quizForm");
    const resultDisplay = document.getElementById("result");

    const correctAnswer = quizForm.getAttribute("data-correct-answer");
    const radioButtons = quizForm.querySelectorAll("input[name='answer']");

    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener("change", function() {
            const selectedAnswer = quizForm.querySelector("input[name='answer']:checked");

            if (!selectedAnswer) {
                resultDisplay.textContent = "Please select an answer.";
                return;
            }

            if (selectedAnswer.value === correctAnswer) {
                resultDisplay.textContent = "Correct!";
            } else {
                resultDisplay.textContent = "Incorrect!";
            }
        });
    });
});
