<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Добро пожаловать в админ-панель!';
	return AdminSection::view($content, '');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Information');
}]);