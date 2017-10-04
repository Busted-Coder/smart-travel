<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Search Results</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a></li>
                  <li><a href="#" class="text-white">Pages</a></li>
                  <li>Search Results
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </header>
      <!-- Page Contents-->
      <main class="page-content">
        <!-- Search Results-->
        <section class="section-90 section-md-111 text-sm-left">
          <div class="shell">
            <div class="range range-xs-center range-md-left">
              <div class="cell-sm-10 cell-md-8">
                <div class="form-search-results">
                  <!-- RD Search Form-->
                  <form action="<?php echo site_url('index.php/nav_search/search') ?>" method="GET" class="form-search rd-search">
                    <div class="reveal-xs-inline-block">
                      <div class="form-group">
                        <label for="search-results" class="form-label form-search-label">Search...</label>
                        <input id="search-results" type="text" name="s" autocomplete="off" class="form-search-input form-control">
                      </div>
                    </div>
                    <div class="reveal-xs-inline-block offset-top-10 offset-xs-top-0">
                      <div class="form-search-submit">
                        <button type="submit" class="btn btn-ripe-lemon">search</button>
                      </div>
                    </div>
                  </form>
                  <div class="rd-search-results offset-top-40 offset-md-top-78"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>