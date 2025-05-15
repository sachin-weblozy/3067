<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
        <title>Phoenix Surface</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            .icon-border {
                display: inline-block;
                padding: 7px;
                border: 2px solid #333; /* Set the color of the border */
                border-radius: 10px; /* Rounded corners */
                background-color: #f8f9fa; /* Optional: Background color */
            }
            .img-thumbnail {
                cursor: pointer;
                border: 2px solid #ddd;
                border-radius: 8px;
                transition: transform 0.2s;
            }

            .img-thumbnail:hover {
                transform: scale(1.05);
            }
            .zoomable-container {
                transition: transform 0.3s ease; /* Smooth transition */
                position: relative; /* Ensure proper positioning for layers */
            }
            .zoomable-container img {
                position: absolute; /* Keep layers aligned */
                top: 0;
                left: 0;
            }
        </style>
        @livewireStyles
    </head>
    <body class="antialiased">
        @livewire('image-selector')

        @livewireScripts 
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const zoomRange = document.getElementById('zoomRange');
                const zoomableContainer = document.getElementById('zoomable-container'); // Target the container with images
            
                zoomRange.addEventListener('input', function () {
                    const scaleValue = this.value;
                    zoomableContainer.style.transform = `scale(${scaleValue})`;
                    zoomableContainer.style.transformOrigin = 'center'; // Keep zoom centered
                });
            });
            
                </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
