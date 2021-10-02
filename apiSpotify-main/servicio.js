let uri = "https://api.spotify.com/v1/artists/60d24wfXkVzDSfLS6hyCjZ/top-tracks?market=US";

let token = "Bearer BQCkAJ_UNgicOFiQ1UjoZj6glj44103Kn_6kyODwbU4xAYoNjcOaGmfVKEmjWAYsUlRCWRZBTyz3uzwlcQLRGnjn_QF4l08lvN13MEPEBT3dKu0rBjNqUoawUk07wsIgi1GhnRFMbWVatpA4aKOKxt9H66L64O8";

let parametrosPeticion={
    method : "GET",
    headers : {
        Authorization : token
    }
}

fetch(uri,parametrosPeticion)
.then (respuesta => respuesta.json())
/*.then(function (respuesta) {    
   return( respuesta.json());*/

.then(function(respuesta) {
    console.log(respuesta);
    pintardatos(respuesta.tracks);

    /*console.log(respuesta.tracks);
    console.log(respuesta.tracks[0]);
    console.log(respuesta.tracks[0].name);
    console.log(respuesta.tracks[0].preview_url);
    console.log(respuesta.tracks[0].album.images[1].url);*/

})
.catch(function(error) {
    console.log(error);
})

function pintardatos (datos){
    let fila=document.getElementById("fila");
datos.forEach(function(cancion){
    let columna=document.createElement("div");
    columna.classList.add("col");

     let tarjeta= document.createElement("div");
     tarjeta.classList.add("card");
     tarjeta.classList.add("h-100");

    let imagen=document.createElement("img");
    imagen.classList.add("card-img-top");
    imagen.src=cancion.album.images[0].url

    tarjeta.appendChild(imagen)
    
    columna.appendChild(tarjeta)
    fila.appendChild(columna)

    let titulo=document.createElement("h1");
    titulo.textContent=cancion.name


})

}