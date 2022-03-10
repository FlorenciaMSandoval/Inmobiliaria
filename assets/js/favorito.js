
  function guardarfavorito(id){
    $.post("index.php?c=Inmobiliaria&a=gfavorito&idcasa="+id)

    //var elementos = document.getElementById('fav');

    /*for(var i=0; i<elementos.length; i++) {*/
      if($(`#corazon`+id).hasClass('fa-heart')){
        $(`#corazon`+id).addClass('fa-heart-o');
        $(`#corazon`+id).removeClass('fa-heart');
      }else{
        $(`#corazon`+id).addClass('fa-heart');
        $(`#corazon`+id).removeClass('fa-heart-o');
      }
  
    //}
    

  
  }


  
  function sacarfavorito(id){
    $.post("index.php?c=Inmobiliaria&a=sfavorito&idcasa="+id)

    //var elementos = document.getElementById('fav');

    /*for(var i=0; i<elementos.length; i++) {*/
      document.querySelector(`#corazon`).classList.add('fa-heart-o');
      document.querySelector(`#corazon`).classList.remove('fa-heart');
   

    //}
    

  
  }



 