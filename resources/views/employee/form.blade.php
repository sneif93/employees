<form class="col" method="{{$method}}" action="{{url($route)}}">
@csrf
    <div class="row justify-content-center">
    <div class="col-6">
        <div class="col-12 m-2">
            <label for="inputEmail4" class="form-label">Name</label>
            <div class="input-group has-validation">
                <input name="name" @if(!empty($employee)) value="{{ $employee->name}}" @endif type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" >
                @error('name')
                    <div id="inputNameFeedback" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12 m-2">
            <label for="inputEmail4" class="form-label">Last Name</label>
            <div class="input-group has-validation">
                <input name="name" @if(!empty($employee)) value="{{ $employee->name}}" @endif type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" >
                @error('name')
                    <div id="inputNameFeedback" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12 m-2">
        <div class="input-group">
            <div class="input-group has-validation">
                <label class="input-group-text" for="inputGroupSelect01">document_type</label>
                <select name="parent_id_job_position" class="form-select" id="inputGroupSelect">
                    <option disabled selected>Select an option</option>
                    @foreach($documentTypes as $documentType)
                        @if( !empty($employee) && $employee->document_type_id_document_type == $documentType->id_document_type )
                            <option selected value="{{ $documentType->id_job_position }}"> {{ $documentType->name }} </option>
                        @else
                            <option value="{{ $documentType->id_job_position }}"> {{ $documentType->name }} </option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        </div>
        <div class="col-12 m-2">
            <label for="inputEmail4" class="form-label">Document Number</label>
            <div class="input-group has-validation">
                <input name="document_number" @if(!empty($employee)) value="{{ $employee->document_number}}" @endif type="number" class="form-control @error('document_number') is-invalid @enderror" id="inputdocumentNumber" >
                @error('document_number')
                    <div id="inputdocumentNumberFeedback" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-12 m-2">
            <div class="input-group col-6">
                <div class="input-group has-validation">
                    <label class="input-group-text" for="inputGroupSelect01">Country</label>
                    <select name="country" class="form-select" id="inputGroupSelectCountry">
                        <option disabled selected>Select an option</option>
                        @foreach($countries as $country)
                            @if( !empty($employee) && $employee->city->fk_id_country == $country->id_country )
                                <option selected value="{{ $country->id_country }}"> {{ $country->name }} </option>
                            @else
                                <option value="{{ $country->id_country }}"> {{ $country->name }} </option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            </div>
        <div class="col-12 m-2">
            <div class="input-group col-6">
                <div class="input-group has-validation">
                    <label class="input-group-text" for="inputGroupSelect01">City</label>
                    <select name="city_id_city" class="form-select" id="inputGroupSelect">
                        <option disabled selected>Select an option</option>
                        @foreach($cities as $city)
                            @if( !empty($employee) && $employee->city_id_city == $city->id_city )
                                <option selected value="{{ $city->city_id_city }}"> {{ $city->name }} </option>
                            @else
                                <option value="{{ $city->city_id_city }}"> {{ $city->name }} </option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        
            </div>
        
        <div class="col-12 m-2">
            <label for="inputEmail4" class="form-label">Address</label>
            <div class="input-group has-validation">
                <input name="address" @if(!empty($employee)) value="{{ $employee->address}}" @endif type="text" class="form-control @error('address') is-invalid @enderror" id="inputAddress" >
                @error('address')
                    <div id="inputAddressFeedback" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-12 m-2">
            <label for="inputEmail4" class="form-label">Phone number</label>
            <div class="input-group has-validation">
                <input name="phone_number" @if(!empty($employee)) value="{{ $employee->phone_number }}" @endif type="text" class="form-control @error('phone_number') is-invalid @enderror" id="inputPhoneNumber" >
                @error('phone_number')
                    <div id="inputPhoneNumberFeedback" class="invalid-feedback">{{ $message }}</div>
                @enderror
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