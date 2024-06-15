<div class="top-container">
    <nav class="top-menu">
        <a href="{{route('home')}}" @if ($current == 'home') class="current" @endif>HOME</a>
        <a href="{{route('about_us')}}"@if ($current == 'about_us') class="current" @endif>ABOUT</a>

        {{--
        TODO Landing page,
        TODO About us page
        TODO contact us page
        TODO user management system
        TODO Employee Management system
        TODO Pet Management system
        TODO online apointent system
        TODO online emergency system
        TODO Doctor sceduling and time off systen
        --}}
        <a href="{{route('client-create')}}"@if ($current == 'create-client') class="current" @endif>ADMIN</a>

    </nav>

</div>
