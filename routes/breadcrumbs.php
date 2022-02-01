<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('home', route('home'));
});

// Home > MensCollection
Breadcrumbs::for('MensCollection', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('MensCollection', route('MensCollection'));
});

Breadcrumbs::for('HumansCollection', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('HumansCollection', route('HumansCollection'));
});

// Home > Blog > mensDetails
Breadcrumbs::for('details', function (BreadcrumbTrail $trail, $id, $direct) {
    $trail->parent($direct);
    $trail->push('details', route('details', $id));
});


// Home > cartOrder
Breadcrumbs::for('cartOrder', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('cartOrder', route('cartOrder'));
});

// Home > Profile
Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('profile', route('profile'));
});

// Home > shop
Breadcrumbs::for('shop', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('shop', route('shop'));
});