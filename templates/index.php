<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fighter Combos</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script async defer src="scripts/index.js"></script>
  <link rel="stylesheet" href="style.css">


</head>

<body>
  <h1>Ken Combos</h1>

  <img src="assets/ken-banner.jpg" alt="fighter picture">
  <aside class="notation-buttons">
    <div class="arrow-buttons">
      <h2>Directional Inputs</h2>
      <button class="input" id="up-arrow" value="&#11014">&#11014</button>
      <button class="input" id="up-right-arrow" value="&#11016">&#11016</button>
      <button class="input" id="right-arrow" value="&#11157">&#11157</button>
      <button class="input" id="down-right-arrow" value="&#11018">&#11018</button>
      <button class="input" id="down-arrow" value="&#11015">&#11015</button>
      <button class="input" id="down-left-arrow" value="&#11019">&#11019</button>
      <button class="input" id="left-arrow" value="&#11013">&#11013</button>
      <button class="input" id="up-left-arrow" value="&#11017">&#11017</button>
    </div>
    <div class="punch-buttons">
      <h2>Punch Inputs</h2>
      <button class="input" id="light punch" value="L&#128074">L&#128074</button>
      <button class="input" id="medium punch" value="M&#128074">M&#128074</button>
      <button class="input" id="heavy punch" value="H&#128074">H&#128074</button>
    </div>
    <div class="kick-buttons">
      <h2>Kick Inputs</h2>
      <button class="input" id="light kick" value="L&#129406">L&#129406</button>
      <button class="input" id="medium kick" value="M&#129406">M&#129406</button>
      <button class="input" id="heavy kick" value="H&#129406">H&#129406</button>
    </div>
  </aside>
  <main>
    <section class="notation-section">
      <h2>Your Combo Notation</h2>
      <div class="notation">
        <ul class="notation-list">

        </ul>
      </div>
    </section>
  </main>
</body>

</html>