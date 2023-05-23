<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvador H. Real Estate</title>  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />  
    <?php wp_head() ?>
  </head>
  <main>
    <header>  
      <div class="container-1500">        
        <div class="logo">          
          <?php the_custom_logo(); ?>          
        </div>
        <nav class="menu">
          <ul>
            <li><a href="#inicio">Home</a></li>
            <li><a href="#propiedades">Properties</a></li>        
            <li><a href="#contacto">Contact</a></li>        
          </ul>
        </nav>
        <div class="menu-icon">
          <span class="material-symbols-outlined">
            menu
          </span>
        </div> 
      </div>
      <div class="menu-container">
        <ul class="floating-menu">
          <li><a href="#inicio">Home</a></li>
          <li><a href="#propiedades">Properties</a></li>
          <li><a href="#contacto">Contact</a></li>
        </ul>
      </div>
    </header>
    
    <body>                     
        <section id="inicio width-1500">
          <div class="hero gray-background">
            <h1>Your reliable and efficient real estate solution</h1>
            <p>We offer high-quality real estate services to help you find the perfect property.</p>
            <a href="#contacto" class="boton">Contact Us!</a>
          </div>
        </section>

        <section class="container" id="propiedades">
          <h2>Properties</h2>
          <div class="container property-display">
            <div class="flex-column">
              <h3>Beautiful home in Chula Vista</h3>
              <p>Beautifully maintained two-story attached home with a 2.0 car garage located within the highly desirable community of Macmillan Lomas Verdes in the heart of Chula Vista. This amazing residence features neutral paint and trim, central AC, and durable marvel flooring throughout the first floor of the home. A fire place in the living room in the first level. Two blocks away from Corky McMillin Elemnatary School.</p>              
            </div>
            <div class="property gallery-grid">
              <img src="<?php echo get_template_directory_uri() . '/img/IMG1.jpeg'; ?>" alt="Propiedad IMG1">
              <img src="<?php echo get_template_directory_uri() . '/img/IMG2.jpeg'; ?>" alt="Propiedad IMG2">
              <img src="<?php echo get_template_directory_uri() . '/img/IMG3.jpeg'; ?>" alt="Propiedad IMG3">
              <img src="<?php echo get_template_directory_uri() . '/img/IMG4.jpeg'; ?>" alt="Propiedad IMG4">
              <img src="<?php echo get_template_directory_uri() . '/img/IMG5.jpeg'; ?>" alt="Propiedad IMG5">
            </div>    
          </div>
          <div class="icons-container width-1000">
                <div class="icon">
                  <img src="https://cdn-icons-png.flaticon.com/512/261/261269.png" alt="Icono Baños">
                  <p>3 full baths</p>
                </div>
                <div class="icon">
                  <img src="https://cdn-icons-png.flaticon.com/512/6310/6310371.png" alt="Icono Dormitorios">
                  <p>4 bedrooms</p>
                </div>
                <div class="icon">
                  <img src="https://cdn-icons-png.flaticon.com/512/75/75905.png" alt="Icono Estacionamientos">
                  <p>2 parkings</p>
                </div>
              </div>
        </section>

        <section class="gray-background" id="nosotros">
          <div class="container">
            <h2>About us</h2>
            <p>We are a renowned real estate company with a solid and reliable track record in the market. We stand out for offering high-quality services and expertise to our clients. Our team of highly trained professionals is committed to providing innovative solutions and meeting all the real estate needs of our clients. We are dedicated to delivering exceptional service and ensuring the trust and satisfaction of those who rely on us for their real estate transactions.</p>
          </div>
        </section>

        <section id="contacto">
          <div class="container">
            <h2>Contact</h2>
            <p>Contact us today to learn more about our services!</p>
            <form>
              <input type="text" name="nombre" placeholder="Name">
              <input type="email" name="email" placeholder="Email">
              <textarea name="mensaje" placeholder="Your message"></textarea>
              <button type="submit" class="boton">Submit</button>
            </form>
          </div>
        </section>

        <section>
          <footer>
            <div class="container">
              <ul>
                <li><a href="#inicio">Home</a></li>
                <li><a href="#propiedades">Properties</a></li>        
                <li><a href="#contacto">Contact</a></li>
              </ul>
              <p>Salvador H. Real Estate. &copy; <?php echo date('Y') ?> . All rights reserved.</p>
            </div>
          </footer>
        <script src="<?php echo get_template_directory_uri() . '/js/script.js'; ?>"></script>
        <?php wp_footer(); ?> 
    </body>    
  </main>

</html>
