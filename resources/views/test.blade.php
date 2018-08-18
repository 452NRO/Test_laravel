<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   <div class="colors">
   
   </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
var data_colors =  '{{!! $array_colors !!}}';
//alert(data_colors);
 
var data = 
{
        getListColorsNames : function()
        {
            var html='';
            $.ajax({
                url:'/colorsajax',
                type:'GET',
                data:'',
                success: function(data){ 
               var colors=JSON.parse(data);
               //console.log(colors);
                $.each(colors, function( index, value ) {
                console.log( index + ": " + value.name );
                html += '<li>'+value.name+'</li>'; 
                });
                $('.colors').html(html);
                }


            });
        }
}

    $(document).ready(function(){
     
        data.getListColorsNames();
    });
</script>
</html>