@extends('layouts.store')
@section('content')
    <style>
        #qrgen-view{
            min-height: 81vh;
        }

    </style>
    <div class="row" id="qrgen-view">

        <div class="col-2 mx-auto">
            <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/qrcode.js') }}"></script>

            <input id="text" type="text" value="{{ $id }}" style="width:80%" /><br />
			<div id="qrcode" style="width:200px; height:200px; margin-top:15px;">
			<p id="idcode">{{$id}}</p>
			</div>
			<div style="margin: 60px ">
				<input type="button" onclick="PrintDiv();" value="Print" />
			</div>
            <script type="text/javascript">
                var qrcode = new QRCode(document.getElementById("qrcode"), {
                    width: 200,
                    height: 200
                });

                function makeCode() {
                    var elText = document.getElementById("text");
					var icode = document.getElementById('idcode');
					icode.textContent= elText.value;
                    if (!elText.value) {
                        alert("Input a text");
                        elText.focus();
                        return;
                    }

                    qrcode.makeCode(elText.value);
                }

                makeCode();

                $("#text").
                on("blur", function() {
                    makeCode();
                }).
                on("keydown", function(e) {
                    if (e.keyCode == 13) {
                        makeCode();
                    }
                });


                function PrintDiv() {
                    var divContents = document.getElementById("qrcode").innerHTML;
                    var printWindow = window.open('', '', 'height=400,width=400');
                    printWindow.document.write('<html><head><title>Print DIV Content</title>');
                    printWindow.document.write('</head><body >');
                    printWindow.document.write(divContents);
                    printWindow.document.write('</body></html>');
                    printWindow.document.close();
                    printWindow.print();
                }

            </script>
        </div>

    </div>
@endsection
