<?php

test('models')
    ->expect('Modules\Shared')
    ->toOnlyUse('Modules\Account');

test('globals')
    ->expect(['dd', 'dump'])
    ->not->toBeUsed();

test('facades')
    ->expect('Illuminate\Support\Facades')
    ->not->toBeUsed();
