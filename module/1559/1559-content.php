<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1559 mt-lg-5">
      <div class="container container-custom">
            <div class="pl-3 pt-4 list-views">
                  <a href="#" class="pr-4"><span class="pb-1 active">View all</span></a>
                  <a href="#" class="pr-4"><span class="pb-1">Business</span></a>
                  <a href="#" class="pr-4"><span class="pb-1">Ecommerce</span></a>
                  <a href="#" class="pr-4"><span class="pb-1">Lifestyle</span></a>
                  <a href="#" class="pr-4"><span class="pb-1">Marketing</span></a>
            </div>
            <div class="row p-30">
                  <div class="col-lg-4 col-md-6 col-12 p-0">
                        <div class="card border-0 p-1">
                              <div class="position-relative img">
                                    <img class="card-img" src="images/1559-img1.jpg" alt="Hình 1">
                                    <div
                                          class="card-img-overlay position-absolute d-flex justify-content-center align-items-center">
                                          <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                    </div>
                              </div>


                              <div class="card-body p-30">
                                    <a href="#">
                                          <h3 class="card-title">Start your lorem ipsum dolor</h3>
                                    </a>
                                    <span>Business</span>
                                    <p class="card-text mt-3">Metus your lorem ipsum dolor in lobortis. Pellentesque
                                          habitant
                                          morbi tristique senectus et netus et malesuada fames ac turpis.</p>
                                    <a href="#" class="view font-weight-bold pb-1"> View details <i
                                                class="fa fa-caret-right ml-1" aria-hidden="true"></i></a>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 p-0">
                        <div class="card border-0 p-1">
                              <div class="position-relative img">
                                    <img class="card-img" src="images/1559-img2.jpg" alt="Hình 2">
                                    <div
                                          class="card-img-overlay position-absolute d-flex justify-content-center align-items-center">
                                          <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                    </div>
                              </div>


                              <div class="card-body p-30">
                                    <a href="#">
                                          <h3 class="card-title">Business ipsum for amet glavrida</h3>
                                    </a>
                                    <span>Business</span>
                                    <p class="card-text mt-3">Duis porttitor egestas metus in lobortis. Pellentesque
                                          habitant
                                          morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    <a href="#" class="view font-weight-bold pb-1"> View details <i
                                                class="fa fa-caret-right ml-1" aria-hidden="true"></i></a>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 p-0">
                        <div class="card border-0 p-1">
                              <div class="position-relative img">
                                    <img class="card-img" src="images/1559-img3.jpg" alt="Hình 3">
                                    <div
                                          class="card-img-overlay position-absolute d-flex justify-content-center align-items-center">
                                          <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                    </div>
                              </div>


                              <div class="card-body p-30">
                                    <a href="#">
                                          <h3 class="card-title">10 easy steps to lorem dolor glavrida</h3>
                                    </a>
                                    <span>Lifestyle</span>
                                    <p class="card-text mt-3">Nunc from ipsum placerat Suspen disseut molestie hendrerit
                                          itae.
                                          Nunc placerat mattis odio, ut rhoncus ante facilisis nec.</p>
                                    <a href="#" class="view font-weight-bold pb-1"> View details <i
                                                class="fa fa-caret-right ml-1" aria-hidden="true"></i></a>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

</div>
</div>