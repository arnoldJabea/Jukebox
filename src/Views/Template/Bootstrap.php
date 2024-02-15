<?php
declare(strict_types=1);

namespace App\Views\Template;

use App\Configs\Configs;

class Bootstrap
{
    public function __construct(
        public readonly string $title,
        public readonly string $description,
    ) { }

    public function start(): string
    {
        return '<!doctype html>
        <html lang="'. Configs::LANG .'">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <title>'. Configs::TITLE .' - '. $this->title .'</title>
            <meta name="description" content="'. $this->description .'">
        
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
          </head>
          <body>';
    }

    public function end()
	{
		return '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                </body>
            </html>';
	}
}