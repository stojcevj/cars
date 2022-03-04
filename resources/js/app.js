require('./bootstrap');

var img = document.getElementById("image");
var showimg = document.getElementById("imageadd");

function select(id){
    id.classList.toggle("img-selected-thumb");
}

img.onchange = evt => {
    var files = img.files;

    for(var j=0; j<files.length; j++){
        var i = document.createElement("img");
        i.src = URL.createObjectURL(files[j]);
        i.onclick = function (){
            select(this);
        }
        i.height = "200";
        i.width = "200";
        i.classList.add("img-add");
        showimg.append(i);
    }
}
