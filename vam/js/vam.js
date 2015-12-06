	/**
	 * @Project: Virtual Airlines Manager (VAM)
	 * @Author: Alejandro Garcia
	 * @Web http://virtualairlinesmanager.net
	 * Copyright (c) 2013 - 2015 Alejandro Garcia
	 * VAM is licensed under the following license:
	 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
	 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
	 */



// Route Live searcher

	

	$(function(){
			$("#search_result").hide();
			$('#routedeparture').keyup(function(){
				var search_dep = $('#routedeparture').val();
				var search_arr = $('#routearrival').val();
				if (search_dep.length==0 && search_arr.length==0)
                {
                    $("#no_search_result").show(1000);
                    $("#search_result").hide(1000);
                }
                else
                {
                    $("#no_search_result").hide(1000);
                    $("#search_result").show(1000);
                    $.post("ajax/searcher.php",{"search_dep":search_dep,"search_arr":search_arr},function(data){
                        $('.entry').html(data);	});
                }
			});
		});




	$(function(){

			$('#routearrival').keyup(function(){
                var search_dep = $('#routedeparture').val();
                var search_arr = $('#routearrival').val();
                if (search_dep.length==0 && search_arr.length==0)
                {
                    $("#no_search_result").show(1000);
                    $("#search_result").hide(1000);
                }
                else
                {
                    $("#no_search_result").hide(1000);
                    $("#search_result").show(1000);
                    $.post("ajax/searcher.php",{"search_dep":search_dep,"search_arr":search_arr},function(data){
                        $('.entry').html(data);	});
                }

			});
		});




