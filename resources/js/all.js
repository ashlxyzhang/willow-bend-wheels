function submitForm() {
    var form = document.getElementsByName('form');
    form.forEach(element => {
        element.reset();
    });
    return false;
}