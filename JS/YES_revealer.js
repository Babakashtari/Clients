var revealers = document.getElementsByClassName('revealers');
var to_reveal = document.getElementsByClassName("to_reveal");

for (let i = 0; i < revealers.length; i++) {
    revealers[i].addEventListener('change', (event) => {
        let element = event.target;
        if (element.checked == true) {
            to_reveal[i].classList.remove('display_none');
        } else {
            to_reveal[i].classList.add('display_none');
            console.log(i);
            // emptying inputs:
            let revealed_inputs = to_reveal[i].querySelectorAll('label > input:not([type="checkbox"], [type="radio"])');
            for (let y in revealed_inputs) {
                revealed_inputs[y].value = "";
            }
            // deselecting checkboxes:
            let revealed_checkboxes = to_reveal[i].querySelectorAll('label > input[type="checkbox"]');
            for (let z in revealed_checkboxes) {
                revealed_checkboxes[z].checked = false;
            }
            // deselecting select options:
            let revealed_select_options = to_reveal[i].querySelectorAll('label > select > option');
            for (let r in revealed_select_options) {
                revealed_select_options[r].selected = false;
            }
        }
    })
}