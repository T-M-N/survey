//Vérification email de l'utilisateur
function stateSurvey(users){
    const url = getMyURL() + 'state';
    fetch(url)
        .then((resp) => resp.json())
        .then(function (data) {
            localStorage.setItem('userList', data.users);
        });
    
    
    let emailArray = localStorage.getItem('userList');

    if (emailArray.includes(users)){
        for(let i=2; i <= 20; i++){
            let question_id = 'question_'+i;
            document.getElementById(question_id).disabled = false;
            console.log(question_id);
        }
       
    }else{
        for (let i=2; i <= 20; i++) {
            let question_id = 'question_' + i;
            document.getElementById(question_id).disabled = true;
            console.log(question_id);
        }
    }
}

    const inputMail = document.getElementById('question_1');

    inputMail.addEventListener('change', function(){
        stateSurvey(inputMail.value);
    });


