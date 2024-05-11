const radioButtons = document.querySelectorAll('input[type="radio"]');
const button = document.getElementById('button'); 
button.disabled = true;

for (const radioButton of radioButtons) {
    radioButton.addEventListener('change', function() {
        let isSelected = false;
        for (const radioButton of radioButtons) {
            if (radioButton.checked) {
                isSelected = true;
                break;
            }
        }
        if (isSelected) {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    });
}
