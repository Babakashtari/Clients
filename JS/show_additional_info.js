var radios = document.getElementsByClassName('revealers');
var additional_info_div = document.getElementsByClassName('to_reveal');

for (var i = 0; i < radios.length; i++) {
    radios[i].addEventListener('change', (event) => {
        var element = event.target;
        if (element.value == "NO") {
            additional_info_div[0].classList.remove('display_none');
        } else {
            additional_info_div[0].classList.add('display_none');
        }
    })
}