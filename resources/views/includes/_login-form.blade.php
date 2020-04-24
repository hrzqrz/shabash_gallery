<form action="{{ route('login') }}" method="POST">
    @csrf
        <div class="input-group form-group">
            
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus required placeholder=" {{ __('E-Mail Address') }} ">

            @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            
        </div>
        <div class="input-group form-group">
            
        <input name="password" id="password" required autofocus autocomplete="current-password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}">
        @error('password')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
        </div>
        <div class="row  align-items-center remember">
            <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox" class="mr-2"> {{ __('Remember Me') }}
        </div>
        <div class="form-group">
            <input type="submit" value="ورود" class="btn float-left login_btn">
        </div>
    </form>