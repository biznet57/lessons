<style>
  body {
    background-color: #FFFFFF;
  }
  
  .green {
    background-color: hsl(120, 50%, 50%); 
  }
  
  .cyan {
    background-color: hsl(180, 50%, 50%);
  }
  
  .blue {
    background-color: hsl(240, 50%, 50%);
  }
  .strip { 
    border-radius: 20px;
    width: 70%;
    height: 400px;
    margin:  50 auto;
    background: repeating-linear-gradient(
      45deg,
      yellow 0px,
      yellow 40px,
      black 40px,
      black 80px
    );
  }
  
  div {
    display: inline-block;
    height: 100px;
    width: 100px;
  }
</style>
  
<div class="green"></div>
<div class="cyan"></div>
<div class="blue"></div>

<div class="strip"></div>
