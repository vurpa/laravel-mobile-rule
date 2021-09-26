<?php

use Vurpa\MobileRule\Rules\Mobile;

it('validates sv-SE', function ($input, $expected) {
    expect((new Mobile(locale: 'sv-SE'))->passes('mobile', $input))->toBe($expected);
})->with([
    ['0700000000', true],
    ['0730000000', true],
    ['0760000000', true],
    ['0790000000', true],
    ['0720000000', true],
    ['0740000000', false],
    ['0710000000', false],
    ['0780000000', false],
]);
