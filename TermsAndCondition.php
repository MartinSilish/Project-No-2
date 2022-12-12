<html>
  <head>
    <style>

<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="styles.css" />


html,
body {
  height: 100%;
}

html {
  font-size: 18px;
  line-height: 1.4;
}

body {
  font-family: "Segoe UI";
  font-weight: 600;
  background-image: linear-gradient(#e66465, #9198e5);
  color: black;
  overflow: hidden;
}

a {
  color: inherit;
  text-decoration: none;
}

.container {
  display: grid;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.modal-window {
  position: fixed;
  background-color: rgba(255, 255, 255, 0.25);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  display: flex;
  align-items: center;
  justify-content: center;
  visibility: hidden;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s;
}

.modal-window:target {
  visibility: visible;
  opacity: 1;
  pointer-events: auto;
}

.modal-window > div {
  border-radius: 1rem;
}

.modal-window div:not(:last-of-type) {
  margin-bottom: 15px;
}

.btn {
  background-color: white;
  padding: 1em 1.5em;
  border-radius: 0.5rem;
  text-decoration: none;
}

button {
  font: inherit;
}

*::-webkit-scrollbar {
	background-color: transparent;
	width: 12px;
}

*::-webkit-scrollbar-thumb {
	border-radius: 99px;
	background-color: #ddd;
	border: 4px solid #fff;
}

.modal-container {
  max-height: 90vh;
  max-width: 500px;
  margin-left: auto;
  margin-right: auto;
  background-color: #fff;
  border-radius: 16px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.25);
}

@media (max-width: 600px) {
  .modal-container {
    width: 90%;
  }
}

.modal-container-header {
  padding: 16px 32px;
  border-bottom: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.modal-container-title {
  display: flex;
  align-items: center;
  gap: 8px;
  line-height: 1;
  font-weight: 700;
  font-size: 1.125;
}

.modal-container-body {
  padding: 24px 32px 51px;
  overflow-y: auto;
}

.modal-container-footer {
  padding: 20px 32px;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  border-top: 1px solid #ddd;
  gap: 12px;
  position: relative;
}

.modal-container-footer:after {
  content: "";
  display: block;
  position: absolute;
  top: -51px;
  left: 24px;
  right: 24px;
  height: 50px;
  flex-shrink: 0;
  background-image: linear-gradient(to top, rgba(255, 255, 255, 0.75), transparent);
  pointer-events: none;
}

.button {
  padding: 12px 20px;
  border-radius: 8px;
  background-color: transparent;
  border: 0;
  font-weight: 600;
  cursor: pointer;
  transition: 0.15s ease;
}

.button.is-ghost:hover, .button.is-ghost:focus {
  background-color: #dfdad7;
}

.button.is-primary {
  background-color: #e66465;
  color: #fff;
}

.button.is-primary:hover, .button.is-primary:focus {
  background-color: #db4848;
}

.icon-button {
  padding: 0;
  border: 0;
  background-color: transparent;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  line-height: 1;
  cursor: pointer;
  border-radius: 8px;
  transition: 0.15s ease;
}
.icon-button svg {
  width: 24px;
  height: 24px;
}
.icon-button:hover, .icon-button:focus {
  background-color: #dfdad7;
}

</style>
</head>
  <body>
    <div class="container">
      <div class="interior">
        <a class="btn" href="#open-modal">Terms and Conditions</a>
      </div>
    </div>
    <div id="open-modal" class="modal-window">
      <div>
        <article class="modal-container">
          <header class="modal-container-header">
            <h1 class="modal-container-title">
              Terms and Conditions
            </h1>
            <button class="icon-button" onclick="location.href='#';">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path fill="currentColor" d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
              </svg>
            </button>
          </header>
          <section class="modal-container-body">
            <h2>Quarum ambarum rerum cum medicinam pollicetur, luxuriae licentiam pollicetur.</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Unum nescio, quo modo possit, si luxuriosus sit, finitas cupiditates habere. Hoc est non modo cor  </p>

            <h3>Ut proverbia non nulla veriora sint quam vestra dogmata.</h3>

            <p>Quasi vero, inquit, perpetua oratio rhetorum solum, non etiam philosophorum sit. Tria genera cupiditatum, naturales et necessariae, naturales et non necessariae, nec naturales nec necessariae. Sin aliud quid voles, postea. Consequatur summas voluptates non modo parvo, sed per me nihilo, si potest; </p>

            <p>Cur igitur easdem res, inquam, Peripateticis dicentibus verbum nullum est, quod non intellegatur? Primum in nostrane potestate est, quid meminerimus? Eam tum adesse, cum dolor omnis absit; Quodsi ipsam honestatem undique pertectam atque absolutam. Aliam vero vim voluptatis esse,  </p>

            <h2>An hoc usque quaque, aliter in vita?</h2>
            <ol>
              <li>Etenim nec iustitia nec amicitia esse omnino poterunt, nisi ipsae per se expetuntur.</li>
              <li>Pisone in eo gymnasio, quod Ptolomaeum vocatur, unaque nobiscum Q.</li>
              <li>Certe nihil nisi quod possit ipsum propter se iure laudari.</li>
              <li>Itaque e contrario moderati aequabilesque habitus, affectiones ususque corporis apti esse ad naturam videntur.</li>
            </ol>

            <p>Utilitatis causa amicitia est quaesita. Qui autem de summo bono dissentit de tota philosophiae ratione dissentit. Quamquam non negatis nos intellegere quid sit voluptas, sed quid ille dicat. Sed emolumenta communia esse dicuntur, recte autem facta et peccata non habentur communia.  </p>

            <h3>Claudii libidini, qui tum erat summo ne imperio, dederetur.</h3>

            <p>Eorum enim est haec querela, qui sibi cari sunt seseque diligunt. Cum audissem Antiochum, Brute, ut solebam, cum M. An obliviscimur, quantopere in audiendo in legendoque moveamur, cum pie, cum amice, cum magno animo aliquid factum cognoscimus? Qui igitur convenit ab alia voluptate dicere naturam proficisci, in alia summum bonum ponere? Magni enim aestimabat pecuniam non modo non contra leges, sed etiam legibus partam.  </p>

            <h2>Sed nimis multa.</h2>

            <p>Nec vero alia sunt quaerenda contra Carneadeam illam sententiam. Negat enim summo bono afferre incrementum diem. Causa autem fuit huc veniendi ut quosdam hinc libros promerem.  </p>

          </section>
          <footer class="modal-container-footer">
            <button class="button is-ghost">Decline</button>
            <button class="button is-primary">Accept</button>
          </footer>
        </article>
    </div>
    </div>
  </body>
</html>