		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-info">
					<div class="modal-header">
						
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						
					</div>
						<div class="modal-body">
							<div class="compose-grids">
					<form name="sentMessage" id="contactForm" novalidate>				
                        <div class="control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Имя</label>
							<div class="input-group">
								<span class="input-group-addon">&#9786;</span>
                                <input type="text" class="form-control" placeholder="Имя" id="name" required 	data-validation-required-message="Пожалуйста введите ваше имя.">
							</div>	
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
							<div class="input-group">
								<span class="input-group-addon">&#9993;</span>
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Пожалуйста введите ваш email.">
							</div>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Номер телефона</label>
							<div class="input-group">
								<span class="input-group-addon">&#9990;</span>
                                <input type="tel" class="form-control" placeholder="Номер телефона" id="phone" required data-validation-required-message="Пожалуйста введите ваш номер телефона.">
							</div>	
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
				
                        <div class="control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Сообщение</label>
                                <textarea rows="5" class="form-control" placeholder="Сообщение" id="message" required data-validation-required-message="Пожалуйста напишите ваше сообщение."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg pull-right">Отправить</button>								
                            </div>
                        </div>
                    </form>		
											
							
							</div>
					</div>
				</div>
			</div>
		</div>
