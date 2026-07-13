<?php
/**
 * Template Name: Reviews
 * Template Post Type: page
 */
get_header();
?>

<main id="main" class="de-reviews-page" role="main">

  <!-- ── Hero ──────────────────────────────────────────────────────────── -->
  <section class="de-page-hero">
    <div class="de-container">
      <p class="de-hero__eyebrow">Client Testimonials</p>
      <h1>What Clients Say About Dalicia</h1>
      <p class="de-page-hero__sub">28 verified reviews from real NWA homebuyers and sellers</p>
    </div>
  </section>

  <!-- ── Reviews Grid ───────────────────────────────────────────────────── -->
  <section class="de-reviews-section">
    <div class="de-container de-reviews-grid">

      <?php
      $reviews = [
        [ 'name' => 'Rebecca B.', 'text' => 'Dalicia was wonderful to work with. She made the buying and selling of our home stress free.' ],
        [ 'name' => 'Angie M.', 'text' => 'Dalicia went the extra mile for us when we were purchasing a home! We highly recommend Dalicia Emerson!' ],
        [ 'name' => 'Claire M.', 'text' => 'Dalicia was the absolute BEST realtor we could have asked for! This was our first home buy, and she made what could have been a really difficult and confusing process so easy and stress-free. She is so kind and you can tell that she really wants what is best for her clients. I will forever be recommending Dalicia to everyone! 10000/10.' ],
        [ 'name' => 'Madelyn M.', 'text' => 'We were paired up with Dalicia through our lender and what a match made in heaven! As first-time home buyers we knew very little of the home buying process and Dalicia sat us down and explained all stages of the process. She went above and beyond by talking to neighbors about questions we had, making sure we understood all the paperwork, and always making time for us no matter what she was doing!' ],
        [ 'name' => 'Alexander S.', 'text' => 'Dalicia was helpful in every step of the process. She helped us find the house, get repairs done, and helped walk us through closing. I would highly recommend her.' ],
        [ 'name' => 'David L.', 'text' => 'Dalicia was a pleasure to meet and work with while looking for our new home in NWA. My wife and I would recommend contacting her for assistance with your new home purchase.' ],
        [ 'name' => 'Pamela L.', 'text' => 'Dalicia was professional, knowledgeable, and responsive. She was amazing throughout the entire experience and we would not only work with her again but we would recommend her to friends and family.' ],
        [ 'name' => 'Jason L.', 'text' => 'Dalicia has been keeping an eye on the market for a while for us. We knew we were relocating to the area but were not sure exactly when, where, and what our situation would be. When we found the place, she made quick work of the offer, negotiations, and everything needed to get the ball rolling! She is professional, hard working, and responsive!' ],
        [ 'name' => 'Tricia W.', 'text' => 'Dalicia was wonderful to work with. She heard our needs and was able to narrow the field for us. Her showings were informative without being aggressive. She was able to give details about the community, schools, walking trails, etc.' ],
        [ 'name' => 'Anna K.', 'text' => 'Dalicia was awesome! A great partner and friend! So happy with the process and my new home!' ],
        [ 'name' => 'Anna K.', 'text' => 'Dalicia was so awesome throughout the entire process! She was available at all hours, and worked with a sense of urgency to help me! I appreciate everything she did! So happy with my home and with how smoothly the selling process was.' ],
        [ 'name' => 'Madison S.', 'text' => 'Dalicia is the woman you want on your side when buying a home, especially your first. She had our best interest in mind from beginning to end. Dalicia is deeply knowledgeable, diligent, and supportive, answering our many questions and making sure our needs were met. Thank you for helping us secure the home of our dreams!' ],
        [ 'name' => 'B.K.', 'text' => 'Wonderful experience with Dalicia! Couldn\'t have asked for more attention, prompt responses and seamless process to get it done. Highly recommend!' ],
        [ 'name' => 'Linda S.', 'text' => 'Dalicia is a very hard working Realtor. She always keeps me updated and is just a pleasure to work with!' ],
        [ 'name' => 'Leigh A.', 'text' => 'Dalicia was excellent to work with. My fiancee and I were first-time homebuyers, and she made the process insanely easy and seamless. She explained each step of the process to us and made sure we were well informed through it all. She went above and beyond to ensure we got everything we wanted and needed, especially throughout the negotiations once under contract.' ],
        [ 'name' => 'SaraJane P. & Tanner B.', 'text' => 'Dalicia was an incredible Realtor to work with! She listened to our must-haves, pluses, and delivered with the properties she brought to us. She was always fast with setting up showings which allowed us to move fast if we liked a house. As a first-time home buyer, I had a lot of questions, so this was very reassuring. I would highly recommend Dalicia as a realtor for the NWA area due to her knowledge of the neighborhoods!' ],
        [ 'name' => 'Laura K.', 'text' => 'I absolutely loved working with Dalicia to find the perfect home for my family. As a first-time buyer in a new area, house hunting can be daunting. But Dalicia helped make the listing searches and open houses fun while educating me at every step of the process. She quickly understood my sense of style and did not waste my time. She is a gem!' ],
        [ 'name' => 'M.M.', 'text' => 'We worked with Dalicia to purchase our Beaver Lake home. She worked really hard to make sure ALL our questions were answered. Dalicia is a great communicator and very responsive. Her motivation was always driven by putting our interests first. We would recommend her 100%.' ],
        [ 'name' => 'Laura K.', 'text' => 'Dalicia was a DREAM realtor to work with as a first-time homebuyer. She was extremely patient, knowledgeable and supportive throughout my journey. She got to know me, truly cared about my family\'s needs and did not let me settle for less. She helped me find the PERFECT home for me.' ],
        [ 'name' => 'Kevin G.', 'text' => 'Dalicia was very responsive and was a great consultant throughout the process.' ],
        [ 'name' => 'Halie B.', 'text' => 'Dalicia and the Coldwell team are extremely detailed, organized, have the best communication, and have the best interest in mind for their clients at all times! Highly recommend!' ],
        [ 'name' => 'Jake H.', 'text' => 'Everything seemed to come together at once and with Dalicia\'s hard work and dedication to her profession we purchased our land and had zero issues to speak of. If you need somebody that will represent you as well as possible and certainty of communication, then Dalicia Emerson is hands down who you should go with.' ],
        [ 'name' => 'Catelyn H.', 'text' => 'Dalicia was absolutely wonderful to work with! She was always happy to help answer any questions we had. We had a very fast and smooth purchase process. We will 100% be using her in the future for any real estate needs we have.' ],
        [ 'name' => 'Jake H.', 'text' => 'Could not ask for a better realtor. Professional and great communication making the process as painless as possible.' ],
        [ 'name' => 'Linda S.', 'text' => 'Dalicia is the hardest working realtor I have ever dealt with. She communicates with me daily and does not leave me hanging. She sold my house in less than two weeks and that is huge for me. She made the process as stress free as possible.' ],
        [ 'name' => 'Natasha G.', 'text' => 'We are so grateful to Dalicia for helping us sell our home in record time! As first-time sellers, we certainly had a lot of questions and she helped us navigate through them all. We highly recommend her whether you are on the market to sell, buy or both!' ],
        [ 'name' => 'Carey H.', 'text' => 'Dalicia is amazing to work with. She is knowledgeable, honest and understands her buyers\' needs. She went above and beyond in finding the perfect home for me. I highly recommend her if looking for a new home or listing your home!' ],
        [ 'name' => 'Briaunna G.', 'text' => 'Overall, Dalicia was great to work with! She kept in constant contact with us during the whole process and always listened to our needs and wants in a home. She was able to find us the perfect starter home in a very timely manner. I would 100% recommend using Dalicia for all of your home needs!' ],
      ];
      foreach ( $reviews as $review ) : ?>
        <div class="de-review-card">
          <div class="de-review-card__stars">★★★★★</div>
          <p class="de-review-card__text">"<?php echo esc_html( $review['text'] ); ?>"</p>
          <p class="de-review-card__name">— <?php echo esc_html( $review['name'] ); ?></p>
        </div>
      <?php endforeach; ?>

    </div>
  </section>

  <!-- ── CTA ───────────────────────────────────────────────────────────── -->
  <section class="de-section de-section--luxury-dark" style="text-align:center; padding: 64px 40px;">
    <div class="de-container">
      <h2 style="color:#fff; margin-bottom:16px;">Ready to Work Together?</h2>
      <p style="color:rgba(255,255,255,0.75); margin-bottom:32px;">Join the hundreds of NWA families who have trusted Dalicia Emerson with their home.</p>
      <a href="/contact-dalicia-emerson/" class="de-btn de-btn--gold de-btn--large">Get in Touch</a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
