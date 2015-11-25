<?php

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');
Admin::menu()->url('abouts/create')->label('About')->icon('fa-dashboard');
Admin::menu('App\Sitemenu')->label('Menu')->icon('fa-dashboard');
