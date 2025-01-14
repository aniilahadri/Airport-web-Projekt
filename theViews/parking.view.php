<?php require BASE_PATH . "partials/head.php"?>
<style>
    .unhidden{
      display: block;
    }
  </style>
</head>
<body>
<div style="display: flex;flex-direction: column; min-height:100vh; ">
  <?php require BASE_PATH . "partials/header.php"?> 
    <main style="flex:1">
      <section class="first-site-container">
        <div>
          <h1 align="center">Official on-site parking</h1>
          <h3 align="center">There is currently limited availability for new car park bookings.</h3>
        </div>
        <div class="booking-part">
          <div class="input-part">
            <label for="entry-date">Entry Date</label><br>
            <input type="date" id="entry-date" name="entry-date">
          </div>
          <div class="input-part">
            <label for="entry-time">Entry Time</label><br>
            <input type="time" id="entry-time" name="entry-time">
          </div>
          <div class="input-part">
            <label for="leaving-date">Leaving Date</label><br>
            <input type="date" id="leaving-date" name="leaving-date">
          </div>
          <div class="input-part">
            <label for="leaving-time">Leaving Time</label><br>
            <input type="time" id="leaving-time" name="leaving-time">
          </div>
        </div>
      </section>

      <section class="parking-offer-container">
        <div class="text-parking">
          <h1>Our Parkings</h1>
          <span style="font-size: medium;">Discover the parking that best suits your needs</span>
          <h2>List</h2>
        </div>
          <div class="parking-suboffer">
            <h1>Parking-A</h1>
            <div class="suboffer-second-block">
              <img src="../images/walk.png" alt="iconOfPerson">
              <h3>5 minute walk from Terminal 1</h3>
            </div>
            <button class="describe-button">Closer to T1</button>
            <button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button>
          </div>
          <div class="parking-suboffer">
            <h1>Parking-B</h1>
            <div class="suboffer-second-block">
              <img src="../images/walk.png" alt="iconOfPerson">
              <h3>10 minute walk from Terminal 2</h3>
            </div>
            <button class="describe-button">Closer to T2</button>
            <button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button>
          </div>
          <div class="parking-suboffer"> 
            <h1>Parking-C</h1>
            <div  class="suboffer-second-block">
              <img src="../images/walk.png" alt="iconOfPerson">
              <h3>10 minute walk from Terminal 1</h3>
            </div>
            <button class="describe-button">Closer to T1</button>
            <button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button>
          </div>
          <div class="parking-suboffer">
            <h1>Parking-D</h1>
            <div  class="suboffer-second-block">
              <img src="../images/walk.png" alt="iconOfPerson">
              <h3>5 minute walk from Terminal 2</h3>
            </div>
            <button class="describe-button">Closer to T2</button>
            <button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button>
          </div>
      </section>

      <section class="subscribe-faq-container">
        <div class="subscribe">
          <h1><span style="color: rgb(247, 66, 66);">Subscribe</span> to our newsletter</h1>
          <p style="max-width: 480px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt sit itaque optio repellendus, rerum, fugiat eum nemo expedita unde et quibusdam nostrum consequatur nisi, earum tempora nobis delectus maiores cupiditate.Cumque, sit modi? Quasi.</p>
          <form method="post">
            <input type="email" placeholder="johndoe@email.com" name="email" required>
            <button type="submit">Register</button>
          </form>
        </div>
        <div class="faq">
          <h1>F.A.Q</h1>
          <a href="#">If I have pre-booked, what happens if I arrive early or leave late?</a>
          <a href="#">Can I request a change to my booking?</a>
          <a href="#">I’ve lost my parking ticket. What should I do?</a>
        </div>
      </section>

    </main>

  <?php require BASE_PATH . 'partials/footer.php'?>
  <script>
  const searchBar = document.querySelector('.searchBar');
  const searchIcon = document.querySelector('#search-div');

  searchBar.addEventListener('click',hiddenSearch);

  function hiddenSearch () {
    searchIcon.classList.toggle('unhidden');
  }
</script>  
</body>
</html>