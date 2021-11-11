<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    $('#question').on('change',function(event){
        event.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var pos = $('input[name="option"]:checked').attr('data-pos');
        var q_id = $(this).attr('question-id');
        $.ajax({
            url: "{{route('get-answer')}}",
            type:'POST',
            data: JSON.stringify({"q_id":q_id,"pos":pos}),
            contentType: 'application/json',
            processData: true,
            beforeSend: function(){
                $('input').attr("readonly","readonly");
            },
            success: function(data) {
                if($.isEmptyObject(data.error)){
                    $('#success').html(data.message);
                    if(pos != data.answer)
                    {
                        $('#success').removeClass('alert-success').addClass('alert-danger');
                        $("div").find(`[data-pos='${pos}']`).addClass('is-invalid');
                        $("div").find(`[data-pos='${data.answer}']`).addClass('is-valid');
                    }
                    else
                    {
                        $('#success').removeClass('alert-danger').addClass('alert-success');
                        $("div").find(`[data-pos='${data.answer}']`).addClass('is-valid');
                    }
                    $('#success').show();
                }else{
                    printErrorMsg(data.error);
                }
            },
            complete: function(){
                $('input').removeAttr("readonly","readonly");
            },
            error: function(xhr, status, error){
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        });
    });

    function printErrorMsg (msg) {
        alert(msg);
    }
</script>
