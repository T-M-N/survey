function stateSurvey(users){
    let email = document.getElementById('question_1');
  

    fetch('http://127.0.0.1:8000/state')
        .then((resp) => resp.json())
        .then(function (data) {
            // console.log(data.users);
            localStorage.setItem('userList', data.users);
        });
    
    
    let emailArray = localStorage.getItem('userList');
        

    if (emailArray.includes(users)){
        //email dans data
        for(let i=2; i <= 19; i++){
            let question_id = 'question_'+i;
            document.getElementById(question_id).disabled = false;
            console.log(question_id);
        }
       
    }else{
        for (let i = 2; i <= 19; i++) {
            let question_id = 'question_' + i;
            document.getElementById(question_id).disabled = true;
            console.log(question_id);
        }
    }
    // console.log(emailArray.includes(users));

}
    const inputMail = document.getElementById('question_1');

    inputMail.addEventListener('change', function(){
        stateSurvey(inputMail.value)
    }
        
    );

