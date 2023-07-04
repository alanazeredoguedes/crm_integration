<?php


use Alanazeredoguedes\ComposerTest\Anapro;


test('example', function () {

    $anapro = new Anapro();

    expect($anapro->run())->toBeTrue();
});

