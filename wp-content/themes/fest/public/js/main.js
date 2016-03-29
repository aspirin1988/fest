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
                $('#them').append( $( "<option value='"+val['id']+"' >"+val['name']+"</option>" ) );
            })
        });
    });

});