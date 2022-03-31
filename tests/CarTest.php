<?php

test('constructor works', function() {
    expect((new Car())) -> toBeInstanceOf(Car::class);
});

test('constructor fails', function() {

});