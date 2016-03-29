/**
 * Created by serg on 30.03.16.
 */

$(document).ready(function (){

    $('#type-them').click(function(){
        var data ={};
        data['subjects_type']=$(this).val();
        $.ajax({
            url: "/index.php/grouprg",
            type: "POST",
            data: data
        }).done(function(data1) {
            $("#del_item").remove();
            $('#them').empty();
            $.each(data1,function(key,val){
                $('#them').append( $( "<option value='"+val['id']+"' >"+val['name']+"</option>" ) );
            })
        });
    });

});