window.onload=function(){
	document.querySelector('#Form1Submit').onclick=function(){
		this.form.submit();
	}
	document.querySelector('#Form2Submit').onclick=function(){
		this.form.submit();
	}
}

//name: /(^[A-Z]{1}[a-z]{1,14})|(^[А-Я]{1}[а-я]{1,14})/
//mail: /^(?!.*@.*@.*$)(?!.*@.*\-\-.*\..*$)(?!.*@.*\-\..*$)(?!.*@.*\-$)(.*@.+(\..{1,11})?)$/
//tel: /^\+?\(?[0-9]+/