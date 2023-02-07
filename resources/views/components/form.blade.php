<form {{ $attributes->merge(['class' => $class]) }} action="{{ $action }}" method="{{ $method }}">
  @csrf
  {{ $slot }}
</form>