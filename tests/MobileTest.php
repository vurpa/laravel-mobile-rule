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

it('validates with multiple locales', function () {
    expect((new Mobile(locale: ['sv-SE', 'nb-NO']))->passes('mobile', '0700000000'))->toBeTrue();
    expect((new Mobile(locale: ['sv-SE', 'nb-NO']))->passes('mobile', '40000000'))->toBeTrue();
});

it('throws exception when missing pattern for locale', function () {
    expect(fn () => (new Mobile(locale: 'foo'))->passes('mobile', '0700000000'))->toThrow(RuntimeException::class, 'Missing pattern for "foo" locale');
    expect(fn () => (new Mobile(locale: ['nb-NO', 'bar']))->passes('mobile', '0700000000'))->toThrow(RuntimeException::class, 'Missing pattern for "bar" locale');
});
