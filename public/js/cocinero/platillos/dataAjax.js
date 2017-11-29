$(document).ready(function(){

    $('.filter_actions').on('change', function(){
        $('.filter_form').submit();
    });

    $('.add_product_form .btn_add_dish').on('click',function(e){
        e.preventDefault();
        let data ={ 
            name : $(".add_product_form input[name='dishName']").val(),
            price : $(".add_product_form input[name='dishPrice']").val(),
            image : $(".add_product_form input[name='imagen']").val(),

        }

        let result  = validateData(data);

        if(result) {
            $('.add_product_form .alertMessage').css('display','none');
            $('.add_product_form').submit();
        }else{
            $('.add_product_form .alertMessage').css('display','block');
        }
    });

    $('.product_container').on('click', '.btn_edit',function(){
        let idDish = $(this).data('id');
        let _token = $('input[name="_token"]').val().trim();
        let data = {
            url : 'platillos/edit/'+idDish,
            method : 'post',
            dataFrm : '_token='+_token
        };
        sendAjax(data, false);
    });

    $('.product_container').on('click', '.btn_del',function(){
        let idDish = $(this).data('id');
        $('.btn_del_dish').attr('data-id', idDish);
        $('.delete_form').attr('action','platillos/delete/'+idDish);
    });

    
    $('.edit_product_form .btn_edit_dish').on('click', function(e){
        e.preventDefault();
        let data ={ 
            name : $(".edit_product_form input[name='dishName']").val(),
            price : $(".edit_product_form input[name='dishPrice']").val(),
            image : $(".edit_product_form input[name='imagen']").val(),
        }

        let result  = validateData(data);

        if(result) {
            $('.edit_product_form .alertMessage').css('display','none');
            $('.edit_product_form').submit();
        }else{
            $('.edit_product_form .alertMessage').css('display','block');
        }
    });
    
    $('.btn_close').on('click', limpiarCampos);
});

function validateData(data){
    var patron = /^[a-zA-ZáéíúóÁÉÍÓÚ\s]*$/;
    if(!parseFloat(data.price) || data.name.search(patron)){
        return false;
    }else if(data.price < 1){
        return false;
    }

    if(data.image.length > 0){
        let result = data.image.split('.');
        let lastSplited = result[result.length-1].toLowerCase();

        let imgFormats = ['png', 'jpg', 'jpeg', 'gif'];

        for(item in imgFormats){
            if (imgFormats[item] == lastSplited){
                return true;
            }
        }
        return false;
    }
    return true;

}

function sendAjax(dataAjax, refresh){

    $.ajax({
        dataType : 'json',
        method : dataAjax.method,
        url : dataAjax.url,
        data : dataAjax.dataFrm,
        success : function(data){
            if(refresh){
                refreshProducts(data);
                limpiarCampos();
            }else{
                setDataDish(data);
            }
        }
    });

}

function limpiarCampos(){

    $('input[name="dishName"]').val('');
    $('input[name="dishPrice"]').val('');
    $('input[name="imagen"]').val('');

}

function setDataDish(data){

    let editContext = '#mdl-edit-comida';
    $(editContext + ' input[name="dishName"]').val(data[0].nameDish);
    $(editContext + ' input[name="dishPrice"]').val(data[0].priceDish);

    $('.btn_edit_dish').attr('data-id', data[0].idDish);
    $('.edit_product_form').attr('action','platillos/update/'+data[0].idDish);
    
    $(editContext + " select[name='categoryId'] option[value="+data[0].idSubCategory+"]").prop("selected", true);
    $(editContext + " select[name='dishType'] option[value="+data[0].idSubType+"]").prop("selected", true);

}
