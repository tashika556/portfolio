<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Typewriter Effect</title>
  <style>
    body {
      margin: 0;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #222;
      color: #fff;
      font-size: 2em;
    }
  </style>
</head>
<body>
  <div id="typewriter"><h2>I am a girl</h2></div>

  <script>
    const originalText = document.getElementById("typewriter").innerText;
    let index = 0;

    function typeWriter() {
      if (index < originalText.length) {
        document.getElementById("typewriter").innerHTML = originalText.substring(0, index + 1);
        index++;
        setTimeout(typeWriter, 100); // Adjust the delay (in milliseconds) between each character
      }
    }

    // Call the typewriter function on page load or whenever you want to start it
    typeWriter();
  </script>
</body>
</html>
