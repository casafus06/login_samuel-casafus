(function(){
    const titleQuestions = [...document.querySelectorAll('.question_title')];
    console.log(titleQuestions)

    titleQuestions.forEach(question =>{
        question.addEventListener('click', ()=>{
                let height = 0;
                let answer = question.nextElementSibling;
                let addPading = question.parentElement.parentElement;

                addPading.classList.toggle('questions_padding--add');
                question.children[0].classList.toggle('questions_arrow--rotatate');

                if (answer.clientHeight === 0) {
                        height = answer.scrollHeight;
                }

                answer.style.height = '${height}px' ;
        })
    })

})();