$(document).ready(function (e) {
    $("#uploadimage").on('submit',(function(e) {
    e.preventDefault();
    $("#message").empty();
    $('#loading').show();
    $.ajax({
    url: "ajax.php", 
    type: "POST",             
    data: new FormData(this), 
    contentType: false,      
    cache: false,            
    processData:false,        
    success: function(data)   
    {
    $('#loading').hide();
    $("#message").html(data);
    }
    });
    }));
    
    
    $(function() {
    $("#file").change(function() {
    $("#message").empty(); 
    var file = this.files[0];
    var imagefile = file.type;
    var match= ["image/jpeg","image/png","image/jpg"]; //formato de imagenes que deseo permitir para la subida
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
    {
    // $('#previewing').attr('src','noimage.png');
    $("#message").html(Swal.fire({
        icon: 'info',
        title: 'Ojo !',
        text: 'Los formatos admitidos son JPG ,PNG y JPEG!'
      }));
    return false;
    }
    else
    {
    var reader = new FileReader();
    reader.onload = imageIsLoaded;
    reader.readAsDataURL(this.files[0]);
    }
    });
    });
    function imageIsLoaded(e) {
    $("#file").css("color","green");
    
    // $('#image_preview').css("display", "block");
    // $('#previewing').attr('src', e.target.result);
    // $('#previewing').attr('width', '250px');
    // $('#previewing').attr('height', '230px');
    };
    });