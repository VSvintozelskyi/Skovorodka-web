<div class="popup" id="reg-popup">
	<div class="popup__body">
		<div class="popup__content">
			<a href="#" class="popup__close close-popup"><span>&times;</span></a>
			<div class="popup__title">Регистрация</div>
			<div class="popup__second-title">Детали учетной записи</div>
			<div class="popup__notes">Поля, помеченные звездочкой, обязательны для заполнения</div>
			<div class="popup__inner">
				<div class="popup__reg">
					<p class="popup__subtitle">Логин<span class="popup__star">*</span></p>
					<input type="text" name="login" class="popup__field" id="reg-login">
					<p class="popup__subtitle">e-mail<span class="popup__star">*</span></p>
					<input type="text" name="email" class="popup__field" id="reg-email">
					<p class="popup__subtitle">Номер телефона<span class="popup__star">*</span></p>
					<input type="text" name="phone" class="popup__field" id="reg-phone">
					<p class="popup__subtitle">Придумайте пароль<span class="popup__star">*</span></p>
					<input type="text" name="password" class="popup__field" id="reg-password">
					<p class="popup__subtitle">Подтвердите пароль<span class="popup__star">*</span></p>
					<input type="text" name="password2" class="popup__field" id="reg-password2">
					<p class="popup__subtitle">Укажите дату рождения</p>
					<input type="date" id="reg-birthday" name="birthday" min="1920-01-01" max="<?php echo date('Y-m-d');?>">
					<p class="popup__subtitle">Укажите адрес проживания</p>
					<p class="popup__notes">Понадобится для оформления заказа</p>
					<input type="text" placeholder="Улица" name="address" class="popup__field" id="reg-address">
					<div class="popup__address address-popup">
						<div class="address-popup__item">
							<input type="text" placeholder="Дом" name="house-number" class="address-popup__small-field"
							id="reg-house-number">
						</div>
						<div class="address-popup__item">
							<input type="text" placeholder="Квартира" name="apartment-number"
							class="address-popup__small-field" id="reg-apartment-number">
						</div>
						<div class="address-popup__item">
							<input type="text" placeholder="Подъезд" name="entrance-number" class="address-popup__small-field"
							id="reg-entrance-number">
						</div>
						<div class="address-popup__item">
							<input type="text" placeholder="Код двери" name="door-code" class="address-popup__small-field"
							id="reg-door-code">
						</div>
						<div class="address-popup__item">
							<input type="text" placeholder="Этаж" name="floor" class="address-popup__small-field"
							id="reg-floor">
						</div>
					</div>
					<span id="reg-error" style="color:red;"></span>
					<input type="button" value="Подтвердить регистрацию" class="popup__register" id="reg-submit">
				</div>
				<p class="popup__toauth">Уже есть аккаунт? <a href="#auth-popup" class="popup-link"><span
					class="popup__reg-link">Авторизоваться</span></a>
				</p>
				<p class="popup__tomain"><a class="popup__tomain-link close-popup" href="##">На главную</a></p>
			</div>
		</div>
	</div>
