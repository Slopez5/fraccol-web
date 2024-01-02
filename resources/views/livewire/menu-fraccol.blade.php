<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <x-menu-item title="Fraccionamientos" type="tree" icon="fas fa-building">
        @foreach ($developments as $index => $development)
            <x-menu-item title="{{ $development['name'] }}"
                route="{{ route('show.development', $development['id']) }}"></x-menu-item>
        @endforeach
    </x-menu-item>
    <x-menu-item title="Configuración" type="tree" icon="fas fa-gear">
        <x-menu-item title="Paises" route="{{ route('show.development', 1) }}"></x-menu-item>
        <x-menu-item title="Contratos" route="{{ route('show.development', 1) }}"></x-menu-item>
    </x-menu-item>
</ul>
