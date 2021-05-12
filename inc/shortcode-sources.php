<?php

add_action( 'after_setup_theme', 'swp_theme_setup' );

if ( ! function_exists( 'swp_theme_setup' ) ) {
  function swp_theme_setup(){
    /********* TinyMCE Buttons ***********/
    add_action( 'init', 'swp_buttons' );
  }
}


/********* TinyMCE Buttons ***********/
if ( ! function_exists( 'swp_buttons' ) ) {
  function swp_buttons() {
    if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
          return;
      }

      if ( get_user_option( 'rich_editing' ) !== 'true' ) {
          return;
      }

      add_filter( 'mce_external_plugins', 'swp_add_buttons' );
      add_filter( 'mce_buttons', 'swp_register_buttons' );
  }
}

if ( ! function_exists( 'swp_add_buttons' ) ) {
  function swp_add_buttons( $plugin_array ) {
      $plugin_array['swpbtn'] = get_stylesheet_directory_uri().'/assets/tinymce_buttons.js';
      return $plugin_array;
  }
}

if ( ! function_exists( 'swp_register_buttons' ) ) {
  function swp_register_buttons( $buttons ) {
      array_push( $buttons, 'swpbtn' );
      return $buttons;
  }
}


//shortcode
function tooltip_shortcode( $atts , $content = null) {
  $atts = shortcode_atts( array(
  'text' => 'tooltip text',
  'source' => '',
  'title' => 'title',
  'target' => '_self'
  ), $atts );

  ob_start();
  ?>
  <span id="tooltip" class="tooltipselector">
    <span class="tooltipcnt">
      <span class="tooltiptrusted"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri();?>/assets/trusted.svg" alt="Trusetd Source Checkbox"> Trusted Source</span>
      <span class="tooltiptitle"><?php echo $atts['title']; ?></span>
      <span><?php echo $atts['text']; ?></span>
      <?php
      if ($atts['source']):
        echo '<a target="'.$atts['target'].'" href="'.$atts['source'].'">Go to Source</a>';
      else:
        echo '<a target="'.$atts['target'].'" href="#srclength">Go to Source</a>';
      endif;
      ?>
    </span>
    <a><?php echo $content; ?></a>
  </span>
  <?php
      $tooltip = ob_get_contents();
      ob_end_clean();
      return $tooltip;
  }
  add_shortcode( 'tooltip','tooltip_shortcode' );



  function tooltip_style()
  {
echo "
<style>
#tooltip{position:relative;display:inline-block;cursor:pointer}#tooltip::after{content:'';background-image:url('".get_stylesheet_directory_uri()."/assets/trusted.svg');display:inline-block;background-size:cover;width:12px;height:12px}#tooltip .tooltipcnt.is-active,#tooltip:hover .tooltipcnt{display:block;-webkit-animation:puff-in-center 0.3s cubic-bezier(.47,0,.745,.715) forwards;animation:puff-in-center 0.3s cubic-bezier(.47,0,.745,.715) forwards}#tooltip .tooltipcnt{display:none;position:absolute;bottom:1.7em;left:0;width:100%;min-width:300px;max-width:300px;box-shadow:0 6px 16px rgba(0,0,0,.16);background-color:#fff;z-index:3;padding:1.2em;border-radius:9px}.tooltipcnt::before{content:'';display:block;position:absolute;top:0;left:0;bottom:-1.7em;right:0;background:transparent;border:1.5em solid transparent;z-index:-1}#tooltip .tooltipcnt>a{font-size:12px;font-weight:400}#tooltip i{text-decoration:underline;font-style:normal;cursor:pointer}#tooltip .tooltiptrusted{font-size:16px;display:flex;align-items:center;margin-bottom:10px}#tooltip .tooltiptrusted img{margin-right:10px;display:block}#tooltip span{display:block;line-height:1.35;margin:0;font-size:13px;margin-bottom:10px}#tooltip .tooltiptitle{font-family:'Fjalla One',sans-serif;font-size:16px;margin-bottom:10px}#tooltip a{font-size:16px;text-decoration:none;cursor:pointer}.tooltipselector:hover,#tooltip a:hover{cursor:pointer;text-decoration:underline}@-webkit-keyframes puff-in-center{0%{-webkit-transform:scale(1.3);transform:scale(1.3);-webkit-filter:blur(4px);filter:blur(4px);opacity:0}100%{-webkit-transform:scale(1);transform:scale(1);-webkit-filter:blur(0);filter:blur(0);opacity:1}}@keyframes puff-in-center{0%{-webkit-transform:scale(1.3);transform:scale(1.3);-webkit-filter:blur(4px);filter:blur(4px);opacity:0}100%{-webkit-transform:scale(1);transform:scale(1);-webkit-filter:blur(0);filter:blur(0);opacity:1}}@media screen and (max-width:767px){#tooltip .tooltipcnt.is-active.is-out{right:initial;left:-100%}}
   </style>
  ";
  }
add_action('wp_head', 'tooltip_style', 100);




function tooltip_script(){
  ?>
  <script>

    var isOutOfViewport = function (elem) {

      // Get element's bounding
      var bounding = elem.getBoundingClientRect();

      // Check if it's out of the viewport on each side
      var out = {};
      out.top = bounding.top < 0;
      out.left = bounding.left < 0;
      out.bottom = bounding.bottom > (window.innerHeight || document.documentElement.clientHeight);
      out.right = bounding.right > (window.innerWidth || document.documentElement.clientWidth);
      out.any = out.top || out.left || out.bottom || out.right;
      out.all = out.top && out.left && out.bottom && out.right;

      return out;

    };

    var elem = document.querySelector('.tooltipselector');
    if (elem) {
      elem.addEventListener("mouseover", mouseOver);
    }


    function mouseOver() {
        // console.log(elem.children[0])
        var thisitem = elem.children[0];
        var isOut = isOutOfViewport(thisitem);
       // MOVE ELEMENT BACK INTO DOM
       if (isOut.right) {
            thisitem.style.left='initial';
            thisitem.style.right='.8em';
       }
    }

    // MOBILE CLICK

    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
      var mobile ="true";
    }else{
      var mobile ="false";
    }


    let mql = window.matchMedia('(max-width: 980px)');
        if(mql.matches || mobile == "true") {

          const mobelemt = document.querySelectorAll('.tooltipselector');

          mobelemt.forEach(el => el.addEventListener('click', event => {
            var element = el;
            clicked(element)
          }));

          function clicked(el) {
              var thisitem = el.children[0];
              thisitem.classList.toggle("is-active");

              var isOut = isOutOfViewport(thisitem);
              if (isOut.right) {
                thisitem.classList.add("is-out");
              }

          }
        }

  </script>
  <?php
}
add_action( 'wp_footer', 'tooltip_script' );