/**
 * Created by serg on 30.03.16.
 */

$(document).ready(function (){

    $('#type-them').click(function(){
        var data ={};
        var select=$(this).val();
        data['subjects_type']=select;
        $.ajax({
            url: "/index.php/grouprg",
            type: "POST",
            data: data
        }).done(function(data1) {
            $("#del_item").remove();

            if (select==2)
            {
                $('.col-md-12.one').hide();
                $('.col-md-12.two').show();
            }
            else
            {
                $('.col-md-12.one').show();
                $('.col-md-12.two').hide();
            }

            $('#them').empty();
            $.each(data1,function(key,val){
                $('#them').append( $( "<option value='"+val['id_direct']+"' >"+val['name']+"</option>" ) );
            })
        });
    });

    $('#add_group').click(function(){
        var data={};
        var form=$('#group_add');
        var input=form.find('input');
        var select=form.find('select');
        $.each(input, function(key,val){
            data[$(val).attr("name")]=$(val).val();
        } );
        $.each(select, function(key,val){
            data[$(val).attr("name")]=$(val).val();
        } );
        data['add_group']=1;
        $.ajax({
            url: "/index.php/grouprg",
            type: "POST",
            data: data
        }).done(function(data1) {
            if (!data1['success'])
            {
                $('#mess').text(data1['data']['mess']);
            }
            else
            {
                $.each(input, function(key,val){
                    $(val).val('');
                } );
                $('#reg-group').modal('hide');
            }
        });

        //console.log(select);
    });

});