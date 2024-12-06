<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animation circulaire avec AnimXYZ</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core@0.5.0/dist/animxyz.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@animxyz/core@0.5.0/dist/animxyz.min.js"></script>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
      margin: 0;
      overflow: hidden;
    }
    .container {
      position: relative;
      width: 300px;
      height: 300px;
    }
    .circle {
      position: absolute;
      width: 100%;
      height: 100%;
      animation: rotateCircle 10s linear infinite;
    }
    .circle img {
      position: absolute;
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }
    .circle img:nth-child(1) { /* Image 1 */
      top: 0;
      left: 50%;
      transform: translate(-50%, 0);
    }
    .circle img:nth-child(2) { /* Image 2 */
      top: 50%;
      right: 0;
      transform: translate(0, -50%);
    }
    .circle img:nth-child(3) { /* Image 3 */
      bottom: 0;
      left: 50%;
      transform: translate(-50%, 0);
    }
    .circle img:nth-child(4) { /* Image 4 */
      top: 50%;
      left: 0;
      transform: translate(0, -50%);
    }
    .circle img:nth-child(5) { /* Image 5 */
      top: 50%;
      left: 0;
      transform: translate(0, -50%);
    }
    @keyframes rotateCircle {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

    #rotate-image {
        width: auto; /* Taille de l'image */
        height: auto;

    }

    /* Animation infinie en CSS */
    @keyframes rotation {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    #rotate-image {
        animation: rotation 10s linear infinite;
    }
  </style>
</head>
<body>
  <div class="container xyz-infinite xyz-duration-10">
    <div class="circle">
      <img src="https://via.placeholder.com/50" alt="Image 1" id="rotate-image">
      <img src="https://via.placeholder.com/50" alt="Image 2" id="rotate-image">
      <img src="https://via.placeholder.com/50" alt="Image 3" id="rotate-image">
      <img src="https://via.placeholder.com/50" alt="Image 4" id="rotate-image">
      <img src="https://via.placeholder.com/50" alt="Image 5" id="rotate-image">
    </div>
  </div>


  <div>
    <img src="https://via.placeholder.com/150" id="rotate-image" alt="Image tournante">
  </div>
  
</body>
</html>
