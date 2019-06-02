<?php
use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
        ->configure(function (Configurator $config){
            $config->BBCodes->addCustom(
                '[huaji]',
                '<img src="./vendor/jc-proplus/tieba-stickers/assets/0x.png"/>',
            );

            $config->BBCodes->addCustom(
                '[yinxian]',
                '<img src="./vendor/jc-proplus/tieba-stickers/assets/0p.png"/>',
            );

            $config->BBCodes->addCustom(
                '[pen]',
                '<img src="./vendor/jc-proplus/tieba-stickers/assets/1g.png">',
            );

            $config->BBCodes->addCustom(
                '[hehe]',
                '<img src="./vendor/jc-proplus/tieba-stickers/assets/0a.png">',
            );

            $config->BBCodes->addCustom(
                '[cry]',
                '<img src="./vendor/jc-proplus/tieba-stickers/assets/0i.png"/>',
            );

            $config->BBCodes->addCustom(
                '[angry]',
                '<img src="./vendor/jc-proplus/tieba-stickers/assets/0f.png"/>',
            );

            $config->BBCodes->addCustom(
                '[smirking]',
                '<img src="./vendor/jc-proplus/tieba-stickers/assets/1i.png"/>',
            );

        });