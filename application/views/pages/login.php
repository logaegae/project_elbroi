        <div id="main" class="site-main">
            <div class="custom-title-wrapper ">
                <div class="container">
                    <div class="page-title-wrapper">
                        <h1 class="page-title" >
                        	ACCOUNT
                        </h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Account</li>
                    </ol>
                </div>
            </div>

            <div class="columns container">

                <div class="block-login">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="block-customer-login">

                                <div class="block-title">
                                  로그인
                                </div>
                                <div class="block-content">
                                    <p class="text">안녕하세요, 엘브로이를 방문해주셔서 감사합니다.</p>

                                	<form class="loginForm">

                                        <div class="actions">
                                            <a href="" class="btn btn-face"><i class="fa fa-facebook" aria-hidden="true"></i>페이스북으로 로그인</a>
                                            <a href="" class="btn btn-twi"><i class="fa fa-twitter" aria-hidden="true"></i>트위터로 로그인</a>
                                        </div>
                                        <div class="form-group">
                                            <label>EMAIL<sup>*</sup></label>
                                            <input type="email" placeholder="" class="form-control loginEmail" name="email" value="<?php if( $this -> session -> userdata('saveAddress')){ echo $this -> session -> userdata('email');}?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="forPassword">PASSWORD</label>
                                            <input type="password" placeholder="" id="forPassword" class="form-control loginPassword" name="password">
                                        </div>
                                        <p class="message"></p>
                                        <div class="clearfix">
                                            <div class="radio pull-left">
                                                <label>
                                                    <input type="checkbox" value="Y" name="optionsRemember" class="loginOption">
                                                    <span>아이디 저장</span>
                                                </label>

                                            </div>
                                            <p class="help-block pull-right"><a href="">비밀번호를 잊으셨나요?</a></p>
                                        </div>
                                        <button class="btn btn-default btn-log" type="submit">로그인</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block-new-customer">

                                <div class="block-title">
                                  회원가입
                                </div>
                                <div class="block-content">
                                    <p class="text">아직 엘브로이의 회원이 아니신가요?</p>
                                    <form class="signupForm">
                                    <div class="form-group">
                                            <label>EMAIL <sup>*</sup></label>
                                            <input type="email" placeholder=""  class="form-control signupEmail">
                                        </div>
                                        <div class="form-group">
                                            <label>PASSWORD <sup>*</sup></label>
                                            <input type="password" placeholder="6~16자의 영문자와 숫자 혼용"  class="form-control signupPassword">
                                        </div>
                                        <div class="form-group">
                                            <label>CONFIRM PASSWORD<sup>*</sup></label>
                                            <input type="password" placeholder="비밀번호 재입력"  class="form-control signupRePassword">
                                        </div>
                                        <div class="form-group">
                                            <label>이름<sup>*</sup></label>
                                            <input type="text" placeholder=""  class="form-control signupName">
                                        </div>
                                        <div class="form-group" style="font-size:0;">
                                            <label>연락처<sup>*</sup></label><br />
                                            <input type="text" placeholder=""  class="form-control signupPhone1" style="width:30%; display:inline-block;">
                                            <span class="text-center"style="width:5%; display:inline-block; font-size:initial;">-</span>
                                            <input type="text" placeholder=""  class="form-control signupPhone2" style="width:30%; display:inline-block;">
											<span class="text-center" style="width:5%; display:inline-block; font-size:initial;">-</span>
                                            <input type="text" placeholder=""  class="form-control signupPhone3" style="width:30%; display:inline-block;">
                                        </div>

                                        <button class="btn btn-default btn-up" type="submit">회원가입</button>
                                    </form>
                                </div>
                                <div class="block-bottom">
                                    <span class="title">회원가입을 하시면 다양한 혜택을 드리고 있습니다  :  </span>
                                    <ul>
                                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Speed your way through the checkout.  </li>
                                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Track your orders easily.</li>
                                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i>keep a record  of all your purchases</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div><!-- site-main -->
<script>

	$('body').addClass('page-layout-1column');
// 	로그인
	$('.loginForm').submit(function(e){
		$.ajax({
			url: "account/login",
			type: "POST",
			data: {
				"<?php echo $this->security->get_csrf_token_name(); ?>" : '<?php echo $this->security->get_csrf_hash(); ?>',
				"email": $('.loginEmail').val(),
				"password": $('.loginPassword').val(),
				"optionsRemember" : $('.loginOption:checked').val() || 'N'
			},
			dataType: "json",
			success: function(result) {
				if(result["result"] == 'success'){
					$('.message').text('로그인 성공');
					location.href ='/';
				}else if(result["result"] == 'wrong'){
					$('.message').text('이메일 혹은 비밀번호를 확인해주세요');
				}else{
					$('.message').text('올바른 값을 입력해주세요');
				}
			},error:function(request,status,error){
				alert("ERROR 잠시후 다시 시도해 주세요.");
    			console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
			}
		});
		e.preventDefault();
	});
// 회원가입
	$('.signupForm').submit(function(e){

		var validation = true;

		($('.signupPassword').val() !== $('.signupRePassword').val()) ? validation = false : '';

		if(validation){
			$.ajax({
				url: "account/signup",
				type: "POST",
				data: {
					"<?php echo $this->security->get_csrf_token_name(); ?>" : '<?php echo $this->security->get_csrf_hash(); ?>',
					"email": $('.signupEmail').val(),
					"password": $('.signupPassword').val(),
					"re_password": $('.signupRePassword').val(),
					"name" : $('.signupName').val(),
					"phone" : $('.signupPhone1').val()+'-'+$('.signupPhone1').val()+'-'+$('.signupPhone1').val()
				},
				dataType: "json",
				success: function(result) {
					if(result["result"] == 'success'){
						alert('회원가입 성공');
					}else if(result["result"] == 'fail'){
						alert('회원가입 실패');
					}else{
						alert('입력 확인 필요');
					}
				},error:function(request,status,error){
					alert("ERROR 잠시후 다시 시도해 주세요.");
					console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				}
			});
		}else{
			alert('입력폼 다시 확인');
		}
		e.preventDefault();
	});

</script>
