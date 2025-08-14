<!DOCTYPE html>
<html lang="en">
   @include('admin.header')
    <body class="sb-nav-fixed">
      @include('admin.navbar')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">

              @include('admin.sidebar')

            </div>
            <div id="layoutSidenav_content">
                @yield('content')
                <main>
                 
                </main>
                
                @include('admin.footer')
            </div>
        </div>
       @include('admin.script')
    </body>
</html>
