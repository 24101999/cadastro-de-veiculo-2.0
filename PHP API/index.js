const input = document.querySelectorAll('.inp-for-edit');
const area = document.querySelector('.text-area-edit');
const button = document.querySelector('.send');

button.addEventListener('click', (bt) => {
    input.forEach((inp) => {
        if (inp.value == '') {
            inp.placeholder = 'campo vazio'
            area.placeholder = 'campo vazio'
            bt.preventDefault()
        }
    })
})