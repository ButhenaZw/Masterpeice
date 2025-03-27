<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap');
    @font-face {
    font-family: 'Ford Script';
    src: url('Fordscript.woff2') format('woff2'),
        url('Fordscript.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

.preloader-text {
    font-family: 'Ford Script', sans-serif;
    font-size: 7rem;
  background: url('{{ asset('assets/image/bmw.jpg') }}') no-repeat center;
  background-size: cover;
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;
  position: absolute;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}
</style>
<div class="preloader">
    <div class="lines">
        <div class="line top-line"></div>
        <div class="line bottom-line"></div>
    </div>
    <h1 class="preloader-text">DriveX</h1>
</div>