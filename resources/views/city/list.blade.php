
<div class="col">
    <div class="table"> 
        <h2>Cities</h2>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>                    </tr>
            </thead>
            <tbody>
            @foreach($cities as $city)
                <tr>
                    <th scope="row"> {{ $city->id }} </th>
                    <td> {{ $city->name }} </td>
                    <td> {{ $city->created_at }} </td>
                    <td> {{ $city->updated_at }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $cities->links() !!}
    </div>
    </div>
</div>