</div>
<div class="popup" id="auth-popup">
	<div class="popup__body">
		<div class="popup__content">
			<a href="#" class="popup__close close-popup"><span>&times;</span></a>
			<div class="popup__title">Авторизация</div>
			<div class="popup__inner">
				<div class="popup__socials">
					<p>Войти через:</p>
					<img src="img/reg_auth/socialmedia-icons.png" alt="Socials">
				</div>
				<div class="popup__auth">
					<p class="popup__subtitle bold">Email пользователя</p>
					<input type="text" name="name" class="popup__field" id="auth-name">
					<p class="popup__subtitle bold">Пароль</p>
					<input type="text" name="password" class="popup__field" id="auth-password">
					<a href="##" class="popup__woutpassword">Забыли пароль?</a>
					<div class="pretty p-default p-round popup__rememberme">
						<input type="checkbox" name="popup__rememberme" />
						<div class="state p-primary">
							<label>Запомнить меня</label>
						</div>
					</div>
					<span id="auth-error" style="color:red;"></span>
					<input type="button" value="Войти" class="popup__signin" id="auth-submit">
				</div>
				<p class="popup__toreg">Нет аккаунта? <a href="#reg-popup" class="popup-link"><span
					class="popup__reg-link">Регистрация</span></a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="popup" id="constructor-popup">
	<div class="popup__body">
		<div class="popup__content constructor-popup__content">
			<a href="#" class="popup__close close-popup"><span>&times;</span></a>
			<div class="popup__title">Конструктор блинов</div>
			<div class="popup__inner">
				<div class="popup__fillings fillings-popup">
					<div class="fillings-popup__title">Выберите начинки</div>
					<div class="fillings-popup__body">
						<div class="fillings-popup__row">
							<div class="fillings-popup__column">
								<div class="fillings-popup__item"><span class="fillings-popup__sweet">Сладкие</span></div>
							</div>
							<div class="fillings-popup__column">
								<div class="fillings-popup__item"><span class="fillings-popup__nourishing">Сытные</span></div>
							</div>
							<div class="fillings-popup__column">
								<div class="fillings-popup__item"><span class="fillings-popup__vegetables">Овощи</span></div>
							</div>
							<div class="fillings-popup__column">
								<div class="fillings-popup__item"><span class="fillings-popup__fish">Рыба</span></div>
							</div>
							<div class="fillings-popup__column">
								<div class="fillings-popup__item"><span class="fillings-popup__sauces">Соусы</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="popup__constructor constructor-popup">
					<div class="constructor-popup__row">
						<img src="img/constructor/blin.png" alt="" class="constructor-popup__img">
						<fieldset class="constructor-popup__ingredients ingredients-popup">
							<legend class="ingredients-popup__legend">Ингредиенты</legend>
							<div class="ingredients-popup__body">
								<div class="ingredients-popup__column">
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Основа</div>
										<div class="ingredients-popup__price1">12 грн</div>
										<div class="ingredients-popup__count"></div>
										<div class="ingredients-popup__pricen">48 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Сыр</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__cheese" type="text" value="2" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">30 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Грибы</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__mushrooms" type="text" value="1" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">0 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Омлет</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__omelet" type="text" value="1" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">15 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Курица</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__chicken" type="text" value="0" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">0 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Свинина</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__pork" type="text" value="0" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">0 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Бекон</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__bacon" type="text" value="3" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">45 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Копчености</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__smoked" type="text" value="2" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">30 грн</div>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset class="constructor-popup__selected selected-popup">
							<legend class="selected-popup__legend">Выбрано</legend>
							<div class="selected-popup__body">
								<div class="selected-popup__column">
									<div class="selected-popup__item">
										<div class="selected-popup__subtitle">Сыр</div>
										<div class="selected-popup__count">x2</div>
										<div class="selected-popup__delete-btn"></div>
									</div>
									<div class="selected-popup__item">
										<div class="selected-popup__subtitle">Омлет</div>
										<div class="selected-popup__count">x2</div>
										<div class="selected-popup__delete-btn"></div>
									</div>
									<div class="selected-popup__item">
										<div class="selected-popup__subtitle">Бекон</div>
										<div class="selected-popup__count">x2</div>
										<div class="selected-popup__delete-btn"></div>
									</div>
									<div class="selected-popup__item">
										<div class="selected-popup__subtitle">Зелень (петрушка + укроп)</div>
										<div class="selected-popup__count">x2</div>
										<div class="selected-popup__delete-btn"></div>
									</div>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
				<a class="btn1 popup__tocart" href="##">В корзину <span>120 грн</span></a>
				<!-- </p> -->
			</div>
		</div>
	</div>
</div>
<div class="popup" id="selection-popup">
	<div class="popup__body">
		<div class="popup__content selection-popup__content">
			<a href="#" class="popup__close close-popup"><span>&times;</span></a>
			<div class="popup__inner">
				<div class="popup__selection selection-popup">
					<div class="selection-popup__row">
						<img id="sel-popup-img" alt="pasta" class="selection-popup__img">
						<div class="selection-popup__column">
							<div class="selection-popup__info">
								<div class="selection-popup__title" id="backend_selection-popup_title">$@$@$Паста Болоньезе</div>
								<div class="selection-popup__count" id="backend_selection-popup_count">$@$@$1 шт.</div>
								<div class="selection-popup__description" id="backend_selection-popup_descr">$@$@$Паста, мясной соус болоньезе, моцарелла, итальянские
								травы</div>
								<div class="selection-popup__price" id="backend_selection-popup_price">$@$@$120 грн</div>
								<div class="selection-popup__counter">
									<span class="cutlery-cart__count-counter">
										<button class="cutlery-cart__count-minus">-</button>
										<input id="selection-popup__pasta" type="text" value="2" disabled>
										<button class="cutlery-cart__count-plus">+</button>
									</span>
								</div>
							</div>
							<textarea placeholder="Комментарий к заказу..." name="selection-popup__textarea"
							id="selection-popup__textarea" class="selection-popup__textarea"></textarea>
							<span style="display: none;" id="sel-good-id"></span>
							<span id="sel-error" style="color:red;"></span>
							<a href="##" class="selection-popup__tocart-btn btn1" id="sel-submit">В КОРЗИНУ за <span id="sel-popup-total-price">120 грн</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>