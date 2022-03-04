require('./bootstrap');

var img = document.getElementById("image");
var showimg = document.getElementById("imageadd");

function select(id){
    var removeclass = showimg.children;
    for(var i=0; i<removeclass.length; i++){
        removeclass[i].classList.remove("img-selected-thumb");
    }
    id.classList.add("img-selected-thumb");
}

img.onchange = evt => {
    var files = img.files;

    for(var j=0; j<files.length; j++){
        var element = document.createElement("img");
        element.src = URL.createObjectURL(files[j]);
        element.onclick = function (){
            select(this);
        }
        element.height = "200";
        element.width = "200";
        element.classList.add("img-add");
        showimg.append(element);
    }
}
