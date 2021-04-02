<div class="row">
    <div id="reader" width="600px"></div>
    <script type="text/javascript"  src="http://localhost:8000/js/html5-qrcode.min.js"></script>
    <script>
    function onScanSuccess(qrMessage) {
        
                async function postData(url = '', data = {}) {
                // Default options are marked with *
                const response = await fetch(url, {
                method: 'GET', // *GET, POST, PUT, DELETE, etc.
                mode: 'no-cors', // no-cors, *cors, same-origin
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                credentials: 'same-origin', // include, *same-origin, omit
                headers: {
                'Content-Type': 'application/json'
                // 'Content-Type': 'application/x-www-form-urlencoded',
                },
                redirect: 'follow', // manual, *follow, error
                referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
                });
                return response.json(); // parses JSON response into native JavaScript objects
                }
                

                postData('http://localhost:8000/getInfo/'+qrMessage, { answer: 42 })
                .then(data => {
                if(data[0].invId){
                    console.log(data[0].invId)
                     var p= document.getElementById('photo');
                     p.src = 'http://localhost:8000/users/img/'+data[0].invId+'.jpeg';
                    }
                }
                );
    }
    
    function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning
        console.warn(`QR error = ${error}`);
    }
    
    let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 10, qrbox: 250 }, /* verbose= */ true);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
</div>