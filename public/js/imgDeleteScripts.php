<?php ?>

<script type="text/javascript" >

    function deleteImageModal(img_id) {
        msg = '¿Està seguro de querer eliminar la imagen?';
        frmctrls = '<button type="button" class="close" onclick="removeModal();javascript:deleteImage(' + img_id + ');">Sí</button>\
                        <span>   </span>\
                    <button type="button" class="close" onclick="javascript:removeModal();">No</button>';
        doModal({formHeading: '¡Atención!', formContent: msg, formControls: frmctrls});
    }

    function deleteImage(img_id) {
       
        frmctrls = '<button type="button" class="close" onclick="javascript:window.location.reload();">Recargar</button>';
        $.ajax({
            type: "POST",
            url: "http://localhost/imagenes/controllers/imgDelete.php",
            data: {"img_id": img_id},
            success: function () {
                doModal({formHeading: 'Petición procesada', formContent: 'Imagen eliminada.', formControls: frmctrls});
            },
            error: function(request) {
                doModal({formHeading: 'Fallo', formContent: 'Imagen no eliminada.', formControls: frmctrls});
            }
        });
    }

</script>
