@csrf
<div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" aria-describedby="first_name" placeholder="Enter First Name" value="{{ old('first_name') }}@isset($user){{ $user->first_name }}@endisset">
    @error('first_name')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" aria-describedby="last_name" placeholder="Enter Last Name" value="{{ old('last_name') }}@isset($user){{ $user->last_name }}@endisset">
    @error('last_name')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="email" placeholder="Enter email" value="{{ old('email') }}@isset($user){{ $user->email }}@endisset">
    @error('email')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
@isset($create)
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Confirm Password</label>
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>
@endisset
<div class="mb-3">
    @foreach ($roles as $role)
        <div class="form-check">
            <input type="checkbox" name="roles[]" value="{{ $role->id }}" id="{{ $role->name }}" class="form-check-input" @isset($user)
                @if (in_array($role->id, $user->roles->pluck('id')->toArray()))
                    checked
                @endif
            @endisset>
            <label for="{{ $role->name }}" class="form-check-label">
                {{ $role->name }}
            </label>
        </div>
    @endforeach
</div>
<button type="submit" class="btn btn-primary">Submit</button>