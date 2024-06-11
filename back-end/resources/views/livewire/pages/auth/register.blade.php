<?php

use App\Models\User;
use App\Models\Student;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $student_id = '';
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'student_id' => ['required', 'string', 'max:255','unique:'.User::class],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $student = Student::create([
            'firstname' => $this->firstname,
            'lastname'=> $this->lastname,
            'student_id' => $this->student_id
        ]);
        $validated['student_id'] = $student->id;
        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <div class="flex flex-col md:flex-row justify-center items-center">
        <div class="bg-white rounded-3xl">
            <div class="py-6 px-8">
                <h1  class="text-[1.5rem] md:text-[2rem] font-medium text-slate-500 pb-6 text-center md:text-left">
                    Registeration
                </h1>
                <form wire:submit="register">
                    <div class="flex flex-col md:flex-row justify-between items-start md:gap-10">
                        <div class="column1">
                            <div class="input-box relative mb-6">
                                <x-text-input wire:model="student_id" id="student_id" class="block mt-1" type="text" name="student_id" required autofocus autocomplete="student_id" />
                                <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
                                <x-input-label for="student_id" :value="__('Student Id')" />
                            </div>

                            <div class="input-box relative mb-6">
                                <x-text-input wire:model="firstname" id="firstname" class="block mt-1 w-full" type="text" name="firstname" required/>
                                <x-input-label for="firstname" :value="__('First Name')" />
                                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                            </div>

                            <div class="input-box relative mb-6">
                                <x-text-input wire:model="lastname" id="lastname" class="block mt-1 w-full" type="text" name="lastname" required/>
                                <x-input-label for="lastname" :value="__('Last Name')" />
                                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                            </div>

                            <div class="input-box relative mb-6">
                                <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="text" name="email" required/>
                                <x-input-label for="email" :value="__('Email Address')" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        
                            <div class="input-box relative mb-6">
                                <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                                <x-input-label for="password" :value="__('Password')" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="input-box relative mb-6">
                                <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation"
                                required   />
                                <x-input-label for="password_confirmation" :value="__('Password_confirmation')" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                    </div>

        
                    <div  class="flex flex-col md:flex-row justify-end items-center gap-5" >
                                    
                        <button
                        type="submit"
                        class="btn-load btn btn-accent text-white w-full md:w-[20%] transition-all duration-500 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2"
                        >
                        Register
                        </button>
                        
                        <ul class="text-center">
                        <li class="text-blue-700 font-medium">
                            <a href="student_login.html">Already have an account?</a>
                        </li>
                        </ul> 
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>