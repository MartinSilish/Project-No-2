<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
  
<div class="about-section">
  <h1>About Us</h1>
  <p>This Banking sector is organized and found by Martin and His brother John.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Martin.png" alt="Martin" style="width: 270px%">
      <div class="container">
        <h2>Martin</h2>
        <p class="title">CEO & Founder</p>
        <p>founder of JMS Banking Ltd. Its a dream project for me to establish something in a banking sector.</p>
        <p>martin@abc.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Silish.png" alt="Silish" style="width: 270px%">
      <div class="container">
        <h2>Silish</h2>
        <p class="title">Financian</p>
        <p>He is the guy who is a great brain about finance. He completed a CA.</p>
        <p>silish@abc.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="John.png" alt="John" style="width: 270px%">
      <div class="container">
        <h2>John</h2>
        <p class="title">co Founder</p>
        <p>He is our another founder brother of Martin. He does a MBA in HR and finance.</p>
        <p>john@abc.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</html>            
</body>
