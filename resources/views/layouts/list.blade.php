<!doctype html>
<html lang="en">

    <body cz-shortcut-listen="true" style="">
        <div class="container">
            <div class="row">
            @include('layouts.nav')         
            
            @empty($city)
                @include('city.list')
            @endif
            @extends('layouts.head')
        </div>
    </div>
</body>


</html>