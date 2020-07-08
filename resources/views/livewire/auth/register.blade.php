<div>
<section class="login-content">
      <div class="logo">
        <h1>S.M.S</h1>
        <!-- <span>Own a shop with us</span> -->

      </div>
      <div class="login-box">
        <form class="login-form" wire:submit.prevent="createUser">
        @livewire('utils.notification-message')
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>REGISTER NOW!</h3>
          <div class="row">
         
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" wire:model="first_name" type="text" placeholder="First Name" >
                @error('first_name') <span class="error">{{ $message }}</span> @enderror

            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" wire:model="last_name" type="text" placeholder="Last Name">
                @error('last_name') <span class="error">{{ $message }}</span> @enderror

            </div>
         </div>

         <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" wire:model="email" type="email" placeholder="Email">
                @error('email') <span class="error">{{ $message }}</span> @enderror

            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" wire:model="password" type="password" placeholder="Password">
                @error('password') <span class="error">{{ $message }}</span> @enderror

            </div>
         </div>

         <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" wire:model="phone_number" type="text" placeholder="Phone Number">
                @error('phone_number') <span class="error">{{ $message }}</span> @enderror

            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" wire:model="shop_name" type="text" placeholder="Shop Name">
                @error('shop_name') <span class="error">{{ $message }}</span> @enderror

            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
                <input class="form-control" wire:model="address" type="text" placeholder="Address">
                @error('address') <span class="error">{{ $message }}</span> @enderror

            </div>
         </div>
         
         
         </div>

      
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2">Already have an account? <a href="login" > Login</a></p>

            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
     
      </div>
    </section>
</div>

<style>
    .login-box {
        min-width: 500px !important;
        min-height: 450px !important;
    }
</style>