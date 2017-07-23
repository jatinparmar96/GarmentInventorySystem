<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
    <head>
        <script src="{{asset('js/JsBarcode.all.min.js')}}"></script>
    </head>
    <body>
    <input name="inp" id="inp" >
    <button onclick="changetext()" >click</button>
    <div id="print">
    <svg class="barcode" id="hell"
         jsbarcode-value="123456789012"
         jsbarcode-textmargin="0"
         jsbarcode-fontoptions="bold">
    </svg>
    </div>
    <button onclick="print2()" >Print</button>
    <script>
        function changetext() {
            var text = document.getElementById('inp').value;
            var sv = document.getElementById('hell');
            sv.setAttribute('jsbarcode-value',text);
            JsBarcode(".barcode").init();
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
