<style>
  .info
  {
    text-align:center;
  }
  .info h2{
    color:#FF6464;
  }
</style>
<form method="post" id="search_birds" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<section class="sec1">
           
                <div class="container-fluid">
                  <div class="row text-row" >
                    <div class="col-lg-6 " >
                      <h3 class="animate-charcter"> Search The Bird<img src="./img/allabout2.png" width="150"> </h3>
                      <h3 class="animate-charcter2"> Click Below</h3>
                        
                      
                      <div class="search-wrapper" >
                        <br>
                        <br>
                        <br>
                        <div class="input-holder">
                            <input type="text" name="search_keyword" class="search-input" placeholder="Search a bird" />
                            <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                        </div>
                        <span class="close" onclick="document.getElementById("search_birds").submit();"></span>
                    </div>

                      
                    </div>
                  </div>
                </div>
           
        </section>
        <br>
        <br>
        <br>
        <div class="container info" id="aboutus">
          <h1>About Us</h1>
          <br>
          <h2>Project Name : All About Birds</h2>
          <hr>
          <h3>This website is all about to aware the people's about bird watching and   giving the authentic information voice and images of birds</h3>
          <hr>
          <h2>Team information</h2>
          <h3>First Year Computer Department Students </h3>
<h3>Snehal Thombare</h3>
<h3>Sayali Ugalmugale</h3>
<h3>Manjiri Suryawanshii</h3>
<h3>Pranjal Wagh</h3>
<h3>Priti Rathi</h3>
<hr>
<h1 style="color:#0007C6">College Name : K.K.Wagh college of engineering , Nashik</h1>

        </div>
</form>