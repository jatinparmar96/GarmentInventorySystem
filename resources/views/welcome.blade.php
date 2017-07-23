<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
<head>
    <script src="{{asset('js/JsBarcode.all.min.js')}}"></script>
</head>
<body>
<input id="inp">
<button onclick="changetext()">click</button>
<form action="{{route('print')}}" id="printform">
    <div id="print">
        <img class="class1" id="hell" name="barcode"
             jsbarcode-value=""
             jsbarcode-textmargin="0"
             jsbarcode-fontoptions="bold">
        </img>
    </div>
    <input type="text" value="" name="barcodeValue">
    <input type="text" name="number">


    <input type="submit" value="submit">
</form>
<button onclick="print2()">Print</button>
<script>
    function changetext() {
        var text = document.getElementById('inp').value;
        var sv = document.getElementById('hell');
        sv.setAttribute('jsbarcode-value', text);
        var c = 'class1'
        JsBarcode("."+c).init();
        document.getElementbyId('printform').submit();
    }
    function print2() {
        var win = document.body.innerHTML;
        document.body.innerHTML = document.getElementById('print').innerHTML;
        window.print();
        document.body.innerHTML = win;
    }
</script>
</body>
</html>
