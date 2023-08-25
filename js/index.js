$(".openbtn1").click(function () {//ボタンがクリックされたら
$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});

$(function() {
    $(".q_click").click(function() {
        alert('アラートのメッセージ')
        $(".q_click_menu").slideToggle("");
    });
});

// $(function() {
//     $(".q_click").click(function() {
//         $(".q_click_menu").toggleClass("q_click_menu_non");
//     });
// });