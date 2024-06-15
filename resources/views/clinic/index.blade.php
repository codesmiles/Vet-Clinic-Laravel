@extends('clinic/layouts/body',[
'title' => 'HOME',
'current_menu_item' => 'home'
])

@section('content')

<h1 class="homepage_heading">Welcome to Dogman Pet World</h1>
<p>Start typing a pet's name below and then click on the search button</p>

{{-- SEARCH FUNCTIONALITY IN ALL OUR PAGES --}}
   <div class="search__container">
        <form action="{{ route('search') }}" method="GET">
        @csrf

        <input type="text" class="search__input" name="search"  placeholder="Search" required />

        <button class="search__submit--button" type="submit">Search</button>

       </form>
   </div>


@endsection
