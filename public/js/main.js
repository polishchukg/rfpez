// Generated by CoffeeScript 1.3.3
(function(){var e;e=function(){var e,t,n;e=$(".vendor-image-url input");t=e.closest(".vendor-image-url").find(".vendor-image-preview-frame");n=t.find("img");return n.attr("src",e.val())};$(document).on("click","#add-deliverable-button",function(){return $(".deliverables-row:eq(0)").clone().appendTo(".prices-table tbody").find("input").val("")});$(document).on("click",".remove-deliverable",function(){if($(".deliverables-row").length!==1)return $(this).closest(".deliverables-row").remove()});$(document).on("click",".show-dismiss-modal",function(){var e,t;e=$(this);t=$("#dismiss-modal");t.find(".company-name").text(e.data("vendor-company-name"));t.find("textarea").val("");t.find("button").button("reset");t.modal("show");t.off(".rfpez-dismiss");return t.on("click.rfpez-dismiss",".dismiss-btn",function(){$(this).button("loading");return $.ajax({url:"/contracts/"+e.data("contract-id")+"/bids/"+e.data("bid-id")+"/dismiss",data:{reason:t.find("select[name=reason]").val(),explanation:t.find("textarea[name=explanation]").val()},type:"GET",success:function(n){if(n.status==="already dismissed"||"success"){t.modal("hide");return e.data("remove-from-list")?e.closest("."+e.data("remove-from-list")).remove():window.location.reload()}}})})});$(document).on("submit","#ask-question-form",function(e){var t,n;e.preventDefault();n=$(this);t=n.find("button");t.button("loading");return $.ajax({url:"/questions",data:{contract_id:n.find("input[name=contract_id]").val(),question:n.find("textarea[name=question]").val()},type:"POST",success:function(e){var r;t.button("reset");n.find("textarea[name=question]").val("");if(e.status==="success"){r=$(e.html);r.hide();$(".questions").append(r);return r.fadeIn(300)}return alert("error!")}})});$(document).on("blur",".vendor-image-url input",e);$(document).on("click",".answer-question-toggle",function(){var e,t,n;e=$(this);n=$(this).closest(".question-wrapper");t=$("#answer-question-form");t.find("input[name=id]").val(n.data("id"));t.find("textarea[name=answer]").val("");t.appendTo(n);return t.show()});$(document).on("submit","#answer-question-form",function(e){var t,n;e.preventDefault();t=$(this);n=t.closest(".question-wrapper");return $.ajax({url:t.attr("action"),type:"post",data:{id:t.find("input[name=id]").val(),answer:t.find("textarea[name=answer]").val()},success:function(e){var r;if(e.status==="success"){t.hide();t.prependTo("body");n.find(".answer-question").remove();r=$(e.html);r.find(".answer").hide();n.replaceWith(r);return r.find(".answer").fadeIn(300)}return alert("error")}})});$(function(){return e()})}).call(this);