<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1549 mt-lg-5 mt-3">
      <div class="container container-custom">
            <div class="row d-lg-flex justify-content-center">
                  <div class="col-lg-8 col-12">
                        <div class="row m-0 list-comment pt-3 pb-3">
                              <div class="col-6 p-0">
                                    <a href="#" class="item-prev d-flex align-items-center">
                                          <div class="mr-2">
                                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                          </div>
                                          <div class="ml-2">
                                                <span class="text-uppercase">previous</span>
                                                <p class="mb-0">Why lorem amet ipsum glavrida</p>
                                          </div>
                                    </a>
                              </div>

                              <div class="col-6 p-0 ">

                                    <a href="#" class="item-next d-flex align-items-center justify-content-end">
                                          <div class="mr-2">
                                                <span class="text-uppercase text-right">next</span>
                                                <p class="mb-0 ml-3">Ornare facilisi – non pulvinar justo dolor amet ipsum
                                                </p>

                                          </div>
                                          <div class="ml-2">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                          </div>
                                    </a>

                              </div>
                        </div>
                        <div class="d-flex justify-content-center mb-lg-5 mb-3 mt-4">
                              <h3 class="items position-relative">1 Comment</h3>
                        </div>
                        <div class="d-flex comment p-30">
                              <div class="mr-4">
                                    <img src="images/1549.png" class="rounded-circle w-100">
                              </div>
                              <div>
                                    <div class="title">
                                          <h4>Dream Theme</h4>
                                          <a href="#"><span> 3rd April 2020 at 10:03 am </span></a>
                                    </div>
                                    <div class="content mt-3">
                                          <p>Duis dolor ex, ultricies et ligula et, cursus cursus odio.
                                                Proin efficitur massa a dolor tincidunt rhoncus.
                                                Ut efficitur, diam vel malesuada hendrerit, turpis mauris
                                                porttitor sem,
                                                a laoreet nibh ligula a ex.
                                                Nullam consectetur molestie fringilla.
                                                Cras porttitor ac est quis commodo.</p>
                                    </div>
                                    <a href="#" class="d-flex justify-content-end align-items-center reply">
                                          <i class="fa fa-reply" aria-hidden="true"></i>
                                          <div class="pl-2 font-weight-bi">Reply</div>
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>


