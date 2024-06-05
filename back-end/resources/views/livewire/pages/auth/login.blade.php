<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
<div class="">
        <div  class="flex flex-col md:flex-row justify-center items-center gap-20 px-2 md:px-[200px]">
          <div class="">
            <div class="text">
              <h1
                class="text-[1.5rem] md:text-[3.5rem] font-semibold text-center md:text-left tracking-tight leading-tight text-slate-500"
              >
                Student Loan Application and Management System
              </h1>

              <p class="text-slate-400 pt-8 text-center md:text-left">
                Providing equal financing to tertiary education students
              </p>
            </div>
          </div>
          <!------------- 
            Login form 
          -------------->
          <div class="bg-white rounded-3xl w-full md:w-[80%]">
            <div class="py-8 px-8">
              <!------------ 
                Texts
              ------------->
              <div
                class="flex flex-col justify-start pb-12 text-center md:text-left"
              >
                <h1
                  class="text-[1.5rem] md:text-[2rem] font-medium text-slate-500"
                >
                  Login
                </h1>
                <p class="text-slate-400">
                  Login to start loan application process.
                </p>
              </div>
              <!------------ 
                End Texts
              ------------->

              <!------------ 
                Form
              ------------->
    <x-auth-session-status class="mb-4" :status="session('status')" />

               <form  wire:submit="login">
                <!------------------
                  Student ID input
                -------------------->
                <div class="input-box relative mb-6">
                  <input
                    type="text"
                    wire:model="form.email"
                    required
                    class="w-full peer h-12 text-slate-400 text-[1.2rem] rounded-3xl outline-none focus:border-2 focus:border-blue-700 border valid:border-2 valid:border-blue-700 border-slate-200 px-7 placeholder:opacity-0 transition-all duration-200 ease-out"
                    id="studentID"
                    placeholder="Email Address"
                  />
                  <label
                    for="exampleInput7"
                    class="absolute peer-valid:-top-3 peer-valid:bg-white peer-valid:text-blue-700 peer-valid:text-[1rem] peer-valid:px-1 left-6 top-2.5 pointer-events-none text-slate-400 text-[1.1rem] peer-focus:-top-3 peer-focus:bg-white peer-focus:px-1 peer-focus:text-[1rem] peer-focus:text-blue-700 duration-200 ease-out"
                  >
                    Email Address
                  </label>
                  <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                </div>
                <!------------------
                  End Student ID input
                -------------------->

                <!----------------
                  Password input
                ------------------>
                <div class="input-box relative mb-6">
                  <input
                    type="password"
                    spellcheck="false"
                    required
                    wire:model="form.password"
                    class="w-full peer h-12 text-slate-400 text-[1.2rem] rounded-3xl outline-none focus:border-2 focus:border-blue-700 valid:border-2 valid:border-blue-700 border border-slate-200 px-7 placeholder:opacity-0 transition-all duration-200 ease-out"
                    id="password"
                    placeholder="Password"
                  />
                  <label
                    for="exampleInput7"
                    class="absolute peer-valid:-top-3 peer-valid:bg-white peer-valid:text-blue-700 peer-valid:text-[1rem] peer-valid:px-1 left-6 top-2.5 pointer-events-none text-slate-400 text-[1.1rem] peer-focus:-top-3 peer-focus:bg-white peer-focus:px-1 peer-focus:text-[1rem] peer-focus:text-blue-700 duration-200 ease-out"
                  >
                    Password
                  </label>
                  <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                </div>
                <!----------------
                  End Password input
                ------------------>

                <!--------------------------------------------------------
                  Forgot your password | New Applicatn Create an Account
                --------------------------------------------------------->
                <div class="flex flex-col items-center gap-2">
                  <ul class="text-center">
                    <li class="text-blue-700 font-medium">
                      <a href="#">Forgot your password?</a>
                    </li>
                  </ul>
                  <ul class="flex items-center gap-2">
                    <li class="text-slate-400 font-medium">
                      <p>New Loan Applicant?</p>
                    </li>
                    <li class="btn-load text-blue-700 font-medium">
                      <a href="{{route('register')}}">Create an account</a>
                    </li>
                  </ul>
                </div>
                <!--------------------------------------------------------
                  End Forgot your password | New Applicatn Create an Account
                --------------------------------------------------------->

                <!---------------
                  Login Buttons
                ---------------->
                <div class="mx-auto w-full pt-8">
                  <!--------------
                    Login button
                  ---------------->
                  <button type="submit">
                    <span
                      id="btn-load"
                      class="btn-load btn btn-accent inline-block mx-auto w-full text-white transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2"
                    >
                      Login
                    </span>
                  </button>
                  <!--------------
                   End Login button
                  ---------------->
                </div>
                <!---------------
                 End Login Buttons
                ---------------->
              </form>
              <!------------ 
                End form
              ------------->
            </div>
          </div>
          <!------------ 
           End Login form
          ------------->
        </div>
      </div>
    <!-- Session Status -->
 
</div>
