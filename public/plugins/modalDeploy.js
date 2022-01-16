modalObject = {}

function removeModal() {    
    $('#modalContainer').empty();
    $('.modal-backdrop').remove()
}

function storeModal(name, heading, content, buttons) {
    /*
     * Esta funciÃ³n guarda los contenidos de la modal en un objeto para su posterior uso.
     */

    modalObject[name] = {formHeading: heading, formContent: content, formControls: buttons};

    name = heading = content = buttons = ''
}

function doModal(obj, param1, param2) {
    /*
     * ParÃ metre obj (que es un objecte) contÃ© el heading (formHeading), la estructura html del body (formContent) i la estructura html dels botÃ³ns (formControls).
     * ParÃ metre param1 es per la funciÃ³ de tancament o el tamany de la modal, la cual per defecte -sense posar res- es mitjana. "lg" per gran i "sm" per petita.
     * ParÃ¡metre param2 es per el tamany de la modal en cas de que el primer sigui per la funciÃ³ de tancament.
     */

    var closeFunction = 'removeModal()',
        modalSize = '';

    function getSize(val) {
        var ms = ' ';

        switch (val) {
            case 'lg':
                ms += 'modal-lg';
                break;

            case 'sm':
                ms += 'modal-sm';
                break;

            default:
                ms = '';
                break;
        }

        return ms;
    }

    if (param1 != undefined) {
        if (param1.indexOf('()') > -1) {
            closeFunction = param1;

            modalSize = getSize(param2)
        } else {
            modalSize = getSize(param1)
        }
    }
    
    var html =  '<div class="modal fade" id="dynamicModal" tabindex="-1" role="dialog" aria-hidden="true">';
    html += '<div class="modal-dialog modal-dialog-centered' + modalSize + '" role="document">';
    html += '<div class="modal-content">';
    html += '<div class="modal-header">';
    html += '<h5 class="modal-title" id="exampleModalLabel">' + obj.formHeading + '</h5>';
    html += '<button type="button" class="close" onclick="' + closeFunction + '">';
    html += '<span aria-hidden="true">&times;</span>';
    html += '</button>';
    html += '</div>';
    html += '<div class="modal-body">';
    html += obj.formContent;
    html += '</div>';
    
    if (obj.formControls !== '') {
    
    html += '<div class="modal-footer">';
    html += obj.formControls;
    html += '</div>';
    
    };
    
    html += '</div>';
    html += '</div>';
    html += '</div>';
    
    if ($('.modal-backdrop').length) {
        removeModal()
    }
    
    $('#modalContainer').html(html);
    
    $('#dynamicModal').modal('show')
}