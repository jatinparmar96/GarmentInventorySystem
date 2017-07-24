<nav class="navbar navbar-static-top white-bg" role="navigation">


    <div class="navbar-collapse collapse" id="navbar">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <i class="fa fa-reorder"></i>
            </button>
            <a href="{{url('/dashboard')}}" class="navbar-brand" >SANSKRUTI</a>
        </div>
        <ul class="nav navbar-nav">

            <li>
                <a href="{{ url('/dashboard') }}"> <b style="color: #000000">Dashboard</b>

                </a>
            </li>
            <li>
                <a href="{{url('/billing')}}"> <b style="color: #000000">Billing</b>

                </a>
            </li>
            <li>
                <a href="{{url('/entry')}}"><b style="color: #000000">Product Entry</b>

                </a>
            </li>
            <li>
                <a href="{{url('/history')}}"><b style="color: #000000">History</b>

                </a>
            </li>

        </ul>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="{{ url('') }}">
                    Log out
                </a>
            </li>
        </ul>
    </div>
</nav>