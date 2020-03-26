<script>
    $(document).ready(function(){
        $.ajax({
            url:'functions/Sair.func.php',
            method: 'Post',
            dataType: 'JSON',
            beforeSend: function(){},
            success: function(response){
                if(response.Error == ''){
                    $(location).attr('href','index.php');
                }else{
                    $(location).attr('href','index.php');
                }
            }
        });
    });
</script>