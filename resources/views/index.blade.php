<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="5QxPV4Ur17b6nb0pkcwyQ70feEtP-cCHEOq2WS8K1Ww" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <script src="{{ asset('index.js') }}"></script>
  <link rel="preload" href="https://www.jqueryscript.net/dummy/7.jpg" as="image">
  <link rel="preload" href="https://www.jqueryscript.net/dummy/8.jpg" as="image">
  <link rel="preload" href="https://www.jqueryscript.net/dummy/9.jpg" as="image">
  <link rel="preload" href="https://www.jqueryscript.net/dummy/10.jpg" as="image">
  <title>DEV CHIEN TEST WEB TO DEPLOY WITH LARAVEL</title>
  <link rel="icon" type="image/x-icon" href="./images/bootstrap.ico">
</head>

<body>
  <div class="w-100 h-100">
    <!-- Carousel https://getbootstrap.com/docs/5.1/components/carousel/ -->
    <div class="carousel-container justify-content-center">
      <!-- data-bs-interval: the amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle -->
      <!-- data-bs wrap: whether the carousel should cycle continuously (i.e go from first to last and vice-versa) -->
      <div id="vertical-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false"
        data-bs-wrap="false">
        <!-- Carousel slide indicators -->
        <ol class="carousel-indicators ms-4">
          <li data-bs-target="#vertical-carousel" data-bs-slide-to="0" class="active">Test 1</li>
          <li data-bs-target="#vertical-carousel" data-bs-slide-to="1">Test 2</li>
          <li data-bs-target="#vertical-carousel" data-bs-slide-to="2">Test 3</li>
          <li data-bs-target="#vertical-carousel" data-bs-slide-to="3">Test 4</li>
        </ol>

        <div class="carousel-inner">
          <!-- Carousel item represents each slide -->
          <div class="carousel-item active" style="background-image:url({{ asset('31.jpg') }})">

            <div class="container">
              <div class="row align-items-center" style="height: 100%">
                <h1 class="display-3 text-center text-light">
                    DEV CHIEN TEST WEB TO DEPLOY WITH LARAVEL
                </h1>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image:url({{ asset('12.jpg') }})">
          </div>
          <div class="carousel-item" style="background-image:url({{ asset('23.jpg') }})">
          </div>
          <div class="carousel-item" style="background-image:url({{ asset('65.jpg') }})">
          </div>
        </div>
      </div>
      <!-- Carousel buttons -->
      <button class="unclickable carousel-control-prev" type="button" data-bs-target="#vertical-carousel" data-bs-slide="prev">
        <span class="clickable carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="unclickable carousel-control-next" type="button" data-bs-target="#vertical-carousel" data-bs-slide="next">
        <span class="clickable carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="./index.js"></script>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>

</html>
