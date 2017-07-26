@extends('layouts.master')

@section('content')

    <div class="col-lg-8 col-lg-offset-2">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h1>Scan Product</h1>
            </div>
            <div class="ibox-content">
                <p>
                    <button type="button" class="btn btn-primary" id="btnAdd" >Add Product</button>
                </p>
                <div class="form-group">
                    <div class="m-t-sm" id="TextBoxContainer">
                        <div style="width: 0 ; overflow: hidden">
                            <input type="text" id="barcodescan">
                        </div>

                        <!--<select data-placeholder="Choose a Country..." class="chosen-select" style="width: 300px;" tabindex="2">-->
                        <!--<option value="">Select</option>-->
                        <!--<option value="United States">United States</option>-->
                        <!--<option value="United Kingdom">United Kingdom</option>-->

                        <!--</select> &nbsp; <button type="button" class="btn btn-danger btn-xs">Remove</button>-->

                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-sm btn-info" id="btnGet" type="submit" >Print Invoice</button>
                </div>
            </div>
        </div>
    </div>
@endsection('content')

@section('js')
    <script type="text/javascript">
        var inp = document.getElementById('barcodescan');
        $(document).on('load',$('#barcodescan').focus());
        $(document).on('click',function (e) {
            $('#barcodescan').focus();
        });
        $(function () {
            $(document).on("keypress",function(e){
                if(e.keyCode == 13){

                    var x = $('#barcodescan').val();
                    $.ajax({
                        url: 'id='+x,
                        success: function (result) {
                            var div = $("<div />");
                            div.html(GetDynamicTextBox(result));
                            $("#TextBoxContainer").append(div);
                        }
                    })
                    $('#barcodescan').val('');
                }

            });

            $("#btnAdd").on("click", function () {
                var div = $("<div />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer").append(div);
                $('.chosen-select').chosen({width: "50%"});
                $('.text-primary').focus();
            });
            $("#btnGet").bind("click", function () {
                var values = "";
                $("input[name=DynamicTextBox]").each(function () {
                    values += $(this).val() + "\n";
                });
                alert(values);
            });
            $("body").on("click", ".remove", function () {
                $(this).closest("div").remove();
            });
        });
        function GetDynamicTextBox(value) {
            return '<input type="text" value='+value+'>'+'<button type="button" class="btn btn-danger btn-xs remove">Remove</button>'+'<hr class="hr-line-dashed">'

        }
    </script>
@endsection('js')