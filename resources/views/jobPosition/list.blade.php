
<div class="col">
    <div class="table"> 
        <ul class="nav">
        <h2>Job positions</h2>
            <li class="nav-item">
                <a class="nav-link icofont-ui-add text-dark" href="/job-position-add"></a> 
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
            @foreach($jobPositions as $jobPosition)
                <tr>
                    <th scope="row"> {{ $jobPosition->id_job_position }} </th>
                    <td> {{ $jobPosition->name }} </td>
                    <td> {{ $jobPosition->created_at }} </td>
                    <td> {{ $jobPosition->updated_at }} </td>
                    <td class="justify-content-end"> 
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link icofont-info-circle text-dark" href="/job-position/{{ $jobPosition->id_job_position }}"></a> 
                            </li>
                            <li class="nav-item">    
                                <a class="nav-link icofont-ui-edit text-dark" href="/job-position-update/{{ $jobPosition->id_job_position }}"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icofont-ui-delete text-danger" href="/job-position/delete/{{ $jobPosition->id_job_position }}"></a> 
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $jobPositions->links() !!}
    </div>
    </div>
</div>