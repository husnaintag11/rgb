@extends('home.master')

@section('content')
<div class="col-lg-12 bg-dark">
    <div class="card-header p-4 text-center text-white">
        <h2>{{ __('Register') }}</h2>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center p-5">
        <div class="col-md-8">
            <div class="card bg-light">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="Name">{{ __('Name:')}}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- last_name --}}
                        <div class="form-group">
                            <label for="last_name">{{ __('Last Name:')}}</label>
                            <input id="last_name" type="text"
                                class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- gender --}}
                        <div class="form-group">
                            <label for="gender">{{ __('Gender') }}</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male"
                                    {{ old('gender') === 'male' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender-male">{{ __('Male') }}</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender-female"
                                    value="female" {{ old('gender') === 'female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender-female">{{ __('Female') }}</label>
                            </div>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        {{-- phone number --}}
                        <div class="form-group ">
                            <label for="phone">Phone Number</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        {{-- date_of_birth --}}
                        <div class="form-group">
                            <label for="date_of_birth">{{ __('Date_of_Birth:')}}</label>
                            <input id="date_of_birth" type="date"
                                class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth"
                                value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                            @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- email --}}
                        <div class="form-group">
                            <label for="email">{{ __('E-mail:')}}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- password --}}
                        <div class="form-group">
                            <label for="Password">{{ __('Password:')}}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="confirm password">{{ __('Confirm Password')}}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>


                            <textarea id="address" class="form-control @error('address') is-invalid @enderror"
                                name="address" required autocomplete="address">{{ old('address') }}</textarea>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>








                        {{-- register button --}}
                        <div class="p-3">
                            <div class="offset">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>





                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




{{-- <div class="form-group row">
    <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>

    <div class="col-md-6">
        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"
autocomplete="image" autofocus>

@error('image')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">
    <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

    <div class="col-md-6">
        <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender"
            autocomplete="gender">
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
        </select>

        @error('gender')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>



--}}
