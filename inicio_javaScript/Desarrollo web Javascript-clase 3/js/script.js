
document.getElementById("enviar").onclick =()=>{
    let opcion = document.getElementById("opcion").value;
    let divImagenes = document.getElementById("imagenes");
    let imagenVisual = document.createElement("img");
    imagenVisual.src='./img/concierto.jpg';
    let Enviar
    
    
    divImagenes.append(imagenVisual);


console.log(opcion);
}








