<div>
    <div class="position-relative">
        <!-- Logo on the Top Left -->
        <div class="logo position-absolute top-0 start-0 p-3" style="z-index: 10;">
            <img src="{{ asset('logo1x.png') }}" alt="Logo" style="height: 50px;">
        </div>

        <!-- Wall Icon with Dynamic Positioning -->
        <div class="position-absolute" style="top: {{ $mainFrames[$currentFrame]['wallButtonPosition']['top'] }}; left: {{ $mainFrames[$currentFrame]['wallButtonPosition']['left'] }}; z-index: 10;">
            <div class="icon-border">
                <i class="fas fa-paint-roller fa-2x" data-bs-toggle="modal" data-bs-target="#wallModal" style="cursor: pointer;"></i>
            </div>
        </div>

        <!-- Wood Icon with Dynamic Positioning -->
        <div class="position-absolute" style="top: {{ $mainFrames[$currentFrame]['woodButtonPosition']['top'] }}; left: {{ $mainFrames[$currentFrame]['woodButtonPosition']['left'] }}; z-index: 10;">
            <div class="icon-border">
                <i class="fas fa-tree fa-2x" data-bs-toggle="modal" data-bs-target="#woodModal" style="cursor: pointer;"></i>
            </div>
        </div>
    
        <!-- Gallery Button (unchanged) -->
        <div class="position-absolute top-0 end-0 p-3" style="z-index: 10;">
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#mainFrameModal">Gallery</button>
        </div>
    
        <div id="zoomable-container" class="zoomable-container position-relative">
            <!-- Wall and Wood Layers -->
            @if ($mainFrames[$currentFrame]['wallLayer'])
                <img src="{{ asset($mainFrames[$currentFrame]['wallLayer']) }}" class="position-absolute w-100 h-100" style="object-fit: cover; opacity: 0.7;">
            @endif
        
            @if ($mainFrames[$currentFrame]['woodLayer'])
                <img src="{{ asset($mainFrames[$currentFrame]['woodLayer']) }}" class="position-absolute w-100 h-100" style="object-fit: cover; opacity: 0.7;">
            @endif
    
            <!-- Main Image -->
            <img src="{{ asset($mainFrames[$currentFrame]['mainImage']) }}" class="img-fluid position-relative" alt="Main Image">
        </div>

        <!-- Zoom Slider -->
        <div class="position-fixed start-0 p-3" style="bottom: 50px; left: 0px; z-index: 10;">
            <input type="range" class="form-range" id="zoomRange" min="1" max="3" step="0.1" value="1" style="width: 150px;">
        </div>

        <!-- Download Button (bottom-left corner) -->
        <div class="position-fixed bottom-0 start-0 p-3" style="z-index: 10;">
            <button class="btn btn-success" wire:click="downloadImage">
                Download Image
            </button>
        </div>
    </div>
    
    

    <!-- Modal for Wall Layer Selection -->
    <div wire:ignore.self class="modal fade" id="wallModal" tabindex="-1" aria-labelledby="wallModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Wall Layer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @foreach ($mainFrames[$currentFrame]['availableWalls'] as $index => $wall)
                            <div class="col-6">
                                <img src="{{ asset($mainFrames[$currentFrame]['availableWallThumbs'][$index]) }}" class="img-thumbnail" wire:click="setSelectedWall('{{ $wall }}')" data-bs-dismiss="modal">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Wood Layer Selection -->
    <div wire:ignore.self class="modal fade" id="woodModal" tabindex="-1" aria-labelledby="woodModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Wood Layer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @foreach ($mainFrames[$currentFrame]['availableWoods'] as $index => $wood)
                            <div class="col-6">
                                <img src="{{ asset($mainFrames[$currentFrame]['availableWoodThumbs'][$index]) }}" class="img-thumbnail" wire:click="setSelectedWood('{{ $wood }}')" data-bs-dismiss="modal">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Mainframe Selection -->
    <div wire:ignore.self class="modal fade" id="mainFrameModal" tabindex="-1" aria-labelledby="mainFrameModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Mainframe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @foreach ($mainFrames as $index => $frame)
                            <div class="col-6">
                                <img src="{{ asset($frame['mainImage']) }}" class="img-thumbnail" wire:click="selectMainFrame({{ $index }})" data-bs-dismiss="modal">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>