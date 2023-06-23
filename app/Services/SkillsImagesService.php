<?php

namespace App\Services;

class SkillsImagesService
{
    private const IMAGES_DIR = '/Users/remi/Documents/dev/remipouly.fr/resources/images/';

    /**
     * @return array
     */
    public function getSkillsImages(): array
    {

        $directory = scandir(self::IMAGES_DIR);
        $images = [];

        foreach ($directory as $file) {
            if (!is_dir($file) && str_starts_with($file, 'skills')) {
                $sturcturedFile = explode('-', $file);
                $level = $sturcturedFile[1];
                $order = $sturcturedFile[2];
                $filename = $sturcturedFile[3];

                $images[$level][] = [
                    'filename' => $file,
                    'techno' => strtoupper(str_replace('.png', '', $filename)),
                    'order' => $order
                ];
            }
        }

        foreach ($images as $k => $v) {
            usort($images[$k], function ($x, $y) {
                return $x['order'] >= $y['order'];
            });
        }

        return $images;
    }

}
