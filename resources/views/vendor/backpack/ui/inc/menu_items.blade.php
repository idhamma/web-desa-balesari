{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="News" icon="la la-question" :link="backpack_url('news')" />
<x-backpack::menu-item title="Informasis" icon="la la-question" :link="backpack_url('informasi')" />
<x-backpack::menu-item title="Agendas" icon="la la-question" :link="backpack_url('agenda')" />