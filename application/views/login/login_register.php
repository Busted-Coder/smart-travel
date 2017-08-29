    <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Login/Register</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="index.html" class="text-white">Home</a></li>
                  <li><a href="#" class="text-white">Pages</a></li>
                  <li>Login/Register
                  </li>
                </ul>
              </div>
            </div>
          </div>
    </section>
  </header>
</div>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
  <div class="page text-center">
      <!-- Page Contents-->
    <main class="page-content">
        <!-- Login and Register-->
        <section class="section-top-90 section-bottom-90 section-md-top-82 section-md-bottom-300 section-md-111 text-sm-left">
          <div class="shell">
            <div class="range range-xs-center range-md-left">
              <div class="cell-xs-10 cell-sm-8 cell-md-6 cell-lg-4">
                <!-- Responsive-tabs-->
                <div data-type="horizontal" class="responsive-tabs responsive-tabs-classic horizontal">
                  <ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default">
                    <li>Login</li>
                    <li>Register</li>
                  </ul>
                  <div data-group="tabs-group-default" class="resp-tabs-container text-sm-left tabs-group-default">
                    <div>
                      <!-- RD Mailform-->
                      <form ction="<?php echo site_url('index.php/auth/login') ?>" method="post" class="rd-mailform text-left" >
                        <div class="form-group form-group-label-outside">
                          
                          <input id="username" type="email" name="email" placeholder= "Enter E-mail" data-constraints="@Email @Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          
                          <input id="password" type="password" name="password" placeholder= "Password" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="offset-top-15 offset-sm-top-30 text-center text-md-left">
                          <div class="reveal-xs-inline-block text-middle">
                            <button type="submit" class="btn btn-ripe-lemon">sign in</button>
                          </div>
                          <div class="reveal-xs-inline-block inset-xs-left-15 offset-top-15 offset-sm-top-0">
                            <div class="reveal-xs-inline-block text-middle">
                              <p class="text-gray">or enter with</p>
                            </div>
                            <div class="reveal-xs-inline-block inset-xs-left-20 text-middle offset-top-10 offset-xs-top-0">
                              <ul class="list-inline list-inline-2 inset-left-0">
                                <li><a href="#" class="icon icon-xxs icon-silver-filled icon-circle fa fa-facebook"></a></li>
                                <li><a href="#" class="icon icon-xxs icon-silver-filled icon-circle fa fa-twitter"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div>
                      <!-- RD Mailform-->
                      <form class="rd-mailform text-left">
                        <div class="form-group form-group-label-outside">
                          <label for="register-name" class="form-label form-label-outside text-dark">Your name</label>
                          <input id="register-name" type="text" name="name" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <label for="register-email" class="form-label form-label-outside text-dark">Your e-mail</label>
                          <input id="register-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <label for="register-password" class="form-label form-label-outside text-dark">Password</label>
                          <input id="register-password" type="password" name="password" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <label for="register-repeat-password" class="form-label form-label-outside text-dark">Repeat a password</label>
                          <input id="register-repeat-password" type="password" name="password" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group offset-top-15 text-center text-md-left">
                          <label class="checkbox-inline">
                            <input name="register-radio" value="checkbox-1" type="checkbox" class="checkbox-custom"><span class="small p"><span class="small">I agree with the <a href="privacy.html" class="text-primary">Terms of use</a></span></span><span>.</span>
                          </label>
                        </div>
                        <div class="offset-top-15 offset-sm-top-20 text-center text-md-left">
                          <button type="submit" class="btn btn-ripe-lemon">Sign Up</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </main>
  </div>
</html>
 