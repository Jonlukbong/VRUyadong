<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'ชื่อ' }}</label>
    <div class="form-control">{{$users->name}}</div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'อีเมล' }}</label>
    <div class="form-control">{{$users->email}}</div>
</div>

<div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
    <label for="role" class="control-label">{{ 'สถานะ' }}</label>
    <select name="role" class="form-control" id="role" >
    @foreach (json_decode('{"customer":"ตัวแทนจำหน่าย","dealer":"ผู้ใช้ทั่วไป"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($users->role) && $users->role == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'อัพเดท' : 'Create' }}">
</div>