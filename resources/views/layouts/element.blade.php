<!doctype html>
<html lang="en">

    <body cz-shortcut-listen="true" style="">
        <div class="container">
            <div class="row ">
            @include('layouts.nav')         
            
            @if(!empty($city))
                @include('city.element')
            @endif
            @if(!empty($jobPosition))
                @include('jobPosition.element')
            @endif
            @extends('layouts.head')
        </div>
    </div>
</body>


</html>