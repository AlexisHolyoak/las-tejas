$(document).ready(function(){

    $('.btn_add_dish').on('click', getDishForm);
    $('.btn_add_drink').on('click', getDrinkForm);
    $('.filter_actions').on('change', function(){
        let _token = $('input[name="_token"]').val().trim();
        let data = {
            url : 'platillos/refresh',
            method : 'post',
            dataFrm : '_token='+_token+'&filterCombo='+$(this).val(),
        };
        sendAjax(data, true);
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
    $('.btn_edit_drink').on('click', function(){
        let idDish = $(this).data('id');
        let dishName = $('.drink_edit input[name="nombre"]').val().trim();
        let dishPrice = $('.drink_edit input[name="precio"]').val().trim();
        let dishDescription = $('.drink_edit input[name="descripcion"]').val().trim();
        let _token = $('input[name="_token"]').val().trim();
        let dataForm = 'dishName='+ dishName + '&dishPrice=' + dishPrice + '&dishDescription=' + dishDescription + '&_token=' + _token + '&filterCombo='+$('.filter_actions').val();
        let data = {
            url : 'platillos/update/'+idDish,
            method : 'put',
            dataFrm : dataForm,
            id : 1,
        };
        sendAjax(data, true);
        $('.btn_edit_drink').prop('data-id', null);
    });
    $('.btn_close').on('click', limpiarCampos);
});


function getDishForm(){
    let dataForm = 'categoryId=1';
    let dishName = $('.dish_add input[name="nombre"]').val().trim();
    let dishPrice = $('.dish_add input[name="precio"]').val().trim();
    let dishDescription = $('.dish_add input[name="descripcion"]').val().trim();
    let _token = $('input[name="_token"]').val().trim();
    dataForm += '&dishName='+ dishName + '&dishPrice=' + dishPrice + '&dishDescription=' + dishDescription + '&_token=' + _token + '&filterCombo='+$('.filter_actions').val();
    let data = {
        url : 'platillos/agregar',
        method : 'post',
        dataFrm : dataForm,
        id : 1,
    };
    sendAjax(data, true);
}

function getDrinkForm(){
    let dataForm = 'categoryId=2';
    let dishName = $('.drink_add input[name="nombre"]').val().trim();
    let dishPrice = $('.drink_add input[name="precio"]').val().trim();
    let dishDescription = $('.drink_add input[name="descripcion"]').val().trim();
    let _token = $('input[name="_token"]').val().trim();
    dataForm += '&dishName='+ dishName + '&dishPrice=' + dishPrice + '&dishDescription=' + dishDescription + '&_token=' + _token + '&filterCombo='+$('.filter_actions').val();
    let data = {
        url : 'platillos/agregar',
        method : 'post',
        dataFrm : dataForm,
        id : 2,
    };
    sendAjax(data, true);
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

function refreshProducts(data) {
    $('.product').remove();
    // console.log(Object.keys(data).length);
    for (var i = 0; i < data.length; i++) {
        let categoryEdit = data[i].idSubCategory == 1 ? '#mdl-edit-comida' : '#mdl-edit-bebida';
        let categoryDel = data[i].idSubCategory == 1 ? '#mdl-del-comida' : '#mdl-del-bebida';
        $('.product_container').append("<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12 product\"><div class=\"c-box center-version\"><br><img class=\"img-thumbnail circle\" src=\"../../../images/producto.png\" height=\"150px\" width=\"150px\"><h4><strong>"+data[i].nameDish+"</strong></h4><address><strong>Categoría: </strong>"+data[i].nameSubCategory+"<br></address><address> <strong>Precio: </strong>"+data[i].priceDish+"<br></address><div class=\"c-box-footer\"><a href=\"#\" class=\"btn btn-info circle btn_edit\" data-toggle=\"modal\" data-target=\""+categoryEdit+"\" data-id = \""+data[i].idDish+"\"><span>Editar</span></a><a href=\"#\" class=\"btn btn-danger circle btn_del\" data-toggle=\"modal\" data-target=\""+categoryDel+"\" data-id = \""+data[i].idDish+"\"><span>Eliminar</span></a></div></div></div>");

    }

    $('.btn_close').click();
}

function limpiarCampos(){
    $('input[name="nombre"]').val('');
    $('input[name="precio"]').val('');
    $('input[name="descripcion"]').val('');
}

function setDataDish(data){
    let editContext = data[0].idSubCategory == 1 ? '#mdl-edit-comida' : '#mdl-edit-bebida';
    $(editContext + ' input[name="nombre"]').val(data[0].nameDish);
    $(editContext + ' input[name="precio"]').val(data[0].priceDish);
    $('.btn_edit_dish').attr('data-id', data[0].idDish);
    $('.btn_edit_drink').attr('data-id', data[0].idDish);
}

// <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product">
//     <div class="c-box center-version">
//         <br><img class="img-thumbnail circle" src="{{asset('images/'.$imgName)}}" height="150px" width="150px">
//         <h4><strong>{{ $value->nameDish }}</strong></h4>
//         <address>
//             <strong>Categoría: </strong>{{ $value->nameSubCategory }}<br>
//         </address>
//         <address>
//             <strong>Precio: </strong>{{ $value->priceDish }}<br>
//         </address>
//         <div class="c-box-footer">
//             <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span>Editar</span></a>
//             <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span>Eliminar</span></a>
//         </div>
//     </div>
// </div>
