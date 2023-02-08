<x-auth-layout title="Login">
  
  
      <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
          Sign in to your account
      </h1>

      <x-form class="">
        <div class="grid gap-4">
          <x-slot name="action">{{ route('login') }}</x-slot>
          <x-slot name="method">POST</x-slot>
  
          <input type="hidden" name="remember" value="true">
          
          <x-partials.input name="input">
            <x-slot name="label">Username</x-slot>
            <x-slot name="name">username</x-slot>
            <x-slot name="type">username</x-slot>
            <x-slot name="placeholder">Your username</x-slot>
            <x-slot name="old">{{ old('username') }}</x-slot>
          </x-partials.input>
  
          <x-partials.input name="input">
            <x-slot name="label">Password</x-slot>
            <x-slot name="name">password</x-slot>
              <x-slot name="type">password</x-slot>
              <x-slot name="placeholder">Password</x-slot>
              <x-slot name="old">{{ old('password') }}</x-slot>
          </x-partials.input>
  
  
          <x-partials.button name="submit">
            Log In
          </x-partials.button>
  
          <p class="text-sm font-light text-gray-500">
            Don’t have an account yet? <a href="/register" class="font-medium text-primary-600 hover:underline">Sign up</a>
          </p>
        </div>
      </x-form>
    


</x-auth-layout>