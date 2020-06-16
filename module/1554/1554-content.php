<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1554 mt-lg-5 mt-3">
      <div class="container container-custom">
            <div class="row d-flex justify-content-center align-items-center">
                  <div class="col-lg-4 col-md-6 col-12">
                        <form>
                              <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Name">

                              </div>
                              <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                          aria-describedby="emailHelp" placeholder="Email">
                              </div>
                              <div class="form-group">
                                    <input type="tel" class="form-control" id="exampleInputPhone1" pattern="[0-9()#&+*-=.]+"
                                          placeholder="Phone number" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                              </div>
                              <div class="form-group">
                                    <textarea name="message" rows="3" class="w-100" placeholder="Message"></textarea>
                              </div>
                              <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label check" for="exampleCheck1">I allow to process my personal data</label>
                              </div>
                              <button type="submit" class="btn btn-submit text-white pl-3 pr-3"><span class="m-0">Send request</span></button>
                        </form>
                  </div>
            </div>
      </div>
</div>