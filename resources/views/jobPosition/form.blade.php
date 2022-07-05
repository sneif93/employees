<form class="col" method="{{$method}}" action="{{url($route)}}">
@csrf
    <div class="row justify-content-center">
    <div class="col-6">
        <div class="col-12 m-2">
            <label for="inputEmail4" class="form-label">Name</label>
            <div class="input-group has-validation">
                <input name="name" @if(!empty($jobPosition)) value="{{ $jobPosition->name}}" @endif type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" >
                @error('name')
                    <div id="inputNameFeedback" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12 m-2">
        <div class="input-group mb-3">
            <div class="input-group has-validation">
                <label class="input-group-text" for="inputGroupSelect01">Superior officer</label>
                <select name="parent_id_job_position" class="form-select" id="inputGroupSelect">
                    <option disabled selected>Select an option</option>
                    @foreach($jobPositions as $jobPositionElement)
                        @if( !empty($jobPosition->parent_id_job_position) && $jobPositionElement->id_job_position == $jobPosition->parent_id_job_position )
                            <option selected value="{{ $jobPositionElement->id_job_position }}"> {{ $jobPositionElement->name }} </option>
                        @else
                            <option value="{{ $jobPositionElement->id_job_position }}"> {{ $jobPositionElement->name }} </option>
                        @endif
                    @endforeach
                </select>
               
            </div>
        </div>
        </div>
        <!-- @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Add / Update</button>
        </div>
    </div>
    </div>
</form>