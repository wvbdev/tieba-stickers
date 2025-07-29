<?php
use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
        ->configure(function (Configurator $config){
            $config->BBCodes->addCustom(
                '[tieba={SIMPLETEXT1}]',
                '<img class="tieba_stickers" src="/assets/extensions/wvbdev-tieba-stickers/{SIMPLETEXT1}.png" width="30px"/>',
            );
        });
