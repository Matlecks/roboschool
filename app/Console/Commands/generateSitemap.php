<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;
use App\Models\Service;

class generateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $site_url = config('app.url');
        $base = '<?xml version="1.0" encoding="UTF-8"?>
            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
            </urlset>';
        $xmlbase = new \SimpleXMLElement($base);
        $row = $xmlbase->addChild("url");
        $row->addChild("loc", $site_url);
        $row->addChild("lastmod", Carbon::now()->toW3cString());
        $row->addChild("changefreq", "monthly");
        $row->addChild("priority", "1");
        File::put(public_path("sitemap.xml"), $xmlbase->asXML());
    }

}
