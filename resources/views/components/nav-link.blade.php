@props(['active' => false])

<a
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>
    {{ $slot }}
</a>



 {{-- <!-- aria-current="page" is an accessibility attribute that tells assistive technologies (like screen readers) that “this is the page you’re currently on. --> --}}
  {{-- <!-- We have two thing for css one is props and second one is attributes -->  --}}
{{-- active is a boolean prop controlling the link’s “active” styling and aria-current attribute.
$attributes is a catch-all for any extra attributes (e.g., href, classes) passed into the component. --}}