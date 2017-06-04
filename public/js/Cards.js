$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$(function(){
    $('#higher').click(function(){
        var url = $(this).attr("data-link");
        $.ajax({
            url: "test",
            type:"POST",
            data: { testdata : 'testing123' },
            success:function(data){
                alert(data);
            },error:function(){ 
                alert("error!!!!");
            }
        });
    });
//
//    $('#lower').click(function(){
//        var b = $(this);
//        var o = b.html();
//        b.attr('disabled',true).html('Calculating...');
//        $.post('NextCard', $('#create-member-form').serialize(),  function(data){
//            if(data['Deck'].length > 0)
//            {
//                $('#next-card').html('<h3>'+data['Deck'][1]+'<h3>');
//            }
//            else
//            {
//
//            }
//            b.removeAttr('disabled').html(o);
//        },'json');
//    });
});