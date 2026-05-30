const model_form = document.querySelector('.wr_information');
const open_button = document.querySelector('.li1'); 
const close_button = document.getElementById('closeModal');
const edit_body = document.getElementById('body');
// Открытие
function open_buttons(e) {
    e.preventDefault();
    model_form.classList.remove('hide');
    edit_body.classList.remove('hide');
    
    console.log("Окно открыто");
}

open_button.addEventListener('click',open_buttons);

// Закрытие
close_button.addEventListener('click', () => {
   model_form.classList.add('hide');
    console.log('Окно закрыто');
});