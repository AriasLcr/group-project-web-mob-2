
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
document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.getElementById('sidebar');
    const sidebarToggleBtn = document.createElement('button');

    sidebarToggleBtn.setAttribute('id', 'sidebarToggle');
    sidebarToggleBtn.innerHTML = '&#9776;'; // Unicode for ☰ symbol

    sidebarToggleBtn.addEventListener('click', function() {
        sidebar.classList.toggle('active');
    });

    document.body.appendChild(sidebarToggleBtn);
});


// Call the function initially to set the initial state based on screen width
window.dispatchEvent(new Event('resize'));
