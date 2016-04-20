/**
 * Created by serg on 30.03.16.
 */
var group;
var them_all=[];
$(document).ready(function (){

    $('#type-them').click(function(){
        var data ={};
        var select=$(this).val();
        data['subjects_type']=select;
        $("#del_item").remove();

            if (select==2)
            {
                $('.col-md-12.one').hide();
                $('.col-md-12.two').show();
            }
            else
            {
                $.ajax({
                    url: "/index.php/grouprg",
                    type: "POST",
                    data: data
                }).done(function(data1) {
                    them_all = data1;
                    $('#them').empty();
                    $.each(data1,function(key,val){
                        $('#them').append( $( "<option value='"+val['id_direct']+"' >"+val['name']+"</option>" ) );
                    });
                    console.log(them_all);
                });
                $('.col-md-12.one').show();
                $('.col-md-12.two').hide();
            }



    });

    $('#subjects_name').keyup(function(){
        isset=0;
        var enter=$(this).val();
        var isset;
        var obj=$('#find-list');
        obj.empty();
        if (enter.length>2) {
            enter = enter.toLowerCase();
            var data={};
            data['subjects_type']=$('#type-them').val();
            data['enter']=enter;
            $.ajax({
                url: "/index.php/grouprg",
                type: "POST",
                data: data
            }).done(function(data1) {
                them_all = data1;
                /*$('#them').empty();
                $.each(data1, function (key, val) {
                    $('#them').append($("<option value='" + val['id_direct'] + "' >" + val['name'] + "</option>"));
                });*/

            console.info(them_all);
            var count =1;
            $.each(data1, function (key, val) {
                val['name'] = val['name'].toLowerCase();
                //val['name'] = val['name'].toLowerCase();
                var isset_1 = val['name'].indexOf(enter) + 1;
                console.log(isset_1);
                if (isset_1) {
                    if(count<=3){
                    obj.append($('<li class="form-control" data-name="' + val['name'] + '" data-id="' + val['id_direct'] + '">' + val['name'] + '</li>'));
                    isset = isset_1;
                }
                    count++;
            }
            });

            if (isset) {
                $('#find-list li').click(function(){
                    console.info($(this).data('id'));
                    $('#subjects_name').val($(this).data('name'));
                    $('#subjects_2').val($(this).data('id'));
                    $('#find-list').hide();
                });
                obj.show();
            }
            });
        }

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
                $('#mess').text(data1['data']['mess']).show();
                setTimeout(function(){ $('#mess').hide();},1000);
            }
            else
            {
                $.each(input, function(key,val){
                    $(val).val('');
                } );
                setTimeout(function(){$('#reg-group').modal('hide');  $('#myCarousel').carousel(0);  $('#mess').hide();},1000);
            }
        });

        //console.log(select);
    });

    $('#gr').click(function(){
        var data ={};
        var select=$(this).val();
        data['show_gr']=select;
        $.ajax({
            url: "/index.php/grouprg",
            type: "POST",
            data: data
        }).done(function(data1) {
            group=data1;
            if(Object.keys(data1).length) {
                $('#group-id').empty();
                $.each(data1, function (key, val) {
                    $('#group-id').append($("<option value='" + val['id_group'] + "' >" + val['name'] + "</option>"));
                })
            }
            else
            {
                $('#group-id').empty().append($("<option>Груп нет</option>"));
            }
        });
    });

    $('#selected-group').click(function(){
        var data = {};
        data['user_reg_gr']=$('#group-id').val();
        data['reg_in_group']=1;$.ajax({
            url: "/index.php/grouprg",
            type: "POST",
            data: data
        }).done(function(data1) {
            if(data1['success'])
            {
                $('#mess_gr').text(data1['data']['mess']).show();
                setTimeout(function(){$('#select-group').modal('hide');   $('#myCarousel').carousel(0);  $('#mess').hide(); location.reload();},1000);
            }
            else
            {
                $('#mess_gr').text(data1['data']['mess']).show();
                setTimeout(function(){ $('#mess').hide();},1000);
            }
        });

    });


    //$('#group-id').click(function(){
    //    $('#group-description').text(group[$('#group-id').val()]['name']);
    //});

});