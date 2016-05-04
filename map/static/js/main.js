GLOBAL_OPTIONS = {} ;
GLOBAL_IMAGES = {} ;
GLOBAL_LANG = {} ;
GLOBAL_AJAX = {} ;

$(document).ready(function(){
	
	$.fn.formatPnoneNumber = function(){
		return this.each(function(){
			$(this).bind('keyup', function(){
				var num = this.value.replace( '+' , '' ).replace( /\D/g, '' ).split( /(?=.)/ ), i = num.length;
				if ( 0 <= i ) num.unshift( '+' );
				if ( 2 <= i ) num.splice( 2, 0, ' ' );
				if ( 5 <= i ) num.splice( 6, 0, ' ' );
				if ( 8 <= i ) num.splice( 10, 0, '-' );
				if ( 11 <= i ) num.splice( 13, 0, '-' );
				//if ( 12 <= i ) num.splice( 14, 0, '-' );
				//if ( 9 <= i ) num.splice( 12, 0, '-' );
				if ( 14 <= i ) num.splice( 17, num.length - 17 );
				this.value = num.join( '' );
			});
		});
	};
	
		
		
	/*! sprintf.js | Copyright (c) 2007-2013 Alexandru Marasteanu <hello at alexei dot ro> | 3 clause BSD license */(function(e){function r(e){return Object.prototype.toString.call(e).slice(8,-1).toLowerCase()}function i(e,t){for(var n=[];t>0;n[--t]=e);return n.join("")}var t=function(){return t.cache.hasOwnProperty(arguments[0])||(t.cache[arguments[0]]=t.parse(arguments[0])),t.format.call(null,t.cache[arguments[0]],arguments)};t.format=function(e,n){var s=1,o=e.length,u="",a,f=[],l,c,h,p,d,v;for(l=0;l<o;l++){u=r(e[l]);if(u==="string")f.push(e[l]);else if(u==="array"){h=e[l];if(h[2]){a=n[s];for(c=0;c<h[2].length;c++){if(!a.hasOwnProperty(h[2][c]))throw t('[sprintf] property "%s" does not exist',h[2][c]);a=a[h[2][c]]}}else h[1]?a=n[h[1]]:a=n[s++];if(/[^s]/.test(h[8])&&r(a)!="number")throw t("[sprintf] expecting number but found %s",r(a));switch(h[8]){case"b":a=a.toString(2);break;case"c":a=String.fromCharCode(a);break;case"d":a=parseInt(a,10);break;case"e":a=h[7]?a.toExponential(h[7]):a.toExponential();break;case"f":a=h[7]?parseFloat(a).toFixed(h[7]):parseFloat(a);break;case"o":a=a.toString(8);break;case"s":a=(a=String(a))&&h[7]?a.substring(0,h[7]):a;break;case"u":a>>>=0;break;case"x":a=a.toString(16);break;case"X":a=a.toString(16).toUpperCase()}a=/[def]/.test(h[8])&&h[3]&&a>=0?"+"+a:a,d=h[4]?h[4]=="0"?"0":h[4].charAt(1):" ",v=h[6]-String(a).length,p=h[6]?i(d,v):"",f.push(h[5]?a+p:p+a)}}return f.join("")},t.cache={},t.parse=function(e){var t=e,n=[],r=[],i=0;while(t){if((n=/^[^\x25]+/.exec(t))!==null)r.push(n[0]);else if((n=/^\x25{2}/.exec(t))!==null)r.push("%");else{if((n=/^\x25(?:([1-9]\d*)\$|\(([^\)]+)\))?(\+)?(0|'[^$])?(-)?(\d+)?(?:\.(\d+))?([b-fosuxX])/.exec(t))===null)throw"[sprintf] huh?";if(n[2]){i|=1;var s=[],o=n[2],u=[];if((u=/^([a-z_][a-z_\d]*)/i.exec(o))===null)throw"[sprintf] huh?";s.push(u[1]);while((o=o.substring(u[0].length))!=="")if((u=/^\.([a-z_][a-z_\d]*)/i.exec(o))!==null)s.push(u[1]);else{if((u=/^\[(\d+)\]/.exec(o))===null)throw"[sprintf] huh?";s.push(u[1])}n[2]=s}else i|=2;if(i===3)throw"[sprintf] mixing positional and named placeholders is not (yet) supported";r.push(n)}t=t.substring(n[0].length)}return r};var n=function(e,n,r){return r=n.slice(0),r.splice(0,0,e),t.apply(null,r)};e.sprintf=t,e.vsprintf=n})(typeof exports!="undefined"?exports:window);
		
	
	function PAGE_INIT(){
	
	}

});

mainSite = {};

mainSite.postError = function(errorText, errorTitle){
	if (typeof(errorTitle) == "undefined") errorTitle = 'Ошибка';
	
	$('.uniPopup').find('.modal__title div').html(errorTitle);
	$('.uniPopup').find('.modal__text').html(errorText);
	
	$('.uniPopup').fadeIn(500);
};

// Shorter variant of the jquery ajax function.
function shortAjax(path, data, onSuccess, unique_name){

	if (unique_name === undefined){
		$.ajax({
			type: "GET",
			url: path,
			cache: false,
			data: data,
			success: onSuccess,
		});	
	}
	else {
		// Deletes multi-queries
		if (GLOBAL_AJAX[unique_name] !== undefined){
			if (typeof(GLOBAL_AJAX[unique_name]) !== undefined)	GLOBAL_AJAX[unique_name].abort();
		}
		
		GLOBAL_AJAX[unique_name] = $.ajax({
			type: "GET",
			url: path,
			cache: false,
			data: data,
			success: onSuccess,
		});		
	}
}

function smartAjax(path, data, onSuccess, onError, unique_name){
	
	var innerHandler = function(msg){
		//var steamid = arguments.callee.steamid ;
		
		try {
			
			msg = JSON.parse(msg);
			
		}
		catch (e){
			msg = {};
			msg.error = 'incorrectJSON';
		}
	
			
		if (typeof(arguments.callee.onSuccess) == "function" && msg.error == "false"){
			arguments.callee.onSuccess.apply(null, [msg]);
		}		


		
		if (typeof(arguments.callee.onError) == "function" && msg.error != "false"){
			arguments.callee.onError.apply(null, [msg]);
		}
		else {
			if (msg.error != "false"){
				if (msg.error_text !== undefined){
					mainSite.postError(msg.error_text);
				}
				else {
					console.log(msg.error);
				}			
			}					
		}
		
	};
	
	innerHandler.onSuccess = onSuccess ;
	innerHandler.onError = onError ;
	
	shortAjax(path, data, innerHandler, unique_name);
	
}

mainSite.resizeEqColumn = function(){
	
	$('.eq-column').height('initial');	
	
	/*equal hight*/
	var max_col_height = 0;
	$('.eq-column').each(function(){
		if ($(this).height() > max_col_height) {
			max_col_height = $(this).height();
		}
		console.log($(this).height());
	});
	$('.eq-column').height(max_col_height + 100);	
	
};


auth = {

	is_url: false,
	
	usePopup: function(){
		
		var container = $('div.authPopup');
		
		var auth_phone = container.find('.auth_phone').val();
		var auth_password = container.find('.auth_password').val();
		
		smartAjax('/ajax/ajax_auth.php', {
			context: 'authUser',
			auth_phone: auth_phone,
			auth_password: auth_password,
		}, function(msg){
				
				$('.yourInfoHelpUsToWin').fadeOut(500);
			
				if (auth.is_url)
					document.location.href = "/panel";
				
				if (!auth.is_url)
					document.location.reload();
	
		}, function(msg){
			
			alert(msg.error_text);
			
		});			
		
	},
	
	changePassword: function(){
		
		var container = $('div.container.profileEdit .passwordChangeContainer');
		
		var data = {} ;

		container.find('input.ajax_arg, textarea.ajax_arg').each(function(){
			data[$(this).attr('name')] = $(this).val();
		});

		data.context = 'changePassword';
		

		smartAjax('/ajax/ajax_auth.php', data, function(msg){
					
			mainSite.postError('Сохранено успешно.', 'Готово!');

			
		}, function(msg){

			mainSite.postError(msg.error_text, 'Ошибка!');
			
		});	
		
		
	},
	
	checkAuthOnHref: function(){
		if (auth.is_authed) return true ;
		
		auth.is_url = true ;
		
		$('.authPopup').fadeIn(500);
		
		return false ;
	},
	
};




fileUploader = {
	
	uploadIframeId: 0,
	upload_counter: 0,
	
	file_callback: '',
	
	beginUpload: function(_this){
		
		var form = $(_this).closest('form');

		form.attr({
			'action': '/ajax/ajax_attach.php?context=uploadAttachForTask&task_id=' + tasks.cur_task_id,
		});
		
		fileUploader.file_callback = form.attr('file_callback');
		
		fileUploader.sendForm(form[0], '', 'fileUploader.onFileUploaded(this);');
		
	},
	
	beginUploadInner: function(_this, url){
		
		var form = $(_this).closest('form');

		form.attr({
			'action': url,
		});
		
		fileUploader.file_callback = form.attr('file_callback');
		
		fileUploader.sendForm(form[0], '', 'fileUploader.onFileUploaded(this);');
				
	},
		
	sendForm: function (form, url, callback_name) {
	  if (fileUploader.upload_counter != 0) return ;
	  if (!document.createElement) return; // not supported
	  if (typeof(form)=="string") form=document.getElementById(form);
	  var frame= fileUploader.createIFrame(callback_name);

	  form.setAttribute('target', frame.id);

	  form.submit();
	},
	
	onFileUploaded: function(_this){
	
		if (fileUploader.upload_counter == 0){
			fileUploader.upload_counter++ ;
			return ;
		}
		
		var result = fileUploader.getIframeWindow(document.getElementById(fileUploader.uploadIframeId)).document.getElementsByTagName('body')[0].innerHTML;
		
	
		try {
			var msg = JSON.parse(result);
		}
		catch (e){
			mainSite.postError('Ошибка во входящих пакетах');
			return ;
		}		

		
		eval('var fn = ' + fileUploader.file_callback);
		
		fn.apply(null, [msg]);

		fileUploader.upload_counter = 0 ;
		
	},
	

	getIframeWindow: function (iframe_object) {
	  var doc;

	  if (iframe_object.contentWindow) {
		return iframe_object.contentWindow;
	  }

	  if (iframe_object.window) {
		return iframe_object.window;
	  } 

	  if (!doc && iframe_object.contentDocument) {
		doc = iframe_object.contentDocument;
	  } 

	  if (!doc && iframe_object.document) {
		doc = iframe_object.document;
	  }

	  if (doc && doc.defaultView) {
	   return doc.defaultView;
	  }

	  if (doc && doc.parentWindow) {
		return doc.parentWindow;
	  }

	  return undefined;
	},		

	createIFrame: function (callback_name) {
		var id = 'f' + Math.floor(Math.random() * 99999);
		fileUploader.uploadIframeId = id ;

		div = document.createElement('div');
		div.innerHTML = '<iframe style="display: none;" src="about:blank" id="'+id+'" name="'+id+'" onload="'+callback_name+'"></iframe>';
		document.body.appendChild(div);
		
		return document.getElementById(id);
	}
	
}

/*
	Import
*/


//base64_encode
var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(input){var output="";var chr1,chr2,chr3,enc1,enc2,enc3,enc4;var i=0;input=Base64._utf8_encode(input);while(i<input.length){chr1=input.charCodeAt(i++);chr2=input.charCodeAt(i++);chr3=input.charCodeAt(i++);enc1=chr1>>2;enc2=((chr1&3)<<4)|(chr2>>4);enc3=((chr2&15)<<2)|(chr3>>6);enc4=chr3&63;if(isNaN(chr2)){enc3=enc4=64}else if(isNaN(chr3)){enc4=64}output=output+this._keyStr.charAt(enc1)+this._keyStr.charAt(enc2)+this._keyStr.charAt(enc3)+this._keyStr.charAt(enc4)}return output},decode:function(input){var output="";var chr1,chr2,chr3;var enc1,enc2,enc3,enc4;var i=0;input=input.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(i<input.length){enc1=this._keyStr.indexOf(input.charAt(i++));enc2=this._keyStr.indexOf(input.charAt(i++));enc3=this._keyStr.indexOf(input.charAt(i++));enc4=this._keyStr.indexOf(input.charAt(i++));chr1=(enc1<<2)|(enc2>>4);chr2=((enc2&15)<<4)|(enc3>>2);chr3=((enc3&3)<<6)|enc4;output=output+String.fromCharCode(chr1);if(enc3!=64){output=output+String.fromCharCode(chr2)}if(enc4!=64){output=output+String.fromCharCode(chr3)}}output=Base64._utf8_decode(output);return output},_utf8_encode:function(string){string=string.replace(/\r\n/g,"\n");var utftext="";for(var n=0;n<string.length;n++){var c=string.charCodeAt(n);if(c<128){utftext+=String.fromCharCode(c)}else if((c>127)&&(c<2048)){utftext+=String.fromCharCode((c>>6)|192);utftext+=String.fromCharCode((c&63)|128)}else{utftext+=String.fromCharCode((c>>12)|224);utftext+=String.fromCharCode(((c>>6)&63)|128);utftext+=String.fromCharCode((c&63)|128)}}return utftext},_utf8_decode:function(utftext){var string="";var i=0;var c=c1=c2=0;while(i<utftext.length){c=utftext.charCodeAt(i);if(c<128){string+=String.fromCharCode(c);i++}else if((c>191)&&(c<224)){c2=utftext.charCodeAt(i+1);string+=String.fromCharCode(((c&31)<<6)|(c2&63));i+=2}else{c2=utftext.charCodeAt(i+1);c3=utftext.charCodeAt(i+2);string+=String.fromCharCode(((c&15)<<12)|((c2&63)<<6)|(c3&63));i+=3}}return string}}



 /*
   Функция возвращает окончание для множественного числа слова на основании числа  и массива окончаний
   @param  $number Integer Число на основе которого нужно сформировать окончание
   @param  $endingsArray  Array Массив слов или окончаний для чисел (1, 4, 5),
          например array('яблоко', 'яблока', 'яблок')
   @return String
 */
function niceEnding(number,endingArray){
number = number % 100;
if (number >= 11 && number <= 19) {
	ending = endingArray[2] ;
}
else {
	var i = number % 10;
	switch (i) {
	case 1:	ending = endingArray[0] ; break
	case 2:
	case 3:
	case 4:	ending = endingArray[1]; break
	default: ending = endingArray[2] ;
	}
}
return ending;
} 

 

