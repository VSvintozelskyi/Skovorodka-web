function updateselectionpopup(title,count,descr,price, id, sel_amount){
	document.getElementById("backend_selection-popup_title").innerHTML = title;//decodeURI(title).replace( /\+/g, ' ' );
	document.getElementById("backend_selection-popup_count").innerHTML = count + " шт.";
	document.getElementById("backend_selection-popup_descr").innerHTML = descr;//decodeURI(descr).replace( /\+/g, ' ' );
	document.getElementById("backend_selection-popup_price").innerHTML = price + " грн";
	document.getElementById("sel-good-id").innerHTML = id;
	document.getElementById("sel-popup-img").src = "img/backend/goods/"+id+"/selection.png";
	document.getElementById("selection-popup__pasta").value = sel_amount;
	updateTotalPrice();
	// document.getElementById("backend_selection-popup_cound").innerHTML = name;
}

function logout(redirect=false, redirectURL="index.php"){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var resp = this.responseText;
        if(resp=="ok"){
        	if(redirect)
        		window.location.replace(redirectURL);
        	else
        		window.location.reload(true); 
        }
      }
    };
    xmlhttp.open("GET","logout.php",true);
    xmlhttp.send();
}

function reghandler(event){
	var login = encodeURI(document.getElementById("reg-login").value);
	var email = encodeURI(document.getElementById("reg-email").value);
	var phone = encodeURI(document.getElementById("reg-phone").value);
	var pass = encodeURI(document.getElementById("reg-password").value);
	var pass2 = encodeURI(document.getElementById("reg-password2").value);
	var birthday = encodeURI(document.getElementById("reg-birthday").value);
	var adress = encodeURI(document.getElementById("reg-address").value);
	var house = encodeURI(document.getElementById("reg-house-number").value);
	var apartment = encodeURI(document.getElementById("reg-apartment-number").value);
	var entrance = encodeURI(document.getElementById("reg-entrance-number").value);
	var code = encodeURI(document.getElementById("reg-door-code").value);
	var floor = encodeURI(document.getElementById("reg-floor").value);
	var data = `login=${login}&email=${email}&phone=${phone}&pass=${pass}&pass2=${pass2}&birthday=${birthday}&adress=${adress}&house=${house}&apartment=${apartment}&entrance=${entrance}&code=${code}&floor=${floor}`;
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var resp = this.responseText;
        if(resp=="ok"){
        	window.location.reload(true); 
        }else{
        	document.getElementById("reg-error").innerHTML = resp;
        }
      }
    };
    xmlhttp.open("POST","reguser.php",true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xmlhttp.send(data);
}

document.getElementById("reg-submit").addEventListener ("click", reghandler);

function authhandler(){
	var log = encodeURI(document.getElementById("auth-name").value);
	var pass = encodeURI(document.getElementById("auth-password").value);
	var data = `email=${log}&pass=${pass}`;
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
			var resp = this.responseText;
			if(resp == "ok")
				window.location.reload(true); 
			else
				document.getElementById("auth-error").innerHTML = resp;
    	}
    };
    xmlhttp.open("POST","authuser.php",true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xmlhttp.send(data);
}

document.getElementById("auth-submit").addEventListener ("click", authhandler);

function addToCart(){
	var amount = document.getElementById("selection-popup__pasta").value;
	var goodid = document.getElementById("sel-good-id").innerHTML;
	var data = `goodid=${goodid}&amount=${amount}`;
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
			var resp = this.responseText;
			if(resp == "ok")
				window.location.reload(true); 
			else
				document.getElementById("sel-error").innerHTML = resp;
    	}
    };
    xmlhttp.open("POST","addtocart.php",true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xmlhttp.send(data);
}

document.getElementById("sel-submit").addEventListener ("click", addToCart);

function removeFromCart(id){
	var data = `goodid=${id}`;
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
			var resp = this.responseText;
			if(resp == "ok")
				window.location.reload(true); 
    	}
    };
    xmlhttp.open("POST","removefromcart.php",true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xmlhttp.send(data);
}

function checkout(){
	var xmlhttp = new XMLHttpRequest();
	var data = "amount="+document.getElementById("cutlery-cart__standart").value;
    xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
			var resp = this.responseText;
			if(resp == "ok")
				window.location.href = "delivery.php";
    	}
    };
    xmlhttp.open("POST","setcultery.php",true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xmlhttp.send(data);
}

function confirm_order(){
	var street = document.getElementById("delivery-cart__street").value;
	var house = document.getElementById("delivery-house-number").value;
	var appartment = document.getElementById("delivery-apartment-number").value;
	var entrance = document.getElementById("delivery-entrance-number").value;
	var doorcode = document.getElementById("delivery-door-code").value;
	var floor = document.getElementById("delivery-floor").value;
	var adresstype = document.getElementById("delivery-cart__address").value;
	var phone = document.getElementById("delivery-cart__phonenumber").value;
	var comment = document.getElementById("delivery-cart__comment-textarea").value;

	var xmlhttp = new XMLHttpRequest();
	var data = `street=${street}&house=${house}&phone=${phone}&appartment=${appartment}&entrance=${entrance}&doorcode=${doorcode}&floor=${floor}&adresstype=${adresstype}&comment=${comment}`;
    xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
			var resp = this.responseText;
			if(resp == "ok")
				window.location.href = "done.php";
    	}
    };
    xmlhttp.open("POST","confirm_order.php",true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xmlhttp.send(data);
}