<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;

class ReduceImagesSizes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reduce-images-sizes';

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

            if (exif_imagetype($file->getPathname()) === false) {
                continue;
            }

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file->getPathname());
            $image->scaleDown(900);
            $image
                ->save($basePath . DIRECTORY_SEPARATOR . $file->getBasename());
        }

    }
}
