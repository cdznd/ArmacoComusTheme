//Form Animation
document.addEventListener('DOMContentLoaded', (event) => {

    var forms = document.querySelectorAll('.form-control');

    forms.forEach(form => form.addEventListener("click", function () {

        this.parentNode.classList.add('focused');

    }))

    forms.forEach(form => form.addEventListener("blur", function () {

        //you should make some validation here.
        var inputValue = form.value;

        if (inputValue == "") {

            form.classList.remove('filled');
            form.parentNode.classList.remove('focused');

        } else {

            form.classList.add('filled');

        }

    }))

});

