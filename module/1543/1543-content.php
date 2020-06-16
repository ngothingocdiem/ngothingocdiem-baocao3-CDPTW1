<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1543 mt-lg-5">
      <div class="container container-custom">
            <div class="row d-lg-flex justify-content-center align-items-center">
                  <div class="col-lg-4 col-12 p-0">
                        <div class="m-30">
                              <h4 class="title mb-lg-3">Start learning today!</h4>
                              <h3 class="content mb-md-4">Watch our video guide - learn how to start your online
                                    education today.</h3>
                              <p class="detail mb-md-4">Imperdiet dignissim eget neque ut tellus ornare elit tellus, luctus nec
                                    ullamcorper mattis.
                              </p>

                              <a href="#" class="learn-more pb-1">
                                    <i class="fa fa-question-circle mr-2" aria-hidden="true"></i>
                                    <span>Feel free to contact our support</span>
                              </a>
                        </div>

                  </div>
                  <div class="col-lg-8 col-12 p-0">
                        <div class="m-30">
                              <div class="learn-video position-relative w-100 h-100 ">
                                    <div class="w-100 h-100 position-absolute" id="img-video" onclick="show()">
                                          <img class="w-100 h-100" src="images/1543-img1.png">
                                          <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                                                <i class="fa fa-play-circle-o position-relative text-white"
                                                      aria-hidden="true"></i>
                                          </div>
                                    </div>
                                    <iframe class=" w-100 h-100 border-0 video" src="images/video/video-1543.mp4">
                                    </iframe>
                              </div>
                        </div>

                  </div>
            </div>
      </div>
</div>

<script>
function show() {
      var el = document.getElementById("img-video");
      el.style.display = "none";
}
</script>