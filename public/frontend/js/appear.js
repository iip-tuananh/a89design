(function(e){e.fn.appear=function(t,n){var r=e.extend({data:undefined,one:true,accX:0,accY:0},n);return this.each(function(){var n=e(this);n.appeared=false;if(!t){n.trigger("appear",r.data);return}var i=e(window);var s=function(){if(!n.is(":visible")){n.appeared=false;return}var e=i.scrollLeft();var t=i.scrollTop();var s=n.offset();var o=s.left;var u=s.top;var a=r.accX;var f=r.accY;var l=n.height();var c=i.height();var h=n.width();var p=i.width();if(u+l+f>=t&&u<=t+c+f&&o+h+a>=e&&o<=e+p+a){if(!n.appeared)n.trigger("appear",r.data)}else{n.appeared=false}};var o=function(){n.appeared=true;if(r.one){i.unbind("scroll",s);var o=e.inArray(s,e.fn.appear.checks);if(o>=0)e.fn.appear.checks.splice(o,1)}t.apply(this,arguments)};if(r.one)n.one("appear",r.data,o);else n.bind("appear",r.data,o);i.scroll(s);e.fn.appear.checks.push(s);s()})};e.extend(e.fn.appear,{checks:[],timeout:null,checkAll:function(){var t=e.fn.appear.checks.length;if(t>0)while(t--)e.fn.appear.checks[t]()},run:function(){if(e.fn.appear.timeout)clearTimeout(e.fn.appear.timeout);e.fn.appear.timeout=setTimeout(e.fn.appear.checkAll,20)}});e.each(["append","prepend","after","before","attr","removeAttr","addClass","removeClass","toggleClass","remove","css","show","hide"],function(t,n){var r=e.fn[n];if(r){e.fn[n]=function(){var t=r.apply(this,arguments);e.fn.appear.run();return t}}})})(jQuery);
var indexs = $( ".seletc_city2 option:selected" ).val();
readTextFile("https://gist.githubusercontent.com/trungnguyen304/92c1f5b64f11e9563c299634e409f90b/raw/b255b6b11c37e8b22d736132561083464e94116f/vietnam_provinces_cities.json", function(text){
	var data = JSON.parse(text);
	var dis = '';
	var diss = '<option value="">Tất cả</option>';
	var property = 'name';
	var propertys = 'cities';
	var result = Object.keys(data);
	var i = 0;
	for (property in data) {
		dis = '<option value="' + result[i] + '">' + data[property].name + '</option>';
		$('.seletc_city2').append(dis);
		i++;
	};
	$('.choose_address2').on('change', '.seletc_city2', function(e) {
		e.preventDefault();
		var index =$( ".seletc_city2 option:selected" ).val();
		$('.seletc_distric2').empty();
		$('.seletc_distric2').append('<option value="">Tất cả</option>');
		if(index == '' ){
			
		}
		else{
			var output = data[index].cities; 
			var a = '';
			for (a in output) {
				diss = '<option value="' + a + '">' + output[a] + '</option>';
				$('.seletc_distric2').append(diss);
			};
		}
	});
	$('.choose_address2').on('change', '.seletc_distric2', function(e) {
		e.preventDefault();
		var index =$( ".seletc_distric2 option:selected" ).val();
	});
});
$(function(){
	Bizweb.queryParams = {};
	if (location.search.length) {
		for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
			aKeyValue = aCouples[i].split('=');
			if (aKeyValue.length > 1) {
				Bizweb.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
			}
		}
	} 
	jQuery(".search-filter-button").click(function(){
		var selectTag = jQuery(".tag-select");
		var tagArray = [];
		for (var i = 0; i < selectTag.length ; i++) {
			if (jQuery(selectTag[i]).val() != "") {
				tagArray.push(jQuery(selectTag[i]).val());
			}
		}
		var tag = tagArray.toString();
		if(tag != ''){
		tag = tag.replace(/,/g, ')AND(');
		location.href = "/search?query=tags:((Nhà đất bán)AND(" + tag + "))";
		}else{
			location.href = "/search?query=tags:((Nhà đất bán))";
		}
	});
	jQuery(".search-filter-button2").click(function(){
		var selectTag = jQuery(".tag-select2");
		var tagArray = [];
		for (var i = 0; i < selectTag.length ; i++) {
			if (jQuery(selectTag[i]).val() != "") {
				tagArray.push(jQuery(selectTag[i]).val());
			}
		}
		var tag = tagArray.toString();
		if(tag != ''){
		tag = tag.replace(/,/g, ')AND(');
		location.href = "/search?query=tags:((Nhà đất cho thuê)AND(" + tag + "))";
		}else{
		location.href = "/search?query=tags:((Nhà đất cho thuê))";
		}
	});
});