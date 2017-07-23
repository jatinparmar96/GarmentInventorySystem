<html>
<head>
    <script src="{{asset('js/JsBarcode.all.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
</head>
<body>
<div id="print">
<div id="Img">
</div>
</div>
<input type="button" onclick="print2()" value="print">
</body>
<script>
    function displayBarcodes(val,number) {

        var img = document.getElementById('Img');
        for (var i = 0; i < number; i++) {
            console.log(i);
            var c = 'class'+i;
            var sv = document.createElement('img');
            sv.setAttribute('class',c);
            sv.setAttribute('jsbarcode-value', val);
            sv.setAttribute('jsbarcode-textmargin',0);
            sv.setAttribute('jsbarcode-fontoptions','bold');
            img.appendChild(sv);
            JsBarcode('.'+c).init();
        }
    }
       console.log('hello');
       document.body.onload = displayBarcodes('{{$value}}',{{$number}});
    function print2() {
        var win = document.body.innerHTML;
        document.body.innerHTML = document.getElementById('print').innerHTML;
        window.print();
        document.body.innerHTML = win;
    }
</script>
</html>