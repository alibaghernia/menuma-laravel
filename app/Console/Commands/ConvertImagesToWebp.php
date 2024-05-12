<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class ConvertImagesToWebp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:images-to-webp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $basePath = storage_path() . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'public';

        $files = \File::files($basePath);
        foreach ($files as $file) {
            $imageType = exif_imagetype($file->getPathname());
            if ($imageType === false) {
                continue;
            }
            if ($imageType === IMAGETYPE_WEBP) {
                dump($file->getPathname());
                continue;
            }
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file->getPathname());
            $image->toWebp()->save($basePath . '\\' . $file->getBasename());
        }

    }
}
