
<div class="col">
    <div class="table">
        <ul class="nav">
        <h2>Cities</h2> 
            <li class="nav-item">
                <a class="nav-link icofont-ui-add text-dark" href="../city-add"></a> 
            </li>
        </ul>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col"></th>                    
            </tr>
            </thead>
            <tbody>
            @foreach($cities as $city)
                <tr>
                    <th scope="row"> {{ $city->id_city }} </th>
                    <td> {{ $city->name }} </td>
                    <td> {{ $city->created_at }} </td>
                    <td> {{ $city->updated_at }} </td>
                    <td class="justify-content-end"> 
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link icofont-info-circle text-dark" href="../city/{{ $city->id_city }}"></a> 
                            </li>
                            <li class="nav-item">    
                                <a class="nav-link icofont-ui-edit text-dark" href="../city-update/{{ $city->id_city }}"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icofont-ui-delete text-danger" href="../city/delete/{{ $city->id_city }}"></a> 
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $cities->links() !!}
    </div>
    </div>
</div>