@props(['active' => '', 'text' => '', 'hide' => false, 'icon' => false, 'permission' => false])

@if ($permission)
    @if ($logged_in_user->can($permission))
        @if (!$hide)
            <a {{ $attributes->merge(['href' => '#', 'class' => $active]) }}>@if ($icon)<i class="{{ $icon }}"></i> @endif<p class="d-inline">{{ strlen($text) ? $text : $slot }}</p></a>
        @endif
    @endif
@else
    @if (!$hide)
        <a {{ $attributes->merge(['href' => '#', 'class' => $active]) }}>@if ($icon)<i class="{{ $icon }}"></i> @endif<p class="d-inline">{{ strlen($text) ? $text : $slot }}</p></a>
    @endif
@endif
