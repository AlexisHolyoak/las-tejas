$(document).ready(function(){

    $('.filter_actions').on('change', function(){
        $('.filter_form').submit();
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

    $('.btn_del_dish').on('click', function(){
        let idDish = $(this).data('id');
        let _token = $('input[name="_token"]').val().trim();
        let data = {
            url : 'platillos/delete/'+idDish,
            method : 'post',
            dataFrm : '_token='+_token + '&filterCombo='+$('.filter_actions').val()
        };
        sendAjax(data, true);
        $('.btn_del_dish').prop('data-id', null);
    });
    $('.btn_edit_dish').on('click', function(){
        let idDish = $(this).data('id');
        let dishName = $('.dish_edit input[name="nombre"]').val().trim();
        let dishPrice = $('.dish_edit input[name="precio"]').val().trim();
        let dishDescription = $('.dish_edit input[name="descripcion"]').val().trim();
        let _token = $('input[name="_token"]').val().trim();
        let dataForm = 'dishName='+ dishName + '&dishPrice=' + dishPrice + '&dishDescription=' + dishDescription + '&_token=' + _token + '&filterCombo='+$('.filter_actions').val();
        let data = {
            url : 'platillos/update/'+idDish,
            method : 'put',
            dataFrm : dataForm,
            id : 1,
        };
        sendAjax(data, true);
        $('.btn_edit_dish').prop('data-id', null);
    });
    
    $('.btn_close').on('click', limpiarCampos);
});

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

    $('input[name="nombre"]').val('');
    $('input[name="precio"]').val('');
    $('input[name="descripcion"]').val('');

}

function setDataDish(data){

    let editContext = '#mdl-edit-comida';
    $(editContext + ' input[name="dishName"]').val(data[0].nameDish);
    $(editContext + ' input[name="dishPrice"]').val(data[0].priceDish);

    $('.btn_edit_dish').attr('data-id', data[0].idDish);
    $('.btn_edit_drink').attr('data-id', data[0].idDish);
    $('.edit_form').attr('action','platillos/update/'+data[0].idDish);
    
    $(editContext + " select[name='categoryId'] option[value="+data[0].idSubCategory+"]").prop("selected", true);
    $(editContext + " select[name='dishType'] option[value="+data[0].idSubType+"]").prop("selected", true);

}
