let search_bar_icon = document.querySelector('#search_icon')
let search_bar_container = document.querySelector('#search_form_container')
let mobile_logo_container = document.querySelector('#mobile_logo_container')
let search_form = document.querySelector('#search_form')

search_bar_icon.addEventListener('click', () => {
    search_bar_container.classList.remove('d-none')
    search_bar_container.classList.add('row')
    mobile_logo_container.classList.add('d-none')
    search_form.focus()
});

search_form.addEventListener('blur', () => {
    search_bar_container.classList.add('d-none')
    search_bar_container.classList.remove('row')
    mobile_logo_container.classList.remove('d-none')
})