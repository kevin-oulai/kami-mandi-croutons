<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animation circulaire avec AnimXYZ</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core@0.5.0/dist/animxyz.min.css">
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
    @keyframes rotateCircle {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
  </style>
</head>
<body>
  <div class="container xyz-infinite xyz-duration-10">
    <div class="circle">
      <img src="https://via.placeholder.com/50" alt="Image 1" class="xyz-rotate xyz-infinite xyz-duration-15">
      <img src="https://via.placeholder.com/50" alt="Image 2" class="xyz-rotate xyz-infinite xyz-duration-15">
      <img src="https://via.placeholder.com/50" alt="Image 3" class="xyz-rotate xyz-infinite xyz-duration-15">
      <img src="https://via.placeholder.com/50" alt="Image 4" class="xyz-rotate xyz-infinite xyz-duration-15">
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@animxyz/core@0.5.0/dist/animxyz.min.js"></script>
</body>
</html>
