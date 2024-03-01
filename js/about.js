document.addEventListener("DOMContentLoaded", function() {
    // Get all questions
    const questions = document.querySelectorAll('.question');

    // Add click event listener to each question
    questions.forEach(function(question) {
        question.addEventListener('click', function() {
            // Toggle visibility of answer
            const answer = this.nextElementSibling;
            if (answer.style.display === 'none') {
                answer.style.display = 'block';
            } else {
                answer.style.display = 'none';
            }
        });
    });
});
