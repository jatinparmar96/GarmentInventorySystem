@extends('layouts.master')

@section('content')
    <div class="col-lg-12">
        <div class="col-lg-4 col-lg-offset-2" >
            <div class="widget red-bg p-lg text-center">

                <div class="m-b-md">
                    <i class="fa fa-line-chart fa-4x"></i>
                    <h1 class="m-xs">3000</h1>
                    <h3 class="font-bold no-margins">
                        Today's Sale
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="widget yellow-bg p-lg text-center">
                <div class="m-b-md">
                    <i class="fa fa-database fa-4x"></i>
                    <h1 class="m-xs">7</h1>
                    <h3 class="font-bold no-margins">
                        Total Garment
                    </h3>
                    <small></small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">

        <div class="ibox float-e-margins" >
            <div class="ibox-title">
                <h1>Inventory List</h1>

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

                        </tr>


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

                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection('content')