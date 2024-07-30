const formEl=document.querySelectorAll('form.form-destroyer');

formEl.forEach((formEl)=>{
    formEl.addEventListener("submit", function(event){
        event.preventDefault();
        const userChoice=window.confirm("Do you really want to delete it?");
        if (userChoice){
            submit();
        }
    });
})
