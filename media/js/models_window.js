const model_form = document.querySelector('.wr_information');
const open_button = document.querySelector('.li1');
const close_button = document.getElementById('close_wr_information');

// Открытие
function open_buttons(e) {
    e.preventDefault();
    model_form.classList.remove('hide');
    console.log("Окно открыто");
}

if (open_button)
    open_button.addEventListener('click', open_buttons);

// Закрытие
if (close_button)
    close_button.addEventListener('click', () => {
        model_form.classList.add('hide');
        console.log('Окно закрыто');
    });
