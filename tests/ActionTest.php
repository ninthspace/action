<?php

use Ninthspace\Action\Exceptions\AuthorisationException;
use Ninthspace\Action\Tests\Support\ActionClass;
use Ninthspace\Action\Tests\Support\ActionClassWithAuthorisationParameters;
use Ninthspace\Action\Tests\Support\ActionClassWithSuccessfulAuthorisation;
use Ninthspace\Action\Tests\Support\ActionClassWithUnsuccessfulAuthorisation;
use Ninthspace\Action\Tests\Support\EmptyActionClass;

test('can instantiate ActionClass', function () {
    $instance = new EmptyActionClass();

    assertNotNull($instance);
});

test('can execute action', function () {
    $result = (new EmptyActionClass())->run();

    assertNull($result);
});

test('can execute an action with arguments', function () {
    $result = (new ActionClass())->run();

    assertEquals(123, $result);
});

test('can authorise an action', function () {
    $result = (new ActionClassWithSuccessfulAuthorisation())->run();

    assertEquals(123, $result);
});

test('can authorise an action with exception', function () {
    $result = (new ActionClassWithUnsuccessfulAuthorisation())->run();

    assertEquals(123, $result);
})->throws(AuthorisationException::class);

test('can authorise an action with parameters', function () {
    $result = (new ActionClassWithAuthorisationParameters())->run(true);

    assertEquals(123, $result);
});

test('can authorise an action with parameters exception', function () {
    $result = (new ActionClassWithAuthorisationParameters())->run(false);

    assertEquals(123, $result);
})->throws(AuthorisationException::class);
