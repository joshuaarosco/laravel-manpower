<header id="scroll-down" class="page_header header_white floating_logo columns_padding_0 table_section">
	<div class="container-fluid">
		<div class="row">
			<div class="top-main-menu text-left">
                            <!-- main nav start -->
                @include('frontend.web._components.nav')
                <!-- eof main nav -->
				<span class="toggle_menu"><span></span></span>
			</div>
            			
                      

            <div class="top-menu-buttons text-center">
				<ul class="inline-dropdown inline-block">
                    <li class="dropdown login-dropdown right">
                        <a class="header-button" href="{{ route('backoffice.auth.login') }}">
							<i class="rt-icon2-user-outline"></i>
                        </a>
                    </li>
                    <li class="dropdown">
						<a href="#" class="search_modal_button header-button">
							<i class="rt-icon2-zoom-outline"></i>
						</a>
                    </li>
                </ul>

            </div>
            <!-- <div class="qoute-header dropdown">
                <a class="header-button" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">Get a Manpower<br>
                <span>Don’t hesitate to ask</span>
                </a>
                <div class="dropdown-menu">
                    <form class="contact-form" method="post" action="#">
                        <p class="contact-form-name">
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
                        </p>
                        <p class="contact-form-email">
                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Adress">
                        </p>
                        <p class="contact-form-phone">
                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                        </p>
                        <p class="contact-form-topic">
                            <input type="text" aria-required="true" size="30" value="" name="topic" id="topic" class="form-control" placeholder="Topic">
                        </p>
                        <p class="contact-form-message">
                            <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Decription"></textarea>
                        </p>
                        <p class="contact-form-submit topmargin40">
                        <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button round-icon colordark">Send Request <i class="rt-icon2-tick-outline"></i></button>
                        </p>
                    </form>
                </div>
            </div>  -->
		</div>
	</div>
</header>