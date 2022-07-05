
<div class="col-6">
    <div class="table"> 
        <ul class="nav">
        <h2>Employees</h2>
            <li class="nav-item">
                <a class="nav-link icofont-ui-add text-dark" href="/employee-add"></a> 
            </li>   
        </ul>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">last name</th>
                <th scope="col">document type</th>
                <th scope="col">document number</th>
                <th scope="col">address</th>
                <th scope="col">phone number</th>
                <th scope="col">city</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>                   
                <th scope="col"></th>                    
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <th scope="row"> {{ $employee->id_employee }} </th>
                    <td> {{ $employee->name }} </td>
                    <td> {{ $employee->last_name }} </td>
                    <td> {{ $employee->document_type->name }} </td>
                    <td> {{ $employee->document_number }} </td>
                    <td> {{ $employee->address }} </td>
                    <td> {{ $employee->phone_number }} </td>
                    <td> {{ $employee->city->name }} </td>
                    <td> {{ $employee->created_at }} </td>
                    <td> {{ $employee->updated_at }} </td>
                    <td class="justify-content-end"> 
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link icofont-info-circle text-dark" href="/employee/{{ $employee->id_employee }}"></a> 
                            </li>
                            <li class="nav-item">    
                                <a class="nav-link icofont-ui-edit text-dark" href="/employee-update/{{ $employee->id_employee }}"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icofont-ui-delete text-danger" href="/employee/delete/{{ $employee->id_employee }}"></a> 
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $employees->links() !!}
    </div>
    </div>
</div>