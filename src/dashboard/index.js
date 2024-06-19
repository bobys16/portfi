
  ///////////////////////////////////////////////////////////////
//                                                           //
//              JQUERY NATIVE FRAMEWORK                      //
//                  Author: BibElz                           //
//           Version 2.0.1 LTS (27-06-2021)                  //
//                                                           //
///////////////////////////////////////////////////////////////

    /// Local Storage define token and frontend authentication
    var local = localStorage;
    
    /// Quick Item Binding ///
    var click_path;
    var path;
    var main_content;
    const base_url = 'router';
	loader = $('#loader');
	$(document).ready(function() {
		bind_view();
		loader.fadeOut('slow');
	});

	function bind_view() {		
		main_content  = $('div[content-loader="true"]');
		$('[view="true"]').on('click',function(e) {
			var caller = $(this);
			click_path = "path="+$(this).attr('path');
			sender(base_url, "method=view&"+click_path, 'post', 'HTML',function(res) {
				main_content.html(res);
				$('.active').removeClass('active');
				caller.addClass('active');
				bind_form();
				
			});
		});
		return;
	}
    function bind_form() {
        $('[callrouter="true"]').on('submit',function(e) {
            e.preventDefault();
            path = $(this).attr('action');
            var post_data = $(this).serialize()+"&method=control&path="+path;
            sender(base_url, post_data, 'post', 'JSON', function(res){
                if(res.success == 'true') {
                    if (res.next_action !== null) {
                        setTimeout(function() {
                            location.replace(res.next_action);
                        }, 3000);
                    }                    
					if(res.next_view !== null) {
						setTimeout(function(){ $('[view="true"][path="'+res.next_view+'"]').click() },3000);
					}
					
					let Swalled = {
						title: res.title == null ? "Success!" : res.title,
						text: res.msg,
						icon: 'success',
						showCancelButton: false,
					}
					
					if(res.image_url !== null) {
					    Swalled.imageUrl = res.image_url;
					    Swalled.imageAlt = "Image";
					}
					
                	Swal.fire(Swalled);
					
                } else {
                	Swal.fire({
						title: "ERROR!",
						text: res.msg,
						icon: 'error',
						showCancelButton: false,
					})
                }
            });
        })
        return;
    }
    
    function sender(url, data, type, dataType, callback) {
        $.ajax({
            url: url,
            data: data,
            type: type,
            headers: {
                'EXECUTE': 'DONE'
            },
			beforeSend: function() {
				//$('#loader').css('opacity','1');
				loader.fadeIn();
			},
            success: function(r, textStatus, request) {
                
                if(dataType == "JSON") {
                    callback(JSON.parse(r));
                } else {
                    callback(r);
                }
                if(request.getResponseHeader('ELZ-CODE') == "ERROR") {
                    r = JSON.parse(r);
                    switch(r.action) {
                        case "login":
                            location.replace('login');
                            break;
                            
                        case "refresh":
                            location.replace('/');
                            break;
                        default: 
                            alert(r.msg);
                    }
                }
            },
			complete: function() {
				loader.fadeOut();
			},
            error: function(e) {
                console.log(e);
            }
        })
    }
   