@props(['name'])

@error($name)
<div class="text-red-500 italic text-sm/6">{{ $message }}</div>  
@enderror