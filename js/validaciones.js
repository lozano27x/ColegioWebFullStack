function ValidarRegistro() {
    let username    = document.getElementById('emailregis').value
    let password    = document.getElementById('passwregis').value
    let nombres     = document.getElementById('nombres').value
    let apellidos   = document.getElementById('apellidos').value
    let confir      = document.getElementById('confirpassword').value
    let identificacion      = document.getElementById('identificacion').value

    let mensajes=''
    
    if(password!=confir) mensajes +='<li>Las contraseñas no son iguales</li>'
    if(username=='')    mensajes +='<li>Debes agregar un correo electronico</li>'
    if(password=='')    mensajes +='<li>Debes agregar una contraseña</li>'
    if(nombres=='')     mensajes +='<li>Debes agregar tus nombres</li>'
    if(apellidos=='')   mensajes +='<li>Debes agregar tus apellidos</li>'
    if(confir=='')      mensajes +='<li>Debes confirmar la contraseña</li>'
    if(identificacion=='')      mensajes +='<li>Debes agregar una identificacion</li>'

    if(mensajes!=''){
        document.getElementById('mensaje').innerHTML = `<div class='alert alert-danger' role='alert'> ${mensajes} </div>`
    }else{
        document.forregistro.submit()
    }
    
}

function ValidarRoles() {
    let nombre    = document.getElementById('nombre').value
    let mensajes=''
    
    if(nombre=='')   mensajes +='<li>Debes ingresar nombre del rol</li>'

    if(mensajes!=''){
        document.getElementById('mensaje').innerHTML = `<div class='alert alert-danger' role='alert'> ${mensajes} </div>`
    }else{
        document.forrol.submit()
    }
    
}

function ValidarEstudiantes() {
    let identificacion  = document.getElementById('identificacion').value
    let nombres         = document.getElementById('nombres').value
    let apellidos       = document.getElementById('apellidos').value
    let email           = document.getElementById('email').value
    let telefono        = document.getElementById('telefono').value
    let pais            = document.getElementById('pais').value
    let ciudad          = document.getElementById('ciudad').value
    let grado           = document.getElementById('grado').value

    let mensajes=''
    
    if(telefono=='')        mensajes +='<li>Debes agregar un numero de telefono</li>'
    if(email=='')           mensajes +='<li>Debes agregar un correo electronico</li>'
    if(nombres=='')         mensajes +='<li>Debes agregar tus nombres</li>'
    if(apellidos=='')       mensajes +='<li>Debes agregar tus apellidos</li>'
    if(identificacion=='')  mensajes +='<li>Debes agregar una identificacion</li>'
    if(pais=='')            mensajes +='<li>Debes agregar un pais</li>'
    if(ciudad=='')          mensajes +='<li>Debes agregar una ciudad</li>'
    if(grado=='')           mensajes +='<li>Debes agregar un grado escolar</li>'

    if(mensajes!=''){
        document.getElementById('mensaje').innerHTML = `<div class='alert alert-danger' role='alert'> ${mensajes} </div>`
    }else{
        document.forestudiantes.submit()
    }
    
}

function ValidarMaterias() {
    let nombre      = document.getElementById('nombre').value
    let creditos    = document.getElementById('creditos').value
    let fecha       = document.getElementById('fecha').value
    let profesor    = document.getElementById('profesor').value


    let mensajes=''
    
    if(nombre=='')      mensajes +='<li>Debes ingresar nombre de la materia</li>'
    if(creditos=='')    mensajes +='<li>Debes ingresar el credito de 5 a 10 de la materia</li>'
    if(fecha=='')       mensajes +='<li>Debes ingresar la fecha de inicio de la materia</li>'
    if(profesor=='')    mensajes +='<li>Debes ingresar nombre del profesor de la materia</li>'

    if(mensajes!=''){
        document.getElementById('mensaje').innerHTML = `<div class='alert alert-danger' role='alert'> ${mensajes} </div>`
    }else{
        document.formateria.submit()
    }
    
}