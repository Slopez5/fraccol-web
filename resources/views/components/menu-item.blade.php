<li {{ $attributes->merge(['class' => 'nav-item']) }}>
    <a href="{{$route}}" class="nav-link">
        <i class="nav-icon {{$icon}}"></i>
        <p>
            {{$title}}
            @if ($isTree)
                <i class="fas fa-angle-left right"></i>
            @endif
            @if ($isBadge)
                <span class="badge badge-info right">{{$badge}}</span>
            @endif
        </p>
    </a>
    @if ($isTree)
        <ul class="nav nav-treeview">
            {{$slot}}
        </ul>
    @endif
</li>
