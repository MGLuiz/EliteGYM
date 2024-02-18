// Return Button
document.querySelector('.return-page-btn').addEventListener('click', () => {history.go(-1)});

// GYM Form Validator

let gymFormValidator = {

    handleSubmit: (event) =>{
        event.preventDefault();
        let send = true;
        
        let inputs = document.querySelectorAll('.gymForm input');
        
        gymFormValidator.clearErrors();
        
        for (const i of inputs) {
            let input = i;
            let check = gymFormValidator.checkInput(input);
            
            if (check !== true){
                send = false;
                gymFormValidator.showError(input, check);
            }
        }

        if(send){
            form.submit();
        }
    },
    
    checkInput: (input) => {
        let rules = input.getAttribute('data-rules');
        
        if (rules !== null){
            rules = rules.split('; ');
            for (const rule of rules) {
                let ruleDetais = rule.split('=');
                switch(ruleDetais[0]){
                    case 'required':
                        if(input.value = ''){
                            return 'Esse campo é obrigatório';
                        }
                        break;
                    case 'min':
                        if(input.value.length < ruleDetais[1]){
                            return 'No mínimo são obrigatórios 8 caracteres';
                        }
                        break;
                }
            }
        }
        return true;
    },
            
    showError: (input, error) => {
        input.style.borderColor = '#FF0000';

        let erroElement = document.createElement('div');
        erroElement.classList.add('error');
        erroElement.innerHTML = error;
        
        input.parentElement.insertBefore(erroElement, input.ElementSibling);
    },
    
    clearErrors: () => {
        let errorElements = document.querySelectorAll('.error');
        for(e of errorElements){
            e.remove();
        }
    }
}

const gymForm = document.querySelector('gymForm');
gymForm.addEventListener('submit', gymFormValidator.handleSubmit);