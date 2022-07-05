
<div class="col">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card justify-content-center">
                <div class="card-header">
                Employee
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : {{ $employee->name }}</li>
                    <li class="list-group-item">last name : {{ $employee->last_name }}</li>
                    <li class="list-group-item">document type : {{ $employee->document_type->name }}</li>
                    <li class="list-group-item">document number : {{ $employee->document_number }}</li>
                    <li class="list-group-item">address : {{ $employee->address }}</li>
                    <li class="list-group-item">phone number : {{ $employee->phone_number }}</li>
                    <li class="list-group-item">city : {{ $employee->city->name }}</li>
                    <li class="list-group-item">created_at : {{ $employee->created_at }}</li>
                    <li class="list-group-item">updated_at: {{ $employee->updated_at }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
