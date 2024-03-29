<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | WheelFortune</title>
  </head>
  <body style="text-align: center">
    <canvas id="unity-canvas" width=960 height=600 style="width: 960px; height: 600px; background: #231F20"></canvas>
    <script src="Build/wheelExample3.loader.js"></script>
    <script>
      createUnityInstance(document.querySelector("#unity-canvas"), {
        dataUrl: "Build/wheelExample3.data",
        frameworkUrl: "Build/wheelExample3.framework.js",
        codeUrl: "Build/wheelExample3.wasm",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "DefaultCompany",
        productName: "WheelFortune",
        productVersion: "1.0",
        // matchWebGLToCanvasSize: false, // Uncomment this to separately control WebGL canvas render size and DOM element size.
        // devicePixelRatio: 1, // Uncomment this to override low DPI rendering on high DPI displays.
      });
    </script>
  </body>
</html>
