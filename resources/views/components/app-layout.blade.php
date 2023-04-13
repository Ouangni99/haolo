<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>


    <x-header/>


    {{ $slot }}


    <x-footer/>

    <!--========= Scripts ===========-->
    <x-js/>
</body>

</html>
