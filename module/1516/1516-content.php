<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1516 mt-md-5 pt-4 pb-4">
      <div class="container container-custom">
            <div class="row">
                  <div class="col-12 col-lg-4 p-0">
                        <div class="p-30 d-md-flex ">
                              <div class="mb-3 mb-md-0">
                                    <i class="fa fa-briefcase text-white icon p-3"></i>
                              </div>
                              <div class="ml-md-3">
                                    <h4 class="font-weight-normal">Get all necessary skills for new career</h4>
                                    <p class="d-block font-weight-light">Ambco mattis nulla glavrida ege ulla ambco
                                          mattis nulla lorem dolor.
                                    </p>
                              </div>
                        </div>

                  </div>
                  <div class="col-12 col-lg-4 p-0">
                        <div class="p-30 d-md-flex">
                              <div class="mb-3 mb-md-0">
                                    <i class="fa fa-cloud-download text-white icon p-3"></i>
                              </div>
                              <div class="ml-md-3">
                                    <h4 class="font-weight-normal">Learn the latest skills</h4>
                                    <p class="d-block font-weight-light">Nullam eget neque ut tellus ornare ullamcorper
                                          ulla ambco mattis for nulla glavrida egesed!
                                    </p>
                              </div>
                        </div>

                  </div>
                  <div class="col-12 col-lg-4 p-0">
                        <div class="p-30 d-md-flex">
                              <div class="mb-3 mb-md-0">
                                    <i class="fa fa-certificate text-white icon p-3"></i>
                              </div>
                              <div class="ml-md-3">
                                    <h4 class="font-weight-normal">Receive international certificate or degree</h4>
                                    <p class="d-block font-weight-light">Lorem ipsum dolor glavrida epibus leo ulla
                                          ambco mattis nullae.
                                    </p>
                              </div>
                        </div>
                  </div>

            </div>
      </div>
</div>