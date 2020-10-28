function validacionForm() {
    //alert('hello world');
    var email=document.getElementById('email_admin').value;
    var password=document.getElementById('passwd_admin').value;
    if (email=='' && password=='') {
        alert("Los dos campos no estan informados");
    } else if (email=='') {
        alert('El campo sin informar es: email');
    } else if (password==''){
        alert('El campo sin informar es: password');
    } else {
        alert('Sesion iniciada');
        return true;
    }
    return false;

    /*if (email=='' && password=='') {
        var texto = "Ninguno de los dos campos esta informado";
    } else if (email=='') {
        texto = 'El campo sin informar es: email';
    } else if (password==''){
        texto = 'El campo sin informar es: password';
    } else {
        return true;
    }
    document.getElementById("message").innerHTML = '<p style="color:red">'+texto+'</p>';
    return false;*/
}