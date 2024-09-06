<!-- Register Modal -->
<div class="modal fade" id="registerPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert errorClass alert-danger mg-b-0" role="alert" style="display: none;">
			<strong></strong>
		</div>
        <form action="#">
          <div class="row gy-3 gy-sm-4">
          <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control" name="registerName" id="registerName" placeholder="Enter your name" required>
                    <label for="registerName">Enter your name</label>
                </div>
            </div>
            <div class="col-12" style="display: flex;">
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="registerPhone" id="registerPhone" placeholder="Enter your phone" onkeypress="return isNumberKey(event)" required>
                        <label for="registerPhone">Enter your phone</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" name="registerEmail" id="registerEmail" placeholder="Enter your email"  required>
                        <label for="registerEmail">Enter your e-mail</label>
                    </div>
                </div>
            </div>
            
            <div class="col-12" style="display: flex;">
                <div class="col-6">
                    <div class="form-floating">
                      <input type="password" class="form-control" name="registerPassword" id="registerPassword" placeholder="Enter password" required>
                      <label for="registerPassword">Enter your password</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Re-enter your password" required>
                        <label for="confirmPassword">Re-enter your password</label>
                    </div>
                </div>
            </div>

            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="address_one" id="address_one" placeholder="Enter address line one" required>
                <label for="address_one">Enter your address line one</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="address_two" id="address_two" placeholder="Enter address line two" required>
                <label for="address_two">Enter your address line two</label>
              </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <span><b>Already registered with us ? <a href="javascript:void(0)" onclick="showLoginForm()">Login Now</a></b></span>
                </div>
            </div>
            <div class="col-12">
              <a href="javascript:void(0)" onclick="register()" class="primary-btn w-100 btn btn-primary">Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="loginPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="alert alert-danger mg-b-0" role="alert" style="display: none;">
			<strong></strong>
		</div>
        <form method="POST">
          <div class="row gy-3 gy-sm-4">
            <div class="col-12">
              <div class="form-floating">
                <input type="email" class="form-control" name="loginEmail" id="loginEmail" placeholder="Enter your email">
                <label for="email">Enter your e-mail</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="password" class="form-control" name="loginPassword" id="loginPassword" placeholder="Enter password">
                <label for="password">Enter your password</label>
              </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <span><b>Haven't registered yet? <a href="javascript:void(0)" onclick="showRegisterForm()">Register Now</a></b></span>
                </div>
            </div>
            <div class="col-12">
              <a href="javascript:void(0)" class="primary-btn w-100 btn btn-primary" onclick="loginUser()">Log In</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
    function showLoginForm(){
        $('.alert').hide().find('strong').text('');
        $('#registerPopUp').modal('hide');
        $('#loginPopUp').modal('show');
    }

    function showRegisterForm(){
        $('.errorClass').hide().find('strong').text('');
        $('#loginPopUp').modal('hide');
        $('#registerPopUp').modal('show');
    }
    
    function loginUser(){
        
        var email = $('#loginEmail').val();
        var password = $('#loginPassword').val();

        if (!email) {
            $('.alert').show().find('strong').text('Please enter email id !');
            return; 
        }

        if (!password) {
            $('.alert').show().find('strong').text('Please enter password !');
            return; 
        }

        $.ajax({
            type: 'POST',
            url: 'functions/auth/login.php',
            data: {
                email:email,
                password:password,
            } ,
            success: function(response){
                var result = JSON.parse(response);

                if (result.error_login) {
                    $('.alert').show().find('strong').text(result.error);
                } else {
                    $('.alert').hide();
                    window.location.href = "index.php";
                }
                
            },
            error: function() {
                $('.alert').show().find('strong').text('An error occurred while processing your request.');
            }
        });

    }

    function handleShopClick(page){
        <?php if (isset($_SESSION['customer_id'])) { ?>
            if(page == 'shop'){
                window.location.href = "product.php";
            }else if(page == 'aboutus'){
                window.location.href = "about-us.php";
            }
        <?php } else { ?>
            $('#loginPopUp').modal('show');
        <?php } ?>
    }

    function handleProductClick(productId) {
        <?php if (isset($_SESSION['customer_id'])) { ?>
            window.location.href = "product-details.php?id=" + productId;
        <?php } else { ?>
            $('#loginPopUp').modal('show');
        <?php } ?>
    }
    
    
    function register(){
        
        var name = $('#registerName').val();
        var email = $('#registerEmail').val();
        var phone = $('#registerPhone').val();
        var password = $('#registerPassword').val();
        var confirmPassword = $('#confirmPassword').val();

        var address_one = $('#address_one').val();
        var address_two = $('#address_two').val();

        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!name) {
            showError('Please enter your name!');
            return;
        }

        if (!email) {
            showError('Please enter your email id!');
            return;
        }

        if (!emailRegex.test(email)) {
            showError('Please enter a valid email id!');
            return;
        }

        if (!phone) {
            showError('Please enter your phone number!');
            return;
        }

        if (!password) {
            showError('Please enter your password!');
            return;
        }

        if (!confirmPassword) {
            showError('Please enter confirm password!');
            return;
        }

        if (password !== confirmPassword) {
            showError('Passwords do not match! Please re-enter.');
            $('#confirmPassword').val('');
            return;
        }

        if (!address_one) {
            showError('Please enter address line one!');
            return;
        }

        if (!address_two) {
            showError('Please enter address line two!');
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'functions/auth/register.php',
            data: {
                name:name,
                email:email,
                phone:phone,
                password:password,
                address_one:address_one,
                address_two:address_two,
            } ,
            success: function(response){
                var result = JSON.parse(response);
                
                if (result.success == true) {
                    $('#registerPopUp').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Registration Successful',
                        text: 'Please wait for your profile verification.',
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Registration Failed',
                        text: 'Please try again or contact admin.',
                    });
                }
            },
            error: function() {
                showError('An error occurred while processing your request. Please try again.');
            }
        });
    }   

    function showError(message) {
        $('.errorClass').show().find('strong').text(message);
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

</script>