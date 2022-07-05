<!doctype html>
<html lang="en">
<body cz-shortcut-listen="true">
    <div class="container">
        <div class="row">
        @include('layouts.nav')         
        
        @if(!empty($cities))
            @include('city.list')
        @endif
        @if(!empty($jobPositions))
            @include('jobPosition.list')
        @endif
        @extends('layouts.head')
    </div>
</div>
</body>
</html>