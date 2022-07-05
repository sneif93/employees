
<div class="col">
    <div class="table"> 
        <h2>Job job_positions</h2>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>                    </tr>
            </thead>
            <tbody>
            @foreach($jobPositions as $jobPosition)
                <tr>
                    <th scope="row"> {{ $jobPosition->id }} </th>
                    <td> {{ $jobPosition->name }} </td>
                    <td> {{ $jobPosition->created_at }} </td>
                    <td> {{ $jobPosition->updated_at }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $jobPositions->links() !!}
    </div>
    </div>
</div>