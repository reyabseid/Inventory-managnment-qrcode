<!DOCTYPE html>
<html>
<head>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/webcam.min.js')}}"></script>
    <style type="text/css">
        #taken-image { color: 
#fff; padding:20px; border:1px solid 
#08F6E3; background:
#A365EB; 
margin-top:30%; 

}

#image-fire{
    margin-top:50%; 
}
    </style>
</head>
<body>

<div >


        <div class="row justify-content-center">
            <div class="col-md-8 justify-content-center text-center row">
                <div class="col-6 text-center">
                    <button id="image-fire" type=button class="btn btn-outline-warning">Take Picture</button>
                </div>
                <div id="camera" class="col-6"></div>
            </div>
            <div class="col-4 text-center">
                <div id="taken-image">The Photo</div>
            </div>
                <input type="hidden" name="image" class="image-tag">
           
        </div>


</div>

<script language="JavaScript">
    Webcam.set({
        width: 150,
        height: 190,
        image_format: 'jpeg',
        jpeg_quality: 50
    });
    Webcam.attach( '#camera' );

    $('#image-fire').click(function (e) {
        e.preventDefault();
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('taken-image').innerHTML = '<img src="'+data_uri+'"/>';
                        
        } );
    });
</script>

</body>
</html>