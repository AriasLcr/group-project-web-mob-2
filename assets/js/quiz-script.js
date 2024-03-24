const quizQuestions = [
    {
      "question": "What is UNIX?",
      "answers": {
        "a": "A programming language",
        "b": "An operating system",
        "c": "A software development tool",
        "d": "A web browser"
      },
      "correctAnswer": "b"
    },
    {
      "question": "What is a common UNIX command for listing files?",
      "answers": {
        "a": "ls",
        "b": "cp",
        "c": "mv",
        "d": "rm"
      },
      "correctAnswer": "a"
    },
    {
      "question": "How do you change directories in UNIX?",
      "answers": {
        "a": "cd",
        "b": "ls",
        "c": "mkdir",
        "d": "pwd"
      },
      "correctAnswer": "a"
    },
    {
      "question": "What command creates a new directory in UNIX?",
      "answers": {
        "a": "cd",
        "b": "ls",
        "c": "mkdir",
        "d": "pwd"
      },
      "correctAnswer": "c"
    },
    {
      "question": "Explain the purpose of the pwd command.",
      "answers": {
        "a": "To list the contents of a directory.",
        "b": "To change the current directory",
        "c": "To print the current working directory.",
        "d": "To remove a directory."
      },
      "correctAnswer": "c"
    },
    {
      "question": "What does the cd command do in UNIX?",
      "answers": {
        "a": "Creates a new directory.",
        "b": "Lists files in a directory.",
        "c": "Changes the current directory",
        "d": "Removes a file."
      },
      "correctAnswer": "c"
    },
    {
      "question": "How do you list all the files in a directory in UNIX?",
      "answers": {
        "a": "mv",
        "b": "cp",
        "c": "ls -la",
        "d": "rm"
      },
      "correctAnswer": "c"
    },
    {
      "question": "Explain the purpose of the touch command.",
      "answers": {
        "a": "Changes the permissions of a file.",
        "b": "Modifies the content of a file.",
        "c": "Creates a new file.",
        "d": "Renames a file."
      },
      "correctAnswer": "c"
    },
    {
      "question": "How do you move a file in UNIX?",
      "answers": {
        "a": "cp",
        "b": "mv",
        "c": "mkdir",
        "d": "rm"
      },
      "correctAnswer": "b"
    },
    {
      "question": "What command is used to remove a file in UNIX?",
      "answers": {
        "a": "rm",
        "b": "mv",
        "c": "cp",
        "d": "touch"
      },
      "correctAnswer": "a"
    },
    {
      "question": "What does the cat command do?",
      "answers": {
        "a": "Deletes a file",
        "b": "Displays the contents of a file on the screen",
        "c": "Renames a file",
        "d": "Copies a file"
      },
      "correctAnswer": "b"
    },
    {
      "question": "Which command helps you search for specific words or patterns in a file?",
      "answers": {
        "a": "ls",
        "b": "grep",
        "c": "mv",
        "d": "cp"
      },
      "correctAnswer": "b"
    },
    {
      "question": "What does the > command do in redirection?",
      "answers": {
        "a": "Appends output to a file",
        "b": "Creates a new file",
        "c": "Sends the output of a command to a file",
        "d": "Displays the contents of a file"
      },
      "correctAnswer": "c"
    },
    {
      "question": "Which redirection operator appends output to the end of a file without replacing its contents?",
      "answers": {
        "a": "<",
        "b": "<<",
        "c": ">",
        "d": ">>"
      },
      "correctAnswer": "d"
    },
    {
      "question": "What is the purpose of the grep command?",
      "answers": {
        "a": "Display file permissions",
        "b":"Search for specific words or patterns in a file",
        "c": "Move files from one directory to another",
        "d": "List all files in a directory"
        },
        "correctAnswer": "b"
    },
    {
        "question": "What does the ps command show?",
        "answers": {
        "a": "Process status and IDs",
        "b": "Available disk space",
        "c": "System uptime",
        "d": "CPU usage"
        },
        "correctAnswer": "a"
    },
    {
        "question": "Which command constantly updates to show programs using the most resources like CPU and memory?",
        "answers": {
        "a": "free",
        "b": "top",
        "c": "kill",
        "d": "uptime"
        },
        "correctAnswer": "b"
    },
    {
        "question": "What does the kill command do?",
        "answers": {
        "a": "Lists running processes",
        "b": "Stops a program",
        "c": "Checks available memory",
        "d": "Restarts the system"
        },
        "correctAnswer": "b"
    },
    {
        "question": "Which command tells you how long your computer has been running since its last boot?",
        "answers": {
        "a": "uptime",
        "b": "top",
        "c": "free",
        "d": "ps"
        },
        "correctAnswer": "a"
    },
    {
        "question": "What does the free command do?",
        "answers": {
        "a": "Kills processes",
        "b": "Shows disk space usage",
        "c": "Checks system uptime",
        "d": "Checks computer memory"
        },
        "correctAnswer": "d"
    }
]

// builds the quiz and randomizes the questions
function quizBuilder(){
    const output = []; // This array will store HTML strings
    quizQuestions.forEach(
        (curQuestion, questionNumber) => { // Fixed the variable name here
            const answers = [];
            for(letter in curQuestion.answers){
                // Build the list of answers as HTML strings
                answers.push(
                    `<label>
                        <input type="radio" name="question${questionNumber}" value="${letter}">
                        ${letter} :
                        ${curQuestion.answers[letter]}
                    </label>`
                );
            }
            // Build the full question block as an HTML string and add it to the output array
            output.push(
                `<div class="question"> ${curQuestion.question} </div>
                <div class="answers"> ${answers.join('')} </div>`
            );
        }
    );
    // Assuming you have an element with the ID 'quizContainer' in your HTML
    quizContainer.innerHTML = output.join(''); // Convert the output array to a string and insert it into the page


    quizQuestions.forEach(
        (curQuestion, questionNumber) => {
            const answers = [];
            for(letter in curQuestion.answers){
                answers.push(
                    `<label>
                        <input type="radio" name="question${questionNumber}" value="${letter}">
                        ${letter} :
                        ${curQuestion.answers[letter]}
                    </label>`
                );
            }
            output.push(
                `<div class="question"> ${curQuestion.question} </div>
                <div class="answers"> ${answers.join('')} </div>`
            );
        }
    )
    
}


// This function will be called when the user clicks the submit button
function showResults() {

}


document.addEventListener('DOMContentLoaded', (event) => {
    // Your existing code here
    const quizContainer = document.getElementById("quizContainer");
    const resultDisplay = document.getElementById("result");
    const submitButton = document.getElementById("submitButton");

    quizBuilder();

    // Event listener here
    submitButton.addEventListener('click', showResults);
});