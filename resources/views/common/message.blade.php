@if($message=Session::get('success'))
<div class=" container animate_animated animate_fadeIn alert alert-success position-fixed w-100" id='success-id'>{{$message}}</div>
@endif
<script>
    var message = document.getElementById('success-id');
    if(message){
        setTimeout(() => {
            message.remove();
        }, 1500);
    }
</script>

