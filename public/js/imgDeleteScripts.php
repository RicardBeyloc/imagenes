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
        window.location = "http://localhost/imagenes/controllers/imgDelete.php?img_id=" + img_id;

        /*$.ajax({
            type: "POST",
            url: "www.google.com",
            data: {"img_id": img_id}
        }).done(function () {
            doModal({formHeading: 'Petición procesada', formContent: 'Imagen eliminada.', formControls: ''});
            setTimeout(function () {
                location.reload();
            }, 2000);
        });
        alert("hola");*/
    }

</script>
