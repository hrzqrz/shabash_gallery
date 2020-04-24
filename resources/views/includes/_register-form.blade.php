<form class="form-register" action="{{route('register')}}" method="POST">
    @csrf
    <h3>ایجاد حساب کاربری </h3>
    <div class="form-holder">
        <span class="lnr lnr-user"></span>
    <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus required placeholder="نام و نام خانوادگی ">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-holder">  
        <span class="lnr lnr-phone-handset"></span>
    <input name="phone" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" autocomplete="phone" autofocus required placeholder="تلفن همراه">

        @error('phone')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-holder">
        <span class="lnr lnr-envelope"></span>
    <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus required placeholder="آدرس ایمیل">

        @error('email')
            <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-holder">
        <span class="lnr lnr-lock"></span>
        <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" required placeholder="رمز عبور">

        @error('password')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-holder">
        <span class="lnr lnr-lock"></span>
        <input id="password-confirm" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" required placeholder="تکرار رمز عبور ">
    </div>
    <button>
        <span>ثبت نام</span>
    </button>
</form>