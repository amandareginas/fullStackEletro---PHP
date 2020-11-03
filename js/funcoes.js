function exibir_categoria(categoria) {
    //alert(categoria);
    let elementos = document.getElementsByClassName('box-produto');
    console.log(elementos);
    for (var i = 0; i < elementos.length; i++) {
        console.log(elementos[i].id);
        if (categoria == elementos[i].id)
            elementos[i].style = "display:inline-block";
        else
            elementos[i].style = "display:none"
    }

};


let exibir_todas = () => {
    let elementos = document.getElementsByClassName('box-produto');

    for (var i = 0; i < elementos.length; i++) {
        elementos[i].style = "display:inline-block";
    }
}


let aumentar = (imagem) => {
    console.log(imagem);
    if (imagem.width == 240) {
        imagem.width = 120;
    } else
        imagem.width = 240;
}

let diminuir = (imagem) => {
    console.log(imagem);
    if (imagem.width == 120) {
        imagem.width = 240;
    } else
        imagem.width = 120;
}



let entrarMouse = (categoria) => {
    categoria.style= "background-color: red; padding: 12px; color: white; size: 19px";
}

let sairMouse= (categoria) => {
    categoria.style= "none";
}


// não funcionou por aqui, coloquei no script
//function caracteres(){
//document.getElementById("mostrar").innerHTML="Máximo de 240 caracteres.";}


