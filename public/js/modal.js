


function edit(e, id){


    e.preventDefault()

    

var container = document.getElementById('container_ajax');

var info = id;

var XHR = new XMLHttpRequest();


XHR.open('POST','app/modules/register/modal/modal.php',true);
XHR.setRequestHeader('Content-type','application/x-www-form-urlencoded');
XHR.send('ID='+info);
XHR.addEventListener('load', function(){


  var data =  this.responseText;


container.innerHTML = data;


})
 

$('.modal')[0].style.transform = "scale(100%)" ;


}



    













$('.modal__close')[0].addEventListener('click', function(){


    $('.modal')[0].style.transform = "scale(0%)";

    window.location.href = 'http://localhost/Intranet/register';



})


function Editar(id){






var n_value = document.getElementById('n_value').value;



var XHR = new XMLHttpRequest();


XHR.open('POST','app/modules/register/modal/modalLib.php',true);
XHR.setRequestHeader('Content-type','application/x-www-form-urlencoded');
XHR.send('data='+n_value+'&id='+id);

XHR.addEventListener('load', function(){

    var container = document.getElementById('container_ajax');

    var result = this.responseText;


    container.innerHTML = result;
    



})



}
