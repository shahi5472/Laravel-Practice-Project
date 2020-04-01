@csrf
<div>
    <div>
        <label for="name">Name</label>
        <input type="text" value="{{ old('name') ?? $customer->name }}" autocomplete="off" id="customer_name"
               name="name"
               class="form-control"
               placeholder="Customer name">
        <div style="color: red">{{$errors->first('name')}}</div>
    </div>
    <br>
    <div>
        <label for="email">E-mail</label>
        <input type="email" value="{{ old('email') ?? $customer->email }}" autocomplete="off"
               id="customer_email" name="email"
               class="form-control"
               placeholder="Customer E-mail">
        <div style="color: red">{{$errors->first('email')}}</div>
    </div>
    <br>
    <div>
        <label for="status">Select Status</label>
        <select name="status" id="status" class="form-control">
            <option value="" selected disabled>Select Customer status</option>
            @foreach($customer->statusOptions() as $statusOptionsKey => $statusOptionsValue)
                <option
                    {{--                    {{ $customer->status == $statusOptionsValue ? 'selected'  : ''}}--}}
                    value="{{$statusOptionsKey}}">{{$statusOptionsValue}}</option>
            @endforeach
        </select>
        <div style="color: red">{{$errors->first('status')}}</div>
    </div>
    <br>
    <div>
        <label for="company_id">Select Company</label>
        <select name="company_id" id="company_id" class="form-control">
            <option value="" selected disabled>Select Company name</option>
            @foreach($companies as $company)
                <option
                    value="{{$company->id}}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{$company->name}}</option>
            @endforeach
        </select>
        <div style="color: red">{{$errors->first('company_id')}}</div>
    </div>
    <br>
    <div>
        <label for="image">Picture</label>
        <input type="file" name="image" class="form-control">
        <div style="color: red">{{$errors->first('image')}}</div>
    </div>
</div>
