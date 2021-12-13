</div>
<script>
window.addEventListener('load', () => {
    let search_bar_icon = document.querySelector('#search_icon')
    let search_bar_container = document.querySelector('#search_form_container')
    let mobile_logo_container = document.querySelector('#mobile_logo_container')
    let search_form = document.querySelector('#search_form')
    search_bar_icon.onclick = () => {
        search_bar_container.classList.remove('d-none')
        search_bar_container.classList.add('row')
        mobile_logo_container.classList.add('d-none')
        search_form.focus()
    }
    search_form.onblur = () => {
        search_bar_container.classList.add('d-none')
        search_bar_container.classList.remove('row')
        mobile_logo_container.classList.remove('d-none')
    }
})
</script>
<footer class="footer container">
    <?php amp_non_amp_link();?>
</footer>
<?php amp_footer_core();?>