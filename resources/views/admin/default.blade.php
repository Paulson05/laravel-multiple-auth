
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

@include('admin.template.partials.head')
<body class=" sidebar-mini ">





<div class="wrapper ">

    @include('admin.template.partials.sidebar')


    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
    @include('admin.template.partials.navbartoggle')
    <!-- End Navbar -->




        <div class="panel-header panel-header-sm">




        </div>


        <div class="content">





@yield('content')

        </div>

        @include('admin.template.partials.footer')


    </div>

</div>



@include('admin.template.partials.script')

</body>
</html>
