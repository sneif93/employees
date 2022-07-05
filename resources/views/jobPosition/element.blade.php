
<div class="col">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card justify-content-center">
                <div class="card-header">
                Job position
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : {{ $jobPosition->name }}</li>
                        @if($jobPosition->job_position)
                            <li class="list-group-item">Superior officer name : {{ $jobPosition->job_position->name }}</li>
                        @endif
                    <li class="list-group-item">created_at : {{ $jobPosition->created_at }}</li>
                    <li class="list-group-item">updated_at: {{ $jobPosition->updated_at }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
