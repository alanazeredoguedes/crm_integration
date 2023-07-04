<?php


use Alanazeredoguedes\CrmIntegration\Anapro;


test('example', function () {

    $anapro = new Anapro();

    expect($anapro->run())->toBeTrue();
});

