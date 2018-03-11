$(function(){
    var num=$(".num").html();
    $(".left-price").html($(".price").html());
    $(".add").click(function(){
        num++;
        $(".num").html(num);
        $(".left-number").html(num);

        var total=$(".price").html()*$(".num").html();
        $(".right-total").html(parseFloat(total));
    })

    $(".sub").click(function(){
        if($(".num").html()<=1){
            $(".num").html(1);
            $(".left-number").html(1);
        }else{
            num--;

            $(".num").html(num);
            $(".left-number").html(num);
        }

        var total=$(".price").html()*num;
        $(".right-total").html(parseFloat(total));

    })


    $(".g1").click(function(){
        $(this).siblings().removeClass("g");
        $(this).addClass("g");
    })



})