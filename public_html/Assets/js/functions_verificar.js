if(document.querySelector("#form_verificar")){
    let form_verificar = document.querySelector("#form_verificar");
    form_verificar.onsubmit = function(e) {
        e.preventDefault();
        let strcodigo1 = document.querySelector('#codigo').value;
        let strEmail1 = document.querySelector('#email').value;
        let idUsuario = document.querySelector('#idUsuario').value;

        if(strcodigo1 == '' || strEmail1 == '' || idUsuario == '')
        {
            swal("Atención", "El campo es obligatorio." , "error");
            return false;
        }

        let elementsValid = document.getElementsByClassName("valid");
        for (let i = 0; i < elementsValid.length; i++) { 
            if(elementsValid[i].classList.contains('is-invalid')) { 
                swal("Atención", "Por favor verifique los campos en rojo." , "error");
                return false;
            } 
        } 
        divLoading.style.display = "flex";
        let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		let ajaxUrl = base_url + '/Registro/verificar';
        let formData = new FormData(form_verificar);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                let objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    //window.location.reload(false);
                    swal("¡Éxito!", objData.msg, "success");
                    setTimeout(function() {
                        window.location = base_url;
                    }, 2000); 
                }else{
                    swal("Error", objData.msg , "error");
                }
            }
            divLoading.style.display = "none";
            return false;
        }
    }
}