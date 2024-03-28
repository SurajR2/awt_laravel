function showAnswer() {
    var hiddenAnswer = document.getElementById("hiddenAnswer");
    var toggleButton = document.getElementById("toggleButton");

    if (hiddenAnswer.classList.contains("d-none")) {
        hiddenAnswer.classList.remove("d-none");
        toggleButton.innerText = "🙈";
    } else {
        hiddenAnswer.classList.add("d-none");
        toggleButton.innerText = "🙉";
    }
}

function nextQuestion() {
    window.location.reload();
}

export default showAnswer;
