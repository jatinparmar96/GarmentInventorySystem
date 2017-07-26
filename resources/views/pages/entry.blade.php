@extends('layouts.master')
@section('css')
    <script src="{{asset('js/JsBarcode.all.min.js')}}"></script>

@endsection
@section('content')
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="ibox-title" style="border: none">
                <h2>  Add Inventory</h2>
                <hr>
            </div>



            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">UID</label>
                    <input type="text" disabled id="UID" name="UID" value="{{$UID}}" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="product_name">Product Name</label>
                    <input type="text" id="" name="" value="" placeholder=" "  autofocus class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">Product Company</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>


            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Category</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Quantity</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">CP</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>

            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">SP</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">Dealer's Code</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">Sanskruti's Code</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Distributor</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Date Of Arrival</label>
                    <div>
                        <input type="text" class="form-control" data-mask="99/99/9999" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Distributor</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Batch #</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="ibox-content " style="border: none;display: flex;flex-direction: column;justify-content: flex-start ">
                            <div class="m-b-sm pull-left">
                                <img alt="image" class="" id="barcodeImage">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <button type="button" class="btn btn-info m-r-md" >Print</button>
                    <button type="button" class="btn btn-danger ">Submit</button>
                </div>
            </div>




        </div>
        <hr class="hr-line-solid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="m-b-md">
                        <h2>Added Inventory List</h2>

                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Prod Name</th>
                                    <th>Prod Company</th>
                                    <th>Categories</th>
                                    <th>Quantity</th>
                                    <th>CP</th>
                                    <th>SP</th>
                                    <th>Dealer's Code</th>
                                    <th>Sankruti Code</th>
                                    <th>Date Of Arrival</th>
                                    <th>Distributor</th>
                                    <th>Batch #</th>
                                    <th>Print</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr class="">
                                    <td>2</td>
                                    <td>ABC</td>
                                    <td>QWE</td>
                                    <td>Men</td>
                                    <td>6</td>
                                    <td>1000</td>
                                    <td>1300</td>
                                    <td>T2Q</td>
                                    <td>AEW</td>
                                    <td>10/11/17</td>
                                    <td>Shivam</td>
                                    <td>17946</td>
                                    <td><button type="button" class="btn btn-info btn-xs">Print</button></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal6">
                                            Edit
                                        </button>
                                        <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title pull-left">Edit Details</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">


                                                            <div class="">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="product_name">Product Name</label>
                                                                    <br>
                                                                    <input type="text" id="" name="" value="Crcoine" placeholder=" "  autofocus class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="price">Product Company</label>
                                                                    <br>
                                                                    <input type="text" id="" name="" value="ABC" placeholder="" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="quantity">Quantity</label><br>
                                                                    <input type="text" id="" name="" value="100" placeholder="" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="quantity">Price</label><br>
                                                                    <input type="text" id="" name="" value="100" placeholder="" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="quantity">Mfg. Date</label><br>
                                                                    <div>
                                                                        <input type="text" class="form-control" value="10/10/1090" data-mask="99/99/9999" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="quantity">Exp. Date</label><br>
                                                                    <div>
                                                                        <input type="text" class="form-control"  value="10/10/1090" data-mask="99/99/9999" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="quantity">Arrival Date</label><br>
                                                                    <div>
                                                                        <input type="text" class="form-control" value="10/10/1090" data-mask="99/99/9999" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="quantity">Distributor</label><br>
                                                                    <input type="text" id="" name="" value="Ramu" placeholder="" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="quantity">Batch #</label><br>
                                                                    <input type="text" id="" name="" value="1001" placeholder="" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-info ">Capture Image</button>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="">
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-danger ">Submit</button>
                                                                </div>
                                                            </div>



                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                                </tr>


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Prod Name</th>
                                    <th>Prod Company</th>
                                    <th>Categories</th>
                                    <th>Quantity</th>
                                    <th>CP</th>
                                    <th>SP</th>
                                    <th>Dealer's Code</th>
                                    <th>Sankruti Code</th>
                                    <th>Date Of Arrival</th>
                                    <th>Distributor</th>
                                    <th>Batch #</th>
                                    <th>Print</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection('content')

@section('js')
    <!-- Input Mask-->

    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
    <script>
        function generateBarcode() {
            var text = document.getElementById('UID').value;
            var sv = document.getElementById('barcodeImage');
            sv.setAttribute('jsbarcode-value', text);
            JsBarcode("#barcodeImage").init();
        }
        document.body.onload = generateBarcode();
    </script>


@endsection('js')





