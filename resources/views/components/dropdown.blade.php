@props(['trigger'])
{{-- trigger --}}
<div x-data="{show: false}" click.away="show= false">
 <div click="show= ! show">
    {{$trigger}}
 </div>
   {{-- Dropdown links --}}
    <div x-show="show" class="py-2 absolute" >
      {{$slot}}
    </div>
</div>
