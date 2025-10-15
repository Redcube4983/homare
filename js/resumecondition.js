//cookieを使用してFormの送信情報を記憶し次回接続時に復元,jQuery.cookie使用
//※要注意 現在の仕様ではpasswordまでCookieに記録
//※要注意 Cookieサイズが規定値(ブラウザに依存)を超えるとError400が発生
$(function(){
	var reccnt = 3; //記憶件数(2回移行前の復元については操作未定)
	var targetForm = '#rcsearch'; //記録するフォーム
	$.cookie.json = true; //JSONを使用して連想配列にて記録
	
	//設定値の復元
	var curcnt = $.cookie('curcnt') ? $.cookie('curcnt') : 0;
	var searchVars;
	var searchVarsJSON = $.cookie('searchVars' + curcnt);
	if( typeof searchVarsJSON !== "undefined" ){
		searchVars = JSON.parse(searchVarsJSON);
			for(wkKey in searchVars){
				var nameVal = searchVars[wkKey]['name'];
				if(  typeof $('*[name="' + nameVal + '"]').prop("tagName") !== "undefined" ){
				switch( $('*[name="' + nameVal + '"]').prop("tagName").toLowerCase() ){
					case 'select':
						$('select[name="' + nameVal + '"]').val( searchVars[wkKey]['value'] );
						break;
					case 'textarea':
						$('textarea[name="' + nameVal + '"]').html( searchVars[wkKey]['value'] );
						break;
					case 'input':
						if( $('input[name="' + nameVal + '"]').attr('type') === 'text' ) $('input[name="' + nameVal + '"]').val( searchVars[wkKey]['value'] );
						if( $('input[name="' + nameVal + '"]').attr('type') === 'password' ) $('input[name="' + nameVal + '"]').val( searchVars[wkKey]['value'] );
						if( $('input[name="' + nameVal + '"]').attr('type') === 'radio' ) $('input[name="' + nameVal + '"]').val([ searchVars[wkKey]['value'] ]);
						if( $('input[name="' + nameVal + '"]').attr('type') === 'checkbox' ) $('input[name="' + nameVal + '"][value="' + searchVars[wkKey]['value'] + '"]').prop( 'checked', true );
					default:
						break;
				}
			}
		}
	}

	//設定値の保存
	$(targetForm).submit(function(event){
		var reclim = 180; //日数で指定
		var recvarsArray = [];
		recvarsArray = $( '#' + $(this).attr('id') + ' input').serializeArray();
		recvarsArray = recvarsArray.concat( $( '#' + $(this).attr('id') + ' textarea').serializeArray() );
		var optionArray, optionHash;
		$( '#' + $(this).attr('id') + ' select').each(function(){
			var optionName = $(this).attr("name");
			optionArray = [];
			$(this).find("option:selected").each(function(){
				optionArray = optionArray.concat( this.value );
			});
			recvarsHash = { name: optionName , value: optionArray };
			recvarsArray = recvarsArray.concat( recvarsHash );
		});
		//recvarsArray[ recvarsArray.length ] = 
		var recvarsJSON = JSON.stringify( recvarsArray );
		curcnt = ( curcnt + 1 ) % reccnt;
		$.cookie('searchVars' + curcnt, recvarsJSON, { expires: reclim,  path: "/" });
		$.cookie('curcnt', curcnt, { expires: reclim,  path: "/" });
		return;
	});
});
