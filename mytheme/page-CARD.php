<?php get_header();
*/
Template Name: CARD Page
*/

$cards = New wp_query({
    'post_type' => 'cards'
});

print_r($cards->posts);

foreach ($cards->posts as $card) {
    echo $person->post_title;
}

if ($cards->have_posts()) : while ($cards->have_posts()) : $cards->the_post(); ?>

<section>
  <div class="container">
    <div class="card">
      <div class="card-img">
        <img src="https://imgur.com/7kEadEJ.png" class="Lawson" />
      </div>
      <div class="card-desc">
        <h1 class="name"><span>TRENTON</span><br/> LAWSON</h1>
        <h4 class="job-desc">Lead Front End Developer</h4>
        <p>Phone Number: (713)594-5697</p>
        <p>Email: trenton.lawson@quantumatiq.com</p>
        <a href="" class="card-btn">Connect with Trent</a>
      </div>
    </div>
    <div class="card">
      <div class="card-img">
        <img src="https://imgur.com/o3INAgV.png" class="Thomas" />
      </div>
      <div class="card-desc">
        <h1 class="name"><span>ADAM</span><br/> THOMAS</h1>
        <h4 class="job-desc">Chief Executive Officer</h4>
        <p>Phone Number:(877) 401-5111, Ext: 808 
M: (248) 282-3475</p>
        <p>Email: adamthomas@quantumatiq.com</p>
        <a href="" class="card-btn">Connect with Adam</a>
      </div>
    </div>
    <div class="card">
      <div class="card-img">
        <img src="https://imgur.com/U9Z1M5v.png" class="Al-Mansur" />
      </div>
      <div class="card-desc">
        <h1 class="name"><span>MOHAMMAD</span><br/> AL-MANSUR</h1>
        <h4 class="job-desc">Director of IT</h4>
        <p>Phone Number: 248-282-3396</p>
        <p>Email: mohammad.almansur@quantumatiq.com</p>
        <a href="" class="card-btn">Connect with Mohammad</a>
      </div>
    </div>
    <div class="card">
      <div class="card-img">
        <img src="https://imgur.com/Le5xdio.png" class="Ellison" />
      </div>
      <div class="card-desc">
        <h1 class="name"><span>JENNIFER</span><br/> ELLISON</h1>
        <h4 class="job-desc">Director of HR</h4>
        <p>Phone Number: (877) 401-5111</p>
        <p>Email: jellison@quantumatiq.com</p>
        <a href="" class="card-btn">Connect with Jennifer</a>
      </div>
    </div>
    <div class="card">
      <div class="card-img">
        <img src="https://imgur.com/OtdORQM.png" class="Tucker" />
      </div>
      <div class="card-desc">
        <h1 class="name"><span>JAISON</span><br/> TUCKER</h1>
        <h4 class="job-desc">Chief Operating Officer</h4>
        <p>Phone Number: (877) 401-5111, Ext: 810 
M: (248) 282-3409</p>
        <p>Email: jaison.tucker@quantumatiq.com</p>
        <a href="" class="card-btn">Connect with Jaison</a>
      </div>
    </div>
    <div class="card">
      <div class="card-img">
        <img src="https://imgur.com/JT61CoP.png" class="Compton" />
      </div>
      <div class="card-desc">
        <h1 class="name"><span>JOSEPH</span><br/> COMPTON</h1>
        <h4 class="job-desc">Operations Director</h4>
        <p>Phone Number: 434-270-6059</p>
        <p>Email: joseph.compton@quantumatiq.com</p>
        <a href="" class="card-btn">Connect with Joseph</a>
      </div>
    </div>
  </div>
</section>

<?php endwhile; endif ?>

<?php get_footer() ?>