<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Laravel\Facades\Image;

class ImageSelector extends Component
{
    public $mainFrames = [
        [
            'mainImage' => 'assets/img/bg/1bg.png',
            'wallLayer' => '',
            'woodLayer' => '',
            'availableWalls' => [
                'assets/img/wall/1wall1.png',
                'assets/img/wall/1wall2.png',
                'assets/img/wall/1wall3.png',
            ],
            'availableWallThumbs' => [
                'assets/img/wall/thumb/1wall-thumb1.png',
                'assets/img/wall/thumb/1wall-thumb2.png',
                'assets/img/wall/thumb/1wall-thumb3.png',
            ],
            'availableWoods' => [
                'assets/img/wood/1wood1.png',
                // 'assets/img/wood/1wood2.png',
            ],
            'availableWoodThumbs' => [
                'assets/img/wood/thumb/1wood-thumb1.png',
                // 'assets/img/wood/thumb/1wood-thumb2.png',
            ],
            'wallButtonPosition' => ['top' => '14%', 'left' => '20%'], // Custom wall button position
            'woodButtonPosition' => ['top' => '70%', 'left' => '35%'], // Custom wood button position
        ],
    ];

    public $currentFrame = 0;
    public $selectedWall = '';
    public $selectedWood = '';

    public function mount()
    {
        // Set default selections for wall and wood layers
        $this->selectedWall = $this->mainFrames[0]['availableWalls'][0] ?? '';
        $this->selectedWood = $this->mainFrames[0]['availableWoods'][0] ?? '';

        // Update the layers in the frame with default selections
        $this->updateWall();
        $this->updateWood();
    }

    public function selectMainFrame($index)
    {
        $this->currentFrame = $index;
    }

    public function updateWall()
    {
        $this->mainFrames[$this->currentFrame]['wallLayer'] = $this->selectedWall;
    }

    public function updateWood()
    {
        $this->mainFrames[$this->currentFrame]['woodLayer'] = $this->selectedWood;
    }

    public function setSelectedWall($image)
    {
        $this->selectedWall = $image;
        $this->updateWall();
    }

    public function setSelectedWood($image)
    {
        $this->selectedWood = $image;
        $this->updateWood();
    }

    public function downloadImage()
    {
        // Use 'gd' or 'imagick' depending on what you have installed
        $manager = new ImageManager(['driver' => 'gd']);  // Correct the parameter

        // Load the base/main image
        $mainImagePath = public_path($this->mainFrames[$this->currentFrame]['mainImage']);
        $mainImage = $manager->make($mainImagePath);

        // Apply wall layer if selected
        if (!empty($this->mainFrames[$this->currentFrame]['wallLayer'])) {
            $wallLayerPath = public_path($this->mainFrames[$this->currentFrame]['wallLayer']);
            $wallLayer = $manager->make($wallLayerPath)->opacity(70); // Adjust opacity if needed
            $mainImage->insert($wallLayer, 'top-left', 0, 0); // Combine layers
        }

        // Apply wood layer if selected
        if (!empty($this->mainFrames[$this->currentFrame]['woodLayer'])) {
            $woodLayerPath = public_path($this->mainFrames[$this->currentFrame]['woodLayer']);
            $woodLayer = $manager->make($woodLayerPath)->opacity(70);
            $mainImage->insert($woodLayer, 'top-left', 0, 0);
        }

        // Save the resulting image to a temporary location
        $filePath = public_path('combined-image.png');
        $mainImage->save($filePath);

        // Return a download response
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
    
    public function render()
    {
        return view('livewire.image-selector');
    }
}
